-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2025 a las 03:50:50
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
-- Base de datos: `crud_lab1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `precio`, `stock`, `created_at`) VALUES
(2, 'Lechuga', 'Lechuga fresca y crocante', 'Verdura', 0.80, 150, '2025-03-18 17:46:28'),
(5, 'Pimiento Rojo', 'Pimiento rojo dulce', 'Verdura', 1.80, 90, '2025-03-18 17:46:28'),
(6, 'Pimiento Verde', 'Pimiento verde crujiente', 'Verdura', 1.70, 95, '2025-03-18 17:46:28'),
(7, 'Espinaca', 'Hojas de espinaca frescas', 'Verdura', 1.00, 140, '2025-03-18 17:46:28'),
(8, 'Brócoli', 'Brócoli rico en nutrientes', 'Verdura', 2.00, 80, '2025-03-18 17:46:28'),
(9, 'Coliflor', 'Coliflor blanca y fresca', 'Verdura', 1.90, 85, '2025-03-18 17:46:28'),
(10, 'Calabacín', 'Calabacín de temporada', 'Verdura', 1.30, 110, '2025-03-18 17:46:28'),
(11, 'Berenjena', 'Berenjena tierna', 'Verdura', 1.60, 100, '2025-03-18 17:46:28'),
(12, 'Apio', 'Apio crujiente y aromático', 'Verdura', 1.40, 115, '2025-03-18 17:46:28'),
(13, 'Rábano', 'Rábanos frescos y picantes', 'Verdura', 0.90, 130, '2025-03-18 17:46:28'),
(14, 'Cebolla', 'Cebolla amarilla para cocinar', 'Verdura', 1.20, 150, '2025-03-18 17:46:28'),
(15, 'Ajo', 'Ajo aromático y saludable', 'Verdura', 0.70, 200, '2025-03-18 17:46:28'),
(16, 'Papa', 'Papa versátil y nutritiva', 'Verdura', 1.00, 180, '2025-03-18 17:46:28'),
(17, 'Batata', 'Batata dulce y colorida', 'Verdura', 1.50, 160, '2025-03-18 17:46:28'),
(18, 'Remolacha', 'Remolacha fresca para ensaladas', 'Verdura', 1.30, 140, '2025-03-18 17:46:28'),
(19, 'Calabaza', 'Calabaza para sopas y cremas', 'Verdura', 1.80, 110, '2025-03-18 17:46:28'),
(20, 'Chayote', 'Chayote ligero y saludable', 'Verdura', 1.20, 125, '2025-03-18 17:46:28'),
(21, 'Puerro', 'Puerro para caldos y guisos', 'Verdura', 1.60, 100, '2025-03-18 17:46:28'),
(22, 'Repollo', 'Repollo fresco y crujiente', 'Verdura', 1.10, 150, '2025-03-18 17:46:28'),
(23, 'Col Rizada', 'Col rizada rica en vitaminas', 'Verdura', 1.70, 90, '2025-03-18 17:46:28'),
(24, 'Escarola', 'Escarola para ensaladas mixtas', 'Verdura', 1.40, 120, '2025-03-18 17:46:28'),
(25, 'Endibia', 'Endibia para platos gourmet', 'Verdura', 1.80, 80, '2025-03-18 17:46:28'),
(26, 'Acelga', 'Acelga fresca y nutritiva', 'Verdura', 1.20, 140, '2025-03-18 17:46:28'),
(27, 'Berro', 'Berro picante para ensaladas', 'Verdura', 1.50, 100, '2025-03-18 17:46:28'),
(28, 'Judías Verdes', 'Judías verdes tiernas', 'Verdura', 1.90, 90, '2025-03-18 17:46:28'),
(29, 'Guisantes', 'Guisantes frescos de temporada', 'Verdura', 1.30, 130, '2025-03-18 17:46:28'),
(30, 'Habichuelas', 'Habichuelas verdes', 'Verdura', 1.40, 110, '2025-03-18 17:46:28'),
(31, 'Alcachofa', 'Alcachofa fresca y sabrosa', 'Verdura', 2.20, 70, '2025-03-18 17:46:28'),
(32, 'Brócoli Rabe', 'Brócoli rabe, sabor intenso', 'Verdura', 2.10, 75, '2025-03-18 17:46:28'),
(33, 'Col de Bruselas', 'Coles de Bruselas para asar', 'Verdura', 2.00, 80, '2025-03-18 17:46:28'),
(34, 'Kale', 'Kale orgánico y nutritivo', 'Verdura', 1.90, 85, '2025-03-18 17:46:28'),
(35, 'Bok Choy', 'Bok choy fresco asiático', 'Verdura', 1.70, 90, '2025-03-18 17:46:28'),
(36, 'Nabo', 'Nabo fresco para guisos', 'Verdura', 1.30, 110, '2025-03-18 17:46:28'),
(37, 'Rábano Blanco', 'Rábano blanco, sabor suave', 'Verdura', 1.10, 120, '2025-03-18 17:46:28'),
(38, 'Okra', 'Okra para guisos tradicionales', 'Verdura', 1.80, 95, '2025-03-18 17:46:28'),
(39, 'Hinojo', 'Hinojo aromático y dulce', 'Verdura', 1.60, 100, '2025-03-18 17:46:28'),
(40, 'Cardo', 'Cardo para platos mediterráneos', 'Verdura', 2.00, 70, '2025-03-18 17:46:28'),
(41, 'Diente de León', 'Hojas de diente de león para ensaladas', 'Verdura', 1.40, 80, '2025-03-18 17:46:28'),
(43, 'Brote de Alfalfa', 'Brote de alfalfa para ensaladas', 'Verdura', 1.00, 150, '2025-03-18 17:46:28'),
(44, 'Brote de Soja', 'Brote de soja fresco', 'Verdura', 1.20, 140, '2025-03-18 17:46:28'),
(45, 'Espárrago Verde', 'Espárragos verdes de temporada', 'Verdura', 2.50, 70, '2025-03-18 17:46:28'),
(47, 'Zanahoria Baby', 'Zanahoria baby para snacks', 'Verdura', 1.40, 130, '2025-03-18 17:46:28'),
(48, 'Rúcula', 'Rúcula fresca para ensaladas', 'Verdura', 1.50, 120, '2025-03-18 17:46:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
