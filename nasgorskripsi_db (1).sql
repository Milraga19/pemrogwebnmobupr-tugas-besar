-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 07:10 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasgorskripsi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@nasgorskripsi.id', '12814cbaa6fe0f3a19bcb2ed017a415d');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `nama_depan`, `nama_belakang`, `email`, `subject`, `message`) VALUES
(2, 'malin', 'kundang', 'muh_ijlal@yahoo.com', 'aaa', 'asdasdsd');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `product_name`, `product_price`, `product_description`, `product_detail`, `image`) VALUES
(4, 'Nasi Goreng Rasa Penguji', '13.000', 'Nasi Goreng Pedas sepedas Kritikan Penguji.', 'Secara tampilan Rasa penguji berwarna ke Orange-an. Dan rasanya pedis tapi bikin nambah nafsu makan pastinya ,sama kayak kritik penguji kalau lagi skripsi pedis juga tapi bikin kamu ngerti sama apa yang kamu kerjakan dan sifatnya pedas pastinya.', 'penguji.png'),
(5, 'Nasi Goreng Rasa Pembimbing', '13.000', 'Nasi Goreng Gurih Seperti Soft-nya Pembimbing.', 'Kalau secara tampilan warna Rasa Pembimbing, agak warna kecoklatan. Tapi warna kecoklatan ini bukan karena kecap . Karna kita ngak pake kecap. Tapi bumbu rahasia. Secara tampilan warna aja udah beda sama rasa penguji. Dari segi rasa, Pembimbing lebih agak', 'pembimbing.png'),
(6, 'Pasangan NasgorSkripsi', '5.000', 'Pasangan nasi goreng dengan rasa yang segar dan nikmat.', 'Menu minuman yang terdiri dari dua varian rasa, yaitu esteh mint dan es jeruk, sangat pas diminum bersama dengan nasi goreng yang pedas. Dan jangan lupa jika sudah pesan nasgor skripsi, jangan lupa pasangannya.', 'pasangan.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
