-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2013 a las 06:05:07
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webdecroly`
--
CREATE DATABASE `webdecroly` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webdecroly`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `apellido` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `fecha_nacimiento` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `usuario` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  UNIQUE KEY `id_usuario_2` (`id_usuario`),
  UNIQUE KEY `id_usuario_3` (`id_usuario`),
  UNIQUE KEY `id_usuario_4` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=94 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
