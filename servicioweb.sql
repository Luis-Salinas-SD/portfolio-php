-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-04-2023 a las 16:16:41
-- Versión del servidor: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicioweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `proyecto` varchar(500) NOT NULL,
  `titular` varchar(500) NOT NULL,
  `contacto` int(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `descsite` text NOT NULL,
  `precio` int(30) NOT NULL,
  `host` varchar(30) NOT NULL,
  `ruta` varchar(60) NOT NULL,
  `basedb` varchar(50) NOT NULL,
  `usuariodb` varchar(80) NOT NULL,
  `passwordb` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `proyecto`, `titular`, `contacto`, `correo`, `imagen`, `descripcion`, `tipo`, `descsite`, `precio`, `host`, `ruta`, `basedb`, `usuariodb`, `passwordb`, `usuario`, `password`) VALUES
(3, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(4, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(5, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(6, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(7, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(8, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(9, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(10, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(11, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456'),
(12, 'website', 'Rozvo', 1234567890, 'mail@mail.com', 'algo.jpg', 'sitio sencillo', 'Sitio Web', 'sitioweb basico', 2500, 'local', 'www.google.com', 'database_1', 'user_1', '123456', 'miweb', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
