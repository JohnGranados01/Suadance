-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-03-2022 a las 18:06:13
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
('', '876', 'Anibal', 'Rodriguez', '', 8765, 'Carrera 26 #9 - 151', '2022-03-11', 'funny', '', '', '', '2022-03-09', '2022-03-24', '4', ''),
('', '2222', 'Yulieth Cristina HuÃ©rfano PÃ©rez', 'RiaÃ±o Herrera', '', 678, 'Carrera 26 #9 - 151', '2022-03-10', 'funny', '', '', '', '2022-03-03', '2022-03-31', '4', ''),
('fotos/banrep.png', '1002760550', 'Jyson', 'bu', '', 678, 'Carrera 26 #9 - 151', '2022-03-02', 'funny', '', '', '', '2022-03-02', '2022-03-31', '16', 'jhbnm'),
('', '1057604823', 'Steven', 'Amado', '', 678, 'Carrera 26 #9 - 151', '2022-03-16', 'prejuvenil', '', '', '', '2022-03-02', '2022-03-29', '8', ''),
('fotos/academia.png', '11111', 'dfgh', 'fgh', 'Cristihu@hotmail.com', 7724816, 'Carrera 26 #9 - 151', '2022-03-02', 'funny', '', '', '', '2022-03-01', '2022-03-22', '8', ''),
('', '3989', 'Diego', 'Grisales', 'diego.g@misena.edu.co', 7724816, 'Carrera 26 #9 - 151', '2022-03-02', 'junior', '', '', '', '2022-03-03', '2022-03-23', '6', ''),
('', '1818', 'Yulieth HuÃ©rfano', 'Amado', 'Cristihu@hotmail.com', 8765, 'Carrera 26 #9 - 151', '2022-03-10', 'funny', '', '', '', '2022-03-10', '2022-03-31', '4', ''),
('', '9878', 'Encuesta de prueba', 'Amado', '', 8765, 'Carrera 26 #9 - 151', '2022-03-11', 'funny', '', '', '', '2022-03-10', '2022-04-07', '4', ''),
('fotos/sinfoto.jpg', '19191', 'john', 'Suarez BarÃ³n', 'Cristihu@hotmail.com', 7724816, 'Carrera 26 #9 - 151', '2022-03-02', 'funny', '', '', '', '2022-03-03', '2022-03-30', '4', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
