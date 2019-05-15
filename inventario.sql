-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2018 a las 21:16:50
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `id` varchar(20) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioUnitario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `idProducto` varchar(20) DEFAULT NULL,
  `idTipoMov` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`id`, `cantidad`, `precioUnitario`, `fecha`, `idProducto`, `idTipoMov`) VALUES
('1', 100, 1500000, '2018-10-02', '1', '1'),
('100', -20, -100, '2018-10-16', '7', '1'),
('2', 50, 2000000, '2018-10-10', '1', '2'),
('3', 30, 1000000, '2018-10-09', '2', '3'),
('301', 30, 1000000, '2018-10-17', '1', '2'),
('4', 30, 500000, '2018-10-09', '4', '4'),
('407', 50, 20000, '2018-10-10', '4', '2'),
('5', 10, 700000, '2018-10-09', '5', '5'),
('500', 30, 1000000, '2018-10-02', '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`) VALUES
('1', 'televisor', 'televisor led de 48 pulgadas\r\n'),
('2', 'Lavadora', 'lavadora de 30 litros de capacidad\r\n'),
('4', 'appleTV', 'esto es un televisor'),
('5', 'Portatil', 'portatil con windows10\r\n'),
('7', 'Radio', 'radio am/fm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomovimiento`
--

CREATE TABLE `tipomovimiento` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `esIngreso` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipomovimiento`
--

INSERT INTO `tipomovimiento` (`id`, `nombre`, `esIngreso`) VALUES
('1', 'compra', 1),
('2', 'venta', 0),
('3', 'compra', 1),
('4', 'descarte', 0),
('5', 'venta', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movProducto` (`idProducto`),
  ADD KEY `fk_movTipo` (`idTipoMov`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipomovimiento`
--
ALTER TABLE `tipomovimiento`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `fk_movProducto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `fk_movTipo` FOREIGN KEY (`idTipoMov`) REFERENCES `tipomovimiento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
