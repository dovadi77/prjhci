-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 02:06 PM
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
CREATE DATABASE IF NOT EXISTS `pos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pos`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
CREATE TABLE IF NOT EXISTS `menu` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
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
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cashier_id` varchar(5) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `nominal_beli` varchar(15) NOT NULL,
  `nominal_bayar` varchar(15) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `cashier_id`, `payment`, `nominal_beli`, `nominal_bayar`, `waktu`) VALUES
(1, '1', 'cash', 'Rp. 45.000', 'Rp. 45.000', '2020-05-31 18:55:52'),
(2, '1', 'cash', 'Rp. 65.000', 'Rp. 65.000', '2020-05-31 19:01:53'),
(3, '1', 'cash', 'Rp. 72.000', 'Rp. 72.000', '2020-05-31 19:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

DROP TABLE IF EXISTS `transaksi_detail`;
CREATE TABLE IF NOT EXISTS `transaksi_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `menu_id` varchar(5) NOT NULL,
  `variety` varchar(20) NOT NULL,
  `add_info` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `sales` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id`, `order_id`, `menu_id`, `variety`, `add_info`, `quantity`, `sales`) VALUES
(1, 1, 'c1', 'ice', 'bababa', 1, 'takeaway'),
(2, 1, 'c2', 'ice', 'qwerty', 1, 'dinein'),
(3, 2, 'nc1', 'ice', '', 1, 'takeaway'),
(4, 2, 'lm2', 'ice', '', 1, 'takeaway'),
(5, 2, 'hm1', 'ice', '', 1, 'takeaway'),
(6, 3, 'c1', 'hot', '', 1, 'takeaway'),
(7, 3, 'nc5', 'ice', '', 1, 'dinein'),
(8, 3, 'lm4', 'ice', '', 1, 'dinein');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
