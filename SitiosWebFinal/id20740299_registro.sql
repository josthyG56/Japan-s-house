-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-05-2024 a las 03:44:48
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20740299_registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idDato` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Sexo` varchar(20) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Comentarios` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Camisa` varchar(10) DEFAULT NULL,
  `Transporte` varchar(10) DEFAULT NULL,
  `Talla` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idDato`, `Nombre`, `Apellidos`, `Edad`, `Sexo`, `Ciudad`, `Correo`, `Comentarios`, `Telefono`, `Camisa`, `Transporte`, `Talla`) VALUES
(1, 'Fausto', 'Ramirez', 24, 'Masculino', 'Tijuana', 'josh.z@gmail.com', 'hohooho', '66412345678', 'Si', 'Si', 'mediana'),
(2, 'Cesar', 'J', 21, 'Masculino', 'Ensenada', 'cesarJ@gmail.com', 'Hola Mundo!D:', '6640001000', 'No', '', 'null'),
(3, 'Edwin', 'Meza', 18, 'Masculino', 'Rosarito', 'edwinRM@gmail.com', 'Hola Mundo!(:', '6640001005', 'Si', '', 'chica'),
(4, 'Esmeralda', 'Zacarias', 23, 'Femenino', 'Rosarito', 'zacaMeme@gmail.com', 'JijijiiKa', '6649870456', 'Si', '', 'grande'),
(5, 'Deniss', 'Meza', 18, 'Femenino', 'Mexicali', 'zoe101@gmail.com', 'HoooRaRaa', '6641234567', 'Si', 'No', 'chica'),
(6, 'Isabel', 'Mercado', 42, 'Femenino', 'Rosarito', 'isalM@gmail.com', 'hhhhhhhhh', '1234567891', 'Si', 'No', 'mediana'),
(7, 'Isabel', 'Mercado', 42, 'Femenino', 'Rosarito', 'isalM@gmail.com', 'hhhhhhhhh', '1234567891', 'Si', 'No', 'mediana'),
(8, 'Isabel', 'Mercado', 42, 'Femenino', 'Rosarito', 'isalM@gmail.com', 'hhhhhhhhh', '1234567891', 'Si', 'No', 'mediana'),
(9, 'Isabel', 'Mercado', 42, 'Femenino', 'Rosarito', 'isalM@gmail.com', 'hhhhhhhhh', '1234567891', 'Si', 'No', 'mediana'),
(10, 'Isabel', 'Mercado', 42, 'Femenino', 'Rosarito', 'isalM@gmail.com', 'hhhhhhhhh', '1234567891', 'Si', 'No', 'mediana'),
(11, 'Isabel', 'Mercado', 42, 'Femenino', 'Rosarito', 'isalM@gmail.com', 'hhhhhhhhh', '1234567891', 'Si', 'No', 'mediana'),
(12, 'Fausto', 'Ramirez', 25, 'Masculino', 'Tijuana', 'fausto@gmail.com', 'holaaaaa', '6641237410', 'Si', 'null', 'grande'),
(13, 'Joshua', 'Meza', 25, 'Masculino', 'Rosarito', 'josh@gmail.com', 'holaa', '6641237410', 'Si', 'Si', 'grande'),
(14, 'Fausto', 'Ramirez', 18, 'Femenino', 'Tijuana', 'jos2@gmail.com', 'dadhawhid', '123456789', 'Si', 'Si', 'chica'),
(15, 'Fausto', 'ramirez', 18, 'Masculino', 'Ensenada', 'josh.cuartameza@gmail.com', 'daihdiawhida', '7410741012', 'No', 'No', 'chica'),
(16, 'Fausto', 'ramirez', 18, 'Masculino', 'Ensenada', 'josh.cuartameza@gmail.com', 'daihdiawhida', '7410741012', 'No', 'No', 'chica'),
(17, 'fausto', 'ram', 18, 'Femenino', 'Ensenada', 'josh,c@gmail.com', 'dawdawdaw', '741074107', 'Si', 'Si', 'grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(9) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `contraseña` varchar(25) NOT NULL,
  `tipoCuenta` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contraseña`, `tipoCuenta`) VALUES
(1, 'joshua', '7410', 'admin'),
(2, 'christ', '1234', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idDato`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idDato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
