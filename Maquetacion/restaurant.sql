-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2018 a las 04:55:57
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `created_at`, `updated_at`, `titulo`, `image`) VALUES
(1, '2013-07-02 05:55:13', '2016-07-08 20:31:24', 'Alice:.', 'image/plato.jpg'),
(2, '2011-05-06 13:43:14', '2011-09-26 08:55:21', 'I will just.', 'image/plato.jpg'),
(3, '2009-07-09 18:29:50', '2011-10-11 21:09:01', 'ONE with such a.', 'image/plato.jpg'),
(4, '2009-12-25 09:10:43', '2012-12-08 04:12:31', 'And then,.', 'image/plato.jpg'),
(5, '2011-06-13 01:20:21', '2018-03-08 14:14:09', 'I think it.', 'image/plato.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_06_07_195706_create_menu_table', 1),
(40, '2014_10_12_000000_create_users_table', 2),
(41, '2014_10_12_100000_create_password_resets_table', 2),
(42, '2018_06_07_211600_create_menus_table', 2),
(43, '2018_06_12_020439_create_platos_table', 2),
(44, '2018_06_12_023745_add_menu_id_column_to_platos_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `created_at`, `updated_at`, `titulo`, `descripcion`, `precio`, `imagen`, `menu_id`) VALUES
(1, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'I shall.', 'Alice. \'Well, I.', 10, 'http://lorempixel.com/image/plato.jpg/480/?84835', 1),
(2, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'So she began:.', 'Duchess by this time, and was looking at the.', 10, 'http://lorempixel.com/image/plato.jpg/480/?73411', 1),
(3, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'I shan\'t!.', 'QUITE right, I\'m afraid,\'.', 10, 'http://lorempixel.com/image/plato.jpg/480/?50955', 1),
(4, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Alice.', 'Gryphon, and the March Hare..', 10, 'http://lorempixel.com/image/plato.jpg/480/?96754', 1),
(5, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'I don\'t.', 'King: \'however, it may kiss my.', 10, 'http://lorempixel.com/image/plato.jpg/480/?56445', 1),
(6, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Dormouse!\'.', 'Our family always HATED cats: nasty, low, vulgar things!.', 10, 'http://lorempixel.com/image/plato.jpg/480/?37618', 2),
(7, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Elsie,.', 'Knave was standing before them, in chains, with a table set out under a tree in the way to fly up into a graceful zigzag, and was going to.', 10, 'http://lorempixel.com/image/plato.jpg/480/?99826', 2),
(8, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Rabbit.', 'Who ever saw one that size? Why, it fills the whole head appeared, and then they wouldn\'t be so easily offended, you know!\' The.', 10, 'http://lorempixel.com/image/plato.jpg/480/?64434', 2),
(9, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'King very.', 'I do wonder what CAN have happened to you? Tell us all about it!\' and he called.', 10, 'http://lorempixel.com/image/plato.jpg/480/?88641', 2),
(10, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Dormouse,\'.', 'So she began: \'O Mouse,.', 10, 'http://lorempixel.com/image/plato.jpg/480/?22467', 2),
(11, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Alice,.', 'Cat. \'I\'d nearly forgotten that I\'ve got back to my.', 10, 'http://lorempixel.com/image/plato.jpg/480/?33491', 3),
(12, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'An enormous.', 'Dormouse say?\' one of these cakes,\' she.', 10, 'http://lorempixel.com/image/plato.jpg/480/?30234', 3),
(13, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'The next witness.', 'Alice caught the baby violently.', 10, 'http://lorempixel.com/image/plato.jpg/480/?91560', 3),
(14, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Alice dear!\'.', 'I can do without lobsters, you know. But do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, as well be at school at once.\' And.', 10, 'http://lorempixel.com/image/plato.jpg/480/?26668', 3),
(15, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'King..', 'Bill\'s place for a little girl,\' said Alice, (she had grown so large a house, that she let the Dormouse indignantly. However, he consented to go.', 10, 'http://lorempixel.com/image/plato.jpg/480/?55892', 3),
(16, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'MORE than.', 'Queen furiously, throwing an inkstand.', 10, 'http://lorempixel.com/image/plato.jpg/480/?92167', 4),
(17, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'English!\'.', 'However, everything is.', 10, 'http://lorempixel.com/image/plato.jpg/480/?45570', 4),
(18, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'THAT\'S a.', 'Classics master, though. He was looking down with her arms folded,.', 10, 'http://lorempixel.com/image/plato.jpg/480/?84758', 4),
(19, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'Five,.', 'Rabbit say to this: so she went in.', 10, 'http://lorempixel.com/image/plato.jpg/480/?27206', 4),
(20, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'While she was.', 'March Hare had just upset the milk-jug into his plate. Alice did not feel encouraged to ask help of any one; so, when the.', 10, 'http://lorempixel.com/image/plato.jpg/480/?29224', 4),
(21, '2018-06-12 06:54:34', '2018-06-12 06:54:34', 'And she went on,.', 'Alice sharply, for she felt a very small cake, on which the wretched Hatter trembled so, that he had taken his watch out of that is, but I THINK I can.', 10, 'http://lorempixel.com/image/plato.jpg/480/?17680', 5),
(22, '2018-06-12 06:54:35', '2018-06-12 06:54:35', 'Was kindly.', 'When the procession moved on, three of her hedgehog. The hedgehog was engaged in a deep.', 10, 'http://lorempixel.com/image/plato.jpg/480/?67931', 5),
(23, '2018-06-12 06:54:35', '2018-06-12 06:54:35', 'So she.', 'I think.\' And she opened it, and talking.', 10, 'http://lorempixel.com/image/plato.jpg/480/?88833', 5),
(24, '2018-06-12 06:54:35', '2018-06-12 06:54:35', 'Mock Turtle, \'but.', 'Duchess\'s voice died away, even in the night?.', 10, 'http://lorempixel.com/image/plato.jpg/480/?41138', 5),
(25, '2018-06-12 06:54:35', '2018-06-12 06:54:35', 'Alice in a.', 'Caterpillar took the regular course.\' \'What was that?\'.', 10, 'http://lorempixel.com/image/plato.jpg/480/?90279', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `platos_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `platos_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
