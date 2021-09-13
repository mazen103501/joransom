-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 02:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ransom`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobrequest`
--

CREATE TABLE `jobrequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `major` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gpa` varchar(255) CHARACTER SET utf8 NOT NULL,
  `governorate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `CV` varchar(255) CHARACTER SET utf8 NOT NULL,
  `about_us` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobrequest`
--

INSERT INTO `jobrequest` (`id`, `name`, `email`, `phone`, `major`, `gpa`, `governorate`, `date`, `CV`, `about_us`) VALUES
(3, 'khalid waleed taha', 'khalidwtaha9490@gmail.com', '0781063145', 'Computer Since', 'Accept', 'Aqaba', '2021-09-03', '5.docx', 'khalid'),
(4, '', '', '', '', '', '', '0000-00-00', '', ''),
(5, '', '', '', '', '', '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobrequest`
--
ALTER TABLE `jobrequest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobrequest`
--
ALTER TABLE `jobrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
