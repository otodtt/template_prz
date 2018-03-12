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
-- Структура на таблица `subs`
--

CREATE TABLE `subs` (
  `id` int(11) NOT NULL,
  `substance_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `idPest` int(11) NOT NULL,
  `firm` varchar(500) NOT NULL,
  `firmId` int(11) NOT NULL,
  `alphabet` tinyint(2) NOT NULL,
  `typePest` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `subs`
--

INSERT INTO `subs` (`id`, `substance_id`, `name`, `idPest`, `firm`, `firmId`, `alphabet`, `typePest`) VALUES
(1, 1, 'АПОЛО 50 СК', 1, 'АДАМА Ирвита Н.В.', 1, 1, 1),
(2, 2, 'БИ-58', 2, 'БАСФ', 2, 2, 1),
(3, 3, 'ВАЛМЕК', 3, 'Индустриас Афраза', 3, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
