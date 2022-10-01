-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 08:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tc_cse-infohub`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg` bigint(25) DEFAULT NULL,
  `S1_510201` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510202` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510203` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510204` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510205` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510207` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510209` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530201` int(255) DEFAULT NULL,
  `S3_530202` int(255) DEFAULT NULL,
  `S3_530203` int(255) DEFAULT NULL,
  `S3_530204` int(255) DEFAULT NULL,
  `S3_530205` int(255) DEFAULT NULL,
  `S3_530206` int(255) DEFAULT NULL,
  `S3_530207` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `roll`, `name`, `section`, `reg`, `S1_510201`, `S1_510202`, `S1_510203`, `S1_510204`, `S1_510205`, `S1_510207`, `S1_510209`, `S3_530201`, `S3_530202`, `S3_530203`, `S3_530204`, `S3_530205`, `S3_530206`, `S3_530207`, `created_at`, `updated_at`) VALUES
(4, 1019149, 'Md Ashraful Islam', 'A', 18502003127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 99, 90, 95, 99, 99, 90, '2022-08-30 09:18:56', '2022-09-16 12:57:43'),
(5, 1019174, 'Riffat Ara Puspo', 'B', 18502003185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 99, 99, 98, 95, 100, 100, 100, '2022-08-30 09:20:45', '2022-09-16 12:31:54'),
(6, 1019179, 'Sabekun Nahar Kuasha', 'B', 18502003137, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 92, 76, 88, 100, 99, 100, '2022-08-30 09:20:49', '2022-09-16 08:44:00'),
(7, 1019112, 'S.k.Mashukul Islam.', 'A', 18502003152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 99, 100, 91, 97, 99, 100, 99, '2022-08-31 06:45:58', '2022-09-16 12:57:22'),
(10, 1019126, 'Shakhawat Srabon', 'A', 18502003133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 100, 95, 100, 100, 99, 98, '2022-09-04 00:15:30', '2022-09-19 23:52:31'),
(11, 8171001, 'Amanda Reahana Gomes', 'A', 16502000711, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-19 12:43:36', '2022-09-19 12:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientation` date DEFAULT NULL,
  `total_student` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch`, `session`, `semester`, `orientation`, `total_student`, `created_at`, `updated_at`) VALUES
(1, '9', '2017-18', '7', '2022-09-07', 87, '2022-04-23 13:30:17', '2022-09-07 13:37:10'),
(2, '10', '2018-19', '5', '2022-06-05', 90, '2022-04-23 13:31:15', '2022-07-24 08:34:55'),
(3, '11', '2019-20', '3', '2022-06-05', 110, '2022-04-23 13:31:49', '2022-07-25 00:17:49'),
(4, '12', '2020-21', '1', '2022-01-08', 120, '2022-04-23 13:35:35', '2022-07-25 00:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `book`, `created_at`, `updated_at`) VALUES
(2, 'Compilers  Principle Technique Tools', 'book-images/1662447223.PNG', 'book-pdfs/1662447223.pdf', '2022-09-06 00:53:43', '2022-09-06 00:53:43'),
(3, 'Cryptography and Network Security', 'book-images/1663397314.PNG', 'book-pdfs/1663397315.pdf', '2022-09-17 00:48:35', '2022-09-17 00:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `semester`, `code`, `course_name`, `credit`, `type`, `created_at`, `updated_at`) VALUES
(1, '1', 510201, 'Structured Programming Language', 3.00, NULL, '2022-04-23 09:12:08', '2022-07-24 23:55:57'),
(2, '1', 510202, 'Structured Programming Language Lab', 1.50, NULL, '2022-04-23 09:14:42', '2022-07-25 00:11:33'),
(5, '1', 510203, 'Electrical and Electronic Circuit', 3.00, NULL, '2022-04-28 00:03:53', '2022-07-25 00:11:43'),
(6, '1', 510204, 'Electrical and Electronic Circuit Lab', 1.50, NULL, '2022-04-28 00:04:38', '2022-07-25 00:12:44'),
(7, '1', 510205, 'Calculus', 3.00, NULL, '2022-04-28 00:07:26', '2022-07-25 00:13:03'),
(8, '1', 510207, 'Physics', 3.00, NULL, '2022-04-28 00:08:21', '2022-07-25 01:19:15'),
(9, '1', 510209, 'English', 3.00, NULL, '2022-04-28 00:08:51', '2022-07-25 01:20:02'),
(10, '2', 510221, 'Digital Systems Design', 3.00, NULL, '2022-04-28 07:07:21', '2022-07-29 07:36:52'),
(11, '2', 510222, 'Digital Systems Lab', 1.50, NULL, '2022-04-28 07:08:11', '2022-07-29 08:04:26'),
(12, '2', 510223, 'Discrete Mathematics', 3.00, NULL, '2022-04-28 07:08:42', '2022-07-29 08:04:40'),
(13, '2', 510225, 'Linear Algebra', 3.00, NULL, '2022-04-28 07:09:12', '2022-07-29 08:05:12'),
(15, '2', 510227, 'Statistics and Probability', 3.00, NULL, '2022-04-28 07:11:31', '2022-07-29 08:05:26'),
(16, '2', 510229, 'History of the Emergence of Independent Bangladesh', 3.00, NULL, '2022-04-28 07:12:05', '2022-07-29 08:05:42'),
(17, '3', 520201, 'Data Structure', 3.00, NULL, '2022-04-28 07:17:29', '2022-07-29 07:56:13'),
(18, '3', 520202, 'Data Structure Lab', 1.50, NULL, '2022-04-28 07:18:10', '2022-07-29 08:00:08'),
(19, '3', 520203, 'Object Oriented Programming', 3.00, NULL, '2022-04-28 07:23:24', '2022-07-29 08:03:18'),
(20, '3', 520204, 'Object Oriented Programming Lab', 1.50, NULL, '2022-04-28 07:29:27', '2022-07-29 08:03:35'),
(21, '3', 520205, 'Computer Architecture', 3.00, NULL, '2022-04-28 07:30:35', '2022-07-29 08:04:58'),
(24, '7', 540203, 'Compiler Design and Construction', 3.00, NULL, '2022-05-12 13:46:52', '2022-07-25 01:20:17'),
(25, '5', 530201, 'Peripheral and Interfacing', 3.00, NULL, '2022-07-25 10:07:59', '2022-07-25 10:07:59'),
(26, '5', 530202, 'Peripheral and Interfacing Lab', 1.50, NULL, '2022-07-25 10:08:47', '2022-07-25 10:08:47'),
(27, '3', 520207, 'Ordinary Differential Equation', 3.00, NULL, '2022-07-29 07:40:49', '2022-07-29 07:40:49'),
(28, '3', 520209, 'Fundamental of Business Studies', 3.00, NULL, '2022-07-29 07:41:53', '2022-07-29 07:41:53'),
(29, '5', 530203, 'Data and Telecommunications', 3.00, NULL, '2022-07-29 08:11:17', '2022-07-29 08:11:17'),
(30, '5', 530204, 'Data and Telecommunications Lab', 1.50, NULL, '2022-07-29 08:12:03', '2022-07-29 08:12:03'),
(31, '5', 530205, 'Operating System', 3.00, NULL, '2022-07-29 08:13:15', '2022-07-29 08:13:15'),
(32, '5', 530206, 'Operating System Lab', 1.50, NULL, '2022-07-29 08:14:22', '2022-07-29 08:14:22'),
(33, '5', 530207, 'Economics', 3.00, NULL, '2022-07-29 08:14:52', '2022-07-29 08:14:52'),
(34, '6', 530219, 'Software Engineering', 3.00, NULL, '2022-07-29 08:16:14', '2022-07-29 08:16:14'),
(35, '6', 530220, 'Software Engineering Lab', 1.50, NULL, '2022-07-29 08:16:55', '2022-07-31 12:21:07'),
(36, '6', 530221, 'Computer Networking', 3.00, NULL, '2022-07-29 08:17:21', '2022-07-29 08:17:21'),
(37, '6', 530222, 'Computer Networking Lab', 1.50, NULL, '2022-07-29 08:17:42', '2022-07-29 08:17:42'),
(38, '6', 530223, 'Embedded System Programming', 3.00, NULL, '2022-07-29 08:18:05', '2022-07-29 08:18:05'),
(39, '6', 530224, 'Embedded System Programming Lab', 1.50, NULL, '2022-07-29 08:18:22', '2022-07-29 08:18:22'),
(40, '6', 530225, 'Theory of Computation', 3.00, NULL, '2022-07-29 08:18:44', '2022-07-29 08:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_id` int(11) NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_teachers`
--

INSERT INTO `course_teachers` (`id`, `semester`, `section`, `code`, `course_name`, `t_id`, `teacher`, `created_at`, `updated_at`) VALUES
(1, '5', 'A', 530201, 'Peripheral and Interfacing', 10007, 'FR', '2022-07-31 12:15:49', '2022-07-31 12:15:49'),
(2, '5', 'A', 530202, 'Peripheral and Interfacing Lab', 10005, 'KZ', '2022-07-31 12:16:54', '2022-07-31 12:16:54'),
(3, '5', 'A', 530203, 'Data and Telecommunications', 10012, 'SAA', '2022-07-31 12:17:16', '2022-07-31 12:17:16'),
(4, '5', 'A', 530204, 'Data and Telecommunications Lab', 10012, 'SAA', '2022-07-31 12:17:57', '2022-07-31 12:17:57'),
(5, '5', 'A', 530205, 'Operating System', 10003, 'MSH', '2022-07-31 12:18:29', '2022-07-31 12:18:29'),
(6, '5', 'A', 530206, 'Operating System Lab', 10003, 'MSH', '2022-07-31 12:19:41', '2022-07-31 12:19:41'),
(7, '5', 'A', 530207, 'Economics', 11002, 'SVA', '2022-07-31 12:28:28', '2022-09-19 12:19:48'),
(8, '1', 'B', 510201, 'Structured Programming Language', 10006, 'KU', '2022-08-02 12:59:06', '2022-08-02 12:59:06'),
(9, '1', 'B', 510202, 'Structured Programming Language Lab', 10006, 'KU', '2022-08-02 12:59:31', '2022-08-02 12:59:31'),
(10, '1', 'B', 510203, 'Electrical and Electronic Circuit', 10012, 'SAA', '2022-08-02 13:00:08', '2022-08-02 13:00:08'),
(11, '1', 'B', 510204, 'Electrical and Electronic Circuit Lab', 10001, 'AH', '2022-08-02 13:00:50', '2022-08-02 13:00:50'),
(12, '1', 'B', 510205, 'Calculus', 10010, 'MT', '2022-08-02 13:01:29', '2022-08-02 13:01:29'),
(13, '1', 'B', 510207, 'Physics', 10008, 'SR', '2022-08-02 13:01:52', '2022-08-02 13:01:52'),
(14, '1', 'B', 510209, 'English', 10011, 'RI', '2022-08-02 13:02:25', '2022-08-02 13:02:25'),
(15, '5', 'B', 530201, 'Peripheral and Interfacing', 10008, 'SR', '2022-08-25 13:32:53', '2022-08-25 13:32:53'),
(16, '5', 'B', 530205, 'Operating System', 10004, 'MMR', '2022-08-25 13:33:22', '2022-08-25 13:33:22'),
(17, '5', 'B', 530203, 'Data and Telecommunications', 10014, 'MH', '2022-08-25 13:52:20', '2022-08-25 13:52:20'),
(18, '1', 'A', 510209, 'English', 11001, 'SAK', '2022-08-25 23:52:13', '2022-08-25 23:52:13'),
(19, '5', 'B', 530207, 'Economics', 11002, 'SVA', '2022-08-25 23:53:21', '2022-09-19 12:21:10'),
(20, '5', 'B', 530202, 'Peripheral and Interfacing Lab', 10005, 'KZ', '2022-09-10 13:23:24', '2022-09-10 13:23:24'),
(21, '5', 'B', 530204, 'Data and Telecommunications Lab', 10014, 'MH', '2022-09-10 13:23:59', '2022-09-10 13:23:59'),
(22, '5', 'B', 530206, 'Operating System Lab', 10004, 'MMR', '2022-09-10 13:26:12', '2022-09-10 13:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donor_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `donor_id`, `name`, `contact`, `address`, `blood`, `status`, `created_at`, `updated_at`) VALUES
(2, 1019112, 'S.k.Mashukul Islam.', '01954517252', 'Konapara, Demra, Dhaka-1362', 'B+', 'Available', '2022-08-01 14:06:53', '2022-09-07 12:25:52'),
(3, 10006, 'Kabel uddin', '01925928476', 'Tejkunipara Dhaka', 'B+', 'Available', '2022-08-01 14:18:02', '2022-09-10 13:49:58'),
(4, 10012, 'Saud Al Abedin', '01681735690', 'Mohammadpur', 'B+', 'Available', '2022-08-03 01:44:12', '2022-09-19 01:09:18'),
(6, 9181001, 'Mina', '01236666', 'dhaka', 'AB+', 'Unavailable', '2022-08-25 10:32:53', '2022-08-29 15:28:15'),
(7, 2101001, 'Fahad', '0100000000', 'Dhaka', 'A-', 'Unavailable', '2022-08-27 06:35:45', '2022-09-19 01:07:42'),
(8, 9181091, 'Amit', '0112000000', 'Mirpur', 'O-', 'Available', '2022-08-27 08:54:46', '2022-08-27 08:54:46'),
(9, 9181061, 'AB Siddik', '01706336060', 'jatrabari', 'AB+', 'Available', '2022-09-03 23:32:54', '2022-09-03 23:33:05'),
(10, 1019126, 'Shakhawat Srabon', '01869943362', 'Kathalbagan', 'A+', 'Available', '2022-09-04 00:22:39', '2022-09-04 00:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guide_teachers`
--

CREATE TABLE `guide_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_t_id` int(11) NOT NULL,
  `guide_teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ag_t_id` int(11) DEFAULT NULL,
  `asst_guide_teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guide_teachers`
--

INSERT INTO `guide_teachers` (`id`, `semester`, `g_t_id`, `guide_teacher`, `ag_t_id`, `asst_guide_teacher`, `created_at`, `updated_at`) VALUES
(3, '7', 10006, 'KU', 10012, 'SAA', '2022-07-28 09:59:51', '2022-07-28 09:59:51'),
(4, '1', 10003, 'MSH', 10013, 'AZN', '2022-07-28 10:26:25', '2022-08-01 09:57:01'),
(5, '3', 10005, 'KZ', 10008, 'SR', '2022-07-28 10:27:34', '2022-08-01 09:57:32'),
(6, '5', 10004, 'MMR', 10010, 'MT', '2022-07-28 10:28:00', '2022-08-01 09:57:56'),
(7, '6', 10004, 'MMR', 10010, 'MT', '2022-07-28 10:29:19', '2022-08-01 09:58:10'),
(8, '2', 10003, 'MSH', 10013, 'AZN', '2022-08-01 10:06:08', '2022-08-01 10:06:08'),
(9, '4', 10005, 'KZ', 10008, 'SR', '2022-08-01 10:07:26', '2022-08-01 10:07:26'),
(11, '8', 10006, 'KU', 10012, 'SAA', '2022-08-01 10:07:48', '2022-08-01 10:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `incourses`
--

CREATE TABLE `incourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg` bigint(20) DEFAULT NULL,
  `S1_510201` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510202` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510203` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510204` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510205` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510207` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S1_510209` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530201` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530202` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530203` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530204` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530205` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530206` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `S3_530207` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incourses`
--

INSERT INTO `incourses` (`id`, `roll`, `name`, `section`, `reg`, `S1_510201`, `S1_510202`, `S1_510203`, `S1_510204`, `S1_510205`, `S1_510207`, `S1_510209`, `S3_530201`, `S3_530202`, `S3_530203`, `S3_530204`, `S3_530205`, `S3_530206`, `S3_530207`, `created_at`, `updated_at`) VALUES
(3, 1019112, 'S.k.Mashukul Islam.', 'A', 18502003152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', '40', '18', '40', '20', '40', '19', '2022-08-28 13:36:41', '2022-09-16 12:58:04'),
(4, 1019149, 'Md Ashraful Islam', 'A', 18502003127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17', '39', '17', '39', '17', '39', '17', '2022-08-28 21:41:58', '2022-09-16 12:58:20'),
(5, 1019174, 'Riffat Ara Puspo', 'B', 18502003185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', '40', '20', '40', '20', '40', '20', '2022-08-28 21:43:14', '2022-09-16 12:31:23'),
(10, 1019179, 'Sabekun Nahar Kuasha', 'B', 18502003137, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', '40', '19', '40', '20', '39', '20', '2022-08-29 11:26:03', '2022-09-16 12:31:28'),
(15, 1019126, 'Shakhawat Srabon', 'A', 18502003133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', '40', '19', '40', '20', '40', '20', '2022-09-04 00:15:30', '2022-09-16 12:58:10'),
(16, 8171001, 'Amanda Reahana Gomes', 'A', 16502000711, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-19 12:43:35', '2022-09-19 12:43:35');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_04_141303_create_sessions_table', 1),
(7, '2022_04_22_043255_create_semesters_table', 2),
(8, '2022_04_23_133327_create_courses_table', 3),
(9, '2022_04_23_180617_create_batches_table', 4),
(10, '2022_04_23_194305_create_rooms_table', 5),
(11, '2022_04_25_114805_create_students_table', 6),
(12, '2022_04_25_120720_create_teachers_table', 6),
(13, '2022_04_26_043148_create_teacher_table', 7),
(14, '2022_04_26_043435_create_teachers_table', 8),
(15, '2022_04_29_131957_create_routines_table', 9),
(16, '2022_05_13_052539_create_p_d_f_s_table', 10),
(17, '2022_05_13_143608_create_pdfs_table', 11),
(18, '2022_05_13_144734_create_pdfs_table', 12),
(19, '2022_05_13_145336_create_pdfs_table', 13),
(20, '2022_05_21_143434_create_roles_table', 14),
(21, '2022_07_27_143733_create_guide_teachers_table', 15),
(22, '2022_07_30_192511_create_course_teachers_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_id` bigint(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `t_id`, `semester`, `code`, `title`, `note`, `created_at`, `updated_at`) VALUES
(3, 10006, 1, 510201, 'Test 1', 'all-notes/1662439062.pdf', '2022-09-05 22:37:42', '2022-09-05 22:37:42'),
(5, 10012, 5, 530204, 'picture', 'all-notes/1662623146.JPG', '2022-09-08 01:45:46', '2022-09-08 01:45:46'),
(7, 11002, 5, 530207, 'Economics', 'all-notes/1663438679.PNG', '2022-09-17 12:10:28', '2022-09-17 12:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(20) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `author_id`, `author`, `title`, `notice`, `image`, `created_at`, `updated_at`) VALUES
(3, 1, 'Admin', 'Exam Routine', NULL, 'notice-images/1659895297.PNG', '2022-08-07 12:01:37', '2022-09-10 13:35:00'),
(5, 19, 'Admin', 'Test  বাংলা', 'বাংলা লেখা দেখা যায়', '', '2022-08-07 12:08:40', '2022-09-10 13:35:30'),
(8, 10012, 'Saud Al Abedin', 'new testing', 'edit update\r\nauthor id edit test', 'notice-images/1662012526.png', '2022-08-31 23:29:41', '2022-09-07 08:48:15'),
(11, 11002, 'Shovon Armaan', 'guest test', ',ldpf[,defp,dl[f,d\r\n;lfd4453f\r\nfgldp[fgek,d[gp,lfd;f.d\'.ge[]wtg;le][g;e\r\ndg;.d[]gl][dgp[dlg,rp;g[,lr;gl.\r\ndlgap[etglepppppppppppppppppppppppppppw\r\n[kglp;ardelgp[rlp;,gr[p;grga', '', '2022-09-01 01:13:28', '2022-09-19 13:58:40'),
(12, 10006, 'Kabel uddin', 'sir', 'usduhbwdjiwnmdkwsd', '', '2022-09-11 00:51:20', '2022-09-11 00:51:20'),
(14, 10012, 'Saud Al Abedin', '8th Semester Exam Notice', 'Practical Exam will be held on 22 September 2022', '', '2022-09-19 23:28:20', '2022-09-19 23:28:20'),
(15, 10006, 'Kabel uddin', 'Project Notice', 'Project Defense will be held on 28 and 29 September at 9 am', '', '2022-09-27 00:02:00', '2022-09-27 00:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$dVxMfB9C53wTcZ6ktpjcdeofeD1LJ3HOi/ls40B8vMJMKAyizh6ja', '2022-02-04 10:25:52'),
('reahana233@gmail.com', '$2y$10$oAoSEs86lHVQycjej2ZHf.hBHpkgwi7GVSZ6PGNoSiUyp6uPl31QK', '2022-09-10 12:05:28');

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room` int(11) NOT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `floor`, `room_type`, `batch`, `semester`, `section`, `created_at`, `updated_at`) VALUES
(5, 251, '1st', 'Class', '9', '6', 'A', '2022-04-25 05:35:39', '2022-07-26 23:19:36'),
(6, 252, '1st', 'Class', '9', '6', 'B', '2022-04-25 05:58:12', '2022-07-26 23:23:44'),
(7, 351, '2nd', 'Class', '12', '1', 'A', '2022-04-25 05:58:27', '2022-07-26 23:21:13'),
(8, 352, '2nd', 'Class', '12', '1', 'B', '2022-04-25 06:00:03', '2022-07-26 23:21:42'),
(9, 353, '2nd', 'Class', '11', '3', 'A', '2022-04-25 06:00:30', '2022-07-26 23:24:02'),
(10, 354, '2nd', 'Class', '11', '3', 'B', '2022-04-25 06:01:54', '2022-07-26 23:23:08'),
(11, 355, '2nd', 'Class', '10', '5', 'A', '2022-04-25 06:02:16', '2022-07-26 23:22:12'),
(12, 356, '2nd', 'Class', '10', '5', 'B', '2022-04-25 06:02:32', '2022-07-26 23:22:30'),
(13, 357, '2nd', 'Class', NULL, NULL, NULL, '2022-04-25 06:02:55', '2022-04-25 06:02:55'),
(14, 358, '2nd', 'Class', NULL, NULL, NULL, '2022-04-25 06:03:13', '2022-04-25 06:03:13'),
(15, 453, '3rd', 'SL', NULL, NULL, NULL, '2022-04-25 06:03:37', '2022-04-25 06:03:37'),
(16, 457, '3rd', 'SL', NULL, NULL, NULL, '2022-04-25 06:03:52', '2022-04-25 06:03:52'),
(17, 458, '3rd', 'SL', NULL, NULL, NULL, '2022-04-25 06:04:02', '2022-04-25 06:04:02'),
(18, 455, '3rd', 'HL', NULL, NULL, NULL, '2022-04-25 06:04:53', '2022-04-25 06:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_8_50am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_9_40am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_10_30am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_11_20am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_12_10pm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_1_30pm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `day`, `batch`, `semester`, `section`, `t_8_50am`, `t_9_40am`, `t_10_30am`, `t_11_20am`, `t_12_10pm`, `t_1_30pm`, `created_at`, `updated_at`) VALUES
(2, 'Sunday', '10', '5', 'A', '530201', '530206', '530207', '530202', '-', '-', '2022-09-02 12:53:51', '2022-09-02 13:38:59'),
(3, 'Monday', '10', '5', 'A', '-', '530203', '-', '530207', '530204', '-', '2022-09-02 13:05:57', '2022-09-02 13:44:40'),
(4, 'Tuesday', '10', '5', 'A', '-', '-', '530201', '530203', '530202', '530204', '2022-09-02 13:07:52', '2022-09-02 13:44:50'),
(5, 'Wednesday', '10', '5', 'A', '--', '--', '--', '530205', '530206', '--', '2022-09-02 13:12:16', '2022-09-02 13:12:16'),
(6, 'Thursday', '10', '5', 'A', '--', '--', '--', '530207', '530205', '--', '2022-09-02 13:13:28', '2022-09-02 13:13:28'),
(8, 'Sunday', '10', '5', 'B', '-', '530203', '-', '530207', '530204', '-', '2022-09-02 13:33:01', '2022-09-02 13:45:58'),
(9, 'Monday', '10', '5', 'B', '530207', '530201', '530203', '530206', '-', '-', '2022-09-11 22:44:40', '2022-09-11 22:44:40'),
(10, 'Tuesday', '10', '5', 'B', '-', '-', '-', '530202', '530205', '530206', '2022-09-11 22:46:31', '2022-09-11 22:46:31'),
(11, 'Wednesday', '10', '5', 'B', '530201', '530202', '-', '530203', '530204', '-', '2022-09-11 22:47:10', '2022-09-11 22:47:10'),
(12, 'Thursday', '10', '5', 'B', '530201', '530207', '530205', '-', '-', '-', '2022-09-11 22:47:56', '2022-09-11 22:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_credit` double(8,2) NOT NULL,
  `total_course` int(11) NOT NULL,
  `theory` int(11) NOT NULL,
  `practical` int(11) NOT NULL,
  `project` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `total_credit`, `total_course`, `theory`, `practical`, `project`, `created_at`, `updated_at`) VALUES
(1, '1', 18.00, 7, 5, 2, 0, '2022-04-22 07:43:09', '2022-07-24 21:48:08'),
(3, '2', 16.50, 6, 5, 1, 0, '2022-04-22 07:59:49', '2022-07-24 21:48:28'),
(4, '3', 18.00, 7, 5, 2, 0, '2022-04-22 08:05:51', '2022-07-24 21:48:47'),
(5, '4', 16.50, 7, 4, 3, 0, '2022-04-22 08:07:01', '2022-07-24 21:49:09'),
(6, '5', 16.50, 7, 4, 3, 0, '2022-04-22 08:08:12', '2022-07-24 21:50:10'),
(7, '6', 16.50, 7, 4, 3, 0, '2022-04-22 08:08:43', '2022-07-24 21:50:33'),
(8, '7', 18.00, 8, 4, 4, 0, '2022-04-22 08:10:45', '2022-07-24 21:50:50'),
(9, '8', 18.00, 6, 3, 2, 1, '2022-04-22 08:12:42', '2022-07-24 21:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gJYiTGo4yDhSK3M9BZpKbBHfCJHmBKa57f03OHzo', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTl5UXV4NGFKVmY0cnkzQU5HaExERG1NenFNeWtQT0NPQXpEYkEzcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvVENfQ1NFLWluZm9IdWIvcHVibGljIjt9fQ==', 1664299977),
('ijxIjKY72OzLTVHXAKWOtnm4qBNOSSSGBsJ42Pj7', 26, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUlFvTzl4Y3l2TXVTY2dtRUFzQjdjZWVMRGxoS08zd0FSYUN5OVlxVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvVENfQ1NFLWluZm9IdWIvcHVibGljIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjY7fQ==', 1664298719);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` bigint(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg` bigint(20) DEFAULT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll`, `name`, `reg`, `batch`, `session`, `section`, `semester`, `gender`, `contact`, `email`, `address`, `type`, `image`, `blood`, `dob`, `father_name`, `mother_name`, `skill`, `fb`, `created_at`, `updated_at`) VALUES
(1, 1019112, 'S.k.Mashukul Islam.', 18502003152, '10', '2018-19', 'A', '5', 'male', '01954517252', 'mashukulislam479@gmail.com', 'Konapara, Demra, Dhaka-1362', 'regular', 'student-images/1658685755.jpg', 'B+', '2000-08-25', NULL, NULL, NULL, 'https://www.facebook.com/profile.php?id=100007775176564', '2022-04-25 10:32:07', '2022-09-19 23:07:07'),
(2, 1019174, 'Riffat Ara Puspo', 18502003185, '10', '2018-19', 'B', '5', 'female', '0142031483', 'riffatpuspo@gmail.com', 'Mirpur', 'regular', 'student-images/1662092882.jpg', 'B+', '2001-07-01', 'A. k. M Hossain', 'Nurjahan Begum', 'Singing', 'https://www.facebook.com/riffat.puspo', '2022-07-26 07:31:49', '2022-09-04 01:53:01'),
(3, 9181017, 'Zayed', 1750200413, '9', '2017-18', 'A', '7', 'male', '018', 'z@email.com', 'dhaka', 'regular', '', NULL, NULL, NULL, NULL, 'Programming: C,C++, Python\r\nweb development', NULL, '2022-07-26 11:20:19', '2022-09-07 14:06:16'),
(4, 2101041, 'Mahmuda Akter', NULL, '12', '2020-21', 'A', '1', 'female', '011', 'm@email.com', 'Dhaka', 'regular', '', 'O+', NULL, NULL, NULL, NULL, NULL, '2022-07-26 12:17:53', '2022-08-03 01:36:11'),
(5, 1120152, 'Shaiyara Joty', NULL, '11', '2019-20', 'B', '3', 'female', NULL, NULL, NULL, 'regular', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 08:12:21', '2022-07-27 08:12:21'),
(6, 1019149, 'Md Ashraful Islam', 18502003127, '10', '2018-19', 'A', '5', 'male', NULL, NULL, NULL, 'regular', 'student-images/1659369357.jpg', 'B+', NULL, NULL, NULL, NULL, NULL, '2022-07-28 00:35:15', '2022-08-01 09:55:57'),
(7, 1019179, 'Sabekun Nahar Kuasha', 18502003137, '10', '2018-19', 'B', '5', 'female', '01232323', NULL, NULL, 'regular', 'student-images/1662320590.jpg', 'AB+', NULL, NULL, NULL, NULL, NULL, '2022-07-31 01:27:23', '2022-09-04 13:43:10'),
(8, 9181007, 'Shanjida Rahman Maria', 175020044173, '9', '2017-18', 'A', '7', 'female', NULL, NULL, NULL, 'regular', '', 'O+', NULL, NULL, NULL, 'MERN Stack', NULL, '2022-08-01 00:34:54', '2022-09-11 01:04:51'),
(9, 2101001, 'Fahad', NULL, '12', '2020-21', 'A', '1', 'male', NULL, NULL, NULL, 'regular', '', 'A-', NULL, NULL, NULL, NULL, NULL, '2022-08-01 10:12:30', '2022-08-27 06:24:03'),
(10, 2101091, 'Rani', NULL, '12', '2020-21', 'B', '1', 'male', NULL, NULL, NULL, 'regular', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-01 10:13:20', '2022-08-01 10:13:20'),
(11, 1120101, 'Shahid', NULL, '11', '2019-20', 'A', '3', 'male', NULL, NULL, NULL, 'regular', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-01 10:15:03', '2022-08-01 10:25:48'),
(12, 9181051, 'Diya', NULL, '9', '2017-18', 'B', '7', 'female', NULL, NULL, NULL, 'regular', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-01 10:20:09', '2022-09-07 14:06:28'),
(13, 9181091, 'Amit', NULL, '9', '2017-18', 'B', '7', 'male', NULL, NULL, NULL, 'regular', 'student-images/1659375341.png', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-01 10:20:44', '2022-09-02 23:28:24'),
(15, 9181001, 'Mina', NULL, '9', '2017-18', 'A', '7', 'female', '01236666', NULL, 'Dhaka', 'regular', 'student-images/1659375315.png', 'AB+', NULL, NULL, NULL, NULL, NULL, '2022-08-01 10:22:37', '2022-09-02 23:28:08'),
(16, 2101060, 'Tania', NULL, '12', '2020-21', 'B', '1', 'female', NULL, NULL, NULL, 'regular', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-29 10:00:21', '2022-08-29 10:00:21'),
(20, 9181061, 'AB Siddik', NULL, '9', '2017-18', 'B', '7', 'male', NULL, NULL, NULL, 'regular', '', 'AB+', NULL, NULL, NULL, 'Browsing', NULL, '2022-08-29 11:10:03', '2022-09-03 23:31:42'),
(21, 1019126, 'Shakhawat Srabon', 18502003133, '10', '2018-19', 'A', '5', 'male', NULL, NULL, NULL, 'regular', 'student-images/1663340748.jpg', 'A+', NULL, NULL, NULL, 'Programming', NULL, '2022-09-04 00:15:30', '2022-09-16 09:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `t_id`, `name`, `initial`, `designation`, `class`, `gender`, `contact`, `email`, `address`, `type`, `image`, `blood`, `fb`, `created_at`, `updated_at`) VALUES
(1, 10001, 'Md. Abdul Hadi', 'AH', 'Associate Professor', 10, 'male', '01793545760', 'info.hadi71@gmail.com', NULL, 'Faculty', 'teacher-images/1650977302.jpg', NULL, NULL, '2022-04-25 22:38:14', '2022-09-16 07:15:26'),
(2, 10002, 'Md. Aminul Haque', 'MAH', 'Associate Professor', 7, 'male', '01552303047', 'aminulhaquetc@gmail.com', NULL, 'Faculty', 'teacher-images/1663332639.jpg', NULL, NULL, '2022-04-28 07:44:42', '2022-09-16 07:15:41'),
(3, 10003, 'Md. Shamim Hossen', 'MSH', 'Lecturer', 15, 'male', '01722920045', 'shamimhossen.yu@gmail.com', NULL, 'Faculty', 'teacher-images/1663332682.jpg', NULL, NULL, '2022-04-28 07:58:24', '2022-09-16 07:15:53'),
(4, 10004, 'Md. Mokhlesur Rahman', 'MMR', 'Lecturer', 21, 'male', '01717406684', 'MOKLESUR.CSE.RU@GMAIL.COM', NULL, 'Faculty', 'teacher-images/1663332704.jpg', NULL, NULL, '2022-04-28 07:59:27', '2022-09-16 07:16:02'),
(5, 10005, 'Md. Khayruzzaman', 'KZ', 'Lecturer', 17, 'male', '01731206005', 'kzamangp90@gmail.com', NULL, 'Faculty', 'teacher-images/1663332720.jpg', NULL, NULL, '2022-04-28 08:04:43', '2022-09-16 07:16:12'),
(6, 10006, 'Kabel uddin', 'KU', 'Lecturer', 18, 'male', '01925928476', 'kabelcse@gmail.com', 'Tejkunipara Dhaka', 'Faculty', 'teacher-images/1656424980.jpg', 'B+', 'https://www.facebook.com/kabel.uddin', '2022-04-28 08:06:12', '2022-09-16 07:16:25'),
(7, 10007, 'Farzana Haque', 'FR', 'Lecturer', 15, 'female', '01720623714', 'eva.farzana@yahoo.com', NULL, 'Faculty', 'teacher-images/1663332741.jpg', NULL, NULL, '2022-07-04 01:20:41', '2022-09-16 07:16:37'),
(8, 10008, 'Shaila Rahman', 'SR', 'Lecturer', 18, 'female', '01720026983', 'shailarahman71@gmail.com', NULL, 'Faculty', 'teacher-images/1663333714.jpg', NULL, NULL, '2022-07-04 22:30:29', '2022-09-16 07:09:41'),
(9, 10009, 'Saifuzzaman Khan', 'SK', 'Lecturer', 16, 'male', '01717-849618', 'palash7222@yahoo.com', NULL, 'Faculty', 'teacher-images/1663333694.jpg', NULL, NULL, '2022-07-04 22:33:12', '2022-09-16 07:09:24'),
(10, 10010, 'Mirza Tahera', 'MT', 'Lecturer', 12, 'female', '01914278111', 'mirzatanii@gmail.com', NULL, 'Faculty', 'teacher-images/1663333747.jpg', NULL, NULL, '2022-07-04 22:35:26', '2022-09-16 07:09:07'),
(11, 10011, 'Md.Rajibul Islam', 'RI', 'Lecturer', 6, 'male', '01552332211', 'rajib.tc85@gmail.com', NULL, 'Faculty', 'teacher-images/1663333815.jpg', NULL, NULL, '2022-07-04 22:41:26', '2022-09-16 07:10:15'),
(12, 10012, 'Saud Al Abedin', 'SAA', 'Lecturer', 16, 'male', '01681735690', 'saud.al.abedin@gmail.com', 'Mohammadpur', 'Faculty', 'teacher-images/1660292351.jpg', 'B+', 'https://www.facebook.com/SD.Abedin', '2022-07-04 22:42:55', '2022-09-16 07:10:31'),
(13, 10013, 'Assaduzzaman Noor', 'AZN', 'Lecturer', 12, 'male', '01682777666', 'assad043@gmail.com', NULL, 'Faculty', 'teacher-images/1663333857.jpg', NULL, NULL, '2022-07-04 22:45:42', '2022-09-16 07:10:57'),
(14, 10014, 'Md.Hasan', 'MH', 'Lecturer', 13, 'male', '01719032781', 'hasancseiu@gmail.com', 'monipuripara', 'Faculty', 'teacher-images/1661348051.jpg', 'A+', 'https://www.facebook.com/profile.php?id=100003545684995', '2022-07-04 23:05:05', '2022-09-11 12:15:51'),
(15, 11001, 'Sharmin Akhter', 'SAK', 'Lecturer', 3, 'female', '01819130490', NULL, NULL, 'Guest', 'teacher-images/1663334093.jpg', NULL, NULL, '2022-07-28 23:41:21', '2022-09-16 07:14:53'),
(16, 11002, 'Shovon Armaan', 'SVA', 'Lecturer', 6, 'male', '011222001', NULL, 'Dhaka', 'Guest', 'teacher-images/1663333894.jpg', NULL, NULL, '2022-07-31 12:27:59', '2022-09-19 01:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_routines`
--

CREATE TABLE `teacher_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_id` int(11) NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_8_50am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_9_40am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_10_30am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_11_20am` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_12_10pm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_1_30pm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_routines`
--

INSERT INTO `teacher_routines` (`id`, `day`, `t_id`, `teacher`, `t_8_50am`, `t_9_40am`, `t_10_30am`, `t_11_20am`, `t_12_10pm`, `t_1_30pm`, `created_at`, `updated_at`) VALUES
(2, 'Sunday', 10012, 'SAA', NULL, '[10B5S-A] 530203', '[11B3S-A] 520205', '[9B7S-B] 540203', '[10B5S-A] 530204-SL', '[9B7S-A] 540204-SL', '2022-09-10 13:18:17', '2022-09-11 22:55:16'),
(3, 'Monday', 10012, 'SAA', '[11B3S-A] 520205', '[10B5S-A] 530203', NULL, '[9B7S-B] 540203', NULL, NULL, '2022-09-10 13:19:47', '2022-09-11 22:57:12'),
(4, 'Tuesday', 10012, 'SAA', '[11B3S-A] 520205', NULL, '[9B7S-B] 540203', '[10B5S-A] 530203', '[10B5S-A] 530204-SL', NULL, '2022-09-11 22:58:32', '2022-09-11 22:58:32'),
(5, 'Wednesday', 10012, 'SAA', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 13:37:20', '2022-09-17 13:37:20'),
(6, 'Thursday', 10012, 'SAA', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 13:37:31', '2022-09-17 13:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `g_id` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `roll`, `t_id`, `g_id`, `password`, `email_verified_at`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Reahana', 0, 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$pUA7tqaGtDjucFjqn3Qr9.TA7D7tftxVz6qIRJFJXaUWHgNRI5LR.', NULL, NULL, NULL, 'uMkEB15hud2mrGqFWn1TFkic0crdCjqpMHIsXW8maktIUzSTbrLvO17YmNK9', NULL, NULL, '2022-02-04 10:14:37', '2022-02-04 10:14:37'),
(9, 'Kabel uddin', 2, NULL, NULL, 10006, NULL, '$2y$10$lZLPOyDikVBEp9siYQeG8.fACQP4PRkMe66upEZ1A1RfjdY0ZguYC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 09:12:26', '2022-09-12 11:43:31'),
(10, 'S.k.Mashukul Islam', 1, NULL, 1019112, NULL, NULL, '$2y$10$o/CKu9J16XX0QTffbEe3Uuu4D8XFVnQLgFxjn4/ov2oLBaRgAbgxq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 09:44:15', '2022-09-19 14:55:39'),
(11, 'Md Hasan', 2, NULL, NULL, 10014, NULL, '$2y$10$fWGnJ9jiGEP5iTjMr/.8KuVk1WtoK4yBHn8thH1ym.fgMAKNyXk3q', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-05 23:29:14', '2022-07-05 23:29:14'),
(13, 'Md. Abdul Hadi', 2, NULL, NULL, 10001, NULL, '$2y$10$/h.TMP6d2sM0w67pld8PJORlZPyCm0LVPJwJdTI0z36gCrp4KMT3G', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 00:26:59', '2022-07-06 00:26:59'),
(14, 'Zayed', 1, NULL, 9181017, NULL, NULL, '$2y$10$.kIdLxEwz5qSEfPzXA3nb.1ebIpPXPOtgpjXrOOygNEXKdk6WHGv.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 12:01:21', '2022-07-06 12:01:21'),
(15, 'Riffat Ara Puspo', 1, NULL, 1019174, NULL, NULL, '$2y$10$/kFgMKSbgkm9qMVL1p8BC.6mKAKO96u5bZAW3COJgHMkkMyw9TM9u', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 07:50:33', '2022-07-26 07:50:33'),
(16, 'Mahmuda Akter', 1, NULL, 2101041, NULL, NULL, '$2y$10$nc1EPZHfw/mpd1DERRGnL.jTkD0jN/lie85V2wEqKG/aLF4Y8yYJq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 12:22:49', '2022-07-26 12:22:49'),
(17, 'Shaiyara Joty', 1, NULL, 1120152, NULL, NULL, '$2y$10$WYajmgr4lvvp.jvscpZnke5bFNZhP9QcX4SR1dh5xMZQae36mus/O', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 08:05:50', '2022-07-27 08:05:50'),
(18, 'Md Ashraful Islam', 1, NULL, 1019149, NULL, NULL, '$2y$10$Su0.Z8b97iQLnHW73vclyeod42QCgAogqb2tKUhJ9UzhWnNw2hVcK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 22:28:25', '2022-07-27 22:28:25'),
(19, 'Amanda', 0, 'admin@admin.com', NULL, NULL, NULL, '$2y$10$5x86w7UlUP.lCWkf5.skRO12ldgVirrEmgzo75qkjY3McLRqesJh6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 22:36:11', '2022-09-19 14:54:12'),
(20, 'Md. Aminul Haque', 2, NULL, NULL, 10002, NULL, '$2y$10$0F2y/oacg4hdLoFGUx9xIuztzI4HEiArwq2WM7B21mC2flsw6tAhG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 22:38:01', '2022-07-27 22:38:01'),
(21, 'Md. Khayruzzaman', 2, NULL, NULL, 10005, NULL, '$2y$10$8xZddXCY8pFAEpsUjazpPuHeV4L6/ICV0ys0nOgTf5Co5TLhYBQDu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 23:23:50', '2022-07-27 23:23:50'),
(22, 'Md. Mokhlesur Rahman', 2, NULL, NULL, 10004, NULL, '$2y$10$jMHijVtnHR1AwX5du.tzMeqjZvf9ObuOYxxI.y3ENMyVqP1FOK2u6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-28 00:03:42', '2022-07-28 00:03:42'),
(23, 'Fajana Haque', 2, NULL, NULL, 10007, NULL, '$2y$10$/xZRSTmo1tHSSClbkujBcOHEKQSQPeYZExwtnYVom74woSrVq1/Hy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-28 00:21:26', '2022-07-28 00:21:26'),
(24, 'Mina', 1, NULL, 9181001, NULL, NULL, '$2y$10$3fhVhSiJg0SQZ7KNDPCLqu.WLr.TvH6nHyD4W9/J2b0PXQGCirKfq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-28 00:22:31', '2022-07-28 00:22:31'),
(26, 'Saud Al Abedin', 2, NULL, NULL, 10012, NULL, '$2y$10$2RTX8AmzmQH4SIu4dSb3q.lj7O4mqtb0oHg2PJ8mkEOQy0snEDSrO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-28 08:17:19', '2022-09-07 09:52:33'),
(27, 'Sabekun Nahar Kuasha', 1, NULL, 1019179, NULL, NULL, '$2y$10$bbeukl3Qj9LSzys8z4sa8OjqEKKMZkrcb54ctGROEVlaJ5lHljMpe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-31 01:25:09', '2022-07-31 01:25:09'),
(28, 'Shanjida Rahman Maria', 1, NULL, 9181007, NULL, NULL, '$2y$10$SPPD/jEDSH0sMwOQ0xLbKuniII9Hd2u803CP3sCPEkYp.1QfTUI/S', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-01 00:41:24', '2022-08-01 00:41:24'),
(29, 'Fahad', 1, NULL, 2101001, NULL, NULL, '$2y$10$GBZyqt9364X06GpgkgdTUOXtsXSN/9BGCapvliUL8YmUn59ExEj56', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-01 11:28:22', '2022-08-01 11:28:22'),
(30, 'Sharmin Akhter', 3, NULL, NULL, NULL, 11001, '$2y$10$PRnu/6Vo9IS/AIilxE0ZsewBSTd9HmZcpPZY4veCNsSHX3OK4ziDy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-25 22:41:14', '2022-08-25 22:41:14'),
(31, 'Shovon Armaan', 3, NULL, NULL, NULL, 11002, '$2y$10$ak2YzJmmSdNawayiwNgWdunD3OKQTl5Gpn4J/2Op6Xjytgg7g/.0O', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-26 00:38:23', '2022-09-17 13:26:32'),
(32, 'Rani', 1, NULL, 2101091, NULL, NULL, '$2y$10$1Bup9DTDPi8MBUMKnBPg3ekBkgKLHMl3ViAzcn6Tq2h3mduwoQ9re', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-26 05:44:12', '2022-08-26 05:44:12'),
(33, 'Shahid', 1, NULL, 1120101, NULL, NULL, '$2y$10$GyE2hEKDphbp4xVN31dg0eMAJTGX0F24FpxjRWLviz19xVwnyVGte', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-26 05:45:03', '2022-08-26 05:45:03'),
(34, 'Diya', 1, NULL, 9181051, NULL, NULL, '$2y$10$tfwxSBeSUr9VgbDhkmVf2OgAXZRZr4SaulbozJEHAT5j8oAGRVh6e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-26 05:46:02', '2022-08-26 05:46:02'),
(35, 'Amit', 1, NULL, 9181091, NULL, NULL, '$2y$10$KdoqTZ1cz5HtR9hW9ke5POBX3a65dteakHYckmuNAVXNx1XAPR5km', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-26 05:48:35', '2022-08-26 05:48:35'),
(36, 'AB Siddik', 1, NULL, 9181061, NULL, NULL, '$2y$10$JSZ4P/J9wkhDTIz6.wetfOs0rqlgpdStqbOfkT/HEOOQwptlZx5JK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-03 23:25:31', '2022-09-03 23:25:31'),
(37, 'Shakhawat Srabon', 1, NULL, 1019126, NULL, NULL, '$2y$10$Vt/fMyBasyKxOp12H7qe6OXU9TGj4in7EKyzvjTBl3siQuxBfdA2W', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 00:16:57', '2022-09-04 00:16:57'),
(40, 'Shaila Rahman', 2, NULL, NULL, 10008, NULL, '$2y$10$J6lkVHqPHnqN.3zFFnP2.OeaTqPVemnh/SwfCvekFeDqsivfMN4v6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-16 08:39:54', '2022-09-16 08:39:54'),
(46, 'Subha', 1, NULL, 9181002, NULL, NULL, '$2y$10$QRHPyLcoDiIZ.BsBuO9KFuPLxCb2JvXioHy8eiwQ38iqUiZQ5PF.a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 08:12:10', '2022-09-17 08:12:10'),
(49, 'Md Shamim Hossen', 2, NULL, NULL, 10003, NULL, '$2y$10$yN4pM91UuTLYFqePeObxm.TpysEaqrxNcW4yRE7i6YFpj0ifO7Y/G', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 08:23:27', '2022-09-17 08:23:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donors_t_id_unique` (`donor_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guide_teachers`
--
ALTER TABLE `guide_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incourses`
--
ALTER TABLE `incourses`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_routines`
--
ALTER TABLE `teacher_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD UNIQUE KEY `t_id` (`t_id`),
  ADD UNIQUE KEY `g_id` (`g_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide_teachers`
--
ALTER TABLE `guide_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `incourses`
--
ALTER TABLE `incourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teacher_routines`
--
ALTER TABLE `teacher_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
