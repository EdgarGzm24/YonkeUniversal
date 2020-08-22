-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2020 a las 21:57:45
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
(12, 38, 'auto_20200813_1234091.jpg', 1),
(13, 39, 'auto_20200813_1251421.jpg', 1),
(14, 40, 'auto_20200813_0845051.jpg', 1),
(21, 65, 'auto_20200821_0340521.jpg', 1),
(22, 65, 'auto_20200821_0340522.jpg', 2),
(23, 65, 'auto_20200821_0340523.jpg', 3),
(24, 65, 'auto_20200821_0340524.jpg', 4),
(25, 65, 'auto_20200821_0340535.jpg', 5),
(26, 65, 'auto_20200821_0340536.jpg', 6),
(27, 66, 'auto_20200821_0349021.jpg', 1),
(28, 66, 'auto_20200821_0349022.jpg', 2),
(29, 66, 'auto_20200821_0349023.jpg', 3),
(30, 66, 'auto_20200821_0349024.jpg', 4),
(31, 66, 'auto_20200821_0349035.jpg', 5),
(32, 66, 'auto_20200821_0349036.jpg', 6),
(33, 67, 'auto_20200821_0349481.jpg', 1);

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
(38, 1, 'Nissan Sentra 2020', 'Nissan', 'Sentra', '2020', 'Destruido', 6, 'AZ14P', 'Electrica', '2020-08-12 22:34:09'),
(39, 1, 'Nissan Sentra 4543', 'Nissan', 'Sentra', '4543', 'fgfg', 0, 'ffgfgfg', '556', '2020-08-12 22:51:42'),
(40, 1, 'Nissan Sentra 2020', 'Nissan', 'Sentra', '2020', 'Destruido', 4, 'AZ14P', 'Electrica', '2020-08-13 06:45:05'),
(65, 2, 'Nemo neque proiden Earum tenetur sapien 67', 'Nemo neque proiden', 'Earum tenetur sapien', '67', 'Aliquip ipsum elit', 0, 'Cupiditate quis maio', 'Inventore illum iur', '2020-08-21 01:40:52'),
(66, 2, 'Laborum Dolore eum Cillum incidunt est 92', 'Laborum Dolore eum', 'Cillum incidunt est', '92', 'Tenetur esse et duci', 0, 'Quasi sint maxime e', 'Rerum assumenda minu', '2020-08-21 01:49:02'),
(67, 2, 'Voluptatem doloremqu Ad cillum voluptatib 4', 'Voluptatem doloremqu', 'Ad cillum voluptatib', '4', 'Rerum id quia iure', 0, 'Molestiae esse et vo', 'Harum quibusdam minu', '2020-08-21 01:49:48');

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
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tbautos`
--
ALTER TABLE `tbautos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
