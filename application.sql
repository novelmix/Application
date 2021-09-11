-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 11 2021 г., 23:52
-- Версия сервера: 10.3.31-MariaDB-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `application`
--

-- --------------------------------------------------------

--
-- Структура таблицы `example`
--

CREATE TABLE `example` (
  `id` int(111) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `example`
--

INSERT INTO `example` (`id`, `name`, `email`, `text`, `status`, `updated_at`, `created_at`) VALUES
(1, '23213', 'dwdqq@gmail.com', 'dqd', 1, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(2, 'www', 'ggf@gmail.com', 'd', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(3, 'qdwd', 'eqw@ukr.net', 'qweq', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(4, '121', 'ddq@dwq', 'qwdq', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(5, 'ewqed', 'eqw@ukr.net', '', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(6, 'dwe', 'dwdqq@gmail.com', 'dwd', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(7, 'qewqe', 'eqw@ukr.net', 'dwdw', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(8, 'qewqe', 'dwdqq@gmail.com', 'wqqd', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(9, 'qewqe', 'dwdqq@gmail.com', 'wqqd', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(10, 'admin', 'spacebar0@3', 'qdq', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(11, 'admin', 'admin0@thespacebar.com', 'dwqdq', 0, '2021-09-11 15:40:20', '2021-09-11 15:40:20'),
(12, 'ewqed', 'dwdqq@gmail.com', 'wqdq', 0, '2021-09-11 15:40:39', '2021-09-11 15:40:39'),
(13, '23213', 'dwdqq@gmail.com', 'dqd', 0, NULL, '2021-09-11 15:41:21'),
(14, 'andrey', 'eqw@ukr.net', 'sexy', 0, NULL, '2021-09-11 17:35:27');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(60) DEFAULT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `example`
--
ALTER TABLE `example`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
