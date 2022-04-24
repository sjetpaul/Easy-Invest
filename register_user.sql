-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 02:05 PM
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
  `user_id` varchar(20) NOT NULL,
  `myname` text NOT NULL,
  `myemail` varchar(30) NOT NULL,
  `myusername` varchar(20) NOT NULL,
  `mypassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user1`
--

INSERT INTO `register_user1` (`user_id`, `myname`, `myemail`, `myusername`, `mypassword`) VALUES
('abhinaba1922', 'abhinaba', 'abhinaba@gmail.com', 'abhinaba', 'b1ab1e892617f210425f658cf1d361b5489028c8771b56d845fe1c62c1fbc8b0'),
('root1175', 'root', 'root@gmail.com', 'root', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2');

-- --------------------------------------------------------

--
-- Table structure for table `risk_data`
--

CREATE TABLE `risk_data` (
  `risk_id` varchar(50) NOT NULL,
  `myusername` varchar(50) NOT NULL,
  `risk_str` varchar(50) NOT NULL,
  `risk_status` int(20) NOT NULL,
  `risk_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `risk_data`
--

INSERT INTO `risk_data` (`risk_id`, `myusername`, `risk_str`, `risk_status`, `risk_profile`) VALUES
('abhinaba280', 'abhinaba', 'Moderate', 3, '31 to 40 years old`4 to 6 months`21% to 30%`2 to 3`Neutral`Capital Appreciation`5%-10% per annum`Disagree`Potential return of 15% per annum`Average Returns: 19% Best Returns: 30% Worst Returns: -20%`'),
('root116', 'root', 'Moderately Aggressive', 4, '18 to 30 years old`I currently have no emergency funds`I currently have no income`More than 3`Strongly disagree`Future Lifestyle Improvement`More than 30% per annum`Strongly disagree`potential return of more than 15% per annum`Average Returns: 24.5% Best Returns: 54% Worst Returns: -30%`');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
