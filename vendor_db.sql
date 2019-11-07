-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2019 at 06:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ledger_data`
--

CREATE TABLE `ledger_data` (
  `date` date NOT NULL,
  `particulars` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `voucher_type` varchar(200) NOT NULL,
  `voucher_no` int(20) NOT NULL,
  `debit` int(100) NOT NULL,
  `credit` int(100) NOT NULL,
  `id` int(20) UNSIGNED NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `order_details` text NOT NULL,
  `order_generated` datetime NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'pending confirmation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `vendor_id`, `order_details`, `order_generated`, `order_status`) VALUES
(1, 3, 'a:2:{i:0;a:7:{s:11:\"vendor_code\";s:8:\"new code\";s:10:\"product_id\";s:1:\"4\";s:6:\"length\";s:4:\"4455\";s:5:\"width\";s:3:\"425\";s:9:\"thickness\";s:2:\"25\";s:8:\"quantity\";s:2:\"42\";s:6:\"remark\";s:5:\"rahul\";}i:1;a:7:{s:11:\"vendor_code\";s:6:\"mat123\";s:10:\"product_id\";s:1:\"3\";s:6:\"length\";s:2:\"34\";s:5:\"width\";s:2:\"21\";s:9:\"thickness\";s:2:\"43\";s:8:\"quantity\";s:1:\"5\";s:6:\"remark\";s:5:\"rohit\";}}', '2019-10-23 10:02:08', 'pending confirmation'),
(2, 2, 'a:1:{i:0;a:7:{s:11:\"vendor_code\";s:7:\"asfasdf\";s:10:\"product_id\";s:1:\"3\";s:6:\"length\";s:2:\"34\";s:5:\"width\";s:2:\"12\";s:9:\"thickness\";s:2:\"34\";s:8:\"quantity\";s:3:\"145\";s:6:\"remark\";s:11:\"test remark\";}}', '2019-10-30 14:46:13', 'pending confirmation'),
(3, 3, 'a:1:{i:0;a:7:{s:11:\"vendor_code\";s:5:\"rahul\";s:10:\"product_id\";s:1:\"7\";s:6:\"length\";s:2:\"31\";s:5:\"width\";s:3:\"123\";s:9:\"thickness\";s:1:\"2\";s:8:\"quantity\";s:2:\"23\";s:6:\"remark\";s:15:\"somrrefdfsdlihg\";}}', '2019-11-01 12:29:55', 'pending confirmation'),
(4, 2, 'a:1:{i:0;a:7:{s:11:\"vendor_code\";s:0:\"\";s:10:\"product_id\";s:2:\"10\";s:6:\"length\";s:0:\"\";s:5:\"width\";s:0:\"\";s:9:\"thickness\";s:0:\"\";s:8:\"quantity\";s:0:\"\";s:6:\"remark\";s:0:\"\";}}', '2019-11-01 12:42:12', 'pending confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `sale_rate` double NOT NULL,
  `gst_rate` int(11) NOT NULL,
  `remark` text NOT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `master_added` datetime NOT NULL,
  `master_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `grade`, `quality`, `sale_rate`, `gst_rate`, `remark`, `unit`, `master_added`, `master_modified`) VALUES
(5, 'Foam Mattress', 'Dual Sense', '5 Inch', 101.6789, 18, '1+4', 'Sq.Ft', '2019-10-30 14:55:16', NULL),
(6, 'Foam Mattress', 'Dual Sense', '6 Inch', 106, 18, '1+5', 'Sq.Ft', '2019-10-30 14:56:08', NULL),
(7, 'Foam Mattress', 'Cloud Sense', '6 Inch', 146, 18, '1+1+4', 'Sq.Ft', '2019-10-30 14:58:34', NULL),
(8, 'Mattress Protector', '78x36', 'Terry White', 495, 5, 'packing', 'Pcs', '2019-10-30 15:00:49', NULL),
(9, 'Pillow', '17x27', 'Quilted Box Top', 292, 18, 'without compress', 'Pcs', '2019-10-30 15:01:58', NULL),
(10, 'Pl Foam', 'HR', '32 Density', 165, 18, 'with Stamp', 'kg', '2019-10-30 15:14:03', NULL),
(11, 'Commercial Foam', 'Star Gold', '32 Density', 7, 18, 'Plain Packing', 'mm', '2019-10-30 15:16:52', NULL),
(12, 'Foam Quilt', 'SuperSoft', '12 mm', 238, 5, 'Dark Colours', 'Meter', '2019-10-30 15:19:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `user_added` datetime NOT NULL DEFAULT current_timestamp(),
  `user_modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile`, `email`, `user_type`, `password`, `name`, `company_name`, `user_added`, `user_modified`) VALUES
(1, 1, 'admin@plfoams.in', 'admin', '1', 'admin', '', '0000-00-00 00:00:00', NULL),
(3, 8286676719, 'corporate@plfoams.in', 'staff', '1234', 'rahul singh gurjar', 'premratan comcast pvt ltd', '0000-00-00 00:00:00', NULL),
(6, 9022716549, 'test@test.com', 'vendor', '1234', 'rahul', 'premratan concast pvt ltd', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE `vendor_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipping_address` text DEFAULT NULL,
  `shipping_city` varchar(60) DEFAULT NULL,
  `shipping_pincode` int(11) DEFAULT NULL,
  `shipping_state` varchar(60) DEFAULT NULL,
  `shipping_country` varchar(60) DEFAULT NULL,
  `credit_days` int(11) DEFAULT NULL,
  `credit_limit` int(11) DEFAULT NULL,
  `shipping_distance` int(11) DEFAULT NULL,
  `billing_address` varchar(200) DEFAULT NULL,
  `billing_city` varchar(200) DEFAULT NULL,
  `billing_pincode` varchar(200) DEFAULT NULL,
  `billing_state` varchar(200) DEFAULT NULL,
  `billing_country` varchar(200) DEFAULT NULL,
  `billing_distance` varchar(200) DEFAULT NULL,
  `website` varchar(60) DEFAULT NULL,
  `reference` varchar(60) DEFAULT NULL,
  `owner` varchar(60) DEFAULT NULL,
  `gst_place` varchar(60) DEFAULT NULL,
  `state_code` varchar(60) DEFAULT NULL,
  `gst_no` varchar(60) DEFAULT NULL,
  `account_no` bigint(60) UNSIGNED DEFAULT NULL,
  `bank_name` varchar(60) DEFAULT NULL,
  `account_type` varchar(60) DEFAULT NULL,
  `ifsc` varchar(60) DEFAULT NULL,
  `branch` varchar(60) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`id`, `shipping_address`, `shipping_city`, `shipping_pincode`, `shipping_state`, `shipping_country`, `credit_days`, `credit_limit`, `shipping_distance`, `billing_address`, `billing_city`, `billing_pincode`, `billing_state`, `billing_country`, `billing_distance`, `website`, `reference`, `owner`, `gst_place`, `state_code`, `gst_no`, `account_no`, `bank_name`, `account_type`, `ifsc`, `branch`, `status`) VALUES
(3, 'goregaon', 'mumbai', 400065, 'maharashtra', 'india', 30, 100000, 10, 'goregaon', 'mumbai', '400065', 'maharashtra', 'india', '10', NULL, NULL, NULL, 'maharshatra', 'mh', 'somerandom', 1231412414, 'union', 'current', 'UBIN00000000', 'goregaon', 1),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_pref`
--

CREATE TABLE `vendor_pref` (
  `p_in` int(11) NOT NULL,
  `vendor_id` int(110) NOT NULL,
  `product_id` int(110) NOT NULL,
  `product_rate` varchar(100) DEFAULT NULL,
  `product_remark` varchar(100) DEFAULT NULL,
  `added_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_pref`
--

INSERT INTO `vendor_pref` (`p_in`, `vendor_id`, `product_id`, `product_rate`, `product_remark`, `added_date`, `modified_date`) VALUES
(11, 3, 5, '100', '1+4', '2019-10-30 16:22:38', NULL),
(12, 3, 6, '106', '1+5', '2019-10-30 16:22:38', NULL),
(13, 3, 7, '146', '1+1+4', '2019-10-30 16:22:38', NULL),
(14, 3, 8, '495', 'packing', '2019-10-30 16:22:38', NULL),
(15, 3, 10, '165', 'with Stamp', '2019-10-30 16:22:38', NULL),
(16, 3, 11, '7', 'Plain Packing', '2019-10-30 16:22:38', NULL),
(17, 3, 12, '238', 'Dark Colours', '2019-10-30 16:22:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ledger_data`
--
ALTER TABLE `ledger_data`
  ADD UNIQUE KEY `voucher_no` (`voucher_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`mobile`);

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_pref`
--
ALTER TABLE `vendor_pref`
  ADD PRIMARY KEY (`p_in`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_pref`
--
ALTER TABLE `vendor_pref`
  MODIFY `p_in` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
