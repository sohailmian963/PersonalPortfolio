<?php
// ============================================================
// contact.php — Contact Form Handler
// Accepts AJAX POST → validates → saves to DB → sends email
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/includes/db.php';

// ── Only accept POST requests ────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Method not allowed.']));
}

// ── CSRF / Origin check (basic) ──────────────────────────────
$allowed_origins = ['http://localhost', 'https://sohailmian.com']; // apna domain add karo
$origin = $_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_REFERER'] ?? '';
// In production uncomment the block below:
// if (!in_array(rtrim($origin, '/'), $allowed_origins, true)) {
//     http_response_code(403);
//     exit(json_encode(['success' => false, 'message' => 'Forbidden.']));
// }

// ── Rate Limiting (simple session-based) ────────────────────
session_start();
$now = time();
$window = 60;      // 1 minute window
$max_submissions = 3;

if (!isset($_SESSION['contact_times'])) {
    $_SESSION['contact_times'] = [];
}

// Remove timestamps older than the window
$_SESSION['contact_times'] = array_filter(
    $_SESSION['contact_times'],
    fn($t) => ($now - $t) < $window
);

if (count($_SESSION['contact_times']) >= $max_submissions) {
    http_response_code(429);
    exit(json_encode([
        'success' => false,
        'message' => 'Too many submissions. Please wait a moment and try again.'
    ]));
}

// ── Read & Sanitize Inputs ───────────────────────────────────
$raw = [
    'first_name' => $_POST['fname']    ?? '',
    'last_name'  => $_POST['lname']    ?? '',
    'email'      => $_POST['email']    ?? '',
    'subject'    => $_POST['subject']  ?? '',
    'message'    => $_POST['message']  ?? '',
];

// Strip tags and trim
$data = array_map(fn($v) => trim(strip_tags($v)), $raw);

// ── Server-side Validation ───────────────────────────────────
$errors = [];

if (empty($data['first_name']) || strlen($data['first_name']) > 100) {
    $errors['fname'] = 'Please enter a valid first name (max 100 characters).';
}

if (empty($data['last_name']) || strlen($data['last_name']) > 100) {
    $errors['lname'] = 'Please enter a valid last name (max 100 characters).';
}

if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

if (empty($data['subject']) || strlen($data['subject']) > 255) {
    $errors['subject'] = 'Please enter a subject (max 255 characters).';
}

if (strlen($data['message']) < 20 || strlen($data['message']) > 5000) {
    $errors['message'] = 'Message must be between 20 and 5000 characters.';
}

// Return validation errors
if (!empty($errors)) {
    http_response_code(422);
    exit(json_encode(['success' => false, 'errors' => $errors]));
}

// ── Save to Database ─────────────────────────────────────────
try {
    $pdo = getDB();

    $stmt = $pdo->prepare("
        INSERT INTO contact_messages
            (first_name, last_name, email, subject, message, ip_address, user_agent)
        VALUES
            (:first_name, :last_name, :email, :subject, :message, :ip, :ua)
    ");

    $stmt->execute([
        ':first_name' => $data['first_name'],
        ':last_name'  => $data['last_name'],
        ':email'      => $data['email'],
        ':subject'    => $data['subject'],
        ':message'    => $data['message'],
        ':ip'         => $_SERVER['REMOTE_ADDR'] ?? null,
        ':ua'         => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 500),
    ]);

    $insertId = $pdo->lastInsertId();

} catch (PDOException $e) {
    error_log('Contact form DB error: ' . $e->getMessage());
    http_response_code(500);
    exit(json_encode(['success' => false, 'message' => 'Database error. Please try again later.']));
}

// ── Send Email Notification ──────────────────────────────────
$to      = 'sohailmian@email.com'; // ← apna email yahan
$subject = '[Portfolio Inquiry] ' . $data['subject'];

$emailBody = "
New contact message received on your portfolio.\n
--------------------------------------------------
Name    : {$data['first_name']} {$data['last_name']}
Email   : {$data['email']}
Subject : {$data['subject']}
--------------------------------------------------
Message :
{$data['message']}
--------------------------------------------------
Received : " . date('Y-m-d H:i:s') . "
Record ID: #{$insertId}
";

$headers  = "From: noreply@sohailmian.com\r\n";
$headers .= "Reply-To: {$data['email']}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// mail() function — works on cPanel/shared hosting
// For production, use PHPMailer + SMTP for reliable delivery
@mail($to, $subject, $emailBody, $headers);

// ── Record submission time for rate limiting ─────────────────
$_SESSION['contact_times'][] = $now;

// ── Send confirmation email to sender ────────────────────────
$confirmSubject = "Thanks for reaching out, {$data['first_name']}!";
$confirmBody = "
Hi {$data['first_name']},

Thank you for your message. I've received your inquiry and will get back to you within 24 business hours.

Your message:
\"{$data['message']}\"

Best regards,
Sohail Mian
Full Stack Developer
sohailmian@email.com
";

$confirmHeaders  = "From: Sohail Mian <noreply@sohailmian.com>\r\n";
$confirmHeaders .= "Reply-To: sohailmian@email.com\r\n";

@mail($data['email'], $confirmSubject, $confirmBody, $confirmHeaders);

// ── Success Response ─────────────────────────────────────────
header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => "Message sent successfully! I'll be in touch within 24 hours.",
    'id'      => $insertId
]);
exit;
