-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2019 a las 01:03:28
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombres` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `nit` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `marca` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `mac` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `ip` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `plan` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaModificacion` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
