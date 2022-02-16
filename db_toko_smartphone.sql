-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2022 pada 16.30
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_smartphone`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_categories`
--

CREATE TABLE `tb_categories` (
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_categories`
--

INSERT INTO `tb_categories` (`kode_kategori`, `nama_kategori`, `keterangan_kategori`) VALUES
(1, 'SAMSUNG', 'SS'),
(2, 'XIAOMI', 'MI'),
(3, 'OPPO', 'OP'),
(4, 'VIVO', 'VV'),
(5, 'REALME', 'RM'),
(6, 'iPHONE', 'IP'),
(7, 'POCO', 'PC'),
(8, 'SONY', 'SN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transactions`
--

CREATE TABLE `tb_detail_transactions` (
  `no_transaksi` varchar(100) NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori` int(11) NOT NULL,
  `size` varchar(20) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_detail_transactions`
--

INSERT INTO `tb_detail_transactions` (`no_transaksi`, `kode_produk`, `nama_produk`, `kategori`, `size`, `qty`, `harga_produk`) VALUES
('INV-1', 7, 'iPhone 12 Pro Max Pacific Blue 256 GB', 6, NULL, 3, 25500000),
('INV-2', 6, 'Redmi Note 10 Black', 2, NULL, 1, 2699000),
('INV-2', 1, 'Galaxy Z Fold3 5G Phantom Black', 1, NULL, 2, 26999000),
('INV-3', 8, 'Realme 8 5G', 5, NULL, 1, 2599000),
('INV-4', 3, 'Galaxy Z Fold3 5G Silver', 1, NULL, 1, 26999000),
('INV-5', 5, 'Redmi Note 10 5G Green', 2, NULL, 1, 2699000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_products`
--

CREATE TABLE `tb_products` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `berat` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_products`
--

INSERT INTO `tb_products` (`kode_produk`, `nama_produk`, `harga`, `satuan`, `berat`, `jenis`, `kategori`, `qty`, `gambar`, `tanggal_masuk`) VALUES
(1, 'Galaxy Z Fold3 5G Phantom Black', 26999000, '1', 1000, '1', '1', 10, 'Zfold3_black1.jpg', '2021-12-29 19:43:09'),
(2, 'Galaxy Z Fold3 5G Green', 26999000, '1', 1000, '1', '1', 10, 'Zfold3_Green.jpg', '2021-12-29 19:52:04'),
(3, 'Galaxy Z Fold3 5G Silver', 26999000, '1', 1000, '1', '1', 5, 'Zfold31.jpg', '2021-12-29 19:54:59'),
(4, 'Xiaomi 11T Pro Blue', 6999000, '1', 1000, '7', '2', 5, 'Xiaomi_11T_Pro_Blue.jpg', '2021-12-29 23:00:38'),
(5, 'Redmi Note 10 5G Green', 2699000, '1', 1000, '9', '2', 5, 'Redmi_Note_10_5g.jpg', '2021-12-29 23:03:40'),
(6, 'Redmi Note 10 Black', 2699000, '1', 1000, '9', '2', 10, 'Redmi_Note_10.jpg', '2021-12-29 23:10:06'),
(7, 'iPhone 12 Pro Max Pacific Blue 256 GB', 25500000, '1', 1000, '10', '6', 20, '12_Pro_Max_Blue.jpg', '2021-12-29 23:20:10'),
(8, 'Realme 8 5G', 2599000, '1', 1000, '14', '5', 5, 'Realme_8_5g.jpg', '2021-12-29 23:28:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transactions`
--

CREATE TABLE `tb_transactions` (
  `no_transaksi` varchar(100) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `bank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transactions`
--

INSERT INTO `tb_transactions` (`no_transaksi`, `tanggal_transaksi`, `id_user`, `nama_pelanggan`, `status`, `alamat_pengiriman`, `metode_pembayaran`, `ongkir`, `bukti_bayar`, `bank`) VALUES
('INV-1', '2022-01-08 12:12:41', 2, 'customer', 'In Process', 'Jl. Nangka 1 Denpasar - Bali', 'COD (Bayar di Tempat', 24000, '', NULL),
('INV-2', '2022-01-08 12:14:17', 2, 'customer', 'In Process', 'Pusat Pemerintahan Kab. Badung, Jl. Raya Sempidi, Mengwi, Badung 80351  Telp: (0361) 9009410', 'COD (Bayar di Tempat', 27000, '', NULL),
('INV-3', '2022-01-12 14:30:13', 2, 'customer', 'In Process', 'Jl. Test', 'COD (Bayar di Tempat', 9000, '', NULL),
('INV-4', '2022-01-12 14:55:40', 2, 'customer', 'In Process', 'Jl. Test', 'COD | Bayar di Tempa', 9000, '', NULL),
('INV-5', '2022-01-12 15:04:19', 2, 'customer', 'In Process', 'Jl. Test', 'Upload Bukti Bayar', 9000, 'tf.png', 'BCA-xxxx-xxx-xxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_types`
--

CREATE TABLE `tb_types` (
  `kode_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `keterangan_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_types`
--

INSERT INTO `tb_types` (`kode_jenis`, `nama_jenis`, `keterangan_jenis`) VALUES
(1, 'Galaxy Z', 'Samsung'),
(2, 'Galaxy S', 'Samsung'),
(3, 'Galaxy Note', 'Samsung'),
(4, 'Galaxy A', 'Samsung'),
(5, 'Galaxy M', 'Samsung'),
(6, 'Compare', 'Samsung'),
(7, 'Xiaomi', 'Xiaomi'),
(8, 'MI', 'Xiaomi'),
(9, 'Redmi', 'Xiaomi'),
(10, 'Pro Max', 'iPhone'),
(11, 'Pro', 'iPhone'),
(12, 'Mini', 'iPhone'),
(13, 'iPhone', 'iPhone'),
(14, 'Realme', 'Realme');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_units`
--

CREATE TABLE `tb_units` (
  `kode_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `keterangan_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_units`
--

INSERT INTO `tb_units` (`kode_unit`, `nama_unit`, `keterangan_unit`) VALUES
(1, 'Unit', 'Unit'),
(2, 'Pcs', 'Pieces');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama_user`, `alamat`, `telepon`, `email`, `username`, `password`, `role_id`, `image`) VALUES
(1, 'Recky Tenzillazil', 'Denpasar', '14045', 'admin@gmail.com', 'admin', 'admin', 1, ''),
(2, 'customer A', 'Badung', '08xxxxxxx', 'customer@gmail.com', 'customer', 'customer', 2, 'user4-128x128.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `tb_transactions`
--
ALTER TABLE `tb_transactions`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indeks untuk tabel `tb_types`
--
ALTER TABLE `tb_types`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indeks untuk tabel `tb_units`
--
ALTER TABLE `tb_units`
  ADD PRIMARY KEY (`kode_unit`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_types`
--
ALTER TABLE `tb_types`
  MODIFY `kode_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_units`
--
ALTER TABLE `tb_units`
  MODIFY `kode_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
