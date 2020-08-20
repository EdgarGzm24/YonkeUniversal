-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2020 a las 07:35:32
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `idAuto` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(2000) NOT NULL DEFAULT '0',
  `numero` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `idAuto`, `nombre`, `numero`) VALUES
(9, 34, 'auto_20200812_0744460.png', 1),
(10, 35, 'auto_20200812_0750520.png', 1),
(11, 35, 'auto_20200812_0750521.png', 2),
(12, 38, 'auto_20200813_1234091.jpg', 1),
(13, 39, 'auto_20200813_1251421.jpg', 1),
(14, 40, 'auto_20200813_0845051.jpg', 1);

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
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbautos`
--

INSERT INTO `tbautos` (`id`, `usuario`, `nombreauto`, `marca`, `modelo`, `anio`, `estado`, `cilindros`, `Motor`, `transmision`, `fecha`) VALUES
(34, NULL, 'Veniam ut maiores i Perferendis culpa si 64', 'Veniam ut maiores i', 'Perferendis culpa si', '64', 'Eius sequi in quidem', 0, 'Ipsam quod rerum vol', 'Vel blanditiis digni', '2020-08-12 05:44:45'),
(35, NULL, 'Labore velit dolorem Quo atque voluptas b 96', 'Labore velit dolorem', 'Quo atque voluptas b', '96', 'Quasi et eum dolorum', 0, 'Beatae ut ea eveniet', 'Est esse accusantium', '2020-08-12 05:50:50'),
(38, 1, 'Nissan Sentra 2020', 'Nissan', 'Sentra', '2020', 'Destruido', 6, 'AZ14P', 'Electrica', '2020-08-12 22:34:09'),
(39, 1, 'Nissan Sentra 4543', 'Nissan', 'Sentra', '4543', 'fgfg', 0, 'ffgfgfg', '556', '2020-08-12 22:51:42'),
(40, 1, 'Nissan Sentra 2020', 'Nissan', 'Sentra', '2020', 'Destruido', 4, 'AZ14P', 'Electrica', '2020-08-13 06:45:05');

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
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbautos`
--
ALTER TABLE `tbautos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  ADD CONSTRAINT `fkfoto_auto` FOREIGN KEY (`idAuto`) REFERENCES `tbautos` (`id`);

--
-- Filtros para la tabla `tbautos`
--
ALTER TABLE `tbautos`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `tbusuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
