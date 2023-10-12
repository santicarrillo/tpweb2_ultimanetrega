-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2023 a las 07:18:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formula1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuderias`
--

CREATE TABLE `escuderias` (
  `id` int(11) NOT NULL,
  `equipos` varchar(250) NOT NULL,
  `pilotos` varchar(200) NOT NULL,
  `puntos_equipo` int(11) NOT NULL,
  `pos_equipos` int(11) NOT NULL,
  `id_pilotos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escuderias`
--

INSERT INTO `escuderias` (`id`, `equipos`, `pilotos`, `puntos_equipo`, `pos_equipos`, `id_pilotos`) VALUES
(1, 'redbull', 'Max Verstappen\r\nSergio Pérez', 583, 1, 0),
(2, 'MERCEDES AMG F1', 'Lewis Hamilton\r\nGeorge Russell', 273, 2, 0),
(3, 'Ferrari', 'Carlos sainz\r\nCharles Leclerc', 228, 3, 0),
(4, 'Aston Martin', 'Lance Stroll\r\nFernando Alonso', 217, 4, 0),
(5, 'McLaren', 'Lando Norris\rOscar Piastri', 115, 5, 0),
(6, 'Alpine', 'Pierre gasly\r\nEsteban Ocon', 73, 6, 0),
(7, 'Williams', 'Alexander Albon\r\n Logan Sargeant', 21, 7, 0),
(8, 'haas', 'kevin Magnussen \r\nNico Hülkenberg', 217, 4, 0),
(9, 'alfa romeo', 'Valtteri Bottas\r\nZhou Guanyu', 10, 9, 0),
(10, 'alphatauri', 'Yuki Tsunoda\r\n Liam Lawson', 3, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilotos`
--

CREATE TABLE `pilotos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `campeonato` int(200) NOT NULL,
  `puntos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pilotos`
--

INSERT INTO `pilotos` (`id`, `nombre`, `campeonato`, `puntos`) VALUES
(1, 'Max verstasppen', 1, 364),
(2, 'Sergio Perez', 2, 219),
(3, 'Fernando Alonso', 3, 170),
(4, 'lewis hamilton', 4, 164),
(5, 'Carlos Sainz', 5, 117),
(6, 'Charles Leclerc', 6, 111),
(7, 'George Russell', 7, 109),
(8, 'Lando Norris', 8, 79),
(9, 'Lance Stroll', 9, 47),
(10, 'Pierre Gasly', 10, 37),
(11, 'Esteban Ocón', 11, 36),
(12, 'Óscar Piastri', 12, 36),
(13, 'Alexandre Albón', 13, 21),
(14, 'Nico Hulkenberg', 14, 9),
(15, ' Valtteri Bottas', 15, 6),
(16, 'Zhou Guanyu ', 16, 4),
(17, 'Yuki Tsunoda ', 17, 3),
(18, 'Kevin Magnussen ', 18, 2),
(19, 'Logan Sargeant ', 19, 0),
(20, 'Liam Lawson', 20, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escuderias`
--
ALTER TABLE `escuderias`
  ADD PRIMARY KEY (`id`,`id_pilotos`);

--
-- Indices de la tabla `pilotos`
--
ALTER TABLE `pilotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escuderias`
--
ALTER TABLE `escuderias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pilotos`
--
ALTER TABLE `pilotos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
