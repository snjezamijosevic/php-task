DROP DATABASE IF EXISTS proba;
CREATE DATABASE IF NOT EXISTS mojaproba;
USE mojaproba;
CREATE TABLE IF NOT EXISTS osoba(
ID int AUTO_INCREMENT PRIMARY KEY,
ime VARCHAR(15) NOT NULL,
prezime VARCHAR(15) NOT NULL,
hobiji VARCHAR(30) NOT NULL,
poruka VARCHAR(200) NOT NULL,
spol VARCHAR(6) NOT NULL,
boja VARCHAR(7) NOT NULL,
datoteka VARCHAR(25) NOT NULL,
email VARCHAR(20) NOT NULL,
lozinka VARCHAR(40) NOT NULL,
smjer VARCHAR(10) NOT NULL
);



