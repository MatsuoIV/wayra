-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-04-2012 a las 20:30:30
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
  `dni` int(8) NOT NULL,
  `edad` int(2) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL,
  `facultad` varchar(100) DEFAULT NULL,
  `universidad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`faggot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
