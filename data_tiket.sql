-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2022 pada 06.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tiket`
--

CREATE TABLE `data_tiket` (
  `Id_tiket` int(10) NOT NULL,
  `Nama` text NOT NULL,
  `NIK` char(17) NOT NULL,
  `No_Hp` char(13) NOT NULL,
  `Tempat_Wisata` varchar(200) NOT NULL,
  `Tanggal_Kunjungan` varchar(200) NOT NULL,
  `Pengunjung_Dewasa` varchar(200) NOT NULL,
  `Pengunjung_Anak` varchar(200) NOT NULL,
  `Harga_Tiket` int(10) NOT NULL,
  `Total_Bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tiket`
--

INSERT INTO `data_tiket` (`Id_tiket`, `Nama`, `NIK`, `No_Hp`, `Tempat_Wisata`, `Tanggal_Kunjungan`, `Pengunjung_Dewasa`, `Pengunjung_Anak`, `Harga_Tiket`, `Total_Bayar`) VALUES
(13, 'Satrio Adi Wibowo', '3113031410200001', '0888123410234', 'Monumen Nasional', '2022-09-25', '2', '1', 25000, 62500);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  ADD PRIMARY KEY (`Id_tiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_tiket`
--
ALTER TABLE `data_tiket`
  MODIFY `Id_tiket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
