-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2020 a las 11:13:02
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yonkedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `idAuto` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(2000) NOT NULL DEFAULT '0',
  `numero` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `idAuto`, `nombre`, `numero`) VALUES
(21, 65, 'auto_20200901_0826191.jpg', 1),
(22, 65, 'auto_20200901_0826192.jpg', 2),
(23, 65, 'auto_20200901_0826203.jpg', 3),
(24, 65, 'auto_20200901_0826204.jpg', 4),
(27, 66, 'auto_20200901_0829131.jpg', 1),
(28, 66, 'auto_20200901_0829132.jpg', 2),
(29, 66, 'auto_20200901_0829133.jpg', 3),
(30, 66, 'auto_20200901_0829134.jpg', 4),
(33, 67, 'auto_20200901_0833051.jpg', 1),
(43, 67, 'auto_20200901_0833052.jpg', 2),
(44, 67, 'auto_20200901_0833053.jpg', 3),
(45, 67, 'auto_20200901_0833054.jpg', 4),
(46, 78, 'auto_20200902_1024471.png', 1),
(47, 79, 'auto_20200902_1025251.png', 1),
(48, 80, 'auto_20200902_1025411.png', 1),
(49, 81, 'auto_20200904_0748501.jpg', 1),
(50, 82, 'auto_20200904_0750371.jpg', 1),
(51, 83, 'auto_20200904_0814331.jpg', 1),
(52, 84, 'auto_20200904_0816261.jpg', 1),
(53, 85, 'auto_20200904_0821551.jpg', 1),
(54, 86, 'auto_20200904_0826341.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbautos`
--

CREATE TABLE `tbautos` (
  `id` int(10) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `nombreauto` varchar(100) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `anio` varchar(5) DEFAULT NULL,
  `estado` varchar(70) DEFAULT NULL,
  `cilindros` int(10) DEFAULT NULL,
  `Motor` varchar(70) DEFAULT NULL,
  `transmision` varchar(70) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbautos`
--

INSERT INTO `tbautos` (`id`, `usuario`, `nombreauto`, `marca`, `modelo`, `anio`, `estado`, `cilindros`, `Motor`, `transmision`, `fecha`) VALUES
(65, 2, 'Nissan Altima 2012', 'Nissan', 'Altima', '2012', 'Destruido', 6, 'SVT 6CIL', 'Electrica', '2020-08-21 01:40:52'),
(66, 1, 'Nissan Versa 2013', 'Nissan', 'Versa', '2013', 'Churido', 6, 'SVT 6 CIL', 'Automatica', '2020-08-21 01:49:02'),
(67, 2, 'Ford Mustang 1967', 'Ford', 'Mustang', '1967', 'Explotado', 6, 'Desconocido', 'Combustion interna', '2020-08-21 01:49:48'),
(78, 1, 'Nissan Versa 2012', 'Quos eaque aliquam m', 'Repellendus Ab veni', '91', 'Esse molestiae saepe', 0, 'Quia eius exercitati', 'Reiciendis libero su', '2020-09-02 08:24:47'),
(79, 1, 'Nissan Versa 2012', 'Volupas cillum eos', 'Excepteur atque alia', '14', 'Soluta ut Nam harum', 0, 'Earum molestias cons', 'Recusandae Mollit c', '2020-09-02 08:25:25'),
(80, 1, 'Nissan Versa 2012', 'Omis consequat Sed', 'Et architecto facere', '66', 'Rerum laudantium fu', 0, 'Duis quia sit nihil', 'Dolores aspernatur m', '2020-09-02 08:25:41'),
(81, 1, 'Consectetu Ut mptas ve 38', 'Consectetu', 'Ut mptas ve', '38', 'magni null', 0, 'Tetium d', 'Luamut po', '2020-09-04 05:48:49'),
(82, 1, 'Archiidem hi Sunt ut excepturi en 8', 'Archiidem hi', 'Sunt ut excepturi en', '8', 'Magna rerum officiis', 0, 'Libero laborum Hic', 'Corrupti voluptas a', '2020-09-04 05:50:37'),
(83, 1, 'Error hfugiat r Dolores optio et ma 53', 'Error hfugiat r', 'Dolores optio et ma', '53', 'Quae velit magni in', 0, 'Et in esse nesciunt', 'Cillum ut earum aut', '2020-09-04 06:14:33'),
(84, 1, 'Quis magnam con Quis aut qui a accus 10', 'Quis magnam con', 'Quis aut qui a accus', '10', 'Dolore quo qui aut c', 0, 'Cupiditate totam ea', 'Provident porro est', '2020-09-04 06:16:25'),
(85, 1, 'Voluptate elit a Dolor in omnis qui v 54', 'Voluptate elit a', 'Dolor in omnis qui v', '54', 'Ipsam qui omnis est', 0, 'Quo eius modi sit e', 'Recusandae Aut ipsa', '2020-09-04 06:21:55'),
(86, 1, 'Iure aperiam Tempor eu assumenda  5', 'Iure aperiam', 'Tempor eu assumenda', '5', 'Impedit pariatur I', 0, 'Maxime voluptatem I', 'Consequat Quam exer', '2020-09-04 06:26:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbusuarios`
--

INSERT INTO `tbusuarios` (`id`, `nombre`, `usuario`, `contrasena`) VALUES
(1, 'Secretaria', 'adminSecre', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'Edgar Guzman', 'Secretario', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`),
  ADD KEY `fkfoto_auto` (`idAuto`);

--
-- Indices de la tabla `tbautos`
--
ALTER TABLE `tbautos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`usuario`);

--
-- Indices de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `tbautos`
--
ALTER TABLE `tbautos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fkfoto_auto` FOREIGN KEY (`idAuto`) REFERENCES `tbautos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tbautos`
--
ALTER TABLE `tbautos`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `tbusuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
