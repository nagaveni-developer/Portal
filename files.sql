-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 02:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_id` varchar(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Author_name` varchar(100) NOT NULL,
  `No_of_copies` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_id`, `Title`, `Author_name`, `No_of_copies`) VALUES
('1001', 'Programmable Logic Controllers Principles and Applications', 'John Webb W', 7),
('1016', 'Basic and applied Soil Mechanics', 'Ranjan Gopal',12),
('1023', 'An engineering approach to Computer Networking', 'Keshav',2),
('1027', 'Computer System Architecture', 'Morris Mano M',3),
('1032', 'Python Programming using problem solving approach', 'Reema Theraja',34),
('1035', 'Analog and Digital communications  HWEI P HSU', 'DEBJANI MITRA',43),
('1042', 'Introduction to Machine Learning', 'Alpaydin Ethem',7),
('1054', 'Cyber Security', 'Nina Godbole',22),
('1076', 'Cryptography and Network Security', 'W. Stallings',76),
('1100', 'Cloud Computing concepts Technology & Architecture', 'Thomoas Erl',48);

-- --------------------------------------------------------

--
-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `username` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Book_id` varchar(10) NOT NULL,
  `Date_out` date NOT NULL,
  `Due_date` date NOT NULL,
  `Date_in` date NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('keerthi', 'keerthi priya', 2, 'CSE', 'keerthipriya1438@gmail.com', '', 0x73756e7365742d6269726473312e6a7067, '2020-11-24 10:27:48', 0);

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
  `join_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `year`, `branch`, `name`, `email`, `join_date`) VALUES
(17, 'admin', '$2y$10$P8b3vf6Z9U81CyDhoe4XhOglpC6BNPmpwoY46oxCyuXB4P0JDLDEG', '1', 'cse', 'Developer', 'vcequries82@gmail.com', '2017-04-11'),
(74, 'priya082', '$2y$10$P3qyzdghcGgKNUAERxNqAO4b56DPWu2F7uJQj3j26.Gz5BKCOR2DC', '2', 'cse', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-11-24'),
(70, '1', '$2y$10$GCDKfZLnE2VGdLQ2PvhbO.BE/yTT1kZnQmVeSvsJBILjjBzSpFocS', '1', '1', '1', 'keerthipriya1438@gmail.com', '2020-10-11'),
(71, 'keerthipriya', '$2y$10$CsCe/TbE0CXKm3lXFBIa8ePY4iVBAvZ9/Dw82w6W7qF.J4elDg8SS', '2', 'cse', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-10-27'),
(72, 'keerthi', '$2y$10$YSC8keKgyCinGUjYsPwaSO/ti9OUTH65up/tIuYE3dyR0ZmU9XqLS', '2', 'CSE', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-11-17'),
(73, 'priya', '$2y$10$EHDeyoBaM7sRXPXy8q4poehZpGWdFXKbEs5DKU8aJWnFeM8R31/86', '2', 'cse', 'priya', 'keerthipriyaa3@gmail.com', '2020-11-20'),
(75, 'priya1', '$2y$10$DJ8DtZWCJD6doMeyAodXeu8ZGUm.WLWedgfJBwlxW0SRTImONXnJ6', '2', 'cse', 'keerthi priya', 'keerthipriya1438@gmail.com', '2020-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD UNIQUE KEY `UniqueBorrower` (`username`,`Book_id`),
  ADD KEY `BorrowerBookID` (`Book_id`);

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
-- AUTO_INCREMENT for table `quans`
--
ALTER TABLE `quans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

-- Constraints for table `borrower`
--
ALTER TABLE `borrower`
  ADD CONSTRAINT `BorrowerBookID` FOREIGN KEY (`Book_id`) REFERENCES `book` (`Book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
