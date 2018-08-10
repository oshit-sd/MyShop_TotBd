-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 07:41 AM
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
(6, '1', 'Punjabi-Fotua', '2017-09-10 23:16:35', '2017-09-11 01:24:32'),
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
(29, '5', 'Couple-Watch', '2017-09-10 23:29:00', '2017-09-11 01:49:00'),
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
(7, '2017_07_02_145808_create_shippings_table', 1),
(8, '2017_07_02_145808_create_shopcarts_table', 1),
(9, '2017_07_02_145808_create_sliders_table', 1),
(10, '2017_07_03_052120_create_products_table', 1),
(11, '2017_07_08_165808_create_checks_table', 1);

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
(2, 'Bappy Sutra Dar', 'bappysd@gmail.com', '$2y$10$Pm2NEI3oAyN5EWM9IxxHBe4M7eOMSG1nSXLvOybizgYFP92EIpHQy', '2017-09-11 11:00:38', '2017-09-11 11:00:38');

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
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item`, `category`, `brand`, `product_name`, `product_price`, `details`, `img`, `product_stock`, `red`, `green`, `blue`, `black`, `pink`, `purple`, `orange`, `white`, `yellow`, `xsmall`, `small`, `medium`, `large`, `elarge`, `huge`, `featured`, `new`, `popular`, `created_at`, `updated_at`) VALUES
(1, '1', 'Punjabi-Fotua', NULL, 'STS-001', '1200', '59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila', '/products_pic/1505110860.jpg', '0', NULL, 'Green', 'Blue', 'Black', NULL, NULL, NULL, 'White', NULL, NULL, 'S', 'M', 'L', 'XL', NULL, 'Featured', 'New', 'Popular', '2017-09-11 00:21:00', '2017-09-12 11:46:04'),
(2, '2', 'Original-Indian-Saree', NULL, 'OIS-001', '1200', '59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila 59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila', '/products_pic/1505110942.jpg', '4', 'Red', 'Green', 'Blue', 'Black', 'Pink', NULL, NULL, NULL, NULL, NULL, NULL, 'M', 'L', 'XL', NULL, 'Featured', 'New', 'Popular', '2017-09-11 00:22:22', '2017-09-16 10:08:22');

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
  `pending` int(11) DEFAULT '0',
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `myshopusers`
--
ALTER TABLE `myshopusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paymentinfos`
--
ALTER TABLE `paymentinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shopcarts`
--
ALTER TABLE `shopcarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
