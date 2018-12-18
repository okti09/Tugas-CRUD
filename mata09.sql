-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2018 pada 12.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata09`
--

CREATE TABLE `mata09` (
  `Creator` varchar(25) NOT NULL,
  `ID_Creator` int(25) NOT NULL,
  `Tema` text NOT NULL,
  `Konten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata09`
--

INSERT INTO `mata09` (`Creator`, `ID_Creator`, `Tema`, `Konten`) VALUES
('Tuti', 3, 'Graphic Desain', 'Explore'),
('oktih', 44, '', 'b'),
('okti', 123, '', 'oki'),
('Noni', 312, 'Architecture', 'Photography'),
('okti', 503, 'Ilustrasi', 'Threads'),
('oiuu', 996, '', 'gynvycf'),
('okti', 1223, '', 'okihhh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mata09`
--
ALTER TABLE `mata09`
  ADD PRIMARY KEY (`ID_Creator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
