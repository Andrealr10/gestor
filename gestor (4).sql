-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2019 a las 00:39:22
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id_archivo` int(11) NOT NULL,
  `archivo` varchar(150) NOT NULL,
  `ruta` varchar(250) NOT NULL,
  `tamanio` float NOT NULL,
  `tipo_archivo` varchar(24) NOT NULL,
  `estado_archivo` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `descargas` int(11) NOT NULL,
  `valoracion` float NOT NULL,
  `icono` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id_archivo`, `archivo`, `ruta`, `tamanio`, `tipo_archivo`, `estado_archivo`, `fecha`, `descargas`, `valoracion`, `icono`, `id_usuario`, `id_subcategoria`) VALUES
(1, 'Guia_01.pdf', 'home/files/php/guias', 37886, 'Documento', 1, '2019-10-16', 2, 0, 'home/images/archivos/pdf.png', 20, 1),
(17, '2_benchmarking.pdf', 'home/files/php/guias', 1861140, 'Documento', 0, '2019-10-16', 0, 0, 'home/images/archivos/pdf.png', 20, 1),
(20, '2_benchmarking2.pdf', 'home/files/php/guias', 1861140, 'Documento', 0, '2019-10-16', 0, 0, 'home/images/archivos/pdf.png', 20, 1),
(21, '2_benchmarking3.pdf', 'home/files/php/guias', 1861140, 'Documento', 0, '2019-10-16', 0, 0, 'home/images/archivos/pdf.png', 20, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`, `imagen`, `estado`) VALUES
(1, 'php', 'Categoria relacionada con el lenguaje de programacion PHP', 'home/images/categorias/php.png', 1),
(2, 'xamarin', 'Categoria relacionada con la tecnologia xamarin C#', 'home/images/categorias/xamarin.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `id_tipo_solicitud` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `descripcion`, `estado`, `fecha`, `id_tipo_solicitud`, `id_usuario`) VALUES
(1, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(2, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(3, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(4, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(5, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(6, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(7, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(8, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(9, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(10, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(11, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(12, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(13, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(14, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(15, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(16, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(17, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(18, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(19, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(20, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(21, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(22, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(23, 'Aprobar archivo', 1, '2019-10-16', 1, 20),
(24, 'Aprobar archivo', 1, '2019-10-16', 1, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `super` int(11) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `nombre`, `estado`, `imagen`, `super`, `id_categoria`) VALUES
(1, 'guias', 1, 'home/images/subcategorias/carpeta.png', NULL, 1),
(2, 'guias', 1, 'home/images/subcategorias/carpeta.png', NULL, 2),
(3, 'dsdsd', 1, 'home/images/subcategorias/carpeta.png', NULL, 1),
(4, 'hola', 1, 'home/images/subcategorias/carpeta.png', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_solicitud`
--

CREATE TABLE `tipo_solicitud` (
  `id_tipo_solicitud` int(11) NOT NULL,
  `nombre` varchar(36) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_solicitud`
--

INSERT INTO `tipo_solicitud` (`id_tipo_solicitud`, `nombre`, `estado`) VALUES
(1, 'solicitud', 1),
(2, 'Denuncia', 1),
(3, 'Sugerencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `hash` varchar(256) NOT NULL,
  `code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `username`, `password`, `correo`, `tipo_usuario`, `estado`, `hash`, `code`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@cloudcat.org', 1, 1, '', 0),
(13, 'yovany', 'chavez', 'yovany', '1234', 'yovanych-@hotmail.com', 1, 1, 'b6a6f6de0952e7a65a7f0a46cd5d44dc95eb4ad27ac823a0693a348e488803e7', 75959),
(14, 'wfdwed', 'wdwd', 'wdwd', '1234', 'cristian.chavez@proyectosfgk.org', 1, 1, '2c6010f7b07b1af14518c1b7b09feb83e895f8b75853f6266686e46fc0c0f0d5', 10072),
(15, 'alguien', 'no se ', 'alguien', 'hola', 'chavezyovanyy@gmail.com', 2, 1, '7ae01312392243b74c5c11d9aa8ecbd8368c52c0a6216040b77f31f23386cd19', 54380),
(19, '123', '123', '123', '123', 'chavezyovanyy@gmail.com', 2, 2, 'caa5bdc9e2d9cd9b0f5e17cbcebc4077a1ee90e81773dd1b9a1f817cfe1cee23', 26600),
(20, '123', '123', '12', '123', 'chavezyovanyy@gmail.com', 2, 0, '729f0f938eeb17941d167dfb1105dfb86c3e28799b7c880d368931c1ef50e0e3', 87116),
(21, 'Herminio', 'Juarez', 'wendytea', 'nel', 'noelmoran960120@gmail.com', 2, 0, '055d2db82bc25eb0e79373e2f91f7e95c863c91dd3b571a60c05262b9ffbbe0b', 94765),
(22, 'Herminio', 'Juarez', 'wendytea', 'facil', 'noelmoran960120@gmail.com', 2, 0, 'f7c872d1e38a5b5a51fad3980d3d47d8069354b06b19512b82ac243588f98af1', 67395),
(23, 'Herminio', 'Juarez', 'wendytea', 'facil', 'noelmoran960120@gmail.com', 2, 0, 'f94111a2f3c9dca76baad29ce9185e04f6b11b68330ad07ede35047be9d12949', 32265),
(24, '', '', '', '', '', 2, 0, 'c0c43cb124f4923bda43e673bf70bd7094633f5cccb6e584fe29b18ce43d3c51', 46693),
(25, '', '', '', '', '', 2, 0, '66f7c5327656e1a7f1b685a8ca09cb2d26a18a86170d99862cdb2264594036bd', 90640),
(26, '', '', '', '', '', 2, 0, '30e92d5e65c2bd7d66f5a13862b481678bafd3a53d3a389d84ff0a5da782094a', 61895),
(27, '', '', '', '', '', 2, 0, '0cde40d021d97fac0782deb4b06b0e04392aa97bf9ddc9cba6afedbaead2bc23', 58943);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_valoracion` int(11) NOT NULL,
  `valoracion` int(2) NOT NULL,
  `comentario` varchar(256) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_archivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `id_subcategoria` (`id_subcategoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_tipo_solicitud` (`id_tipo_solicitud`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `super` (`super`),
  ADD KEY `subcategoria_ibfk_1` (`id_categoria`);

--
-- Indices de la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
  ADD PRIMARY KEY (`id_tipo_solicitud`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `valoracion_ibfk_1` (`id_usuario`),
  ADD KEY `valoracion_ibfk_2` (`id_archivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
  MODIFY `id_tipo_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `archivo_ibfk_2` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id_subcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `archivo_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_tipo_solicitud`) REFERENCES `tipo_solicitud` (`id_tipo_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `super` FOREIGN KEY (`super`) REFERENCES `subcategoria` (`id_subcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`id_archivo`) REFERENCES `archivo` (`id_archivo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
