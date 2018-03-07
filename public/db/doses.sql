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
-- Структура на таблица `doses`
--

CREATE TABLE `doses` (
  `id` int(11) NOT NULL,
  `pesticides_id` int(11) NOT NULL,
  `dose` varchar(50) NOT NULL,
  `secondDose` varchar(50) DEFAULT NULL,
  `measure` varchar(50) NOT NULL,
  `measureId` tinyint(2) NOT NULL,
  `note` varchar(500) DEFAULT NULL,
  `afterNote` varchar(500) DEFAULT NULL,
  `crop` varchar(500) DEFAULT NULL,
  `disease` varchar(1500) NOT NULL,
  `quarantine` varchar(50) DEFAULT NULL,
  `isCalc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `doses`
--

INSERT INTO `doses` (`id`, `pesticides_id`, `dose`, `secondDose`, `measure`, `measureId`, `note`, `afterNote`, `crop`, `disease`, `quarantine`, `isCalc`) VALUES
(1, 1, '40', NULL, 'мл/дка', 1, NULL, NULL, 'Домати:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', '3', 1),
(2, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Лозя – винени сортове:', 'Жълт лозов акар (<span class="latin_name">Schizotetranychus viticola</span>)', '30', 0),
(3, 1, '40', NULL, 'мл/дка', 1, NULL, NULL, 'Круши:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', '35', 1),
(4, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Краставици:', 'Обикновен паяжинообразуващ акар (Tetranychus urticae)', '3', 0),
(5, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Пъпеш:', 'Обикновен паяжинообразуващ акар (Tetranychus urticae)', '3', 0),
(6, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Ягоди:', 'Обикновен паяжинообразуващ акар (Tetranychus urticae)', '3', 0),
(7, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Малини:', 'Обикновен паяжинообразуващ акар (Tetranychus urticae)', '7', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doses`
--
ALTER TABLE `doses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doses`
--
ALTER TABLE `doses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
