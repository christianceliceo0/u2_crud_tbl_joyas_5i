-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 04:55:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joyas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joya`
--

CREATE TABLE `joya` (
  `id_joyas` int(10) NOT NULL,
  `kilates` int(10) NOT NULL,
  `material` varchar(50) NOT NULL,
  `peso` float(10,2) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `grosor` int(10) NOT NULL,
  `fabricacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `joya`
--

INSERT INTO `joya` (`id_joyas`, `kilates`, `material`, `peso`, `marca`, `precio`, `grosor`, `fabricacion`) VALUES
(2, 12, 'plata', 400.00, 'Gucci', 5000.00, 15, '2023-10-28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `joya`
--
ALTER TABLE `joya`
  ADD PRIMARY KEY (`id_joyas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `joya`
--
ALTER TABLE `joya`
  MODIFY `id_joyas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
