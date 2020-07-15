-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 03:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state_id`) VALUES
(1, 'Diadema', 1),
(2, 'Mauá', 1),
(3, 'Rio Grande da Serra', 1),
(4, 'Angra dos Reis', 2),
(5, 'Barra Mansa', 2),
(6, 'Belford Roxo', 2),
(7, 'Cabo Frio', 2),
(8, 'Aquiraz', 3),
(9, 'Canindé', 3),
(10, 'Caucaia', 3),
(11, 'Crato', 3),
(12, 'Blumenau', 4),
(13, 'Chapecó', 4),
(14, 'Criciúma', 4),
(15, 'Lages', 4),
(16, 'Aracruz', 5),
(17, 'Cariacica', 5),
(18, 'Colatina', 5),
(19, 'Linhares', 5),
(20, 'Guangzhou', 6),
(21, 'Shanghai', 6),
(22, 'Chongqing', 6),
(23, 'Beijing', 6),
(24, 'Baoding', 7),
(25, 'Qinhuangdao', 7),
(26, 'Tangshan', 8),
(27, 'Sanhe', 8),
(28, 'Paris', 11),
(29, 'Poissy', 11),
(30, 'Torbes', 12),
(31, 'Rodrez', 12),
(32, 'Auger-Saint-Vincent', 13),
(33, 'Aumatre', 13),
(34, 'Belfort', 14),
(35, 'Dole', 14),
(36, 'Colmar', 15),
(37, 'Obernai', 15),
(38, 'Gurugram', 16),
(39, 'Panipat', 16),
(40, 'Rewari', 16),
(41, 'Chandigarh', 16),
(42, 'Tirupati', 17),
(43, 'Vijayvada', 17),
(44, 'Elluru', 17),
(45, 'Nellore', 17),
(46, 'New Delhi', 18),
(47, 'Faridabad', 18),
(48, 'Chennai', 19),
(49, 'Madurai', 19),
(50, 'Coimbatore', 19),
(51, 'Salem', 19),
(52, 'Ballia', 20),
(53, 'Varanasi', 20),
(54, 'Lucknow', 20),
(55, 'Kanpur', 20),
(56, 'Los Angeles', 21),
(57, 'San Francisco', 21),
(58, 'San Diego', 21),
(59, 'Oakland', 21),
(60, 'lowa city', 22),
(61, 'Ames', 22),
(62, 'Waterloo', 22),
(63, 'Mason city', 22),
(64, 'New york city', 23),
(65, 'Buffalo', 23),
(66, 'Albany', 23),
(67, 'Yonkers', 23),
(68, 'Trenton', 24),
(69, 'Princeton', 24),
(70, 'Atlantic city', 24),
(71, 'Paterson', 24),
(72, 'Boston', 25),
(73, 'Cambridge', 25),
(74, 'Springfield', 25),
(75, 'Lowell', 25);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'Brazil'),
(2, 'China'),
(3, 'France'),
(4, 'India'),
(5, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Sao Paulo', 1),
(2, 'Rio de Janeiro', 1),
(3, 'Ceara', 1),
(4, 'Santa Catarina', 1),
(5, 'Espirito Santo', 1),
(6, 'Beijing', 2),
(7, 'Hebei', 2),
(8, 'Jiangsu', 2),
(9, 'Guangdong', 2),
(10, 'Guangdong', 2),
(11, 'Ile-de-France', 3),
(12, 'Midi-Pyrenees', 3),
(13, 'Picardie', 3),
(14, 'Franche-Comte', 3),
(15, 'Alsace', 3),
(16, 'Haryana', 4),
(17, 'Andhra Pradesh', 4),
(18, 'Delhi', 4),
(19, 'Tamil Nadu', 4),
(20, 'Uttar Pradesh', 4),
(21, 'California', 5),
(22, 'Iowa', 5),
(23, 'New York', 5),
(24, 'New Jersey', 5),
(25, 'Massachusetts', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `ph`, `password`, `gender`, `country`, `state`, `created_at`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 7411639099, 'admin', 'male', 'India', 'Karnataka', '2020-07-15 15:53:53'),
(2, 'sam', 'pk', 'sam@gmail.com', 7411639099, '123', 'male', 'India', 'Karnataka', '2020-07-15 15:56:01'),
(3, 'John', 'Snow', 'john@gmail.com', 7411639099, '123', 'Male', 'India', 'Karnataka', '2020-07-15 15:56:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
