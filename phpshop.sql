-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 21 2018 г., 12:44
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Піци', 1, 1),
(2, 'Салати ', 2, 1),
(3, 'Напої', 3, 1),
(4, 'Інші страви ', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `price`, `availability`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'Салямі', 1, 155, 1, 'Основа, томати, сир, салямі', 1, 1, 1),
(2, 'Капрічоза', 1, 118, 1, 'Основа, томати, сир, шинка, гриби, помідори, салямі', 0, 0, 1),
(3, 'Капрезе', 1, 125, 1, 'Основа, томати, сир, помідори, курка, шинка', 1, 1, 1),
(4, 'Гавайська', 1, 120, 1, 'Основа, томати, сир, ананас, кукурудза, курка, оливки', 0, 1, 1),
(5, 'Мілано', 1, 110, 1, 'Основа, томати, сир, курка, мисливська ковбаска, гриби', 0, 1, 1),
(6, '4 Сезони', 1, 120, 1, 'Основа, томати, сир, гриби, салямі, кукурудза, болгарський перець', 0, 0, 1),
(7, 'Козацька', 1, 110, 1, 'Основа, томати, сир, мисливська ковбаска, шинка, салямі, чілі, часник, цибуля', 0, 0, 1),
(8, 'Мега Піца', 1, 158, 1, 'Основа, томати, сир, салямі, шинка, гриби, кукурудза, болгарський перець, мисливська ковбаска, оливки', 1, 1, 1),
(9, '4 Сири', 1, 170, 1, 'основа, вершковий соус, моцарелла, пармезан, горгонзола, королівський сир', 1, 1, 1),
(10, 'Маргарита', 1, 95, 1, 'Основа, томати, сир, помідори', 0, 0, 1),
(11, 'Фунгі (Грибна)', 1, 97, 1, 'Основа, томати, сир, гриби', 0, 0, 1),
(12, 'Пікантна', 1, 98, 1, '\r\nОснова, томати, сир, чілі, мисливська ковбаска, цибуля, болгарський перець', 0, 0, 1),
(13, 'Панчета', 1, 110, 1, 'Основа, томати, сир, бекон, гриби, помідори', 0, 0, 1),
(14, 'Романа', 1, 150, 1, 'Основа, вершковий соус, сир, курка, гриби', 1, 1, 1),
(15, 'Прімавера', 1, 154, 1, 'Основа, томати, сир, кукурудза, болгарський перець, шинка, гриби', 1, 1, 1),
(16, 'Тонно', 1, 165, 1, 'Основа, томати, сир, тунець, італійські спеції', 1, 1, 1),
(17, 'Папероні', 1, 90, 1, 'Основа, томати, сир, папероні', 1, 1, 1),
(18, 'Садочок фруктовий 0,95л.', 3, 30, 1, '', 1, 1, 1),
(20, 'Салат «Полло»', 2, 58, 1, 'Салат (айсберг, пекінська капуста), помідори, оливки, сухарики, куряча грудинка, соус (олія, лимонний сік, сіль)', 1, 1, 1),
(21, 'Салат «Грецький»', 2, 55, 1, 'Салат (айсберг, пекінська капуста), помідори, оливки, болгарський перець, олія, сир Фета, огірки', 1, 1, 1),
(22, 'Салат «Цезар»', 2, 60, 1, 'Салат (айсберг, пекінська капуста), помідори, яйце, сухарики, куряча грудка, сир пармезан, соус \'\'Цезар\'\'', 1, 1, 1),
(23, 'Курячі нагетси', 4, 57, 1, 'Соковиті, обсмажені до золотистої скоринки курячі нагетси', 1, 1, 1),
(24, 'Курячі крильця', 4, 78, 1, 'Соковиті, обсмажені до рум\'яної скоринки курячі крильця', 1, 1, 1),
(25, 'Картопля Фрі 200гр.', 4, 46, 1, 'Хрустка картопля, обсмажена до золотистої скоринки', 1, 1, 1),
(26, 'Картопля Фрі 100гр.', 4, 36, 1, 'Хрустка картопля, обсмажена до золотистої скоринки', 1, 1, 1),
(27, 'Сандора фруктова 1л.', 3, 40, 1, '', 1, 1, 1),
(30, 'Садочок фруктовий 0,5л.', 3, 25, 1, '', 1, 1, 1),
(32, 'Пепсі ж/б', 3, 14, 1, '', 1, 1, 1),
(33, 'Пепсі 0.5л.', 3, 16, 1, '', 1, 1, 1),
(35, 'Пепсі 2л.', 3, 35, 1, '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(45, 'fsdfsd', '1', '123123123', 4, '2015-05-14 09:54:45', '{\"1\":1,\"2\":1,\"3\":2}', 3),
(46, 'САША1', 'g3424242342', '', 4, '2015-05-18 15:34:42', '{\"44\":3,\"43\":3}', 1),
(47, 'мном', '16541968479', 'геа', 4, '2018-12-21 09:48:31', '{\"50\":1}', 1),
(48, 'sergiy', '16541968479', '', 3, '2018-12-21 09:56:59', '{\"50\":1,\"44\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'sergiy', 'alex@mail.com', '111111', ''),
(4, 'admin', 'nadiadzh7@gmail.com', '222222', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
