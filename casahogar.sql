-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2021 a las 14:43:43
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `foto`, `edad`, `descripcion`, `tipo`) VALUES
(3, 'pacho', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/bigol.jpg?alt=media&token=a67cfd8b-4196-40ae-9e06-858d2b71695f', '4 meses', 'cachorro', 1),
(4, 'julio', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/doberman.jpg?alt=media&token=937823cb-3eb8-4643-82ef-6cfd0fd805a8', '6 meses', 'doberman cachorro', 1),
(5, 'rodrigo', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/lobo%20siberiano.jpg?alt=media&token=dda30992-367b-4a8d-ad7a-831c4ac33598', '5 meses', 'lobo siberiano', 1),
(6, 'junior ', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/bulldog.jpg?alt=media&token=955c220c-9f2e-4af6-8462-3e15c7d6d40a', '1 año ', 'bulldog frances', 1),
(8, 'favio', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/gato1.jpg?alt=media&token=e89796ae-875e-406f-9225-4cd54f99b4eb', '8 meses', 'Gato sentado', 2),
(9, 'Robusto', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/gato2.png?alt=media&token=93dde0e3-bb31-4505-923d-1411b4a56efe', '1 mes', 'Gato bebe', 2),
(10, 'Exotic', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/gato3.jpg?alt=media&token=d9bc7fd1-f4ff-4d1d-af9e-1b7edbf66cde', '3 años', 'Gato exotico', 2),
(11, 'Gonzalo', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/gato4.png?alt=media&token=b2becfc0-7a3d-49b7-b9ba-e4860c0f9892', 'indefinida', 'Gato llorando', 2),
(12, 'Petrolina', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/ave1.jpg?alt=media&token=3b1293c3-d6e8-42b6-8f15-d19d38501ab3', '3 años', 'Ave peinada', 3),
(13, 'Ramon', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/ave2.jpg?alt=media&token=e31d3e43-51bd-47af-9718-fd2480824554', '4 años', 'Ave con gafas', 3),
(14, 'Rosada', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/ave3.jpg?alt=media&token=b2251fef-2643-4050-8b40-2ba9d6eec032', '4 años', 'Ave exotica', 3),
(15, 'Coli', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/ave4.jpg?alt=media&token=414ee327-4e98-426e-b575-03cf7dc86692', '1 año', 'Colibri', 3),
(16, 'raul', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/caballo1.jpg?alt=media&token=5613a582-7d6a-4322-bfde-16b148aad4b1', '8 años', 'Caballo cafe', 4),
(17, 'gustavo', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/caballo2.jpg?alt=media&token=15722894-186b-4226-9ea5-4ee79ff198d8', '9 años', 'caballo comiendo', 4),
(18, 'pompilio', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/caballo3.jpg?alt=media&token=0df8601f-5bfa-4940-a60c-25fcf45dadf5', '10 años', 'caballo feliz', 4),
(19, 'tija', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/reptil1.jpg?alt=media&token=950b3dad-bbd8-4b23-907f-987d375ac3ba', '2 años', 'geco', 5),
(20, 'julian', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/reptil2.jpg?alt=media&token=b760787d-80b5-4fef-9b1e-767ecb07e39b', '3 años', 'lagartija verde', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(50) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `fotografia` varchar(200) NOT NULL,
  `precio` int(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `tipo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `fotografia`, `precio`, `descripcion`, `tipo`) VALUES
(1, 'cuido 1', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/cuido1.jpg?alt=media&token=6ca72e19-529b-44b2-9498-d94095770e85', 20000, 'dog chow', 1),
(3, 'cuido 3', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/cuido3.jpg?alt=media&token=6e84c1ac-8ddb-42de-b939-9b40b3349323', 10000, 'para gatos pequeños', 3),
(4, 'cuido 4', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/cuido4.jpg?alt=media&token=e233fa63-fe8c-4c2f-b480-c65585c30c0d', 30000, 'perros pequeños', 1),
(6, 'cuido adultos', 'https://firebasestorage.googleapis.com/v0/b/casahogardaniel-b21ef.appspot.com/o/cuido6.jpg?alt=media&token=4f9986f6-f90c-468b-a4ee-1c85e1543c35', 10000, 'cuido para perros adultos hpts', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
