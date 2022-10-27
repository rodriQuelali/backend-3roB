-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2022 a las 15:32:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `virtuallibro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `cod_administrador` int(10) NOT NULL,
  `nombre_administrador` varchar(20) NOT NULL,
  `contraseña_administrador` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(20) NOT NULL,
  `nombre_categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `nombre_categoria`) VALUES
(1, 'cuentos'),
(2, 'novelas'),
(3, 'historias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `cod_libro` int(10) NOT NULL,
  `titulo_libro` varchar(50) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`cod_libro`, `titulo_libro`, `autor`, `editorial`, `cantidad`, `genero`, `fecha_publicacion`, `id_categoria`) VALUES
(1, 'mitos', 'roger', 'bosquo', '25', 'urbano', '2022-10-04', 1),
(2, 'vida brillante', 'nestor', 'bosque', '5', 'romano', '2022-05-20', 1),
(5, 'jaime', 'nestor', 'bosque', '5', 'romano', '2022-05-20', 2),
(13, 'lagartos', 'Lucas', 'Sabiduria', '15', 'urbano', '2022-06-13', 2),
(14, ' pobre rico', 'Lucas', 'Sabiduria', '15', 'urbano', '2022-06-13', 3),
(16, 'hombre maquina', 'Lucas', 'Sabiduria', '15', 'urbano', '2022-06-13', 3),
(19, 'pomares', 'Lucas', 'Sabiduria', '15', 'urbano', '2022-06-13', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `cod_libro` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `codigo_administrador` int(11) NOT NULL,
  `ci_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(10) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `edad` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nro_celular` int(8) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `confirmar_contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nombre_completo`, `edad`, `email`, `nro_celular`, `contra`, `confirmar_contraseña`) VALUES
(1, 'Nestor', 23, 'usuario@gmail.com', 7676, '12345', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cod_administrador`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`cod_libro`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`cod_libro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `cod_administrador` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `cod_libro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `cod_libro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
