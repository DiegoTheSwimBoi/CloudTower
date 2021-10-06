-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 14 2021 г., 20:06
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_cipher`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contents`
--

CREATE TABLE `contents` (
  `id` int NOT NULL,
  `element_id` int NOT NULL,
  `type_id` int NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_id` int NOT NULL,
  `rowByOne` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contents`
--

INSERT INTO `contents` (`id`, `element_id`, `type_id`, `content`, `table_id`, `rowByOne`) VALUES
(2, 1, 5, '1', 1, 1),
(3, 2, 2, 'Строка', 1, 1),
(4, 3, 3, 'Просто обычная строка', 1, 1),
(5, 1, 5, '2', 1, 2),
(6, 2, 2, 'Строка2', 1, 2),
(7, 3, 3, 'new line', 1, 2),
(8, 1, 5, '3', 1, 3),
(9, 2, 2, 'Строка3', 1, 3),
(10, 3, 3, 'New lion', 1, 3),
(37, 55, 1, '						1						', 27, 1),
(38, 56, 2, '						Сказки Пушкина					', 27, 1),
(39, 57, 4, '						2021-05-14					', 27, 1),
(40, 55, 1, '						2						', 27, 2),
(41, 56, 2, '						Карандаши						', 27, 2),
(42, 57, 4, '						2021-06-14					', 27, 2),
(43, 55, 1, '						3						', 27, 3),
(44, 56, 2, '						Линейки						', 27, 3),
(45, 57, 4, '						2021-07-14					', 27, 3),
(46, 55, 1, '						4						', 27, 4),
(47, 56, 2, '						Тетрадки						', 27, 4),
(48, 57, 4, '						2021-05-14					', 27, 4),
(55, 55, 1, '						5						', 27, 5),
(56, 56, 2, '						Строка2						', 27, 5),
(57, 57, 4, '						2021-02-14						', 27, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `dbs_helping_hand`
--

CREATE TABLE `dbs_helping_hand` (
  `id` int NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` int NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dbs_helping_hand`
--

INSERT INTO `dbs_helping_hand` (`id`, `name`, `valid`, `description`) VALUES
(5, 'maxRowsDefault', 10, 'Используется, для определения максимума строк в таблице пользователя'),
(6, 'minRowsDefault', 3, 'По умолчанию при создании таблицы'),
(7, 'maxTablesDefault', 3, 'Для обозначения макс. таблиц пользователю');

-- --------------------------------------------------------

--
-- Структура таблицы `elements`
--

CREATE TABLE `elements` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` int NOT NULL,
  `table_id` int NOT NULL,
  `type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `elements`
--

INSERT INTO `elements` (`id`, `name`, `length`, `table_id`, `type_id`) VALUES
(1, 'id', 0, 1, 5),
(2, 'title', 0, 1, 2),
(3, 'text', 40, 1, 3),
(55, 'id', 0, 27, 1),
(56, 'title', 0, 27, 2),
(57, 'date', 0, 27, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'banned');

-- --------------------------------------------------------

--
-- Структура таблицы `tables`
--

CREATE TABLE `tables` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `rows_count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tables`
--

INSERT INTO `tables` (`id`, `name`, `user_id`, `rows_count`) VALUES
(1, 'RTable1', 5, 3),
(27, 'Моя Таблица', 12, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`, `input`) VALUES
(1, 'INT', 'number'),
(2, 'VARCHAR', 'text'),
(3, 'TEXT', 'textarea'),
(4, 'DATE', 'date'),
(5, 'PRIMARY(INT)', 'hidden');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_table` int NOT NULL,
  `roles_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `telephone`, `password`, `date`, `avatar`, `count_table`, `roles_id`) VALUES
(5, 'lomtsovdj@gmail.com', '+7 (982) 304-8718', '$2y$10$Wz6MIMNesUXg5acz5uxbyeVsEAeLuE8Nh9uvEc8ff9Cxotw.iepwW', '2000-12-02', 'custom/lomtsovdj@gmail.com/icon_1624205522.png', 1, 1),
(12, 'dj@gmail.com', '-/-/-/-', '$2y$10$ofRUJlnLJljCDgI/uqUKUuzMzc0okyb/9VEY4IMxc5apK1yPV3X.6', '1999-09-12', 'custom/dj@gmail.com/DemoUser.png', 1, 2),
(17, 'savage@gmail.com', '-/-/-/-', '$2y$10$F3a7biT7MCnt3juY0.5O6.GbiBh4q2OhgIlYb513boTAURaWgUIo2', '1999-09-12', 'custom/savage@gmail.com/ДЖАМБА_1624256413.png', 0, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_elements_id` (`element_id`),
  ADD KEY `content_types_id` (`type_id`),
  ADD KEY `contents_table_id` (`table_id`);

--
-- Индексы таблицы `dbs_helping_hand`
--
ALTER TABLE `dbs_helping_hand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_users_id` (`user_id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_users` (`roles_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `dbs_helping_hand`
--
ALTER TABLE `dbs_helping_hand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `content_types_id` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contents_elements_id` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contents_table_id` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `elements`
--
ALTER TABLE `elements`
  ADD CONSTRAINT `elements_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `table_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_users` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
