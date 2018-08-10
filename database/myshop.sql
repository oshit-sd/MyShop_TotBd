-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 09:27 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Aurthi', '2017-09-21 04:38:10', '2017-09-21 04:38:10'),
(2, 'Easy', '2017-09-21 04:39:03', '2017-09-21 04:39:03'),
(3, 'Chirkut', '2017-09-21 04:39:18', '2017-09-21 04:39:18'),
(4, 'Bindu', '2017-09-21 04:39:28', '2017-09-21 04:39:28'),
(5, 'Lavelux', '2017-09-21 06:40:19', '2017-09-21 06:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `categores`
--

CREATE TABLE `categores` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categores`
--

INSERT INTO `categores` (`id`, `item_id`, `category`, `created_at`, `updated_at`) VALUES
(1, '1', 'Stylish-T-Shirts', '2017-09-10 23:13:12', '2017-09-11 01:54:56'),
(2, '1', 'Super-Hero-T-Shirts', '2017-09-10 23:14:08', '2017-09-11 01:14:30'),
(3, '1', 'Jeans-Pent', '2017-09-10 23:14:41', '2017-09-11 01:18:49'),
(4, '1', 'Gabardine', '2017-09-10 23:15:37', '2017-09-11 00:05:56'),
(5, '1', 'Shirt-Collection', '2017-09-10 23:15:58', '2017-09-11 01:19:07'),
(6, '1', 'Punjabi', '2017-09-10 23:16:35', '2017-09-21 03:31:12'),
(7, '1', 'Couple-T-Shirts', '2017-09-10 23:17:14', '2017-09-11 01:24:11'),
(8, '2', 'Original-Indian-Dress', '2017-09-10 23:17:50', '2017-09-11 01:23:46'),
(9, '2', 'Original-Indian-Saree', '2017-09-10 23:18:17', '2017-09-11 01:03:40'),
(10, '2', 'Deshi-Boutique-Saree', '2017-09-10 23:19:08', '2017-09-11 01:17:21'),
(11, '2', 'Block-Batik-Dress', '2017-09-10 23:19:37', '2017-09-11 01:16:49'),
(13, '2', 'Deshi-Designer-Dress', '2017-09-10 23:20:50', '2017-09-11 01:16:19'),
(14, '2', 'Kurti-Tops-Pants', '2017-09-10 23:21:21', '2017-09-11 01:42:09'),
(15, '2', 'Hijab-Dupatta', '2017-09-10 23:21:51', '2017-09-11 01:43:07'),
(16, '3', 'Study-Kit', '2017-09-10 23:22:33', '2017-09-11 01:15:13'),
(17, '3', 'Dress-For-Kids', '2017-09-10 23:22:54', '2017-09-11 01:14:48'),
(18, '3', 'Toys-For-Kids', '2017-09-10 23:23:14', '2017-09-11 01:47:22'),
(19, '3', 'Kids-Watch', '2017-09-10 23:23:22', '2017-09-11 01:49:19'),
(20, '3', 'Body-Care', '2017-09-10 23:23:47', '2017-09-11 01:49:43'),
(21, '4', 'Leather-Belt-Watch', '2017-09-10 23:25:56', '2017-09-11 01:50:06'),
(22, '4', 'Bracelet-Watch', '2017-09-10 23:26:33', '2017-09-11 01:50:30'),
(23, '4', 'LED-Watch', '2017-09-10 23:26:59', '2017-09-11 01:51:05'),
(24, '4', 'Smart-Watch', '2017-09-10 23:27:11', '2017-09-11 01:51:29'),
(25, '4', 'Couple-Watch', '2017-09-10 23:27:24', '2017-09-11 01:52:11'),
(26, '5', 'Multi-Belt-Watch', '2017-09-10 23:28:13', '2017-09-11 01:52:46'),
(27, '5', 'Bracelet-Watch', '2017-09-10 23:28:29', '2017-09-11 01:53:24'),
(28, '5', 'Belt-Watch', '2017-09-10 23:28:50', '2017-09-11 01:53:07'),
(30, '6', 'Diamond-Jewelry', '2017-09-10 23:38:45', '2017-09-11 01:48:37'),
(31, '6', 'Finger-Ring', '2017-09-10 23:39:03', '2017-09-11 01:48:17'),
(32, '6', 'Nose-Pin', '2017-09-10 23:39:23', '2017-09-11 01:47:02'),
(33, '6', 'Anklet', '2017-09-10 23:39:40', '2017-09-10 23:39:40'),
(34, '6', 'Mens-Jewelry', '2017-09-10 23:40:26', '2017-09-11 01:39:48'),
(35, '7', 'Mobile-Phone', '2017-09-10 23:41:55', '2017-09-11 01:12:31'),
(36, '7', 'Power-Bank', '2017-09-10 23:42:09', '2017-09-11 01:12:46'),
(37, '7', 'Headphone-Earphone', '2017-09-10 23:42:29', '2017-09-11 01:39:28'),
(38, '7', 'Selfie-Gadget', '2017-09-10 23:42:59', '2017-09-11 01:13:16'),
(39, '7', 'Mobile-Battery', '2017-09-10 23:43:25', '2017-09-11 01:13:31'),
(40, '8', 'Mouse-Keyboard', '2017-09-10 23:44:19', '2017-09-11 01:28:06'),
(41, '8', 'Pen-Drive', '2017-09-10 23:44:51', '2017-09-11 01:41:16'),
(42, '8', 'Antivirus', '2017-09-10 23:45:02', '2017-09-10 23:45:02'),
(43, '8', 'Camera', '2017-09-10 23:45:26', '2017-09-10 23:45:26'),
(44, '8', 'Cool-Accessories', '2017-09-10 23:45:50', '2017-09-11 01:10:34'),
(45, '9', 'Tablet-PC', '2017-09-10 23:46:31', '2017-09-11 01:10:05'),
(46, '9', 'Laptop-PC', '2017-09-10 23:46:40', '2017-09-11 01:27:51'),
(47, '9', 'Notebook', '2017-09-10 23:46:49', '2017-09-10 23:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `id` int(10) UNSIGNED NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'openregform',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`id`, `check`, `created_at`, `updated_at`) VALUES
(1, 'openregform', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `created_at`, `updated_at`) VALUES
(1, 'Mens-Clothing', '2017-09-10 23:02:04', '2017-09-10 23:02:04'),
(2, 'Womens-Clothing', '2017-09-10 23:02:11', '2017-09-10 23:02:11'),
(3, 'Kids-Zone', '2017-09-10 23:03:12', '2017-09-10 23:03:12'),
(4, 'Gents-Watch', '2017-09-10 23:04:36', '2017-09-10 23:04:36'),
(5, 'Ladies-Watch', '2017-09-10 23:05:17', '2017-09-10 23:05:17'),
(6, 'Jewelry-Collection', '2017-09-10 23:06:12', '2017-09-10 23:06:12'),
(7, 'Mobile-Gadget', '2017-09-10 23:07:34', '2017-09-10 23:07:34'),
(8, 'Electronics-Accessories', '2017-09-10 23:08:38', '2017-09-10 23:08:38'),
(9, 'Computer & Laptop', '2017-09-10 23:09:15', '2017-09-10 23:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2017_07_02_145436_create_brands_table', 1),
(3, '2017_07_02_145436_create_items_table', 1),
(4, '2017_07_02_145808_create_categores_table', 1),
(5, '2017_07_02_145808_create_myshopusers_table', 1),
(6, '2017_07_02_145808_create_paymentinfos_table', 1),
(9, '2017_07_02_145808_create_sliders_table', 1),
(11, '2017_07_08_165808_create_checks_table', 1),
(12, '2017_07_02_145808_create_shippings_table', 2),
(13, '2017_07_02_145808_create_shopcarts_table', 2),
(14, '2017_07_03_052120_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `myshopusers`
--

CREATE TABLE `myshopusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `myshopusers`
--

INSERT INTO `myshopusers` (`id`, `u_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Oshit Sutra Dar', 'oshit@gmail.com', '$2y$10$.n3nxO0ZIQ6bafY5DgxTIOMlxkJhhy6FBDq2BrW9dHVyGqcbQ/Jsy', '2017-09-11 04:32:27', '2017-09-11 04:32:27'),
(2, 'Bappy Sutra Dar', 'bappysd@gmail.com', '$2y$10$Pm2NEI3oAyN5EWM9IxxHBe4M7eOMSG1nSXLvOybizgYFP92EIpHQy', '2017-09-11 11:00:38', '2017-09-11 11:00:38'),
(3, 'Bappy Sutra Dar', 'bappy@gmail.com', '$2y$10$dM1yjIaxuV5He7vjM23ZweK.8.BcI1MARP1SC5W9aVZN6zJm//z4.', '2017-09-21 23:51:48', '2017-09-21 23:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfos`
--

CREATE TABLE `paymentinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ses_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_number1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_number2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_number3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_number4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `red` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `green` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `black` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purple` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orange` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `white` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yellow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xsmall` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elarge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s28` int(11) DEFAULT NULL,
  `s29` int(11) DEFAULT NULL,
  `s30` int(11) DEFAULT NULL,
  `s31` int(11) DEFAULT NULL,
  `s32` int(11) DEFAULT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item`, `category`, `brand`, `product_name`, `product_price`, `details`, `img`, `product_stock`, `red`, `green`, `blue`, `black`, `pink`, `purple`, `orange`, `white`, `yellow`, `xsmall`, `small`, `medium`, `large`, `elarge`, `huge`, `s28`, `s29`, `s30`, `s31`, `s32`, `featured`, `new`, `popular`, `created_at`, `updated_at`) VALUES
(1, '1', 'Stylish-T-Shirts', NULL, 'Stylish T-shirt for Men - SZ77', '550', 'Grab this stylish T- shirt at an affordable price. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505990610.jpeg', '20', 'Red', NULL, 'Blue', 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 04:43:30', '2017-09-21 22:05:25'),
(2, '1', 'Stylish-T-Shirts', 'Aurthi', 'Exclusive T-shirt for Men – AFT-014', '290', 'Grab a stylish polo t-shirt at an affordable price for you. Its attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505990821.jpeg', '19', 'Red', NULL, 'Blue', 'Black', NULL, NULL, NULL, 'White', NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 04:47:01', '2017-09-21 05:42:35'),
(3, '1', 'Stylish-T-Shirts', NULL, 'Attractive T-shirt for Men – NF 18', '320', 'Exclusive t-shirt in cool color that will satisfy your mind. It feels you cool and comfortable with wonderful fabric and trendy style.', '/products_pic/1505990953.jpeg', '20', 'Red', 'Green', 'Blue', 'Black', NULL, NULL, NULL, 'White', 'Yellow', NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 04:49:13', '2017-09-21 22:05:04'),
(4, '1', 'Stylish-T-Shirts', 'Aurthi', 'Exclusive T-shirt for Men – AF0172', '350', 'Grab a stylish polo t-shirt at an affordable price for you. Its attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505991021.jpeg', '20', 'Red', NULL, 'Blue', 'Black', NULL, NULL, NULL, 'White', NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 04:50:21', '2017-09-21 04:50:21'),
(5, '1', 'Stylish-T-Shirts', NULL, 'Stylish T-shirt for Men - SZ71', '550', 'Grab this stylish T- shirt at an affordable price. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505991102.jpeg', '20', 'Red', NULL, 'Blue', 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 04:51:42', '2017-09-21 22:04:45'),
(6, '1', 'Super-Hero-T-Shirts', 'Aurthi', 'Marvel Heros T-shirt for Men', '249', 'Exclusive Marvel Design t-shirt in cool white color which will satisfy your mind. Nice t-shirt with best quality fabrics. Exclusive Einstein theme design on front side! 100% cotton – 160 GSM.', '/Products_pic/1505991477.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 04:56:12', '2017-09-21 04:57:57'),
(7, '1', 'Super-Hero-T-Shirts', 'Aurthi', 'Goku T-shirt for Men (Yellow)', '290', 'Exclusive t-shirt in cool color that will satisfy your mind. It feels you cool and comfortable with wonderful fabric and trendy style.', '/products_pic/1505991441.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yellow', NULL, NULL, 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 04:57:21', '2017-09-21 04:57:22'),
(8, '1', 'Super-Hero-T-Shirts', 'Aurthi', 'Dead Pool T-shirt for Men (White)', '290', 'Exclusive t-shirt in cool color that will satisfy your mind. It feels you cool and comfortable with wonderful fabric and trendy style.', '/products_pic/1505991557.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'White', NULL, NULL, NULL, 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 04:59:17', '2017-09-21 04:59:17'),
(9, '1', 'Super-Hero-T-Shirts', 'Aurthi', 'Goku T-shirt for Men (Red)', '290', 'Exclusive t-shirt in cool color that will satisfy your mind. It feels you cool and comfortable with wonderful fabric and trendy style.', '/products_pic/1505991683.jpg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 05:01:23', '2017-09-21 05:01:23'),
(10, '1', 'Super-Hero-T-Shirts', 'Aurthi', 'Goku T-shirt for Men (Blue)', '290', 'Exclusive t-shirt in cool color that will satisfy your mind. It feels you cool and comfortable with wonderful fabric and trendy style.', '/products_pic/1505991780.jpg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 05:03:00', '2017-09-21 05:03:00'),
(11, '1', 'Jeans-Pent', NULL, 'Stylish Jeans Pants - H.M', '799', 'Grab a stylish pant at an affordable price for you. Its creative design will adorn you with a gorgeous look and will make you stand out.', '/products_pic/1505994938.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, 31, 32, NULL, NULL, NULL, '2017-09-21 05:55:38', '2017-09-21 05:55:39'),
(12, '1', 'Jeans-Pent', NULL, 'Fabulous Alcott Jeans for Men', '850', 'Export quality jeans pant for men with super style. Available in cool color. Perfect blending of fashion and comfort.', '/products_pic/1505996025.jpg', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, 30, NULL, NULL, NULL, NULL, NULL, '2017-09-21 06:13:45', '2017-09-21 22:41:39'),
(13, '1', 'Jeans-Pent', NULL, 'Denim Long Pant - Lee', '999', 'Grab a stylish pant at an affordable price for you. Its creative design will adorn you with a gorgeous look and will make you stand out.', '/products_pic/1505996112.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, 31, 32, NULL, NULL, NULL, '2017-09-21 06:15:12', '2017-09-21 06:15:12'),
(14, '1', 'Jeans-Pent', NULL, 'Denim Long Pant - A/E', '899', 'Grab a stylish pant at an affordable price for you. Its creative design will adorn you with a gorgeous look and will make you stand out.', '/products_pic/1505996158.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, 31, 32, NULL, NULL, NULL, '2017-09-21 06:15:58', '2017-09-21 06:15:58'),
(15, '1', 'Jeans-Pent', NULL, 'Alcott Jeans Pant for Men - LN106', '650', 'Export quality Jeans pant for men in complete slim fit with super style. Available in cool blue color. Perfect blending of fashion and comfort.', '/products_pic/1505996243.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, 31, 32, NULL, 'New', NULL, '2017-09-21 06:17:23', '2017-09-21 22:47:57'),
(16, '1', 'Gabardine', NULL, 'Gabardine Long Pant - Lee', '720', 'Grab a stylish pant at an affordable price for you. Its creative design will adorn you with a gorgeous look and will make you stand out.', '/products_pic/1505996360.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, 31, 32, NULL, NULL, NULL, '2017-09-21 06:19:20', '2017-09-21 06:19:20'),
(17, '1', 'Gabardine', NULL, 'Gabardine Pant for Men GP - 439', '999', 'Export quality Gabardine pant for men with super style. Extraordinary design, comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505996552.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, NULL, NULL, NULL, NULL, NULL, '2017-09-21 06:22:32', '2017-09-21 06:22:32'),
(18, '1', 'Gabardine', NULL, 'Gabardine Pant for Men GP - 450', '1032', 'Export quality Gabardine pant for men with super style. Extraordinary design, comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505996602.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, 30, NULL, 32, NULL, NULL, 'Popular', '2017-09-21 06:23:22', '2017-09-21 22:03:36'),
(19, '1', 'Gabardine', NULL, 'Gabardine Pant for Men GP - 436', '1100', 'Export quality Gabardine pant for men with super style. Extraordinary design, comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505996668.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 29, 30, 31, 32, NULL, NULL, NULL, '2017-09-21 06:24:28', '2017-09-21 06:24:28'),
(20, '1', 'Gabardine', NULL, 'Gent\'s Gabardine Pant GP - 422', '1111', 'Export quality Gabardine pant for men with super style. Extraordinary design, comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505996718.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, 30, NULL, 32, 'Featured', NULL, NULL, '2017-09-21 06:25:18', '2017-09-21 21:59:46'),
(21, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ66', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505996932.jpeg', '10', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 06:28:52', '2017-09-21 06:30:17'),
(22, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ68', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505996990.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', 'XXL', NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 06:29:50', '2017-09-21 21:58:21'),
(23, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ57', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505997121.jpeg', '10', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 06:32:01', '2017-09-21 21:59:27'),
(24, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ49', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505997168.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 06:32:48', '2017-09-21 06:49:42'),
(25, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ36', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505997207.jpeg', '10', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 06:33:26', '2017-09-21 06:50:05'),
(26, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ15', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505997246.jpeg', '10', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 06:34:06', '2017-09-21 06:52:52'),
(27, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt – SZ44', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505997311.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'White', NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 06:35:11', '2017-09-21 21:58:43'),
(28, '1', 'Punjabi', NULL, 'Exclusive Punjabi for Men (LMP184)', '1050', 'Grab a stylish Panjabi at an affordable price for you. Creative designs to adorn yourself with gorgeous look and to make you stand out.', '/products_pic/1505997732.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 31, 32, 'Featured', NULL, NULL, '2017-09-21 06:42:12', '2017-09-21 21:57:21'),
(29, '1', 'Punjabi', NULL, 'Exclusive Punjabi for Men (LMP183)', '950', 'Grab a stylish Panjabi at an affordable price for you. Creative designs to adorn yourself with gorgeous look and to make you stand out.', '/products_pic/1505997801.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 31, 32, NULL, 'New', NULL, '2017-09-21 06:43:21', '2017-09-21 21:57:49'),
(30, '1', 'Punjabi', NULL, 'Punjabi for Men & Kids - Combo 08', '2490', 'Grab a stylish Punjabi-Payjama set for you and your kids at an affordable price for upcoming festival. Creative designs to adorn yourself with gorgeous look and to make you stand out.', '/products_pic/1505998548.jpeg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 31, 32, NULL, NULL, NULL, '2017-09-21 06:55:48', '2017-09-21 06:55:49'),
(31, '1', 'Punjabi', NULL, 'Stylish Long Punjabi for Men', '1090', 'Grab this stylish punjabi at an affordable price. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505998603.jpeg', '10', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 31, NULL, NULL, NULL, NULL, '2017-09-21 06:56:43', '2017-09-21 06:58:23'),
(32, '1', 'Punjabi', 'Lavelux', 'Stylish Long Punjabi for Men', '1090', 'Grab this stylish punjabi at an affordable price. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505998671.jpeg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, 32, NULL, NULL, NULL, '2017-09-21 06:57:51', '2017-09-21 06:57:51'),
(33, '1', 'Couple-T-Shirts', NULL, 'Couple T-shirt', '375', 'Grab stylish couple t-shirt at an affordable price for you. Its attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1505998811.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'White', NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 07:00:11', '2017-09-21 21:56:56'),
(34, '2', 'Original-Indian-Dress', NULL, 'Original Indian Salwar Kamiz Set', '4290', 'Original Indian Salwar Kamiz Set in heavy embroidery! Extraordinary design and exclusive work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505999324.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 07:08:44', '2017-09-21 21:56:27'),
(35, '2', 'Original-Indian-Dress', NULL, 'Original Indian Salwar Kamiz Set', '3950', 'Original Indian Salwar Kamiz Set in heavy embroidery! Extraordinary design and exclusive work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505999455.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 07:10:55', '2017-09-21 22:02:07'),
(36, '2', 'Original-Indian-Dress', NULL, 'Original Indian Salwar Kamiz Set', '4650', 'Original Indian Salwar Kamiz Set in heavy embroidery! Extraordinary design and exclusive work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1505999524.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'White', NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:12:04', '2017-09-21 07:12:04'),
(37, '2', 'Original-Indian-Dress', NULL, 'nstitched Salwar Kameez Set', '2500', 'Extraordinary design with quality finishing. Grab the latest designer collection. Comfortable to wear and good looking too. Exactly what you need to get a perfect look.', '/products_pic/1505999586.jpeg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:13:06', '2017-09-21 07:13:06'),
(38, '2', 'Original-Indian-Dress', NULL, 'Dual Combo Salwar Kameez Set', '5500', 'Extraordinary design with quality finishing. Grab the latest designer collection. Comfortable to wear and good looking too. Exactly what you need to get a perfect look.', '/products_pic/1505999633.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:13:53', '2017-09-21 07:13:53'),
(39, '2', 'Original-Indian-Dress', NULL, 'Designer Anarkali Suit', '7920', 'Exclusive designer suit for you! Express who you are through what you are wearing. Adorn yourself with gorgeous look with an exclusive suit.', '/Products_pic/1505999847.jpg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:14:44', '2017-09-21 07:17:28'),
(40, '2', 'Original-Indian-Dress', NULL, 'Designer Anarkali Suit', '11240', 'Exclusive designer suit for you! Express who you are through what you are wearing. Adorn yourself with gorgeous look with an exclusive suit.', '/products_pic/1505999756.jpg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 07:15:56', '2017-09-21 21:55:52'),
(41, '2', 'Original-Indian-Saree', NULL, 'Soft Embroidered Party Shari - Blue', '3250', 'Party saree with nice design offering dazzling colors. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party saree.', '/products_pic/1506000194.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:23:14', '2017-09-21 07:23:14'),
(42, '2', 'Original-Indian-Saree', NULL, 'Soft Embroidered Party Shari - Blue', '3250', 'Party saree with nice design offering dazzling colors. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party saree.', '/products_pic/1506000526.jpeg', '10', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 07:28:45', '2017-09-21 22:01:54'),
(43, '2', 'Original-Indian-Saree', NULL, 'Vinay Georgette Party Shari', '2950', 'Grab an original Vinay Star Walk georgette party shari for you. Its creative design will adorn you with a gorgeous look and make you stand out.', '/products_pic/1506000740.jpeg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 07:32:20', '2017-09-21 22:01:39'),
(44, '2', 'Original-Indian-Saree', NULL, 'Vinay Georgette Embroidery Shari', '4290', 'Grab an original Vinay Star Walk georgette embroidery party shari for you. Its creative design will adorn you with a gorgeous look and make you stand out.', '/products_pic/1506000810.jpeg', '10', NULL, NULL, NULL, 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:33:30', '2017-09-21 07:33:30'),
(45, '2', 'Original-Indian-Saree', NULL, 'Original Vinay Georgette Embroidery Shari', '4290', 'Grab an original Vinay Star Walk georgette embroidery party shari for you. Its creative design will adorn you with a gorgeous look and make you stand out.', '/products_pic/1506000867.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 07:34:27', '2017-09-21 21:54:32'),
(46, '2', 'Original-Indian-Saree', NULL, 'Georgette Embroidery Shari', '3850', 'Grab a designer georgette shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506000934.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:35:34', '2017-09-21 07:35:34'),
(47, '2', 'Original-Indian-Saree', NULL, 'Georgette Embroidery Shari', '3850', 'Grab a designer georgette shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506001026.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:37:06', '2017-09-21 07:42:46'),
(48, '2', 'Original-Indian-Saree', NULL, 'Rajguru Pure Katan Silk Shari', '3900', 'Grab a pure katan silk shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506001099.jpeg', '20', NULL, NULL, NULL, 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 07:38:19', '2017-09-21 21:53:59'),
(49, '2', 'Original-Indian-Saree', NULL, 'Rajguru Pure Katan Silk Shari', '3900', 'Grab a pure katan silk shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506001143.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:39:03', '2017-09-21 07:39:03'),
(50, '2', 'Original-Indian-Saree', NULL, 'Original Vinay Georgette Shari', '2990', 'Grab an original Vinay Star Walk georgette shari for you. Its creative design will adorn you with a gorgeous look and make you stand out.', '/products_pic/1506001184.jpeg', '19', NULL, NULL, NULL, 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:39:44', '2017-09-21 23:46:53'),
(51, '2', 'Deshi-Boutique-Saree', NULL, 'Designer Embroidery Shari', '3550', 'Grab a designer georgette shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506001770.jpeg', '10', NULL, NULL, NULL, 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Featured', NULL, NULL, '2017-09-21 07:49:30', '2017-09-21 21:53:33'),
(52, '2', 'Deshi-Boutique-Saree', NULL, 'Designer Embroidery Shari', '2990', 'Grab a designer georgette shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506001879.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 07:51:19', '2017-09-21 07:51:19'),
(53, '2', 'Deshi-Boutique-Saree', NULL, 'Designer Embroidery Shari', '2990', 'Grab a designer georgette shari for you. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506004289.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:31:28', '2017-09-21 08:31:29'),
(54, '2', 'Deshi-Boutique-Saree', NULL, 'Tangail Glossy Cotton Shari', '1699', 'Deshi boutique shari with nice design offering dazzling colors. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive boutique shari.', '/products_pic/1506004343.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'White', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 08:32:23', '2017-09-22 00:29:26'),
(55, '2', 'Deshi-Boutique-Saree', NULL, 'Tangail Glossy Cotton Shari', '1699', 'Deshi boutique shari with nice design offering dazzling colors. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive boutique shari.', '/products_pic/1506004385.jpeg', '10', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:33:05', '2017-09-21 08:33:05'),
(56, '2', 'Deshi-Boutique-Saree', NULL, 'Toshor Half Silk Shari', '1550', 'Deshi boutique shari with nice design offering dazzling colors. Express who you are through what you are wearing. Adorn yourself with gorgeous look with exclusive party shari.', '/products_pic/1506004426.jpeg', '20', NULL, NULL, NULL, 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:33:45', '2017-09-21 08:33:46'),
(57, '2', 'Block-Batik-Dress', NULL, 'Screen Cotton Salwar Kamiz Set', '849', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506004645.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:37:25', '2017-09-21 08:41:29'),
(58, '2', 'Block-Batik-Dress', NULL, 'creen Print Cotton Salwar Kamiz Set', '849', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506004685.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:38:05', '2017-09-21 08:38:05'),
(59, '2', 'Block-Batik-Dress', NULL, 'Block Print Cotton Salwar Kamiz Set', '849', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506004739.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:38:59', '2017-09-21 08:39:00'),
(60, '2', 'Block-Batik-Dress', NULL, 'Block Print Cotton Salwar Kamiz Set', '849', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506004801.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:40:00', '2017-09-21 08:40:01'),
(61, '2', 'Block-Batik-Dress', NULL, 'Block Print Cotton Salwar Kamiz Set', '849', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506004827.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:40:27', '2017-09-21 08:40:27'),
(62, '2', 'Deshi-Designer-Dress', NULL, 'Readymade 3 Pieces Set', '3499', 'Buy fashionable and trendy 4 pieces set.Extraordinary design with quality finishing. Grab the latest designer collection.', '/products_pic/1506005075.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'White', NULL, 'XS', 'S', 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 08:44:35', '2017-09-21 22:01:07'),
(63, '2', 'Deshi-Designer-Dress', NULL, 'Block Print Cotton Salwar Kamiz', '895', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506005141.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:45:41', '2017-09-21 08:45:41'),
(64, '2', 'Deshi-Designer-Dress', NULL, 'Block Print Cotton Salwar Kamiz', '895', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506005214.jpeg', '10', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:46:54', '2017-09-21 08:48:50'),
(65, '2', 'Deshi-Designer-Dress', NULL, 'Block Print Cotton Salwar Kamiz', '895', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506005257.jpeg', '10', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:47:37', '2017-09-21 08:48:23'),
(66, '2', 'Deshi-Designer-Dress', NULL, 'Block Print Cotton Salwar Kamiz', '895', 'Exclusive Design Pure Cotton Salwar Kamiz Set! Extraordinary design and nice work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506005389.jpeg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:49:49', '2017-09-21 08:49:49'),
(67, '2', 'Kurti-Tops-Pants', NULL, 'Exclusive Palazzo Pant for Women', '550', 'Comfortable to wear and good looking at the same time. Absolutely gorgeous! Exactly what you need to get a perfect look.', '/products_pic/1506005551.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:52:31', '2017-09-21 08:52:32'),
(68, '2', 'Kurti-Tops-Pants', NULL, 'Exclusive Shirt for Women', '770', 'Comfortable to wear and good looking at the same time. Absolutely gorgeous! Exactly what you need to get a perfect look.', '/products_pic/1506005618.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:53:38', '2017-09-21 08:54:33'),
(69, '2', 'Kurti-Tops-Pants', NULL, 'Stylish Tunic Kurti for Women', '1350', 'Comfortable to wear and good looking at the same time. Absolutely gorgeous! Exactly what you need to get a perfect look.', '/products_pic/1506005737.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'M', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 08:55:37', '2017-09-21 21:51:34'),
(70, '2', 'Kurti-Tops-Pants', NULL, 'Long Tunic Kurti', '1715', 'Long tunic kurti in Linen fabric! Comfortable to wear and good looking at the same time. Absolutely gorgeous! Exactly what you need to get a perfect look.', '/products_pic/1506005786.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:56:26', '2017-09-21 08:56:26'),
(71, '2', 'Kurti-Tops-Pants', NULL, 'Printed Kurti Material', '1000', 'Extraordinary design with quality finishing. Grab the latest designer collection. Comfortable to wear and good looking too. Exactly what you need to get a perfect look.', '/products_pic/1506005822.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:57:02', '2017-09-21 08:57:02'),
(72, '2', 'Hijab-Dupatta', NULL, 'Exclusive Soft Silk Net Hijab', '700', 'Latest and colorful hijab / scarves for ladies. We bring fashion to your door at the most affordable prices. Available in superb quality fabric, generously sized and in a fantastic range of pretty colors! Grab this fashionable hijab in best price.', '/products_pic/1506005995.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 08:59:55', '2017-09-21 08:59:55'),
(73, '2', 'Hijab-Dupatta', NULL, 'Exclusive Soft Cotton Hijab', '350', 'Latest and colorful hijab / scarves for ladies. We bring fashion to your door at the most affordable prices. Available in superb quality fabric, generously sized and in a fantastic range of pretty colors! Grab this fashionable hijab in best price.', '/products_pic/1506006031.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:00:31', '2017-09-21 09:00:31'),
(74, '2', 'Hijab-Dupatta', NULL, 'Exclusive Georgette Hijab', '600', 'Latest and colorful hijab / scarves for ladies. We bring fashion to your door at the most affordable prices. Available in superb quality fabric, generously sized and in a fantastic range of pretty colors! Grab this fashionable hijab in best price.', '/products_pic/1506006066.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:01:06', '2017-09-21 09:01:06'),
(75, '2', 'Hijab-Dupatta', NULL, 'Exclusive Silk Hijab', '450', 'Latest and colorful hijab / scarves for ladies. We bring fashion to your door at the most affordable prices. Available in superb quality fabric, generously sized and in a fantastic range of pretty colors! Grab this fashionable hijab in best price.', '/products_pic/1506006098.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:01:38', '2017-09-21 09:01:38'),
(76, '2', 'Hijab-Dupatta', NULL, 'Comfortable Batik Orna', '266', 'Trendy and fashionable batik orna for ladies. Pick your color at an amazing price. Stylish, colorful, long-lasting orna. Comfortable as well as stylish to wear.', '/products_pic/1506006134.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:02:14', '2017-09-21 09:02:14'),
(77, '2', 'Hijab-Dupatta', NULL, 'Comfortable Taat Orna', '266', 'Trendy and fashionable batik orna for ladies. Pick your color at an amazing price. Stylish, colorful, long-lasting orna. Comfortable as well as stylish to wear.', '/products_pic/1506006160.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:02:40', '2017-09-21 09:02:40'),
(78, '3', 'Study-Kit', NULL, 'Sweet Teddy Bear Bag', '1000', 'Grab a necessary and fashionable bag from PriyoShop.com. It has accessory pockets to hold equipment. High in quality and comfortable to use. A great accessory for the kids on the go.', '/products_pic/1506006390.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:06:30', '2017-09-21 09:06:30'),
(79, '3', 'Study-Kit', NULL, 'Sweet Teddy Bear Bag', '1000', 'Grab a necessary and fashionable bag from PriyoShop.com. It has accessory pockets to hold equipment. High in quality and comfortable to use. A great accessory for the kids on the go.', '/products_pic/1506006427.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:07:07', '2017-09-21 09:07:07'),
(80, '3', 'Study-Kit', NULL, 'Sound Wall Chart Writing Board', '1900', 'This Wall Chart adds more interactivity and fun while teaching your kids. Teach your kids ABC Alphabets, Words and 123 Numbers with just a push of a button and a sweet voice. Easy to operate - just turn the battery operated wall chart ON and get started on an exciting journey into the world of interactive education for your kids.', '/products_pic/1506006464.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:07:44', '2017-09-21 09:07:44'),
(81, '3', 'Study-Kit', NULL, 'Magnetic Whiteboard Educational Toy', '690', 'Children wooden educational animals and letters puzzle toys and 3D magnetic wooden drawing board for your kids. It will enhance your kid’s intellectual capacity.', '/products_pic/1506006503.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:08:23', '2017-09-21 09:08:23'),
(82, '3', 'Study-Kit', NULL, 'Mickey Mouse Pencil Box', '290', 'Your kids will love this wonderful Mickey Mouse pencil box. A necessary education accessory in Mickey Mouse theme. Designed with images of Mickey Mouse.', '/products_pic/1506006558.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:09:18', '2017-09-21 09:09:18'),
(83, '4', 'Leather-Belt-Watch', NULL, 'Leather Wrist Watch', '1650', 'Fashionable and trendy watch for you! Perfect piece to complement your look.Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506006740.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:12:20', '2017-09-21 09:12:20'),
(84, '4', 'Leather-Belt-Watch', NULL, 'Reloj Puma Watch', '17120', 'Fashionable and trendy watch for you! Perfect piece to complement your look.Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506006939.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:15:39', '2017-09-21 09:15:39'),
(85, '4', 'Leather-Belt-Watch', NULL, 'Classic St Mawes Men’s Watch', '20865', 'Fashionable and trendy watch for you! Perfect piece to complement your look.Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506006976.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:16:16', '2017-09-21 09:16:16'),
(86, '4', 'Leather-Belt-Watch', NULL, 'Imported Leather Belt Watch', '1690', 'Fashionable and trendy watch for you! Perfect piece to complement your look.Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007008.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:16:48', '2017-09-21 09:16:48'),
(87, '4', 'Leather-Belt-Watch', NULL, 'Imported Leather Belt Gents Watch', '750', 'Fashionable and trendy watch for you! Perfect piece to complement your look.Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007054.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:17:34', '2017-09-21 09:17:34'),
(88, '4', 'Bracelet-Watch', NULL, 'Casio His and Her Couple Watch', '11999', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007211.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:20:11', '2017-09-21 09:20:11'),
(89, '4', 'Bracelet-Watch', NULL, 'Full Black Ceramic Watch for Men', '9999', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007265.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:21:05', '2017-09-21 09:21:05'),
(90, '4', 'Bracelet-Watch', NULL, 'Fit bit Alta Wristbands', '13375', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007301.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:21:41', '2017-09-21 09:21:41'),
(91, '4', 'Bracelet-Watch', NULL, 'Master Copy Gents Watch', '2590', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007333.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:22:13', '2017-09-21 09:22:14'),
(92, '4', 'Bracelet-Watch', NULL, 'Master Copy Gents Watch', '2590', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506007371.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:22:51', '2017-09-21 09:22:51'),
(93, '4', 'LED-Watch', NULL, 'Silicon Belt LED Sports Watch', '120', 'Fashionable and trendy silicon belt LED sports watch for cool men! Perfect piece to complement your look. Available in cool color and slim design. Rectangular shape touch dial and adjustable belt.', '/products_pic/1506007525.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:25:25', '2017-09-21 09:25:25'),
(94, '4', 'LED-Watch', NULL, 'Silicon Belt LED Sports Watch', '199', 'Fashionable and trendy silicon belt LED sports watch for cool men! Perfect piece to complement your look. Available in cool color and slim design. Rectangular shape touch dial and adjustable belt.', '/products_pic/1506007561.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:26:01', '2017-09-21 09:26:36'),
(95, '4', 'LED-Watch', NULL, 'Silicon Belt LED Sports Watch', '120', 'Fashionable and trendy silicon belt LED sports watch for cool men! Perfect piece to complement your look. Available in cool color and slim design. Rectangular shape touch dial and adjustable belt.', '/products_pic/1506007644.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:27:24', '2017-09-21 09:27:24'),
(96, '4', 'LED-Watch', NULL, 'amurai Metal LED Watch', '199', 'Fashionable and trendy silicon belt LED sports watch for cool men! Perfect piece to complement your look. Available in cool color and slim design. Rectangular shape touch dial and adjustable belt.', '/products_pic/1506007718.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:28:38', '2017-09-21 09:28:38'),
(97, '4', 'LED-Watch', NULL, 'LED Faceless Bracelet Watch', '199', 'Fashionable and trendy silicon belt LED sports watch for cool men! Perfect piece to complement your look. Available in cool color and slim design. Rectangular shape touch dial and adjustable belt.', '/products_pic/1506007751.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:29:11', '2017-09-21 09:29:11'),
(98, '4', 'LED-Watch', NULL, 'Double Color LED Leather Watch', '550', 'Fashionable and trendy silicon belt LED sports watch for cool men! Perfect piece to complement your look. Available in cool color and slim design. Rectangular shape touch dial and adjustable belt.', '/products_pic/1506007810.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:30:10', '2017-09-21 09:30:10'),
(99, '4', 'Smart-Watch', NULL, 'Smart Bluetooth Gear Watch', '1760', 'You can control your cell phone to take photo from your wrist. It has altitude meter, photograph, barometer, vibration.', '/products_pic/1506008153.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:35:53', '2017-09-21 09:35:53'),
(100, '4', 'Smart-Watch', NULL, 'Xiaomi Amazfit Smart Watch', '11500', 'The first amazfit smart watch with a capacitive touch screen, convenient sporty design and many useful features such as heart rate sensor, built-in GPS, info push and pedometer.', '/products_pic/1506008204.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:36:44', '2017-09-21 09:36:44'),
(101, '4', 'Smart-Watch', NULL, 'Xiaomi Mi Band 2 Bracelet', '649', 'Made of high-quality, environment-friendly and healthy materials. Comfortable to wear.', '/products_pic/1506008243.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:37:23', '2017-09-21 09:37:23'),
(102, '4', 'Smart-Watch', NULL, 'Touchscreen Black Silicone Smart Watch', '29960', 'As traditional watchmakers aim to show Apple, Samsung, Motorola and the rest how it should be done.', '/products_pic/1506008293.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:38:13', '2017-09-21 09:38:13'),
(103, '4', 'Smart-Watch', NULL, 'Xiaomi Mi Band 2', '1800', 'Mi Band 2 uses an OLED display so you can see more at a glance.Simply lift your wrist* to view time and tap the button for steps and heart rate.', '/products_pic/1506008336.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:38:56', '2017-09-21 09:40:45'),
(104, '4', 'Smart-Watch', NULL, 'SIM Touch Smart Watch', '1800', 'Card extends support TF card up to 8GB extended. You can get it without hesitation.', '/products_pic/1506008492.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:41:32', '2017-09-21 09:41:32'),
(105, '4', 'Couple-Watch', NULL, 'Titan Bandhan Couple Watch', '4999', 'Gift this pair of 2 beautiful watches from Titan to your newlywed friends and make them feel special. It is a brilliant gifting option for a wedding or anniversary from gifts mate. Get a watch box FREE with it.', '/products_pic/1506008587.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:43:07', '2017-09-21 09:43:07'),
(106, '4', 'Couple-Watch', NULL, 'Keste Couple Watch', '1590', 'Gift this pair of 2 beautiful watches from Titan to your newlywed friends and make them feel special. It is a brilliant gifting option for a wedding or anniversary from gifts mate. Get a watch box FREE with it.', '/products_pic/1506008629.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:43:48', '2017-09-21 09:43:49'),
(107, '4', 'Couple-Watch', NULL, 'Longines Couple Watch', '1500', 'Gift this pair of 2 beautiful watches from Titan to your newlywed friends and make them feel special. It is a brilliant gifting option for a wedding or anniversary from gifts mate. Get a watch box FREE with it.', '/products_pic/1506008663.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:44:23', '2017-09-21 09:44:23');
INSERT INTO `products` (`id`, `item`, `category`, `brand`, `product_name`, `product_price`, `details`, `img`, `product_stock`, `red`, `green`, `blue`, `black`, `pink`, `purple`, `orange`, `white`, `yellow`, `xsmall`, `small`, `medium`, `large`, `elarge`, `huge`, `s28`, `s29`, `s30`, `s31`, `s32`, `featured`, `new`, `popular`, `created_at`, `updated_at`) VALUES
(108, '4', 'Couple-Watch', NULL, 'Band Lover Couple Watch', '1350', 'Gift this pair of 2 beautiful watches from Titan to your newlywed friends and make them feel special. It is a brilliant gifting option for a wedding or anniversary from gifts mate. Get a watch box FREE with it.', '/products_pic/1506008707.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:45:07', '2017-09-21 09:45:07'),
(109, '4', 'Couple-Watch', NULL, 'Ruilida Leather Lover Couple Watch', '1499', 'Gift this pair of 2 beautiful watches from Titan to your newlywed friends and make them feel special. It is a brilliant gifting option for a wedding or anniversary from gifts mate. Get a watch box FREE with it.', '/products_pic/1506008799.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:46:39', '2017-09-21 09:46:39'),
(110, '5', 'Multi-Belt-Watch', NULL, 'Changeable Dial & Belt Ladies Watch', '1249', 'Exclusive Watch Set with 7 changeable Dials & Straps! Change the color of watch to suit the color of your dress. Comes in a gift box for a lovely presentation. Be the center of attention among all your peers!', '/products_pic/1506009267.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:54:27', '2017-09-21 09:54:27'),
(111, '5', 'Multi-Belt-Watch', NULL, 'Changeable Dial & Belt Double Watch', '1299', 'Exclusive Watch Set with 7 changeable Dials & Straps! Change the color of watch to suit the color of your dress. Comes in a gift box for a lovely presentation. Be the center of attention among all your peers!', '/products_pic/1506009303.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:55:02', '2017-09-21 09:55:03'),
(112, '5', 'Multi-Belt-Watch', NULL, 'Changeable Dial & Belt Watch', '1120', 'Exclusive Watch Set with 7 changeable Dials & Straps! Change the color of watch to suit the color of your dress. Comes in a gift box for a lovely presentation. Be the center of attention among all your peers!', '/products_pic/1506009331.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:55:31', '2017-09-21 09:55:31'),
(113, '5', 'Multi-Belt-Watch', NULL, 'Changeable Dial & Belt Watch', '1350', 'Exclusive Watch Set with 7 changeable Dials & Straps! Change the color of watch to suit the color of your dress. Comes in a gift box for a lovely presentation. Be the center of attention among all your peers!', '/products_pic/1506009370.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:56:10', '2017-09-21 09:56:10'),
(114, '5', 'Bracelet-Watch', NULL, 'Imported Ladies Bracelet Watch', '449', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506009519.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:58:39', '2017-09-21 09:58:39'),
(115, '5', 'Bracelet-Watch', NULL, 'Skagen Women’s Watch', '11235', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506009548.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:59:08', '2017-09-21 09:59:08'),
(116, '5', 'Bracelet-Watch', NULL, 'Stylish Ladies Bracelet Watch', '280', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506009578.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 09:59:38', '2017-09-21 09:59:38'),
(117, '5', 'Bracelet-Watch', NULL, 'Swarovski Ladies Bracelet Watch', '990', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506009617.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:00:17', '2017-09-21 10:00:17'),
(118, '5', 'Bracelet-Watch', NULL, 'Feather Wings Ladies Bracelet Watch', '479', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011240.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:27:20', '2017-09-21 10:27:20'),
(119, '5', 'Bracelet-Watch', NULL, 'Bird Wings Ladies Bracelet Watch', '350', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011271.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:27:51', '2017-09-21 10:27:51'),
(120, '5', 'Bracelet-Watch', NULL, 'Silver Tower Ladies Watch', '499', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011303.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:28:23', '2017-09-21 10:28:23'),
(121, '5', 'Belt-Watch', NULL, 'Imported Ladies Watch', '449', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011468.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:31:08', '2017-09-21 10:31:08'),
(122, '5', 'Belt-Watch', NULL, 'Nolilon Leather Belt Ladies Watch', '290', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011527.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:32:07', '2017-09-21 10:32:07'),
(123, '5', 'Belt-Watch', NULL, 'Designer Ladies Watch', '449', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011563.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:32:43', '2017-09-21 10:32:43'),
(124, '5', 'Belt-Watch', NULL, 'Butterfly Design Genuine  Watch', '250', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011622.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 10:33:42', '2017-09-21 22:14:04'),
(125, '5', 'Belt-Watch', NULL, 'Xenlex Branded Ladies Watch', '700', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506011683.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:34:42', '2017-09-21 10:34:43'),
(126, '6', 'Diamond-Jewelry', NULL, 'Diamond Locket Set', '80000', 'Glamorous and fashionable, this stunning diamond locket features treated in an elegant wave design. This is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506011954.jpeg', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:39:14', '2017-09-21 10:39:14'),
(127, '6', 'Diamond-Jewelry', NULL, 'Diamond Locket', '8400', 'Glamorous and fashionable, this stunning diamond locket features treated in an elegant wave design. This is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012007.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 10:40:07', '2017-09-21 21:50:12'),
(128, '6', 'Diamond-Jewelry', NULL, 'Diamond Tops', '24000', 'Glamorous and fashionable, this stunning diamond locket features treated in an elegant wave design. This is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012093.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:41:33', '2017-09-21 10:41:33'),
(129, '6', 'Diamond-Jewelry', NULL, 'Diamond Finger Ring', '28000', 'Glamorous and fashionable, this stunning diamond locket features treated in an elegant wave design. This is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012152.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:42:32', '2017-09-21 10:42:32'),
(130, '6', 'Diamond-Jewelry', NULL, 'Diamond Finger Ring', '24000', 'Glamorous and fashionable, this stunning diamond locket features treated in an elegant wave design. This is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012192.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:43:12', '2017-09-21 10:43:12'),
(131, '6', 'Diamond-Jewelry', NULL, 'Diamond Finger Ring', '36000', 'Glamorous and fashionable, this stunning diamond locket features treated in an elegant wave design. This is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012227.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:43:47', '2017-09-21 10:43:47'),
(132, '6', 'Finger-Ring', NULL, 'Diamond Finger Ring', '23600', 'A circle of radiant finger ring with beautiful diamonds to create an irresistible wedding or eternity ring. A captivating symbol of your eternal love. This is an elegant and stylish token of love for the most important person in your life.', '/products_pic/1506012390.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 10:46:30', '2017-09-21 22:12:08'),
(133, '6', 'Finger-Ring', NULL, 'Diamond Finger Ring', '18000', 'A circle of radiant finger ring with beautiful diamonds to create an irresistible wedding or eternity ring. A captivating symbol of your eternal love. This is an elegant and stylish token of love for the most important person in your life.', '/products_pic/1506012430.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:47:10', '2017-09-21 10:47:10'),
(134, '6', 'Finger-Ring', NULL, 'Diamond Finger Ring', '22400', 'A circle of radiant finger ring with beautiful diamonds to create an irresistible wedding or eternity ring. A captivating symbol of your eternal love. This is an elegant and stylish token of love for the most important person in your life.', '/products_pic/1506012462.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 10:47:42', '2017-09-21 21:48:07'),
(135, '6', 'Finger-Ring', NULL, 'Diamond Finger Ring', '30000', 'A circle of radiant finger ring with beautiful diamonds to create an irresistible wedding or eternity ring. A captivating symbol of your eternal love. This is an elegant and stylish token of love for the most important person in your life.', '/products_pic/1506012498.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:48:18', '2017-09-21 21:49:29'),
(136, '6', 'Finger-Ring', NULL, 'Diamond Finger Ring', '20000', 'A circle of radiant finger ring with beautiful diamonds to create an irresistible wedding or eternity ring. A captivating symbol of your eternal love. This is an elegant and stylish token of love for the most important person in your life.', '/products_pic/1506012544.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:49:03', '2017-09-21 10:49:04'),
(137, '6', 'Finger-Ring', NULL, 'Diamond Finger Ring', '17600', 'A circle of radiant finger ring with beautiful diamonds to create an irresistible wedding or eternity ring. A captivating symbol of your eternal love. This is an elegant and stylish token of love for the most important person in your life.', '/products_pic/1506012608.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:50:08', '2017-09-21 10:50:08'),
(138, '6', 'Nose-Pin', NULL, 'Diamond Nose Pin', '8000', 'A stunning diamond nose pin featuring a natural wave design, this is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012712.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:51:52', '2017-09-21 10:51:52'),
(139, '6', 'Nose-Pin', NULL, 'Diamond Nose Nath', '11200', 'A stunning diamond nose pin featuring a natural wave design, this is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012748.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:52:28', '2017-09-21 10:52:28'),
(140, '6', 'Nose-Pin', NULL, 'Diamond Nose Pin', '8640', 'A stunning diamond nose pin featuring a natural wave design, this is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012781.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:53:01', '2017-09-21 21:46:13'),
(141, '6', 'Nose-Pin', NULL, 'Diamond Nose Pin', '6800', 'A stunning diamond nose pin featuring a natural wave design, this is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012819.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:53:39', '2017-09-21 10:53:39'),
(142, '6', 'Nose-Pin', NULL, 'Diamond Nose Pin', '6000', 'A stunning diamond nose pin featuring a natural wave design, this is an elegant and stylish token of love for the most important person in your life. You will steal their heart forever. Available in cool design.', '/products_pic/1506012843.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:54:03', '2017-09-21 10:54:03'),
(143, '6', 'Anklet', NULL, 'Gold Plated Indian Anklet Set', '1150', 'Great selection of fashion and fine jewelry from India. Designer jewelry pieces to complement any outfit. We offer latest design, outstanding quality and value. So, choose from numerous of sparkling styles.', '/products_pic/1506012953.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:55:53', '2017-09-21 10:55:53'),
(144, '6', 'Anklet', NULL, 'Gold Plated Indian Anklet Set', '1150', 'Great selection of fashion and fine jewelry from India. Designer jewelry pieces to complement any outfit. We offer latest design, outstanding quality and value. So, choose from numerous of sparkling styles.', '/products_pic/1506012990.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:56:30', '2017-09-21 10:56:30'),
(145, '6', 'Anklet', NULL, 'Gold Plated Indian Anklet Set', '1150', 'Great selection of fashion and fine jewelry from India. Designer jewelry pieces to complement any outfit. We offer latest design, outstanding quality and value. So, choose from numerous of sparkling styles.', '/products_pic/1506013011.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:56:50', '2017-09-21 10:56:51'),
(146, '6', 'Anklet', NULL, 'Gold Plated Indian Anklet Set', '1150', 'Great selection of fashion and fine jewelry from India. Designer jewelry pieces to complement any outfit. We offer latest design, outstanding quality and value. So, choose from numerous of sparkling styles.', '/products_pic/1506013043.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 10:57:23', '2017-09-21 21:45:08'),
(147, '6', 'Anklet', NULL, 'Gold Plated Indian Anklet Set', '1150', 'Great selection of fashion and fine jewelry from India. Designer jewelry pieces to complement any outfit. We offer latest design, outstanding quality and value. So, choose from numerous of sparkling styles.', '/products_pic/1506013074.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:57:54', '2017-09-21 10:57:54'),
(148, '6', 'Mens-Jewelry', NULL, 'Leather Bracelet for Men', '550', 'Smart Leather bracelet in super style! A trendy bracelet for men. You can wear it securely around your wrist. Wear it whenever you like.', '/products_pic/1506013160.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:59:20', '2017-09-21 10:59:20'),
(149, '6', 'Mens-Jewelry', NULL, 'Black Leather Anchore Bracelet', '275', 'Smart Leather bracelet in super style! A trendy bracelet for men. You can wear it securely around your wrist. Wear it whenever you like.', '/products_pic/1506013193.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:59:53', '2017-09-21 10:59:53'),
(150, '6', 'Mens-Jewelry', NULL, 'Spider Man Gents Bracelet', '360', 'Smart metal made bracelet in super style! A trendy bracelet for men. You can wear it securely around your wrist. Wear it whenever you like.', '/products_pic/1506013224.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:00:24', '2017-09-21 11:00:24'),
(151, '6', 'Mens-Jewelry', NULL, 'I Am Proud To Be A Bangladeshi', '40', 'am proud to be a Bangladeshi wrist band in cool color! Nice wrist band with best quality material. Hang on to the spirit for your country with this cool wrist band. Show your style.', '/products_pic/1506013260.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:01:00', '2017-09-21 21:43:37'),
(152, '6', 'Mens-Jewelry', NULL, 'Salman Khan Style Metal Bracelet', '280', 'Smart Leather bracelet in super style! A trendy bracelet for men. You can wear it securely around your wrist. Wear it whenever you like.', '/products_pic/1506013289.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 11:01:29', '2017-09-21 21:44:41'),
(153, '6', 'Mens-Jewelry', NULL, 'Single Ear Top for Gents', '65', 'Yo Yo Honey Sing style stone crafted square ear top for gents! A stunning ear stud for men. Change up your classic style with this dazzling single ear top. Grab the style of musician Yo Yo Honey Sing.', '/products_pic/1506013323.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:02:03', '2017-09-21 11:02:03'),
(154, '6', 'Mens-Jewelry', NULL, 'Bio Magnetic Health Bracelet', '1500', 'The magnetic theory revolves in the arteries around the wrist; magnets improve the circulatory system and blood flow. The increased circulation gives the body more of nutrients in the blood, improving health naturally.', '/products_pic/1506013363.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:02:43', '2017-09-21 11:02:43'),
(155, '6', 'Mens-Jewelry', NULL, 'Batman Locket with Chain', '190', 'Exclusive Batman Locket with Chain for men in cool design and color. A trendy locket for young guy. Cool black beads made chain. Wear it whenever you like.', '/products_pic/1506013392.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:03:12', '2017-09-21 11:03:12'),
(156, '7', 'Mobile-Phone', NULL, 'Symphony Mobile Phone D68', '1200', 'Symphony latest model has been added with much latest technology. You will get pleasure to use it. It pairs the essentials you love with the freedom you want.', '/products_pic/1506013533.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:05:33', '2017-09-21 11:05:33'),
(157, '7', 'Mobile-Phone', NULL, 'Symphony Mobile Phone D52i', '1350', 'Symphony latest model has been added with much latest technology. You will get pleasure to use it. It pairs the essentials you love with the freedom you want.', '/products_pic/1506013561.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:06:01', '2017-09-21 11:12:30'),
(158, '7', 'Mobile-Phone', NULL, 'Symphony Mobile Phone D140', '1590', 'Symphony latest model has been added with much latest technology. You will get pleasure to use it. It pairs the essentials you love with the freedom you want.', '/products_pic/1506013590.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:06:30', '2017-09-21 11:06:30'),
(159, '7', 'Mobile-Phone', NULL, 'Symphony Mobile Phone L23', '1230', 'Symphony latest model has been added with much latest technology. You will get pleasure to use it. It pairs the essentials you love with the freedom you want.', '/products_pic/1506013621.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:07:01', '2017-09-21 11:07:01'),
(160, '7', 'Mobile-Phone', NULL, 'Symphony Mobile Phone D18', '1240', 'Symphony latest model has been added with much latest technology. You will get pleasure to use it. It pairs the essentials you love with the freedom you want.', '/products_pic/1506013656.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:07:36', '2017-09-21 11:07:36'),
(161, '7', 'Power-Bank', NULL, 'ELOOP Power Bank 11000 mAh', '2140', 'ELOOP E12 portable backup battery. For charging mobile devices and smartphones such as iPhone, iPad, Samsung, and other tablets. A super-high 11000 mAh capacity with two fast-charging USB ports is all contained in a portable charger and is only 195g which allows you to take with you at almost any occasion,such as mountain.', '/products_pic/1506013777.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:09:36', '2017-09-21 21:40:09'),
(162, '7', 'Power-Bank', NULL, 'Remax Power Bank 5000mAH', '1500', 'The best quality power bank for your device. Its intelligent charging protection to prevent the device from being damaged from overcharge. Apply to various mobile phones.', '/products_pic/1506013826.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:10:26', '2017-09-21 11:10:26'),
(163, '7', 'Power-Bank', NULL, 'Proda Super Alloy 10000mAh', '1850', 'The best quality power bank for your device. Its intelligent charging protection to prevent the device from being damaged from overcharge. Apply to various mobile phones.', '/products_pic/1506013857.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:10:57', '2017-09-21 11:10:57'),
(164, '7', 'Power-Bank', NULL, 'ADATA Power Bank White', '1000', 'The best quality power bank for your device. Its intelligent charging protection to prevent the device from being damaged from overcharge. Apply to various mobile phones.', '/products_pic/1506013893.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:11:33', '2017-09-21 11:11:33'),
(165, '7', 'Power-Bank', NULL, 'Rapoo Power Bank', '2700', 'The best quality power bank for your device. Its intelligent charging protection to prevent the device from being damaged from overcharge. Apply to various mobile phones.', '/products_pic/1506013921.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:12:01', '2017-09-21 11:12:01'),
(166, '7', 'Power-Bank', NULL, 'ADATA Power Bank White', '1350', 'The best quality power bank for your device. Its intelligent charging protection to prevent the device from being damaged from overcharge. Apply to various mobile phones.', '/products_pic/1506014012.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:13:32', '2017-09-21 11:13:32'),
(167, '7', 'Headphone-Earphone', NULL, 'Remax RM-501 Headphone', '499', 'This earphone has super bass, gives a perfect sound experience. In-ear noise cancelling feature.', '/products_pic/1506014170.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:16:10', '2017-09-21 11:16:10'),
(168, '7', 'Headphone-Earphone', NULL, 'Lenjoy in-513 Blue Headphone', '300', 'This earphone has super bass, gives a perfect sound experience. In-ear noise cancelling feature.', '/products_pic/1506014207.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:16:47', '2017-09-21 11:16:47'),
(169, '7', 'Headphone-Earphone', NULL, 'Logitech Wireless Headset', '3745', 'The tiny, leave-in nano receiver is always ready for use. Plug it in once to a USB port—and forget about it.', '/products_pic/1506014243.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:17:23', '2017-09-21 11:17:24'),
(170, '7', 'Headphone-Earphone', NULL, 'Finch 2 Ring Music Wireless', '8250', 'iOS power meter display. Support multipoint technology. Incoming call vibration alert.', '/products_pic/1506014295.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:18:15', '2017-09-21 11:18:15'),
(171, '7', 'Headphone-Earphone', NULL, 'Remax RB-T7 Bluetooth', '1215', 'REMAX RB-T7 Bluetooth Headset gives users the highly efficient sound. Good quality surrounds sound.', '/products_pic/1506014326.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:18:46', '2017-09-21 11:18:46'),
(172, '7', 'Headphone-Earphone', NULL, 'HBS850 Sport Bluetooth', '1485', 'It is built-in rechargeable li-on polymer battery. It is very quality product. So collect it fast.', '/products_pic/1506014362.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 11:19:22', '2017-09-21 21:39:12'),
(173, '7', 'Selfie-Gadget', NULL, 'Handheld Selfie Monopod Stick', '500', 'Do you like taking Selfie? Then this Self-Taking Camera Stand is perfect for you. Wired selfie stick with three cable generations drive by wire monopod for IOS and Android system.', '/products_pic/1506014469.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:21:09', '2017-09-21 11:21:09'),
(174, '7', 'Selfie-Gadget', NULL, 'Universal Mini Selfie Stick', '199', 'Selfie Stick Monopod Mini is a universal tripod to hand-phones, executed in the form of a telescopic tube. Phone is set to self-stick through a special secure mounting, which is located at the end of the tripod.', '/products_pic/1506014502.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:21:42', '2017-09-21 11:21:42'),
(175, '7', 'Selfie-Gadget', NULL, 'Mini Selfie Stick with Cable', '199', 'Selfie Stick Monopod Mini is a universal tripod to hand-phones, executed in the form of a telescopic tube. Phone is set to self-stick through a special secure mounting, which is located at the end of the tripod.', '/products_pic/1506014523.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:22:03', '2017-09-21 11:22:03'),
(176, '7', 'Selfie-Gadget', NULL, '4 in 1 Selfie Stick & Mobile Lens', '590', 'Selfie Stick Monopod Mini is a universal tripod to hand-phones, executed in the form of a telescopic tube. Phone is set to self-stick through a special secure mounting, which is located at the end of the tripod.', '/products_pic/1506014554.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 11:22:34', '2017-09-21 21:38:48'),
(177, '7', 'Selfie-Gadget', NULL, 'Locust Premium Compact', '699', 'Wired selfie stick with cable three generations drive by wire monopod for IOS and Android system. Built-in shutter, No need charging, No need external battery, No need of remote control.', '/products_pic/1506014588.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:23:08', '2017-09-21 11:23:08'),
(178, '7', 'Mobile-Battery', NULL, 'Symphony Battery W86', '450', 'Over-discharging, over-charging over-current and short circuit protection, more safeguard for using.', '/products_pic/1506014705.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:25:05', '2017-09-21 11:25:51'),
(179, '8', 'Mouse-Keyboard', NULL, 'Xiaomi Mouse Mat Metallic', '1399', 'Made of aluminum alloy metal using stamping, sandblasting, light and laser engraving Mi, five kinds of high-tech, silicone strap mounted to protect mice from the exit of the working surface.', '/products_pic/1506014902.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:28:22', '2017-09-21 11:28:22'),
(180, '8', 'Mouse-Keyboard', NULL, 'Rapoo Wireless Optical Combo', '4500', 'Rapoo Wireless Keyboard is use with PC or laptop. Its Reliable wireless keyboard and also media control, spill-resistant.', '/products_pic/1506014943.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:29:03', '2017-09-21 11:29:03'),
(181, '8', 'Mouse-Keyboard', NULL, 'Rapoo Wireless Mouse', '1650', 'Rapoo Wireless Keyboard is use with PC or laptop. Its Reliable wireless keyboard and also media control, spill-resistant.', '/products_pic/1506015028.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:30:28', '2017-09-21 11:30:28'),
(182, '8', 'Mouse-Keyboard', NULL, 'Rapoo Wireless Optical Mouse', '1650', 'Rapoo Wireless Keyboard is use with PC or laptop. Its Reliable wireless keyboard and also media control, spill-resistant.', '/products_pic/1506015104.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:31:44', '2017-09-21 11:31:45'),
(183, '8', 'Mouse-Keyboard', NULL, 'Tablet Cover with Keyboard', '750', 'Leather Carrying Case Comes Equipped with Full Working Keyboard with USB Cable Connection, and an Extendable Kickstand. Durable Leather Construction with Secure Magnetic Closure.', '/products_pic/1506015146.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:32:26', '2017-09-21 11:32:26'),
(184, '8', 'Pen-Drive', NULL, 'UV 128 Pen Drive 16 GB', '700', 'We collect latest available pen drive 16 GB within Bangladesh and provide the best possible deal to you. It is the best solution for business professionals and mobile users.', '/products_pic/1506015354.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Popular', '2017-09-21 11:35:54', '2017-09-21 21:37:22'),
(185, '8', 'Pen-Drive', NULL, 'Android Pen Drive 16 GB', '950', 'We collect latest available pen drive 16 GB within Bangladesh and provide the best possible deal to you. It is the best solution for business professionals and mobile users.', '/products_pic/1506015410.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:36:50', '2017-09-21 11:36:50'),
(186, '8', 'Pen-Drive', NULL, 'UV 128 Pen Drive 16 GB', '700', 'We collect latest available pen drive 16 GB within Bangladesh and provide the best possible deal to you. It is the best solution for business professionals and mobile users.', '/products_pic/1506015488.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:38:08', '2017-09-21 11:38:08'),
(187, '8', 'Antivirus', NULL, 'Panda Internet Security', '990', 'Panda Security is the world’s leading provider of cloud-based security solutions. This innovative security model can automatically analyze and classify thousands of new malware samples every day, guaranteeing corporate customers and home users the most effective protection against Internet threats with minimum impact on system performance.', '/products_pic/1506015646.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:40:46', '2017-09-21 11:40:46'),
(188, '8', 'Antivirus', NULL, 'Kaspersky Internet Security', '1044', 'Internet security to keep you safe from all threats! Your PC and its information are precious. Kaspersky rigorously protects your files and identity from cyber criminals and the latest malware attack.', '/products_pic/1506015700.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:41:40', '2017-09-21 11:41:40'),
(189, '8', 'Antivirus', NULL, 'E-scan TSS for 1 User', '1050', 'Enjoy secured computing experience with eScan total security suite with cloud security.', '/products_pic/1506015753.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:42:33', '2017-09-21 11:42:33'),
(190, '8', 'Antivirus', NULL, 'Kaspersky Antivirus 2016', '1599', 'Introducing world’s one of the most demanding antivirus. Kaspersky antivirus has all of the support you need to keep safe & secure your device.', '/products_pic/1506015805.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:43:25', '2017-09-21 11:43:25'),
(191, '8', 'Antivirus', NULL, 'AVG PC Tuneup', '500', 'Introducing world’s one of the most demanding antivirus. AVG antivirus has all of the support you need to keep safe & secure your device.', '/products_pic/1506015860.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:44:20', '2017-09-21 11:44:20'),
(192, '8', 'Camera', NULL, 'Xiaomi Mijia Intelligent', '3099', 'You can have a clear view of your home in a dark environment even from outside. In Two-way audio, you can talk to your family when you are not at home.', '/products_pic/1506015928.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:45:28', '2017-09-21 11:45:28'),
(193, '8', 'Camera', NULL, 'Xiaomi Smart Camera', '6099', 'Built-in 6 glass lens group which have a better optical performance when in poor light conditions. 10 LEDs IR lights, provides the night vision.', '/products_pic/1506015961.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:46:01', '2017-09-21 11:46:01'),
(194, '8', 'Camera', NULL, 'Sony Camcorder DCR', '21400', 'It is an ideal handy cam to shoot all your important functions and events in their true spirit. The soul of this suavely designed Sony camcorder black is its powerful CCD sensor with advanced HAD technology.', '/products_pic/1506016008.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:46:48', '2017-09-21 11:46:48'),
(195, '8', 'Camera', NULL, 'Nikon D5500 Digital SLR Body', '64575', 'Take the D5500 for example, a compact DSLR capable of inspiring a new level of creativity. From the moment you flip the touchscreen Vari-angle display and capture photo, you\'ll begin to see your photography in a new light.', '/products_pic/1506016057.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:47:37', '2017-09-21 11:47:37'),
(196, '8', 'Camera', NULL, 'Canon EOS 5D Mark III', '184000', 'Capture high-quality images that are full of detail with supercharged EOS performance and stunning full frame, high-resolution image capture, the EOS 5D Mark III is designed to perform. Enjoy high quality Full HD video at good resolution.', '/products_pic/1506016092.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:48:12', '2017-09-21 11:48:13'),
(197, '8', 'Cool-Accessories', NULL, 'Exclusive USB Hub with Mouse Pad', '380', 'Extraordinary design with quality finishing. This unique product will enhance your home beauty.', '/products_pic/1506016222.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:50:21', '2017-09-21 11:50:22'),
(198, '8', 'Cool-Accessories', NULL, 'Big Size Binoculars - G874', '1380', 'We bring the whole world in your eyes. The distant thing is not far away.', '/products_pic/1506016259.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:50:59', '2017-09-21 11:51:23'),
(199, '8', 'Cool-Accessories', NULL, 'Notebook Cooling Pad - G857', '1450', '5 level height adjustments, to protect your cervical health. No noise pollution, with blue LED lights to make your laptop cooler.', '/products_pic/1506016322.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, '2017-09-21 11:52:02', '2017-09-21 21:38:03'),
(200, '8', 'Cool-Accessories', NULL, 'Exclusive VR Box', '999', 'Its virtual reality glasses brings you an excellent watching and playing experience. Convenient to wear the 3D glasses on your head.', '/products_pic/1506016348.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:52:28', '2017-09-21 11:52:28'),
(201, '8', 'Cool-Accessories', NULL, 'Wireless Electric Charger', '499', 'Wireless power maintains safe, continuous, and reliable transfer of power to ensure all varieties of devices and equipment are charged and ready to go at a moment’s notice.', '/products_pic/1506016373.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:52:53', '2017-09-21 11:52:53'),
(202, '8', 'Cool-Accessories', NULL, 'Xiaomi Yee Light LED Smart Bulb', '1099', 'Energy saving lamp, with overhead and overload protection. Protect your eyes, is your best choice.', '/products_pic/1506016406.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:53:26', '2017-09-21 11:53:26'),
(203, '9', 'Tablet-PC', NULL, 'Symphony Smart Phone Tab 50', '8490', 'Symphony Tab 50 has been added much latest technology. You will get pleasure to use it. It pairs the essentials you love with the freedom you want.', '/products_pic/1506016607.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:56:47', '2017-09-21 11:56:47'),
(204, '9', 'Tablet-PC', NULL, 'Lenovo Yoga Tablet 2 Windows', '45000', 'A better way is here. The Yoga Tablet 10 shatters the mold in tablet design to create a device that\'s more versatile and comfortable to use than anything that\'s come before all with an epic battery life.', '/products_pic/1506016644.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:57:24', '2017-09-21 11:57:24'),
(205, '9', 'Tablet-PC', NULL, 'ASUS Transformer Book Flip', '90000', 'ASUS T300CHI- M-5Y71 Transformer Book Flip compact design to keep you moving. It is designed to be by your side, wherever you go. All your files stay with you. It gives you long battery life so you needn\'t worry about while you\'re working inflight or in a coffee shop, or when you\'re out and about', '/products_pic/1506016682.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:58:02', '2017-09-21 11:58:02'),
(206, '9', 'Laptop-PC', NULL, 'Acer Curved 34 Inch Ultra Wide Monitor', '100700', 'The Acer XR 34\" Curved IPS Display with Ultra Wide QHD (3440 x 1440) resolution offers the sharpest picture quality and provides a perfect picture with a broader view.', '/products_pic/1506016766.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 11:59:26', '2017-09-21 11:59:26'),
(207, '9', 'Laptop-PC', NULL, 'ASUS UX410UA Core i5 7th Gen', '57000', 'It is designed to be by your side, wherever you go. All your files stay with you. It gives you long battery life so you needn\'t worry about while you\'re working in flight or in a coffee shop, or when you\'re out and abou', '/products_pic/1506016801.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 12:00:01', '2017-09-21 12:00:01'),
(208, '9', 'Laptop-PC', NULL, 'ASUS Zen AIO Multi-Touch', '101230', '2.8 GHz Intel core i5-6200U quad-core. 8 GB of 2133 MHz DDR4 RAM.', '/products_pic/1506016844.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 12:00:44', '2017-09-21 12:09:21'),
(209, '9', 'Notebook', NULL, 'Dell Latitude 5270-6th-i7', '89610', 'This Notebook compact design to keep you moving. It is designed to be by your side, wherever you go. All your files stay with you. It gives you long battery life so you needn\'t worry about while you\'re working in flight or in a coffee shop, or when you\'re out and about.', '/Products_pic/1506017576.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 12:02:39', '2017-09-21 12:12:56'),
(210, '9', 'Notebook', NULL, 'Lenovo 6th Gen i7 Notebook', '130000', 'Lenovo Yoga 900 6th Gen i7 Notebook compact design to keep you moving. It is designed to be by your side, wherever you go. All your files stay with you. It gives you long battery life so you needn\'t worry about while you\'re working in flight or in a coffee shop, or when you\'re out and about.', '/products_pic/1506017024.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 12:03:44', '2017-09-21 12:03:44'),
(211, '9', 'Notebook', NULL, 'Dell Inspiron Notebook', '161460', 'Dell Inspiron Notebook compact design to keep you moving. It is designed to be by your side, wherever you go. All your files stay with you. It gives you long battery life so you needn\'t worry about while you\'re working inflight or in a coffee shop, or when you\'re out and about.', '/products_pic/1506017068.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 12:04:28', '2017-09-21 12:04:28');
INSERT INTO `products` (`id`, `item`, `category`, `brand`, `product_name`, `product_price`, `details`, `img`, `product_stock`, `red`, `green`, `blue`, `black`, `pink`, `purple`, `orange`, `white`, `yellow`, `xsmall`, `small`, `medium`, `large`, `elarge`, `huge`, `s28`, `s29`, `s30`, `s31`, `s32`, `featured`, `new`, `popular`, `created_at`, `updated_at`) VALUES
(212, '9', 'Notebook', NULL, 'ASUS Core i5 Transformer Book Flip', '69500', 'ASUS TP300UA- 6200U Core i5 Transformer Book Flip compact design to keep you moving. It is designed to be by your side, wherever you go. All your files stay with you. It gives you long battery life so you needn\'t worry about while you\'re working inflight or in a coffee shop, or when you\'re out and about.', '/products_pic/1506017286.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 12:08:06', '2017-09-21 12:08:06'),
(213, '1', 'Shirt-Collection', NULL, 'Full Sleeve Casual Shirt', '1299', 'Grab stylish casual shirt at an affordable price for you. It has attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1506054043.jpeg', '20', NULL, NULL, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 22:20:43', '2017-09-21 22:20:44'),
(214, '2', 'Original-Indian-Dress', NULL, 'Original Indian Salwar Kamiz', '3950', 'Original Indian Salwar Kamiz Set in heavy embroidery! Extraordinary design and exclusive work. Comfortable to wear and good looking at the same time. Exactly what you need to get a perfect look.', '/products_pic/1506054171.jpeg', '20', NULL, NULL, 'Blue', 'Black', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-21 22:22:51', '2017-09-21 22:37:42'),
(216, '3', 'Dress-For-Kids', NULL, 'Red & White USPA T-shirt for Kids', '450', 'Keep your baby cozy and comfortable with this USPA T-shirt. Red and white colored smart t-shirt for kids. A must buy dress for your little kids. This fabulous dress is great to wear!', '/products_pic/1506060703.jpg', '20', 'Red', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XS', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:11:43', '2017-09-22 00:11:43'),
(217, '3', 'Dress-For-Kids', NULL, 'Exclusive Jeans Pant for Boys', '550', 'Export quality jeans pant for kids with super style. Favorite 3D crinkle effect. Perfect blending of fashion and comfort.', '/products_pic/1506060780.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:13:00', '2017-09-22 00:13:00'),
(218, '3', 'Dress-For-Kids', NULL, 'Exclusive Jeans Pant for Girls', '550', 'Export quality jeans pant for kids with super style. Favorite 3D crinkle effect. Perfect blending of fashion and comfort.', '/products_pic/1506060818.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:13:38', '2017-09-22 00:13:38'),
(219, '3', 'Dress-For-Kids', NULL, 'Exclusive Kids T- Shirt', '300', 'Grab a stylish t-shirt at an affordable price. Its attractive design will adorn your kids with gorgeous look and make your kids stand out.', '/Products_pic/1506060903.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:14:13', '2017-09-22 00:15:03'),
(220, '3', 'Dress-For-Kids', NULL, 'Exclusive Polo T-shirt for Kids', '399', 'Grab a stylish polo t-shirt at an affordable price for you. Its attractive design will adorn yourself with gorgeous look and make you stand out.', '/products_pic/1506060884.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:14:44', '2017-09-22 00:14:44'),
(221, '3', 'Toys-For-Kids', NULL, 'Full Family Bath Tub Intex 96', '4960', 'Excellent swimming pool for your family can be used at all.', '/products_pic/1506061010.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:16:50', '2017-09-22 00:16:50'),
(222, '3', 'Toys-For-Kids', NULL, 'Fidget Spinner Toy – Stress Reliever', '349', 'The toy has been advertised as helping people who have trouble with focusing or fidgeting (such as those with ADHD, autism, or anxiety).', '/products_pic/1506061036.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:17:16', '2017-09-22 00:17:16'),
(223, '3', 'Toys-For-Kids', NULL, 'Walking Angel Fairy Toy (Purple)', '999', 'Let your children play happily and feel assured with this amazing Walking Angel Fairy toy. The best gift for the children. For children over 3 years of age.', '/products_pic/1506061069.jpeg', '20', NULL, NULL, NULL, NULL, NULL, 'Purple', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:17:49', '2017-09-22 00:17:49'),
(224, '3', 'Toys-For-Kids', NULL, 'Music Piano 3D Light Toy', '999', 'Let your children play happily and feel assured with this amazing toy. The best gift for the children. For children over 3 years of age.', '/products_pic/1506061116.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:18:35', '2017-09-22 00:18:36'),
(225, '3', 'Kids-Watch', NULL, 'Ben 10 Kids Watch', '230', 'Fashionable and trendy watch for you! Perfect piece to complement your look. Available in cool color and functions. Get a watch box FREE with it.', '/products_pic/1506061221.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:20:21', '2017-09-22 00:20:21'),
(226, '3', 'Kids-Watch', NULL, 'HB Multicolor Watch for Kids', '300', 'The most fashionable & innovative design for kids! Plastic belt analogue watch. Daily waterproof design! Good decoration for wrist, both practical and elegant. Kids will love its colors.', '/products_pic/1506061297.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:21:37', '2017-09-22 00:21:37'),
(227, '3', 'Kids-Watch', NULL, 'Apple Shaped LED Watch for Kids', '219', 'The most fashionable & innovative design for kids! Digital faceless LED watch. Gently press the button, it will display the time on demand. Good decoration for your wrist, both practical and elegant', '/products_pic/1506061325.jpg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:22:05', '2017-09-22 00:22:05'),
(228, '3', 'Body-Care', NULL, 'Johnson\'s Baby Lotion 300ml', '419', 'Johnson baby lotion is formulated with the natural extract that helps to increase the softness of your baby’s skin. At the same time, it will nourish your baby’s skin. This lotion has intensive moisture to save skin from dryness as well as ensure no irritation to your baby’s delicate skin. Not only the baby but also its family can use this lotion for the mind blowing result.', '/products_pic/1506061446.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:24:06', '2017-09-22 00:24:06'),
(229, '3', 'Body-Care', NULL, 'Schwarzkopf Supersoft Kids Shampoo', '375', 'The mild skin-friendly pH formula gently cleanses the hair and skin and protects them from drying out.', '/Products_pic/1506061502.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:24:39', '2017-09-22 00:25:02'),
(230, '3', 'Body-Care', NULL, 'Johnson\'s Baby Natural Moisture', '590', 'Includes essential minerals, proven to be more effective than each ingredient alone. Combines Johnson\'s mildness with a unique blend', '/products_pic/1506061549.jpeg', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-22 00:25:48', '2017-09-22 00:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ses_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopcarts`
--

CREATE TABLE `shopcarts` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pending` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title1`, `slider_title2`, `img`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '/slider_img/1505110462.jpg', '2017-09-11 00:14:22', '2017-09-11 00:14:23'),
(2, NULL, NULL, '/slider_img/1505110474.jpg', '2017-09-11 00:14:34', '2017-09-11 00:14:34'),
(3, NULL, NULL, '/slider_img/1505110482.jpg', '2017-09-11 00:14:42', '2017-09-11 00:14:42'),
(4, NULL, NULL, '/slider_img/1505110495.jpg', '2017-09-11 00:14:55', '2017-09-11 00:14:55'),
(5, NULL, NULL, '/slider_img/1505110500.jpg', '2017-09-11 00:15:00', '2017-09-11 00:15:00'),
(6, NULL, NULL, '/slider_img/1505110509.jpg', '2017-09-11 00:15:09', '2017-09-11 00:15:09'),
(7, NULL, NULL, '/slider_img/1505110516.jpg', '2017-09-11 00:15:16', '2017-09-11 00:15:16'),
(8, NULL, NULL, '/slider_img/1505110529.jpg', '2017-09-11 00:15:28', '2017-09-11 00:15:29'),
(9, NULL, NULL, '/slider_img/1505110534.jpg', '2017-09-11 00:15:34', '2017-09-11 00:15:34'),
(10, NULL, NULL, '/slider_img/1505110547.jpg', '2017-09-11 00:15:47', '2017-09-11 00:15:47'),
(11, NULL, NULL, '/slider_img/1505110578.gif', '2017-09-11 00:16:18', '2017-09-11 00:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oshit Sutra Dar', 'oshit@gmail.com', '$2y$10$GzBpWvDM2tYBfUq6PeorjeVI/kMTaqRC/BZ9vpLflxAlzYI/kx.Ua', '2xOoAD22VbYmCWtvqHp0HMtyON8a9CIuP7KeLhhutyEXj6624lNKAbZXCD56', '2017-09-10 22:58:57', '2017-09-10 22:58:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categores`
--
ALTER TABLE `categores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myshopusers`
--
ALTER TABLE `myshopusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentinfos`
--
ALTER TABLE `paymentinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopcarts`
--
ALTER TABLE `shopcarts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categores`
--
ALTER TABLE `categores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `checks`
--
ALTER TABLE `checks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `myshopusers`
--
ALTER TABLE `myshopusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paymentinfos`
--
ALTER TABLE `paymentinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shopcarts`
--
ALTER TABLE `shopcarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
