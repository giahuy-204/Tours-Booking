-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 05:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
(1, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 3, '2022-01-07', 1, 1059, 3, 1152, 7, 3143, 5354, '2022-01-07 04:18:26', '2022-01-07 04:18:26'),
(2, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:05:48', '2022-01-07 05:05:48'),
(3, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:06:07', '2022-01-07 05:06:07'),
(4, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:06:30', '2022-01-07 05:06:30'),
(5, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:07:03', '2022-01-07 05:07:03'),
(6, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:07:30', '2022-01-07 05:07:30'),
(7, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 2, 646, 4, 1368, 3041, '2022-01-07 05:09:30', '2022-01-07 05:09:30'),
(8, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 5, '2022-01-07', 1, 1795, 2, 722, 4, 888, 3405, '2022-01-07 05:41:57', '2022-01-07 05:41:57'),
(9, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:54:49', '2022-01-07 05:54:49'),
(10, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:55:19', '2022-01-07 05:55:19'),
(11, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:55:26', '2022-01-07 05:55:26'),
(12, 'Đặng', 'Huy', '91239219321@xn--gmqkek-k0a.com', 880914288989, 1, '2022-01-07', 1, 1909, 4, 824, 7, 1435, 4168, '2022-01-07 05:57:31', '2022-01-07 05:57:31'),
(13, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 19, '2022-01-07', 1, 1027, 7, 2261, 9, 3078, 6366, '2022-01-07 05:58:31', '2022-01-07 05:58:31'),
(14, 'Đặng', 'Huy', 'giahuy.dng@gmail.com', 914288989, 5, '2022-01-07', 1, 1795, 4, 1444, 7, 1554, 4793, '2022-01-07 06:01:02', '2022-01-07 06:01:02'),
(15, 'Đặng Van', 'Huy', 'giahuy.dng@gmail.com', 880914288989, 8, '2022-01-07', 1, 1176, 2, 870, 4, 920, 2966, '2022-01-07 06:54:41', '2022-01-07 06:54:41');

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
(1, '/sources/assets/img/hue/hue1.jfif', '/sources/assets/img/hue/hue6.jpg', 'The old trip', 'Explore the old capital', '2014-02-16', 9, 14, 1909, 206, 205, 'Ducimus et expedita libero nihil ex ipsa. Aut dolor et recusandae quis repellendus cumque officiis. Repellendus iste officia architecto dolor iusto accusantium.', 2, NULL, NULL),
(2, '/sources/assets/img/hue/hue12.jpg', '/sources/assets/img/hue/hue7.jfif', 'Temples', 'Observe old architectures', '2012-11-27', 9, 11, 1972, 406, 439, 'Harum mollitia vel labore. Eligendi et eius alias adipisci aperiam non. Perspiciatis dolore architecto aut est aspernatur.', 2, NULL, NULL),
(3, '/sources/assets/img/hue/hue13.jpg', '/sources/assets/img/hue/hue17.jpg', 'The nice roads', 'Enjoy beautiful roads', '2006-12-14', 10, 12, 1059, 384, 449, 'Vero velit nam et dolorem est. Eum laudantium quia blanditiis consequatur qui consequuntur. Modi cupiditate reprehenderit explicabo unde accusamus labore hic. Odio ullam aut error.', 2, NULL, NULL),
(4, '/sources/assets/img/hue/hue5.jfif', '/sources/assets/img/hue/hue19.jpg', 'Abandon places', 'Don\'t be scared', '1973-05-30', 13, 15, 1072, 169, 339, 'Qui repellat et repellat eaque in dolorum facilis. Autem ab nulla et ea et. Recusandae dolores amet minima dolores praesentium excepturi consequatur. Eos dolor enim magnam qui porro officia fugit.', 2, NULL, NULL),
(5, '/sources/assets/img/hoian/hoian4.jfif', '/sources/assets/img/hoian/hoian1.jfif', 'The old town', 'Explore the old city', '1990-06-05', 10, 15, 1795, 361, 222, 'Sequi molestias ducimus iste sequi. Ipsam quos illum asperiores quisquam nostrum. Ipsa id doloribus qui eum quo nesciunt.', 1, NULL, NULL),
(6, '/sources/assets/img/hoian/hoian17.jpg', '/sources/assets/img/hoian/hoian14.jpg', 'My Son', 'Explore ruined temples', '2017-08-02', 7, 11, 1913, 273, 401, 'Delectus est ut distinctio voluptatem. Eius pariatur blanditiis qui accusamus.', 1, NULL, NULL),
(7, '/sources/assets/img/hoian/hoian11.jpg', '/sources/assets/img/hoian/hoian13.jpg', 'Beaches', 'Explore beautiful beaches', '1998-08-24', 13, 13, 1014, 439, 386, 'Est nemo et excepturi quos dolorem omnis. Iusto ducimus corporis quos similique. Iusto ea non ex.', 1, NULL, NULL),
(8, '/sources/assets/img/hoian/hoian19.jpg', '/sources/assets/img/hoian/hoian20.jpg', 'Coconut village', 'Explore the river region', '2010-03-25', 9, 10, 1176, 435, 230, 'Consectetur vel recusandae ea alias ad asperiores. Dolore ratione velit repellat debitis quia. Praesentium non rerum repellat et adipisci dolores. Itaque a veritatis aperiam aut similique.', 1, NULL, NULL),
(9, '/sources/assets/img/danang/danang1.jfif', '/sources/assets/img/danang/danang1.1.jfif', 'Ba Na hills', 'The way to heaven', '1995-05-15', 11, 11, 1940, 455, 462, 'Mollitia ut adipisci assumenda quidem consequatur numquam. Enim quo rerum nisi ad aliquam reprehenderit. Id quibusdam aperiam aut ratione sint maiores voluptas. Facilis qui veritatis dolor iste sit.', 3, NULL, NULL),
(10, '/sources/assets/img/danang/danang2.jfif', '/sources/assets/img/danang/danang2.1.jpg', 'The city', 'Explore city of bridges', '1992-07-16', 13, 10, 1370, 208, 338, 'Accusantium excepturi asperiores repellat autem maiores. Odio aliquam voluptatum delectus quia explicabo omnis. In temporibus quisquam eos quasi pariatur magnam iure. Iure nesciunt accusantium et.', 3, NULL, NULL),
(11, '/sources/assets/img/danang/danang13.jpg', '/sources/assets/img/danang/danang13.1.jpg', 'Gallery', 'Immerse yourself in art', '1980-10-03', 13, 14, 1041, 486, 453, 'Est excepturi enim quam aspernatur. Dolor voluptatem sit voluptas velit dolores consequatur. Nemo voluptatem fuga quod eius et non. Debitis possimus dolores voluptates sit quod voluptatem. Dolorem nihil consequatur esse sint deserunt.', 3, NULL, NULL),
(12, '/sources/assets/img/danang/danang14.1.jfif', '/sources/assets/img/danang/danang14.jfif', 'Ngu Hanh Son', 'Explore mystery place', '1986-06-05', 10, 11, 1930, 478, 290, 'Est nihil est quasi. Et excepturi accusamus doloremque a. Repudiandae illo ratione dicta fuga quo neque nihil aspernatur.', 3, NULL, NULL),
(13, '/sources/assets/img/combo/combo1.jfif', '/sources/assets/img/combo/combo1.1.jpg', 'Combo 1', 'Hue - Da Nang', '1989-03-21', 12, 10, 1463, 181, 290, 'Sit id eum repellendus doloremque amet. Et id voluptates omnis. Quod consequatur pariatur molestias. Ea incidunt quia nihil laboriosam qui. Et quidem ut non aut non rem maxime aperiam.', 4, NULL, NULL),
(14, '/sources/assets/img/combo/combo2.jpg', '/sources/assets/img/combo/combo2.1.jfif', 'Combo 2', 'Da Nang - Hoi An', '1985-02-22', 12, 14, 1944, 367, 408, 'Voluptatem nostrum non voluptates debitis sunt vitae. Repellendus est laboriosam aliquid dolorum. Est aut hic dolorem in. Praesentium quo molestiae deleniti voluptates maxime.', 4, NULL, NULL),
(15, '/sources/assets/img/combo/combo3.jpg', '/sources/assets/img/combo/combo3.1.jpg', 'Combo 3', 'Hue - Da Nang - Hoi An', '2012-08-05', 13, 10, 1591, 438, 388, 'Vel sunt ea ut facere deserunt voluptatum fuga. Dolor magnam rem ea illo error. Nihil et commodi assumenda ducimus dolores qui tempore.', 4, NULL, NULL);

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
(1, '/sources/assets/img/hoian/hoian1.jfif', 'Hoi An', 'tour to Hoi An', NULL, NULL),
(2, '/sources/assets/img/hue/hue1.jfif', 'Hue', 'tour to Hue', NULL, NULL),
(3, '/sources/assets/img/danang/danang2.jfif', 'Da Nang', 'tour to Da Nang', NULL, NULL),
(4, '/sources/assets/img/combo/combo1.jfif', 'Combo', 'combo tour', NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `type_tours`
--
ALTER TABLE `type_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
