-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 15 2017 г., 18:49
-- Версия сервера: 5.7.17-11-beget-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ssset20d_kurs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--
-- Создание: Мар 11 2017 г., 18:59
-- Последнее обновление: Мар 11 2017 г., 18:59
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `gos_nomer` int(11) NOT NULL,
  `class` varchar(40) NOT NULL,
  `color` varchar(25) NOT NULL,
  `god_vipuska` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `tex_sostoanie` varchar(25) NOT NULL DEFAULT 'удовлетворительное'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`gos_nomer`, `class`, `color`, `god_vipuska`, `img`, `tex_sostoanie`) VALUES
(1, 'Обычный', 'Желтый', 2007, 'car1.jpg', 'удовлетворительное'),
(2, 'Микробус', 'Желтый', 2008, 'car2.jpg', 'удовлетворительное'),
(3, 'Комфорт', 'Желтый', 2013, 'car3.jpg', 'удовлетворительное'),
(4, 'Бизнес&nbsp&nbsp&nbsp&nbsp&nbsp', 'Белый', 2015, 'car4.jpg', 'удовлетворительное');

-- --------------------------------------------------------

--
-- Структура таблицы `discontnie_karti`
--
-- Создание: Мар 09 2017 г., 15:31
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `discontnie_karti`;
CREATE TABLE `discontnie_karti` (
  `id_discortnoy_karti` int(11) NOT NULL,
  `nomer_telefona` int(11) NOT NULL,
  `razmer_skidki` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dispetcher`
--
-- Создание: Мар 12 2017 г., 09:52
-- Последнее обновление: Мар 14 2017 г., 19:32
--

DROP TABLE IF EXISTS `dispetcher`;
CREATE TABLE `dispetcher` (
  `login` varchar(253) NOT NULL,
  `pass` varchar(253) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dispetcher`
--

INSERT INTO `dispetcher` (`login`, `pass`) VALUES
('admin', 'admin1'),
('1111', '1111');

-- --------------------------------------------------------

--
-- Структура таблицы `drivers`
--
-- Создание: Мар 09 2017 г., 15:31
-- Последнее обновление: Мар 14 2017 г., 18:42
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `familiya` varchar(20) NOT NULL,
  `imya` varchar(20) NOT NULL,
  `otchestvo` varchar(20) NOT NULL,
  `data_rojdeniya` date NOT NULL,
  `staj` int(3) NOT NULL,
  `category` varchar(4) NOT NULL,
  `gos_nomer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drivers`
--

INSERT INTO `drivers` (`id`, `familiya`, `imya`, `otchestvo`, `data_rojdeniya`, `staj`, `category`, `gos_nomer`) VALUES
(1, 'Иванов', 'Олександр', '', '2017-03-02', 10, '3', 1),
(2, 'Сапогов', 'Денис', '', '2017-03-04', 3, 'А', 2),
(3, 'Еременко', 'Евгений', '', '2017-03-05', 6, 'А', 3),
(4, 'Симонов', 'Слава', '', '2017-03-19', 8, 'А1', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `mestopolojenie`
--
-- Создание: Мар 14 2017 г., 10:27
-- Последнее обновление: Мар 14 2017 г., 10:27
--

DROP TABLE IF EXISTS `mestopolojenie`;
CREATE TABLE `mestopolojenie` (
  `driver1` int(11) NOT NULL,
  `data1` date NOT NULL,
  `rayon` varchar(253) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `obslujevanie_zayav`
--
-- Создание: Мар 09 2017 г., 15:31
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `obslujevanie_zayav`;
CREATE TABLE `obslujevanie_zayav` (
  `id` int(11) NOT NULL,
  `driver` int(11) NOT NULL,
  `vremya_nachala` date NOT NULL,
  `vremya_okonch` date NOT NULL,
  `discortnaya karta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rayoni`
--
-- Создание: Мар 09 2017 г., 15:31
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `rayoni`;
CREATE TABLE `rayoni` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rayoni`
--

INSERT INTO `rayoni` (`id`, `name`) VALUES
(1, 'Центральный'),
(2, 'Северный'),
(3, 'Южный');

-- --------------------------------------------------------

--
-- Структура таблицы `rayoni_1`
--
-- Создание: Мар 09 2017 г., 15:31
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `rayoni_1`;
CREATE TABLE `rayoni_1` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rayoni_1`
--

INSERT INTO `rayoni_1` (`id`, `name`) VALUES
(1, 'Центральный'),
(2, 'Северный'),
(3, 'Южный');

-- --------------------------------------------------------

--
-- Структура таблицы `svyaz_ulic`
--
-- Создание: Мар 09 2017 г., 15:31
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `svyaz_ulic`;
CREATE TABLE `svyaz_ulic` (
  `kod_ulici1` int(11) NOT NULL,
  `kod_ulici2` int(11) NOT NULL,
  `vremya` int(11) NOT NULL,
  `stoimost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tarifi_taksi`
--
-- Создание: Мар 14 2017 г., 10:26
-- Последнее обновление: Мар 14 2017 г., 10:26
--

DROP TABLE IF EXISTS `tarifi_taksi`;
CREATE TABLE `tarifi_taksi` (
  `kod_zayavki1` int(11) NOT NULL,
  `nach_znach` varchar(253) NOT NULL,
  `kon_znach` varchar(253) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ylici`
--
-- Создание: Мар 09 2017 г., 16:43
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `ylici`;
CREATE TABLE `ylici` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_rayon` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ylici`
--

INSERT INTO `ylici` (`id`, `name`, `id_rayon`) VALUES
(1, 'Ленина', 1),
(2, 'Пушкина', 1),
(3, 'Остапенка', 1),
(4, 'Кината', 2),
(5, 'Северная', 2),
(6, 'Старая', 2),
(7, 'Новая', 3),
(8, 'Крованская', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `ylici_1`
--
-- Создание: Мар 09 2017 г., 16:40
-- Последнее обновление: Мар 10 2017 г., 23:33
-- Последняя проверка: Мар 10 2017 г., 23:33
--

DROP TABLE IF EXISTS `ylici_1`;
CREATE TABLE `ylici_1` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `id_rayon` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ylici_1`
--

INSERT INTO `ylici_1` (`id`, `name`, `id_rayon`) VALUES
(1, 'Ленина', 1),
(2, 'Пушкина', 1),
(3, 'Остапенка', 1),
(4, 'Кината', 2),
(5, 'Северная', 2),
(6, 'Старая', 2),
(7, 'Новая', 3),
(8, 'Крованская', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `zakazi`
--
-- Создание: Мар 14 2017 г., 15:53
-- Последнее обновление: Мар 14 2017 г., 20:58
--

DROP TABLE IF EXISTS `zakazi`;
CREATE TABLE `zakazi` (
  `id_zayavki` int(11) NOT NULL,
  `imya` varchar(25) NOT NULL,
  `familiya` varchar(25) NOT NULL,
  `otchestvo` varchar(25) NOT NULL,
  `telefon` int(11) NOT NULL,
  `data_zayavki` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ylica_posadki` varchar(40) NOT NULL,
  `adres_posadki` varchar(40) NOT NULL,
  `ulica_okon_poezdki` varchar(25) NOT NULL,
  `adres_okon_poezdki` varchar(25) NOT NULL,
  `predvar_zakaz` datetime DEFAULT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'непод'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakazi`
--

INSERT INTO `zakazi` (`id_zayavki`, `imya`, `familiya`, `otchestvo`, `telefon`, `data_zayavki`, `ylica_posadki`, `adres_posadki`, `ulica_okon_poezdki`, `adres_okon_poezdki`, `predvar_zakaz`, `car_id`, `status`) VALUES
(40, 'asdsa', 'sad', '', 1234, '2017-03-14 18:15:00', 'Ленина', 'asd23', 'Ленина', 'dsf213', '2017-03-15 00:00:00', 4, 'подтв'),
(41, 'asdsa', 'sad', '', 1234, '2017-03-14 16:05:40', 'Ленина', 'asd23', 'Ленина', 'dsf213', '2017-03-15 00:00:00', 4, 'непод'),
(42, 'asdsa', 'sad', '', 1234, '2017-03-14 16:05:40', 'Ленина', 'asd23', 'Ленина', 'dsf213', '2017-03-15 00:00:00', 4, 'непод'),
(43, 'asdsa', 'sad', '', 1234, '2017-03-14 18:12:54', 'Ленина', 'asd23', 'Ленина', 'dsf213', '2017-03-15 00:00:00', 4, 'подтв'),
(44, 'asdsa', 'sad', '', 1234, '2017-03-14 16:05:40', 'Ленина', 'asd23', 'Ленина', 'dsf213', '2017-03-15 00:00:00', 3, 'непод'),
(45, 'asdsa', 'sad', '', 1234, '2017-03-14 18:12:39', 'Ленина', 'asd23', 'Ленина', 'dsf213', '2017-03-15 00:00:00', 1, 'подтв'),
(46, '', '', '', 0, '2017-03-14 20:58:42', 'Ленина', '', 'Ленина', '', '0000-00-00 00:00:00', 0, 'подтв');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`gos_nomer`);

--
-- Индексы таблицы `discontnie_karti`
--
ALTER TABLE `discontnie_karti`
  ADD UNIQUE KEY `id_discortnoy_karti` (`id_discortnoy_karti`);

--
-- Индексы таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `obslujevanie_zayav`
--
ALTER TABLE `obslujevanie_zayav`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `rayoni`
--
ALTER TABLE `rayoni`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rayoni_1`
--
ALTER TABLE `rayoni_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `ylici`
--
ALTER TABLE `ylici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `ylici_1`
--
ALTER TABLE `ylici_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `zakazi`
--
ALTER TABLE `zakazi`
  ADD PRIMARY KEY (`id_zayavki`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `obslujevanie_zayav`
--
ALTER TABLE `obslujevanie_zayav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `rayoni`
--
ALTER TABLE `rayoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `rayoni_1`
--
ALTER TABLE `rayoni_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `ylici`
--
ALTER TABLE `ylici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `ylici_1`
--
ALTER TABLE `ylici_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `zakazi`
--
ALTER TABLE `zakazi`
  MODIFY `id_zayavki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
