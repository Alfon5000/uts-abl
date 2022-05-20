-- Create Database Karyawan
CREATE DATABASE db_karyawan;

-- Use Database Karyawan
USE db_karyawan;

-- Create Table Karyawan
CREATE TABLE tb_karyawan
(
    ID CHAR(3) PRIMARY KEY,
    Nama VARCHAR(50),
    Jenis_Kelamin ENUM('Laki-laki','Perempuan'),
    Golongan CHAR(3),
    Alamat VARCHAR(100)
);

-- Insert Record Karyawan
INSERT INTO tb_karyawan VALUES
('K01', 'Prita', 'Perempuan', 'IVA', 'Jalan Kencana Jakarta'),
('K02', 'Budi Hidayat', 'Laki-laki', 'IVA', 'Jalan Anggrek Sulawesi'),
('K03', 'Rahman', 'Laki-laki', 'IVA', 'Jalan Melati Kalimantan'),
('K04', 'Putri Lestari', 'Perempuan', 'IVC', 'Jalan Diponegoro Jawa Barat'),
('K05', 'John', 'Laki-laki', 'IVD', 'Jalan Delima Papua');

-- Select All Record From Table tb_karyawan
SELECT * FROM tb_karyawan;