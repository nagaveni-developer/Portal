-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `files`
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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `rollno` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` int(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `doc_req` varchar(20) NOT NULL,
  `file` blob DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`rollno`, `name`, `year`, `branch`, `mail`, `doc_req`, `file`, `date`, `flag`) VALUES
('keerthi', 'keerthi priya', 2, 'CSE', 'keerthipriya1438@gmail.com', '', 0x73756e7365742d6269726473312e6a7067, '2020-11-24 10:27:48', 0),
('keerthi', 'keerthi priya', 2, 'CSE', 'keerthipriya1438@gmail.com', 'renewal', 0x6f72616e67652d73756e7365742e6a7067, '2020-11-24 10:58:39', 0),
('keerthi', 'keerthi priya', 2, 'CSE', 'keerthipriya1438@gmail.com', 'renewal', 0x6f72616e67652d73756e7365742e6a7067, '2020-11-24 11:02:55', 0),
('keerthi', 'keerthi priya', 2, 'CSE', 'keerthipriya1438@gmail.com', 'renewal', 0x6f72616e67652d73756e7365742e6a7067, '2020-11-24 11:07:22', 0),
('keerthi', 'keerthi priya', 2, 'CSE', 'keerthipriya1438@gmail.com', '', 0x6f72616e67652d73756e7365742e6a7067, '2020-11-24 11:08:08', 0),
('priya1', 'keerthi priya', 2, 'cse', 'keerthipriya1438@gmail.com', '', 0x326e642d73656d2d6d61726b2d73686565742e706466, '2020-11-24 15:20:06', 0);

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
  `answer` longtext DEFAULT NULL,
  `askedby` varchar(255) NOT NULL,
  `answeredby` varchar(255) DEFAULT NULL,
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `dislikes` bigint(20) NOT NULL DEFAULT 0,
  `modified` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(74, 'priya082', '$2y$10$P3qyzdghcGgKNUAERxNqAO4b56DPWu2F7uJQj3j26.Gz5BKCOR2DC', '2', 'cse', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-11-24', NULL),
(70, '1', '$2y$10$GCDKfZLnE2VGdLQ2PvhbO.BE/yTT1kZnQmVeSvsJBILjjBzSpFocS', '1', '1', '1', 'keerthipriya1438@gmail.com', '2020-10-11', NULL),
(71, 'keerthipriya', '$2y$10$CsCe/TbE0CXKm3lXFBIa8ePY4iVBAvZ9/Dw82w6W7qF.J4elDg8SS', '2', 'cse', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-10-27', NULL),
(72, 'keerthi', '$2y$10$YSC8keKgyCinGUjYsPwaSO/ti9OUTH65up/tIuYE3dyR0ZmU9XqLS', '2', 'CSE', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-11-17', NULL),
(73, 'priya', '$2y$10$EHDeyoBaM7sRXPXy8q4poehZpGWdFXKbEs5DKU8aJWnFeM8R31/86', '2', 'cse', 'priya', 'keerthipriyaa3@gmail.com', '2020-11-20', NULL),
(75, 'priya1', '$2y$10$DJ8DtZWCJD6doMeyAodXeu8ZGUm.WLWedgfJBwlxW0SRTImONXnJ6', '2', 'cse', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-11-24', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
