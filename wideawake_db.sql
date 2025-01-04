-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 05:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wideawake_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$2pfZwADDpuDGA0gttLy09unPwyFeFbUcCm2mSkoGwrDA//eeQbMmW');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `stage_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `other_nationality_1` varchar(255) DEFAULT NULL,
  `other_nationality_2` varchar(255) DEFAULT NULL,
  `other_nationality_3` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `meta` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `threads` varchar(255) DEFAULT NULL,
  `snapchat` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `weibo` varchar(255) DEFAULT NULL,
  `soundcloud` varchar(255) DEFAULT NULL,
  `bandcamp` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `twitch` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `vimeo` varchar(255) DEFAULT NULL,
  `question_1` varchar(255) DEFAULT NULL,
  `question_2` varchar(255) DEFAULT NULL,
  `question_3` longtext DEFAULT NULL,
  `question_4` varchar(255) DEFAULT NULL,
  `question_5` varchar(255) DEFAULT NULL,
  `question_6` varchar(255) DEFAULT NULL,
  `are_you` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `events` varchar(255) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `first_name`, `last_name`, `stage_name`, `dob`, `country`, `nationality`, `other_nationality_1`, `other_nationality_2`, `other_nationality_3`, `email`, `address`, `country_code`, `number`, `website`, `tiktok`, `meta`, `instagram`, `threads`, `snapchat`, `twitter`, `weibo`, `soundcloud`, `bandcamp`, `pinterest`, `twitch`, `linkedin`, `youtube`, `vimeo`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `are_you`, `school`, `events`, `file_upload`, `status`) VALUES
(1, 'Max', 'Holloway', 'max', '1999-01-01', '', 'Cayman', 'asd', 'asd', 'asd', 'user@gmail.com', 'lake street ', 'Cayman Islands', '11111111', 'saddsa@gmail.com', 'asdsada', '', 'j', '', 'q', '', 'd', 'aa', 'q', 'aa', '', 'w', 'a', 'd', 'sadsad', 'asdsad', 'asdsadsadsa', 'asd', 'sad', '', '', NULL, 'as alumni,as participant,as Guest', NULL, 1),
(2, 'Max', 'Holloway', 'max', '1999-01-01', 'Belgium', 'Aruban', '', '', '', 'user123@gmail.com', 'lakestreet amsterdam', 'Cayman Islands', '1111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sadsad', 'a teacher,Caymanian,resident in Grand Cayman?,resident in Cayman Brac or Little Cayman?', NULL, 'as alumni', NULL, 2),
(3, 'Max', 'Holloway', 'Max', '1999-01-01', 'Bahamas', 'Bahamas', 'asdasd', 'sadsad', 'sadsadsda', 'user123@gmail.com', 'sadsadsadsad', 'Cayman Islands', '11111111111111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'no', 'a teacher,a student (specify which school?),Caymanian,resident in Grand Cayman?,a member of St. George’s Anglican church (Cayman)?', 'beacon', 'as alumni,as participant,as Guest', NULL, 2),
(4, 'Max', 'asdsad', 'max', '1999-01-01', 'Cayman Islands', 'Cayman', '', '', '', 'user@gmail.com', 'sadsadsad', 'Cayman Islands', '111111155467', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asd', 'asd', 'sadsad', 'asd', 'asd', 'no', 'a teacher,resident in Cayman Brac or Little Cayman?', '', 'dot', 'banner1.webp', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
