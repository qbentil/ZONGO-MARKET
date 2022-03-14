-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 06:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zongomarket`
--
CREATE DATABASE IF NOT EXISTS `zongomarket` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zongomarket`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `pro_id`, `date_added`) VALUES
(18, 1, 7, '2020-04-20 09:39:02'),
(20, 1, 1, '2020-04-20 22:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `user_pic` varchar(225) NOT NULL DEFAULT 'avatar.png',
  `password` varchar(225) NOT NULL,
  `activated` int(1) NOT NULL DEFAULT 0,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `email`, `user_pic`, `password`, `activated`, `reg_date`, `token`) VALUES
(1, 'Admin Bentil', 'Admin@test.com', 'me.jpg', '64f58c4bb727e611f6da5ab85c792a32', 1, '2020-04-05 00:48:17', NULL),
(2, 'Bentil Shadrack', 'Admin@gmail.com', 'avatar.png', '18cdb3f0e574e45b14d3b6d030c819e4', 0, '2020-04-20 23:28:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

DROP TABLE IF EXISTS `main_cat`;
CREATE TABLE IF NOT EXISTS `main_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(150) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`cat_id`, `category_name`) VALUES
(4, 'Automobiles'),
(7, 'Clothings'),
(3, 'Computers'),
(9, 'Crokery'),
(5, 'Custmetics'),
(1, 'Electronics'),
(8, 'Gadgets'),
(6, 'Gloceries');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `img1` varchar(225) NOT NULL,
  `img2` varchar(225) NOT NULL,
  `img3` varchar(225) DEFAULT NULL,
  `img4` varchar(225) DEFAULT NULL,
  `features` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `pro_model` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `keywords` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `product_name`, `cat_id`, `subcat_id`, `store_id`, `img1`, `img2`, `img3`, `img4`, `features`, `description`, `stock`, `price`, `pro_model`, `warranty`, `discount`, `keywords`, `date_added`) VALUES
(1, 'Hisense Blender', 1, 4, 1, 'h_blender2.jpg', 'h_blender4.jpg', 'h_blender1.jpg', 'h_blender3.jpg', 'Glass and Plastic', 'highly durable\r\nsaves energy\r\nportable', 0, '79.99', 'AD7EF001C', '5 months', 5, 'hisense blender', '2020-04-04 03:08:49'),
(2, 'Lacoste T-shirt', 7, 7, 1, 'la_shirt4.jpg', 'la_shirt3.jpg', 'la_shirt2.jpg', 'la_shirt1.jpg', 'White And Blue', 'Short Sleeves\r\nAll sizes\r\nExpandable', 0, '50.29', 'AD7EFaa1C', 'none', 10, 'lacoste t-shirts', '2020-04-04 05:56:50'),
(3, 'SamsungA70', 3, 1, 1, 'phone1.jpg', 'phone3.jpg', 'phone2.jpg', 'phone4.jpg', 'Qualcomm Snappdragon 675 octa core Proccessor', '6.7 Inches,\r\n4500 mAh battery with fast charging,\r\nDUal SIm Nano + Nano', 6, '1050.00', 'FGH9980IC', '12 Months', 10, 'Phone, A70, samsung', '2020-04-12 13:37:16'),
(4, 'Air Force Sneakers', 7, 8, 1, 'image_1582887204817.jpg', 'image_1582887187858.jpg', 'image_1582887217543.jpg', 'image_1582887208472.jpg', 'Sizes Medium and Large', 'Colors Black and White,\r\n2020 New Releease,\r\nHot Kick && Klassic Wears,\r\nBlack and White', 3, '65.99', '   Afg76Kl', '3 Months', 5, 'shoe, sneakers, air force', '2020-04-12 13:45:57'),
(6, 'Samsung Smart Refrigerator', 1, 4, 1, 'image_1582886812306.png', 'image_1582886798357.jpg', 'image_1582886804132.png', 'image_1582886819968.jpg', '3-Door French Door', 'High Efficiency LED lighting,\r\nStainless Steel,\r\nPower Saving ', 0, '3500.95', ' RF23M8070', '13 Months', 0, ' Fridge Sumsong, home appliamce', '2020-04-12 14:11:31'),
(7, '7th Gen Intel Core i5', 3, 3, 1, 'image_1582886973800.jpg', 'hp3.png', 'hp2.jpg', 'hp4.jpg', 'Processor Graphic -Intel HD Graphics 630', 'Processor base Frequency  -3.80GHz,\r\nMax Memory Size  -64GB,\r\nMax Resolution 4096X2304@60HZ', 3, '2799.99', ' 14-cf1015cl', '24 Months', 6, ' Laptop hp, intel core i5, computers', '2020-04-12 14:19:28'),
(8, 'Vintage Casio', 8, 9, 1, 'casio2.jpg', 'casio1.jpg', 'casio4.jpg', 'casio3.jpg', 'G-shock GB6900', 'Illuminator.Low-temperature resistant (-10 C),\r\nHigh Durability,\r\nStopwatch function - 1100 sec.- 24 hours.Timer - 11 sec.- 24 hours.5 daily alarms', 25, '385.99', ' Casio SGW-450H', '6 Months', 9, ' watch casio gadget', '2020-04-12 14:26:38'),
(9, 'Ceramic Tea Cups', 9, 10, 1, 'cups1.jpg', 'cup2.jpg', 'cup3.jpg', 'cup5.jpg', ' High Durability', 'Ceramic,\r\nEasy to Manage ,\r\nPortable,\r\n High Durability', 1, '49.99', ' ADG45yb', 'None', 1, ' cups, ceramic, crockery, mugs', '2020-04-14 06:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(100) NOT NULL,
  `brand_logo` varchar(225) DEFAULT NULL,
  `brand_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `password` varchar(225) NOT NULL,
  `activated` int(1) NOT NULL DEFAULT 0,
  `mName` varchar(225) NOT NULL,
  `mPhone` varchar(15) NOT NULL,
  `mEmail` varchar(150) NOT NULL,
  `mAddress` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`store_id`),
  UNIQUE KEY `brand_name` (`brand_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `brand_logo`, `brand_name`, `description`, `password`, `activated`, `mName`, `mPhone`, `mEmail`, `mAddress`, `reg_date`, `token`) VALUES
(1, 'Kings and Queens Fashion', 'logo.png', 'B.B.Brown Kollections', 'Dealers in all kinds of ladies and gents wear', '64f58c4bb727e611f6da5ab85c792a32', 1, 'Opoku Bettina', '0558488628', 'bbbrownk@gmail.com', 'UEW Winneba Campus', '2020-04-12 23:23:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

DROP TABLE IF EXISTS `sub_cat`;
CREATE TABLE IF NOT EXISTS `sub_cat` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(150) NOT NULL,
  `maincat_id` int(11) NOT NULL,
  PRIMARY KEY (`subcat_id`),
  UNIQUE KEY `subcat_name` (`subcat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`subcat_id`, `subcat_name`, `maincat_id`) VALUES
(1, 'Mobile Phones', 3),
(3, 'Laptops', 3),
(4, 'Home Appliances', 1),
(6, 'Motors', 4),
(7, 'Shirts', 7),
(8, 'Shoes', 7),
(9, 'Watches', 8),
(10, 'Tea mugs', 9);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

DROP TABLE IF EXISTS `super_admin`;
CREATE TABLE IF NOT EXISTS `super_admin` (
  `super_id` int(11) NOT NULL AUTO_INCREMENT,
  `super_name` varchar(225) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`super_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`wishlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `pro_id`, `date_added`) VALUES
(9, 1, 8, '2020-04-20 09:39:35'),
(10, 1, 7, '2020-04-20 09:39:43'),
(11, 1, 2, '2020-05-11 03:19:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
