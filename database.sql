CREATE DATABASE toko;

USE toko;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    harga INT,
    stok INT
);

INSERT INTO produk (nama_produk, harga, stok) VALUES
('Toyota GR Supra', 750000000, 2),
('Nissan GT-R R35', 3200000000, 1),
('Dodge Challenger SRT Hellcat', 1800000000, 3);