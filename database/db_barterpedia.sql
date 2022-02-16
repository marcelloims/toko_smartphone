-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2021 pada 10.19
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
-- Database: `db_barterpedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_categories`
--

CREATE TABLE `tb_categories` (
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL,
  `keterangan_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_categories`
--

INSERT INTO `tb_categories` (`kode_kategori`, `nama_kategori`, `keterangan_kategori`) VALUES
(1, 'Elektronik', 'Elektronik'),
(2, 'Komputer & Aksesoris', 'Komputer & Aksesoris'),
(3, 'Handphone & Aksesoris', 'Handphone & Aksesoris'),
(4, 'Pakaian Pria', 'Pakaian Pria'),
(5, 'Sepatu Pria', 'Sepatu Pria'),
(6, 'Tas Pria', 'Tas Pria'),
(7, 'Aksesoris Pria', 'Aksesoris Pria'),
(8, 'Jam Tangan', 'Jam Tangan'),
(9, 'Kesehatan & Olahraga', 'Kesehatan & Olahraga'),
(10, 'Hobi & Koleksi', 'Hobi & Koleksi'),
(11, 'Sembako', 'Sembako'),
(12, 'Perawatan & Kecantikan', 'Perawatan & Kecantikan'),
(13, 'Perlengkapan Rumah', 'Perlengkapan Rumah'),
(14, 'Pakaian Wanita', 'Pakaian Wanita'),
(15, 'Fashion Muslimah', 'Fashion Muslimah'),
(16, 'Fashion Bayi', 'Fashion Bayi'),
(17, 'Perlengkapan Bayi', 'Perlengkapan Bayi'),
(18, 'Sepatu Wanita', 'Sepatu Wanita'),
(19, 'Tas Wanita', 'Tas Wanita'),
(20, 'Alat Tukang', 'Alat Tukang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_details_transactions`
--

CREATE TABLE `tb_details_transactions` (
  `no_transaksi` varchar(225) NOT NULL,
  `kode_produk` varchar(225) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `size` varchar(225) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_details_transactions`
--

INSERT INTO `tb_details_transactions` (`no_transaksi`, `kode_produk`, `nama_produk`, `size`, `qty`, `harga_produk`) VALUES
('INV-1', 'PRO-3', 'Adidas Euro 2020 Ball', NULL, 1, 3500000),
('INV-2', 'PRO-1', 'Billabong T Shirt', 'S (Small)', 1, 700000),
('INV-2', 'PRO-3', 'Adidas Euro 2020 Ball', NULL, 1, 3500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_products`
--

CREATE TABLE `tb_products` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `tanggal_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_products`
--

INSERT INTO `tb_products` (`kode_produk`, `nama_produk`, `harga`, `satuan`, `jenis`, `kategori`, `qty`, `gambar`, `tanggal_masuk`) VALUES
(1, 'Xiaomi Redmi Note 10 Pro 8/128 GB', 4719000, '7', '7', '3', 50, 'Redmi_Note_10_Pro.jpg', '2021-09-11 19:00:00'),
(2, 'Realme GT Version Global 8/256 GB', 8900000, '7', '7', '3', 50, 'Realme_GT.jpg', '2021-09-11 19:01:00'),
(3, 'I Phone 12 Pro Max 256 GB', 20499000, '7', '7', '3', 20, 'iphone.jpg', '2021-09-11 19:02:00'),
(4, 'Samsung Galaxy S21 16/512 GB', 21999000, '7', '7', '3', 20, 'Samsung_S21.png', '2021-09-11 19:03:00'),
(5, 'Oppo Reno 5 5G 8/128 GB', 4999000, '7', '7', '3', 15, 'oppo_reno5.jpg', '2021-09-11 19:04:00'),
(6, 'Scralett Whitening Body Lotion - Romansa', 75000, '3', '14', '12', 120, 'lotionromansa1-150x150.jpg', '2021-09-11 19:09:01'),
(7, 'Scarlett Whitening Brightly Ever After', 75000, '7', '8', '12', 100, 'kecantikan.jpg', '2021-09-11 19:05:00'),
(8, 'Scarlett Whitening Acne Cream Night', 75000, '3', '8', '12', 25, 'creamacnenight1-150x150.jpg', '2021-09-11 19:06:00'),
(9, 'Scralett Whitening Acne Cream Day', 75000, '3', '12', '12', 150, 'creamacneday1-150x150.jpg', '2021-09-11 19:07:00'),
(10, 'Scarlett Whitening  Scrub Pomegrante', 75000, '3', '13', '12', 100, 'lulurpome1-150x150.jpg', '2021-09-11 19:08:00'),
(11, 'T-Shirt Billabong Ori', 1500000, '3', '6', '4', 80, 'KAOS_BILLABONG_21.jpg', '2021-09-11 23:54:32'),
(12, 'T-Shirt Gucci White Color', 4300000, '3', '6', '4', 50, 'Gucci.jpg', '2021-09-12 21:04:58'),
(13, 'Sepatu Nike Air Jordan 1 Retro Merah Putih Sneakers Pria Import FL', 21000000, '7', '15', '5', 20, 'Sepatu_Nike.jpg', '2021-09-12 21:09:08'),
(14, 'Sepatu Nike Air Max', 8230000, '7', '15', '5', 20, 'ipad_nike-air-force2.jpg', '2021-09-12 21:13:23'),
(15, 'Sepatu Vans OldSkool', 2500000, '7', '15', '5', 100, 'sepatu_pria.jpg', '2021-09-12 21:18:04'),
(16, 'Smart TV Toshiba 42 Inch', 8800000, '7', '16', '1', 20, 'TV_TOSHIBA.jpg', '2021-09-21 21:50:26'),
(17, 'Kulkas LG InstaView Door-in-Door', 28000000, '7', '17', '1', 10, 'kulkas.jpg', '2021-09-21 22:32:59'),
(19, 'PC Gaming Full Set i7 Ram 16GB , SDD 1TB, HDD 1TB, NVDIA 1740m', 7800000, '7', '18', '2', 5, 'OIP.jpg', '2021-09-26 20:47:12'),
(20, 'LAPTOP ASUS ROG STRIX G G512LI-HN047T ', 20000000, '7', '18', '2', 5, '9904-11.jpg', '2021-09-26 23:28:36'),
(21, 'JFR Tas Pinggang Waist Bag Bahan Polyester JT02 - Grey', 65000, '3', '27', '6', 3, '1.jpg', '2021-09-27 18:07:20'),
(22, 'SHRRADOO Anti Theft Laptop Backpack Travel Backpacks', 800000, '3', '19', '6', 3, '2.jpg', '2021-09-27 18:10:08'),
(23, 'Veithdia Kacamata Pria Aviator UV Polarized', 59000, '3', '29', '7', 15, '3.jpg', '2021-09-28 20:00:02'),
(24, 'Kacamata Hitam Pria', 75000, '3', '29', '7', 20, '4.jpg', '2021-09-28 20:27:49'),
(25, 'Daniel Wellington Classic Petite Melrose Women - Rosegold', 1500000, '7', '30', '8', 20, '5.jpg', '2021-09-30 14:28:09'),
(26, 'Daniel Wellington Classic Black', 1340000, '7', '30', '8', 10, '7.jpg', '2021-09-30 14:31:25'),
(27, 'Bola Takraw Marathon 301', 25000, '3', '32', '9', 15, '8.jpg', '2021-10-04 21:32:15'),
(28, 'Sepatu Futsal Specs Acc.Ligh Speed Reborn In (39-43)', 378900, '7', '33', '9', 10, '9.jpg', '2021-10-04 21:35:04'),
(29, 'Bola Basket Procourt Px 23 Official Basketball Px-23 Karet Outdoor', 129000, '3', '34', '9', 5, '10.jpg', '2021-10-04 21:37:59'),
(30, 'Ring Papan Basket Kecil termurah', 80000, '3', '35', '9', 5, '11.jpg', '2021-10-04 21:40:13'),
(31, 'Lamborghini Aventador New Style Supper Car', 2147483647, '7', '36', '10', 10, '12.jpg', '2021-10-04 21:50:35'),
(32, 'Ferrari F8 Super Car Red Color', 1000000000, '7', '36', '10', 3, '13.jpg', '2021-10-04 21:55:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tenants`
--

CREATE TABLE `tb_tenants` (
  `kode_tenant` varchar(225) NOT NULL,
  `id_user` varchar(225) NOT NULL,
  `nama_tenant` varchar(225) NOT NULL,
  `alamat_tenant` text NOT NULL,
  `telepon_tenant` varchar(225) NOT NULL,
  `email_tenant` varchar(225) NOT NULL,
  `fax` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tenants`
--

INSERT INTO `tb_tenants` (`kode_tenant`, `id_user`, `nama_tenant`, `alamat_tenant`, `telepon_tenant`, `email_tenant`, `fax`) VALUES
('TEN-1', 'MEM-1', 'example tenant 1', '1', '1', 'example1@tenant.com', '1'),
('TEN-2', 'MEM-2', 'example tenant 2', '2', '2', 'example2@tenant.com', '2'),
('TEN-3', 'MEM-2', '3', '3', '3', '3@3', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transactions`
--

CREATE TABLE `tb_transactions` (
  `no_transaksi` varchar(225) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `id_user` varchar(225) NOT NULL,
  `nama_pelanggan` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `metode_pembayaran` varchar(225) NOT NULL,
  `bukti_bayar` varchar(225) DEFAULT NULL,
  `bank` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transactions`
--

INSERT INTO `tb_transactions` (`no_transaksi`, `tanggal_transaksi`, `id_user`, `nama_pelanggan`, `status`, `alamat_pengiriman`, `metode_pembayaran`, `bukti_bayar`, `bank`) VALUES
('INV-1', '2021-08-31 17:57:35', 'Session', 'Session', 'In Process', 'Denpasar', 'COD (Bayar di Tempat)', '', NULL),
('INV-2', '2021-08-31 18:00:18', 'Session', 'Session', 'In Process', 'Badung', 'Upload Bukti Bayar', 'Screenshot_2.png', 'BCA-xxxx-xxx-xxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_types`
--

CREATE TABLE `tb_types` (
  `kode_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(225) NOT NULL,
  `keterangan_jenis` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_types`
--

INSERT INTO `tb_types` (`kode_jenis`, `nama_jenis`, `keterangan_jenis`) VALUES
(2, 'Makanan', 'Makanan Ringan'),
(3, 'Minuman', 'Minuman Kaleng'),
(4, 'Makanan', 'Makanan Pokok'),
(5, 'Bola', 'Sport'),
(6, 'T-Shirt', 'T-Shirt'),
(7, 'Handphone', 'Elektronik'),
(8, 'Serum', 'Serum'),
(9, 'Sun Screen', 'Sun Screen'),
(10, 'Sun Block', 'Sun Block'),
(11, 'Night Cream', 'Night Cream'),
(12, 'Day Cream', 'Day Cream'),
(13, 'Body Scrub', 'Body Scrub'),
(14, 'Body Lotion', 'Body Lotion'),
(15, 'Sneakers', 'Sneakers'),
(16, 'TV', 'Elektronik'),
(17, 'Kulkas', 'Elektronik'),
(18, 'Komputer', 'Komputer & Aksesoris'),
(19, 'Backpack', 'Tas Pria'),
(20, 'Tote Bag', 'Tas Pria'),
(21, 'Weekend Bag', 'Tas Pria'),
(22, 'Weekend Bag', 'Tas Pria'),
(23, 'Messenger bag', 'Tas Pria'),
(24, 'Crossbody Bag', 'Tas Pria'),
(25, 'Sling Bag', 'Tas Pria'),
(26, 'Rucksack', 'Tas Pria'),
(27, 'Waist/Wrist Bag', 'Tas Pria'),
(28, 'Clutch Bag', 'Tas Pria'),
(29, 'Kacamata', 'Aksesoris Pria'),
(30, 'Jam Tangan', 'Jam Tangan'),
(31, 'Bola Kaki', 'Kesehatan dan Olahraga'),
(32, 'Bola Takraw', 'Kesehatan dan Olahraga'),
(33, 'Sepatu Futsal', 'Kesehatan dan Olahraga'),
(34, 'Bola Basket', 'Kesehatan dan Olahraga'),
(35, 'Ring Basket', 'Kesehatan dan Olahraga'),
(36, 'Super Car', 'Hobi dan Koleksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_units`
--

CREATE TABLE `tb_units` (
  `kode_unit` int(11) NOT NULL,
  `nama_unit` varchar(225) NOT NULL,
  `keterangan_unit` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_units`
--

INSERT INTO `tb_units` (`kode_unit`, `nama_unit`, `keterangan_unit`) VALUES
(1, 'm', 'Meter'),
(2, 'kg', 'Kilogram'),
(3, 'pcs', 'Piece'),
(4, 'g', 'Gram'),
(7, 'Unit', 'Unit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` varchar(225) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama_user`, `alamat`, `telepon`, `email`, `username`, `password`, `role_id`) VALUES
('MEM-1', 'admin', 'admin', '', 'admin@gmail.com', 'admin', 'admin', 1),
('MEM-2', 'Example Member', 'Alamat Member', '14045', 'example@member.com', 'member', 'member', 2);

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
-- Indeks untuk tabel `tb_tenants`
--
ALTER TABLE `tb_tenants`
  ADD PRIMARY KEY (`kode_tenant`);

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
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_types`
--
ALTER TABLE `tb_types`
  MODIFY `kode_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_units`
--
ALTER TABLE `tb_units`
  MODIFY `kode_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
