-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 12:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

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
  `mypassword` varchar(100) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user1`
--

INSERT INTO `register_user1` (`user_id`, `myname`, `myemail`, `myusername`, `mypassword`,`image_url`) VALUES
('root2911', 'root', 'root@root.in', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2','images/Screenshot.png');

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
('root147', 'root', 'Aggressive', 5, '18 to 30 years old`I currently have no emergency funds`More than 30%`0`Strongly disagree`Future Lifestyle Improvement`More than 30% per annum`Strongly agree`potential return of more than 15% per annum`Average Returns: 24.5% Best Returns: 54% Worst Returns: -30%`');

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
