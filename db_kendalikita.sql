-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 10:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kendalikita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_pompa`
--

CREATE TABLE `tb_jadwal_pompa` (
  `id_jadwal` int(11) NOT NULL,
  `id_pompa` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `hari` varchar(20) NOT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_pompa`
--

CREATE TABLE `tb_log_pompa` (
  `id_log` int(11) NOT NULL,
  `id_pompa` int(11) NOT NULL,
  `aksi` enum('ON','OFF') NOT NULL,
  `waktu` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pompa`
--

CREATE TABLE `tb_pompa` (
  `id_pompa` int(11) NOT NULL,
  `nama_pompa` varchar(100) NOT NULL,
  `kode_pompa` varchar(50) NOT NULL,
  `status` enum('ON','OFF') DEFAULT 'OFF',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal_pompa`
--
ALTER TABLE `tb_jadwal_pompa`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_log_pompa`
--
ALTER TABLE `tb_log_pompa`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_pompa`
--
ALTER TABLE `tb_pompa`
  ADD PRIMARY KEY (`id_pompa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jadwal_pompa`
--
ALTER TABLE `tb_jadwal_pompa`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log_pompa`
--
ALTER TABLE `tb_log_pompa`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pompa`
--
ALTER TABLE `tb_pompa`
  MODIFY `id_pompa` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
