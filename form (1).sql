-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2024 at 07:27 AM
-- Server version: 8.2.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

DROP TABLE IF EXISTS `anime`;
CREATE TABLE IF NOT EXISTS `anime` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent` int NOT NULL,
  `cha_name` varchar(200) NOT NULL,
  `ani_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `is_active` int NOT NULL DEFAULT '1',
  `is_delete` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `parent`, `cha_name`, `ani_name`, `image`, `description`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 4, 'Naruto', 'Naruto', 'image_844936601710568534.jpg', ' Naruto is nine tail beast jinjuriki, and use sage mode.             ', 1, 0, '2024-03-19 11:43:27', '2024-03-19 11:43:27'),
(2, 2, 'Itachi Uchiha', 'Naruto', 'image_494399111710568682.jpg', ' itache uchiha magekayu sharingan ability is black flame.   ', 1, 0, '2024-03-20 04:06:29', '2024-03-20 04:06:29'),
(3, 8, 'Gojo Saturo', 'Jujutsu Kaisan', 'image_7277259691710568775.png', ' gojo saturo is use red and blue power. ', 1, 0, '2024-03-20 04:06:38', '2024-03-20 04:06:38'),
(4, 0, 'Son Goku', 'Dragon ball', 'image_635524691710568864.png', ' goku is super saiyan and his master ultra instinct,', 0, 0, '2024-03-16 06:01:04', '2024-03-16 06:01:04'),
(5, 5, 'Kakashi Hatage', 'Naruto', 'image_861887251710568960.jpg', ' Kakashi famous in the copy ninja his master 1000 jutsu. ', 1, 0, '2024-03-20 04:06:47', '2024-03-20 04:06:47'),
(6, 7, 'Light Yagami', 'Death Note', 'image_6733138701710569058.png', ' light yagami use shinigami death note. ', 1, 0, '2024-03-20 04:06:58', '2024-03-20 04:06:58'),
(7, 9, 'Eron Yeager', 'Attack on Titan', 'image_1347095031710569139.png', ' Attack on titan big monster anime and full action anime.  ', 0, 0, '2024-03-20 04:07:05', '2024-03-20 04:07:05'),
(8, 4, 'Astha', 'Black Cover', 'image_6860476621710569208.png', ' astha is one day become cover king. ', 0, 0, '2024-03-20 04:07:14', '2024-03-20 04:07:14'),
(9, 0, 'Yugi Itadori', 'Jujutsu Kaisan', 'image_5215869941710569378.png', ' yugi itadori vassel of sukuna.', 1, 0, '2024-03-16 06:09:38', '2024-03-16 06:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `cartexample`
--

DROP TABLE IF EXISTS `cartexample`;
CREATE TABLE IF NOT EXISTS `cartexample` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `is_active` int NOT NULL DEFAULT '1',
  `is_delete` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cartexample`
--

INSERT INTO `cartexample` (`id`, `category_id`, `is_active`, `is_delete`, `created_at`) VALUES
(45, 5, 1, 0, '2024-03-20 11:55:48'),
(46, 11, 1, 0, '2024-03-20 12:44:03'),
(43, 6, 1, 0, '2024-03-20 11:55:34'),
(48, 11, 1, 0, '2024-03-22 05:20:59'),
(49, 1, 1, 0, '2024-03-22 05:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `is_active` int NOT NULL DEFAULT '1',
  `is_delete` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent`, `name`, `image`, `price`, `description`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 7, 'Lancome', 'image_8271522711710562650.png', '55', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-03-19 10:14:45', '2024-03-19 10:14:45'),
(2, 6, 'L\'interdit', 'image_5720376211710762022.png', '55', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 0, 0, '2024-04-05 06:10:18', '2024-04-05 06:10:18'),
(3, 8, 'Radient', 'image_6086724801711432738.png', '70', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-03-26 05:58:58', '2024-03-26 05:58:58'),
(4, 6, 'Lancome', 'image_860744671710562944.png', '45', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 0, 0, '2024-03-19 10:18:26', '2024-03-19 10:18:26'),
(5, 10, 'L\'Oreal Shampoo', 'image_5583385601710563173.png', '70', '     Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-04-23 12:08:32', '2024-04-23 12:08:32'),
(6, 0, 'Pro longer', 'image_1502454441710563190.png', '100', '     Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-03-19 10:19:44', '2024-03-19 10:19:44'),
(7, 6, 'Pro longer', 'image_9289089251710563216.png', '85', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-03-19 10:15:19', '2024-03-19 10:15:19'),
(8, 0, 'L\'interdit', 'image_2805603931712047208.png', '68', '     Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-04-02 08:40:08', '2024-04-02 08:40:08'),
(9, 6, 'Lancome', 'image_2597553981710563270.png', '110', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-03-19 10:18:20', '2024-03-19 10:18:20'),
(10, 0, 'Lancome', 'image_5347076851710563303.png', '45', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 0, 0, '2024-03-19 10:12:59', '2024-03-19 10:12:59'),
(11, 6, 'Plank body milk', 'image_9683955811710563341.png', '70', '      Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 1, 0, '2024-03-19 10:15:36', '2024-03-19 10:15:36'),
(12, 0, 'Bio performance', 'image_3579900611710563404.png', '45', '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', 0, 0, '2024-03-19 10:13:22', '2024-03-19 10:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `phone`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'Sharma', 'rohit@mail.com', '9876541230', 'cricket', 'His calling hitman,', '2024-04-17 04:47:48', '2024-04-17 04:47:48'),
(2, 'Virat', 'Kohli', 'virat@mail.com', '9829845621', 'cricket', 'His calling king Kohli,', '2024-04-17 04:49:25', '2024-04-17 04:49:25'),
(3, 'John', 'Wick', 'john@mail.com', '9874546513', 'boogeyman', 'If you recently ordered a product or signed up to any of our services on a 3-days trial basis for €2.00 by registering to our website', '2024-04-19 09:13:40', '2024-04-19 09:13:40'),
(4, 'Roman', 'show', 'roman@mail.com', '7546546481', 'WWE', 'We may, however, at any time and for any reason decide to grant a refund.', '2024-04-19 09:15:07', '2024-04-19 09:15:07'),
(5, 'malik', 'gadhiya', 'malik@mai.com', '8794564865', 'cricket', ' You may request a refund if the service has not been activated.', '2024-04-19 09:16:06', '2024-04-19 09:16:06'),
(6, 'Kenil', 'Dhameliya', 'kenil@mail.com', '9874465484', 'boogeyman', 'The trial subscription price is non-refundable and we do not make refunds for incomplete monthly subscriptions. ', '2024-04-19 09:16:56', '2024-04-19 09:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `name`, `email`, `phone`, `address`, `zipcode`, `city`, `created_at`, `updated_at`) VALUES
(1, 'John Wick', 'john@mail.com', '9567891320', 'D-502 Royal hills Mota varacha', '394105', 'Surat', '2024-04-12 05:09:15', '2024-04-12 05:09:15'),
(2, 'Harry Poter', 'Herry@mail.com', '1234657890', 'A-102 Mira residency Mota varacha', '394101', 'Surat', '2024-04-12 05:11:07', '2024-04-12 05:11:07'),
(3, 'Rohit sharma', 'rohit@mail.com', '7567891450', 'D-102 Royal hills Mota varacha', '394105', 'Surat', '2024-04-12 05:13:59', '2024-04-12 05:13:59'),
(4, 'Malik Dhameliya', 'malik10@mail.com', '7845632132', 'D-102 Silvasa stone katargam', '394104', 'Surat', '2024-04-12 11:06:14', '2024-04-12 11:06:14'),
(5, 'virat Kohli', 'Herry@mail.com', '7845785445', 'A-9 Sitaganar, Mota varacha', '394106', 'Surat', '2024-04-12 11:41:38', '2024-04-12 11:41:38'),
(6, 'Dead Pool', 'john@mail.com', '9234542165', 'A-9 Sitaganar, Mota varacha', '394104', 'Surat', '2024-04-12 12:09:27', '2024-04-12 12:09:27'),
(10, 'Fenil Gadhiya', 'fenil@mail.com', '7845632132', 'C-902 Aavkar residency  Mota varacha', '394105', 'Surat', '2024-04-15 07:08:39', '2024-04-15 07:08:39'),
(11, 'John Wick', 'john@mail.com', '12465789', 'A-9 Sitaganar, Mota varacha', '394105', 'Surat', '2024-04-15 11:53:47', '2024-04-15 11:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `name`, `image`, `price`, `quantity`, `total`) VALUES
(1, 1, 3, 'Radient', 'image_6086724801711432738.png', '70', '1', '70'),
(2, 2, 6, 'Pro longer', 'image_1502454441710563190.png', '100', '3', '300'),
(3, 3, 6, 'Pro longer', 'image_1502454441710563190.png', '100', '3', '300'),
(4, 1, 3, 'L\'interdit', 'image_2805603931712047208.png', '68', '2', '136'),
(5, 3, 9, 'Lancome', 'image_2597553981710563270.png', '110', '1', '110'),
(6, 3, 5, 'L\'Oreal Shampoo', 'image_5583385601710563173.png', '70', '1', '70'),
(7, 3, 12, 'Bio performance', 'image_3579900611710563404.png', '45', '1', '45'),
(8, 3, 14, 'Hand Cream', 'image_8953226581710563446.png', '65', '1', '65'),
(9, 4, 5, 'L\'Oreal Shampoo', 'image_5583385601710563173.png', '70', '4', '280'),
(10, 4, 8, 'L\'interdit', 'image_2805603931712047208.png', '68', '4', '272'),
(11, 4, 11, 'Plank body milk', 'image_9683955811710563341.png', '70', '3', '210'),
(12, 5, 1, 'Lancome', 'image_8271522711710562650.png', '55', '1', '55'),
(13, 6, 12, 'Bio performance', 'image_3579900611710563404.png', '45', '3', '135'),
(14, 6, 11, 'Plank body milk', 'image_9683955811710563341.png', '70', '2', '140'),
(17, 9, 3, 'Radient', 'image_6086724801711432738.png', '70', '1', '70'),
(18, 9, 1, 'Lancome', 'image_8271522711710562650.png', '55', '1', '55'),
(19, 10, 8, 'L\'interdit', 'image_2805603931712047208.png', '68', '5', '340'),
(20, 10, 6, 'Pro longer', 'image_1502454441710563190.png', '100', '1', '100'),
(21, 10, 2, 'L\'interdit', 'image_5720376211710762022.png', '55', '1', '55'),
(22, 10, 3, 'Radient', 'image_6086724801711432738.png', '70', '1', '70'),
(23, 11, 6, 'Pro longer', 'image_1502454441710563190.png', '100', '3', '300'),
(24, 11, 8, 'L\'interdit', 'image_2805603931712047208.png', '68', '2', '136');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` int NOT NULL,
  `subcategory` int NOT NULL,
  `productname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `is_active` int NOT NULL DEFAULT '1',
  `is_delete` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `subcategory`, `productname`, `price`, `description`, `image`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'Lancome', '55', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 0, 0, '2024-04-03 04:35:50', '2024-04-03 04:35:50'),
(2, 0, 0, 'Nutriperfectrer', '55', '                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-04-02 10:09:27', '2024-04-02 10:09:27'),
(3, 7, 2, 'Radient', '55', '          Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 10:56:07', '2024-03-18 10:56:07'),
(4, 0, 0, 'Lancome', '55', '       Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-04-19 09:54:07', '2024-04-19 09:54:07'),
(5, 8, 10, 'L\'Oreal shampoo', '55', '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 0, 0, '2024-03-18 10:56:50', '2024-03-18 10:56:50'),
(6, 2, 1, 'L\'Oreal shampoo', '55', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 10:57:10', '2024-03-18 10:57:10'),
(7, 2, 7, 'Pro longer', '100', '     Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 10:57:31', '2024-03-18 10:57:31'),
(8, 4, 0, 'L\'interdit', '55', '     Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 11:26:27', '2024-03-18 11:26:27'),
(9, 0, 0, 'Lancome', '100', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 0, 0, '2024-03-18 12:06:06', '2024-03-18 12:06:06'),
(10, 1, 0, 'Plank body milk', '70', '        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 12:07:27', '2024-03-18 12:07:27'),
(11, 0, 0, 'Bio Performance', '55', '         Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 12:30:18', '2024-03-18 12:30:18'),
(22, 0, 0, 'Pro longer', '100', '                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 0, 0, '2024-03-18 12:49:38', '2024-03-18 12:49:38'),
(26, 9, 19, 'Pro longer', '100', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 0, 0, '2024-03-19 03:44:15', '2024-03-19 03:44:15'),
(19, 9, 0, 'Nutriperfect', '70', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tortor elit lacus leo magna.', '', 1, 0, '2024-03-18 10:59:24', '2024-03-18 10:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

DROP TABLE IF EXISTS `product_img`;
CREATE TABLE IF NOT EXISTS `product_img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `product_id`, `image`) VALUES
(1, 1, 'product1.png'),
(98, 1, 'product4.png'),
(3, 2, 'product2.png'),
(101, 11, 'product14.png'),
(6, 2, 'product6.png'),
(7, 3, 'product3.png'),
(8, 4, 'product1.png'),
(9, 4, 'product4.png'),
(10, 5, 'product5.png'),
(11, 5, 'product6.png'),
(12, 6, 'product5.png'),
(13, 6, 'product7.png'),
(14, 7, 'product5.png'),
(15, 7, 'product11.png'),
(16, 7, 'product16.png'),
(17, 8, 'product6.png'),
(78, 8, 'product7.png'),
(21, 9, 'product9.png'),
(22, 10, 'product16.png'),
(103, 11, 'product13.png'),
(88, 22, 'product8.png'),
(26, 19, 'product7.png'),
(27, 19, 'product8.png'),
(28, 19, 'product9.png'),
(29, 19, 'product11.png'),
(33, 22, 'product2.png'),
(48, 22, 'product3.png'),
(35, 22, 'product4.png'),
(89, 22, 'product9.png'),
(81, 4, 'product9.png'),
(73, 9, 'product8.png'),
(85, 2, 'product9.png'),
(109, 2, 'product11.png'),
(92, 9, 'product3.png'),
(93, 10, 'product13.png'),
(94, 10, 'product14.png'),
(111, 1, 'product5.png'),
(112, 1, 'product9.png'),
(151, 38, '008.jpg'),
(114, 26, 'product6.png'),
(115, 26, 'product7.png'),
(116, 27, 'product8.png'),
(117, 27, 'product9.png'),
(118, 27, 'product11.png'),
(143, 31, 'product6.png'),
(150, 38, '007.jpg'),
(149, 38, '006.jpg'),
(140, 30, 'product6.png'),
(139, 29, 'product13.png'),
(138, 29, 'product11.png'),
(137, 29, 'product9.png'),
(136, 29, 'product8.png'),
(133, 28, 'product8.png'),
(132, 28, 'product7.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zipcode` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `dob`, `phone`, `gender`, `address`, `zipcode`, `city`, `password`) VALUES
(1, 'john', 'wick', 'john@mail.com', '2001-05-15', '9876543210', 'male', 'B-202 shivdhara resident Mota varachha', '394101', 'surat', '1234'),
(3, 'Rohit', 'Sharma', 'rohit@mail.com', '2005-07-21', '1246527890', 'male', 'A-45 Karishna Society Katargam', '394102', 'surat', '4545'),
(5, 'Malik', 'Dhameliya', 'malik10@mail.com', '2003-08-16', '4567891320', 'male', 'A-1503 Sumeru sky Hirabag', '394103', 'surat', '5151'),
(6, 'Harry', 'Poter', 'Herry@mail.com', '12-06-2008', '8978975465', 'male', 'D-502 Rotal hills Mota varacha', '394105', 'Surat', '1010'),
(10, 'Fenil', 'Gadhiya', 'fenil@mail.com', '09-01-2005', '9829841235', 'Male', 'C-902 Aavkar residency  Mota varacha', '394105', 'Surat', '2005');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

DROP TABLE IF EXISTS `support`;
CREATE TABLE IF NOT EXISTS `support` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` varchar(500) NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `heading`, `description`) VALUES
(1, 'Why has my credit card been charged?', ' If you recently ordered a product or signed up to any of our services on a 3-days trial basis for €2.00 by registering to our website and/or marketing offer, please check your bank statement for more information about this transaction - all transactions are processed with 3D Secure technology.'),
(2, 'Cancel your membership', ' You are free to cancel your subscription at any time. There is no mandatory membership period. If you wish to terminate your membership all you have to do is click on the My Account tab. Once your subscription has been cancelled, no further charges will be made to your card. Cancellation does not, however, affect other services and/or benefits linked to your user account for the period(s) charged.\r\n\r\nPlease note that for technical reasons you cannot cancel your subscription to a service within the first 24 hours after having registered the account. If you wish to terminate your membership before the aforementioned lock period, please contact customer service directly. If you choose to not cancel your membership before the end of your trial period, then your trial membership will turn into a basic membership automatically and your card will be charged at the standard subscription price of:\r\n\r\nAfter you have cancelled your membership, no further charges will be made to your card. Keep in mind you can always reactivate your membership or register a new service account at any time. Terminating your membership does not affect other enabled services on your ((SITE_NAME)) user account for the period that have been charged already. ((SITE_NAME)) will send you a notification of cancellation to the E-mail address indicated when you opened the account. Lost or non-delivered receipts do not annul the validity of your request for cancellation. This is based solely upon the information stored in the ((SITE_NAME)) customer database. Nevertheless, it is your sole responsibility as a customer to enter a valid E-mail address. It is also your responsibility as a customer to check for E-mails that have been redirected to your spam-folder. Please contact customer service if you need more information on how to prevent these types of errors in E-mail delivery.'),
(3, 'I\'d like to request a refund. What is your policy?', ' The trial subscription price is non-refundable and we do not make refunds for incomplete monthly subscriptions. We may, however, at any time and for any reason decide to grant a refund, discount or exclusive benefit to a subscriber. The amount and terms linked to the refund in question, and the decision to grant such a refund, is at our sole discretion.\r\n\r\nYour purchase is covered by a legal withdrawal clause. You may only terminate your initial purchase if your subscription has not been activated. When you accept the purchase and enter your ((SITE_NAME)) account you have automatically activated your membership. To withdraw your order or purchase, you must log off the ((SITE_NAME)) platform immediately after the initial purchase and avoid logging in again. Contact our customer service by E-mail to cancel your order. We will do our best to cancel your subscription and give you a refund.'),
(4, 'Why has my credit card been charged immediately after subscribing to the service?', ' To access the services on our website, you pay €2.00 for a 3-days trial period. This amount is non-refundable the moment you start to use our service. You may request a refund if the service has not been activated.'),
(5, 'I have a trial period subscription but my card was charged twice. Why?', ' Our service includes a 3-days trial version of €2.00 with a pre-established trial duration. When the trial period has ended, your account turns into a standard subscription according to our terms and conditions, to which you have agreed. This happens unless you have cancelled your membership before the end of the trial period. To terminate your account, please contact our customer service.'),
(6, 'How may I contact you?', ' Our customer service is open 24/7 and can be accessed through E-mail, chat and phone. We suggest that your first point of contact is via E-mail. In case you are trying to contact us through the chat service and have connectivity issues, please send us an E-mail and a customer support representative will contact you as soon as possible.'),
(7, 'What can I expect after terminating my subscription?', ' After you have terminated your subscription no further charges will be made to your card. Any information stored about you is deactivated according to our service\'s GDPR policy. If you wish to get a refund, you must NOT have activated or used the service. All personal data can be erased upon request.'),
(8, 'I just registered to your service but have yet to receive any login data. What should I do?', ' An introductory E-mail with all your login information has been sent to the E-mail address used when you opened the account. We recommend you check your spam and trash folder. If you still have trouble finding it, please contact our customer support.'),
(9, 'How may I contact you?', '  Our customer service is open 24/7 and can be accessed through E-mail, chat and phone. We suggest that your first point of contact is via E-mail. In case you are trying to contact us through the chat service and have connectivity issues, please send us an E-mail and a customer support representative will contact you as soon as possible.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
