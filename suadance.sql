-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-03-2022 a las 09:04:24
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
  `foto` varchar(200) DEFAULT NULL,
  `Id` varchar(15) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fecha_nac` date NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nombre_acudiente` varchar(30) DEFAULT NULL,
  `ape_acudiente` varchar(30) DEFAULT NULL,
  `tel_acudiente` varchar(15) DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `paquete` varchar(20) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`foto`, `Id`, `Nombre`, `Apellidos`, `email`, `telefono`, `direccion`, `fecha_nac`, `categoria`, `nombre_acudiente`, `ape_acudiente`, `tel_acudiente`, `fecha_inicio`, `fecha_fin`, `paquete`, `observaciones`) VALUES
('fotos/gobernacion.png', '1057660667', 'Encuesta de prueba', 'fgh', '', 8765, 'Carrera 26 #9 - 151', '2022-03-21', 'juvenilB', '', '', '', '2022-03-09', '2022-03-02', '', ''),
('', '876', 'Yulieth Cristina HuÃ©rfano PÃ©rez', 'Suarez BarÃ³n', '', 8765, 'Carrera 26 #9 - 151', '2022-03-03', 'funny', '', '', '', '2022-03-16', '2022-03-09', '16', ''),
('', '9999', 'FerrelÃ©ctricos ValdÃ©z', 'Suarez BarÃ³n', '', 8765, 'Carrera 26 #9 - 151', '2022-03-16', 'funny', '', '', '', '2022-03-02', '2022-03-23', '4', '');

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
