-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 05:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `uraian_barang` varchar(100) DEFAULT NULL,
  `distributor` varchar(50) DEFAULT NULL,
  `kwantitas` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `asal_barang` varchar(50) DEFAULT NULL,
  `tgl_perolehan` date DEFAULT NULL,
  `keadaan_barang` varchar(20) DEFAULT NULL,
  `harga` decimal(15,2) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `tanggal`, `kode_barang`, `nama_barang`, `uraian_barang`, `distributor`, `kwantitas`, `tahun`, `asal_barang`, `tgl_perolehan`, `keadaan_barang`, `harga`, `keterangan`) VALUES
(2, '0000-00-00', 'A9212', 'Time Machine', 'Mesin Waktu', 'Zwreff cult\'s', 666, 2023, 'Hell\'s Paradise', '0000-00-00', 'Baru', 200000.00, 'Time Machine or (mesin waktu) from indonesian language that unexpetedly arrived');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
