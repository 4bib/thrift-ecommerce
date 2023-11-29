-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 08.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` float NOT NULL,
  `merek` varchar(50) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id`, `nama`, `harga`, `merek`, `imageurl`) VALUES
(1, 'Hoodie', 15000, 'Dickies', 'hoodie_thrifting.jpg'),
(2, 'Jaket', 25000, 'cosby', 'jaket.jpg'),
(3, 'Kaos', 35000, 'Dracut', 'kaos_thrifting.jpg'),
(4, 'Sweater', 45000, 'Balenciaga', 'sweater_thrifting.jpg'),
(5, 'Celana', 75000, 'Burberry', 'thrifting_celana.jpg'),
(6, 'Topi', 12000, 'elesse', 'topi_thrifting.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kodepos` int(7) NOT NULL,
  `kecamatan` char(255) NOT NULL,
  `kota` char(255) NOT NULL,
  `propinsi` char(255) NOT NULL,
  `alamat` text NOT NULL,
  `jumlahbiaya` float NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `id_product`, `nama`, `penerima`, `jumlah`, `kodepos`, `kecamatan`, `kota`, `propinsi`, `alamat`, `jumlahbiaya`, `bukti_pembayaran`) VALUES
(5, 5, 'Celana', 'Lingard', 2, 53453, 'Kebayoran', 'Jakpus', 'Jakarta', 'Jl. Bolang', 50000, ''),
(6, 6, 'Kaos', 'Cristiano', 1, 64564, 'Teluk Jambe', 'Karawang', 'Jawa Barat', 'Rt. 03/03', 35000, ''),
(7, 4, 'Sepatu', 'Ronaldinho', 4, 45454, 'Neglasari', 'Tangerang', 'Banten', 'Gg. Gotong Royong', 60000, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_detail` (`id_product`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_detail` FOREIGN KEY (`id_product`) REFERENCES `detail` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
