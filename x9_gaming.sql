-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 02:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `x9_gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `delay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `icon`, `number`, `label`, `delay`) VALUES
(1, ' fa-clock-o ', 3200, 'Hours of Work', '0ms'),
(2, ' fa-users ', 120, 'Satisfied Clients', '300ms'),
(3, ' fa-rocket ', 360, 'Projects Delivered', '600ms'),
(4, ' fa-trophy ', 6454, 'Awards Won', '900ms');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icon_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `description`, `icon_class`) VALUES
(1, 'Branding', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque\r\n                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoreeee\r\n', 'fa fa-github fa-2x'),
(2, 'Development', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'fa fa-pencil fa-2x'),
(3, 'Consulting', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'fa fa-bullhorn fa-2x');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name_short` varchar(255) NOT NULL,
  `name_long` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name_short`, `name_long`, `description`, `banner_img`) VALUES
(1, 'Meet<span> Brandi</span>!', 'creative</span> Gaming Paltform.', 'We are a team of professionals', 'banner.jpg'),
(2, 'Meet<span> Brandi</span>!', 'creative</span> Gaming Paltform.', 'We are a team of professionals', 'banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `google_plus_link` varchar(255) NOT NULL,
  `overlay_title` varchar(255) NOT NULL,
  `overlay_description` varchar(255) NOT NULL,
  `team_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `twitter_link`, `facebook_link`, `google_plus_link`, `overlay_title`, `overlay_description`, `team_img`) VALUES
(1, 'Arsal', 'CEO', 'www.google.com', 'www.google.com', 'www.google.com', 'voluptatem quia voluptas', 'sit aspernatur aut odit aut fugit', 'member-1.png'),
(2, 'Sherry', 'Director', 'www.google.com', 'www.google.com', 'www.google.com', 'voluptatem quia voluptas', 'sit aspernatur aut odit aut fugit', 'member-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `overlay_title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `works_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `overlay_title`, `caption`, `category`, `works_img`) VALUES
(1, 'Gorilla Image', 'Gorilla image', 'photography', 'item-1.jpg'),
(2, 'Duck Image', 'Duck Image', 'branding', 'item-2.jpg'),
(3, 'Rock Image', 'Rock Image', 'branding', 'item-3.jpg'),
(4, 'Image', 'Image', 'branding', 'item-4.jpg'),
(5, 'Image', 'Image', 'photography', 'item-5.jpg'),
(6, 'Image', 'Image', 'photography', 'item-6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
