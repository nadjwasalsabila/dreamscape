-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2025 at 04:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdream`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'MARK LEE', 'Lee Min-Hyung atau biasa di panggil Mark Lee, lebih dikenal dengan nama Mark adalah rapper, dancer, dan penyanyi berkebangsaan Kanada. Ia merupakan anggota dari boyband asal Korea Selatan, NCT. Mark tergabung dalam 3 sub-unit NCT, yakni NCT U, NCT 127, dan NCT Dream.', 'mark.jpg', '2025-12-02 19:47:22', 'admin'),
(2, 'HUANG RENJUN', 'Huáng Rénjùn adalah seorang penyanyi Tiongkok yang berada di bawah kontrak SM Entertainment. Ia adalah anggota grup vokal laki-laki NCT dan sub-unit NCT Dream.', 'renjun.jpg', '2025-12-23 19:55:26', 'admin'),
(3, 'LEE JENO', 'Lee Je-no adalah seorang penyanyi, rapper, penari, dan penulis lagu Korea Selatan yang berada di bawah kontrak SM Entertainment. Ia adalah anggota grup vokal laki-laki NCT, sub-unit NCT Dream, serta debut di sub-unit NCT U melalui album NCT 2020 Resonance Pt. 1.', 'jeno.jpg', '2025-12-23 19:55:26', 'admin'),
(4, 'LEE HAECHAN', 'Lee Dong-hyeok lebih dikenal dengan nama Haechan, Ia merupakan salah satu anggota dari boy band asal Korea Selatan, NCT, serta bagian dari tiga sub-unit NCT, NCT 127, NCT Dream, dan NCT U.', 'haechan.jpg', '2025-12-06 19:55:26', 'admin'),
(5, 'NA JAEMIN', 'Na Jae-min adalah seorang penyanyi idola dan aktor Korea Selatan yang berada di bawah kontrak SM Entertainment. Ia adalah anggota grup vokal laki-laki NCT dan sub-unit NCT Dream. Pada tahun 2020, melalui album NCT 2020 Resonance Pt. 1, ia debut sebagai anggota sub-unit NCT U.', 'jaemin.jpg', '2025-12-13 19:55:26', 'admin'),
(6, 'ZHONG CHENLE', 'Zhong Chenle, yang lebih dikenal sebagai Chenle, adalah seorang penyanyi, penulis lagu, penari dan pemeran Tiongkok yang berbasis di Seoul, Korea Selatan. Ia adalah anggota grup vokal laki-laki Korea Selatan NCT, sebagai bagian dari sub-unit NCT Dream.', 'chenle.jpg', '2025-12-22 19:55:26', 'admin'),
(7, 'PARK JISUNG', 'Park Ji-sung, atau Jisung, adalah seorang penyanyi Korea Selatan yang berada di bawah naungan SM Entertainment. Ia adalah anggota grup vokal laki-laki NCT dan sub-unit NCT Dream. Posisinya di NCT Dream adalah sebagai penari utama dan anggota termuda.', 'jisung.jpg', '2025-12-05 19:55:26', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`) VALUES
(1, 'nct dream 1.jpg'),
(2, 'nct dream 2.jpg'),
(3, 'nct dream 3.jpg'),
(4, 'nct dream 4.jpg'),
(5, 'nct dream 5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
