-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2021 pada 07.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinatriyakancana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud_gc`
--

CREATE TABLE `crud_gc` (
  `id` int(11) NOT NULL,
  `nik` varchar(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `crud_gc`
--

INSERT INTO `crud_gc` (`id`, `nik`, `nama`, `jabatan`, `alamat`, `foto`) VALUES
(6, '19.03.001', 'Jerry Saparudin', 'Ketua', 'Jl. Awiligar RT/RW 005/011 ', '708-je.jpg'),
(7, '19.03.002', 'Adjie Laksana Ibrahim', 'Wakil Ketua', 'Jl. Awiligar RT/RW 006/011 ', '324-ji.jpg'),
(8, '19.03.003', 'Elvira Gustiani Waluya', 'Sekretaris', 'Jl. Awiligar RT/RW 003/011 ', '788-idut.jpg'),
(9, '19.03.004', 'Feni Nur Solihati', 'Bendahara', 'Jl. Awiligar RT/RW 002/011 ', '29-feni.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `email`, `ttl`, `telp`, `alamat`, `pesan`) VALUES
(8, 'Adjie Laksana', 'adjielaksana17@gmail', 'Bandung, 17 Maret 20', 'Adjie Laksan', 'Jl. Awiligar', 'Kalian Luar Biasa'),
(10, 'Gilang Syahrul', 'gilangsyahrul58@gmai', 'Bandung, 28 November', '088706383256', 'Jl. Awiligar', 'Sinatriya Kancana'),
(12, 'Rizal', 'rizalrangga33@yahoo.', 'Bandung, 02-07-2001', '000', 'lalaland', 'lalaland'),
(13, 'Rizal', 'rizalrangga33@yahoo.', 'Bandung, 02-07-2001', '000', 'lalaland', 'lalaland');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin'),
(2, 'tamu', 'tamu', 'tamu123', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud_gc`
--
ALTER TABLE `crud_gc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crud_gc`
--
ALTER TABLE `crud_gc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
