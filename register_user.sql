-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 07:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_user1`
--

CREATE TABLE `register_user1` (
  `user_id` int(10) NOT NULL,
  `myname` text NOT NULL,
  `myemail` varchar(30) NOT NULL,
  `myusername` varchar(20) NOT NULL,
  `mypassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user1`
--

INSERT INTO `register_user1` (`user_id`, `myname`, `myemail`, `myusername`, `mypassword`) VALUES
(28, 'abhinaba', 'abhinab@gmail.com', 'abhi2022', '3a824154b16ed7dab899bf000b80ee'),
(29, '', '', '', ''),
(30, 'shuvo', 'shuvo123@gmail.com', 'shuvo123', '81dc9bdb52d04dc20036dbd8313ed0'),
(31, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `risk_data`
--

CREATE TABLE `risk_data` (
  `risk_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `risk_status` varchar(50) NOT NULL,
  `risk_value` int(20) NOT NULL,
  `risk_profile` varchar(100) NOT NULL,
  `risk_other` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `risk_data`
--

INSERT INTO `risk_data` (`risk_id`, `username`, `risk_status`, `risk_value`, `risk_profile`, `risk_other`) VALUES
('', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_user1`
--
ALTER TABLE `register_user1`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `risk_data`
--
ALTER TABLE `risk_data`
  ADD PRIMARY KEY (`risk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_user1`
--
ALTER TABLE `register_user1`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
