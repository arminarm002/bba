-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 01:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_scan`
--

CREATE TABLE `tb_scan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `user_weight` varchar(255) NOT NULL,
  `user_fat` varchar(255) NOT NULL,
  `user_visceralfat` varchar(255) NOT NULL,
  `user_muscle` varchar(255) NOT NULL,
  `user_bodyage` varchar(255) NOT NULL,
  `user_metabolism` varchar(255) NOT NULL,
  `user_bmi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_scan`
--

INSERT INTO `tb_scan` (`id`, `user_id`, `date`, `user_weight`, `user_fat`, `user_visceralfat`, `user_muscle`, `user_bodyage`, `user_metabolism`, `user_bmi`) VALUES
(16, 10, '2023-10-19', '1', '1', '1', '1', '1', '1', '1'),
(17, 10, '2023-10-19', '2', '2', '2', '2', '2', '2', '2'),
(18, 10, '2023-10-19', '3', '3', '3', '3', '3', '3', '3'),
(19, 10, '2023-10-19', '4', '4', '4', '4', '4', '4', '4'),
(20, 10, '2023-10-19', '5', '5', '5', '5', '5', '5', '5'),
(21, 10, '2023-10-19', '6', '6', '6', '6', '6', '6', '6'),
(22, 10, '2023-10-20', '7', '7', '7', '7', '7', '7', '7'),
(23, 10, '2023-10-20', '8', '8', '8', '8', '8', '8', '8'),
(24, 10, '2023-10-20', '9', '90', '900', '9000', '90000', '900000', '9000000'),
(25, 10, '2023-10-20', '10', '10', '10', '10', '10', '10', '10'),
(26, 10, '2023-10-20', '11', '11', '11', '11', '11', '11', '11'),
(27, 10, '2023-10-20', '70', '20', '6', '25', '30', '2000', '25'),
(29, 13, '2023-10-20', '50', '18', '1', '12', '20', '1599', '15'),
(30, 13, '2023-10-20', '3', '3', '3', '3', '3', '3', '3'),
(31, 13, '2023-10-20', '2', '20', '2', '2', '2', '2', '2'),
(32, 13, '2023-10-20', '50', '40', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `fullname`, `phone`, `gender`, `level`) VALUES
(10, 'arm', '$2y$10$IJFKQ9WV2mEqNaF3V2h9yeq2iQF5zC2QR9XTpFrfm0z38DVikgci2', 'สุรเดช คุรุภัณฑ์', '0988280992', 'male', '2'),
(11, 'arm2', '$2y$10$0KJg3m7jTxtNHHbe3nugiuw073Qu9VzkdshKqkb0f7wP.pRbd.CF6', 'ผู้ใช้งานระดับ 1', '123456789', 'male', '1'),
(12, 'Porpla_Independence@hotmail.com', '$2y$10$TeeQ5YBpjWVDyM2ygfJmDuZfF.qQsa0r6DHgqxh4g8vntHpLTs1jC', 'Patiphol P.', '0889798914', 'male', '1'),
(13, 'arm3', '$2y$10$PC70XQb5VoM/iqCcOVj.2u2Zf2KU5Exjpk.bj5hp6.zxvUJHlAeWe', 'สมหญิง', '123456789', 'female', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_scan`
--
ALTER TABLE `tb_scan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_scan`
--
ALTER TABLE `tb_scan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
