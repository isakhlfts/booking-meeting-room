-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2023 pada 15.23
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `name`, `date`, `time`, `description`, `status`) VALUES
(36, 'Angelin Cahyaning', '2023-10-24', 'Pagi (08.00 - 11.00 WIB)', 'Evaluasi kinerja proyek XYZ', 'Rejected'),
(37, 'M Rifky Nugroho', '2023-10-25', 'Siang (13.00 - 16.00 WIB)', 'Rapat perencanaan Acara HUT RI KE-000', 'Approved'),
(38, 'Isa Kholifatus Sukhna', '2023-10-27', 'Pagi (08.00 - 11.00 WIB)', 'Evaluasi Pelaksanaan Proses Bisnis ABC', 'Approved'),
(39, 'Fachrun Nisa\'', '2023-10-27', 'Siang (13.00 - 16.00 WIB)', 'Rapat Isu Keamanan TI', 'Rejected'),
(40, 'Fachrun Nisa\'', '2023-10-30', 'Siang (13.00 - 16.00 WIB)', 'Rapat Isu Keamanan TI Website SEPEKAN', 'Approved'),
(41, 'Angelin Cahyaning Sutanto', '2023-10-31', 'Siang (13.00 - 16.00 WIB)', 'Evaluasi Perizinan dan Regulasi', 'Approved'),
(42, 'Isa Kholifatus Sukhna', '2023-11-03', 'Pagi (08.00 - 11.00 WIB)', 'rapat progress program kerja minggu ke-1 November 2023', 'Rejected'),
(43, 'Shofiana Primi Rusdiana', '2023-11-06', 'Pagi (08.00 - 11.00 WIB)', 'Rencana Komunikasi dan Informasi Publik', 'Pending'),
(44, 'Anggun Yuliana Fazri', '2023-12-04', 'Siang (13.00 - 16.00 WIB)', 'Rapat Rencana Pendanaan Riset', 'Approved'),
(45, 'Angelin Cahyaning', '2023-11-07', 'Pagi (08.00 - 11.00 WIB)', 'Evaluasi Fasilitas Riset', 'Rejected');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
