-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2022 a las 15:24:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `titulo`, `autor`) VALUES
(3, 'Cien años de soledad', 'Gabriel Garcia Marquez'),
(4, 'Vaca', 'Juan'),
(5, 'Mitos y leyendas', 'Julio Panchi'),
(9, 'Fisica 1', 'Maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblestudiantes`
--

CREATE TABLE `tblestudiantes` (
  `isEstudiante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblestudiantes`
--

INSERT INTO `tblestudiantes` (`isEstudiante`, `nombre`, `cedula`, `genero`, `edad`) VALUES
(22, 'Cristhian David', '1005067580', 'F', 33),
(24, 'Pepe', '1002003001', 'F', 21),
(25, 'Luisa', '1002003001', 'F', 21),
(26, 'Marco', '1002003005', 'F', 100),
(27, 'Marco', '12', 'F', 12),
(28, 'Pepe', '12', 'F', 12),
(30, 'Pepe', '12', 'M', 12),
(31, 'Pepe', '12', 'M', 12),
(32, 'Orlo', '112343', 'M', 21),
(33, 'Marco', '21', 'F', 0),
(34, 'Luisa', '12', 'M', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbllogin`
--

CREATE TABLE `tbllogin` (
  `idLogin` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbllogin`
--

INSERT INTO `tbllogin` (`idLogin`, `user`, `pass`, `rol`) VALUES
(1, 'admin', 'admin', 'administrador'),
(3, 'secre', 'secre', 'secretaria'),
(4, 'Marcela', '321', 'secretaria'),
(5, 'Kerly', '123', 'secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `rol`) VALUES
(1, 'admin', 'admin', 'administrador'),
(2, 'secre', 'secre', 'secretaria'),
(3, 'Manola', '123', 'secretaria'),
(4, 'Luisa', '321', 'secretaria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`);

--
-- Indices de la tabla `tblestudiantes`
--
ALTER TABLE `tblestudiantes`
  ADD PRIMARY KEY (`isEstudiante`);

--
-- Indices de la tabla `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tblestudiantes`
--
ALTER TABLE `tblestudiantes`
  MODIFY `isEstudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
