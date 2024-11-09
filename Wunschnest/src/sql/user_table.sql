-- Erstelle Datenbank wenn sie noch nicht existiert
CREATE DATABASE IF NOT EXISTS wunschnest_db;

-- Verwede Datenbank
USE wunschnest_db;

-- Erstelle die `users` Tabelle
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(90) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    session_token VARCHAR(64) DEFAULT NULL,
    session_token_expiration TIMESTAMP,
);