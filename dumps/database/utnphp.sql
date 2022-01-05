-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2021 a las 02:34:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utnphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `sku_id` varchar(9) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(6) NOT NULL,
  `is_available` enum('Si','No') NOT NULL DEFAULT 'Si',
  `stock` int(6) NOT NULL,
  `first_img` varchar(250) NOT NULL,
  `second_img` varchar(250) NOT NULL,
  `third_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `sku_id`, `brand`, `product`, `description`, `price`, `is_available`, `stock`, `first_img`, `second_img`, `third_img`) VALUES
(1, 'SKU000001', 'BLACK SHEEP', 'Remera', 'Polo Block', 2490, 'Si', 60, 'SKU000001_first_image.jpg', 'SKU000001_second_image.jpg', 'SKU000001_third_image.jpg'),
(2, 'SKU000002', 'BLACK SHEEP', 'Remera', 'Polo Lisa', 1690, 'Si', 60, 'SKU000002_first_image.jpg', 'SKU000002_second_image.jpg', 'SKU000002_third_image.jpg'),
(3, 'SKU000003', 'BLACK SHEEP', 'Remera', 'Polo Fantasía', 1990, 'Si', 60, 'SKU000003_first_image.jpg', 'SKU000003_second_image.jpg', 'SKU000003_third_image.jpg'),
(4, 'SKU000004', 'BLACK SHEEP', 'Remera', 'Polo Palmera', 1790, 'Si', 20, 'SKU000004_first_image.jpg', 'SKU000004_second_image.jpg', 'SKU000004_third_image.jpg'),
(5, 'SKU000005', 'BLACK SHEEP', 'Remera', 'Polo Palmera', 2290, 'No', 0, 'SKU000005_first_image.jpg', 'SKU000005_second_image.jpg', 'SKU000005_third_image.jpg'),
(6, 'SKU000006', 'BLACK SHEEP', 'Remera', 'Polo Raya', 1390, 'No', 0, 'SKU000006_first_image.jpg', 'SKU000006_second_image.jpg', 'SKU000006_third_image.jpg'),
(7, 'SKU000007', 'BLACK SHEEP', 'Remera', 'Polo Striped comfort', 4750, 'Si', 120, 'SKU000007_first_image.jpg', 'SKU000007_second_image.jpg', 'SKU000007_third_image.jpg'),
(8, 'SKU000008', 'BLACK SHEEP', 'Remera', 'Polo Resort', 1990, 'Si', 30, 'SKU000008_first_image.jpg', 'SKU000008_second_image.jpg', 'SKU000008_third_image.jpg'),
(9, 'SKU000009', 'BLACK SHEEP', 'Remera', 'Polo Jersey', 4750, 'Si', 96, 'SKU000009_first_image.jpg', 'SKU000009_second_image.jpg', 'SKU000009_third_image.jpg'),
(10, 'SKU000010', 'BLACK SHEEP', 'Remera', 'Polo Arcoiris', 4750, 'Si', 23, 'SKU000010_first_image.jpg', 'SKU000010_second_image.jpg', 'SKU000010_third_image.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `telephone` bigint(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `user_creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `telephone`, `email`, `password`, `verification_key`, `is_email_verified`, `user_creation_date`) VALUES
(6, 'Alejandro', 'Mendoza', 1234567890, 'alemendoza1990@gmail.com', '1234567890', '136d703b8cfa506c3a8239eab753dd0f', 'yes', '2021-01-12'),
(7, 'Alejandro', 'Mendoza', 1234567890, 'keep.ale@gmail.com', '1234567890', '265c720a9eee4c97f566e164eafaad4c', 'yes', '2021-01-12'),
(13, 'Alejandro', 'Mendoza', 9897879878, 'alesitom90@gmail.com', '1234567890', '57beffe9795cc29c338235c516b8beef', 'yes', '2021-01-14'),
(14, 'Ale test', 'Mendoza', 3413414141, 'xjippaxht@relay.firefox.com', '1234567890', '535b511880d786981b55ff114e06e4b7', 'yes', '2021-01-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sku` (`sku_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
