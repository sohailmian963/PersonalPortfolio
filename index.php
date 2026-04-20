<?php

declare(strict_types=1);

$meta = [
    'title'       => 'Sohail Mian — Full Stack Developer',
    'description' => 'Full Stack Developer specializing in scalable, database-driven web applications and clean UI/UX.',
    'keywords'    => 'Full Stack Developer, PHP Developer, Web Developer, Peshawar, Sohail Mian',
    'canonical'   => 'https://sohailmian.com',
];

$developer = [
    'name'       => 'Sohail Mian',
    'title'      => 'Full Stack Developer',
    'degree'     => 'BS Computer Science',
    'university' => 'Agriculture University of Peshawar',
    'location'   => 'Peshawar, Pakistan',
    'email'      => 'sohailmian@email.com',
    'status'     => 'Open to Work',
    'github'     => '#',
    'linkedin'   => '#',
    'stats'      => ['3+' => 'Years Dev', '15+' => 'Projects', '6' => 'Core Skills'],
];

$skills = [
    [
        'icon'  => '🎨',
        'title' => 'Frontend',
        'tags'  => ['HTML5', 'CSS3 Grid', 'Flexbox', 'JavaScript', 'ES6+', 'Responsive Design'],
    ],
    [
        'icon'  => '⚙️',
        'title' => 'Backend',
        'tags'  => ['PHP OOP', 'MySQL', 'Database Design', 'REST APIs', 'Server Mgmt'],
    ],
    [
        'icon'  => '🧠',
        'title' => 'Concepts',
        'tags'  => ['Web Engineering', 'Cyber Security', 'Compiler Design', 'Algorithms', 'System Design'],
    ],
];

$projects = [
    [
        'num'   => '01 / Hospitality Tech',
        'icon'  => '🏨',
        'title' => 'Luxuria Admin Suite',
        'desc'  => 'A PHP-powered Hotel Management System featuring secure SQL database integration, guest analytics, and automated room management. Designed for high-throughput operations with full audit logging and role-based access control.',
        'stack' => ['PHP', 'MySQL', 'JS'],
        'link'  => '#',
    ],
    [
        'num'   => '02 / PropTech',
        'icon'  => '🏢',
        'title' => 'Elite Real Estate Portal',
        'desc'  => 'A dynamic property marketplace with advanced SQL filtering, responsive property grids, and high-performance asset loading. Supports multi-agent listings, live search, and client inquiry workflows optimized for conversion.',
        'stack' => ['PHP', 'SQL', 'CSS Grid'],
        'link'  => '#',
    ],
    [
        'num'   => '03 / Streaming',
        'icon'  => '🎬',
        'title' => 'Multimedia Engine',
        'desc'  => 'A specialized web interface engineered for optimized audio/video distribution with custom HTML5 controls and seamless streaming. Built with adaptive buffering logic and a minimal latency architecture for high-fidelity media delivery.',
        'stack' => ['HTML5', 'JS', 'CSS3'],
        'link'  => '#',
    ],
];

session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

function e(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= e($meta['description']) ?>" />
  <meta name="keywords" content="<?= e($meta['keywords'])    ?>" />
  <meta property="og:title" content="<?= e($meta['title'])       ?>" />
  <meta property="og:description" content="<?= e($meta['description']) ?>" />
  <meta property="og:type" content="website" />
  <link rel="canonical" href="<?= e($meta['canonical']) ?>" />
  <title>
    <?= e($meta['title']) ?>
  </title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet" />

  <style>
    :root {
      --bg: #0a0a0a;
      --surface: #171717;
      --surface2: #1f1f1f;
      --border: rgba(255, 255, 255, 0.07);
      --accent: #6366f1;
      --accent-dim: rgba(99, 102, 241, 0.15);
      --accent-glow: rgba(99, 102, 241, 0.35);
      --text: #f4f4f5;
      --text-muted: #71717a;
      --text-sub: #a1a1aa;
      --radius-sm: 8px;
      --radius-md: 14px;
      --radius-lg: 22px;
      --nav-h: 68px;
      --section-gap: 120px;
      --max-w: 1120px;
      --ease-out: cubic-bezier(.22, .68, 0, 1.2);
      --ease-soft: cubic-bezier(.4, 0, .2, 1);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    ::selection {
      background: var(--accent);
      color: #fff;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    section {
      padding: var(--section-gap) 0;
    }

    .container {
      max-width: var(--max-w);
      margin: 0 auto;
      padding: 0 24px;
    }

    ::-webkit-scrollbar {
      width: 4px;
    }

    ::-webkit-scrollbar-track {
      background: var(--bg);
    }

    ::-webkit-scrollbar-thumb {
      background: var(--accent);
      border-radius: 99px;
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
      opacity: 0.025;
      pointer-events: none;
      z-index: 9999;
    }

    .bg-grid {
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(rgba(99, 102, 241, .03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(99, 102, 241, .03) 1px, transparent 1px);
      background-size: 64px 64px;
      pointer-events: none;
      z-index: 0;
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      height: var(--nav-h);
      display: flex;
      align-items: center;
      backdrop-filter: blur(20px) saturate(180%);
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      background: rgba(10, 10, 10, 0.72);
      border-bottom: 1px solid var(--border);
      transition: box-shadow .3s var(--ease-soft);
    }

    nav.scrolled {
      box-shadow: 0 0 40px rgba(99, 102, 241, .08);
    }

    .nav-inner {
      max-width: var(--max-w);
      margin: 0 auto;
      padding: 0 24px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .nav-logo {
      font-size: .95rem;
      font-weight: 700;
      letter-spacing: -.5px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav-logo .dot {
      width: 8px;
      height: 8px;
      background: var(--accent);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--accent);
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1;
        transform: scale(1)
      }

      50% {
        opacity: .5;
        transform: scale(.8)
      }
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 6px;
      list-style: none;
    }

    .nav-links a {
      font-size: .82rem;
      font-weight: 500;
      color: var(--text-muted);
      padding: 6px 14px;
      border-radius: var(--radius-sm);
      transition: color .2s, background .2s;
    }

    .nav-links a:hover {
      color: var(--text);
      background: var(--surface);
    }

    .nav-cta {
      font-size: .82rem;
      font-weight: 600;
      background: var(--accent);
      color: #fff !important;
      padding: 8px 18px !important;
      border-radius: var(--radius-sm) !important;
      box-shadow: 0 0 20px var(--accent-glow);
    }

    .nav-cta:hover {
      opacity: .9;
      transform: translateY(-1px);
      background: var(--accent) !important;
    }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 4px;
      background: none;
      border: none;
    }

    .hamburger span {
      display: block;
      width: 22px;
      height: 2px;
      background: var(--text);
      border-radius: 2px;
      transition: all .3s;
    }

    .mobile-menu {
      display: none;
      position: fixed;
      top: var(--nav-h);
      left: 0;
      right: 0;
      background: rgba(10, 10, 10, 0.97);
      backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
      padding: 16px 24px 24px;
      z-index: 999;
      flex-direction: column;
      gap: 4px;
    }

    .mobile-menu.open {
      display: flex;
    }

    .mobile-menu a {
      font-size: .9rem;
      font-weight: 500;
      color: var(--text-muted);
      padding: 10px 14px;
      border-radius: var(--radius-sm);
      transition: color .2s, background .2s;
    }

    .mobile-menu a:hover {
      color: var(--text);
      background: var(--surface);
    }

    #hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: var(--nav-h);
      overflow: hidden;
    }

    #hero::after {
      content: '';
      position: absolute;
      top: 15%;
      left: 50%;
      transform: translateX(-50%);
      width: 800px;
      height: 500px;
      background: radial-gradient(ellipse, rgba(99, 102, 241, .18) 0%, transparent 70%);
      pointer-events: none;
    }

    .hero-inner {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 60px;
      align-items: center;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--accent-dim);
      border: 1px solid rgba(99, 102, 241, .25);
      color: #a5b4fc;
      font-size: .75rem;
      font-weight: 600;
      letter-spacing: .8px;
      text-transform: uppercase;
      padding: 6px 14px;
      border-radius: 99px;
      margin-bottom: 28px;
    }

    .hero-badge .blink {
      width: 6px;
      height: 6px;
      background: #6ee7b7;
      border-radius: 50%;
      animation: pulse 1.5s ease-in-out infinite;
    }

    h1 {
      font-size: clamp(2.6rem, 5.5vw, 4rem);
      font-weight: 800;
      line-height: 1.08;
      letter-spacing: -2px;
      margin-bottom: 20px;
    }

    h1 .accent {
      color: var(--accent);
    }

    .hero-sub {
      font-size: 1.05rem;
      color: var(--text-sub);
      max-width: 520px;
      margin-bottom: 40px;
    }

    .hero-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      margin-bottom: 56px;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--accent);
      color: #fff;
      font-size: .88rem;
      font-weight: 600;
      padding: 13px 26px;
      border-radius: var(--radius-sm);
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 24px var(--accent-glow);
      transition: transform .2s var(--ease-out), box-shadow .2s;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 32px var(--accent-glow);
    }

    .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      color: var(--text);
      font-size: .88rem;
      font-weight: 600;
      padding: 12px 26px;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      cursor: pointer;
      transition: border-color .2s, background .2s, transform .2s;
    }

    .btn-secondary:hover {
      border-color: rgba(255, 255, 255, .2);
      background: var(--surface);
      transform: translateY(-2px);
    }

    .hero-stats {
      display: flex;
      gap: 36px;
    }

    .stat-item {
      display: flex;
      flex-direction: column;
    }

    .stat-num {
      font-size: 1.6rem;
      font-weight: 800;
      letter-spacing: -1px;
    }

    .stat-label {
      font-size: .73rem;
      color: var(--text-muted);
      font-weight: 500;
      letter-spacing: .3px;
      text-transform: uppercase;
      margin-top: 2px;
    }

    .hero-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 28px;
      box-shadow: 0 40px 80px rgba(0, 0, 0, .5);
      position: relative;
    }

    .hero-card::before {
      content: '';
      position: absolute;
      inset: -1px;
      border-radius: inherit;
      background: linear-gradient(135deg, rgba(99, 102, 241, .25), transparent 60%);
      pointer-events: none;
      z-index: 0;
    }

    .hc-header {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 20px;
    }

    .hc-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }

    .hc-dot.red {
      background: #ff5f57
    }

    .hc-dot.yellow {
      background: #febc2e
    }

    .hc-dot.green {
      background: #28c840
    }

    .hc-title {
      font-size: .72rem;
      font-family: 'JetBrains Mono', monospace;
      color: var(--text-muted);
      margin-left: 8px;
    }

    .code-block {
      font-family: 'JetBrains Mono', monospace;
      font-size: .76rem;
      line-height: 1.8;
      color: var(--text-sub);
    }

    .code-block .kw {
      color: #c084fc
    }

    .code-block .fn {
      color: #60a5fa
    }

    .code-block .str {
      color: #6ee7b7
    }

    .code-block .cm {
      color: #4b5563
    }

    .code-block .var {
      color: var(--text)
    }

    .hc-footer {
      margin-top: 20px;
      padding-top: 16px;
      border-top: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .tech-pills {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
    }

    .pill {
      font-size: .65rem;
      font-weight: 600;
      letter-spacing: .5px;
      text-transform: uppercase;
      padding: 4px 9px;
      border-radius: 99px;
      border: 1px solid var(--border);
      color: var(--text-muted);
      background: var(--surface2);
    }

    .pill.active {
      background: var(--accent-dim);
      border-color: rgba(99, 102, 241, .3);
      color: #a5b4fc;
    }

    .section-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: .72rem;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 14px;
    }

    .section-eyebrow::before {
      content: '';
      width: 24px;
      height: 1px;
      background: var(--accent);
    }

    .section-title {
      font-size: clamp(1.8rem, 3.5vw, 2.5rem);
      font-weight: 800;
      letter-spacing: -1px;
      line-height: 1.1;
      margin-bottom: 16px;
    }

    .section-desc {
      font-size: .95rem;
      color: var(--text-sub);
      max-width: 520px;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 56px;
    }

    .skill-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 28px;
      position: relative;
      overflow: hidden;
      transition: border-color .3s, transform .3s var(--ease-out), box-shadow .3s;
    }

    .skill-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, var(--accent-dim), transparent);
      opacity: 0;
      transition: opacity .3s;
    }

    .skill-card:hover {
      border-color: rgba(99, 102, 241, .35);
      transform: translateY(-4px);
      box-shadow: 0 20px 48px rgba(0, 0, 0, .4);
    }

    .skill-card:hover::before {
      opacity: 1;
    }

    .skill-icon {
      width: 44px;
      height: 44px;
      background: var(--accent-dim);
      border-radius: var(--radius-sm);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 18px;
      font-size: 1.2rem;
      position: relative;
      z-index: 1;
    }

    .skill-card h3 {
      font-size: .85rem;
      font-weight: 700;
      color: var(--text-muted);
      letter-spacing: .5px;
      text-transform: uppercase;
      margin-bottom: 14px;
      position: relative;
      z-index: 1;
    }

    .skill-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      position: relative;
      z-index: 1;
    }

    .skill-tag {
      font-size: .75rem;
      font-weight: 500;
      padding: 5px 12px;
      background: var(--surface2);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      color: var(--text-sub);
      transition: border-color .2s, color .2s;
    }

    .skill-card:hover .skill-tag {
      border-color: rgba(99, 102, 241, .2);
      color: var(--text);
    }

    .projects-header {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 56px;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .project-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 30px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      position: relative;
      overflow: hidden;
      transition: transform .35s var(--ease-out), box-shadow .35s, border-color .35s;
    }

    .project-card::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--accent), #818cf8);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .4s var(--ease-out);
    }

    .project-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 32px 64px rgba(0, 0, 0, .5);
      border-color: rgba(99, 102, 241, .2);
    }

    .project-card:hover::after {
      transform: scaleX(1);
    }

    .project-num {
      font-family: 'JetBrains Mono', monospace;
      font-size: .7rem;
      color: var(--accent);
      font-weight: 500;
      letter-spacing: 1px;
    }

    .project-icon {
      width: 52px;
      height: 52px;
      background: var(--accent-dim);
      border-radius: var(--radius-sm);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      border: 1px solid rgba(99, 102, 241, .15);
    }

    .project-card h3 {
      font-size: 1.05rem;
      font-weight: 700;
      letter-spacing: -.3px;
    }

    .project-card p {
      font-size: .84rem;
      color: var(--text-muted);
      line-height: 1.7;
      flex: 1;
    }

    .project-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 16px;
      border-top: 1px solid var(--border);
    }

    .project-stack {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
    }

    .project-tag {
      font-size: .65rem;
      font-weight: 600;
      letter-spacing: .4px;
      text-transform: uppercase;
      padding: 3px 9px;
      background: var(--surface2);
      border: 1px solid var(--border);
      border-radius: 99px;
      color: var(--text-muted);
    }

    .arrow-btn {
      width: 34px;
      height: 34px;
      border-radius: var(--radius-sm);
      background: var(--surface2);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      color: var(--text-muted);
      font-size: 1rem;
      transition: background .2s, color .2s, border-color .2s;
      flex-shrink: 0;
      text-decoration: none;
    }

    .arrow-btn:hover {
      background: var(--accent);
      border-color: var(--accent);
      color: #fff;
    }

    .about-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .about-card-main {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 32px;
      position: relative;
    }

    .about-card-main::before {
      content: '';
      position: absolute;
      top: -1px;
      left: -1px;
      right: -1px;
      height: 2px;
      background: linear-gradient(90deg, var(--accent), #818cf8, transparent);
      border-radius: var(--radius-lg) var(--radius-lg) 0 0;
    }

    .profile-avatar {
      width: 72px;
      height: 72px;
      background: linear-gradient(135deg, var(--accent), #818cf8);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      font-weight: 800;
      color: #fff;
      margin-bottom: 20px;
      letter-spacing: -1px;
    }

    .about-card-main h3 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .about-card-main .role-text {
      font-size: .8rem;
      color: var(--accent);
      font-weight: 600;
      margin-bottom: 20px;
      font-family: 'JetBrains Mono', monospace;
    }

    .detail-rows {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .detail-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: .82rem;
      padding-bottom: 12px;
      border-bottom: 1px solid var(--border);
    }

    .detail-row:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }

    .detail-row .label {
      color: var(--text-muted);
      font-weight: 500;
    }

    .detail-row .value {
      color: var(--text);
      font-weight: 600;
      text-align: right;
    }

    .floating-badge {
      position: absolute;
      bottom: -16px;
      right: 24px;
      background: var(--accent);
      color: #fff;
      font-size: .75rem;
      font-weight: 700;
      padding: 10px 16px;
      border-radius: var(--radius-sm);
      box-shadow: 0 8px 24px var(--accent-glow);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .about-content {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .about-content p {
      font-size: .95rem;
      color: var(--text-sub);
      line-height: 1.75;
    }

    .about-content p strong {
      color: var(--text);
      font-weight: 600;
    }

    .edu-block {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 20px 24px;
      margin-top: 8px;
    }

    .edu-block h4 {
      font-size: .85rem;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .edu-block p {
      font-size: .78rem;
      color: var(--text-muted);
      margin: 0;
    }

    .about-visual {
      position: relative;
    }

    .contact-wrapper {
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      gap: 64px;
      align-items: start;
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 32px;
    }

    .contact-items {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 16px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      transition: border-color .2s;
    }

    .contact-item:hover {
      border-color: rgba(99, 102, 241, .3);
    }

    .ci-icon {
      width: 40px;
      height: 40px;
      background: var(--accent-dim);
      border-radius: var(--radius-sm);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .ci-label {
      font-size: .7rem;
      color: var(--text-muted);
      font-weight: 600;
      letter-spacing: .5px;
      text-transform: uppercase;
    }

    .ci-value {
      font-size: .88rem;
      font-weight: 600;
    }

    .contact-form {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 36px;
    }

    .form-title {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .form-subtitle {
      font-size: .82rem;
      color: var(--text-muted);
      margin-bottom: 28px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
      margin-bottom: 16px;
    }

    .form-group label {
      font-size: .75rem;
      font-weight: 600;
      color: var(--text-muted);
      letter-spacing: .4px;
      text-transform: uppercase;
    }

    .form-group input,
    .form-group textarea {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      color: var(--text);
      font-family: 'Inter', sans-serif;
      font-size: .88rem;
      padding: 12px 16px;
      outline: none;
      transition: border-color .2s, box-shadow .2s;
      width: 100%;
      resize: none;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
      color: var(--text-muted);
      opacity: .5;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: var(--accent);
      box-shadow: 0 0 0 3px var(--accent-dim);
    }

    .form-group input.error,
    .form-group textarea.error {
      border-color: #ef4444;
      box-shadow: 0 0 0 3px rgba(239, 68, 68, .12);
    }

    .error-msg {
      font-size: .72rem;
      color: #ef4444;
      display: none;
      font-weight: 500;
    }

    .error-msg.show {
      display: block;
    }

    .form-submit {
      width: 100%;
      background: var(--accent);
      color: #fff;
      font-size: .88rem;
      font-weight: 700;
      padding: 14px;
      border-radius: var(--radius-sm);
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 20px var(--accent-glow);
      transition: transform .2s, box-shadow .2s;
    }

    .form-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 28px var(--accent-glow);
    }

    .form-submit:disabled {
      opacity: .6;
      cursor: not-allowed;
      transform: none;
    }

    .alert {
      padding: 12px 16px;
      border-radius: var(--radius-sm);
      font-size: .84rem;
      font-weight: 500;
      margin-bottom: 16px;
      display: none;
    }

    .alert.show {
      display: block;
    }

    .alert.success {
      background: rgba(34, 197, 94, .1);
      border: 1px solid rgba(34, 197, 94, .3);
      color: #86efac;
    }

    .alert.error {
      background: rgba(239, 68, 68, .1);
      border: 1px solid rgba(239, 68, 68, .3);
      color: #fca5a5;
    }

    .toast {
      position: fixed;
      bottom: 28px;
      right: 28px;
      background: var(--surface);
      border: 1px solid #22c55e;
      color: var(--text);
      font-size: .85rem;
      font-weight: 600;
      padding: 14px 20px;
      border-radius: var(--radius-md);
      box-shadow: 0 12px 36px rgba(0, 0, 0, .4);
      display: flex;
      align-items: center;
      gap: 10px;
      transform: translateY(120%);
      opacity: 0;
      transition: transform .4s var(--ease-out), opacity .4s;
      z-index: 9000;
    }

    .toast.show {
      transform: translateY(0);
      opacity: 1;
    }

    .toast .check {
      color: #22c55e;
      font-size: 1.1rem;
    }

    footer {
      border-top: 1px solid var(--border);
      padding: 40px 0;
    }

    .footer-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .footer-left p {
      font-size: .8rem;
      color: var(--text-muted);
    }

    .footer-left span {
      color: var(--accent);
    }

    .footer-links {
      display: flex;
      gap: 8px;
    }

    .footer-link {
      width: 36px;
      height: 36px;
      border-radius: var(--radius-sm);
      background: var(--surface);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--text-muted);
      font-size: .95rem;
      transition: border-color .2s, color .2s, background .2s;
    }

    .footer-link:hover {
      background: var(--accent-dim);
      border-color: rgba(99, 102, 241, .3);
      color: var(--accent);
    }

    .divider {
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--border), transparent);
    }

    .fade-up {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity .65s var(--ease-soft), transform .65s var(--ease-soft);
    }

    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .fade-up:nth-child(1) {
      transition-delay: .0s
    }

    .fade-up:nth-child(2) {
      transition-delay: .08s
    }

    .fade-up:nth-child(3) {
      transition-delay: .16s
    }

    .fade-up:nth-child(4) {
      transition-delay: .24s
    }

    @media (max-width:960px) {
      .hero-inner {
        grid-template-columns: 1fr;
      }

      .hero-card {
        display: none;
      }

      .skills-grid {
        grid-template-columns: 1fr 1fr;
      }

      .projects-grid {
        grid-template-columns: 1fr 1fr;
      }

      .about-inner {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .contact-wrapper {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .projects-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
      }
    }

    @media (max-width:640px) {
      :root {
        --section-gap: 80px;
      }

      .nav-links {
        display: none;
      }

      .hamburger {
        display: flex;
      }

      .skills-grid {
        grid-template-columns: 1fr;
      }

      .projects-grid {
        grid-template-columns: 1fr;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      .hero-stats {
        gap: 24px;
      }

      h1 {
        font-size: 2.4rem;
        letter-spacing: -1.5px;
      }

      .footer-inner {
        flex-direction: column;
        gap: 16px;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="bg-grid" aria-hidden="true"></div>

  <nav id="navbar">
    <div class="nav-inner">
      <div class="nav-logo">
        <span class="dot"></span>
        <?= e($developer['name']) ?>
      </div>
      <ul class="nav-links">
        <li><a href="#skills">Stack</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact" class="nav-cta">Hire Me</a></li>
      </ul>
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <nav class="mobile-menu" id="mobileMenu">
    <a href="#skills" onclick="closeMobile()">Stack</a>
    <a href="#projects" onclick="closeMobile()">Projects</a>
    <a href="#about" onclick="closeMobile()">About</a>
    <a href="#contact" onclick="closeMobile()">Contact</a>
  </nav>

  <section id="hero">
    <div class="container">
      <div class="hero-inner">
        <div class="hero-left">
          <div class="hero-badge">
            <span class="blink"></span>
            Available for new projects
          </div>
          <h1>Building the<br /><span class="accent">Web's Next</span><br />Generation.</h1>
          <p class="hero-sub">
            Full Stack Developer specializing in scalable, database-driven applications with a focus on performance
            architecture and refined UI/UX.
          </p>
          <div class="hero-actions">
            <a href="#contact" class="btn-primary">
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 0-8 8-8-8" />
              </svg>
              Hire Me
            </a>
          </div>
          <div class="hero-stats">
            <?php foreach ($developer['stats'] as $num => $label): ?>
            <div class="stat-item">
              <span class="stat-num">
                <?= e($num) ?>
              </span>
              <span class="stat-label">
                <?= e($label) ?>
              </span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="hero-card">
          <div class="hc-header">
            <span class="hc-dot red"></span>
            <span class="hc-dot yellow"></span>
            <span class="hc-dot green"></span>
            <span class="hc-title">developer.php</span>
          </div>
          <div class="code-block">
            <span class="kw">class</span> <span class="fn">SohailMian</span> {<br />
            &nbsp;&nbsp;<span class="cm">// Identity</span><br />
            &nbsp;&nbsp;<span class="kw">public</span> <span class="var">$name</span> = <span class="str">"
              <?= e($developer['name']) ?>"
            </span>;<br />
            &nbsp;&nbsp;<span class="kw">public</span> <span class="var">$role</span> = <span class="str">"
              <?= e($developer['title']) ?>"
            </span>;<br />
            &nbsp;&nbsp;<span class="kw">public</span> <span class="var">$focus</span> = <span class="str">"Scalable
              Apps"</span>;<br />
            <br />
            &nbsp;&nbsp;<span class="cm">// Stack</span><br />
            &nbsp;&nbsp;<span class="kw">private</span> <span class="var">$frontend</span> = [<br />
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="str">"HTML5"</span>, <span class="str">"CSS3"</span>, <span
              class="str">"JS ES6+"</span><br />
            &nbsp;&nbsp;];<br />
            &nbsp;&nbsp;<span class="kw">private</span> <span class="var">$backend</span> = [<br />
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="str">"PHP OOP"</span>, <span class="str">"MySQL"</span><br />
            &nbsp;&nbsp;];<br />
            <br />
            &nbsp;&nbsp;<span class="kw">public function</span> <span class="fn">build</span>(<span
              class="var">$idea</span>) {<br />
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">return</span> <span class="str">"Production-ready
              App"</span>;<br />
            &nbsp;&nbsp;}<br />
            }
          </div>
          <div class="hc-footer">
            <div class="tech-pills">
              <span class="pill active">PHP</span>
              <span class="pill active">MySQL</span>
              <span class="pill">JS</span>
              <span class="pill">HTML5</span>
            </div>
            <div style="font-size:.7rem;color:var(--text-muted);font-family:'JetBrains Mono',monospace;">v
              <?= date('Y') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <section id="skills">
    <div class="container">
      <p class="section-eyebrow">Technical Arsenal</p>
      <h2 class="section-title">Full Stack Expertise</h2>
      <p class="section-desc">A precision-selected stack built for performance, reliability, and maintainability at
        scale.</p>

      <div class="skills-grid">
        <?php foreach ($skills as $skill): ?>
        <div class="skill-card fade-up">
          <div class="skill-icon">
            <?= $skill['icon'] ?>
          </div>
          <h3>
            <?= e($skill['title']) ?>
          </h3>
          <div class="skill-tags">
            <?php foreach ($skill['tags'] as $tag): ?>
            <span class="skill-tag">
              <?= e($tag) ?>
            </span>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <section id="projects">
    <div class="container">
      <div class="projects-header">
        <div>
          <p class="section-eyebrow">Selected Work</p>
          <h2 class="section-title">Production-Grade Projects</h2>
        </div>
        <p class="section-desc" style="max-width:300px;text-align:right;">Three flagship systems built for real-world
          performance and scale.</p>
      </div>

      <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
        <article class="project-card fade-up">
          <span class="project-num">
            <?= e($project['num']) ?>
          </span>
          <div class="project-icon">
            <?= $project['icon'] ?>
          </div>
          <h3>
            <?= e($project['title']) ?>
          </h3>
          <p>
            <?= e($project['desc']) ?>
          </p>
          <div class="project-footer">
            <div class="project-stack">
              <?php foreach ($project['stack'] as $tech): ?>
              <span class="project-tag">
                <?= e($tech) ?>
              </span>
              <?php endforeach; ?>
            </div>
            <a href="<?= e($project['link']) ?>" class="arrow-btn" title="View Project">→</a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <section id="about">
    <div class="container">
      <div class="about-inner">
        <div class="about-visual fade-up">
          <div class="about-card-main">
            <div class="profile-avatar">SM</div>
            <h3>
              <?= e($developer['name']) ?>
            </h3>
            <div class="role-text">→ full_stack_developer.exe</div>
            <div class="detail-rows">
              <div class="detail-row">
                <span class="label">Location</span>
                <span class="value">
                  <?= e($developer['location']) ?>
                </span>
              </div>
              <div class="detail-row">
                <span class="label">Degree</span>
                <span class="value">
                  <?= e($developer['degree']) ?>
                </span>
              </div>
              <div class="detail-row">
                <span class="label">University</span>
                <span class="value">
                  <?= e($developer['university']) ?>
                </span>
              </div>
              <div class="detail-row">
                <span class="label">Status</span>
                <span class="value" style="color:#6ee7b7;">●
                  <?= e($developer['status']) ?>
                </span>
              </div>
            </div>
          </div>
          <div class="floating-badge">🎓 CS Graduate</div>
        </div>

        <div class="about-content fade-up">
          <p class="section-eyebrow">About Me</p>
          <h2 class="section-title">Crafting Systems That Scale.</h2>
          <p>I'm a <strong>Full Stack Developer</strong> with a foundation in Computer Science and a specialization in
            building scalable, database-driven web applications. My approach integrates rigorous backend architecture
            with polished frontend experiences.</p>
          <p>With professional command of <strong>PHP (OOP)</strong> and <strong>MySQL</strong> on the backend, and
            <strong>modern JavaScript, CSS Grid, and HTML5</strong> on the client side, I deliver complete product
            solutions — from system design to deployment.</p>
          <p>My academic background in <strong>Web Engineering, Cyber Security, and Compiler Design</strong> ensures
            that my solutions are not only functional, but secure, optimized, and built to industry standards.</p>
          <div class="edu-block">
            <h4>🎓
              <?= e($developer['degree']) ?>
            </h4>
            <p>
              <?= e($developer['university']) ?> ·
              <?= e($developer['location']) ?>
            </p>
          </div>
          <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:8px;">
            <a href="#contact" class="btn-primary">Start a Project →</a>
            <a href="assets/cv-sohail-mian.pdf" download class="btn-secondary">Download CV</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <section id="contact">
    <div class="container">
      <div class="contact-wrapper">
        <div class="contact-info fade-up">
          <div>
            <p class="section-eyebrow">Get in Touch</p>
            <h2 class="section-title">Let's Build Something Exceptional.</h2>
            <p class="section-desc" style="margin-top:12px;">Have a project in mind? Whether it's a full-scale
              application or a targeted feature build, I'm ready to deliver.</p>
          </div>
          <div class="contact-items">
            <div class="contact-item">
              <div class="ci-icon">📧</div>
              <div>
                <div class="ci-label">Email</div>
                <div class="ci-value">
                  <?= e($developer['email']) ?>
                </div>
              </div>
            </div>
            <div class="contact-item">
              <div class="ci-icon">📍</div>
              <div>
                <div class="ci-label">Location</div>
                <div class="ci-value">
                  <?= e($developer['location']) ?>
                </div>
              </div>
            </div>
            <div class="contact-item">
              <div class="ci-icon">💼</div>
              <div>
                <div class="ci-label">Availability</div>
                <div class="ci-value">Full-time / Freelance</div>
              </div>
            </div>
          </div>
        </div>


        <div class="contact-form fade-up">
          <h3 class="form-title">Send a Message</h3>
          <p class="form-subtitle">I typically respond within 24 business hours.</p>

          <div class="alert success" id="formSuccess"></div>
          <div class="alert error" id="formError"></div>

          <form id="contactForm" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="John" autocomplete="given-name" />
                <span class="error-msg" id="err-fname">Please enter your first name.</span>
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Doe" autocomplete="family-name" />
                <span class="error-msg" id="err-lname">Please enter your last name.</span>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="john@company.com" autocomplete="email" />
              <span class="error-msg" id="err-email">Please enter a valid email address.</span>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Project Brief / Collaboration" />
              <span class="error-msg" id="err-subject">Please enter a subject.</span>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5"
                placeholder="Describe your project, goals, and timeline..."></textarea>
              <span class="error-msg" id="err-message">Please enter a message (min 20 characters).</span>
            </div>
            <button type="submit" class="form-submit" id="submitBtn">Send Message →</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-inner">
        <div class="footer-left">
          <p>©
            <?= date('Y') ?> <span>
              <?= e($developer['name']) ?>
            </span>. Crafted with precision.
          </p>
          <p style="margin-top:4px;font-size:.72rem;">
            <?= e($developer['title']) ?> ·
            <?= e($developer['location']) ?>
          </p>
        </div>
        <div class="footer-links">
          <a href="<?= e($developer['github']) ?>" class="footer-link" title="GitHub" aria-label="GitHub"
            target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z" />
            </svg>
          </a>
          <a href="<?= e($developer['linkedin']) ?>" class="footer-link" title="LinkedIn" aria-label="LinkedIn"
            target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
            </svg>
          </a>
          <a href="mailto:<?= e($developer['email']) ?>" class="footer-link" title="Email" aria-label="Email">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 0-8 8-8-8" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <div class="toast" id="toast">
    <span class="check">✔</span>
    Message sent! I'll be in touch within 24 hours.
  </div>

  <script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    });

    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => mobileMenu.classList.toggle('open'));
    function closeMobile() { mobileMenu.classList.remove('open'); }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const toast = document.getElementById('toast');
    const alertOk = document.getElementById('formSuccess');
    const alertErr = document.getElementById('formError');

    function setError(id, errId, show) {
      const input = document.getElementById(id);
      const err = document.getElementById(errId);
      input.classList.toggle('error', show);
      err.classList.toggle('show', show);
    }

    function validateEmail(v) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
    }

    function clearAlerts() {
      alertOk.classList.remove('show');
      alertErr.classList.remove('show');
    }

    ['fname', 'lname', 'email', 'subject', 'message'].forEach(id => {
      document.getElementById(id).addEventListener('input', () => {
        document.getElementById(id).classList.remove('error');
        const e = document.getElementById('err-' + id);
        if (e) e.classList.remove('show');
      });
    });

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      clearAlerts();

      const fname = document.getElementById('fname').value.trim();
      const lname = document.getElementById('lname').value.trim();
      const email = document.getElementById('email').value.trim();
      const subject = document.getElementById('subject').value.trim();
      const message = document.getElementById('message').value.trim();

      let valid = true;
      setError('fname', 'err-fname', !fname); if (!fname) valid = false;
      setError('lname', 'err-lname', !lname); if (!lname) valid = false;
      setError('email', 'err-email', !validateEmail(email)); if (!validateEmail(email)) valid = false;
      setError('subject', 'err-subject', !subject); if (!subject) valid = false;
      setError('message', 'err-message', message.length < 20); if (message.length < 20) valid = false;

      if (!valid) return;

      /* Send via AJAX */
      submitBtn.textContent = 'Sending…';
      submitBtn.disabled = true;

      try {
        const formData = new FormData(form);
        const res = await fetch('contact.php', { method: 'POST', body: formData });
        const data = await res.json();

        if (data.success) {
          form.reset();
          toast.classList.add('show');
          setTimeout(() => toast.classList.remove('show'), 4500);
        } else {
          if (data.errors) {
            const map = { first_name: 'fname', last_name: 'lname', email: 'email', subject: 'subject', message: 'message' };
            Object.entries(data.errors).forEach(([key, msg]) => {
              const fieldId = map[key] || key;
              const input = document.getElementById(fieldId);
              const errEl = document.getElementById('err-' + fieldId);
              if (input) input.classList.add('error');
              if (errEl) { errEl.textContent = msg; errEl.classList.add('show'); }
            });
          }
          alertErr.textContent = data.message || 'Something went wrong. Please try again.';
          alertErr.classList.add('show');
        }
      } catch (err) {
        alertErr.textContent = 'Network error. Please check your connection and try again.';
        alertErr.classList.add('show');
      } finally {
        submitBtn.textContent = 'Send Message →';
        submitBtn.disabled = false;
      }
    });
  </script>
</body>

</html>
