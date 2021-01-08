-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-10-2020 a las 18:36:47
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mywallet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1`
--

CREATE TABLE `1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2`
--

CREATE TABLE `2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a`
--

CREATE TABLE `a` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aa`
--

CREATE TABLE `aa` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laly`
--

CREATE TABLE `laly` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nico`
--

CREATE TABLE `nico` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nico`
--

INSERT INTO `nico` (`id`, `name`, `mount`, `type`, `destorg`, `date`) VALUES
(1, 'Test', 1, 'income', 'Test', '2020-10-14'),
(2, 'Test', 1, 'outcome', 'Test', '2020-10-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qq`
--

CREATE TABLE `qq` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `destorg` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `pass`) VALUES
(8, 'laly', 'l@l', '1'),
(12, 'nico', 'n@n', '1'),
(13, 'nico', 'n@n', '1'),
(14, 'nico', 'n@n', '1'),
(15, 'a', 'a@a', '1'),
(16, 'a', 'a@a', '1'),
(17, 'a', 'a@a', '1'),
(18, 'a', 'a@a', '1'),
(19, 'a', 'a@a', '2'),
(20, 'a', 'a@a', '1'),
(21, 'qq', 'a@a', '1'),
(22, '1', 'a@a', '1'),
(23, '1', 'a@a', '1'),
(24, '1', 'a@a', '1'),
(25, '2', 'a@a', '2'),
(26, '1', 'a@a', '2'),
(27, '1', 'a@a', '3'),
(28, '1', 'a@a', '1'),
(29, '1', 'a@a', '2'),
(30, 'aa', 'a@a', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2`
--
ALTER TABLE `2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aa`
--
ALTER TABLE `aa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laly`
--
ALTER TABLE `laly`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nico`
--
ALTER TABLE `nico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `qq`
--
ALTER TABLE `qq`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `1`
--
ALTER TABLE `1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2`
--
ALTER TABLE `2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `a`
--
ALTER TABLE `a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aa`
--
ALTER TABLE `aa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `laly`
--
ALTER TABLE `laly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nico`
--
ALTER TABLE `nico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `qq`
--
ALTER TABLE `qq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
