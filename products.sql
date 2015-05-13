-- phpMyAdmin SQL Dump
-- version 4.0.10.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2015 at 09:58 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kazmikskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `product_cat` varchar(50) NOT NULL,
  `specials` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_img_name`, `product_cat`, `specials`, `price`) VALUES
(1, 'PID001', 'Chicken Biriyani', 'cknbiriyani.jpg', 'biriyani', 'no', '90.00'),
(2, 'PID002', 'Mutton Biriyani', 'mtnbiriyani.jpg', 'biriyani', 'no', '100.00'),
(3, 'PID003', 'Vegetable Biriyani', 'vegbiriyani.jpg', 'biriyani', 'no', '60.00'),
(4, 'PID004', 'Egg Biriyani', 'eggbiriyani.jpg', 'biriyani', 'no', '70.00'),
(5, 'PID005', 'Prawns Biriyani', 'prnbiriyani.jpg', 'biriyani', 'yes', '120.00'),
(6, 'PID006', 'Fish Biriyani', 'fshbiriyani.jpg', 'biriyani', 'yes', '110.00'),
(7, 'PID007', 'Naan', 'naan.img', 'tandoor', 'no', '20.00'),
(8, 'PID008', 'Butter Naan', 'btrnaan.jpg', 'tandoor', 'no', '30.00'),
(9, 'PID009', 'Tandoor Chicken(Half)', 'tndrckn.jpg', 'tandoor', 'no', '130.00'),
(10, 'PID010', 'Tandoor Chicken(Full)', 'tndrckn.jpg', 'tandoor', 'yes', '250.00'),
(11, 'PID011', 'Chicken Tikka', 'ckntika.jpg', 'tandoor', 'yes', '80.00'),
(12, 'PID012', 'Chicken Kabab', 'cknkabab.jpg', 'tandoor', 'yes', '100.00'),
(13, 'PID013', 'Porotta', 'porota.jpg', 'tandoor', 'no', '10.00'),
(14, 'PID014', 'Chapathi', 'chap.jpg', 'tandoor', 'no', '8.00'),
(15, 'PID015', 'Tomato Soup', 'tmtsoup.jpg', 'soup', 'yes', '30.00'),
(16, 'PID016', 'Sweet Corn Soup', 'swtcornsoup.jpg', 'soup', 'yes', '40.00'),
(17, 'PID017', 'Chicken Soup', 'chknsoup.jpg', 'soup', 'no', '50.00'),
(18, 'PID018', 'Mushroom Soup', 'mshsoup.jpg', 'soup', 'no', '60.00'),
(19, 'PID019', 'Chicken Noodles', 'cknnood.jpg', 'noodle', 'no', '80.00'),
(20, 'PID020', 'Egg Noodles', 'eggnood.jpg', 'noodle', 'no', '60.00'),
(21, 'PID021', 'Veg Noodles', 'vegnood.jpg', 'noodle', 'no', '50.00'),
(22, 'PID022', 'Mix Noodles', 'mixnood.jpg', 'noodle', 'yes', '80.00'),
(23, 'PID023', 'Steamed Rice', 'stmrice.jpg', 'rice', 'no', '30.00'),
(24, 'PID024', 'Chicken Fried Rice', 'cknrice.jpg', 'rice', 'yes', '70.00'),
(25, 'PID025', 'Egg Fried Rice', 'eggrice.jpg', 'rice', 'no', '70.00'),
(26, 'PID026', 'Veg Pulav', 'vegpul.jpg', 'rice', 'yes', '80.00'),
(27, 'PID027', 'Curd Rice', 'curdrice.jpg', 'rice', 'yes', '50.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
