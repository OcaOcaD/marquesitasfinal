-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 17:13:11
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marquesita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_comida` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_comida`, `categoria`, `nombre`, `descripcion`, `imagen`) VALUES
(17, 'marquesitas saladas', 'Marquesita Pizza', 'Deliciosa marquesita de queso cheddar con pepperoni y chipotle', 'mar_s.jpg'),
(18, 'marquesitas saladas', 'Marqueso', 'Rica marqeusita con MUCHO queso derretido y un poco gratinado', 'marqueso.jpg'),
(19, 'marquesitas saladas', 'Lorem Ipsum SAL', 'Lorem	ipsum dolor sit amet Escrinobishi morgullis', '3.jpg'),
(20, 'marquesitas dulces', 'La fresa', 'MArquesita con nueces, fresa y mucho chocolate', 'mar_d.jpg'),
(21, 'marquesitas dulces', 'Lorem Ipsum DUL', 'Lorem	ipsum dolor sit amet Escrinobishi morgullis', '5.jpg'),
(22, 'marquesitas dulces', 'Chocolatoso', 'Chocolate cubierto con chocolate y espolvoreado con chocolate', 'default.jpg'),
(23, 'paletas', 'Pinia sorpresa', 'Piña con un toque de... misterio', 'paletas.jpg'),
(24, 'paletas', 'Paleta de Vainilla', 'Vainilla con Piloncillo para endulczar tu día', 'paletas2.jpg'),
(25, 'nieves', 'Lorem Ipsum', 'Lorem	ipsum dolor sit amet Escrinobishi morgullis', '1.jpg'),
(26, 'nieves', 'Lorem Ipsum', 'Lorem	ipsum dolor sit amet Escrinobishi morgullis', '2.jpg'),
(27, 'marquesitas dulces', 'otra pa probar', 'DescripciÃ³n de prueba de una marqeusita dulce', '1.jpg'),
(28, 'marquesitas dulces', 'PROBANDO SCROLL', 'SCROLLBAR no funciona', '2.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_comida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_comida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
