-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 12 2015 г., 19:35
-- Версия сервера: 5.5.41
-- Версия PHP: 5.4.39-1+deb.sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii2adv`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `article` text,
  PRIMARY KEY (`id`),
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `id_menu`, `title`, `article`) VALUES
(1, 1, NULL, '<p>Добро пожаловать на сайт Государственного бюджетного учреждения здравоохранения «Псковская районная больница» (ГБУЗ «Псковская РБ»).</p>\r\n<p>ГБУЗ «Псковская РБ» оказывает  стационарную и амбулаторную помощь населению Псковского района.</p>\r\n<p>Стационарная помощь оказывается по следующим профилям: хирургический, гинекологический, неврологический, терапевтический, педиатрический.</p>\r\n<p>В поликлинике терапевтическая участковая служба представлена 15 участками, педиатрическая  участковая служба - 7 участками, также есть 2 участока врача общей практики.</p>\r\n<p>Ежедневно  в поликлинике  ведут прием терапевт, педиатр, акушер-гинеколог, хирург, окулист, невролог, эндокринолог, нарколог, психиатр, стоматолог, фтизиатр, фельдшер онкологического кабинета, работает смотровой кабинет. </p>\r\n<p>Выполняются флюорография, рентген, лабораторные клинические и биохимические анализы, работает кабинет массажа, выполняются физиопроцедуры.</p>\r\n<p> В диагностическом центре при РБ проводится 15 видов диагностических исследований: ЭКГ, УЗДГ сосудов головного  мозга, УЗДГ конечностей , спирограмма, УЗИ сердца, УЗИ щитовидной железы, УЗИ женских половых органов, УЗИ мочеполовой системы, УЗИ брюшной полости, гемодинамика, РЭГ, РВГ, ФГДС, бронхоскопия, тепловидение.</p>\r\n<p>На начало 2011 г. население Псковского района, обслуживаемого Псковской РБ составляло 35960 чел. Коечный фонд больницы -- 244 койки.</p>\r\n<p>В структуру РБ входит районная поликлиника, райбольница №1 с. Середка, райбольница №2 с. Карамышево, 32 фельдшерско-акушерский пункт.</p>\r\n<p>ГБУЗ «Псковская РБ» расположена на федеральной трассе Санкт-Петербург -- Киев. </p>'),
(2, 4, 'История создания', '<p>В 1928 году в Псковском округе появились планы постройки в месте слияния двух рек Великой и Черехи медицинского учреждения.</p>\r\n<p>Амбулатория должна была обслуживать два строящихся кирпичных завода, большую торфоразработку.</p>\r\n<p>Медицинский персонал составлял: врач -- 1, акушерка -- 1, лекпом -- 1, младший персонал -- 1.</p>\r\n<p>С 1944 года амбулатория стала называться Черехинской больницей псковского райздравотдела. Находилась она на территории деревни Б. Лопатино Ядровской волости. В состав входило: ФАП -- 9, АП -- 10. Между больницей, ФАПами и участковыми больницами расстояние было от 10 до 40 км. Пути сообщения: водный, железнодорожный и шоссейный.</p>\r\n<p>До 1955 года в архивах данных коечного фонда не сохранилось. А в 1955 году стационар имел 35 коек, амбулаторию, женско-детскую консультацию, клинико-диагностическую лабораторию, санпропускник, операционную и перевязочную.</p>\r\n<p>В штате было 50 человек (8 -- врачей, 19 -- среднего медперсонала, 14 -- младшего медперсонала, 9 -- прочих). Работали следующие отделения: терапевтичекое, хирургическое, родильное, детское, инфекционное, гинекологическое.</p>\r\n<p>Кроме Черехинской больницы, где было 35 коек, еще работали: Моглинская участковая больница (25 коек), Назимовская участковая больница (25 коек), Торошинская участковая больница (20 коек), Залитская участковая больница (10 коек), Сосновская участковая больница (5 коек), Елизаровская участковая больница (3 койки). С июля 1955 года Моглинская больница стала функционировать как инфекционная больница.</p>\r\n<p>С 1957 года обслуживали 40 тыс. населения. В конце 1957 года уже стало 20 ФАПов и появилась районная поликлиника.</p>\r\n<p>В 2002 году население Псковского района составляло 36329 человек. Протяженность района -- 150 км, радиус обслуживания -- 50 км. Лечебно-профилактическая помощь населению оказывается стационаром Псковской РБ на 210 коек и филиалом стационара №1 в пос. Середка на 35 коек (из них 15 коек социального ухода). При больнице имеется аптечное отделение.</p>\r\n<p>Скорая и неотложная помощь представлена 3 пунктами -- в районной больнице на 2,5 поста, в пос. Середка -- на 0,75 поста и в пос. Карамышево -- на 0,75 поста.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `left_menu`
--

CREATE TABLE IF NOT EXISTS `left_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `controller` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `controller` (`controller`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `left_menu`
--

INSERT INTO `left_menu` (`id`, `title`, `controller`, `action`, `order`) VALUES
(1, 'Основные сведения', 'site', 'index', 100),
(2, 'Структура', 'site', 'structure', 200),
(3, 'Новости', 'site', 'news', 300),
(4, 'История', 'site', 'history', 400),
(5, 'Виды медицинской помощи', 'medicine', 'index', 100),
(6, 'Лекарственные препараты', 'medicine', 'drugs', 200),
(7, 'Доступность и качество', 'medicine', 'accessibility', 300),
(8, 'Лицензия', 'docs', 'index', 100),
(9, 'Нормативная документация', 'docs', 'normative', 200),
(10, 'Врачи', 'job', 'index', 100),
(11, 'Средний медперсонал', 'job', 'nurses', 200),
(12, 'Младший медперсонал', 'job', 'paramedics', 300),
(13, 'Немедицинские работники', 'job', 'others', 400),
(14, 'Контакты', 'contacts', 'index', 100),
(15, 'Адреса и телефоны', 'contacts', 'others', 200),
(16, 'Обратная связь', 'contacts', 'feedback', 300);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `top_menu`
--

CREATE TABLE IF NOT EXISTS `top_menu` (
  `title` varchar(30) NOT NULL,
  `controller` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`controller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `top_menu`
--

INSERT INTO `top_menu` (`title`, `controller`, `order`) VALUES
('Контакты', 'contacts', 500),
('Документы', 'docs', 300),
('Вакансии', 'job', 400),
('Медицина', 'medicine', 200),
('Главная', 'site', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vvk', 'EAL097Hi80SsFyUrUUuhOjeqJfckh2pC', '$2y$13$sn0qS0oQ2NMw.EKhLsZ/oOy1hRM.p0jW0S1s//aVjPunSfZcMg6Dq', NULL, 'vkabachenko@gmail.com', 10, 1425660179, 1425660179);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `left_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `left_menu`
--
ALTER TABLE `left_menu`
  ADD CONSTRAINT `left_menu_ibfk_1` FOREIGN KEY (`controller`) REFERENCES `top_menu` (`controller`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
