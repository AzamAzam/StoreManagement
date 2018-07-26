-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 04:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_detail` varchar(500) NOT NULL,
  `p_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_price`, `p_detail`, `p_image`) VALUES
(57, 'Ali', 90, 'jhgfd', '../img/DBImg1532499192.png'),
(58, 'new2', 100, 'new prosuca', '../img/DBImg1532538657.png'),
(59, 'prosucts', 45000, 'jgjf', '../img/DBImg1532538679.png'),
(60, 'ehyw', 6655, 'asdfghj', '../img/DBImg1532538700.png'),
(61, 'sdfghj', 789, 'qasxcwdcv', '../img/DBImg1532538716.png'),
(62, 'poiuygf', 951, 'lkjhgfxiuyt', '../img/DBImg1532538729.png'),
(63, 'uhgfcx', 74158, 'oiuhgfdxcvbnk', '../img/DBImg1532538745.png'),
(64, 'dfgh', 74, 'uygfcd', '../img/DBImg1532543983.png'),
(65, 'oijuhg', 952, 'kjhgfdxcvbn', '../img/DBImg1532544013.png'),
(66, 'sdfghn', 652, 'dcgfhjj', '../img/DBImg1532544026.png'),
(67, 'weerdtfgh', 96512, 'xcvbjn', '../img/DBImg1532544038.png'),
(68, 'srdfvgbhn', 89645132, 'sdfgvbhn', '../img/DBImg1532544052.png'),
(69, 'edtfyghbnj', 87946512, 'dfcgvbhn', '../img/DBImg1532544065.png'),
(70, 'esdfyghnj', 4123546, 'zsdxfcjgvbnkj', '../img/DBImg1532544079.png'),
(71, 'sredfyghj', 87645213, 'trdfgkhgydfkjk', '../img/DBImg1532544091.png'),
(72, 'recgvbhn', 55985, 'jhdgfghjkh', '../img/DBImg1532544110.png'),
(73, 'xdcfgvbh', 254851, 'fghbjnhjgf', '../img/DBImg1532544129.png'),
(74, 'gffhghj', 541, 'hfdjhg', '../img/DBImg1532544138.png'),
(75, 'gfxgcvhbjn', 5454, 'jfghfhbkj', '../img/DBImg1532544148.png'),
(76, 'dxdfcgvhjbkn', 652356899, 'fghjlk;liuy', '../img/DBImg1532544165.png'),
(77, 'dxcgvhjbn', 5412548, 'fgjhbjnkml,', '../img/DBImg1532544177.png'),
(78, 'dfghjkj', 512548754, 'ghvhkjgfgvhbjk', '../img/DBImg1532544189.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(1, 'Admin', '1234', 'Admin'),
(3, 'azam', '98765', 'Manager'),
(12, 'azamm', '12345', 'Manager'),
(13, '', '', ''),
(14, 'User', 'name', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
