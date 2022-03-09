-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-03-2022 a las 06:56:46
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suadance`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `Id` varchar(15) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fecha_nac` varchar(34) NOT NULL,
  `fecha_inicio` varchar(45) NOT NULL,
  `nombre_acudiente` varchar(30) NOT NULL,
  `ape_acudiente` varchar(30) NOT NULL,
  `tel_acudiente` text NOT NULL,
  `fecha_fin` varchar(100) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`Id`, `Nombre`, `Apellidos`, `email`, `telefono`, `direccion`, `fecha_nac`, `fecha_inicio`, `nombre_acudiente`, `ape_acudiente`, `tel_acudiente`, `fecha_fin`, `observaciones`) VALUES
('3456', 'Yulieth HuÃ©rfano', 'Suarez BarÃ³n', 'cristihu@hotmail.com', '8765', 'Carrera 26 #9 - 151', '2022-03-17', 'bjkn', 'kjlnk', '56789', '2022-03-11', '2022-03-17', 'ihjkl'),
('1002760550', 'FerrelÃ©ctricos ValdÃ©z', 'Suarez BarÃ³n', 'cristihu@hotmail.com', '7724816', 'Carrera 26 #9 - 151', 'hkjn', 'bjkn', 'kjlnk', '56789', 'jbk', 'kjn,m', 'iuhkn'),
('1057660667', 'Encuesta de prueba', 'Suarez BarÃ³n', 'linahuerfano19@hotmail.com', '7724816', 'Carrera 26 #9 - 151', 'hkjn', 'bjkn', 'kjlnk', 'jbkjn', 'jbk', 'kjn,m', 'iuhkn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `password`) VALUES
(2, 'john', '$2y$10$9MfMyihK8x29R4cakt.pQ.aVaPgAL9gjGYUxyZz9Fevq2tblqBU6u');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
