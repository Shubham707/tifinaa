-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2018 at 06:39 PM
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
  `zipcode` varchar(200) DEFAULT NULL,
  `otp_status` int(11) DEFAULT '0',
  `cus_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_address`, `cus_email`, `password`, `cus_mobile`, `cus_otp`, `cus_order`, `spacial`, `medium`, `basic`, `cus_date`, `booking_time`, `country`, `state`, `city`, `zipcode`, `otp_status`, `cus_created`) VALUES
(143, 'sdadsa', 'Dwarka Mor', 'development@bgc.ooo', '827ccb0eea8a706c4c34a16891f84e7b', '85859126263', '352938', '1', 2, 2, 2, '2018-10-19', '12:32', 'India', 'Andaman and Nicobar Islands', 'Delhi', '', 1, '2018-10-01 12:28:55'),
(144, 'erfdsf', 'Dwarka Mor', 'pv16061995@gmail.com', NULL, '85859356263', '392106', '1', 2, 2, 2, '2018-10-18', '12:04', 'India', 'Andaman and Nicobar Islands', 'Delhi', '', 1, '2018-10-01 12:30:17'),
(201, NULL, 'gurgaon', 'shubham707@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8585916263', '570416', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '2018-10-05 06:46:47'),
(202, NULL, 'abcd', 'aa@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', '4354547445', '523021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-11 05:15:10'),
(203, NULL, 'abcd', 'aa@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', '4354567445', '170129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-11 05:23:42'),
(204, NULL, 'abcd', 'aa@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', '4354567045', '165243', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-11 08:54:51'),
(205, NULL, 'abcd', 'aa@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4354567045', '709896', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-11 09:11:00'),
(206, NULL, 'abcd', 'aa@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', '4354568045', '120897', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-11 09:29:24'),
(207, NULL, 'abcd', 'aa@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4354568045', '652958', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-10-11 09:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_product_name` varchar(255) DEFAULT NULL,
  `order_price` varchar(155) DEFAULT NULL,
  `order_total` varchar(255) DEFAULT NULL,
  `order_mobile` varchar(255) DEFAULT NULL,
  `cash` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `order_address` text,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `thali` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `arrivel_time` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `confirmation` int(11) DEFAULT NULL,
  `deliver_start` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_product_name`, `order_price`, `order_total`, `order_mobile`, `cash`, `name`, `order_address`, `product_id`, `quantity`, `thali`, `user_id`, `arrivel_time`, `country`, `state`, `city`, `zipcode`, `confirmation`, `deliver_start`, `created_at`) VALUES
(22, 'Regular Thali', NULL, '110', '9457120206', 'online', 'ShubhamVerma', 'Dwarka Mor', NULL, 1, NULL, NULL, '', 'India', 'Andaman and Nicobar Islands', 'Delhi', '206001', NULL, 1, '2018-10-09 13:04:05'),
(23, 'Regular Thali', NULL, '110', '9457120206', 'online', 'ShubhamSahu', 'Dwarka Mor', NULL, 1, NULL, NULL, '', 'India', 'Andaman and Nicobar Islands', 'Delhi', '206001', NULL, 1, '2018-10-03 13:04:05'),
(24, 'Regular Thali', NULL, '110', '9457120206', 'cash', 'ShubhamVerma', 'Dwarka Mor', NULL, 1, NULL, NULL, '', 'India', 'Andaman and Nicobar Islands', 'Delhi', '206001', NULL, 0, '2018-10-09 14:22:49'),
(25, 'Regular Thali', NULL, '110', '9457120206', 'cash', 'ShubhamVerma', 'Dwarka Mor', NULL, 1, NULL, NULL, '', 'India', 'Andaman and Nicobar Islands', 'Delhi', '206001', NULL, 0, '2018-10-03 14:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `slider_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `img_url`, `slider_content`) VALUES
(8, 'dsfdsfdsf', '90763-banner-4.jpg', '::1/sliders/90763-banner-4.jpg', 'dsfsfdsf'),
(11, 'safsafsafsdf', '46222-banner-3.jpg', '::1/sliders/46222-banner-3.jpg', 'dsfdsfdsfds'),
(13, 'wqewqewqe', '80964-banner-1.jpg', '::1/sliders/80964-banner-1.jpg', 'erewrewrwerw');

-- --------------------------------------------------------

--
-- Table structure for table `thali`
--

CREATE TABLE `thali` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `discount` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thali`
--

INSERT INTO `thali` (`id`, `title`, `description`, `price`, `image`, `img_url`, `discount`, `total_price`) VALUES
(3, 'Basic Thali', 'Packed Lunch, Packed Dinner Dal, Sabzi, Paneer, Papad, Salad, Achar, 4 Roti, Rice', '70', '56679-basic.jpg', NULL, '12', '55'),
(4, 'Regular Thali', 'Packed Lunch, Packed Dinner Dal, Sabzi, Paneer, Papad, Salad, Achar, 2 Roti, 1 Naan, Rice', '110', '47915-regular.jpg', NULL, '12', '100'),
(5, 'Special Thali', 'Packed Lunch, Packed Dinner Dal, Sabzi, Paneer, Raita, Sweet, Achar, Salad, Lachha Prantha, Naan, Rice', '150', '10658-special.jpg', NULL, '10', '135');

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `thali`
--
ALTER TABLE `thali`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `thali`
--
ALTER TABLE `thali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
