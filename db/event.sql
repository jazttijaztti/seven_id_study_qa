-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2019 at 06:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qa`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `eventdate` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `hotel_id` int(8) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `delete_flg` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `eventdate`, `link`, `description`, `hotel_id`, `image_name`, `delete_flg`) VALUES
(1, 'ベトナムからコーポレートスタッフを募集します', '2.10', '', 'ラーメン食べまくるイベントです。', 1, '', 0),
(2, 'ベトナムからコーポレートスタッフを募集します', '2.10', '', 'ラーメン食べまくるイベントです。', 1, '', 0),
(3, 'ベトナムからコーポレートスタッフを募集します', '2.10', '', 'ラーメン食べまくるイベントです。', 1, '', 0),
(4, 'ベトナムからコーポレートスタッフを募集します', '2.10', '', 'ラーメン食べまくるイベントです。', 1, '', 0),
(5, 'ベトナムからコーポレートスタッフを募集します', '2.10', '', 'ラーメン食べまくるイベントです。', 1, '', 0),
(6, 'ベトナムからコーポレートスタッフを募集します', '2.10', '', 'ラーメン食べまくるイベントです。', 1, 'tin.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
