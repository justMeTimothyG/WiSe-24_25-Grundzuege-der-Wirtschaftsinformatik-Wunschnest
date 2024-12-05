-- KONTAKT DATENBANK

-- Erstelle Datenbank wenn sie noch nicht existiert
CREATE DATABASE IF NOT EXISTS wunschnest_db;

-- Verwede Datenbank
USE wunschnest_db;

-- Erstelle die `users` Tabelle
CREATE TABLE IF NOT EXISTS contact (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(90) NOT NULL,
    email VARCHAR(90) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);