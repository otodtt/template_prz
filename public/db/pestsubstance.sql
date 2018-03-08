-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Структура на таблица `pestsubstance`
--

CREATE TABLE `pestsubstance` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `substanceId` int(11) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `quantityAfter` varchar(50) DEFAULT NULL,
  `pesticides_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `pestsubstance`
--

INSERT INTO `pestsubstance` (`id`, `name`, `substanceId`, `quantity`, `quantityAfter`, `pesticides_id`) VALUES
(1, 'клофентезин', 1, '500 г/л', NULL, 1),
(2, 'абамектин', 2, NULL, '18 г/л', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pestsubstance`
--
ALTER TABLE `pestsubstance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pestsubstance`
--
ALTER TABLE `pestsubstance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
