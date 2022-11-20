-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 20 2022 р., 18:42
-- Версія сервера: 10.4.24-MariaDB
-- Версія PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Структура таблиці `admin`
--

CREATE TABLE `admin` (
  `correo` varchar(100) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `admin`
--

INSERT INTO `admin` (`correo`, `nombre`, `clave`) VALUES
('administrador@gmail.com', 'Administrador', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Структура таблиці `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `fk_id_genero` int(11) NOT NULL,
  `isbn` int(13) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion_short` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_venta` float NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `fk_id_genero`, `isbn`, `nombre`, `descripcion_short`, `descripcion`, `stock`, `precio_venta`, `imagen`, `destacado`, `estado`) VALUES
(1, 0, 541545454, 'torrente', 'LIBRO EN PREVENTA. Envíos a partir del 21 de novie', 'bla', 50, 85, 'img/libros/541545454.jpg', 1, 1),
(2, 1, 8888, 'lalaland', 'fdfdf', 'bla bla bla', 50, 85, 'img/libros/541545454.jpg', 1, 1),
(3, 2, 888875, 'lalalandghgh', 'fdfdf', 'bla bla bla bla', 500, 105, 'img/libros/541545454.jpg', 1, 1),
(4, 0, 4432, 'hOLA', 'JKº', 'JKLXCV', 50, 501, 'img/libros/4432.jpg', 1, 1),
(5, 2, 4432, 'hOLA', 'JKº', 'JKLXCV', 50, 501, 'img/libros4432.jpg', 1, 1),
(6, 1, 875454, 'BJMJH', 'RFGRFGGH', 'gegegeg', 30, 20, 'img/libros875454.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detallepedido` int(11) NOT NULL,
  `fk_id_factura` int(11) NOT NULL,
  `fk_id_articulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detallepedido`, `fk_id_factura`, `fk_id_articulo`, `cantidad`, `precio`) VALUES
(1, 2, 1, 2, 300),
(3, 2, 2, 5, 99);

-- --------------------------------------------------------

--
-- Структура таблиці `estado_factura`
--

CREATE TABLE `estado_factura` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `estado_factura`
--

INSERT INTO `estado_factura` (`id_estado`, `estado`) VALUES
(1, 'pendiente'),
(2, 'enviado'),
(3, 'entregado');

-- --------------------------------------------------------

--
-- Структура таблиці `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `factura`
--

INSERT INTO `factura` (`id_factura`, `fk_id_usuario`, `fecha`, `total`, `estado`) VALUES
(2, 1, '2022-11-09', 200, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `generos`
--

INSERT INTO `generos` (`id_genero`, `nombre`, `estado`) VALUES
(0, 'Sin genero', 1),
(1, 'comedia', 1),
(2, 'Gerard', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `direccion`, `email`, `clave`, `estado`) VALUES
(1, 'Vlad', 'Pasichnyk', 'C/VisualStudio', 'vlad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'Pepe', 'Garcia', 'Mi casa', 'pepe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(8, 'Pepe', 'sdada', '321', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(9, 'Pepe', 'sdada', '321', '1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `FK_articulo_generos` (`fk_id_genero`);

--
-- Індекси таблиці `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detallepedido`) USING BTREE,
  ADD KEY `FK_detalle_factura_articulo` (`fk_id_articulo`),
  ADD KEY `FK_detalle_factura_factura` (`fk_id_factura`) USING BTREE;

--
-- Індекси таблиці `estado_factura`
--
ALTER TABLE `estado_factura`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Індекси таблиці `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`) USING BTREE,
  ADD KEY `FK_factura_usuario` (`fk_id_usuario`),
  ADD KEY `estado` (`estado`),
  ADD KEY `estado_2` (`estado`);

--
-- Індекси таблиці `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`) USING BTREE;

--
-- Індекси таблиці `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detallepedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `FK_articulo_generos` FOREIGN KEY (`fk_id_genero`) REFERENCES `generos` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Обмеження зовнішнього ключа таблиці `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `FK_detalle_factura_articulo` FOREIGN KEY (`fk_id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_detalle_factura_factura` FOREIGN KEY (`fk_id_factura`) REFERENCES `factura` (`id_factura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Обмеження зовнішнього ключа таблиці `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_factura_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado_factura` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
