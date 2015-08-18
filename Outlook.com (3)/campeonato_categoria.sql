-- phpMyAdmin SQL Dump
-- version 4.3.13
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-08-2015 a las 19:07:55
-- Versión del servidor: 5.5.32-cll-lve
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datafutbol_sist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeonato_categoria`
--

CREATE TABLE IF NOT EXISTS `campeonato_categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campeonato_categoria`
--

INSERT INTO `campeonato_categoria` (`id`, `nombre`) VALUES
(1, 'Fútbol 5'),
(2, 'Fútbol 6'),
(3, 'Fútbol 7'),
(4, 'Fútbol 8'),
(5, 'Fútbol 9'),
(6, 'Fútbol 11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campeonato_categoria`
--
ALTER TABLE `campeonato_categoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campeonato_categoria`
--
ALTER TABLE `campeonato_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
