-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 14, 2022 at 06:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tours`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `id_tour` smallint(6) NOT NULL,
  `date_booked` date NOT NULL,
  `adult_number` smallint(6) NOT NULL,
  `adult_price` mediumint(9) NOT NULL,
  `children_number` smallint(6) NOT NULL,
  `children_price` mediumint(9) NOT NULL,
  `youngchildren_number` smallint(6) NOT NULL,
  `youngchildren_price` mediumint(9) NOT NULL,
  `total_price` mediumint(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `first_name`, `last_name`, `email`, `phone`, `id_tour`, `date_booked`, `adult_number`, `adult_price`, `children_number`, `children_price`, `youngchildren_number`, `youngchildren_price`, `total_price`, `created_at`, `updated_at`) VALUES
(2, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:05:48', '2022-01-07 05:05:48'),
(3, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:06:07', '2022-01-07 05:06:07'),
(4, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:06:30', '2022-01-07 05:06:30'),
(5, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:07:03', '2022-01-07 05:07:03'),
(7, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:09:30', '2022-01-07 05:09:30'),
(9, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:54:49', '2022-01-07 05:54:49'),
(10, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:55:19', '2022-01-07 05:55:19'),
(11, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:55:26', '2022-01-07 05:55:26'),
(12, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:57:31', '2022-01-07 05:57:31'),
(13, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 7, 2261, 9, 3078, 6366, '2022-01-07 05:58:31', '2022-01-07 05:58:31'),
(14, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 914288989, 5, '2022-01-07', 1, 1795, 4, 1444, 7, 1554, 4793, '2022-01-07 06:01:02', '2022-01-07 06:01:02'),
(15, 'Đặng Van', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 8, '2022-01-07', 1, 1176, 2, 870, 4, 920, 2966, '2022-01-07 06:54:41', '2022-01-07 06:54:41'),
(16, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 9142222, 4, '2022-01-07', 4, 4288, 7, 1183, 5, 1695, 7166, '2022-01-07 11:01:25', '2022-01-07 11:01:25'),
(17, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 7, 1554, 4793, '2022-01-07 17:55:08', '2022-01-07 17:55:08'),
(18, 'Đặng 123', 'Huy', '91239219321@xn--gmqkek-k0a.com', 12323132, 12, '2022-01-08', 1, 1930, 3, 1434, 5, 1450, 4814, '2022-01-07 20:06:33', '2022-01-07 20:06:33'),
(19, 'Đặng 123', 'Huy', '91239219321@xn--gmqkek-k0a.com', 12323132, 12, '2022-01-08', 1, 1930, 3, 1434, 5, 1450, 4814, '2022-01-07 20:10:55', '2022-01-07 20:10:55'),
(20, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 2, 722, 4, 888, 3405, '2022-01-07 20:14:30', '2022-01-07 20:14:30'),
(21, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 7, 1554, 4793, '2022-01-07 20:14:58', '2022-01-07 20:14:58'),
(22, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 3, '2022-01-08', 1, 1059, 4, 1536, 7, 3143, 5738, '2022-01-07 20:16:49', '2022-01-07 20:16:49'),
(23, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 13, '2022-01-08', 1, 1463, 4, 724, 5, 1450, 3637, '2022-01-07 20:27:10', '2022-01-07 20:27:10'),
(24, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 2, 546, 4, 1604, 4063, '2022-01-07 20:33:31', '2022-01-07 20:33:31'),
(25, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 5, 2005, 5010, '2022-01-07 20:38:08', '2022-01-07 20:38:08'),
(26, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 5, 2005, 5010, '2022-01-07 20:38:56', '2022-01-07 20:38:56'),
(27, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 5, 2005, 5010, '2022-01-07 20:39:41', '2022-01-07 20:39:41'),
(28, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 5, 2005, 5010, '2022-01-07 20:40:40', '2022-01-07 20:40:40'),
(29, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 5, 2005, 5010, '2022-01-07 20:44:20', '2022-01-07 20:44:20'),
(30, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:44:38', '2022-01-07 20:44:38'),
(31, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:44:48', '2022-01-07 20:44:48'),
(32, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:45:50', '2022-01-07 20:45:50'),
(33, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:48:37', '2022-01-07 20:48:37'),
(34, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:48:43', '2022-01-07 20:48:43'),
(35, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:53:59', '2022-01-07 20:53:59'),
(36, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 2, 444, 3683, '2022-01-07 20:54:37', '2022-01-07 20:54:37'),
(37, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 3, 666, 3905, '2022-01-07 20:55:57', '2022-01-07 20:55:57'),
(38, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 4, 1444, 3, 666, 3905, '2022-01-07 20:56:50', '2022-01-07 20:56:50'),
(39, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:05:03', '2022-01-07 21:05:03'),
(40, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:05:20', '2022-01-07 21:05:20'),
(41, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:09:04', '2022-01-07 21:09:04'),
(42, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:11:11', '2022-01-07 21:11:11'),
(43, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:14:46', '2022-01-07 21:14:46'),
(44, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:15:22', '2022-01-07 21:15:22'),
(45, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:15:31', '2022-01-07 21:15:31'),
(46, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:17:19', '2022-01-07 21:17:19'),
(47, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:17:41', '2022-01-07 21:17:41'),
(48, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:18:53', '2022-01-07 21:18:53'),
(49, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:23:12', '2022-01-07 21:23:12'),
(50, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:23:18', '2022-01-07 21:23:18'),
(51, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:23:49', '2022-01-07 21:23:49'),
(52, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:24:30', '2022-01-07 21:24:30'),
(53, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:24:50', '2022-01-07 21:24:50'),
(54, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 2, 734, 4, 1632, 4310, '2022-01-07 21:27:19', '2022-01-07 21:27:19'),
(55, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 4, 1468, 5, 2040, 5452, '2022-01-08 05:13:17', '2022-01-08 05:13:17'),
(56, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 4, 1468, 5, 2040, 5452, '2022-01-08 05:14:27', '2022-01-08 05:14:27'),
(57, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 4, 1468, 5, 2040, 5452, '2022-01-08 05:15:13', '2022-01-08 05:15:13'),
(58, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 4, 1468, 5, 2040, 5452, '2022-01-08 05:16:53', '2022-01-08 05:16:53'),
(59, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-08', 1, 1944, 4, 1468, 5, 2040, 5452, '2022-01-08 05:17:30', '2022-01-08 05:17:30'),
(60, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 3, 1203, 4208, '2022-01-08 05:38:22', '2022-01-08 05:38:22'),
(61, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-08', 1, 1913, 4, 1092, 5, 2005, 5010, '2022-01-08 06:07:47', '2022-01-08 06:07:47'),
(62, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-08', 1, 1795, 6, 2166, 4, 888, 4849, '2022-01-08 06:09:46', '2022-01-08 06:09:46'),
(63, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 6, '2022-01-12', 1, 1913, 44, 12012, 2, 802, 14727, '2022-01-11 23:08:46', '2022-01-11 23:08:46'),
(64, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-12', 1, 1795, 4, 1444, 5, 1110, 4349, '2022-01-11 23:10:16', '2022-01-11 23:10:16'),
(65, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-14', 34, 66096, 4, 1468, 5, 2040, 69604, '2022-01-14 05:42:09', '2022-01-14 05:42:09'),
(66, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-14', 1, 1944, 4, 1468, 3, 1224, 4636, '2022-01-14 06:17:40', '2022-01-14 06:17:40'),
(67, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-14', 1, 1944, 4, 1468, 3, 1224, 4636, '2022-01-14 06:18:01', '2022-01-14 06:18:01'),
(68, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-14', 1, 1944, 4, 1468, 3, 1224, 4636, '2022-01-14 06:18:17', '2022-01-14 06:18:17'),
(69, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-14', 1, 1944, 4, 1468, 3, 1224, 4636, '2022-01-14 06:19:02', '2022-01-14 06:19:02'),
(70, 'Test', 'Local Tour', '91239219321@xn--gmqkek-k0a.com', 880914288989, 5, '2022-01-14', 1, 1795, 2, 722, 3, 666, 3183, '2022-01-14 06:21:21', '2022-01-14 06:21:21'),
(71, 'Test', 'vnPay', '91239219321@xn--gmqkek-k0a.com', 880914288989, 14, '2022-01-14', 1, 1944, 4, 1468, 5, 2040, 5452, '2022-01-14 06:23:02', '2022-01-14 06:23:02');

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
(1, '2014_10_12_000000_create_user_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_12_18_032036_create_tours_table', 1),
(4, '2021_12_18_032201_create_type_tours_table', 1),
(5, '2022_01_05_034942_create_bill_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_days` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `adult_price` int(11) NOT NULL,
  `children_price` int(11) NOT NULL,
  `youngchildren_price` int(11) NOT NULL,
  `long_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `image1`, `image2`, `name`, `short_description`, `date_start`, `number_days`, `seats`, `adult_price`, `children_price`, `youngchildren_price`, `long_description`, `id_type`, `created_at`, `updated_at`) VALUES
(1, '/sources/assets/img/2/hue1.jfif', '/sources/assets/img/2/hue6.jpg', 'The old trip', 'Explore the old capital', '2014-02-16', 9, 14, 1909, 206, 205, 'Ducimus et expedita libero nihil ex ipsa. Aut dolor et recusandae quis repellendus cumque officiis. Repellendus iste officia architecto dolor iusto accusantium.', 2, NULL, '2022-01-12 11:19:33'),
(2, '/sources/assets/img/2/hue12.jpg', '/sources/assets/img/2/hue7.jfif', 'Temples', 'Observe old architectures', '2012-11-27', 9, 11, 1972, 406, 439, 'Harum mollitia vel labore. Eligendi et eius alias adipisci aperiam non. Perspiciatis dolore architecto aut est aspernatur.', 2, NULL, NULL),
(3, '/sources/assets/img/2/hue13.jpg', '/sources/assets/img/2/hue17.jpg', 'The nice roads', 'Enjoy beautiful roads', '2006-12-14', 10, 12, 1059, 384, 449, 'Vero velit nam et dolorem est. Eum laudantium quia blanditiis consequatur qui consequuntur. Modi cupiditate reprehenderit explicabo unde accusamus labore hic. Odio ullam aut error.', 2, NULL, NULL),
(4, '/sources/assets/img/2/hue5.jfif', '/sources/assets/img/2/hue19.jpg', 'Abandon places', 'Don\'t be scared', '1973-05-30', 13, 15, 1072, 169, 339, 'Qui repellat et repellat eaque in dolorum facilis. Autem ab nulla et ea et. Recusandae dolores amet minima dolores praesentium excepturi consequatur. Eos dolor enim magnam qui porro officia fugit.', 2, NULL, NULL),
(5, '/sources/assets/img/1/hoian4.jfif', '/sources/assets/img/1/hoian1.jfif', 'The old town', 'Explore the old city', '1990-06-05', 10, 15, 1795, 361, 222, 'Sequi molestias ducimus iste sequi. Ipsam quos illum asperiores quisquam nostrum. Ipsa id doloribus qui eum quo nesciunt.', 1, NULL, NULL),
(6, '/sources/assets/img/1/hoian17.jpg', '/sources/assets/img/1/hoian14.jpg', 'My Son', 'Explore ruined temples', '2017-08-02', 7, 11, 1913, 273, 401, 'Delectus est ut distinctio voluptatem. Eius pariatur blanditiis qui accusamus.', 1, NULL, NULL),
(7, '/sources/assets/img/1/hoian11.jpg', '/sources/assets/img/1/hoian13.jpg', 'Beaches', 'Explore beautiful beaches', '1998-08-24', 13, 13, 1014, 439, 386, 'Est nemo et excepturi quos dolorem omnis. Iusto ducimus corporis quos similique. Iusto ea non ex.', 1, NULL, NULL),
(8, '/sources/assets/img/1/hoian19.jpg', '/sources/assets/img/1/hoian20.jpg', 'Coconut village', 'Explore the river region', '2010-03-25', 9, 10, 1176, 435, 230, 'Consectetur vel recusandae ea alias ad asperiores. Dolore ratione velit repellat debitis quia. Praesentium non rerum repellat et adipisci dolores. Itaque a veritatis aperiam aut similique.', 1, NULL, NULL),
(9, '/sources/assets/img/3/danang1.jfif', '/sources/assets/img/3/danang1.1.jfif', 'Ba Na hills', 'The way to heaven', '1995-05-15', 11, 11, 1940, 455, 462, 'Mollitia ut adipisci assumenda quidem consequatur numquam. Enim quo rerum nisi ad aliquam reprehenderit. Id quibusdam aperiam aut ratione sint maiores voluptas. Facilis qui veritatis dolor iste sit.', 3, NULL, NULL),
(10, '/sources/assets/img/3/danang2.jfif', '/sources/assets/img/3/danang2.1.jpg', 'The city', 'Explore city of bridges', '1992-07-16', 13, 10, 1370, 208, 338, 'Accusantium excepturi asperiores repellat autem maiores. Odio aliquam voluptatum delectus quia explicabo omnis. In temporibus quisquam eos quasi pariatur magnam iure. Iure nesciunt accusantium et.', 3, NULL, NULL),
(11, '/sources/assets/img/3/danang13.jpg', '/sources/assets/img/3/danang13.1.jpg', 'Gallery', 'Immerse yourself in art', '1980-10-03', 13, 14, 1041, 486, 453, 'Est excepturi enim quam aspernatur. Dolor voluptatem sit voluptas velit dolores consequatur. Nemo voluptatem fuga quod eius et non. Debitis possimus dolores voluptates sit quod voluptatem. Dolorem nihil consequatur esse sint deserunt.', 3, NULL, NULL),
(12, '/sources/assets/img/3/danang14.1.jfif', '/sources/assets/img/3/danang14.jfif', 'Ngu Hanh Son', 'Explore mystery place', '1986-06-05', 10, 11, 1930, 478, 290, 'Est nihil est quasi. Et excepturi accusamus doloremque a. Repudiandae illo ratione dicta fuga quo neque nihil aspernatur.', 3, NULL, NULL),
(13, '/sources/assets/img/4/combo1.jfif', '/sources/assets/img/4/combo1.1.jpg', 'Combo 1', 'Hue - Da Nang', '1989-03-21', 12, 10, 1463, 181, 290, 'Sit id eum repellendus doloremque amet. Et id voluptates omnis. Quod consequatur pariatur molestias. Ea incidunt quia nihil laboriosam qui. Et quidem ut non aut non rem maxime aperiam.', 4, NULL, NULL),
(14, '/sources/assets/img/4/combo2.jpg', '/sources/assets/img/4/combo2.1.jfif', 'Combo 2', 'Da Nang - Hoi An', '1985-02-22', 12, 14, 1944, 367, 408, 'Voluptatem nostrum non voluptates debitis sunt vitae. Repellendus est laboriosam aliquid dolorum. Est aut hic dolorem in. Praesentium quo molestiae deleniti voluptates maxime.', 4, NULL, NULL),
(15, '/sources/assets/img/4/combo3.jpg', '/sources/assets/img/4/combo3.1.jpg', 'Combo 3', 'Hue - Da Nang - Hoi An', '2012-08-05', 13, 10, 1591, 438, 388, 'Vel sunt ea ut facere deserunt voluptatum fuga. Dolor magnam rem ea illo error. Nihil et commodi assumenda ducimus dolores qui tempore.', 4, NULL, NULL),
(28, '/sources/assets/img/9/cheerful.jpg', '/sources/assets/img/9/imsleeping.gif', 'Test tour 96', 'asd', '2022-02-04', 11, 1, 111, 11, 1, '1111', 9, '2022-01-12 08:21:45', '2022-01-12 08:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `type_tours`
--

CREATE TABLE `type_tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_tours`
--

INSERT INTO `type_tours` (`id`, `image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '/sources/assets/img/1/hoian1.jfif', 'Hoi An', 'Ancient city with lot of old places', NULL, NULL),
(2, '/sources/assets/img/2/hue1.jfif', 'Hue', 'One of the most cultured city in middle of Vietnam', NULL, NULL),
(3, '/sources/assets/img/3/danang2.jfif', 'Da Nang', 'tour to Da Nang', NULL, NULL),
(4, '/sources/assets/img/4/combo1.jfif', 'Combo', 'Enjoy the trip through more than 2 cities', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', '$2y$10$DxeoMC3Bc.hm4Jp.ddS30eAZj4wvl4r7CMoSmpv9vBFU9naNtBCc6', '2022-01-07 04:01:09', '2022-01-07 04:01:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tours_name_unique` (`name`);

--
-- Indexes for table `type_tours`
--
ALTER TABLE `type_tours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_tours_name_unique` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `type_tours`
--
ALTER TABLE `type_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
