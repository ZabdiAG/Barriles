-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2015 a las 00:20:24
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `recepcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_indirecto`
--

CREATE TABLE IF NOT EXISTS `material_indirecto` (
  `idMaterial` int(11) NOT NULL AUTO_INCREMENT,
  `tipoMaterial` varchar(100) NOT NULL,
  `fechaAutomatico` date NOT NULL,
  `proveedor` varchar(100) NOT NULL,
  `guia` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `requisitor` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fechaEntrega` date NOT NULL,
  PRIMARY KEY (`idMaterial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `material_indirecto`
--

INSERT INTO `material_indirecto` (`idMaterial`, `tipoMaterial`, `fechaAutomatico`, `proveedor`, `guia`, `empresa`, `requisitor`, `email`, `fechaEntrega`) VALUES
(1, 'Paquetes', '2015-07-14', 'Proveedor1', 'Guia1', 'Empresa1', 'Requisitor1', 'email@gmail.com', '2015-07-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
