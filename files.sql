-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql203.epizy.com
-- Generation Time: Sep 07, 2020 at 02:34 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26633019_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'CSE', 'Computer Science Engineering'),
(2, 'ECE', 'Electronics and Communications Engineering'),
(3, 'EEE', 'Electrical and Electronics Engineering'),
(4, 'Civil', 'Civil Engineering'),
(5, 'Mech', 'Mechanical Engineering'),
(6, 'IT', 'Information Technology'),
(7, 'Soft Skills', 'All queries regarding soft skills'),
(8, 'Placements', 'All queries regarding Placements'),
(9, 'Others', 'Any Other Category...');

-- --------------------------------------------------------

--
-- Table structure for table `quacat`
--

CREATE TABLE `quacat` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quacat`
--

INSERT INTO `quacat` (`id`, `category`) VALUES
(6, 'Civil'),
(7, 'Civil'),
(8, 'Civil'),
(9, 'Civil'),
(10, 'Civil'),
(11, 'Civil'),
(12, 'Civil'),
(1, 'CSE'),
(2, 'CSE'),
(3, 'CSE'),
(19, 'CSE'),
(20, 'CSE'),
(21, 'CSE'),
(22, 'CSE'),
(89, 'CSE'),
(90, 'CSE'),
(4, 'ECE'),
(5, 'ECE'),
(82, 'ECE'),
(28, 'EEE'),
(15, 'IT'),
(16, 'IT'),
(17, 'IT'),
(18, 'IT'),
(13, 'Mech'),
(14, 'Mech'),
(34, 'Others'),
(85, 'Others'),
(86, 'Others'),
(87, 'Others'),
(23, 'Placements'),
(24, 'Placements'),
(25, 'Placements'),
(26, 'Placements'),
(27, 'Placements'),
(83, 'Placements'),
(91, 'Placements'),
(92, 'Placements'),
(29, 'Soft Skills'),
(30, 'Soft Skills'),
(32, 'Soft Skills'),
(33, 'Soft Skills');

-- --------------------------------------------------------

--
-- Table structure for table `quans`
--

CREATE TABLE `quans` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` longtext,
  `askedby` varchar(255) NOT NULL,
  `answeredby` varchar(255) DEFAULT NULL,
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `dislikes` bigint(20) NOT NULL DEFAULT '0',
  `modified` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quans`
--
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `year`, `branch`, `name`, `email`, `join_date`, `category`) VALUES
(17, 'admin', '$2y$10$P8b3vf6Z9U81CyDhoe4XhOglpC6BNPmpwoY46oxCyuXB4P0JDLDEG', '1', 'cse', 'Developer', 'vcequries82@gmail.com', '2017-04-11', NULL),
(69, 'akhila_3103', '$2y$10$jR2KMRZbXMv50ePUXBWBje2aZQudpx94B3UgppJYcn1PqQwAdQKPi', '2nd', 'Cse', 'Analdas Akhila', 'akhila.analdas03@gmail.com', '2020-09-07', 'CSE,IT,Soft Skills,Placement,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `quacat`
--
ALTER TABLE `quacat`
  ADD PRIMARY KEY (`category`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `quans`
--
ALTER TABLE `quans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `askedby` (`askedby`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quans`
--
ALTER TABLE `quans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
