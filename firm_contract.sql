-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2019 г., 20:00
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `firm_contract`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contract`
--

CREATE TABLE `contract` (
  `id_c` int(11) NOT NULL,
  `id_firm` int(11) NOT NULL,
  `numberd` varchar(10) NOT NULL,
  `named` varchar(250) NOT NULL,
  `sumd` float NOT NULL,
  `datastart` date NOT NULL,
  `datafinish` date NOT NULL,
  `avans` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contract`
--

INSERT INTO `contract` (`id_c`, `id_firm`, `numberd`, `named`, `sumd`, `datastart`, `datafinish`, `avans`) VALUES
(1, 1, '102030', 'Поставка турбин', 100000, '2019-04-03', '2019-05-03', 10000),
(2, 2, '304050', 'Поставка обвесов', 35000, '2019-06-04', '2019-07-23', 5000),
(3, 3, '506070', 'Поставка дисков', 50000, '2019-01-14', '2019-04-03', 3000),
(4, 4, '708090', 'Поставка тормозных дисков', 120000, '2019-05-20', '2019-08-20', 20000);

-- --------------------------------------------------------

--
-- Структура таблицы `firm`
--

CREATE TABLE `firm` (
  `id_firm` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shef` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `firm`
--

INSERT INTO `firm` (`id_firm`, `name`, `shef`, `address`) VALUES
(1, 'HKS', 'Хироюки Хасэгава', 'Фудзиномия, Япония'),
(2, 'RWB', 'Акира Накай', 'Чиба-Кен, Япония'),
(3, 'RAYS', 'Масуми Шиба', 'Осака, Япония'),
(4, 'Brembo', 'Андрэ Аббати Марескотти', 'Курно, Италия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id_c`);

--
-- Индексы таблицы `firm`
--
ALTER TABLE `firm`
  ADD PRIMARY KEY (`id_firm`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contract`
--
ALTER TABLE `contract`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `firm`
--
ALTER TABLE `firm`
  MODIFY `id_firm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
