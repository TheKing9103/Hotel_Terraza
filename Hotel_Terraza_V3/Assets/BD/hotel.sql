-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 06:31:07
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
-- Base de datos: `hotel`
--
CREATE DATABASE Hotel; 
use database Hotel; 
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(50) NOT NULL,
  `fechaI` varchar(15) DEFAULT NULL,
  `fechaS` varchar(15) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `tipo_documento` varchar(10) DEFAULT NULL,
  `numeroDocumento` varchar(20) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `movil` varchar(10) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo`, `fechaI`, `fechaS`, `nombre`, `apellido`, `tipo_documento`, `numeroDocumento`, `correo`, `movil`, `ubicacion`) VALUES
(1, '2023-11-03', '2023-11-06', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(2, '2023-11-03', '2023-11-06', 'Frank ', 'Rey', NULL, 'eliminado', 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(3, '2023-12-03', '2023-12-06', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(4, '2023-12-03', '2023-12-06', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(5, '2023-11-03', '2023-11-11', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(6, '2023-12-11', '2023-12-15', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(7, '2023-11-03', '2023-11-06', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(8, '2023-11-03', '2023-11-20', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(9, '2023-11-11', '2023-11-17', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(10, '2023-11-11', '2023-11-19', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(11, '2023-12-12', '2023-02-19', 'Frank ', 'Rey', NULL, NULL, 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(12, '2023-12-20', '2023-12-25', 'Frank ', 'Rey', 'cc', '1121873543', 'sarotobisensei@gmail.com', '3195198167', 'bogota'),
(13, '2023-12-20', '2023-12-25', 'Christy', 'Rey', 'cc', '1206220064', 'tity@gmail.com', '3195198167', 'bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_est` int(11) NOT NULL,
  `desc_est` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_est`, `desc_est`, `nombre`) VALUES
(1, 'aasas', 'Reservada'),
(2, 'asasa', 'Disponible'),
(3, 'asasas', 'Apartada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(11) NOT NULL,
  `tipo_habitacion` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado_hab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `tipo_habitacion`, `fecha_inicio`, `fecha_fin`, `estado_hab`) VALUES
(1, 'Familiar', '2023-11-24', '2023-11-25', ''),
(2, 'Matrimonial', '2023-11-24', '2023-11-25', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `id_tip_habi` int(11) NOT NULL,
  `nombre_tip_habi` varchar(50) DEFAULT NULL,
  `desc_tip_habi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`id_tip_habi`, `nombre_tip_habi`, `desc_tip_habi`) VALUES
(1, 'Matrimonial', '*)-(1)cama doble *)-(1) baño privado *)-(1)televisor'),
(2, 'Familiar', '*)- (2)camas dobles *)-(2)camas sencillas *)-(1)Televisor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_est`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_habitaciones_tipo_habitacion` (`tipo_habitacion`);

--
-- Indices de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`id_tip_habi`),
  ADD KEY `nombre_tip_habi` (`nombre_tip_habi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  MODIFY `id_tip_habi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `FK_habitaciones_tipo_habitacion` FOREIGN KEY (`tipo_habitacion`) REFERENCES `tipo_habitacion` (`nombre_tip_habi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
