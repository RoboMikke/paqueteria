-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2022 a las 23:02:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paqueteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `matricula` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `potencia` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`matricula`, `modelo`, `tipo`, `potencia`) VALUES
('0815GYR', 'Isuzu Serie N', 'rigido', '320'),
('7610JBB', 'MS-4315', 'articulado', '305');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camionero`
--

CREATE TABLE `camionero` (
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `primer_apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `salario` decimal(8,2) NOT NULL,
  `fk_poblacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `camionero`
--

INSERT INTO `camionero` (`dni`, `nombre`, `primer_apellido`, `segundo_apellido`, `telefono`, `salario`, `fk_poblacion`) VALUES
('00523821F', 'Victor', 'Salazar', 'Montes', '3234983510', '120.00', 1),
('07823821G', 'Carlos', 'Cervantes', NULL, '3239874512', '160.00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camionero_camion`
--

CREATE TABLE `camionero_camion` (
  `pk_camionero_camion` int(11) NOT NULL,
  `fk_camionero` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `fk_camion` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL COMMENT 'Fecha de conduccion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `camionero_camion`
--

INSERT INTO `camionero_camion` (`pk_camionero_camion`, `fk_camionero`, `fk_camion`, `fecha`) VALUES
(1, '00523821F', '0815GYR', '2022-07-07'),
(2, '07823821G', '7610JBB', '2022-07-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE `destinatario` (
  `pk_destinatario` int(11) NOT NULL,
  `destinatario` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del destinatario',
  `direccion_destinatario` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`pk_destinatario`, `destinatario`, `direccion_destinatario`) VALUES
(1, 'Manuel Hernandez', 'Hernan Cortez #13, Alicante'),
(2, 'Manolo Sanchez', 'Madrid #432, Albacete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `codigo_paquete` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_destinatario` int(11) NOT NULL,
  `fk_camionero` varchar(9) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DNI del camionero',
  `fk_provincia` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'codigo de provincia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`codigo_paquete`, `descripcion`, `fk_destinatario`, `fk_camionero`, `fk_provincia`) VALUES
('15948', 'Audifonos Gamer', 1, '00523821F', '13125'),
('98721', 'Kit de herramientas', 2, '07823821G', '15124');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE `poblacion` (
  `pk_poblacion` int(11) NOT NULL,
  `poblacion` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`pk_poblacion`, `poblacion`) VALUES
(1, 'Valencia'),
(2, 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `codigo_provincia` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_provincia` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`codigo_provincia`, `nombre_provincia`) VALUES
('13125', 'Alicante'),
('15124', 'Albacete');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `camionero`
--
ALTER TABLE `camionero`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `fk_poblacion` (`fk_poblacion`);

--
-- Indices de la tabla `camionero_camion`
--
ALTER TABLE `camionero_camion`
  ADD PRIMARY KEY (`pk_camionero_camion`),
  ADD KEY `fk_camionero` (`fk_camionero`),
  ADD KEY `fk_camion` (`fk_camion`);

--
-- Indices de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  ADD PRIMARY KEY (`pk_destinatario`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`codigo_paquete`),
  ADD KEY `fk_destinatario` (`fk_destinatario`),
  ADD KEY `fk_camionero` (`fk_camionero`),
  ADD KEY `fk_provincia` (`fk_provincia`);

--
-- Indices de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  ADD PRIMARY KEY (`pk_poblacion`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`codigo_provincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camionero_camion`
--
ALTER TABLE `camionero_camion`
  MODIFY `pk_camionero_camion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `pk_destinatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  MODIFY `pk_poblacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `camionero`
--
ALTER TABLE `camionero`
  ADD CONSTRAINT `camionero_ibfk_1` FOREIGN KEY (`fk_poblacion`) REFERENCES `poblacion` (`pk_poblacion`);

--
-- Filtros para la tabla `camionero_camion`
--
ALTER TABLE `camionero_camion`
  ADD CONSTRAINT `camionero_camion_ibfk_1` FOREIGN KEY (`fk_camionero`) REFERENCES `camionero` (`dni`),
  ADD CONSTRAINT `camionero_camion_ibfk_2` FOREIGN KEY (`fk_camion`) REFERENCES `camion` (`matricula`);

--
-- Filtros para la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD CONSTRAINT `paquete_ibfk_1` FOREIGN KEY (`fk_destinatario`) REFERENCES `destinatario` (`pk_destinatario`),
  ADD CONSTRAINT `paquete_ibfk_2` FOREIGN KEY (`fk_camionero`) REFERENCES `camionero` (`dni`),
  ADD CONSTRAINT `paquete_ibfk_3` FOREIGN KEY (`fk_provincia`) REFERENCES `provincia` (`codigo_provincia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
