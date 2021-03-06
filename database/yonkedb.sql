-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2020 a las 23:06:25
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
(21, 65, 'auto_20200905_0956361.jpg', 1),
(22, 65, 'auto_20200905_0939312.jpg', 2),
(23, 65, 'auto_20200905_0939313.jpg', 3),
(24, 65, 'auto_20200905_0939314.jpg', 4),
(27, 66, 'auto_20200901_0829131.jpg', 1),
(28, 66, 'auto_20200901_0829132.jpg', 2),
(29, 66, 'auto_20200901_0829133.jpg', 3),
(30, 66, 'auto_20200901_0829134.jpg', 4),
(33, 67, 'auto_20200901_0833051.jpg', 1),
(43, 67, 'auto_20200901_0833052.jpg', 2),
(44, 67, 'auto_20200901_0833053.jpg', 3),
(45, 67, 'auto_20200901_0833054.jpg', 4),
(49, 81, 'auto_20200905_0950561.jpg', 1),
(50, 82, 'auto_20200905_1021431.jpg', 1),
(51, 83, 'auto_20200904_0814331.jpg', 1);

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
(65, 1, 'Nissan Altima 2012', 'Nissan', 'Altima', '2012', 'Destruido', 6, 'SVT 6CIL', 'Electrica', '2020-08-21 01:40:52'),
(66, 1, 'Nissan Versa 2013', 'Nissan', 'Versa', '2013', 'Churido', 6, 'SVT 6 CIL', 'Automatica', '2020-08-21 01:49:02'),
(67, 1, 'Ford Mustang 1967', 'Ford', 'Mustang', '1967', 'Explotado', 6, 'Desconocido', 'Combustion interna', '2020-08-21 01:49:48'),
(81, 1, 'Consectetu Ut mptas ve 38', 'Consectetu', 'Ut mptas ve', '38', 'magni null', 0, 'Tetium d', 'Luamut po', '2020-09-04 05:48:49'),
(82, 1, 'Archiidem hi Sunt ut excepturi en 8', 'Archiidem hi', 'Sunt ut excepturi en', '8', 'Magna rerum officiis', 0, 'Libero laborum Hic', 'Corrupti voluptas a', '2020-09-04 05:50:37'),
(83, 1, 'Error hfugiat r Dolores optio et ma 53', 'Error hfugiat r', 'Dolores optio et ma', '53', 'Quae velit magni in', 0, 'Et in esse nesciunt', 'Cillum ut earum aut', '2020-09-04 06:14:33');

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
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `tbautos`
--
ALTER TABLE `tbautos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

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
