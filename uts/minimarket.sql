-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2020 pada 10.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `sku` varchar(10) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `harga_satuan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`sku`, `nama_barang`, `kategori`, `stok_barang`, `harga_satuan`) VALUES
('ATK-01', 'Penghapus', 'ATK', 5, 1000),
('ATK-02', 'Bolpoin', 'ATK', 10, 1500),
('ATK-03', 'Penggaris', 'ATK', 10, 5000),
('MKN-01', 'Taro', 'Makanan', 10, 3500),
('MKN-02', 'Cheetoz', 'Makanan', 15, 4000),
('MKN-03', 'Sari Roti', 'Makanan', 20, 10000),
('MKN-04', 'Monde Butter Cookies', 'Makanan', 5, 20000),
('MKN-05', 'Biskuit Roma Kelapa', 'Makanan', 25, 15000),
('MNM-01', 'Fanta', 'Minuman', 15, 8000),
('MNM-02', 'Sprite', 'Minuman', 10, 5000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`sku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
