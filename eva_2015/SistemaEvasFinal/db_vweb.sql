-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-10-2015 a las 19:32:33
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_vweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE IF NOT EXISTS `archivo` (
  `id_archivo` varchar(50) COLLATE utf8_bin NOT NULL,
  `ruta` varchar(100) COLLATE utf8_bin NOT NULL,
  `TAREA` varchar(50) COLLATE utf8_bin NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id_archivo`, `ruta`, `TAREA`, `USUARIO`) VALUES
('19986', '../descargas/mi_tarea_felipin_Practica1.txt', 'Practica 1', 'Felipin'),
('23682', '../descargas/tareaNueva.txt', 'Nueva Tarea', 'JianCarlo'),
('27054', '../descargas/MiTareaFelipin.txt', 'Nueva Tarea', 'Felipin'),
('31133', '../descargas/planos_tren_vapor.txt', 'Practica 1', 'JianCarlo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviso`
--

CREATE TABLE IF NOT EXISTS `aviso` (
  `AVISO` char(50) COLLATE utf8_bin NOT NULL,
  `CURSO` char(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `aviso`
--

INSERT INTO `aviso` (`AVISO`, `CURSO`) VALUES
('La defensa se pospone para un dia despues', 'Fisica'),
('No vendre el dia jueves 16 tomar nota', 'Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CATEGORIA` char(50) COLLATE utf8_bin NOT NULL,
  `CURSO` char(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CATEGORIA`, `CURSO`) VALUES
('Movimiento rectinilineo Uniformemente Variado', 'Fisica'),
('Movimiento vertical', 'Fisica'),
('catego', 'Biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `id_consulta` int(11) NOT NULL,
  `consulta` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `consulta`) VALUES
(1, 'juajuas'),
(2, 'sadasfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `CURSO` char(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`CURSO`) VALUES
('Fisica'),
('Lenguaje'),
('Matematicas'),
('Quimica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_usuario`
--

CREATE TABLE IF NOT EXISTS `curso_usuario` (
  `id` int(11) NOT NULL,
  `curso` varchar(50) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `curso_usuario`
--

INSERT INTO `curso_usuario` (`id`, `curso`, `usuario`) VALUES
(2, 'Fisica', 'JianCarlo'),
(3, 'Lenguaje', 'Laura'),
(4, 'Matematicas', 'Mauricio'),
(5, 'Quimica', 'Eduardo'),
(6, 'Fisica', 'Diego'),
(7, 'Fisica', 'Felipin'),
(8, 'Fisica', 'Jhon'),
(9, 'Fisica', 'Julian'),
(10, 'Fisica', 'Liliana'),
(11, 'Fisica', 'Tego'),
(5670, 'Quimica', 'JianCarlo'),
(56675, 'Lenguaje', 'Felipin'),
(98763, 'Quimica', 'Felipin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `ok` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`ok`) VALUES
('NOK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(11) NOT NULL,
  `examen` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_examen` date NOT NULL,
  `curso` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id`, `examen`, `fecha_examen`, `curso`) VALUES
(1, '1er Parcial', '2017-10-14', 'Fisica'),
(2, '2do Parcial', '2015-10-25', 'Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicekp`
--

CREATE TABLE IF NOT EXISTS `indicekp` (
  `KP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `MENSAJE` char(200) COLLATE utf8_bin NOT NULL,
  `PUBLICACION` char(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_exm`
--

CREATE TABLE IF NOT EXISTS `nota_exm` (
  `id_nota` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `nota_exm`
--

INSERT INTO `nota_exm` (`id_nota`, `nota`, `id`, `USUARIO`) VALUES
(1, 8, 1, 'Diego'),
(2, 6, 1, 'Felipin'),
(3, 8, 1, 'Jhon'),
(4, 3, 1, 'Julian'),
(5, 4, 1, 'Liliana'),
(6, -1, 1, 'Tego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE IF NOT EXISTS `opcion` (
  `id_opcion` int(11) NOT NULL,
  `opcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `verdadera` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`id_opcion`, `opcion`, `verdadera`, `id_pregunta`) VALUES
(1, 'Ninguna', 0, 5),
(2, 'Je78541', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(50) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `pregunta`, `id`, `tipo`) VALUES
(0, '', 0, ''),
(1, 'Defina los tipos de rozamiento', 1, 'abierta'),
(2, 'Defina la formula de la velocidad', 1, 'abierta'),
(3, 'Cuales son las 3 leyes de Newton', 2, 'abierta'),
(4, 'Defina la formula del movimiento parabolico', 2, 'abierta'),
(5, 'Cuale es el valor de la aceleracion en una cuesta?', 1, 'cerrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE IF NOT EXISTS `publicacion` (
  `PUBLICACION` char(50) COLLATE utf8_bin NOT NULL,
  `CATEGORIA` char(50) COLLATE utf8_bin DEFAULT NULL,
  `USUARIO` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `curso` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`PUBLICACION`, `CATEGORIA`, `USUARIO`, `curso`) VALUES
('Porque llevamos el tema de MRUV?', 'Movimiento rectinilineo Uniformemente Variado', 'JianCarlo', 'Fisica'),
('Que es UV?', 'Movimiento rectinilineo Uniformemente Variado', 'Jhon', 'Fisica'),
('porque llevamos movimiento vertical?', 'Movimiento vertical', 'JianCarlo', 'Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
  `id_respuesta` datetime NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_bin NOT NULL,
  `respuesta` varchar(200) COLLATE utf8_bin NOT NULL,
  `PUBLICACION` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_respuesta`, `USUARIO`, `respuesta`, `PUBLICACION`) VALUES
('2014-11-15 00:00:00', 'Julian', 'Porque es una materia de fisica importante en la que llevamos conceptos sobre gravedad', 'porque llevamos movimiento vertical?'),
('2015-09-13 00:00:00', 'Laura', 'Hola!', 'Porque llevamos el tema de MRUV?'),
('2015-10-14 00:00:00', 'JianCarlo', 'Nadie responde eh? ah es que no tengo todavia estudiantes', 'Porque llevamos el tema de MRUV?'),
('2015-11-13 00:00:00', 'Tego', 'Dale zazon bateria y reggaeton', 'Que es UV?'),
('2016-10-14 00:00:00', 'JianCarlo', 'Nadie???', 'Porque llevamos el tema de MRUV?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_preg_exm`
--

CREATE TABLE IF NOT EXISTS `resp_preg_exm` (
  `id_resp` int(11) NOT NULL,
  `respuesta` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_bin NOT NULL,
  `calif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `resp_preg_exm`
--

INSERT INTO `resp_preg_exm` (`id_resp`, `respuesta`, `id_pregunta`, `USUARIO`, `calif`) VALUES
(1, 'chocolate', 1, 'Jhon', 0),
(2, 'bann', 2, 'Jhon', 0),
(5, 'Con las botas puestas', 5, 'Jhon', 0),
(8385, 'Ninguna', 5, 'Felipin', 0),
(12747, 'sapo', 1, 'Felipin', 0),
(15784, 'grillo', 2, 'Felipin', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_sug`
--

CREATE TABLE IF NOT EXISTS `resp_sug` (
  `id_resp_sug` int(11) NOT NULL,
  `resp_sug` varchar(50) COLLATE utf8_bin NOT NULL,
  `valor` tinyint(1) NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `resp_sug`
--

INSERT INTO `resp_sug` (`id_resp_sug`, `resp_sug`, `valor`, `id_pregunta`) VALUES
(1, '7500', 0, 5),
(2, 'Con las botas puestas', 1, 5),
(3, 'Igual al de la gravedad', 0, 5),
(4, 'distinto de la gravedad', 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`, `usuario`) VALUES
(1, '3', 'Elmer'),
(2, '2', 'JianCarlo'),
(3, '2', 'Laura'),
(4, '2', 'Mauricio'),
(5, '2', 'Eduardo'),
(6, '1', 'Diego'),
(7, '1', 'Felipin'),
(8, '1', 'Jhon'),
(9, '1', 'Julian'),
(10, '1', 'Liliana'),
(11, '1', 'Tego'),
(5670, '2', 'JianCarlo'),
(56675, '1', 'Felipin'),
(98763, '1', 'Felipin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
  `TAREA` char(50) COLLATE utf8_bin NOT NULL,
  `CURSO` char(50) COLLATE utf8_bin DEFAULT NULL,
  `CONTENIDO` varchar(250) COLLATE utf8_bin NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Entrega` date NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`TAREA`, `CURSO`, `CONTENIDO`, `Fecha_Inicio`, `Fecha_Entrega`, `USUARIO`) VALUES
('Nueva Tarea', 'Fisica', 'Esta es una nueva tarea publicada!', '2015-10-01', '2015-10-01', 'JianCarlo'),
('Practica 1', 'Fisica', 'Demostrar la fuerza de rozamiento mediante un tren a vapor', '2015-10-01', '0000-00-00', 'JianCarlo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USUARIO` char(50) COLLATE utf8_bin NOT NULL,
  `CONTRASENA` char(50) COLLATE utf8_bin NOT NULL,
  `NOMBRE` char(50) COLLATE utf8_bin DEFAULT NULL,
  `CORREO` char(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USUARIO`, `CONTRASENA`, `NOMBRE`, `CORREO`) VALUES
('Diego', 'eeee4444', 'Diego Davila', 'didav@gmail.com'),
('Eduardo', '11211', 'Eduardo Ferrerira', 'edferr@gmail.com'),
('Elmer', '321', 'Elmer Gruñon', 'elelmer@starmedia.com'),
('Felipin', '1', 'Felipe Quispe', 'felipinblin@starmedia.com'),
('JianCarlo', '123', 'J. Carlo Mc Kuack', 'jcarlo@latinmedia.com'),
('Julian', '7808809', 'Julian Cadima', 'julcad@hostinguer.com'),
('Laura', '789', 'Laura Gonzales', 'lg@compunet.com'),
('Liliana', '44501', 'Lilian Fernandez', 'lfer@hotmail.com'),
('Mauricio', '666', 'Mauricio Salvatierra', 'msalv@gmail.com'),
('Tego', '780990908', 'Tego Calderon', 'tg784@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
 ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `aviso`
--
ALTER TABLE `aviso`
 ADD PRIMARY KEY (`AVISO`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`CATEGORIA`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
 ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`CURSO`);

--
-- Indices de la tabla `curso_usuario`
--
ALTER TABLE `curso_usuario`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
 ADD PRIMARY KEY (`ok`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota_exm`
--
ALTER TABLE `nota_exm`
 ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
 ADD PRIMARY KEY (`id_opcion`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
 ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
 ADD PRIMARY KEY (`PUBLICACION`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
 ADD PRIMARY KEY (`id_respuesta`);

--
-- Indices de la tabla `resp_preg_exm`
--
ALTER TABLE `resp_preg_exm`
 ADD PRIMARY KEY (`id_resp`);

--
-- Indices de la tabla `resp_sug`
--
ALTER TABLE `resp_sug`
 ADD PRIMARY KEY (`id_resp_sug`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
 ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
 ADD PRIMARY KEY (`TAREA`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`USUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
