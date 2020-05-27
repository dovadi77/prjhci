-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 04:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'nando', '2d64e7e45f6e67f20ea8ca320d8f41dcdf8d7bd9a3b1cf5be085efcf3148b924401d554b786697ed5265c34a59adaef29d811bc1e0eda13503363bbc23c83089', 'Fernando Gunawan');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `tipe`) VALUES
('c1', 'Affogato', '20000', 'coffee'),
('c2', 'Cappucino', '25000', 'coffee'),
('c3', 'Flat White', '27000', 'coffee'),
('c4', 'Espresso', '25000', 'coffee'),
('c5', 'Americano', '23000', 'coffee'),
('c6', 'Mocha', '29000', 'coffee'),
('c7', 'Ristretto', '22000', 'coffee'),
('d1', 'Cinnamon Bun', '15000', 'dessert'),
('d2', 'Grilled Banana', '16000', 'dessert'),
('d3', 'Glazed Donut', '12000', 'dessert'),
('d4', 'Strawberry Roll', '17000', 'dessert'),
('d5', 'Pecan Pie', '15000', 'dessert'),
('hm1', 'Mie Goreng', '25000', 'heavy'),
('hm2', 'Mie Goreng Seafood', '27000', 'heavy'),
('hm3', 'Nasi Ayam', '29000', 'heavy'),
('hm4', 'Nasi Goreng', '31000', 'heavy'),
('hm5', 'Nasi Goreng Seafood', '33000', 'heavy'),
('hm6', 'Nasi Goreng Spesial', '35000', 'heavy'),
('lm1', 'Cream Soup', '20000', 'light'),
('lm2', 'French Fries', '22000', 'light'),
('lm3', 'Pisang Bakar', '24000', 'light'),
('lm4', 'Platter', '26000', 'light'),
('lm5', 'Roti Bakar', '28000', 'light'),
('lm6', 'Salad', '30000', 'light'),
('lm7', 'Tuna Sandwich', '32000', 'light'),
('nc1', 'Chocolate Latte', '18000', 'noncoffee'),
('nc2', 'Classic Tea', '20000', 'noncoffee'),
('nc3', 'Honey Mint Lemonade', '22000', 'noncoffee'),
('nc4', 'Lemon Tea', '24000', 'noncoffee'),
('nc5', 'Matcha Latte', '26000', 'noncoffee'),
('nc6', 'Mojito', '28000', 'noncoffee'),
('nc7', 'Sparkling Mint Lemonade', '30000', 'noncoffee');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(5) NOT NULL,
  `cashier_id` varchar(5) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `nominal_beli` varchar(15) NOT NULL,
  `nominal_bayar` varchar(15) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

DROP TABLE IF EXISTS `transaksi_detail`;
CREATE TABLE `transaksi_detail` (
  `transd_id` int(11) NOT NULL,
  `order_id` varchar(5) NOT NULL,
  `menu_id` varchar(5) NOT NULL,
  `add_info` text NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`transd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `transd_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
