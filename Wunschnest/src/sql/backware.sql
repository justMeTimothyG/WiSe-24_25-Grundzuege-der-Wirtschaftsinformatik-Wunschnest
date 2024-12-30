--  a) Wählen Sie Datenbank "BAECKEREI" als Ausführungskontext.
CREATE DATABASE BAECKEREI;
USE BAECKEREI;
DROP TABLE IF EXISTS Guetesiegel;
DROP TABLE IF EXISTS Backware;
CREATE TABLE Backware(
    `name` VARCHAR(255) PRIMARY KEY,
    `preis` DECIMAL(10, 2) NOT NULL,
    `gewicht` INT NOT NULL
);
CREATE TABLE Guetesiegel (
    backware_name VARCHAR(255),
    name VARCHAR(255),
    PRIMARY KEY (backware_name, name),
    FOREIGN KEY (backware_name) REFERENCES Backware(name)
);
INSERT INTO Backware (name, preis, gewicht)
VALUES ('Amerikaner', 2.10, 220),
    ('Berliner', 1.20, 150),
    ('Nussecken', 2.50, 120);
INSERT INTO Guetesiegel (backware_name, name)
VALUES ('Nussecken', 'Fairtrade Plus');
INSERT INTO Guetesiegel (backware_name, name)
VALUES ('Berliner', 'Fairtrade');
-- SELECT Backware.name,
--     Backware.preis,
--     Guetesiegel.name AS Guetesiegel
-- FROM Backware,
--     Guetesiegel
-- WHERE Backware.name = Guetesiegel.backware_name;