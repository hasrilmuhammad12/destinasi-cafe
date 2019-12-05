-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 04:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'hasril', 'hasril8', 'hasril'),
(2, 'admin', 'admin', 'hasril\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
`id_makanan` int(100) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `gambar_makanan` varchar(200) NOT NULL,
  `deskripsi_makanan` varchar(200) NOT NULL,
  `asal_makanan` varchar(200) NOT NULL,
  `bahan_makanan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `gambar_makanan`, `deskripsi_makanan`, `asal_makanan`, `bahan_makanan`) VALUES
(1, 'nasi goreng', '5de876a111cdc.jpg', 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng atau margarin, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lai', 'payakumbuh', 'nasi,bumbu&quot; '),
(2, 'mie goreng', '5de87706ea897.jpg', 'adalah makanan yang populer dan digemari di Indonesia, Malaysia, dan Singapura. Mi goreng terbuat dari mi kuning yang digoreng dengan sedikit minyak goreng, dan ditambahkan bawang putih, bawang merah,', 'payakumbuh', 'mie,air panas'),
(3, 'burger', '5de87759bbd9c.jpg', 'Hamburger (atau seringkali disebut dengan burger) adalah sejenis makanan berupa roti berbentuk bundar yang diiris dua dan ditengahnya diisi dengan patty yang biasanya di ambil dari daging, kemudian sa', 'payakumbuh', 'roti,telur,sayur'),
(4, 'nasi padang', '5de877bbdc8f8.jpg', 'Nasi Padang adalah sebuah hidangan yang disajikan secara lengkap secara prasmanan dengan daging, ikan, sayuran, dan makanan pedas dimakan dengan nasi putih, itu adalah komoditas ekspor paling terkenal', 'padang', 'nasi,bumbu&quot;,dll'),
(5, 'mie goreng', '5de877f3b8c6c.jpg', 'adalah makanan yang populer dan digemari di Indonesia, Malaysia, dan Singapura. Mi goreng terbuat dari mi kuning yang digoreng dengan sedikit minyak goreng, dan ditambahkan bawang putih, bawang merah,', 'payakumbuh', 'mie,air panas'),
(6, 'lontong nasi', '5de878480de09.jpg', 'Lontong adalah makanan khas Indonesia yang berkembang di masyarakat Jawa, terbuat dari beras yang dibungkus dalam daun pisang dan dikukus di atas air mendidih selama beberapa jam dan jika air hampir h', 'payakumbuh', 'nasi,bumbu&quot;,sayur sayuran');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `deskripsi_produk` varchar(500) NOT NULL,
  `asal_produk` varchar(200) NOT NULL,
  `bahan_produk` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar_produk`, `deskripsi_produk`, `asal_produk`, `bahan_produk`) VALUES
(1, 'copi', '5de7aef397ecc.jpg', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Kopi merupakan salah satu komoditas di dunia ', 'indonesia', 'copi bubuk,air panas dan lain&quot;'),
(2, 'jus', '5de873a62ec5e.jpg', 'Sari buah atau jus (berasal dari bahasa Inggris juice, tetapi lebih tepatnya fruit juice) adalah cairan yang terdapat secara alami dalam buah-buahan. Sari buah populer dikonsumsi manusia sebagai minuman. Biasanya dibuat dengan cara memblender buah-buahan bersama sediit air dan takaran gula yang sesua', 'payakumbuh', 'buah,air,es batu'),
(3, 'teh', '5de873fe301a5.jpg', 'Teh adalah minuman yang mengandung kafeina, sebuah infusi yang dibuat dengan cara menyeduh daun, pucuk daun, atau tangkai daun yang dikeringkan dari tanaman Camellia sinensis dengan air panas. Teh yang berasal dari tanaman teh dibagi menjadi empat kelompok: teh hitam, teh oolong, teh hijau, dan teh putih.', 'payakumbuh', 'air panas/dingin,'),
(4, 'jus buah', '5de8747222d0c.jpg', 'Sari buah atau jus (berasal dari bahasa Inggris juice, tetapi lebih tepatnya fruit juice) adalah cairan yang terdapat secara alami dalam buah-buahan. Sari buah populer dikonsumsi manusia sebagai minuman. Biasanya dibuat dengan cara memblender buah-buahan bersama sediit air dan takaran gula yang sesua', 'payakumbuh', 'buah,air,es batu'),
(5, 'kopi susu', '5de874cb93382.jpg', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Kopi merupakan salah satu komoditas di dunia', 'payakumbuh', 'gula,air panas/dingin'),
(6, 'jus buah', '5de874fb34188.jpg', 'Sari buah atau jus (berasal dari bahasa Inggris juice, tetapi lebih tepatnya fruit juice) adalah cairan yang terdapat secara alami dalam buah-buahan. Sari buah populer dikonsumsi manusia sebagai minuman. Biasanya dibuat dengan cara memblender buah-buahan bersama sediit air dan takaran gula yang sesua', 'payakumbuh', 'buah,air,es batu'),
(7, 'teh dingin', '5de875318e79c.jpg', 'Teh adalah minuman yang mengandung kafeina, sebuah infusi yang dibuat dengan cara menyeduh daun, pucuk daun, atau tangkai daun yang dikeringkan dari tanaman Camellia sinensis dengan air panas. Teh yang berasal dari tanaman teh dibagi menjadi empat kelompok: teh hitam, teh oolong, teh hijau, dan teh putih.', 'payakumbuh', 'gula,air dingin/air panas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
 ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
MODIFY `id_makanan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
