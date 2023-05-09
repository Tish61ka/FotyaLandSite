-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2023 г., 21:00
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fotyaland`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animators`
--

CREATE TABLE `animators` (
  `id` int NOT NULL,
  `main_img` varchar(255) DEFAULT NULL,
  `left_img` varchar(255) DEFAULT NULL,
  `right_img` varchar(255) DEFAULT NULL,
  `bottom_first` varchar(255) DEFAULT NULL,
  `bottom_second` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `main_title` varchar(250) DEFAULT NULL,
  `bottom_page_img_left` varchar(250) DEFAULT NULL,
  `bottom_page_img_right` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `animators`
--

INSERT INTO `animators` (`id`, `main_img`, `left_img`, `right_img`, `bottom_first`, `bottom_second`, `title`, `text`, `main_title`, `bottom_page_img_left`, `bottom_page_img_right`) VALUES
(1, '/img/alisa-main-img.png', '/img/logoa1.png', '/img/backheada1.png', '/img/imga2.png', '/img/imga3.png', 'Аниматоры Алиса в Стране Чудес на праздник', 'В далекой Стране Чудес Алиса немного заскучала и с радостью приняла приглашение на день рождения. Вместе со Шляпником Алиса преподнесет маленькой имениннице волшебную чайную ложечку — она перемешает, что угодно и где угодно. Только вот незадача — получить ложечку не так просто, ведь она принадлежит самой Красной Королеве! Что делать? Отправляться вместе с гостями из зазеркалья увлекательное приключение на поиски волшебной ложечки и верных друзей, пройти зачарованный лес, задобрить вредную королеву и получить заветный подарок.', 'Алиса в стране чудес', '/img/backgra1.png', '/img/tarifimga1.png'),
(2, '/img/starwars.png', '/img/starwars-left.png', '/img/starwars-right.png', '/img/starwars-bottom-first.png', '/img/starwars-bottom-second.png', 'Аниматоры Звездные войны', 'Межгалактические истории продолжаются. В этот раз Оби Ван, Лея и их друзья прибыли на Землю, чтобы отыскать самый мощный источник энергии во Вселенной и опередить коварного Вейдера.\r\n\r\nВ программе гостей праздника ждет много конкурсов и испытаний на прочность, но в конце шоу будет невероятный сюрприз — оказывается, что источником энергии, который так активно ищут гости из других планет, является сам именинник!', 'Звездные войны', '/img/starwars-bottom_page_img_left.png', '/img/starwars-bottom_page_img_right.png');

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `status` varchar(250) DEFAULT 'В обработке'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `otziv`
--

INSERT INTO `otziv` (`id`, `name`, `number`, `status`) VALUES
(3, 'Даниил', '89673312786', 'В обработке');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `event`, `text`, `img`, `status`, `id_user`) VALUES
(10, 'Даниил', 'Дрифт', '123', 'img/123.jpg', 'Одобрен', 3),
(11, 'Даниил', '123', 'Банка', 'img/KN04Ns5ea5E.jpg', 'Одобрен', 3),
(12, 'Даниил', 'Еда', '123', 'img/2019Food___Cakes_and_Sweet_Two_sweet_donuts_with_chocolate_on_a_gray_background_138328_23.jpg', 'Одобрен', 3),
(13, 'Даниил', 'Еда', 'Вкусно', 'img/1670994278_57-podacha-blud-com-p-foto-shokoladnikh-ponchikov-58.jpg', 'Одобрен', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` int DEFAULT '0',
  `email` varchar(250) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`, `email`, `name`, `avatar`) VALUES
(3, 'kaneki13383', '123', 0, 'danchik.kun@mail.ru', 'Daniil', 'img/123.jpg'),
(4, 'admin', '123', 1, 'danchik.kun@mail.ru', 'Юрий', 'img/123.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animators`
--
ALTER TABLE `animators`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animators`
--
ALTER TABLE `animators`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
