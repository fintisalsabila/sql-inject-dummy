-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2023 pada 03.53
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security_challenge`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_penting`
--

CREATE TABLE IF NOT EXISTS `info_penting` (
  `id` int(11) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `info_penting`
--

INSERT INTO `info_penting` (`id`, `info`) VALUES
(1, 'Ini data penting'),
(2, 'Ini data penting (2)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor`
--

CREATE TABLE IF NOT EXISTS `kantor` (
  `id` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hape` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kantor`
--

INSERT INTO `kantor` (`id`, `kota`, `alamat`, `no_hape`) VALUES
(1, 'Jakarta', 'Jl. raya', '+6283452416345'),
(2, 'Bandung', 'Jl. raya2', '+6282352352348'),
(3, 'Bekasi', 'Jl. Raya3', '+6286346845745'),
(4, 'Bogor', 'Jl. apa hayo', '+6284562347592'),
(5, 'Jakarta', 'Jl. aman sentosa', '+6289385289923'),
(6, 'Jakarta', 'Jl. proyek 800 M', '+6283452467453'),
(7, 'Jakarta', 'Jl. kita sukses', '+6282352354245'),
(8, 'Bekasi', 'Jl. Demikian terimakasih', '+62834544684');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'Welc0meT0NetlightEdgeC0nferenceInSt0ckh0lm!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_penting`
--
ALTER TABLE `info_penting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_penting`
--
ALTER TABLE `info_penting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
