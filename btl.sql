-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 10:57 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

CREATE TABLE `bg` (
  `id` int(10) UNSIGNED NOT NULL,
  `td` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nd` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`id`, `td`, `nd`) VALUES
(1, 'asfljaslfjalfjlajfljas', 'alsdjflajflajsfljalfjlak'),
(2, 'aksjdflsjkfldkj', 'alsdjflasjflkj');

-- --------------------------------------------------------

--
-- Table structure for table `bt`
--

CREATE TABLE `bt` (
  `id` int(10) UNSIGNED NOT NULL,
  `td` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nd` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bt`
--

INSERT INTO `bt` (`id`, `td`, `nd`) VALUES
(1, 'alksdfjl', 'alskjdflajkf'),
(2, 'alksjdflkjasdflkjalsdfj', 'alsdjkflaskjfdlakj');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'abc'),
(2, 'admin1', 'abc'),
(3, 'admin4', 'abc'),
(4, 'admin8', 'abc'),
(5, 'admin7', 'abc'),
(6, 'alksdjflskjfdl', '123'),
(7, 'laksjfdlafj', 'hjk');

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE `tb` (
  `id` int(10) UNSIGNED NOT NULL,
  `td` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nd` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb`
--

INSERT INTO `tb` (`id`, `td`, `nd`) VALUES
(1, 'abc', 'asldfk'),
(2, 'Dinh Cong Don', 'Da xong thong bao ok'),
(3, 'alskdjflskflk', 'alskdjflaskjfdlkj'),
(4, 'aksjdfklajshdfklajsf;ldjka;lfkj', 'aksdfj;alksjfdl;kj'),
(5, 'lskjflskjflkj', 'slkjdflsjflkj'),
(6, 'alsdkfjlaksjdflkasjflkj', 'thong bao moi them');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bt`
--
ALTER TABLE `bt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb`
--
ALTER TABLE `tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg`
--
ALTER TABLE `bg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bt`
--
ALTER TABLE `bt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb`
--
ALTER TABLE `tb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
