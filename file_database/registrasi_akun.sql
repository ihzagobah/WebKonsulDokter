-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2020 pada 00.55
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi_akun`
--

CREATE TABLE `registrasi_akun` (
  `nama` varchar(100) NOT NULL,
  `nomorhp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `katasandi` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi_akun`
--

INSERT INTO `registrasi_akun` (`nama`, `nomorhp`, `email`, `katasandi`, `alamat`, `tanggal`, `bulan`, `tahun`, `jeniskelamin`) VALUES
('Haris Hamdani', '081216473657', 'harishamdanilatif@gmail.com', 'fewsc', 'bandung', '16', '9', '1984', 'L'),
('Michael', '0812222222', 'michael@yahoo.com', '1234567890', 'jakarta', '1', '1', '2002', 'L'),
('aldi', '0877767777', 'aldi@', 'qwerty', 'bandung', '19', '6', '1987', 'L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `registrasi_akun`
--
ALTER TABLE `registrasi_akun`
  ADD PRIMARY KEY (`nomorhp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
