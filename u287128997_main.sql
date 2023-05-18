-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2023 г., 07:42
-- Версия сервера: 10.6.12-MariaDB-cll-lve
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u287128997_main`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `session` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `session`, `username`, `info`) VALUES
(2, 'dijate5147@moneyzon.com', '', 'a9f84d938433dcd03d476de05794c341', '', 'a:2:{s:2:\"ip\";s:14:\"178.133.57.156\";s:17:\"date_registration\";i:1674144033;}'),
(3, 'w33kendchill@gmail.com', 'unset', '12426a9b67898b4ec4218cf23d3ddb06', 'w33kendchill', 'a:2:{s:2:\"ip\";s:14:\"159.224.216.15\";s:17:\"date_registration\";i:1674231581;}'),
(4, 'bemolit607@moneyzon.com', 'unset', '54fa13110ce900c868f4d321e5aa23b9', 'bemolit607', 'a:2:{s:2:\"ip\";s:14:\"159.224.216.15\";s:17:\"date_registration\";i:1674237626;}'),
(5, '03304412000m@gmail.com', '433c880acaa71a0b6f739a557158cc74', 'e94b4b55b63cc2a237dcdbcdb114d443', '03304412000m', 'a:2:{s:2:\"ip\";s:13:\"24.188.159.37\";s:17:\"date_registration\";i:1674240277;}'),
(6, 'wedamol541@quamox.com', 'unset', '89f139748fd8e53d83b073bdd134f18f', 'wedamol541', 'a:2:{s:2:\"ip\";s:12:\"46.133.18.57\";s:17:\"date_registration\";i:1674646593;}'),
(7, 'pivaris878@aosod.com', 'unset', 'dfb18ae7200965f20f9c4f624e29f9e6', 'pivaris878', 'a:2:{s:2:\"ip\";s:14:\"159.224.216.15\";s:17:\"date_registration\";i:1676973024;}'),
(8, 'pojopax577@galcake.com', 'unset', '6a8144d57d73a9c0a84e0948a4c9cf09', 'pojopax577', 'a:2:{s:2:\"ip\";s:14:\"159.224.216.15\";s:17:\"date_registration\";i:1679469539;}'),
(9, 'arty.rybin@gmail.com', 'unset', '1b4aec10deba6c224e3f553ad93180dd', 'arty.rybin', 'a:2:{s:2:\"ip\";s:14:\"188.227.10.162\";s:17:\"date_registration\";i:1682030800;}'),
(10, 'boss.arlamov@mail.ru', 'unset', '65183ce7f3cedc1dcb51ec838bfccd5c', 'boss.arlamov', 'a:2:{s:2:\"ip\";s:15:\"217.159.202.100\";s:17:\"date_registration\";i:1684394301;}'),
(12, 'edvin.kaapa@ivkhk.ee', 'unset', '22bb236d88d2e7880de0f93ec8b834a9', 'edvin.kaapa', 'a:2:{s:2:\"ip\";s:15:\"217.159.202.100\";s:17:\"date_registration\";i:1684395489;}');

-- --------------------------------------------------------

--
-- Структура таблицы `accounts_confirm`
--

CREATE TABLE `accounts_confirm` (
  `id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `code` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `accounts_confirm`
--

INSERT INTO `accounts_confirm` (`id`, `type`, `code`, `email`) VALUES
(18, 'reset', 'a06af36af6930e163dc99908526fcea3', 'dijate5147@moneyzon.com'),
(22, 'registration', 'f19cbe263717e3b1d77d35a7126ff864', 'test@gmail.com'),
(24, 'registration', 'ba9428a62453e75fa9ea1f8a1fc76131', 'sobaka@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `backend_accounts`
--

CREATE TABLE `backend_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(11) NOT NULL,
  `info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `booster_accounts`
--

CREATE TABLE `booster_accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `username` varchar(64) NOT NULL,
  `balance` decimal(9,2) NOT NULL,
  `status` varchar(16) NOT NULL,
  `session` varchar(128) NOT NULL,
  `information` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `booster_accounts`
--

INSERT INTO `booster_accounts` (`id`, `email`, `password`, `username`, `balance`, `status`, `session`, `information`) VALUES
(1, 'asdasdasd@fdasdas.com', 'd41d8cd98f00b204e9800998ecf8427e', '123', '0.00', '', '', ''),
(2, 'asdasdasd1@fdasdas.com', '852bb786715c120b19d06fa15df75d61', '123', '0.00', '', '', ''),
(3, 'asdasdasd2@fdasdas.com', '673a38f8df653002cde0a59ed35ecec4', '', '0.00', '', '', ''),
(4, 'asdasdasd3@fdasdas.com', 'e690dd3c318952741667c0dea8abbf73', '', '0.00', '', '', ''),
(5, 'booster_1@gmail.com', 'ec6abea8deb644bb6bdbd55ca0f4fd13', 'booster_1', '0.00', 'active', '', ''),
(6, 'booster_2@gmail.com', '5e8719a2d1383975b36a8447372ca63c', 'booster_2', '0.00', 'active', '', ''),
(7, 'booster_3@gmail.com', 'e0dd06778959de8a02ce00ff3e1cce9c', 'booster_3', '0.00', 'active', '', ''),
(8, 'booster4@gmail.com', '45794c4a11acbdbb9d56c67d94d9f269', 'booster4', '0.00', 'active', '', ''),
(9, 'lolbooster@gmail.com', 'd22d23e4e8b4d01fe5370ec2107b8ff0', 'lolbooster', '0.00', 'active', '', ''),
(10, '03304412000m@gmail.com', '103c4f3e4e92ee721eea990de4a7a6ed', 'xiaoxiaoheehee', '0.00', 'active', '52f73055424a795954492cb18ecd0282', ''),
(11, 'megaboosterk1d@gmail.com', '78d67ebce7bc89aa9bfab03d1ff9fb81', 'megaboosterk1d', '154.75', 'active', 'cf6a07a865868daa4004ba84278349b5', ''),
(12, 'testbooster@gmail.com', '02364c72025c4fd7aa10e5ed70d16eb8', 'testbooster', '0.00', 'active', '17f701d48d1da7e6fc75d11ca5f725f6', ''),
(13, 'pavlo3822@mail.ru', '8ff95beee6f4c1a9b9b0dc93738a92dd', 'Shokumotsu', '0.00', 'active', '', ''),
(14, 'artem@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'artem', '0.00', 'active', '', ''),
(15, 'ultraman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '0.00', 'active', '', ''),
(16, '04403312000m@gmail.com', '69bd8a480988bdcc4d6ae32ad8f154f4', 'damn', '0.00', 'active', '14bf02c84b57c951859837490ac826b8', ''),
(17, 'workbooster@gmail.com', '627ed7c131f62799438573e74a3433e8', 'workbooster', '0.00', 'active', '8f98fa101dea163c5ad4faa8e7de1f93', ''),
(18, 'edvin.frizen@gmail.com', 'fc59a3aae306b1b7a8cd054ba80d45e0', 'ArturPRO1337', '0.00', 'active', '04c3d9c04d8e26cffc32862804e0c17b', ''),
(19, 'boss.arlamov@mail.ru', 'a362570f2bc1dbef78124ece20cb3464', 'Tores', '0.00', 'active', 'ff19c5c2eeb7c19ea46f0019784f8c88', ''),
(20, 'a.arlamov@bk.ru', '25d55ad283aa400af464c76d713c07ad', 'ysdfgudy', '0.00', 'active', 'ccd1b4bf79a42226f47795e823743d27', ''),
(21, 'ilja.astasev@ivkhk.ee', '62c8ad0a15d9d1ca38d5dee762a16e01', 'ilja', '0.00', 'active', '1873bb93a0d03ea4e8f5723680f230a8', ''),
(22, 'lilboost@gmail.com', 'e5fc759424e683472a96a1c72c3fb5c8', 'lilboost', '0.00', 'active', '0053a494b00c2f95612956dbbe3d909b', ''),
(24, 'edvin.kaapa@ivkhk.ee', '098f6bcd4621d373cade4e832627b4f6', 'test', '0.00', 'active', '0a63f8684e27baa5bac666608e6b4703', '');

-- --------------------------------------------------------

--
-- Структура таблицы `calculator_settings`
--

CREATE TABLE `calculator_settings` (
  `id` int(11) NOT NULL,
  `game` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `json` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `calculator_settings`
--

INSERT INTO `calculator_settings` (`id`, `game`, `type`, `json`) VALUES
(1, 'lol', 'rank-boosting', '');

-- --------------------------------------------------------

--
-- Структура таблицы `champions`
--

CREATE TABLE `champions` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `avatar` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `champions`
--

INSERT INTO `champions` (`id`, `name`, `avatar`) VALUES
(1, 'Annie', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Annie.png'),
(2, 'Olaf', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Olaf.png'),
(3, 'Galio', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Galio.png'),
(4, 'Twisted Fate', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/TwistedFate.png'),
(5, 'Xin Zhao', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/XinZhao.png'),
(6, 'Urgot', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Urgot.png'),
(7, 'LeBlanc', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Leblanc.png'),
(8, 'Vladimir', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Vladimir.png'),
(9, 'Fiddlesticks', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Fiddlesticks.png'),
(10, 'Kayle', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kayle.png'),
(11, 'Master Yi', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/MasterYi.png'),
(12, 'Alistar', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Alistar.png'),
(13, 'Ryze', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ryze.png'),
(14, 'Sion', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Sion.png'),
(15, 'Sivir', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Sivir.png'),
(16, 'Soraka', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Soraka.png'),
(17, 'Teemo', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Teemo.png'),
(18, 'Tristana', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Tristana.png'),
(19, 'Warwick', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Warwick.png'),
(20, 'Nunu & Willump', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nunu.png'),
(21, 'Miss Fortune', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/MissFortune.png'),
(22, 'Ashe', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ashe.png'),
(23, 'Tryndamere', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Tryndamere.png'),
(24, 'Jax', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Jax.png'),
(25, 'Morgana', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Morgana.png'),
(26, 'Zilean', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Zilean.png'),
(27, 'Singed', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Singed.png'),
(28, 'Evelynn', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Evelynn.png'),
(29, 'Twitch', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Twitch.png'),
(30, 'Karthus', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Karthus.png'),
(31, 'Cho\'Gath', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Chogath.png'),
(32, 'Amumu', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Amumu.png'),
(33, 'Rammus', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Rammus.png'),
(34, 'Anivia', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Anivia.png'),
(35, 'Shaco', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Shaco.png'),
(36, 'Dr. Mundo', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/DrMundo.png'),
(37, 'Sona', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Sona.png'),
(38, 'Kassadin', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kassadin.png'),
(39, 'Irelia', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Irelia.png'),
(40, 'Janna', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Janna.png'),
(41, 'Gangplank', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Gangplank.png'),
(42, 'Corki', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Corki.png'),
(43, 'Karma', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Karma.png'),
(44, 'Taric', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Taric.png'),
(45, 'Veigar', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Veigar.png'),
(48, 'Trundle', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Trundle.png'),
(50, 'Swain', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Swain.png'),
(51, 'Caitlyn', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Caitlyn.png'),
(53, 'Blitzcrank', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Blitzcrank.png'),
(54, 'Malphite', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Malphite.png'),
(55, 'Katarina', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Katarina.png'),
(56, 'Nocturne', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nocturne.png'),
(57, 'Maokai', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Maokai.png'),
(58, 'Renekton', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Renekton.png'),
(59, 'Jarvan IV', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/JarvanIV.png'),
(60, 'Elise', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Elise.png'),
(61, 'Orianna', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Orianna.png'),
(62, 'Wukong', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/MonkeyKing.png'),
(63, 'Brand', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Brand.png'),
(64, 'Lee Sin', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/LeeSin.png'),
(67, 'Vayne', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Vayne.png'),
(68, 'Rumble', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Rumble.png'),
(69, 'Cassiopeia', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Cassiopeia.png'),
(72, 'Skarner', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Skarner.png'),
(74, 'Heimerdinger', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Heimerdinger.png'),
(75, 'Nasus', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nasus.png'),
(76, 'Nidalee', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nidalee.png'),
(77, 'Udyr', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Udyr.png'),
(78, 'Poppy', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Poppy.png'),
(79, 'Gragas', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Gragas.png'),
(80, 'Pantheon', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Pantheon.png'),
(81, 'Ezreal', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ezreal.png'),
(82, 'Mordekaiser', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Mordekaiser.png'),
(83, 'Yorick', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Yorick.png'),
(84, 'Akali', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Akali.png'),
(85, 'Kennen', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kennen.png'),
(86, 'Garen', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Garen.png'),
(89, 'Leona', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Leona.png'),
(90, 'Malzahar', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Malzahar.png'),
(91, 'Talon', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Talon.png'),
(92, 'Riven', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Riven.png'),
(96, 'Kog\'Maw', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/KogMaw.png'),
(98, 'Shen', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Shen.png'),
(99, 'Lux', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Lux.png'),
(101, 'Xerath', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Xerath.png'),
(102, 'Shyvana', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Shyvana.png'),
(103, 'Ahri', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ahri.png'),
(104, 'Graves', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Graves.png'),
(105, 'Fizz', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Fizz.png'),
(106, 'Volibear', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Volibear.png'),
(107, 'Rengar', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Rengar.png'),
(110, 'Varus', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Varus.png'),
(111, 'Nautilus', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nautilus.png'),
(112, 'Viktor', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Viktor.png'),
(113, 'Sejuani', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Sejuani.png'),
(114, 'Fiora', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Fiora.png'),
(115, 'Ziggs', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ziggs.png'),
(117, 'Lulu', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Lulu.png'),
(119, 'Draven', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Draven.png'),
(120, 'Hecarim', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Hecarim.png'),
(121, 'Kha\'Zix', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Khazix.png'),
(122, 'Darius', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Darius.png'),
(126, 'Jayce', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Jayce.png'),
(127, 'Lissandra', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Lissandra.png'),
(131, 'Diana', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Diana.png'),
(133, 'Quinn', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Quinn.png'),
(134, 'Syndra', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Syndra.png'),
(136, 'Aurelion Sol', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/AurelionSol.png'),
(141, 'Kayn', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kayn.png'),
(142, 'Zoe', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Zoe.png'),
(143, 'Zyra', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Zyra.png'),
(145, 'Kai\'Sa', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kaisa.png'),
(147, 'Seraphine', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Seraphine.png'),
(150, 'Gnar', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Gnar.png'),
(154, 'Zac', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Zac.png'),
(157, 'Yasuo', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Yasuo.png'),
(161, 'Vel\'Koz', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Velkoz.png'),
(163, 'Taliyah', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Taliyah.png'),
(164, 'Camille', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Camille.png'),
(166, 'Akshan', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Akshan.png'),
(200, 'Bel\'Veth', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Belveth.png'),
(201, 'Braum', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Braum.png'),
(202, 'Jhin', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Jhin.png'),
(203, 'Kindred', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kindred.png'),
(221, 'Zeri', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Zeri.png'),
(222, 'Jinx', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Jinx.png'),
(223, 'Tahm Kench', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/TahmKench.png'),
(234, 'Viego', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Viego.png'),
(235, 'Senna', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Senna.png'),
(236, 'Lucian', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Lucian.png'),
(238, 'Zed', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Zed.png'),
(240, 'Kled', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kled.png'),
(245, 'Ekko', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ekko.png'),
(246, 'Qiyana', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Qiyana.png'),
(254, 'Vi', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Vi.png'),
(266, 'Aatrox', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Aatrox.png'),
(267, 'Nami', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nami.png'),
(268, 'Azir', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Azir.png'),
(350, 'Yuumi', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Yuumi.png'),
(360, 'Samira', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Samira.png'),
(412, 'Thresh', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Thresh.png'),
(420, 'Illaoi', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Illaoi.png'),
(421, 'Rek\'Sai', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/RekSai.png'),
(427, 'Ivern', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ivern.png'),
(429, 'Kalista', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Kalista.png'),
(432, 'Bard', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Bard.png'),
(497, 'Rakan', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Rakan.png'),
(498, 'Xayah', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Xayah.png'),
(516, 'Ornn', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Ornn.png'),
(517, 'Sylas', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Sylas.png'),
(518, 'Neeko', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Neeko.png'),
(523, 'Aphelios', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Aphelios.png'),
(526, 'Rell', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Rell.png'),
(555, 'Pyke', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Pyke.png'),
(711, 'Vex', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Vex.png'),
(777, 'Yone', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Yone.png'),
(875, 'Sett', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Sett.png'),
(876, 'Lillia', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Lillia.png'),
(887, 'Gwen', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Gwen.png'),
(888, 'Renata Glasc', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Renata.png'),
(895, 'Nilah', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/Nilah.png'),
(897, 'K\'Sante', 'http://ddragon.leagueoflegends.com/cdn/13.4.1/img/champion/KSante.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `text_id` varchar(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game` varchar(16) NOT NULL,
  `type` varchar(16) NOT NULL,
  `status` varchar(16) NOT NULL,
  `booster_id` int(11) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date` varchar(64) NOT NULL,
  `information` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `text_id`, `user_id`, `game`, `type`, `status`, `booster_id`, `price`, `date`, `information`) VALUES
(1, '', 0, '', '', '', 0, '0.00', '', ''),
(2, 'lol-mzuytemm', 7, 'lol', '1', 'unpaid', 0, '25.57', '1678130738', 'a:1:{s:0:\"\";s:0:\"\";}'),
(3, 'lol-zgeyjkym', 7, 'lol', '1', 'paid', 111, '25.57', '1678131561', 'a:6:{s:8:\"progress\";i:0;s:7:\"from_to\";a:2:{s:4:\"from\";s:7:\"Iron IV\";s:2:\"to\";s:9:\"Bronze IV\";}s:6:\"server\";s:2:\"NA\";s:7:\"options\";a:1:{s:0:\"\";s:0:\"\";}s:5:\"extra\";a:8:{s:11:\"vpn_country\";s:2:\"NA\";s:14:\"flash_position\";s:4:\"none\";s:5:\"roles\";a:2:{i:0;s:3:\"mid\";i:1;s:3:\"top\";}s:9:\"champions\";a:3:{i:0;s:9:\"champion1\";i:1;s:9:\"champion2\";i:2;s:9:\"champion3\";}s:12:\"offline_mode\";b:0;s:8:\"priority\";b:0;s:9:\"streaming\";b:0;s:8:\"coaching\";b:0;}s:7:\"account\";a:3:{s:3:\"ign\";s:0:\"\";s:5:\"login\";s:0:\"\";s:8:\"password\";s:0:\"\";}}'),
(4, 'lol-nzdkztyz', 7, 'lol', '1', 'unpaid', 0, '25.57', '1678170233', 'a:6:{s:8:\"progress\";i:0;s:7:\"from_to\";a:3:{s:4:\"from\";s:7:\"Iron IV\";s:3:\"now\";s:10:\"Bronze III\";s:2:\"to\";s:8:\"Bronze I\";}s:6:\"server\";s:2:\"NA\";s:7:\"options\";a:1:{s:0:\"\";s:0:\"\";}s:5:\"extra\";a:8:{s:11:\"vpn_country\";s:2:\"NA\";s:14:\"flash_position\";s:4:\"none\";s:5:\"roles\";a:2:{i:0;s:3:\"mid\";i:1;s:3:\"top\";}s:9:\"champions\";a:3:{i:0;s:9:\"champion1\";i:1;s:9:\"champion2\";i:2;s:9:\"champion3\";}s:12:\"offline_mode\";b:0;s:8:\"priority\";b:0;s:9:\"streaming\";b:0;s:8:\"coaching\";b:0;}s:7:\"account\";a:3:{s:3:\"ign\";s:0:\"\";s:5:\"login\";s:0:\"\";s:8:\"password\";s:0:\"\";}}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `accounts_confirm`
--
ALTER TABLE `accounts_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `backend_accounts`
--
ALTER TABLE `backend_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booster_accounts`
--
ALTER TABLE `booster_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `calculator_settings`
--
ALTER TABLE `calculator_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `accounts_confirm`
--
ALTER TABLE `accounts_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `backend_accounts`
--
ALTER TABLE `backend_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `booster_accounts`
--
ALTER TABLE `booster_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `calculator_settings`
--
ALTER TABLE `calculator_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `champions`
--
ALTER TABLE `champions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
