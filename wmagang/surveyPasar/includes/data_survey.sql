-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2024 pada 08.03
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_survey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_bandar`
--

CREATE TABLE `data_barang_bandar` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_kemarin` int(11) DEFAULT NULL,
  `harga_sekarang` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `status_validasi` enum('pending','true','false') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_pahing`
--

CREATE TABLE `data_barang_pahing` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_kemarin` int(11) DEFAULT NULL,
  `harga_sekarang` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `status_validasi` enum('pending','true','false') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_setonobetek`
--

CREATE TABLE `data_barang_setonobetek` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_kemarin` int(11) DEFAULT NULL,
  `harga_sekarang` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `status_validasi` enum('pending','true','false') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`, `randSalt`, `token`) VALUES
(1, 'husain_ar', '$2y$12$cE8uFdaCuOQMxMohP0oDQuc2os6lDf8DdzsQ.vBhtLNMpRjH8ydLm', 'husain', 'hammam', 'husain11@gmail.com', 'admin', '$2y$10$iusesomecrazystrings22', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang_bandar`
--
ALTER TABLE `data_barang_bandar`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `data_barang_pahing`
--
ALTER TABLE `data_barang_pahing`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `data_barang_setonobetek`
--
ALTER TABLE `data_barang_setonobetek`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang_bandar`
--
ALTER TABLE `data_barang_bandar`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT untuk tabel `data_barang_pahing`
--
ALTER TABLE `data_barang_pahing`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT untuk tabel `data_barang_setonobetek`
--
ALTER TABLE `data_barang_setonobetek`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
