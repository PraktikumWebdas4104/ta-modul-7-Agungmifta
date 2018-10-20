-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2018 pada 14.04
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `program_studi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` text NOT NULL,
  `moto_hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('Agung miftakhul', '6701174089', 'laki-laki', 'D3 Manajemen Informatika', 'FakultasIlmuTerapan', 'Boyolali', 'moto'),
('Agung miftakhul', '6701174144', 'laki-laki', 'D3 Manajemen Pemasaran', 'FakultasIndustriKreatif', 'solo', 'moto'),
('Miftakhul Huda', '6701175098', 'laki-laki', 'D3 Komputerisasi Akutansi', 'FakultasIndustriKreatif', 'London', 'moto');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
