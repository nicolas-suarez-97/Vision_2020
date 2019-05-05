-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2019 a las 01:02:27
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vision2020`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `idReporte` int(11) NOT NULL,
  `motivo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `diagnostico` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `cambioEquipo` tinyint(1) NOT NULL,
  `descripEquipo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `observaciones` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaModificacion` date NOT NULL,
  `archivo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `importancia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`idReporte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
