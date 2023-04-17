-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emailsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `schood_id` int(11) NOT NULL,
  `district` varchar(100) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `personal_email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '(not yet defined)',
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `schood_id`, `district`, `firstname`, `middlename`, `lastname`, `status`, `advice`, `email`, `personal_email`, `phone_number`, `password`, `school_name`) VALUES
(2, 0, '', 'john', 'doe', 'doe', 'approved', 'uploads/aerox_gray_standard-min.webp', 'doe@email.com', '', '', '(not yet defined)', ''),
(4, 0, '', 'john', 'john', 'n', '', 'uploads/Screenshot 2021-12-28 083250.png', 'n@e.com', '', '', '(not yet defined)', ''),
(8, 0, '', 'qw', 'qw', 'qw', '', 'uploads/Provident Loan Amort Table.png', '', '', '', '(not yet defined)', ''),
(10, 0, '', 'ff', 'ff', 'fff', 'approved', 'uploads/Provident Loan Amort Table.png', 'f@e.com', '', '', '(not yet defined)', ''),
(11, 0, '', 'qwe', 'qwe', 'qwe', 'pending', 'uploads/Screenshot 2021-12-28 083250.png', 'qwe@email.com', '', '', '(not yet defined)', ''),
(12, 0, '', 'haha', 'haha', 'haha', 'approved', 'uploads/Provident Loan Amort Table.png', 'haha@email.com', '', '', '(not yet defined)', ''),
(14, 0, '', 'er', 'er', 'er', 'approved', 'uploads/Screenshot 2022-03-18 095214.png', 'er@email.com', '', '', '(not yet defined)', ''),
(16, 0, '', 'james', 'sun', 'bond', 'pending', 'uploads/Screenshot 2021-12-28 083754.png', 'james@email.com', '', '', '(not yet defined)', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(2, 'bon', 'bon1234', 'bon kenneth'),
(3, 'von', '1234', 'jhayvon'),
(4, 'avi', '1234', 'avelyn'),
(5, 'jm', '1234', 'jm');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `school_id` varchar(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `school_head` varchar(255) NOT NULL,
  `unit_section` varchar(100) NOT NULL,
  `employee_number` varchar(100) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `personal_email` varchar(255) NOT NULL,
  `deped_email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `request` varchar(100) NOT NULL,
  `division_transfer` varchar(255) NOT NULL,
  `appointment` varchar(255) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `school_id`, `school_name`, `district`, `school_head`, `unit_section`, `employee_number`, `firstname`, `middlename`, `lastname`, `personal_email`, `deped_email`, `password`, `phone_number`, `request`, `division_transfer`, `appointment`, `approved_by`, `status`, `created_at`, `updated_at`) VALUES
(4, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q1234', 'q', 'create', '', '../uploads/received_517907206298016.png', 'von', 'approved', '2022-11-10 00:19:43', '2022-11-10 00:34:16'),
(5, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q1234', 'q', 'create', '', '../uploads/Screenshot 2021-12-28 083443.png', 'von', 'approved', '2022-11-10 00:21:28', '2022-11-10 00:44:44'),
(6, '123', 'qq', 'qeee', 'eee', 'eee', 'eee', 'eee', 'eee', 'eee', 'ee', 'e', 'eee1234', '323213123', 'create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'von', 'approved', '2022-11-10 00:47:14', '2022-11-15 03:43:11'),
(7, 'xxx', 'xxx', 'xx', 'xxx', 'xx', 'xx', 'xx', 'x', 'x', 'x', 'x', 'x1234', 'x', 'create', '', '../uploads/Screenshot 2021-12-28 083754.png', 'von', 'approved', '2022-11-17 01:27:57', '2022-11-21 02:46:10'),
(8, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11234', '1', 'delete', '', '../uploads/received_517907206298016.png', 'von', 'approved', '2022-11-21 02:21:31', '2022-11-21 08:42:16'),
(9, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', 'von', 'approved', '2022-11-21 03:59:22', '2022-11-21 08:42:36'),
(10, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', 'von', 'approved', '2022-11-21 03:59:51', '2022-11-21 08:42:37'),
(11, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', 'bon', 'Approved', '2022-11-21 04:00:12', '2023-03-17 03:36:38'),
(12, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', 'bon', 'Approved', '2022-11-21 04:00:14', '2023-03-17 03:42:16'),
(13, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:18', '2022-11-21 04:00:18'),
(14, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:23', '2022-11-21 04:00:23'),
(15, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:27', '2022-11-21 04:00:27'),
(16, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:32', '2022-11-21 04:00:32'),
(17, 'zz', 'zz', 'Alaminos', 'zz', 'zz', 'zz', 'zz', 'zz', 'zz', 'zz@zz', '', 'zz1234', 'zz', 'Create', '', '../uploads/Screenshot 2021-12-28 083321.png', 'von', 'approved', '2022-11-21 07:02:32', '2022-11-21 08:42:41'),
(18, 'xx', 'xx', 'Alaminos', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx@xx', 'N/A', 'xx1234', 'xx', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'bon', 'Approved', '2022-11-21 07:06:04', '2023-03-17 03:38:04'),
(19, 'cc', 'cc', 'Alaminos', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc@cc', 'N/A', 'cc1234', 'cc', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:09:48', '2022-11-21 07:09:48'),
(20, 'cc', 'cc', 'Alaminos', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc@cc', 'N/A', 'cc1234', 'cc', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'bon', 'Approved', '2022-11-21 07:12:46', '2023-03-17 04:46:58'),
(21, 'cc', 'cc', 'Alaminos', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc@cc', 'N/A', 'cc1234', 'cc', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'bon', 'Approved', '2022-11-21 07:17:50', '2023-03-17 04:46:37'),
(22, 'za', 'za', 'Alaminos', 'az', 'az', 'zaz', 'za', 'azaz', 'za', 'a@z', 'N/A', 'za1234', 'z', 'Create', '', '../uploads/Screenshot 2022-03-18 095214.png', 'bon', 'Approved', '2022-11-21 07:18:13', '2023-03-15 07:55:01'),
(23, 'ddd', 'ddd', 'Alaminos', 'dd', 'd', 'd', 'dd', 'd', 'd', 'd@dd', 'N/A', 'd1234', 'dd', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'bon', 'Approved', '2022-11-21 07:19:48', '2023-03-17 04:44:39'),
(24, 't', 't', 'Alaminos', 's', 'd', 'at', 'a', 'ds', 'ta', 'a@as', 'N/A', 'ta1234', 's', 'Create', '', '../uploads/Screenshot 2022-05-20 162121.png', 'bon', 'Approved', '2022-11-21 07:21:47', '2023-03-17 03:37:54'),
(25, 'g', 'g', 'Alaminos', 'g', 'g', 'g', 'g', 'g', 'g', 'g@g', 'N/A', 'g1234', 'g', 'Create', '', '../uploads/Screenshot 2022-05-20 162121.png', 'bon', 'Approved', '2022-11-21 07:23:48', '2023-03-17 03:41:49'),
(26, 'tyty', 'yt', 'Alaminos', 'yt', 'tyyt', 'ty', 'yt', 'yt', 'yt', 'zz@zz', 'N/A', 'yt1234', 'yt', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'bon', 'Approved', '2022-11-21 07:38:54', '2023-03-17 03:40:56'),
(27, '123', 'asdfghkqwe', 'Alaminos', 'wws', '12d12', '00000', 'scaasd', 'dasdasd', 'asdasda', 'qqqqq2@qqqqq', 'N/A', 'asdasda1234', '1223312', 'Create', '', '../uploads/Screenshot 2022-03-18 095154.png', 'bon', 'Approved', '2022-11-21 07:48:07', '2023-03-17 03:42:56'),
(28, 'a', 'a', 'Alaminos', 'a', 'a', 'a', 'a', 'a', 'a', 'a@a', 'N/A', 'a1234', 'a', 'Create', '', '../uploads/Screenshot 2022-05-20 162121.png', 'bon', 'Approved', '2022-11-21 08:38:19', '2023-03-17 03:38:14'),
(29, '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '', '11111111111234', '1111111111', 'create', '', '../uploads/README.md', 'jm', 'approved', '2022-12-13 08:00:07', '2022-12-13 08:00:15'),
(30, 'asdas', 'asd', 'Alaminos', 'asda', 'asda', 'd', 'd', 'sd', 'as', 'aaaasd@asda', 'N/A', 'as1234', 'asdas', 'Create', '', '../uploads/README.md', 'bon', 'Approved', '2022-12-15 07:42:33', '2023-03-17 03:38:19'),
(31, '521289', 'Majada Senio High School', 'Pagsanjan', 'Ms. G', 'Records', '789658', 'Jose', 'P.', 'Rizal', 'xxxxx@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'create', '', '../uploads/315111720_3335097716819324_9200922665417243786_n.png', 'bon', 'approved', '2023-03-15 06:10:50', '2023-03-15 06:19:04'),
(32, '674967', 'Majada Senio High School', 'Calauan', 'Ms. G', 'Records', '1111111111', 'Jose', 'P.', 'Rizal', 'aaaasd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09568346781', 'create', '', '../uploads/dts 4.png', 'bon', 'approved', '2023-03-15 06:12:19', '2023-03-15 06:13:55'),
(34, '1111111111', 'Majada Senior High School', 'Pila', 'Ms. Sarah G.', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'change of status', '', '../uploads/2023-01-10_01-36-49.png', 'bon', 'Approved', '2023-03-15 07:37:22', '2023-03-17 04:43:52'),
(35, '7341262', 'Los banos Nation High School', 'Los baNos', 'Mr. Bean', 'SDS', '747694', 'Jose', 'P.', 'Rizal', 'xxxxxvasdv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '0987865574433', 'Suspend', '', '../uploads/2023-01-10_01-36-49.png', 'bon', 'Approved', '2023-03-15 07:41:30', '2023-03-17 04:43:13'),
(36, '6939582', 'Puypuy High School', 'Calauan', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'asd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Create', '', '../uploads/Trackit.mp4', 'bon', 'Approved', '2023-03-15 07:43:50', '2023-03-15 07:53:54'),
(37, '758961', 'Los Banos Nation High SChool', 'Pakil', 'Ms. LEE', 'Section 12', '673291', 'Jose', 'P.', 'Rizal', 'xxx@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09987654321', 'Create', '', '../uploads/dts 4.png', 'bon', 'Approved', '2023-03-16 01:06:10', '2023-03-16 05:14:21'),
(38, '746780', 'South Hill School, INC.', 'Los baNos', 'Ms. I', 'Section 44', '699043567', 'Jose', 'P.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09356389230', 'Create', '', '../uploads/qrcode_chrome.png', 'bon', 'Approved', '2023-03-16 06:05:49', '2023-03-17 03:41:25'),
(39, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:06:57', '2023-03-17 04:39:12'),
(40, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:00', '2023-03-17 04:38:12'),
(41, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:01', '2023-03-17 04:37:10'),
(42, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:01', '2023-03-17 03:42:08'),
(43, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:01', '2023-03-17 04:36:43'),
(44, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:02', '2023-03-17 04:35:34'),
(45, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:02', '2023-03-17 03:42:50'),
(46, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:02', '2023-03-17 03:42:33'),
(47, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:03', '2023-03-17 03:42:03'),
(48, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:03', '2023-03-17 03:41:39'),
(49, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:04', '2023-03-17 03:40:46'),
(50, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-16 08:07:04', '2023-03-17 03:36:31'),
(51, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:12', '2023-03-17 03:40:30'),
(52, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:16', '2023-03-17 03:39:31'),
(53, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:16', '2023-03-17 03:38:47'),
(54, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:16', '2023-03-17 03:37:11'),
(55, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:16', '2023-03-17 03:36:23'),
(56, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:17', '2023-03-17 03:28:38'),
(57, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:17', '2023-03-17 03:25:04'),
(58, '2346214', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxxxqweqvv@gmail', '', 'Rizal1234', '09887654325', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:07:17', '2023-03-17 02:48:04'),
(59, '1111111111', 'Puypuy High School', 'Los baNos', 'Ms. LEE', '1111111111', '673291', 'Jose', 'P.', 'Rizal', 'xxxxxvqqv@gmail', '', 'Rizal1234', '09356389230', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:09:01', '2023-03-16 08:09:38'),
(60, '521289', 'Puypuy High School', 'Majayjay', 'asda', 'Records', '789658', 'Jose', 'P.', 'Rizal', 'asqqd@gmail.com', '', 'Rizal1234', '09074582572', 'Create', '', '../uploads/Deped Laguna (1).csv', 'bon', 'Approved', '2023-03-16 08:16:36', '2023-03-17 02:59:14'),
(61, '1111111111', 'Los Banos Nation High SChool', 'Los baNos', 'Ms. L', 'Records', '673291', 'Jose', 'P.', 'Rizal', 'aqqqqaaasd@asda', '', 'Rizal1234', '09435761186', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-16 08:18:12', '2023-03-17 03:11:37'),
(62, '75896111', 'Los Banos Nation High SChool', 'Los baNos', 'Ms. G', 'Section 12', '673291', 'Jose', 'P.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09356389230', 'Create', '', '../uploads/Pending - Deped Laguna.xlsx', 'bon', 'Approved', '2023-03-16 08:28:14', '2023-03-17 02:49:49'),
(63, '521289', 'Puypuy High School', 'Kalayaan', 'Ms. Sarah G.', 'Records', '673291', 'Jose', 'P.', 'Rizal', 'aaaasd@asda.com', '', 'Rizal1234', '1512351', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-16 08:31:59', '2023-03-17 02:49:22'),
(64, '758961', 'Majada Senior High School', 'Lumban', 'Ms. Sarah G.', 'Section 12', '789658', 'Jose', 'P.', 'Rizal', 'aaaaaasd@asda.com', '', 'Rizal1234', '094357611862', 'Create', '', '../uploads/Deped Laguna (1).csv', 'bon', 'Approved', '2023-03-16 08:41:28', '2023-03-17 02:49:38'),
(65, '521289', 'Los Banos Nation High SChool', 'Bay', 'Ms. LEE', 'Records', '673291', 'Jose', 'P.', 'Rizal', 'xxxx234xvvq@gmail.com', '', 'Rizal1234', '09356389230', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-16 08:42:30', '2023-03-17 02:47:29'),
(66, '758961', 'aaaaaa', 'Nagcarlan', 'aaaa', 'aaaa', '111', '1111111111', 'P.', 'Rizal', 'xqqxxxxvv@gmail', '', 'Rizal1234', '09987654321', 'Create', '', '../uploads/image (7).jpg', 'bon', 'Approved', '2023-03-16 08:45:15', '2023-03-17 02:46:06'),
(67, '69395827', 'Bay Elementary School', 'Bay', 'Mr. Law', 'Food', '857820278', 'Jose', 'P.', 'Rizal', 'xxxx2324xvv@gmail', '', 'Rizal1234', '09074582572', 'Suspend', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-16 08:54:01', '2023-03-17 02:45:44'),
(72, '7589616', 'Majada Senior High School', 'Bay', 'Ms. L', 'Records', '67329135', 'Jose', 'P.', 'Rizal', 'xxxxxvvllll@gmail', '', 'Rizal1234', '09356389230', 'Create', '', '../uploads/Trackit.mp4', 'bon', 'Approved', '2023-03-17 01:59:28', '2023-03-17 02:41:17'),
(73, '7589616', 'Majada Senior High School', 'Bay', 'Ms. L', 'Records', '67329135', 'Jose', 'P.', 'Rizal', 'xxxxxvvllll@gmail', '', 'Rizal1234', '09356389230', 'Create', '', '../uploads/Trackit.mp4', 'bon', 'Approved', '2023-03-17 01:59:40', '2023-03-17 02:41:11'),
(76, '52128976', 'Tabing Ilog National High School', 'Los baNos', '109841', 'Accounting', '968472897', 'Venabentura', 'L.', 'Rizal', 'asqqd@gmail.com', '', 'Rizal1234', '09074582572', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-17 02:06:24', '2023-03-17 02:37:42'),
(77, '521289123', 'Puypuy High School', 'Pagsanjan', 'Ms. LEE', 'Records', '968472', 'Venabentura', 'L.', 'de Castro', 'as7476qqd@gmail.com', '', 'de Castro1234', '09435761186', 'Create', '', '../uploads/Deped Laguna.csv', 'bon', 'Approved', '2023-03-17 02:09:04', '2023-03-17 02:36:59'),
(78, '521289123', 'Puypuy High School', 'Pagsanjan', 'Ms. LEE', 'Records', '968472', 'Venabentura', 'L.', 'de Castro', 'as7476qqd@gmail.com', '', 'de Castro1234', '09435761186', 'Create', '', '../uploads/Deped Laguna.csv', 'bon', 'Approved', '2023-03-17 02:09:17', '2023-03-17 02:32:25'),
(79, '521289123', 'Puypuy High School', 'Pagsanjan', 'Ms. LEE', 'Records', '968472', 'Venabentura', 'L.', 'de Castro', 'as7476qqd@gmail.com', '', 'de Castro1234', '09435761186', 'Create', '', '../uploads/Deped Laguna.csv', 'bon', 'Approved', '2023-03-17 02:09:45', '2023-03-17 02:35:57'),
(80, '521289', 'Puypuy High School', 'Famy', 'Ms. LEE', 'Records', '78965833', 'Jose', 'L.', 'de Castro', 'xxxx234x2vv@gmail', '', 'de Castro1234', '09987654321', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-17 02:10:15', '2023-03-17 02:34:25'),
(81, '521289', 'Puypuy High School', 'Famy', 'Ms. LEE', 'Records', '78965833', 'Jose', 'L.', 'de Castro', 'xxxx234x2vv@gmail', '', 'de Castro1234', '09987654321', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-17 02:10:18', '2023-03-17 02:34:14'),
(82, '521289', 'Puypuy High School', 'Famy', 'Ms. LEE', 'Records', '78965833', 'Jose', 'L.', 'de Castro', 'xxxx234x2vv@gmail', '', 'de Castro1234', '09987654321', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-17 02:10:23', '2023-03-17 02:33:31'),
(83, '521289', 'Majada Senior High School', 'Alaminos', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'de Castro', 'xxxx2324xvv@gmail', '', 'de Castro1234', '09356389230', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-17 02:11:26', '2023-03-17 02:32:17'),
(84, '521289', 'Majada Senior High School', 'Alaminos', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'de Castro', 'xxxx2324xvv@gmail', '', 'de Castro1234', '09356389230', 'Create', '', '../uploads/Deped Laguna.pdf', 'bon', 'Approved', '2023-03-17 02:11:33', '2023-03-17 02:30:59'),
(85, '521289', 'Puypuy High School', 'Calauan', 'Ms. LEE', 'Section 121', '968472', 'Venabentura', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09987654321', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-17 02:17:14', '2023-03-17 02:31:45'),
(86, '521289', 'Puypuy High School', 'Calauan', 'Ms. LEE', 'Section 121', '968472', 'Venabentura', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09987654321', 'Create', '', '../uploads/Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-17 02:17:17', '2023-03-17 02:30:43'),
(87, '521289', 'Puypuy High School', 'Pila', 'Ms. LEE', 'Records', '96847222', 'Jose', 'P.', 'Rizal', 'xxxx234xvv@gmail', '', 'Rizal1234', '09435761186', 'Create', '', '../uploads/Pending - Deped Laguna.csv', 'bon', 'Approved', '2023-03-17 02:17:53', '2023-03-17 02:30:39'),
(88, '758961', 'Majada Senior High School', 'Kalayaan', 'Ms. Sarah G.', 'Section 12', '96847234', 'Venabentura', 'L.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '090745825723', 'Delete', '', '../uploads/Deped Laguna (1).pdf', '', 'pending', '2023-03-17 06:20:28', '2023-03-17 06:20:28'),
(89, '1111111111', 'Los Banos Nation High SChool', 'Los baNos', 'Ms. Sarah G.', 'Records', '1111111111', 'Venabentura', 'P.', 'Rizal', 'x33xx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09435761186', 'Suspend', 'Accounting', '../uploads/personVector.jpeg', '', 'pending', '2023-03-17 06:23:50', '2023-03-17 06:23:50'),
(90, '521289', 'Majada Senior High School', 'Famy', 'Ms. LEE', 'Records', '78965823', 'Jose', 'P.', 'Rizal', 'asqqd@gmail.com', '', 'Rizal1234', '09435761186', 'Create', 'Accounting', '../uploads/Pending - Deped Laguna.xlsx', '', 'pending', '2023-03-17 06:30:39', '2023-03-17 06:30:39'),
(91, '521289', 'Majada Senior High School', 'Famy', 'Ms. LEE', 'Records', '78965823', 'Jose', 'P.', 'Rizal', 'asqqd@gmail.com', '', 'Rizal1234', '09435761186', 'Create', 'Accounting', '../uploads/Deped Laguna (1).pdf', '', 'pending', '2023-03-17 06:30:55', '2023-03-17 06:30:55'),
(92, '521289', 'Puypuy High School', 'Bay', 'Ms. G', 'Records', '673291', 'Jose', 'L.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09435761186', 'Reset Password', 'Accounting', '../uploads/001.pdf', '', 'pending', '2023-03-17 06:33:03', '2023-03-17 06:33:03'),
(93, '1111111111', 'Puypuy High School', 'Bay', 'Ms. LEE', 'Accounting', '968472', 'Jose', 'P.', 'Rizal', 'asqq784543d@gmail.com', '', 'Rizal1234', '0943576118654234', 'Create', 'Records', '../uploads/deped.png', '', 'pending', '2023-03-17 06:35:27', '2023-03-17 06:35:27'),
(94, '521289', 'Majada Senior High School', 'Bay', 'Ms. Sarah G.', 'Section 12', '673291', 'Venabentura', 'P.', 'de Castro', 'xxx23x234xvv@gmail', '', 'de Castro1234', '09074582572', 'Create', 'Accounting', '../uploads/Pending - Deped Laguna (1).xlsx', '', 'pending', '2023-03-17 06:38:26', '2023-03-17 06:38:26'),
(95, '521289', 'Puypuy High School', 'Bay', 'Ms. LEE', 'Records', '673291', 'Jose', 'L.', 'Rizal', '42xxxx2324xvv@gmail', '', 'Rizal1234', '09356389230', 'Create', 'Accounting', '../uploads/2023-01-10_01-36-49.png', '', 'pending', '2023-03-17 06:51:18', '2023-03-17 06:51:18'),
(96, '521289', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'L.', 'de Castro', 'xxxx234xvv@gmail', '', 'de Castro1234', '09435761186', 'Create', 'Records', '../uploads/2023-01-10_01-36-49.png', '', 'pending', '2023-03-17 07:16:55', '2023-03-17 07:16:55'),
(97, '521289', 'Puypuy High School', 'Calauan', 'Ms. Sarah G.', 'Section 12', '968472', 'Jose', 'P.', 'Rizal', 'asqqd@gmail.com', '', 'Rizal1234', '09987654321', 'Create', 'Accounting', '../uploads/Pending - Deped Laguna.csv', '', 'pending', '2023-03-17 07:19:42', '2023-03-17 07:19:42'),
(98, '521289', 'Puypuy High School', 'Calauan', 'Ms. Sarah G.', 'Records', '673291', 'Jose', 'P.', 'Rizal', 'aaa12asd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09987654321', 'Delete', 'Records 2', '../uploads/Trackit.mp4', '', 'pending', '2023-03-17 07:30:21', '2023-03-17 07:30:21'),
(99, '1111111111', 'Puypuy High School', 'Calauan', 'Ms. Sarah G.', 'Section 12', '789658', 'Jose', 'L.', 'Rizal', 'xxxx234xvv@gmail', '', 'Rizal1234', '09435761186', 'Create', 'Accounting', '../uploads/Pending - Deped Laguna.xlsx', '', 'pending', '2023-03-17 07:31:55', '2023-03-17 07:31:55'),
(100, '1111111111', 'Puypuy High School', 'Calauan', 'Ms. Sarah G.', 'Records', '673291234', 'Jose', 'P.', 'Rizal', 'xxxx234xvv@gmail', '', 'Rizal1234', '09435761186', 'Create', 'Records', '../uploads/Deped Laguna.csv', '', 'pending', '2023-03-17 07:33:08', '2023-03-17 07:33:08'),
(101, '758961', 'Puypuy High School', 'Bay', 'Ms. LEE', 'Section 12', '789658', 'Jose', 'sd', '1111111111', 'asqqd312323@gmail.com', '', '11111111111234', '090745825722313', 'Create', 'Accounting', '../uploads/personVector.jpeg', '', 'pending', '2023-03-17 07:35:44', '2023-03-17 07:35:44'),
(102, '521289', 'Puypuy High School', 'Bay', 'Ms. Sarah G.', 'Section 12', '673291', 'Venabentura', 'L.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', 'Accounting', '../uploads/Detection.exe', '', 'pending', '2023-03-17 07:37:33', '2023-03-17 07:37:33'),
(103, '521289', 'Majada Senior High School', 'Calauan', 'Ms. LEE', '213', '789658123123', 'Venabentura', 'L.', 'Rizal', 'xxxx2324xvv@gmail', '', 'Rizal1234', '09987654321', 'Create', 'Accounting', '../uploads/315313501_5588509281235532_7041434269683453009_n.jpg', 'bon', 'Approved', '2023-03-17 08:08:11', '2023-03-17 09:28:29'),
(104, '758961', 'Puypuy High School', 'Kalayaan', 'Ms. Sarah G.', 'Section 12', '673291', 'Venabentura', 'L.', 'de Castro', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09356389230', 'Delete', 'Records', '../uploads/test.pdf', '', 'pending', '2023-03-17 08:20:52', '2023-03-17 08:20:52'),
(105, '521289', 'Los Banos Nation High SChool', 'Pangil', 'Ms. Sarah G.', 'Accounting', '968472', 'Venabentura', 'L.', 'Rizal', 'asqqd3245@gmail.com', '', 'Rizal1234', '09356389230', 'Create', 'Accounting', '../uploads/DataTables example - Format output data - export options.xlsx', 'bon', 'Approved', '2023-03-17 08:22:32', '2023-03-17 08:59:22'),
(106, '1111111111', 'Puypuy High School', 'Bay', 'Ms. Sarah G.', 'Section 12', '789658', 'Venabentura', 'P.', 'de Castro', 'xxxx2324xvv@gmail', '', 'de Castro1234', '09356389230', 'Create', 'Accounting', '../uploads/Pending - Deped Laguna (3).xlsx', '', 'pending', '2023-03-17 08:26:26', '2023-03-17 08:26:26'),
(107, '521289', 'Majada Senior High School', 'Calauan', 'Ms. Sarah G.', 'Records', '789658', 'Jose', 'L.', 'de Castro', 'asqqd@gmail.com', 'N/A', 'de Castro1234', '09435761186', 'Create', '', '../uploads/Deped Laguna.csv', 'bon', 'Approved', '2023-03-20 01:18:11', '2023-03-20 06:07:57'),
(108, '555555', 'Los Banos Nation High SChool', 'Los baNos', 'Ms. LEE', 'Section 12', '666666', 'A', 'A', 'A', 'asqqd@gmail.com', '', 'A1234', '09074582572', 'Create', '', '../uploads/', '', 'pending', '2023-03-20 02:02:17', '2023-03-20 02:02:17'),
(109, '666666', 'Majada Senior High School', 'Los baNos', 'Ms. Sarah G.', 'Accounting', '7777777', 'Venabentura', 'P.', 'Rizal', 'xxxx235674xvv@gmail', 'N/A', 'Rizal1234', '09074582572', 'Create', 'N/A', '../uploads/', '', 'pending', '2023-03-20 05:28:37', '2023-03-20 05:28:37'),
(110, '1111111111', 'Puypuy High School', 'Bay', 'Ms. LEE', 'Records', '968472', '1111111111', '1111111111', '1111111111', 'xxxx235674xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '1111111111', 'Delete', '', '../uploads/', 'bon', 'Approved', '2023-03-20 07:04:12', '2023-03-20 07:17:43'),
(111, '521289', 'Majada Senior High School', 'Paete', 'Ms. LEE', 'Section 12', '7777777', 'Venabentura', 'L.', 'de Castro', 'xxxx234xvv@gmail', '', 'de Castro1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-20 07:32:16', '2023-03-20 07:32:16'),
(112, '1111111111', 'Los Banos Nation High SChool', 'Calauan', 'Ms. LEE', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 07:34:59', '2023-03-20 07:34:59'),
(113, '1111111111', 'Los Banos Nation High SChool', 'Calauan', 'Ms. LEE', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 07:39:42', '2023-03-20 07:39:42'),
(114, '1111111111', 'Los Banos Nation High SChool', 'Calauan', 'Ms. LEE', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:19:55', '2023-03-20 08:19:55'),
(115, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx22324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:23:45', '2023-03-20 08:23:45'),
(116, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx22324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:23:45', '2023-03-20 08:23:45'),
(117, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Records', '789658', 'Venabentura', 'L.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:25:01', '2023-03-20 08:25:01'),
(118, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Records', '789658', 'Venabentura', 'L.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:25:01', '2023-03-20 08:25:01'),
(119, '1111111111', 'Majada Senior High School', 'Kalayaan', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'P.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:26:00', '2023-03-20 08:26:00'),
(120, '1111111111', 'Majada Senior High School', 'Kalayaan', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'P.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:26:00', '2023-03-20 08:26:00'),
(121, '1111111111', 'Majada Senior High School', 'Kalayaan', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'P.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:26:00', '2023-03-20 08:26:00'),
(122, '521289', 'Puypuy High School', 'Calauan', 'Ms. L', 'Section 12', '673291', 'Venabentura', 'L.', 'A', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'A1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-20 08:27:52', '2023-03-20 08:27:52'),
(123, '521289', 'Puypuy High School', 'Calauan', 'Ms. L', 'Section 12', '673291', 'Venabentura', 'L.', 'A', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'A1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-20 08:27:52', '2023-03-20 08:27:52'),
(124, '666666', 'Puypuy High School', 'Bay', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'P.', 'de Castro', 'xxxx23224xvv@gmail', '', 'de Castro1234', '094357611862', 'Create', '', '../uploads/Deped Laguna.pdf', '', 'pending', '2023-03-20 08:29:55', '2023-03-20 08:29:55'),
(125, '666666', 'Puypuy High School', 'Bay', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'P.', 'de Castro', 'xxxx23224xvv@gmail', '', 'de Castro1234', '094357611862', 'Create', '', '../uploads/Deped Laguna.pdf', '', 'pending', '2023-03-20 08:29:55', '2023-03-20 08:29:55'),
(126, '666666', 'Puypuy High School', 'Bay', 'Ms. Sarah G.', 'Records', '673291', 'Venabentura', 'P.', 'de Castro', 'xxxx23224xvv@gmail', '', 'de Castro1234', '094357611862', 'Create', '', '../uploads/Deped Laguna.pdf', '', 'pending', '2023-03-20 08:29:55', '2023-03-20 08:29:55'),
(127, '8888888', 'Majada Senior High School, INC.', 'Nagcarlan', 'Ms. LEE', 'Section 12', '7777777', '1111111111', '1111111111', '1111111111', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '1111111111', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:30:52', '2023-03-20 08:30:52'),
(128, '8888888', 'Majada Senior High School, INC.', 'Nagcarlan', 'Ms. LEE', 'Section 12', '7777777', '1111111111', '1111111111', '1111111111', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '1111111111', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:30:52', '2023-03-20 08:30:52'),
(129, '1111111111', 'Puypuy High School', 'Pakil', 'Ms. LEE', 'Records', '666666', 'Deviljho', 'sd', '1111111111', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '09987654321', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:32:09', '2023-03-20 08:32:09'),
(130, '1111111111', 'Puypuy High School', 'Pakil', 'Ms. LEE', 'Records', '666666', 'Deviljho', 'sd', '1111111111', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '09987654321', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:32:09', '2023-03-20 08:32:09'),
(131, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', 'L.', 'A', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'A1234', '1111111111', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:34:44', '2023-03-20 08:34:44'),
(132, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:24', '2023-03-20 08:40:24'),
(133, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:28', '2023-03-20 08:40:28'),
(134, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:28', '2023-03-20 08:40:28'),
(135, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:28', '2023-03-20 08:40:28'),
(136, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:29', '2023-03-20 08:40:29'),
(137, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:29', '2023-03-20 08:40:29'),
(138, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:29', '2023-03-20 08:40:29'),
(139, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:29', '2023-03-20 08:40:29'),
(140, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:32', '2023-03-20 08:40:32'),
(141, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:32', '2023-03-20 08:40:32'),
(142, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:32', '2023-03-20 08:40:32'),
(143, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:32', '2023-03-20 08:40:32'),
(144, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:33', '2023-03-20 08:40:33'),
(145, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:33', '2023-03-20 08:40:33'),
(146, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:34', '2023-03-20 08:40:34'),
(147, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:34', '2023-03-20 08:40:34'),
(148, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:35', '2023-03-20 08:40:35'),
(149, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:35', '2023-03-20 08:40:35'),
(150, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:35', '2023-03-20 08:40:35'),
(151, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:40:35', '2023-03-20 08:40:35'),
(152, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:12', '2023-03-20 08:41:12'),
(153, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:13', '2023-03-20 08:41:13'),
(154, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:13', '2023-03-20 08:41:13'),
(155, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:13', '2023-03-20 08:41:13'),
(156, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:14', '2023-03-20 08:41:14'),
(157, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:14', '2023-03-20 08:41:14'),
(158, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:15', '2023-03-20 08:41:15'),
(159, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:15', '2023-03-20 08:41:15'),
(160, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:38', '2023-03-20 08:41:38'),
(161, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:38', '2023-03-20 08:41:38'),
(162, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:39', '2023-03-20 08:41:39'),
(163, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:39', '2023-03-20 08:41:39'),
(164, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:39', '2023-03-20 08:41:39'),
(165, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:39', '2023-03-20 08:41:39'),
(166, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:39', '2023-03-20 08:41:39'),
(167, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:40', '2023-03-20 08:41:40'),
(168, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:40', '2023-03-20 08:41:40'),
(169, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:40', '2023-03-20 08:41:40'),
(170, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:40', '2023-03-20 08:41:40'),
(171, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:40', '2023-03-20 08:41:40'),
(172, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:40', '2023-03-20 08:41:40'),
(173, '1111111111', 'Puypuy High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '7777777', 'Venabentura', 'P.', 'de Castro', '223asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:41:41', '2023-03-20 08:41:41'),
(174, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:42', '2023-03-20 08:44:42'),
(175, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:43', '2023-03-20 08:44:43'),
(176, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:43', '2023-03-20 08:44:43'),
(177, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:43', '2023-03-20 08:44:43'),
(178, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:44', '2023-03-20 08:44:44'),
(179, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:44', '2023-03-20 08:44:44'),
(180, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:44', '2023-03-20 08:44:44'),
(181, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:44', '2023-03-20 08:44:44'),
(182, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'L.', 'de Castro', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:44:44', '2023-03-20 08:44:44'),
(183, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', 'L.', 'A', 'xxxx2324xvv@gmail', 'N/A', 'A1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:09', '2023-03-20 08:45:09'),
(184, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', 'L.', 'A', 'xxxx2324xvv@gmail', 'N/A', 'A1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:11', '2023-03-20 08:45:11'),
(185, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', 'L.', 'A', 'xxxx2324xvv@gmail', 'N/A', 'A1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:11', '2023-03-20 08:45:11'),
(186, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', 'L.', 'A', 'xxxx2324xvv@gmail', 'N/A', 'A1234', '1111111111', 'Delete', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:11', '2023-03-20 08:45:11'),
(187, '1111111111', '1111111111', 'Pagsanjan', '1111111111', 'Records', '555555', 'Jose', 'P.', 'Rizal', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '1111111111', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:33', '2023-03-20 08:45:33'),
(188, '1111111111', '1111111111', 'Pagsanjan', '1111111111', 'Records', '555555', 'Jose', 'P.', 'Rizal', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '1111111111', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:34', '2023-03-20 08:45:34'),
(189, '1111111111', '1111111111', 'Pagsanjan', '1111111111', 'Records', '555555', 'Jose', 'P.', 'Rizal', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '1111111111', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:34', '2023-03-20 08:45:34'),
(190, '1111111111', '1111111111', 'Pagsanjan', '1111111111', 'Records', '555555', 'Jose', 'P.', 'Rizal', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '1111111111', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:35', '2023-03-20 08:45:35'),
(191, '1111111111', '1111111111', 'Pagsanjan', '1111111111', 'Records', '555555', 'Jose', 'P.', 'Rizal', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '1111111111', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-20 08:45:35', '2023-03-20 08:45:35');
INSERT INTO `request` (`id`, `school_id`, `school_name`, `district`, `school_head`, `unit_section`, `employee_number`, `firstname`, `middlename`, `lastname`, `personal_email`, `deped_email`, `password`, `phone_number`, `request`, `division_transfer`, `appointment`, `approved_by`, `status`, `created_at`, `updated_at`) VALUES
(192, '521289', 'Puypuy High School', 'Pakil', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', 'L.', 'A', 'xxxx2324xvv@gmail', '', 'A1234', '1111111111', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:47:17', '2023-03-20 08:47:17'),
(193, '521289', 'Majada Senior High School', 'Bay', 'Ms. L', 'Records', '968472', 'Venabentura', 'A', 'as', '2asqqd@gmail.com', 'deped@deped-edu.ph', 'as1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:47:37', '2023-03-20 08:47:37'),
(194, '521289', 'Majada Senior High School', 'Bay', 'Ms. L', 'Records', '968472', 'Venabentura', 'A', 'as', '2asqqd@gmail.com', 'deped@deped-edu.ph', 'as1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:47:39', '2023-03-20 08:47:39'),
(195, '521289', 'Majada Senior High School', 'Bay', 'Ms. L', 'Records', '968472', 'Venabentura', 'A', 'as', '2asqqd@gmail.com', 'deped@deped-edu.ph', 'as1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:47:39', '2023-03-20 08:47:39'),
(196, '666666', 'Los Banos Nation High SChool', 'Bay', 'Ms. LEE', 'Records', '968472', 'Deviljho', 'A.', 'de Castro', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-20 08:51:35', '2023-03-20 08:51:35'),
(197, '521289', 'Puypuy High School', 'Pakil', 'Ms. LEE', 'Section 121', '555555', 'Deviljho', 'A.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09356389230', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:52:46', '2023-03-20 08:52:46'),
(198, '521289', 'Puypuy High School', 'Pakil', 'Ms. LEE', 'Section 121', '555555', 'Deviljho', 'A.', 'Rizal', 'xxxx234xvv@gmail', '', 'Rizal1234', '09356389230', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:53:06', '2023-03-20 08:53:06'),
(199, '1111111111', 'Majada Senior High School', 'Nagcarlan', 'Ms. L', '1111111111', '968472', '1111111111', '1111111111', '1111111111', 'asqqd@gmail.com', 'deped@deped-edu.ph', '11111111111234', '1111111111', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:53:27', '2023-03-20 08:53:27'),
(200, '1111111111', 'Majada Senior High School', 'Nagcarlan', 'Ms. L', '1111111111', '968472', '1111111111', '1111111111', '1111111111', 'asqqd@gmail.com', '', '11111111111234', '1111111111', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:54:47', '2023-03-20 08:54:47'),
(201, '1111111111', 'Puypuy High School', 'Pakil', 'Ms. LEE', 'Section 12', '7777777', '1111111111', 'L.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 08:55:14', '2023-03-20 08:55:14'),
(202, '521289', 'Los Banos Nation High SChool', 'Bay', 'Ms. Sarah G.', 'Accounting', '968472', '78', 'P.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 08:56:31', '2023-03-20 08:56:31'),
(203, '758961', 'Los Banos Nation High SChool', 'Bay', 'Ms. LEE', 'Section 12', '968472', 'Venabentura', 'L.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 09:01:42', '2023-03-20 09:01:42'),
(204, '8888888', 'Puypuy High School', 'Lumban', 'Ms. Sarah G.', 'Section 12', '673291', 'Venabentura', 'A.', 'Rizal', 'xxxx23234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-20 09:04:29', '2023-03-20 09:04:29'),
(205, '1111111111', 'Majada Senior High School', 'Calauan', 'Ms. LEE', 'Records', '789658', 'Jose', 'P.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', '', '../uploads/', '', 'pending', '2023-03-20 09:10:08', '2023-03-20 09:10:08'),
(206, '521289', 'Majada Senior High School', 'Pagsanjan', 'Ms. Sarah G.', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxx2324xvv@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09987654321', 'Transfer', 'Records', '../uploads/', '', 'pending', '2023-03-20 09:11:22', '2023-03-20 09:11:22'),
(207, '521289', 'Puypuy High School', 'Calauan', 'Ms. L', 'Records', '789658', 'Venabentura', 'P.', 'Rizal', 'asqqd@gmail.com', '', 'Rizal1234', '09074582572', 'Create', '', '../uploads/', '', 'pending', '2023-03-20 09:19:58', '2023-03-20 09:19:58'),
(208, '521289', 'Majada Senior High School', 'Bay', 'Ms. LEE', 'Section 12', '968472', 'Venabentura', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09074582572', 'Create', '', '../uploads/', '', 'pending', '2023-03-20 09:21:21', '2023-03-20 09:21:21'),
(209, '521289', 'Majada Senior High School', 'Bay', 'Ms. LEE', 'Section 12', '968472', 'Venabentura', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09074582572', 'Create', '', '../uploads/', '', 'pending', '2023-03-20 09:22:33', '2023-03-20 09:22:33'),
(210, '521289', 'Puypuy High School', 'Alaminos', 'Ms. LEE', 'Section 12', '968472', 'Venabentura', 'P.', 'Rizal', 'xxxx235674xvv@gmail', '', 'Rizal1234', '09435761186', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 09:23:06', '2023-03-20 09:23:06'),
(211, '1111111111', 'Puypuy High School', 'Bay', 'Ms. LEE', 'Records', '789658', 'Venabentura', 'P.', 'de Castro', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Transfer', 'REcprds', '../uploads/', '', 'pending', '2023-03-20 09:24:50', '2023-03-20 09:24:50'),
(212, '521289', 'Puypuy High School', 'Pagsanjan', 'Ms. LEE', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxx2324xvv@gmail', '', 'Rizal1234', '09356389230', 'Create', '', '../uploads/Deped Laguna.pdf', '', 'pending', '2023-03-20 09:25:34', '2023-03-20 09:25:34'),
(213, '1111111111', 'Majada Senior High School', 'Majayjay', 'Ms. Sarah G.', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Reset Password', '', 'N/A', '', 'pending', '2023-03-20 09:27:38', '2023-03-20 09:27:38'),
(214, '1111111111', '1111111111', 'Calauan', '1111111111', 'Section 12', '968472', 'Venabentura', 'L.', 'de Castro', 'xxxx234xvv@gmail', '', 'de Castro1234', '09435761186', 'Create', '', 'N/A', '', 'pending', '2023-03-20 09:28:12', '2023-03-20 09:28:12'),
(215, '521289', 'Majada Senior High School', 'Bay', 'Ms. L', 'Section 12', '673291', 'Jose', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09435761186', 'Create', '', '../uploads/Deped Laguna.csv', '', 'pending', '2023-03-20 09:34:59', '2023-03-20 09:34:59'),
(216, '521289', 'Majada Senior High School', 'Paete', 'Ms. Sarah G.', 'Accounting', '968472', 'Jose', 'P.', 'Rizal', 'xxxx2324xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09356389230', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-20 09:40:02', '2023-03-20 09:40:02'),
(217, '521289', 'Puypuy High School', 'Calauan', 'Ms. Sarah G.', 'Records', '6567846', 'Jose', 'P.', 'Rizal', 'Axxxx2534xvv@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09987654321', 'Transfer', 'SDO', '../uploads/', '', 'pending', '2023-03-21 01:19:18', '2023-03-21 01:19:18'),
(219, '521289', '1111111111', 'Pangil', '1111111111', 'Section 12', '555555', 'A', 'A.', 'as', 'asqqd@gmail.com', '', 'as1234', '09435761186', 'Create', '', '../uploads/Pending - Deped Laguna (1).pdf', '', 'pending', '2023-03-21 02:25:03', '2023-03-21 02:25:03'),
(220, '521289', 'Puypuy High School', 'Majayjay', 'Ms. LEE', 'Section 12', '666666', 'd', 'sd', 'S', 'asqqd@gmail.com', '', 'S1234', '09435761186', 'Create', '', '../uploads/Pending - Deped Laguna (1).pdf', '', 'pending', '2023-03-21 02:27:55', '2023-03-21 02:27:55'),
(222, '666666', 'Majada Senior High School', 'Calauan', 'Ms. LEE', 'Records', '789658', 'Venabentura', 'P.', 'de Castro', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 02:47:25', '2023-03-21 02:47:25'),
(223, '521289', 'Majada Senior High School', 'Magdalena', 'Ms. LEE', 'Accounting', '968472', 'Venabentura', 'P.', 'de Castro', 'Axxxx2234xvv@gmail', '', 'de Castro1234', '09356389230', 'Create', '', '../uploads/Pending - Deped Laguna (2).csv', '', 'pending', '2023-03-21 02:53:14', '2023-03-21 02:53:14'),
(224, '521289', 'Majada Senior High School', 'Magdalena', 'Ms. LEE', 'Accounting', '968472', 'Venabentura', 'P.', 'de Castro', 'Axxxx2234xvv@gmail', '', 'de Castro1234', '09356389230', 'Create', '', '../uploads/Pending - Deped Laguna (2).csv', '', 'pending', '2023-03-21 02:53:44', '2023-03-21 02:53:44'),
(225, '666666', 'Majada Senior High School', 'Calauan', 'Ms. LEE', 'Records', '789658', 'Venabentura', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 02:54:43', '2023-03-21 02:54:43'),
(226, '1111111111', '1111111111', 'Calauan', '1111111111', 'Records', '968472', 'Venabentura', 'L.', 'de Castro', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 02:56:44', '2023-03-21 02:56:44'),
(227, '2222222', 'Majada Senior High School', 'Los baNos', 'Ms. Sarah G.', 'Records', '789658', 'Jose', 'L.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09435761186', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-21 02:58:53', '2023-03-21 02:58:53'),
(228, '521289', 'Majada Senior High School', 'Majayjay', 'Ms. L', 'Accounting', '789658', '1111111111', '1111111111', '1111111111', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '09435761186', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-21 03:03:16', '2023-03-21 03:03:16'),
(229, '521289', 'Majada Senior High School', 'Bay', 'Ms. Sarah G.', 'Section 12', '789658', 'Jose', 'P.', 'Rizal', 'xxxx235674xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Transfer', '5412351', '../uploads/', '', 'pending', '2023-03-21 03:07:13', '2023-03-21 03:07:13'),
(230, '521289', 'Puypuy High School', 'Cavinti', 'Ms. LEE', 'Accounting', '789658', 'Jose', 'P.', 'de Castro', 'asqqd@gmail.com', '', 'de Castro1234', '09074582572', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 03:13:09', '2023-03-21 03:13:09'),
(231, '666666', 'Los Banos Nation High SChool', 'Alaminos', 'Ms. LEE', 'Records', '789658', 'Jose', 'P.', 'de Castro', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-21 03:16:43', '2023-03-21 03:16:43'),
(232, '1111111111', '1111111111', 'Cavinti', '1111111111', 'Records', '789658', 'Jose', 'P.', 'Rizal', 'xxxx234xvv34@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 03:19:33', '2023-03-21 03:19:33'),
(233, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. LEE', 'Records', '673291', 'Venabentura', 'P.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 03:23:01', '2023-03-21 03:23:01'),
(234, '521289', 'Majada Senior High School', 'Bay', 'Ms. Sarah G.', 'Section 12', '789658', 'Venabentura', 'L.', 'de Castro', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 03:25:17', '2023-03-21 03:25:17'),
(235, '1111111111', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Accounting', '789658', 'Venabentura', 'P.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-21 03:27:01', '2023-03-21 03:27:01'),
(236, '521289', 'Majada Senior High School', 'Majayjay', 'Ms. Sarah G.', '1111111111', '789658', 'Jose', 'P.', 'de Castro', 'xxxx22334xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-21 03:29:14', '2023-03-21 03:29:14'),
(237, '521289', 'Majada Senior High School', 'Majayjay', 'Ms. Sarah G.', '1111111111', '789658', 'Jose', 'P.', 'de Castro', 'xxxx22334xvv@gmail', '', 'de Castro1234', '09435761186', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-21 03:34:52', '2023-03-21 03:34:52'),
(238, '521289', 'Puypuy High School', 'Bay', 'Ms. LEE', 'Accounting', '673291', 'Deviljho', 'L.', 'de Castro', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '1111111111', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 03:41:10', '2023-03-21 03:41:10'),
(239, '521289', 'Majada Senior High School', 'Cavinti', 'Ms. LEE', '1111111111', '789658', 'Deviljho', 'sd', '1111111111', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '09356389230', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 03:43:19', '2023-03-21 03:43:19'),
(240, '521289', 'Majada Senior High School', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '673291', 'Deviljho', 'A.', 'as', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'as1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 03:45:11', '2023-03-21 03:45:11'),
(241, '8888888', 'Los Banos Nation High SChool', 'Cavinti', 'Ms. Sarah G.', 'Section 12', '968472', 'Deviljho', '1111111111', '1111111111', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 03:46:28', '2023-03-21 03:46:28'),
(242, '8888888', 'Los Banos Nation High SChool', 'Lumban', 'Ms. Sarah G.', 'Records', '968472', 'Jose', 'P.', 'Rizal', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-21 03:47:58', '2023-03-21 03:47:58'),
(243, '521289', 'Puypuy High School', 'Bay', 'Ms. Sarah G.', 'Section 12', '968472', 'A', 'A', 'a', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'a1234', '1111111111', 'Reset Password', '', '../uploads/', 'bon', 'Approved', '2023-03-21 03:54:48', '2023-03-21 06:13:43'),
(244, '521289', 'Majada Senior High School', 'Bay', 'Ms. Sarah G.', 'Records', '789658', '1111111111', 'P.', '1111111111', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', '11111111111234', '09074582572', 'suspend', '', '../uploads/Pending - Deped Laguna (1).pdf', '', 'pending', '2023-03-21 03:56:53', '2023-03-21 03:56:53'),
(245, '521289', 'Puypuy High School', 'A1', 'Ms. Sarah G.', 'Section 121', '789658', 'Jose', 'P.', 'Rizal', 'Axxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '1111111111', 'create', '', '../uploads/Pending - Deped Laguna (1).pdf', 'bon', 'Approved', '2023-03-21 03:57:32', '2023-03-21 07:25:08'),
(246, '666666', '1111111111', 'Famy', 'Ms. L', 'Section 12', '968472', '1111111111', '1111111111', '1111111111', 'xxxx235674xvv@gmail.com', 'deped@deped-edu.ph', '11111111111234', '09987654321', 'Delete', '', '../uploads/', 'bon', 'Approved', '2023-03-21 05:20:52', '2023-03-21 05:27:10'),
(247, '1111111111', 'Los Banos Nation High SChool', 'Los baNos', 'Ms. Sarah G.', 'Records', '673291', '1111111111', '1111111111', 'A', 'asqqd@gmail.com', 'deped@deped-edu.ph', 'A1234', '09435761186', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 05:35:20', '2023-03-21 05:35:20'),
(248, '1111111111', 'Majada Senior High School', 'Paete', 'Ms. LEE', 'Section 12', '555555', 'Deviljho', 'A', 'de Castro', 'xxxx235674xvv@gmail', 'deped@deped-edu.ph', 'de Castro1234', '09987654321', 'Delete', '', '../uploads/', '', 'pending', '2023-03-21 05:39:34', '2023-03-21 05:39:34'),
(249, '234235', 'School', 'Liliw', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Transfer', 'saasasd', '../uploads/', '', 'pending', '2023-03-24 03:06:47', '2023-03-24 03:06:47'),
(250, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:17:31', '2023-03-24 03:17:31'),
(251, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:20:47', '2023-03-24 03:20:47'),
(252, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:24:13', '2023-03-24 03:24:13'),
(253, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:24:34', '2023-03-24 03:24:34'),
(254, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:27:09', '2023-03-24 03:27:09'),
(255, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:28:00', '2023-03-24 03:28:00'),
(256, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:28:25', '2023-03-24 03:28:25'),
(257, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:28:55', '2023-03-24 03:28:55'),
(258, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:29:06', '2023-03-24 03:29:06'),
(259, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:29:18', '2023-03-24 03:29:18'),
(260, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:29:31', '2023-03-24 03:29:31'),
(261, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:30:02', '2023-03-24 03:30:02'),
(262, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:30:37', '2023-03-24 03:30:37'),
(263, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:30:48', '2023-03-24 03:30:48'),
(264, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:32:03', '2023-03-24 03:32:03'),
(265, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:32:13', '2023-03-24 03:32:13'),
(266, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:37:29', '2023-03-24 03:37:29'),
(267, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:37:38', '2023-03-24 03:37:38'),
(268, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:38:02', '2023-03-24 03:38:02'),
(269, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:41:23', '2023-03-24 03:41:23'),
(270, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:42:47', '2023-03-24 03:42:47'),
(271, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:45:33', '2023-03-24 03:45:33'),
(272, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:46:28', '2023-03-24 03:46:28'),
(273, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:49:30', '2023-03-24 03:49:30'),
(274, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:50:08', '2023-03-24 03:50:08'),
(275, '234235', 'School', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 03:52:19', '2023-03-24 03:52:19'),
(276, '234235', 'School', 'Nagcarlan', 'School HEAd', 'Records', '734563', 'A', 'S', 'D', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'D1234', '09837292412341', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 03:54:54', '2023-03-24 03:54:54'),
(277, '123456', 'AS', 'Pangil', 'DS', 'Records', '74563457', 'SD', 'SD', 'Sd', 'sd@gmail.com', '', 'Sd1234', '234234', 'Create', '', '../uploads/icontrackit.png', '', 'pending', '2023-03-24 04:04:04', '2023-03-24 04:04:04'),
(278, '123456', 'AS', 'Pangil', 'DS', 'Records', '74563457', 'SD', 'SD', 'Sd', 'sd@gmail.com', '', 'Sd1234', '234234', 'Create', '', '../uploads/', '', 'pending', '2023-03-24 04:05:45', '2023-03-24 04:05:45'),
(279, '234235', 'School112', 'Pagsanjan', '1212', 'Records', '734563', 'A', 'A`', 'S', 'rrtyr@gmail.com', '', 'S1234', '0983729241', 'Create', '', '../uploads/', '', 'pending', '2023-03-24 05:37:32', '2023-03-24 05:37:32'),
(280, '234235', 'School', 'Paete', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 05:45:07', '2023-03-24 05:45:07'),
(281, '234235', 'School', 'Paete', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 05:46:21', '2023-03-24 05:46:21'),
(282, '234235', 'School', 'Paete', 'School HEAd', 'Records', '734563', 'A', 'A', 'D', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'D1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 05:51:54', '2023-03-24 05:51:54'),
(283, '234235123', 'School 3', 'Bay', 'School HEAd', 'Records', '734563', 'A', 'G', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '09837292412341', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 06:01:28', '2023-03-24 06:01:28'),
(284, '234235', 'School', 'Luisiana', 'School HEAd', 'Records', '734563', 'B', 'O', 'O', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'O1234', '098372924112', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 06:21:06', '2023-03-24 06:21:06'),
(285, '234235', 'School', 'Pakil', 'School HEAd', 'Records', '1234651', 'A', 'J', 'X', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'X1234', '09837292412341', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 06:21:53', '2023-03-24 06:21:53'),
(286, '234235', 'School', 'Mabitac', 'School HEAd', 'Records', '734563', 'A', 'J', 'X', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'X1234', '09837292412341', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 06:22:30', '2023-03-24 06:22:30'),
(287, '234235', 'School', 'Nagcarlan', 'School HEAd', 'Records', '734563', 'A', 'S', 'D', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'D1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 06:28:21', '2023-03-24 06:28:21'),
(288, '234235', 'School', 'Mabitac', 'School HEAd', 'Records', '734563', 'B', 'O', 'O', 'rrtyr@gmail.com', '', 'O1234', '0983729241', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 06:42:56', '2023-03-24 06:42:56'),
(289, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:00:23', '2023-03-24 07:00:23'),
(290, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:10:33', '2023-03-24 07:10:33'),
(291, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:10:36', '2023-03-24 07:10:36'),
(292, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:10:49', '2023-03-24 07:10:49'),
(293, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:10:54', '2023-03-24 07:10:54'),
(294, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', '', 'A1234', '0983729241', 'Reset Password', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:11:00', '2023-03-24 07:11:00'),
(295, '234235', 'School', 'Pagsanjan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', 'N/A', 'A1234', '0983729241', 'Create', 'N/A', 'N/A', '', 'pending', '2023-03-24 07:11:23', '2023-03-24 07:11:23'),
(296, '234235', 'School', 'Magdalena', 'School HEAd', 'Records', '734563', 'A', 'J', 'X', 'rrtyr@gmail.com', '', 'X1234', '0983729241', 'Suspend', 'N/A', '../uploads/', '', 'pending', '2023-03-24 07:12:24', '2023-03-24 07:12:24'),
(297, '234235', 'School', 'Magdalena', 'School HEAd', 'Records', '734563', 'A', 'J', 'X', 'rrtyr@gmail.com', '', 'X1234', '0983729241', 'Suspend', 'N/A', '../uploads/', '', 'pending', '2023-03-24 07:12:28', '2023-03-24 07:12:28'),
(298, '234235', 'School', 'Magdalena', 'School HEAd', 'Records', '734563', 'A', 'J', 'X', 'rrtyr@gmail.com', '', 'X1234', '0983729241', 'Suspend', 'N/A', '../uploads/', '', 'pending', '2023-03-24 07:12:32', '2023-03-24 07:12:32'),
(299, '234235', 'School', 'Calauan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 07:14:02', '2023-03-24 07:14:02'),
(300, '234235', 'School', 'Calauan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Suspend', '', '../uploads/', '', 'pending', '2023-03-24 07:14:14', '2023-03-24 07:14:14'),
(301, '234235', 'School', 'Calauan', 'School HEAd', 'asdasd', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'suspend', '', '../uploads/received_517907206298016.png', 'bon', 'Approved', '2023-03-24 07:15:28', '2023-03-24 08:09:18'),
(302, '234235', 'School', 'Calauan', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Transfer', 'saasasd', '../uploads/', '', 'pending', '2023-03-24 07:15:59', '2023-03-24 07:15:59'),
(303, '234235', 'School', 'Paete', 'School HEAd', 'Records', '734563', 'A', 'S', 'D', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'D1234', '0983729241', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 07:17:27', '2023-03-24 07:17:27'),
(304, '234235', 'School', 'Paete', 'School HEAd', 'Records', '734563', 'A', 'S', 'D', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'D1234', '0983729241', 'Delete', '', '../uploads/', 'bon', 'Approved', '2023-03-24 07:21:41', '2023-03-24 08:09:11'),
(305, '234235', 'School', 'Mabitac', 'School HEAd', 'Records', '734563', 'A', 'S', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Suspend', '', '../uploads/', 'bon', 'Approved', '2023-03-24 07:23:27', '2023-03-24 07:36:10'),
(306, '234235', 'School', 'Majayjay', 'School HEAd', 'Records', '734563', 'A', 'A', 'D', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'D1234', '0983729241', 'Reset Password', '', '../uploads/', '', 'pending', '2023-03-24 08:10:05', '2023-03-24 08:10:05'),
(307, '234235', 'School', 'Majayjay', 'School HEAd', 'Records', '734563', 'A', 'A', 'A', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'A1234', '0983729241', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 08:25:43', '2023-03-24 08:25:43'),
(308, '234235422', 'School', 'Paete', 'School HEAd', 'Records', '73456367', 'A', 'J', 'X', 'rrtyr@gmail.com', 'deped@deped-edu.ph', 'X1234', '098372924189', 'Delete', '', '../uploads/', '', 'pending', '2023-03-24 09:32:49', '2023-03-24 09:32:49'),
(309, '52128934', 'Puypuy High School', 'Nagcarlan', 'Ms. LEE', 'Section 121', '7777777', 'Deviljho', 'A', 'de Castro', 'xxxx2344xvv@gmail.comn', 'deped@deped-edu.ph', 'de Castro1234', '09435761186', 'Reset Password', '', '../uploads/', 'bon', 'Approved', '2023-03-28 03:04:44', '2023-03-28 04:39:43'),
(310, '521289', 'Puypuy High School', 'Liliw', 'Ms. Sarah G.', 'Accounting', '673291', 'Venabentura', 'P.', 'Rizal', 'xxxx234xvv@gmail', 'deped@deped-edu.ph', 'Rizal1234', '09074582572', 'Delete', '', '../uploads/', 'bon', 'Approved', '2023-03-28 03:14:18', '2023-03-28 04:36:23'),
(311, '521289', 'Puypuy High School', 'Majayjay', 'Ms. Sarah G.', 'Accounting', '789658', 'Jose', 'L.', '1111111111', 'Axxxx234xvv@gmail', '', '11111111111234', '09435761186', 'Create', '', '../uploads/Pending - Deped Laguna (6).xlsx', 'bon', 'Approved', '2023-03-28 05:32:27', '2023-03-28 05:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
