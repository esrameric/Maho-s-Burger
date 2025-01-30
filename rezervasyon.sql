CREATE DATABASE rezervasyon_sistemi;

USE rezervasyon_sistemi;

CREATE TABLE rezervasyonlar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(50) NOT NULL,
    soyad VARCHAR(50) NOT NULL,
    telefon VARCHAR(15) NOT NULL,
    saat VARCHAR(10) NOT NULL
);
