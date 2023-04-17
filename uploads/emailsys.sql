-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 02:02 AM
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
  `appointment` varchar(255) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `school_id`, `school_name`, `district`, `school_head`, `unit_section`, `employee_number`, `firstname`, `middlename`, `lastname`, `personal_email`, `deped_email`, `password`, `phone_number`, `request`, `appointment`, `approved_by`, `status`, `created_at`, `updated_at`) VALUES
(4, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q1234', 'q', 'create', '../uploads/received_517907206298016.png', 'von', 'approved', '2022-11-10 00:19:43', '2022-11-10 00:34:16'),
(5, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q1234', 'q', 'create', '../uploads/Screenshot 2021-12-28 083443.png', 'von', 'approved', '2022-11-10 00:21:28', '2022-11-10 00:44:44'),
(6, '123', 'qq', 'qeee', 'eee', 'eee', 'eee', 'eee', 'eee', 'eee', 'ee', 'e', 'eee1234', '323213123', 'create', '../uploads/Screenshot 2022-03-18 095154.png', 'von', 'approved', '2022-11-10 00:47:14', '2022-11-15 03:43:11'),
(7, 'xxx', 'xxx', 'xx', 'xxx', 'xx', 'xx', 'xx', 'x', 'x', 'x', 'x', 'x1234', 'x', 'create', '../uploads/Screenshot 2021-12-28 083754.png', 'von', 'approved', '2022-11-17 01:27:57', '2022-11-21 02:46:10'),
(8, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11234', '1', 'delete', '../uploads/received_517907206298016.png', 'von', 'approved', '2022-11-21 02:21:31', '2022-11-21 08:42:16'),
(9, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', 'von', 'approved', '2022-11-21 03:59:22', '2022-11-21 08:42:36'),
(10, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', 'von', 'approved', '2022-11-21 03:59:51', '2022-11-21 08:42:37'),
(11, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:12', '2022-11-21 04:00:12'),
(12, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:14', '2022-11-21 04:00:14'),
(13, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:18', '2022-11-21 04:00:18'),
(14, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:23', '2022-11-21 04:00:23'),
(15, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:27', '2022-11-21 04:00:27'),
(16, 'a', 'a', 'aa', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa1234', 'aa', 'create', '../uploads/Screenshot 2021-12-28 083329.png', '', 'pending', '2022-11-21 04:00:32', '2022-11-21 04:00:32'),
(17, 'zz', 'zz', 'Alaminos', 'zz', 'zz', 'zz', 'zz', 'zz', 'zz', 'zz@zz', '', 'zz1234', 'zz', 'Create', '../uploads/Screenshot 2021-12-28 083321.png', 'von', 'approved', '2022-11-21 07:02:32', '2022-11-21 08:42:41'),
(18, 'xx', 'xx', 'Alaminos', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx@xx', 'N/A', 'xx1234', 'xx', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:06:04', '2022-11-21 07:06:04'),
(19, 'cc', 'cc', 'Alaminos', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc@cc', 'N/A', 'cc1234', 'cc', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:09:48', '2022-11-21 07:09:48'),
(20, 'cc', 'cc', 'Alaminos', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc@cc', 'N/A', 'cc1234', 'cc', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:12:46', '2022-11-21 07:12:46'),
(21, 'cc', 'cc', 'Alaminos', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc@cc', 'N/A', 'cc1234', 'cc', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:17:50', '2022-11-21 07:17:50'),
(22, 'za', 'za', 'Alaminos', 'az', 'az', 'zaz', 'za', 'azaz', 'za', 'a@z', 'N/A', 'za1234', 'z', 'Create', '../uploads/Screenshot 2022-03-18 095214.png', '', 'pending', '2022-11-21 07:18:13', '2022-11-21 07:18:13'),
(23, 'ddd', 'ddd', 'Alaminos', 'dd', 'd', 'd', 'dd', 'd', 'd', 'd@dd', 'N/A', 'd1234', 'dd', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:19:48', '2022-11-21 07:19:48'),
(24, 't', 't', 'Alaminos', 's', 'd', 'at', 'a', 'ds', 'ta', 'a@as', 'N/A', 'ta1234', 's', 'Create', '../uploads/Screenshot 2022-05-20 162121.png', '', 'pending', '2022-11-21 07:21:47', '2022-11-21 07:21:47'),
(25, 'g', 'g', 'Alaminos', 'g', 'g', 'g', 'g', 'g', 'g', 'g@g', 'N/A', 'g1234', 'g', 'Create', '../uploads/Screenshot 2022-05-20 162121.png', '', 'pending', '2022-11-21 07:23:48', '2022-11-21 07:23:48'),
(26, 'tyty', 'yt', 'Alaminos', 'yt', 'tyyt', 'ty', 'yt', 'yt', 'yt', 'zz@zz', 'N/A', 'yt1234', 'yt', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:38:54', '2022-11-21 07:38:54'),
(27, '123', 'asdfghkqwe', 'Alaminos', 'wws', '12d12', '00000', 'scaasd', 'dasdasd', 'asdasda', 'qqqqq2@qqqqq', 'N/A', 'asdasda1234', '1223312', 'Create', '../uploads/Screenshot 2022-03-18 095154.png', '', 'pending', '2022-11-21 07:48:07', '2022-11-21 07:48:07'),
(28, 'a', 'a', 'Alaminos', 'a', 'a', 'a', 'a', 'a', 'a', 'a@a', 'N/A', 'a1234', 'a', 'Create', '../uploads/Screenshot 2022-05-20 162121.png', '', 'pending', '2022-11-21 08:38:19', '2022-11-21 08:38:19'),
(29, '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '1111111111', '', '11111111111234', '1111111111', 'create', '../uploads/README.md', 'jm', 'approved', '2022-12-13 08:00:07', '2022-12-13 08:00:15'),
(30, 'asdas', 'asd', 'Alaminos', 'asda', 'asda', 'd', 'd', 'sd', 'as', 'aaaasd@asda', 'N/A', 'as1234', 'asdas', 'Create', '../uploads/README.md', '', 'pending', '2022-12-15 07:42:33', '2022-12-15 07:42:33');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
