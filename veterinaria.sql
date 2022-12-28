-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2022 a las 03:36:49
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cedula` text NOT NULL,
  `Nombre_cliente` text NOT NULL,
  `apellido_cliente` text NOT NULL,
  `telefono` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cedula`, `Nombre_cliente`, `apellido_cliente`, `telefono`) VALUES
(3, '3333', 'luchoo', 'herreraa', '12345678'),
(7, '99', 'juan', 'perezzzzz', '999999999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `raza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `codigo`, `nombre`, `fecha_nacimiento`, `raza`) VALUES
(1, '12232', 'pupi', '2022-01-03', 'normal'),
(2, '1234567', 'doki', '2022-05-31', 'normal'),
(9, '12345', 'doki', '2022-05-31', 'normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacunacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `dosis` text NOT NULL,
  `id_mascota` int(11) NOT NULL,
  `nombre_veterinario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacuna`
--

INSERT INTO `vacuna` (`id_vacunacion`, `fecha`, `dosis`, `id_mascota`, `nombre_veterinario`) VALUES
(1, '2022-06-06', 'antirrabia', 2, 'josema'),
(2, '2022-06-02', 'segunda', 2, 'lucho');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`id_vacunacion`),
  ADD KEY `id_veterinario` (`id_mascota`),
  ADD KEY `id_veterinario_2` (`id_mascota`),
  ADD KEY `id_mascota` (`id_mascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `id_vacunacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas