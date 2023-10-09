-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 11:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formula1`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendario`
--

CREATE TABLE `calendario` (
  `id` int(50) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `circuito` varchar(100) NOT NULL,
  `podio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendario`
--

INSERT INTO `calendario` (`id`, `fecha`, `circuito`, `podio`) VALUES
(1, '03 - 05 - March', 'Sakhir - Bahrain', '1° Max Verstappen, 2° Sergio Perez, 3° Fernando Alonso'),
(2, '17 - 19 - March', 'Saudi Arabia - Jeddah', '1° Sergio Perez, 2° Max Verstappen, 3° Fernando Alonso'),
(3, '31 - 02 - March - Apr', 'Australia - Albert Park', '1° Max Verstappen, 2° Sergio Perez, 3° Fernando Alonso'),
(4, '28 - 30 - Apr', 'Baku - Azerbaijan', '1° Sergio Perez, 2° Max Vertappen, 3° Charles Leclerc'),
(5, '05 - 07 - May', 'United States - Miami', '1° Max Verstappen, 2° Sergio Perez, 3° Fernando Alonso'),
(6, '19 - 21 - May', 'Imola - Italy', 'Race Cancel'),
(7, '26 - 28 - May', 'Monaco - Monte Carlo', '1° Max Verstappe, 2° Fernando Alonso, 3° Esteban Ocon'),
(8, '02 - 04 - Jun', 'Sapin - Circuit of Barcelona-Catalunya', '1° Max Verstappe, 2° Lewis Hamilton, 3° George Russell'),
(9, '16 - 18 - Jun', 'Canada - Circuit Gilles - Villeneuve', '° Max Verstappen, 2° Fernando Alonso, 3° Lewis Hamilton'),
(10, '30 - 02 - Jun - Jul', 'Red Bull Ring - Austria', '1° Max Verstappen, 2° Charles Leclerc, 3° Sergio Perez'),
(11, '07 - 09 - Jul', 'Silverstone - Great Britain', '1° Max Verstappen, 2° Lando Norris, 3° Lewis Hamilton'),
(12, '21 - 23 - Aug', 'Hungaroring - Hungary', '1° Max Verstappen, 2° Lando Norris, 3° Sergio Perez'),
(13, '28 - 30 - Jul', 'Spa-Francorchamps - Belgium', '1° Max Verstappen, 2° Sergio Perez, 3° Charles Leclerc'),
(14, '25 - 27 - Aug', 'Zandvoort - Netherlands', '1° Max Verstappe, 2° Fernando Alonso, 3° Pierre Gasly'),
(15, '01 - 03 - Sep', 'Monza - Italy', '1° Max Verstappen, 2° Sergio Perez, 3° Carlos Sainz'),
(16, '15 - 17 - Sep', 'Marina Bay - Singapore', '1° Carlos Sainz, 2° Lando Norris, 3° Lewis Hamilton'),
(17, '22 - 24 - Sep', 'Suzuka - Japon', '1° Max Vestappen, 2° Lando Norris, 3° Oscar Piastri'),
(18, '06 - 08 - Oct', 'Lusail International Circuit - Qatar', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `escuderias`
--

CREATE TABLE `escuderias` (
  `id` int(11) NOT NULL,
  `equipos` varchar(250) NOT NULL,
  `pilotos` varchar(200) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `puntos_equipo` int(11) NOT NULL,
  `pos_equipos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `escuderias`
--

INSERT INTO `escuderias` (`id`, `equipos`, `pilotos`, `img`, `puntos_equipo`, `pos_equipos`) VALUES
(1, 'Red Bull', 'Max Verstappen y Sergio Pérez', 'img/redbull.jpg', 583, 1),
(2, 'Mercedes AMG F1', 'Lewis Hamilton y George Russell', 'img/mercedes.jpg', 273, 2),
(3, 'Ferrari', 'Carlos Sainz y Charles Leclerc', 'img/ferrari.jpg', 228, 3),
(4, 'Aston Martin', 'Fernando Alonso y Lance Stroll\r\n', 'img/astonmartin.jpg', 217, 4),
(5, 'McLaren', 'Lando Norris y Oscar Piastri', 'img/mclaren.jpg', 115, 5),
(6, 'Alpine', 'Pierre Gasly y Esteban Ocon', 'img/alpine.jpg', 73, 6),
(7, 'Williams', 'Alexander Albon y Logan Sargeant', 'img/williams.jpg', 21, 7),
(8, 'Haas', 'Kevin Magnussen  y Nico Hülkenberg', 'img/haas.jpg', 217, 4),
(9, 'Alfa Romeo', 'Valtteri Bottas y Zhou Guanyu', 'img/alfaromeo.jpg', 10, 9),
(10, 'AlphaTauri', 'Yuki Tsunoda y Liam Lawson', 'img/alphatauri.jpg', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pilotos`
--

CREATE TABLE `pilotos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `campeonato` int(200) NOT NULL,
  `puntos` int(100) NOT NULL,
  `id_escuderia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilotos`
--

INSERT INTO `pilotos` (`id`, `nombre`, `campeonato`, `puntos`, `id_escuderia`) VALUES
(1, 'Max Verstasppen', 1, 364, 1),
(2, 'Sergio Perez', 2, 219, 2),
(3, 'Fernando Alonso', 3, 170, 3),
(4, 'Lewis Hamilton', 4, 164, 4),
(5, 'Carlos Sainz', 5, 117, 5),
(6, 'Charles Leclerc', 6, 111, 6),
(7, 'George Russell', 7, 109, 7),
(8, 'Lando Norris', 8, 79, 8),
(9, 'Lance Stroll', 9, 47, 9),
(10, 'Pierre Gasly', 10, 37, 10),
(11, 'Esteban Ocon', 11, 36, 11),
(12, 'Oscar Piastri', 12, 36, 12),
(13, 'Alexander Albon', 13, 21, 13),
(14, 'Nico Hulkenberg', 14, 9, 14),
(15, ' Valtteri Bottas', 15, 6, 15),
(16, 'Zhou Guanyu ', 16, 4, 16),
(17, 'Yuki Tsunoda ', 17, 3, 17),
(18, 'Kevin Magnussen ', 18, 2, 18),
(19, 'Logan Sargeant ', 19, 0, 19),
(20, 'Liam Lawson', 20, 0, 20),
(26, 'Sebastian Vettel', 1, 600, 21),
(27, 'kimi', 2, 540, 22);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escuderias`
--
ALTER TABLE `escuderias`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pilotos`
--
ALTER TABLE `pilotos`
  ADD PRIMARY KEY (`id_escuderia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `escuderias`
--
ALTER TABLE `escuderias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pilotos`
--
ALTER TABLE `pilotos`
  MODIFY `id_escuderia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `escuderias`
--
ALTER TABLE `escuderias`
  ADD CONSTRAINT `fk_id_escuderia` FOREIGN KEY (`id`) REFERENCES `pilotos` (`id_escuderia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
