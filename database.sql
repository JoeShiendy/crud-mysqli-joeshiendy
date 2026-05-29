-- 1. Membuat Database Baru untuk Shiennails
CREATE DATABASE db_nail_crud;

-- 2. Menggunakan Database yang Baru Dibuat
USE  db_nail_crud;

-- 3. Membuat Tabel Customer Shiennails
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_customer VARCHAR(100) NOT NULL,
    no_whatsapp VARCHAR(20) NOT NULL,
    layanan VARCHAR(100) NOT NULL,
    total_bayar INT NOT NULL,
    tanggal_booking DATE NOT NULL
);
