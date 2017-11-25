-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2016 a las 21:15:33
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre_autor` varchar(50) NOT NULL,
  `apellido_autor` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre_autor`, `apellido_autor`, `nacionalidad`) VALUES
(1, 'Jose', 'Lopez Portillo', 'Mexicana'),
(3, 'Eloy ', 'Contreras de Lira', 'Europeo'),
(4, 'Elsa', 'Norion Alva', 'Arabe'),
(5, 'Angel', 'Face', 'irlandes'),
(6, 'Francisco', 'Lopez de la O', 'Brasileño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_editorial` int(11) NOT NULL,
  `nombre_editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `nombre_editorial`) VALUES
(2, 'Limusa'),
(3, 'Centenario'),
(4, 'Omega'),
(5, 'Alfa'),
(6, 'La Nueva'),
(7, 'Edimusar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `isbn` varchar(60) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `isbn`, `titulo`, `id_autor`, `id_editorial`, `cantidad`) VALUES
(1, '332343', 'fsdf', 3, 4, 3),
(2, '4343', 'asdsad', 3, 3, 3),
(3, '545345', 'Cien AÃ±os y tres dias', 1, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha_presatamo` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `fech_nac` date NOT NULL,
  `sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `matricula`, `nombre`, `apellidos`, `correo`, `fech_nac`, `sexo`) VALUES
(1, 42344, 'fsdfd', 'sfdfdf', 'zccxzc@et', '2016-07-06', 1),
(4, 543534, 'Pedro', 'Pica Piedra', 'pedro@piedra.com', '2016-07-05', 1),
(5, 3333, 'Juana', 'Velarde', 'velarde@hotmail.com', '2016-07-31', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `id_editorial` (`id_editorial`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_editorial`) REFERENCES `editorial` (`id_editorial`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
