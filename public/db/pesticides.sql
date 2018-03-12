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
-- Структура на таблица `pesticides`
--

CREATE TABLE `pesticides` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `moreNames` varchar(500) DEFAULT NULL,
  `secondName` varchar(500) DEFAULT NULL,
  `manufacturersId` int(11) NOT NULL,
  `firmName` varchar(500) NOT NULL,
  `permission` varchar(100) DEFAULT NULL,
  `valid` varchar(50) DEFAULT NULL,
  `dateOrder` varchar(50) DEFAULT NULL,
  `period` varchar(500) DEFAULT NULL,
  `substance` varchar(500) NOT NULL,
  `lethal` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `alphabet` tinyint(3) NOT NULL,
  `pesticide` varchar(500) NOT NULL,
  `pesticideId` int(11) NOT NULL,
  `pestDescription` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `pesticides`
--

INSERT INTO `pesticides` (`id`, `name`, `type`, `moreNames`, `secondName`, `manufacturersId`, `firmName`, `permission`, `valid`, `dateOrder`, `period`, `substance`, `lethal`, `category`, `alphabet`, `pesticide`, `pesticideId`, `pestDescription`) VALUES
(1, 'АПОЛО 50 СК', 'СК - суспензионен концентрат', NULL, NULL, 1, 'АДАМА Ирвита Н.В.', 'Разрешеине № 94- ПРЗ -3 / 07.06.2016 г.', '30.04.2020 г.', NULL, '*Гратисен период 6 месеца за продажба и още 1 година за съхранение и употреба, считано от 30.04.2016 г. на ПРЗ -Удостоверение № 94/21.01.2004 г.', '500 г/л клофентезин', '3200', '2', 1, 'акарицид', 1, 'АПОЛО 50 СК - Акарицид при Домати, Лозя, Круши, Краставици, Пъпеш, Ягоди и Малини срещу Обикновен паяжинообразуващ акар (Tetranychus urticae) и Жълт лозов акар (Schizotetranychus viticola)'),
(2, 'БИ-58', 'ЕК - емулсионен концентрат', NULL, NULL, 2, 'БАСФ', 'Удостоверение № 79/23.07.2003 г.', NULL, 'РД 11-1243/14.06.2017 г.', NULL, '400 г/л диметоат', '150', '3', 2, 'акарицид', 1, 'БИ-58 Инсектицид и Акарицид за борба срещу Обикновен паяжинообразуващ акар по зеленчуци и Атлантически акар по зеленчуци.'),
(3, 'ВАЛМЕК', 'ЕК - емулсионен концентрат', NULL, NULL, 3, 'Индустриас Афраза', 'Разрешение № 01418 – ПРЗ- 1/07.06.2016 г.', '30.04.2020', 'РД 11- 950/31.05.2016 г.', NULL, 'абамектин 18 г/л', NULL, '2', 9, 'акарицид', 1, 'ВАЛМЕК акарицид/инсектицид  при Лозя, Домати, Ягоди, Патладжани, Маруля, Салати, Краставици, Корнишони, Тиквички, Праскови, Ябълка и Круша срещу Обикновен паяжинообразуващ акар (Tetranychus urticae), Листоминиращи мухи, Червен овощен акар, Листни бълхи, Доматен акар и др.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesticides`
--
ALTER TABLE `pesticides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesticides`
--
ALTER TABLE `pesticides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
