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
  `application` mediumtext,
  `quarantine` varchar(50) DEFAULT NULL,
  `isCalc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `doses`
--

INSERT INTO `doses` (`id`, `pesticides_id`, `dose`, `secondDose`, `measure`, `measureId`, `note`, `afterNote`, `crop`, `disease`, `application`, `quarantine`, `isCalc`) VALUES
(1, 1, '40', NULL, 'мл/дка', 1, NULL, NULL, 'Домати:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'От ВВСН 21 Видима поява на първо връхно разклонение До: Съобразно карантинния срок от 3 дни.', '3', 1),
(2, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Лозя – винени сортове:', 'Жълт лозов акар (<span class="latin_name">Schizotetranychus viticola</span>)', 'От ВВСН 11 Първият лист е отворен и се разстила настрани от летораста До: съобразно карантинния срок от 35 дни.', '30', 0),
(3, 1, '40', NULL, 'мл/дка', 1, NULL, NULL, 'Круши:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'От ВВСН 00 Покой: листните пъпки и по-дебелите цветни пъпки са затворени и покрити с дебели тъмни люспи. До: съобразно карантинния срок от 35 дни.', '35', 1),
(4, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Краставици:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'От ВВСН 21 Поява на първо странично разклонение. До: съобразно карантинния срок', '3', 0),
(5, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Пъпеш:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'От ВВСН 21 Поява на първо странично разклонение. До: съобразно карантинния срок от 3 дни.', '3', 0),
(6, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Ягоди:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'От ВВСН 10 Поява на първи лист. До: съобразно карантинния срок от 3 дни.', '3', 0),
(7, 1, '30-40', NULL, 'мл/дка', 1, NULL, NULL, 'Малини:', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'От ВВСН 15 Разтворен пети лист. До: съобразно карантинния срок от 7 дни.', '7', 0),
(8, 2, '0,1', NULL, '%', 3, NULL, NULL, 'Зеленчуци', 'Обикновен паяжинообразуващ акар по зеленчуци, Атлантически акар', NULL, '21', 1),
(9, 3, '25-100', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Лозя (винени сортове)', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'При появата на първите подвижни форми на акарите', '10', 0),
(10, 3, '50-120', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Лозя (десертни сортове)', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'При появата на първите подвижни форми на акарите', '10', 0),
(11, 3, '15-100', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Ягоди', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranichus urticae</span>)<br/>\r\nЯгодов (цикламов) акар (<span class="latin_name">Phytonemus pallidus</span>)<br/>\r\nЛистоминиращи мухи (<span class="latin_name">Lyriomyza spp.</span>)', 'При появата на първите подвижни форми на акарите.\r\nПри появата на първите снесени яйца при листоминиращите мухи.', '3', 0),
(12, 3, '15-100', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Домати (полско и оранжерийно производство)', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranichus urticae</span>)<br/>\r\nСребрист цитрусов акар (<span class="latin_name">Polyphagotarsoneumus latus</span>)<br/>\r\nДоматен акар (<span class="latin_name">Aculus lycopersici</span>)-при оранжерийно производство)<br/>\r\nЛистоминиращи мухи (<span class="latin_name">Lyriomyza spp.</span>)', 'При появата на първите подвижни форми на акарите.\r\nПри появата на първите снесени яйца при листоминиращите мухи.', '3', 0),
(13, 3, '15-80', '50-80 мл/хл', 'мл/дка', 1, NULL, NULL, 'Патладжан (полско и оранжерийно производство)', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)', 'При появата на първите подвижни форми на акарите.', '3', 0),
(14, 3, '15-100', '50- 100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Маруля, Салати (полско производство)', 'Паяжинообразуващи акари (<span class="latin_name">Tetranichus spp.</span>)<br/>\r\nСребрист цитрусов акар (<span class="latin_name">Polyphagotarsoneumus latus</span>)<br/>\r\nЛистоминиращи мухи (<span class="latin_name">Lyriomyza spp.</span>)<br/>', 'При появата на първите подвижни форми на акарите. \r\nПри появата на първите снесени яйца при листоминиращите мухи.', '7', 0),
(15, 3, '15-100', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Пъпеш, Тиква, Диня (полско и оранжерийно производство)', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranichus urticae</span>)<br/>\r\nЛистоминиращи мухи (<span class="latin_name">Lyriomyza spp.</span>)', 'При появата на първите подвижни форми на акарите. \r\nПри появата на първите снесени яйца при листоминиращите мухи.', '5 дни при полски услови и 3 дни в оранжерия', 0),
(16, 3, '15-100', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Краставици, Корнишони, Тиквички (оранжерийно производство)', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranichus urticae</span>)<br/>\r\nЛистоминиращи мухи (<span class="latin_name">Lyriomyza spp.</span>)', 'При появата на първите подвижни форми на акарите. \r\nПри появата на първите снесени яйца при листоминиращите мухи.', '3', 0),
(17, 3, '50-120', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Праскови', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranichus urticae</span>)<br/>\r\nЧервен овощен акар (<span class="latin_name">Panonichus ulmi</span>)<br/>\r\nКафяв ябълков акар (<span class="latin_name">Bryobia rubricolus</span>)', 'Венчелистчетата са опадали до 14 дни преди прибиране на реколтата.', '14', 0),
(18, 3, '60-96', '80 мл/хл', 'мл/дка', 1, NULL, NULL, 'Ябълка', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)<br/>\r\nЧервен овощен акар (<span class="latin_name">Panonichus ulmi</span>)', 'Венчелистчетата са опадали до 3 дни преди прибиране на реколтата', '3', 0),
(19, 3, '60-96', '80 мл/хл', 'мл/дка', 1, NULL, NULL, 'Круша', 'Обикновен паяжинообразуващ акар (<span class="latin_name">Tetranychus urticae</span>)<br/>\r\nЧервен овощен акар (<span class="latin_name">Panonichus ulmi</span>)', 'Венчелистчетата са опадали до 3 дни преди прибиране на реколтата.', '3', 0),
(20, 3, '37,5-120', '50-100 мл/хл', 'мл/дка', 1, NULL, NULL, 'Круша', 'Листни бълхи (<span class="latin_name">Psylla spp.</span>)', 'Венчелистчетата са опадали до 3 дни преди прибиране на реколтата.', '3', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
