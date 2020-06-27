-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2020 a las 04:51:20
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sist-trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_admin` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `carnet` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_saga` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(2) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_admin`, `correo`, `contraseña`, `nombres`, `carnet`, `codigo_saga`, `nivel`, `estado`) VALUES
(4, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Juan Jose Quiroga Torrez', '7376263', 'A17615-6', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ID_docente` int(100) NOT NULL,
  `correo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_saga` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `carnet` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad_4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad_5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trabajo` int(15) DEFAULT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ID_docente`, `correo`, `contraseña`, `nombres`, `codigo_saga`, `carnet`, `especialidad_1`, `especialidad_2`, `especialidad_3`, `especialidad_4`, `especialidad_5`, `trabajo`, `estado`) VALUES
(6, 'storot@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sergio toro ', '485221', '15652154', 'ia', 'bd', 'gestio', 'IS', 'ma', NULL, 1),
(7, 'gmagueno@gmail.com', '348f0f4edf209b54d51996137488daae', 'grover magueño', '985749asfa', '454544', 'ia', 'bd', 'gestio', 'IS', 'ma', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ID_estudiante` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `semestre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_saga` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `carnet` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tutor` int(100) DEFAULT NULL,
  `revisor_1` int(100) DEFAULT NULL,
  `revisor_2` int(100) DEFAULT NULL,
  `trabajo` int(100) DEFAULT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`ID_estudiante`, `correo`, `contraseña`, `nombres`, `semestre`, `codigo_saga`, `carnet`, `tutor`, `revisor_1`, `revisor_2`, `trabajo`, `estado`) VALUES
(4, 'jquirogat@est.emi.edu.bo', 'e4e4564027d73a4325024d948d167e93', 'Juan Jose Quiroga Torrez', 'Noveno', 'A17913-2', '7376263', NULL, NULL, NULL, NULL, 1),
(6, 'storot@gmail.com', '12345678', 'sergio toro ', 'Decimo', 'ma', '15652154', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `ID_trabajo` int(100) NOT NULL,
  `titulo` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `area_desempeño` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ID_docente`),
  ADD KEY `trabajo` (`trabajo`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`ID_estudiante`),
  ADD KEY `Trabajo` (`trabajo`),
  ADD KEY `Tutor` (`tutor`),
  ADD KEY `revisor_1` (`revisor_1`),
  ADD KEY `revisor_2` (`revisor_2`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`ID_trabajo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `ID_docente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `ID_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `ID_trabajo` int(100) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`trabajo`) REFERENCES `trabajo` (`ID_trabajo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`trabajo`) REFERENCES `trabajo` (`ID_trabajo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`tutor`) REFERENCES `docente` (`ID_docente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_3` FOREIGN KEY (`revisor_1`) REFERENCES `docente` (`ID_docente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_4` FOREIGN KEY (`revisor_2`) REFERENCES `docente` (`ID_docente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`ID_trabajo`) REFERENCES `estudiante` (`trabajo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
