CREATE DATABASE phpmvc;
USE phpmvc;
CREATE TABLE mahasiswa(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    nama VARCHAR(100) NOT NULL ,
    email VARCHAR(100) NOT NULL , 
    jurusan VARCHAR(100) NOT NULL 
);
INSERT INTO mahasiswa(nama, email, jurusan)
VALUES 
('Salsabila Khoirunnisa', 'salsa@gmail.com', 'Fashion Design'),
('Talitha Laya Daren', 'talitha@gmail.com', 'Arsitektur');