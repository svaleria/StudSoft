-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2016 a las 08:24:55
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_usuario`
--

CREATE TABLE `detalles_usuario` (
  `id_us` int(100) NOT NULL,
  `nombre` text NOT NULL,
  `ap_pat` text NOT NULL,
  `ap_mat` text NOT NULL,
  `alias_us` text NOT NULL,
  `genero` text NOT NULL,
  `contrasena` text NOT NULL,
  `fecha_nac` text NOT NULL,
  `tipo_us` text NOT NULL,
  `verif_band` text NOT NULL,
  `direccion` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles_usuario`
--

INSERT INTO `detalles_usuario` (`id_us`, `nombre`, `ap_pat`, `ap_mat`, `alias_us`, `genero`, `contrasena`, `fecha_nac`, `tipo_us`, `verif_band`, `direccion`, `feedback`) VALUES
(13, 'Julio', 'Leon', 'Alvarez', 'admin', 'Masculino', 'admin', '24/04/1989', 'admin', 'si', 'San Martin', ''),
(14, 'Juana', 'Azurduy', 'Padilla', 'juanita', 'Femenino', 'pass', '24/04/1990', 'estudiante', 'si', 'Colombia', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalles_usuario`
--
ALTER TABLE `detalles_usuario`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalles_usuario`
--
ALTER TABLE `detalles_usuario`
  MODIFY `id_us` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
