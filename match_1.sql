-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2023 at 10:20 AM
-- Server version: 10.3.39-MariaDB-log
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `match_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_aprove`
--

CREATE TABLE `table_aprove` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ie_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `table_aprove`
--

INSERT INTO `table_aprove` (`id`, `user_id`, `ie_id`, `create_date`) VALUES
(1, 2, 1, '2021-11-09 13:49:42'),
(2, 2, 2, '2021-11-09 13:52:44'),
(3, 2, 3, '2021-11-16 20:09:44'),
(4, 2, 4, '2021-11-16 20:10:40'),
(5, 1, 5, '2021-11-17 15:36:44'),
(6, 1, 6, '2021-11-17 15:37:44'),
(7, 1, 7, '2021-11-17 15:39:16'),
(8, 1, 4, '2021-11-17 15:39:44'),
(9, 1, 3, '2021-11-17 15:39:46'),
(10, 1, 2, '2021-11-17 15:39:53'),
(11, 1, 1, '2021-11-17 15:39:57'),
(12, 1, 8, '2021-11-18 16:30:41'),
(13, 1, 9, '2021-11-22 14:48:50'),
(14, 1, 10, '2021-11-23 16:02:16'),
(15, 2, 11, '2021-11-23 18:20:56'),
(16, 2, 12, '2021-11-23 18:21:14'),
(17, 2, 13, '2021-11-26 10:18:00'),
(18, 1, 13, '2021-12-03 16:18:58'),
(19, 1, 12, '2021-12-03 16:19:00'),
(20, 1, 11, '2021-12-03 16:19:03'),
(21, 1, 14, '2021-12-03 16:20:21'),
(22, 1, 15, '2021-12-03 16:20:42'),
(23, 1, 16, '2021-12-08 13:18:38'),
(24, 2, 17, '2021-12-08 13:32:28'),
(25, 1, 17, '2021-12-08 13:39:39'),
(26, 1, 1, '2022-01-03 17:03:53'),
(27, 1, 2, '2022-01-03 17:09:01'),
(28, 1, 3, '2022-01-07 15:54:14'),
(29, 1, 4, '2022-01-16 15:34:22'),
(30, 1, 5, '2022-01-19 16:50:40'),
(31, 1, 6, '2022-01-29 17:06:28'),
(32, 1, 7, '2022-01-29 17:06:51'),
(33, 1, 8, '2022-01-29 17:12:30'),
(34, 1, 9, '2022-01-29 17:15:54'),
(35, 1, 1, '2022-02-19 14:57:34'),
(36, 1, 2, '2022-02-19 15:01:53'),
(37, 1, 3, '2022-03-01 15:33:29'),
(38, 1, 4, '2022-03-01 15:35:03'),
(39, 1, 5, '2022-06-13 15:20:31'),
(40, 1, 6, '2022-06-13 15:21:44'),
(41, 1, 7, '2022-06-13 15:28:15'),
(42, 1, 8, '2022-06-13 15:32:39'),
(43, 1, 9, '2022-06-13 15:33:09'),
(44, 1, 10, '2022-06-14 15:48:19'),
(45, 1, 11, '2022-06-15 19:30:18'),
(46, 1, 12, '2022-06-15 19:30:46'),
(47, 2, 13, '2022-06-16 18:41:58'),
(48, 2, 14, '2022-06-16 18:54:33'),
(49, 2, 15, '2022-06-16 18:55:24'),
(50, 2, 16, '2022-06-16 18:59:00'),
(51, 2, 17, '2022-06-16 18:59:35'),
(52, 2, 18, '2022-06-17 13:42:23'),
(53, 2, 19, '2022-06-17 13:43:59'),
(54, 2, 20, '2022-06-17 13:44:20'),
(55, 1, 18, '2022-06-17 14:48:41'),
(56, 1, 19, '2022-06-17 14:48:53'),
(57, 1, 20, '2022-06-17 14:48:58'),
(58, 1, 21, '2022-06-18 06:52:09'),
(59, 1, 22, '2022-06-18 19:44:41'),
(60, 2, 23, '2022-06-20 13:25:18'),
(61, 2, 24, '2022-06-20 15:28:56'),
(62, 2, 21, '2022-06-20 15:30:35'),
(63, 1, 23, '2022-06-23 11:01:16'),
(64, 1, 24, '2022-06-23 11:01:25'),
(65, 1, 25, '2022-06-24 17:27:22'),
(66, 2, 26, '2022-06-26 16:04:24'),
(67, 2, 27, '2022-06-26 16:04:41'),
(68, 2, 28, '2022-06-26 16:05:18'),
(69, 2, 29, '2022-06-26 16:06:56'),
(70, 2, 25, '2022-06-26 16:08:27'),
(71, 2, 10, '2022-06-26 16:08:32'),
(72, 2, 7, '2022-06-26 16:08:36'),
(73, 2, 6, '2022-06-26 16:08:41'),
(74, 2, 5, '2022-06-26 16:08:43'),
(75, 1, 30, '2022-06-26 18:00:24'),
(76, 1, 31, '2022-06-26 18:19:45'),
(77, 1, 31, '2022-06-26 18:22:26'),
(78, 2, 32, '2022-07-01 03:56:36'),
(79, 2, 33, '2022-07-01 03:59:21'),
(80, 2, 30, '2022-07-01 04:06:38'),
(81, 1, 26, '2022-07-03 07:30:03'),
(82, 1, 27, '2022-07-03 07:30:08'),
(83, 1, 28, '2022-07-03 07:30:11'),
(84, 1, 29, '2022-07-03 07:30:14'),
(85, 1, 32, '2022-07-03 07:30:20'),
(86, 1, 33, '2022-07-03 07:30:23'),
(87, 2, 34, '2022-07-03 17:37:49'),
(88, 2, 35, '2022-07-03 17:38:28'),
(89, 2, 36, '2022-07-03 17:39:03'),
(90, 1, 37, '2022-07-03 19:04:19'),
(91, 1, 38, '2022-07-26 08:39:36'),
(92, 1, 39, '2022-07-27 17:39:56'),
(93, 1, 40, '2022-07-31 07:21:32'),
(94, 1, 41, '2022-07-31 07:22:15'),
(95, 2, 41, '2022-08-07 08:09:53'),
(96, 2, 38, '2022-08-07 08:09:55'),
(97, 2, 39, '2022-08-07 08:09:59'),
(98, 2, 40, '2022-08-07 08:10:02'),
(99, 1, 42, '2022-08-10 17:39:28'),
(100, 1, 43, '2022-08-10 17:39:56'),
(101, 2, 44, '2022-08-13 16:19:41'),
(102, 2, 45, '2022-08-13 16:19:54'),
(103, 2, 46, '2022-08-13 16:20:33'),
(104, 2, 47, '2022-08-13 16:20:50'),
(105, 2, 48, '2022-08-13 16:21:15'),
(106, 2, 49, '2022-08-13 16:21:34'),
(107, 2, 42, '2022-08-13 16:21:43'),
(108, 2, 43, '2022-08-13 16:21:45'),
(109, 2, 50, '2022-08-16 16:50:32'),
(110, 2, 51, '2022-08-16 16:51:19'),
(111, 2, 52, '2022-08-22 10:03:10'),
(112, 1, 53, '2022-08-24 11:38:10'),
(113, 1, 44, '2022-08-24 11:38:36'),
(114, 1, 52, '2022-08-24 11:38:48'),
(115, 1, 45, '2022-08-24 11:39:14'),
(116, 1, 51, '2022-08-24 11:39:31'),
(117, 1, 50, '2022-08-24 11:39:39'),
(118, 1, 49, '2022-08-24 11:39:42'),
(119, 1, 48, '2022-08-24 11:39:44'),
(120, 1, 47, '2022-08-24 11:39:47'),
(121, 1, 46, '2022-08-24 11:39:49'),
(122, 2, 54, '2022-08-25 13:12:58'),
(123, 2, 55, '2022-08-31 06:56:57'),
(124, 2, 56, '2022-08-31 06:57:30'),
(125, 2, 57, '2022-08-31 07:00:19'),
(126, 2, 53, '2022-08-31 07:00:42'),
(127, 1, 57, '2022-09-04 17:01:49'),
(128, 1, 56, '2022-09-04 17:01:55'),
(129, 1, 55, '2022-09-04 17:01:57'),
(130, 1, 54, '2022-09-04 17:01:59'),
(131, 1, 58, '2022-09-04 17:02:51'),
(132, 1, 59, '2022-09-04 17:03:25'),
(133, 1, 60, '2022-09-04 17:13:31'),
(134, 1, 61, '2022-09-04 17:13:51'),
(135, 2, 62, '2022-09-04 17:17:11'),
(136, 2, 63, '2022-09-04 17:17:47'),
(137, 1, 63, '2022-09-04 17:18:49'),
(138, 1, 62, '2022-09-04 17:18:51'),
(139, 2, 64, '2022-09-04 17:18:55'),
(140, 2, 65, '2022-09-04 17:19:41'),
(141, 2, 66, '2022-09-09 19:02:38'),
(142, 2, 67, '2022-09-09 19:03:28'),
(143, 2, 68, '2022-09-09 19:04:02'),
(144, 2, 69, '2022-09-11 11:22:30'),
(145, 2, 70, '2022-09-11 16:32:27'),
(146, 2, 71, '2022-09-12 14:03:18'),
(147, 2, 72, '2022-09-20 09:23:56'),
(148, 2, 73, '2022-09-20 09:24:20'),
(149, 1, 74, '2022-09-20 17:41:28'),
(150, 1, 75, '2022-09-20 17:42:18'),
(151, 1, 76, '2022-09-20 17:43:04'),
(152, 1, 77, '2022-09-20 17:43:44'),
(153, 2, 78, '2022-09-24 17:19:47'),
(154, 2, 79, '2022-09-24 17:22:18'),
(155, 1, 80, '2022-09-28 16:37:05'),
(156, 1, 64, '2022-09-28 16:38:23'),
(157, 1, 65, '2022-09-28 16:39:31'),
(158, 2, 81, '2022-10-04 17:49:10'),
(159, 1, 66, '2023-08-20 06:38:09'),
(160, 1, 67, '2023-08-20 06:38:21'),
(161, 1, 79, '2023-08-20 06:38:32'),
(162, 1, 68, '2023-08-20 06:38:46'),
(163, 1, 81, '2023-08-20 06:38:58'),
(164, 1, 73, '2023-08-20 06:39:10'),
(165, 1, 78, '2023-08-20 06:39:18'),
(166, 1, 69, '2023-08-20 06:39:49'),
(167, 1, 72, '2023-08-20 06:40:00'),
(168, 1, 71, '2023-08-20 06:40:04'),
(169, 1, 70, '2023-08-20 06:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `table_head`
--

CREATE TABLE `table_head` (
  `head_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active , =>inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_head`
--

INSERT INTO `table_head` (`head_id`, `name`, `status`) VALUES
(1, 'chal', 1),
(2, 'Dal', 1),
(3, 'Other', 1),
(4, 'Internet Bill', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_income_expense`
--

CREATE TABLE `table_income_expense` (
  `ie_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 2 COMMENT '1=>income, 2=>expense',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` text NOT NULL,
  `total_price` double NOT NULL,
  `aprove_status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active, 2=>inactive',
  `ledgertype` enum('public','personal') NOT NULL DEFAULT 'public'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_income_expense`
--

INSERT INTO `table_income_expense` (`ie_id`, `head_id`, `user_id`, `match_id`, `type`, `status`, `create_date`, `update_date`, `date`, `total_price`, `aprove_status`, `ledgertype`) VALUES
(60, 3, 1, 1, 2, 1, '2022-09-04 17:13:31', '2022-09-04 17:13:31', '2022-09-01', 1619, 1, 'public'),
(61, 3, 1, 1, 2, 1, '2022-09-04 17:13:51', '2022-09-04 17:13:51', '2022-09-04', 200, 1, 'public'),
(62, 3, 2, 1, 2, 1, '2022-09-04 17:17:11', '2022-09-04 17:18:51', '2022-09-01', 275, 2, 'public'),
(63, 3, 2, 1, 2, 1, '2022-09-04 17:17:47', '2022-09-04 17:18:49', '2022-09-02', 310, 2, 'public'),
(64, 3, 2, 1, 2, 1, '2022-09-04 17:18:55', '2022-09-28 16:38:23', '2022-09-03', 80, 2, 'public'),
(65, 3, 2, 1, 2, 1, '2022-09-04 17:19:41', '2022-09-28 16:39:31', '2022-09-04', 75, 2, 'public'),
(66, 3, 2, 1, 2, 1, '2022-09-09 19:02:38', '2023-08-20 06:38:09', '2022-09-05', 120, 2, 'public'),
(67, 3, 2, 1, 2, 1, '2022-09-09 19:03:28', '2023-08-20 06:38:21', '2022-09-08', 550, 2, 'public'),
(68, 3, 2, 1, 2, 1, '2022-09-09 19:04:02', '2023-08-20 06:38:46', '2022-09-09', 40, 2, 'public'),
(69, 3, 2, 1, 2, 1, '2022-09-11 11:22:30', '2023-08-20 06:39:49', '2022-09-10', 130, 2, 'public'),
(70, 3, 2, 1, 2, 1, '2022-09-11 16:32:27', '2023-08-20 06:40:12', '2022-09-11', 555, 2, 'public'),
(71, 3, 2, 1, 2, 1, '2022-09-12 14:03:18', '2023-08-20 06:40:04', '2022-09-12', 170, 2, 'public'),
(72, 3, 2, 1, 2, 1, '2022-09-20 09:23:56', '2023-08-20 06:40:00', '2022-09-17', 20, 2, 'public'),
(73, 3, 2, 1, 2, 1, '2022-09-20 09:24:20', '2023-08-20 06:39:10', '2022-09-19', 140, 2, 'public'),
(74, 3, 1, 1, 2, 1, '2022-09-20 17:41:28', '2022-09-20 17:41:28', '2022-09-15', 660, 1, 'public'),
(75, 3, 1, 1, 2, 1, '2022-09-20 17:42:18', '2022-09-20 17:42:18', '2022-09-17', 210, 1, 'public'),
(76, 3, 1, 1, 2, 1, '2022-09-20 17:43:04', '2022-09-20 17:43:04', '2022-09-19', 370, 1, 'public'),
(77, 3, 1, 1, 2, 1, '2022-09-20 17:43:44', '2022-09-20 17:43:44', '2022-09-19', 70, 1, 'public'),
(78, 3, 2, 1, 2, 1, '2022-09-24 17:19:47', '2023-08-20 06:39:18', '2022-09-22', 120, 2, 'public'),
(79, 1, 2, 1, 2, 1, '2022-09-24 17:22:18', '2023-08-20 06:38:32', '2022-09-24', 650, 2, 'public'),
(80, 3, 1, 1, 2, 1, '2022-09-28 16:37:05', '2022-09-28 16:37:05', '2022-09-27', 40, 1, 'public'),
(81, 3, 2, 1, 2, 1, '2022-10-04 17:49:10', '2023-08-20 06:38:58', '2022-10-30', 210, 2, 'public');

-- --------------------------------------------------------

--
-- Table structure for table `table_income_expense_item`
--

CREATE TABLE `table_income_expense_item` (
  `item_id` int(11) NOT NULL,
  `ie_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_qty` double NOT NULL,
  `item_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_income_expense_item`
--

INSERT INTO `table_income_expense_item` (`item_id`, `ie_id`, `item_name`, `item_qty`, `item_price`) VALUES
(109, 60, 'tel', 5, 910),
(110, 60, 'chinri mash', 1, 359),
(111, 60, 'chal', 5, 350),
(112, 61, 'apple', 1, 200),
(113, 62, 'Murgi', 1, 275),
(114, 63, 'Mach', 1, 250),
(115, 63, 'Dal', 1, 60),
(116, 64, 'sobji', 3, 60),
(117, 64, 'morich', 1, 20),
(118, 65, 'sobji', 4, 60),
(119, 65, 'Kolmi Sak', 1, 15),
(120, 66, 'Dim', 12, 120),
(121, 67, 'Lunch', 2, 250),
(122, 67, 'Murgi', 1, 300),
(123, 68, 'Ada, Roshun ', 2, 40),
(124, 69, 'sobji', 4, 70),
(125, 69, 'piyaj', 1, 40),
(126, 69, 'Pui Shak', 1, 20),
(127, 70, 'Chal', 5, 365),
(128, 70, 'Dal', 1, 60),
(129, 70, 'mosola', 3, 90),
(130, 70, 'Alu', 1, 20),
(131, 70, 'Vim Bar', 2, 20),
(132, 71, 'Chingri Mach', 1, 150),
(133, 71, 'Lau', 1, 20),
(134, 72, 'Morich', 1, 20),
(135, 73, 'Dim', 12, 140),
(136, 74, 'murgi', 2, 560),
(137, 74, 'roson,ada,peaj', 1, 100),
(138, 75, 'rokeya hotel', 1, 210),
(139, 76, 'sobji', 1, 100),
(140, 76, 'apple', 1, 270),
(141, 77, 'lobon, ada', 1, 70),
(142, 78, 'Dim', 8, 90),
(143, 78, 'Polithin', 100, 30),
(144, 79, 'Chal', 5, 375),
(145, 79, 'Dim', 12, 150),
(146, 79, 'Dal', 1, 55),
(147, 79, 'Sobji', 3, 70),
(148, 80, 'sobji', 1, 40),
(149, 81, 'Dim', 12, 150),
(150, 81, 'Sobji', 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `table_match`
--

CREATE TABLE `table_match` (
  `match_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `divsion_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_match`
--

INSERT INTO `table_match` (`match_id`, `name`, `username`, `password`, `city_id`, `divsion_id`, `country_id`, `status`, `create_date`, `update_date`) VALUES
(1, 'Match 01', 'match', 'ef5c844eab88bcaca779bd2f3ad67b573bbbbfca', 1, 1, 1, 1, '2019-11-10 07:48:33', '2019-11-10 07:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `match_id` int(11) NOT NULL COMMENT 'Come fromj match table',
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`user_id`, `username`, `fullname`, `phone`, `password`, `create_date`, `update_date`, `status`, `match_id`, `email`) VALUES
(1, 'alamin', 'Md Almin', '01812161440', 'be69c2af8654e37048115196464d0f17be1c02b7', '2019-11-10 07:50:25', '2022-06-13 14:11:33', 1, 1, 'alamin@gmail.com'),
(2, 'shakil', 'Shakil', '01817943803', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-11-10 07:50:25', '2022-06-12 16:36:12', 1, 1, 'basir@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_aprove`
--
ALTER TABLE `table_aprove`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_head`
--
ALTER TABLE `table_head`
  ADD PRIMARY KEY (`head_id`);

--
-- Indexes for table `table_income_expense`
--
ALTER TABLE `table_income_expense`
  ADD PRIMARY KEY (`ie_id`);

--
-- Indexes for table `table_income_expense_item`
--
ALTER TABLE `table_income_expense_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `table_match`
--
ALTER TABLE `table_match`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_aprove`
--
ALTER TABLE `table_aprove`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `table_head`
--
ALTER TABLE `table_head`
  MODIFY `head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_income_expense`
--
ALTER TABLE `table_income_expense`
  MODIFY `ie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `table_income_expense_item`
--
ALTER TABLE `table_income_expense_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `table_match`
--
ALTER TABLE `table_match`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
