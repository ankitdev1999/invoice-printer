-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 06:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `inv_no` text NOT NULL,
  `inv_date` date NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_add` varchar(150) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `grand_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `inv_no`, `inv_date`, `c_name`, `c_add`, `c_city`, `grand_total`) VALUES
(48, '10/2023', '2023-02-09', 'ram', 'f-22', 'Delhi', 1700),
(49, '10/2023', '2023-02-09', 'ram', 'f-22', 'Delhi', 1700),
(50, '01/21-22', '2023-02-08', 'Amit', 'Delhi', 'DElhi', 850),
(51, '520', '2023-02-21', 'Ram', 'Singh', 'delhi', 240),
(52, '520', '2023-02-21', 'Ram', 'Singh', 'delhi', 0),
(53, '520', '2023-02-21', 'Ram', 'Singh', 'delhi', 0),
(54, '520', '2023-02-21', 'Ram', 'Singh', 'delhi', 0),
(55, 'g', '2023-02-01', 'g', 'gf', 'fg', 64),
(56, 'jkh', '2023-02-09', 'jh', 'jh', 'jhk', 52),
(57, 'jkh', '2023-02-09', 'jh', 'jh', 'jhk', 0),
(58, 'jkh', '2023-02-09', 'jh', 'jh', 'jhk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inv_product`
--

CREATE TABLE `inv_product` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` double(20,2) NOT NULL,
  `p_qt` double(20,2) NOT NULL,
  `total` double(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inv_product`
--

INSERT INTO `inv_product` (`id`, `sid`, `p_name`, `p_price`, `p_qt`, `total`) VALUES
(66, 48, 'Pro1', 100.00, 2.00, 200.00),
(67, 48, 'Pro2', 15.00, 100.00, 1500.00),
(68, 49, 'Pro1', 100.00, 2.00, 200.00),
(69, 49, 'Pro2', 15.00, 100.00, 1500.00),
(70, 50, 'aam', 100.00, 2.00, 200.00),
(71, 50, 'kela', 20.00, 5.00, 100.00),
(72, 50, 'aanar', 10.00, 55.00, 550.00),
(73, 51, 'kela', 10.00, 24.00, 240.00),
(74, 52, 'kela', 10.00, 24.00, 240.00),
(75, 53, 'kela', 10.00, 24.00, 240.00),
(76, 54, 'kela', 10.00, 24.00, 240.00),
(77, 55, 'gf', 8.00, 8.00, 64.00),
(78, 56, 'khj', 2.00, 2.00, 4.00),
(79, 56, '24', 24.00, 2.00, 48.00),
(80, 57, 'khj', 2.00, 2.00, 4.00),
(81, 58, 'khj', 2.00, 2.00, 4.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_product`
--
ALTER TABLE `inv_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `inv_product`
--
ALTER TABLE `inv_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
