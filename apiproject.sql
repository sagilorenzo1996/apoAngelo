-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 08:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISBN` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` year(4) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `publisher` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `category`, `title`, `author`, `ISBN`, `year`, `price`, `publisher`, `created_on`) VALUES
(2, 'novels', 'sajees lives', 'Sajee lorenzo', '0125-7825-9624-SDQA', 2019, '4500.00', 'sajee publications', '2019-04-22 07:04:30'),
(3, 'Thriller', 'New dawn', 'Sajee', '192-14774-7575-7577', 2017, '2000.00', 'sajewe', '2019-05-01 06:28:24'),
(4, 'Thriller', 'gfhfgh', 'wqwq', 'fghfgh', 2016, '4000.30', 'qwq', '2019-05-01 06:30:31'),
(5, 'Novel', 'sdasd', '23ef', 'asdasd', 2014, '1234.00', 'efef', '2019-05-01 06:33:58'),
(6, 'Novel', 'dfsd', 'wewwew', 'sfsdf3rewrwerwe', 2014, '3000.22', 'ewew', '2019-05-01 06:34:48'),
(7, 'Novel', 'sadsd', 'sdasdas', 'sadsda', 2101, '6000.00', 'asd', '2019-05-01 06:35:46'),
(8, 'Novel', 'sadsd', 'sdasdas', 'sadsda', 2101, '6000.00', 'asd', '2019-05-01 06:36:43'),
(9, 'Thriller', 'baihsbidb', 'sajee', '2734817247', 2010, '2000.00', 'sajee', '2019-05-01 06:37:28'),
(10, 'Thriller', 'baihsbidb', 'sajee', '2734817247', 2010, '2000.00', 'sajee', '2019-05-01 06:37:40'),
(11, 'Fantasy', 'sgsdfgfs', 'sdfasdf', 'sdfsfsfsdf', 2102, '3000.00', 'asds', '2019-05-01 06:39:49');

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
(1, '2018_04_18_110030_create_tasks_table', 1),
(4, '2018_04_18_110632_create_developers_table', 1),
(5, '2018_04_18_110540_create_managers_table', 2),
(6, '2018_04_18_110139_create_projects_table', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
