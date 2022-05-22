-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 12:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` varchar(255) CHARACTER SET latin1 NOT NULL,
  `role` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `pass`, `role`) VALUES
(1, 'sara', 'saraelwakeel897@gmail.com', 1224420303, '123456789', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(11) NOT NULL,
  `feedback` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `feedback`) VALUES
(14, 'mero', 'saraelwakeel897@gmail.com', 1224420303, 'goooooooooooooooood'),
(15, 'sara', 'saraelwakeel897@gmail.com', 1224420303, 'baaaaaaaaaaad'),
(16, 'Yara', 'Yara@gmail.com', 1225520303, 'excelllllllllllllllllllllent'),
(17, 'Yara', 'Yara@gmail.com', 1225520303, 'excelllllllllllllllllllllent'),
(21, 'Vena', 'Vena@gmail.com', 123456789, 'GOOOOOOOOOOOOOOOD WORK'),
(22, 'Fadwa', 'Fadwa@gmail.com', 2147483647, 'BRAVOOOOOOOOOOOO'),
(23, 'Mohamed', 'mohamed@gmail.com', 12456789, 'VERY GOOOD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `model` varchar(150) NOT NULL,
  `id_admin` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `desc` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model`, `id_admin`, `title`, `price`, `desc`, `qty`, `images`, `created_at`) VALUES
(24, 'Boxes', 0, 'Memory Box', 125, 'It is a red box', 100, '10.jpg', '2021-12-31 13:17:29'),
(25, 'Mandella', 0, 'owl Mando', 120, 'it is a type of mandela', 80, '4.jpg', '2021-12-31 15:28:48'),
(28, 'Boxes', 0, 'Lovely Box', 130, 'it is made by sara magdy', 320, '9.jpg', '2021-12-31 15:31:32'),
(30, 'Drawing', 0, 'Tree Drawing', 120, 'it is made by salasbil', 100, 'IMG-20211110-WA0035.jpg', '2021-12-31 22:43:43'),
(36, 'Boxes', 0, 'Yellow Box', 150, 'It is made by sara magdy', 50, 'IMG_20210819_014950_121.jpg', '2022-01-04 09:55:23'),
(37, 'Drawing', 0, 'Girl Animation', 140, 'it is made by billo', 40, 'PicsArt_12-16-02.48.11.jpg', '2022-01-04 09:56:06'),
(38, 'Mandella', 0, 'Black Mandela', 200, 'it is made by sara ali', 20, 'PicsArt_12-16-02.54.42.png', '2022-01-04 09:56:49'),
(39, 'Boxes', 0, 'Chess Box', 200, 'it is made by sara magdy', 120, 'IMG-20201209-WA0009_1.jpg', '2022-01-04 09:57:28'),
(40, 'Drawing', 0, 'Cup Animation', 130, 'it is made by billo', 30, 'PicsArt_12-16-02.51.30.jpg', '2022-01-04 09:58:02'),
(41, 'Drawing', 0, 'Spider drawing', 400, 'it is made by billo', 120, 'PicsArt_12-16-02.51.58.jpg', '2022-01-04 09:58:46'),
(42, 'Drawing', 0, 'BillOo Robot', 200, 'it is made by billo', 20, 'PicsArt_12-16-02.43.36.jpg', '2022-01-04 09:59:45'),
(43, 'Cards', 0, 'Bithday Card', 250, 'it is made by sara magdy', 80, 'PicsArt_12-16-02.55.33.jpg', '2022-01-04 10:00:37'),
(44, 'Cards', 0, 'Lovely Card', 150, 'it is made by sara magdy', 20, 'IMG_20211127_182157_451.jpg', '2022-01-04 10:01:19'),
(45, 'Cards', 0, 'Owl Card', 100, 'it is amazing idea', 120, 'l.jpg', '2022-01-04 10:01:52'),
(46, 'Mandella', 0, 'Blue Mandela', 120, 'it is made by sara ali', 150, 'PicsArt_12-16-02.56.22.jpg', '2022-01-04 10:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `license_date` varchar(255) DEFAULT NULL,
  `active_status` varchar(255) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT 0,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `online` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `create_date`, `license_date`, `active_status`, `status`, `role`, `online`) VALUES
(40, 'sara', 'saraelwakeel897@gmail.com', 1225520303, '$2y$10$dgmeFBh/IFsrRTvssya6huswvYYD/0rv3hudCWROsCrnwb0jhUxcq', '2021-12-26 02:59:37', '2022-12-26', '459924', 0, 'admin', 1),
(43, 'Sara ', 'smelwakeel333@gmail.com', 1227348209, '$2y$10$hlXrRAVfLdcNgPZHsdYfsu5PNM7jIHheyhvjiHx3g.yYE.DtqzdQy', '2021-12-26 11:16:15', '2022-12-26', '948597', 0, 'user', 1),
(45, 'sero', 'bdwmj2020@gmail.com', 1225520303, '$2y$10$5aQPtp2IbdAbtAOgxZR4IewS6ldBpXNieqZsBn7jFPH0rcdeu9Pv2', '2021-12-28 01:07:40', '2022-12-28', '424615', 0, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `desc` varchar(255) CHARACTER SET latin1 NOT NULL,
  `model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `desc`, `model`, `price`, `image`) VALUES
(1, 'Boxes', 'It describes how to make memory boxes', 'Memory Boxes', 120, 'box.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
