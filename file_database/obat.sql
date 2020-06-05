-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2020 at 02:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswebpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(64) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga`, `gambar`, `deskripsi`) VALUES
('5ea42812781ac', 'ATORVASTATIN 40 MG 10 TABLET', 120400, 'default.jpg', 'ATORVASTATIN 40 MG 10 TABLET merupakan obat hipolipidemia golongan statin. Obat ini digunakan untuk menurunkan kadar kolesterol jahat (LDL) dan trigliserida dalam darah sekaligus mampu meningkatkan kadar kolesterol baik (HDL). Seperti obat golongan statin lainnya, obat ini digunakan untuk pencegahan penyakit-penyakit kardiovaskular seperti penyakit jantung koroner, pasien dengan riwayat angina atau miokardial, stroke atau serangan iskemik transien. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER.\r\n'),
('5ea42899280ce', 'SPIRONOLACTONE 25 MG 10 TABLET', 14700, 'default.jpg', 'SPIRONOLACTONE merupakan steroid dengan struktur yg mirip Aldosterone, bekerja pada bagian distal dari tubulus ginjal dimana akan terjadi peningkatan ekskresi natrium dan air serta pengurangan ekskresi Kalium sehingga berefek sebagai diuretik dan antihipertensi. Obat ini digunakan untuk hipertensi esensial, edema akibat payah jantung kongestif, edema akibat sirosis hati dengan atau tanpa asites, edema akibat sindroma nefrotik, diagnosa dan pengobatan hiperaldosteronisme primer, pencegahan hipokalemia pada penderita yg mendapat digitalis apabila tindakan lain tidak berhasil. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER.\r\n'),
('5ea4299c3738e', 'CARDIO ASPIRIN 100 MG 10 TABLET', 28300, 'default.jpg', 'CARDIO ASPIRIN 100 MG TABLET adalah obat tablet yang mengandung Acetylsalicylic Acid 80 mg. Acetylsalicylic acid atau dikenal juga dengan Aspirin merupakan senyawa analgesik non steroid yang digunakan sebagai analgesik, antipiretik, antiinflamasi dan anti-platelet. Pada dosis kecil (80 mg - 100 mg), Acetylsalicylic acid, memiliki manfaat sebagai anti-platelet dengan cara menghambat pembentukan trombus pada sirkulasi arteri. Obat ini digunakan untuk mencegah agregasi platelet pada kondisi angina yang tidak stabil dan serangan iskemik otak yang terjadi sesaat. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
