-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 09:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_02_12_092947_create_users_table', 1),
(3, '2023_02_12_162618_create_products_table', 2),
(4, '2023_02_23_183109_create_cart_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`) VALUES
(1, 5, 1, 'pending', 'COD', 'pending', 'lko'),
(2, 6, 1, 'pending', 'COD', 'pending', 'lko'),
(3, 5, 1, 'pending', 'COD', 'pending', 'aaa'),
(4, 5, 1, 'pending', 'COD', 'pending', 'aaa'),
(5, 5, 1, 'pending', 'COD', 'pending', 'asdad'),
(6, 5, 1, 'pending', 'COD', 'pending', 'asdad'),
(7, 5, 1, 'pending', 'COD', 'pending', 'sada'),
(8, 5, 1, 'pending', 'COD', 'pending', 'sada'),
(9, 5, 1, 'pending', 'COD', 'pending', 'sada'),
(10, 5, 1, 'pending', 'COD', 'pending', 'address'),
(11, 5, 1, 'pending', 'COD', 'pending', 'address'),
(12, 5, 1, 'pending', 'COD', 'pending', 'dfsd'),
(13, 5, 1, 'pending', 'COD', 'pending', 'sdadsa'),
(14, 5, 1, 'pending', 'COD', 'pending', 'sdadsa'),
(15, 5, 1, 'pending', 'COD', 'pending', 'szfdsaf'),
(16, 6, 1, 'pending', 'COD', 'pending', 'lko'),
(17, 6, 1, 'pending', 'COD', 'pending', 'lko'),
(18, 6, 1, 'pending', 'COD', 'pending', 'lko'),
(19, 5, 1, 'pending', 'COD', 'pending', 'df'),
(20, 5, 1, 'pending', 'COD', 'pending', 'df'),
(21, 6, 1, 'pending', 'COD', 'pending', 'dfsdf'),
(22, 6, 1, 'pending', 'COD', 'pending', 'dfsdf'),
(23, 6, 1, 'pending', 'COD', 'pending', 'dxsada'),
(24, 5, 1, 'pending', 'COD', 'pending', 'dxsada'),
(25, 21, 1, 'pending', 'COD', 'pending', 'fggdfgdd'),
(26, 21, 1, 'pending', 'COD', 'pending', 'fggdfgdd'),
(27, 19, 1, 'pending', 'Cash On Delivery', 'pending', 'gggg'),
(28, 19, 1, 'pending', 'Cash On Delivery', 'pending', 'gggg'),
(29, 18, 1, 'pending', 'COD', 'pending', 'lucknow'),
(30, 19, 1, 'pending', 'COD', 'pending', 'lucknow'),
(31, 19, 1, 'pending', 'COD', 'pending', 'gdfgdfg'),
(32, 27, 1, 'pending', 'COD', 'pending', 'gdfgdfg'),
(33, 19, 1, 'pending', 'COD', 'pending', 'gdfgdfg'),
(34, 44, 1, 'pending', 'COD', 'pending', 'gdfgdfg'),
(35, 18, 1, 'pending', 'COD', 'pending', 'gdfg'),
(36, 18, 1, 'pending', 'COD', 'pending', 'gdfg'),
(37, 54, 1, 'pending', 'COD', 'pending', 'gdfg'),
(38, 64, 1, 'pending', 'COD', 'pending', 'ffdf'),
(39, 64, 1, 'pending', 'COD', 'pending', 'fdgfdgd'),
(40, 45, 1, 'pending', 'COD', 'pending', 'fdgfdgd'),
(41, 48, 1, 'pending', 'COD', 'pending', 'fdgfdgd'),
(42, 63, 1, 'pending', 'COD', 'pending', 'vcvx'),
(43, 60, 1, 'pending', 'COD', 'pending', 'ss-00'),
(44, 48, 1, 'pending', 'COD', 'pending', 'cc-1123'),
(45, 60, 1, 'pending', 'COD', 'pending', 'e-1123');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `gallary`, `created_at`, `updated_at`, `type`) VALUES
(48, 'PlayStation 5', '40000', 'Gaming', 'Support  4k  gaming', 'nik-ads33nL7V4k-unsplash.jpg', '2023-03-08 12:49:34', '2023-03-08 12:49:34', 'women'),
(49, 'Nike  Shoes', '2000', 'Gloosery', 'nike shoes', 'usama-akram-kP6knT7tjn4-unsplash.jpg', '2023-03-14 11:22:29', '2023-03-14 11:22:29', 'men'),
(50, 'Blzeer', '2000', 'wdrobe', 'fully stylish', 'hermes-rivera-YxbwyTb5ijs-unsplash.jpg', '2023-03-14 11:23:35', '2023-03-14 11:23:35', 'men'),
(51, 'watch', '1000', 'wadrobe', 'stylish', 'bruno-van-der-kraan-VRERJ5Mjp4c-unsplash.jpg', '2023-03-14 11:24:58', '2023-03-14 11:24:58', 'men'),
(52, 'jacket', '1222', 'clothes', 'fully cotton', 'michal-binkiewicz-0vSSu-myZHw-unsplash.jpg', '2023-03-14 11:52:43', '2023-03-14 11:52:43', 'women'),
(53, 'wo', '1222', 'clothes', 'fully cotton', 'junko-nakase-Q-72wa9-7Dg-unsplash.jpg', '2023-03-14 11:53:17', '2023-03-14 11:53:17', 'women'),
(54, 'blanket', '1222', 'shoes', 'just', 'laura-chouette-KjHCeJgnps8-unsplash.jpg', '2023-03-14 11:54:07', '2023-03-14 11:54:07', 'women'),
(55, 'jacket', '1222', 'clothes', 'fully cotton', 'michal-binkiewicz-0vSSu-myZHw-unsplash.jpg', '2023-03-14 11:52:43', '2023-03-14 11:52:43', 'women'),
(56, 'wo', '1222', 'clothes', 'fully cotton', 'junko-nakase-Q-72wa9-7Dg-unsplash.jpg', '2023-03-14 11:53:17', '2023-03-14 11:53:17', 'women'),
(57, 'blanket', '1222', 'shoes', 'just', 'laura-chouette-KjHCeJgnps8-unsplash.jpg', '2023-03-14 11:54:07', '2023-03-14 11:54:07', 'women'),
(58, 'jacket', '1222', 'clothes', 'fully cotton', 'michal-binkiewicz-0vSSu-myZHw-unsplash.jpg', '2023-03-14 11:52:43', '2023-03-14 11:52:43', 'women'),
(59, 'wo', '1222', 'clothes', 'fully cotton', 'junko-nakase-Q-72wa9-7Dg-unsplash.jpg', '2023-03-14 11:53:17', '2023-03-14 11:53:17', 'women'),
(60, 'blanket', '1222', 'shoes', 'just', 'laura-chouette-KjHCeJgnps8-unsplash.jpg', '2023-03-14 11:54:07', '2023-03-14 11:54:07', 'women'),
(61, 'PlayStation 5', '40000', 'Gaming', 'Support  4k  gaming', 'nik-ads33nL7V4k-unsplash.jpg', '2023-03-08 12:49:34', '2023-03-08 12:49:34', 'women'),
(62, 'Nike  Shoes', '2000', 'Gloosery', 'nike shoes', 'usama-akram-kP6knT7tjn4-unsplash.jpg', '2023-03-14 11:22:29', '2023-03-14 11:22:29', 'men'),
(63, 'Blzeer', '2000', 'wdrobe', 'fully stylish', 'hermes-rivera-YxbwyTb5ijs-unsplash.jpg', '2023-03-14 11:23:35', '2023-03-14 11:23:35', 'men'),
(64, 'watch', '1000', 'wadrobe', 'stylish', 'bruno-van-der-kraan-VRERJ5Mjp4c-unsplash.jpg', '2023-03-14 11:24:58', '2023-03-14 11:24:58', 'men');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `type`) VALUES
(1, 'akash', 'akash12@gmail.com', '$2y$10$LS2aNLUy/N8l8eUxEUl9YOOnD/09qvIAfFk927vG8oBNn19L18aD6', NULL, NULL, 'user'),
(3, 'komal', 'komal@gmail.com', '$2y$10$CuXXCdQlZ9iAPFH1hbaRgOE.Ak3ReOgmXFcFz8s6ckJqUetoNrh/e', '2023-03-01 12:23:50', '2023-03-01 12:23:50', 'user'),
(4, 'rakhi', 'rakhi@gmail.com', '$2y$10$dKTFUcUvSeqOsfz5ulZBXO9Ya1DHsPbJLBQfgwkzVobB1ZtjkR1ZO', NULL, NULL, 'user'),
(6, 'Akash Verma', 'akash112@gmail.com', '$2y$10$LlYVFDnggFeip1uHYRtAVuhPs9ZE7imJI02RIMnNhrrwKvVMbNGTa', NULL, NULL, 'user'),
(7, 'admin', 'admin@gmail.com', '$2y$10$LS2aNLUy/N8l8eUxEUl9YOOnD/09qvIAfFk927vG8oBNn19L18aD6', NULL, NULL, 'admin'),
(9, 'Akash Verma', 'akash1@gmail.com', '$2y$10$RVzCEjhbyS2ejoaTKk7I6OK40xCryQ35.sVhnDRiAm91Q0Kh0X/VC', NULL, NULL, NULL),
(10, 'komal', 'ko@gmail.com', '$2y$10$Or6xHK41fRa4qkRtshXfUOosmMd9c7LJvjgUwgHbQoI15AluKz3Bi', NULL, NULL, NULL),
(11, 'komal nahata', 'aaakash12@gmail.com', '$2y$10$dTqsEJQ7ED2yVqcUZYll0eSUWabjsnuiG7EjkFPNps7QkJO7afnsK', NULL, NULL, NULL),
(12, 'Akash Verma', 'akash@gmail.com', '$2y$10$4UOQdR.PJU5vGK4z1GSKAe0W8w9S6Xk/LiAeznVSkc9te8lT4tFrW', NULL, NULL, NULL),
(13, 'Akash Verma', 'akash312@gmail.com', '$2y$10$QCBoIHk7RzVv77S.zMD9IOgPSxzQUM/wdca.lURlls71Bk59kEVJ.', NULL, NULL, NULL),
(15, 'komal', 'akash612@gmail.com', '$2y$10$.nQaLvbQ6ao29bYJFPFrgOQVu98sfccvLWiyWTL/ViGCYmE0X2jGm', NULL, NULL, NULL),
(16, 'Akash Verma', 'akash22@gmail.com', '$2y$10$cWCq4lN/D9TUOMWZUDpn3uBORVQ7Yu3lEH9nRGAD5y6pnww4bVkby', NULL, NULL, NULL),
(17, 'Akash Verma', 'akasddh12@gmail.com', '$2y$10$acuaXVRV/9D7XWF5H7ecVepppwGL/rAtTU91KhjidfGX3zOdO7Tka', NULL, NULL, NULL),
(18, 'Akash Verma', 'akash1n2@gmail.com', '$2y$10$wqqy.lgwq.sjGmMhX6.nK./LBz7vMKV7Oy.gu42rnUeqGx9igr3TG', NULL, NULL, NULL),
(19, 'Akash Verma', 'akashv12@gmail.com', '$2y$10$JqK9G5cvro9bhtG4Mson6uddFybP8OEL5DINXkujRrm5SPLSagbv.', NULL, NULL, NULL),
(20, 'Akash Verma', 'akash122@gmail.com', '$2y$10$3qvfNXkHAYsbcfiv.guoyuwCqUSsD1Prp2T0ykAsU5EpGkUYuP10K', NULL, NULL, NULL),
(22, 'kavi', 'kavi@gmail.com', '$2y$10$yB5eH.JN6RIJ0RQd5aWDt.rzxox4a2lUghXUhG4r8vRVhTaTtWZF2', NULL, NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
