-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 02:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it3_bot_nalang`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `lrn` bigint(20) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`lrn`, `lastname`, `firstname`) VALUES
(98312039, 'Beningging', 'Princess Jessnasty'),
(198795475, 'Quilab', 'Oneechan~~~ kyaa'),
(290385049, 'Sombol', 'Desiree'),
(5439825470, 'Catipay', 'Jay'),
(8739283509, 'Heart', 'Heart'),
(9259872394, 'Sumino', 'Chelsey'),
(12378913767, 'Almeda', 'Jerick Carlo'),
(23489091823, 'Back spring', 'Boy'),
(98275923851, 'Paganpan', 'Jessa'),
(234890890134, 'Lacuna', 'Heart'),
(928475873897, 'Sumalinog', 'Matthew'),
(987549837294, 'Yummy Boy', 'Hot and Spicy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`lrn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
