-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2016 a las 11:40:46
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(30) NOT NULL,
  `miembros_grup` text NOT NULL,
  `nombre_exam` text NOT NULL,
  `grupo_usuarios_id_grupus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_examen`
--

CREATE TABLE `datos_examen` (
  `id_datex` int(30) NOT NULL,
  `duracion` text,
  `grupo_estudiantes_id_grupest` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 'Juana', 'Azurduy', 'Padilla', 'juanita', 'Femenino', 'pass', '24/04/1990', 'estudiante', 'si', 'Colombia', ''),
(15, 'Eugenio', 'Miraflores', 'Perez', 'Euge', 'Masculino', '123', '12/2/2000', 'profesor', '', 'Las Palmeras', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_resuelto`
--

CREATE TABLE `examen_resuelto` (
  `id_er` int(200) NOT NULL,
  `enunciado` text NOT NULL,
  `respuesta` text NOT NULL,
  `seleccionado` text NOT NULL,
  `num_intentos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre_grupo`) VALUES
(1, 'Matematicas'),
(2, 'Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_estudiantes`
--

CREATE TABLE `grupo_estudiantes` (
  `id_grupest` int(30) NOT NULL,
  `nombre_grupest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_usuarios`
--

CREATE TABLE `grupo_usuarios` (
  `id_grupus` int(10) NOT NULL,
  `nombre_grupus` text NOT NULL,
  `miembros_grupo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_preg` int(11) NOT NULL,
  `enunciado` text,
  `respuesta` text,
  `selecc_band` text,
  `descartado` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_examen`
--

CREATE TABLE `registro_examen` (
  `id_exam` int(30) NOT NULL,
  `fecha_exam` text NOT NULL,
  `intentos_preg` text NOT NULL,
  `descartados_preg` text NOT NULL,
  `puntaje_obtenido` text NOT NULL,
  `estado_exam` text NOT NULL,
  `puntaje_total` text NOT NULL,
  `timer` text NOT NULL,
  `detalles_usuario_id_us` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE `tipo_pregunta` (
  `id_tipop` int(10) NOT NULL,
  `nombre_tipop` text,
  `pregunta_id_preg` int(11) NOT NULL,
  `datos_examen_id_datex` int(30) NOT NULL,
  `datos_examen_grupo_estudiantes_id_grupest` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`grupo_usuarios_id_grupus`),
  ADD KEY `fk_admin_grupo_usuarios_idx` (`grupo_usuarios_id_grupus`);

--
-- Indices de la tabla `datos_examen`
--
ALTER TABLE `datos_examen`
  ADD PRIMARY KEY (`id_datex`,`grupo_estudiantes_id_grupest`),
  ADD KEY `fk_datos_examen_grupo_estudiantes1_idx` (`grupo_estudiantes_id_grupest`);

--
-- Indices de la tabla `detalles_usuario`
--
ALTER TABLE `detalles_usuario`
  ADD PRIMARY KEY (`id_us`);

--
-- Indices de la tabla `examen_resuelto`
--
ALTER TABLE `examen_resuelto`
  ADD PRIMARY KEY (`id_er`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `grupo_estudiantes`
--
ALTER TABLE `grupo_estudiantes`
  ADD PRIMARY KEY (`id_grupest`);

--
-- Indices de la tabla `grupo_usuarios`
--
ALTER TABLE `grupo_usuarios`
  ADD PRIMARY KEY (`id_grupus`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_preg`);

--
-- Indices de la tabla `registro_examen`
--
ALTER TABLE `registro_examen`
  ADD PRIMARY KEY (`id_exam`,`detalles_usuario_id_us`),
  ADD KEY `fk_registro_examen_detalles_usuario1_idx` (`detalles_usuario_id_us`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD PRIMARY KEY (`id_tipop`,`pregunta_id_preg`,`datos_examen_id_datex`,`datos_examen_grupo_estudiantes_id_grupest`),
  ADD KEY `fk_tipo_pregunta_pregunta1_idx` (`pregunta_id_preg`),
  ADD KEY `fk_tipo_pregunta_datos_examen1_idx` (`datos_examen_id_datex`,`datos_examen_grupo_estudiantes_id_grupest`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalles_usuario`
--
ALTER TABLE `detalles_usuario`
  MODIFY `id_us` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `grupo_usuarios`
--
ALTER TABLE `grupo_usuarios`
  MODIFY `id_grupus` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_grupo_usuarios` FOREIGN KEY (`grupo_usuarios_id_grupus`) REFERENCES `grupo_usuarios` (`id_grupus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_examen`
--
ALTER TABLE `datos_examen`
  ADD CONSTRAINT `fk_datos_examen_grupo_estudiantes1` FOREIGN KEY (`grupo_estudiantes_id_grupest`) REFERENCES `grupo_estudiantes` (`id_grupest`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_examen`
--
ALTER TABLE `registro_examen`
  ADD CONSTRAINT `fk_registro_examen_detalles_usuario1` FOREIGN KEY (`detalles_usuario_id_us`) REFERENCES `detalles_usuario` (`id_us`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD CONSTRAINT `fk_tipo_pregunta_datos_examen1` FOREIGN KEY (`datos_examen_id_datex`,`datos_examen_grupo_estudiantes_id_grupest`) REFERENCES `datos_examen` (`id_datex`, `grupo_estudiantes_id_grupest`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_pregunta_pregunta1` FOREIGN KEY (`pregunta_id_preg`) REFERENCES `pregunta` (`id_preg`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
