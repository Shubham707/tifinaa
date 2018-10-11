-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2018 at 10:35 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.1.20-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamaratiffin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) DEFAULT NULL,
  `cus_address` text,
  `cus_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `cus_mobile` varchar(255) NOT NULL,
  `cus_otp` varchar(255) NOT NULL,
  `cus_order` text,
  `spacial` int(11) DEFAULT NULL,
  `medium` int(11) DEFAULT NULL,
  `basic` int(11) DEFAULT NULL,
  `cus_date` varchar(255) DEFAULT NULL,
  `booking_time` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `otp_status` int(11) DEFAULT '0',
  `cus_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_address`, `cus_email`, `password`, `cus_mobile`, `cus_otp`, `cus_order`, `spacial`, `medium`, `basic`, `cus_date`, `booking_time`, `country`, `state`, `city`, `otp_status`, `cus_created`) VALUES
(143, 'sdadsa', 'Dwarka Mor', 'development@bgc.ooo', NULL, '8585916263', '352938', '1', 2, 2, 2, '2018-10-19', '12:32', 'India', 'Andaman and Nicobar Islands', 'Delhi', 1, '2018-10-01 12:28:55'),
(144, 'erfdsf', 'Dwarka Mor', 'pv16061995@gmail.com', NULL, '8585916263', '392106', '1', 2, 2, 2, '2018-10-18', '12:04', 'India', 'Andaman and Nicobar Islands', 'Delhi', 1, '2018-10-01 12:30:17'),
(187, NULL, NULL, NULL, NULL, '8585916263', '344888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-10-03 12:49:06'),
(188, NULL, NULL, NULL, NULL, '8585916263', '327028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-03 12:49:46'),
(189, NULL, NULL, NULL, NULL, '8585916263', '421381', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-03 12:50:06'),
(190, NULL, NULL, NULL, NULL, '8585916263', '442275', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-03 12:51:23'),
(191, NULL, NULL, NULL, NULL, '8585916263', '364730', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-03 12:51:23'),
(192, NULL, NULL, NULL, NULL, '8585916263', '388101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-03 12:51:24'),
(193, NULL, NULL, NULL, NULL, '8585916263', '445661', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-03 12:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `slider_content`) VALUES
(8, 'dsfdsfdsf', '61546-download (1).jpeg', 'dsfsfdsf'),
(11, 'safsafsafsdf', '69878-download (1).jpeg', 'dsfdsfdsfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
