-- ============================================
-- Portfolio Backend - Database Setup
-- Run this once to create the database & table
-- ============================================

CREATE DATABASE IF NOT EXISTS portfolio_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE portfolio_db;

CREATE TABLE IF NOT EXISTS contact_messages (
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name  VARCHAR(100)  NOT NULL,
    last_name   VARCHAR(100)  NOT NULL,
    email       VARCHAR(255)  NOT NULL,
    subject     VARCHAR(255)  NOT NULL,
    message     TEXT          NOT NULL,
    ip_address  VARCHAR(45)   DEFAULT NULL,
    user_agent  VARCHAR(500)  DEFAULT NULL,
    is_read     TINYINT(1)    NOT NULL DEFAULT 0,
    created_at  DATETIME      NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email      (email),
    INDEX idx_created_at (created_at),
    INDEX idx_is_read    (is_read)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
