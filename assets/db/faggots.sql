-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-04-2012 a las 03:08:23
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wayra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faggots`
--

CREATE TABLE IF NOT EXISTS `faggots` (
  `faggot_id` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `ap_paterno` varchar(20) NOT NULL,
  `ap_materno` varchar(20) NOT NULL,
  `edad` int(2) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL,
  `facultad` varchar(100) DEFAULT NULL,
  `universidad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`faggot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `faggots`
--

INSERT INTO `faggots` (`faggot_id`, `nombre`, `ap_paterno`, `ap_materno`, `edad`, `mail`, `telefono`, `facultad`, `universidad`) VALUES
(1, 'Pedro Pablo', 'Pairazaman', 'Silva', 23, 'pedrotlx@gmail.com', 992934234, 'FIIS', NULL),
(2, 'Pedro Arturo', 'Valdivia', 'Magallanes', 21, 'arturo_1015@gmail.com', 4503620, NULL, 'UNMSM'),
(3, 'Pedro Pablo', 'Pairazamán', 'Silva', 23, 'pedrotlx@gmail.com', 992934234, '0', 'UIGV'),
(4, 'Brian David', 'Matienzo', 'García', 20, 'brimatienzo47@gmail.com', 987654321, 'faua', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
