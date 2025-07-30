-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2024 a las 00:19:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `training_explosive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorias`
--

CREATE TABLE `asesorias` (
  `id_asesorias` bigint(20) NOT NULL,
  `id_usuario` bigint(15) NOT NULL,
  `id_plan` bigint(50) NOT NULL,
  `id_fuerza` bigint(20) NOT NULL,
  `id_estres` bigint(20) NOT NULL,
  `id_daño` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daño_muscular`
--

CREATE TABLE `daño_muscular` (
  `id_daño` bigint(20) NOT NULL,
  `repeticiones` varchar(200) NOT NULL,
  `series` varchar(100) NOT NULL,
  `tiempo_descanso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `daño_muscular`
--

INSERT INTO `daño_muscular` (`id_daño`, `repeticiones`, `series`, `tiempo_descanso`) VALUES
(1, '1.Ejercicio:10-12 2.Ejercicio:10 pesadas y 20 livianas ', '4', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estres_metabolico`
--

CREATE TABLE `estres_metabolico` (
  `id_estres` bigint(20) NOT NULL,
  `repeticiones` varchar(200) NOT NULL,
  `series` varchar(100) NOT NULL,
  `tiempo_descanso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estres_metabolico`
--

INSERT INTO `estres_metabolico` (`id_estres`, `repeticiones`, `series`, `tiempo_descanso`) VALUES
(1, '1 Ejercicio:6-8 2 Ejercicio:15 lentas ', '4', '1 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuerza`
--

CREATE TABLE `fuerza` (
  `id_fuerza` bigint(20) NOT NULL,
  `repeticiones` varchar(200) NOT NULL,
  `series` varchar(100) NOT NULL,
  `tiempo_descanso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fuerza`
--

INSERT INTO `fuerza` (`id_fuerza`, `repeticiones`, `series`, `tiempo_descanso`) VALUES
(1, '6-8', '4', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_usuario` bigint(15) NOT NULL,
  `tipo_de_usuario` varchar(50) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `peso` varchar(11) NOT NULL,
  `talla` varchar(11) NOT NULL,
  `enfermedades` varchar(150) NOT NULL,
  `fecha_de_inicio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_usuario`, `tipo_de_usuario`, `tipo_documento`, `nombre`, `apellido`, `edad`, `correo_electronico`, `telefono`, `direccion`, `peso`, `talla`, `enfermedades`, `fecha_de_inicio`, `contraseña`) VALUES
(18, 12345678, 'cliente', 'T.I', 'Mafe', 'Espinosa', 17, 'mafe@gmail.com', '123456', 'soledad', '60kg', '1.70', 'ninguna ', '2024-11-07 08:08:00', 'mafesita'),
(1, 1004791182, 'administrador', 'C.C', 'Stiven', 'Gutierrez', 24, 'sggutierrezr@uqvirtual.edu.co', '3217734709', 'La soledad', '77kg', '1.70cm', 'estres', '2024-10-25 14:57:00', 'Gutierrez01.'),
(14, 1088827388, 'cliente', 'C.C', 'Daniela', 'Castrillon', 18, 'nanisocampo@gmail.com', '3005005210', 'centro', '48kg', '150cm', 'todas', '2024-10-24 13:42:00', 'niesdeoso'),
(3, 1092457343, 'cliente', 'T.I', 'Luisa', 'Herrera', 17, 'luisa@gmail.com', '3108211341', ' soledad', '58kg', '1.60cm', 'hipoglucemia', '2024-09-16 16:50:00', 'luisa2324');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesorias`
--
ALTER TABLE `asesorias`
  ADD PRIMARY KEY (`id_asesorias`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`,`id_plan`,`id_fuerza`,`id_estres`,`id_daño`),
  ADD UNIQUE KEY `id_plan_4` (`id_plan`),
  ADD UNIQUE KEY `id_plan_5` (`id_plan`),
  ADD KEY `id_plan` (`id_plan`),
  ADD KEY `id_estres` (`id_estres`),
  ADD KEY `id_daño` (`id_daño`),
  ADD KEY `id_fuerza` (`id_fuerza`),
  ADD KEY `id_plan_2` (`id_plan`),
  ADD KEY `id_plan_3` (`id_plan`),
  ADD KEY `id_plan_6` (`id_plan`);

--
-- Indices de la tabla `daño_muscular`
--
ALTER TABLE `daño_muscular`
  ADD PRIMARY KEY (`id_daño`);

--
-- Indices de la tabla `estres_metabolico`
--
ALTER TABLE `estres_metabolico`
  ADD PRIMARY KEY (`id_estres`);

--
-- Indices de la tabla `fuerza`
--
ALTER TABLE `fuerza`
  ADD PRIMARY KEY (`id_fuerza`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `daño_muscular`
--
ALTER TABLE `daño_muscular`
  MODIFY `id_daño` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estres_metabolico`
--
ALTER TABLE `estres_metabolico`
  MODIFY `id_estres` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fuerza`
--
ALTER TABLE `fuerza`
  MODIFY `id_fuerza` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesorias`
--
ALTER TABLE `asesorias`
  ADD CONSTRAINT `asesorias_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `asesorias_ibfk_3` FOREIGN KEY (`id_estres`) REFERENCES `estres_metabolico` (`id_estres`),
  ADD CONSTRAINT `asesorias_ibfk_4` FOREIGN KEY (`id_daño`) REFERENCES `daño_muscular` (`id_daño`),
  ADD CONSTRAINT `asesorias_ibfk_5` FOREIGN KEY (`id_fuerza`) REFERENCES `fuerza` (`id_fuerza`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
