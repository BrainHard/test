-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 25 2019 г., 15:48
-- Версия сервера: 5.7.27-0ubuntu0.16.04.1
-- Версия PHP: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `profiles`
--

CREATE TABLE `profiles` (
  `id` tinyint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '/uploads/undefined.png',
  `birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `slug` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `surname`, `email`, `avatar`, `birth`, `address`, `phone`, `slug`) VALUES
(1, 'Свирид', 'Голохвостый', 'svirid.gg@gmail.com', '/uploads/undefined.png', '1980-08-10', 'Украина, Киев', '380661539948', 'golokhvostiy1'),
(2, 'Прокоп', 'Серко', 'prokopserko1102@gmail.com', '/uploads/undefined.png', '1975-02-11', 'Украина, Киев', '380507796155', 'serko1'),
(3, 'Остап', 'Бендер', 'ledtronulsa@mail.ru', '/uploads/undefined.png', '1966-09-13', 'Украина, Одесса', '380969004550', 'bender1'),
(4, 'Шерлок', 'Холмс', 'elementarno@vatson.com', '/uploads/undefined.png', '1982-01-01', 'Англия, Лондон', '380504566666', 'kholms1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` tinyint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
