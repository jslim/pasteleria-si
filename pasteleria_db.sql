-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2017 a las 07:45:50
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pasteleria_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono_cliente` char(30) NOT NULL,
  `email_cliente` varchar(64) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `status_cliente` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `email_cliente`, `direccion_cliente`, `status_cliente`, `date_added`) VALUES
(3, '15231564', '0416235264', 'Juan Perez', 'Barcelona ', 1, '2017-02-05 20:18:01'),
(18, '22626481', '04163262000', 'Magnolia Benjamin', 'Barcelona Anzoategui', 1, '2017-02-23 00:18:14'),
(19, '15326562', '0424563215', 'Maria Rondon', 'Puerto la Cruz - Barcelona', 1, '2017-02-23 00:28:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
`id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL,
  `fecha_recepcion` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_factura`, `numero_factura`, `fecha_factura`, `id_cliente`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`, `fecha_recepcion`) VALUES
(96, 13, '2017-03-02 08:47:52', 20, 5, '1', '29905.29', 0, '2017-03-05'),
(60, 2, '2017-03-02 05:28:35', 9, 5, '1', '1456.26', 2, '2017-03-02'),
(91, 10, '2017-03-02 23:26:54', 4, 7, '1', '500.56', 1, '0000-00-00'),
(92, 11, '2028-04-08 00:00:00', 0, 4, '1', '1800.79', 2, '0000-00-00'),
(95, 12, '2017-03-01 08:26:06', 20, 5, '1', '3101.13', 2, '0000-00-00'),
(97, 14, '2017-03-01 08:53:37', 4, 5, '1', '1800.90', 0, '0000-00-00'),
(98, 15, '2017-02-02 08:54:25', 4, 5, '1', '1800.90', 3, '0000-00-00'),
(99, 16, '2017-01-03 09:08:35', 4, 5, '1', '7203.60', 3, '0000-00-00'),
(100, 17, '2017-03-01 09:19:03', 4, 5, '1', '35135.32', 2, '0000-00-00'),
(101, 18, '2017-03-01 09:20:00', 4, 5, '1', '6904.71', 3, '2017-03-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `precision` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thousand_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decimal_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `precision`, `thousand_separator`, `decimal_separator`, `code`) VALUES
(1, 'US Dollar', '$', '2', ',', '.', 'USD'),
(2, 'Bolivar Fuerte', 'Bs.F.', '2', ',', '.', 'Bs.F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE IF NOT EXISTS `detalle_compra` (
`id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=259 ;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(239, 13, 5, 20, 1300.23),
(238, 13, 5, 3, 1300.23),
(153, 2, 5, 1, 1300.23),
(229, 10, 6, 1, 500.56),
(228, 10, 10, 1, 0),
(230, 11, 6, 1, 500.56),
(231, 11, 5, 1, 1300.23),
(235, 12, 5, 1, 1300.23),
(236, 12, 13, 1, 500.67),
(237, 12, 5, 1, 1300.23),
(240, 14, 5, 1, 1300.23),
(241, 14, 13, 1, 500.67),
(242, 14, 13, 1, 500.67),
(243, 14, 5, 1, 1300.23),
(244, 14, 5, 1, 1300.23),
(245, 14, 13, 1, 500.67),
(246, 14, 13, 1, 500.67),
(247, 14, 5, 1, 1300.23),
(248, 14, 13, 1, 500.67),
(249, 14, 5, 1, 1300.23),
(250, 15, 13, 1, 500.67),
(251, 15, 5, 1, 1300.23),
(252, 16, 13, 4, 500.67),
(253, 16, 5, 4, 1300.23),
(254, 17, 5, 5, 1300.23),
(255, 17, 13, 51, 500.67),
(256, 17, 31, 5, 620),
(257, 18, 13, 6, 500.67),
(258, 18, 5, 3, 1300.23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE IF NOT EXISTS `detalle_factura` (
`id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=303 ;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(302, 8, 11, 16, 2499.66),
(301, 16, 5, 1, 1500.23),
(300, 7, 7, 1493, 1200.78),
(299, 2, 9, 1, 1200.68),
(298, 2, 5, 1, 1500.23),
(297, 2, 5, 1, 1500.23),
(296, 2, 9, 1, 1200.68),
(295, 2, 6, 1, 990.56),
(294, 2, 7, 1, 1200.78),
(293, 2, 8, 1, 1300),
(292, 2, 5, 1, 1500.23),
(291, 2, 6, 1, 990.56),
(290, 2, 8, 1, 1300),
(289, 2, 7, 1, 1200.78),
(288, 6, 7, 122, 1200.78),
(287, 6, 8, 1190, 1300),
(286, 5, 8, 20, 1300),
(285, 5, 18, 80, 1800.66),
(284, 4, 14, 350, 35800),
(283, 3, 21, 4, 1605.48),
(282, 3, 7, 3, 1200.78),
(281, 3, 12, 2, 1699.78),
(280, 2, 12, 20, 1699.78),
(279, 1, 8, 10, 1300),
(278, 1, 7, 2, 1200.78),
(277, 1, 12, 13, 1699.78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ordenp`
--

CREATE TABLE IF NOT EXISTS `detalle_ordenp` (
`id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=409 ;

--
-- Volcado de datos para la tabla `detalle_ordenp`
--

INSERT INTO `detalle_ordenp` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(403, 9, 8, 10, 990),
(404, 10, 19, 30, 1809),
(405, 10, 12, 15, 1199.78),
(406, 10, 7, 20, 900.78),
(407, 11, 22, 300, 260),
(408, 11, 35, 122, 350),
(402, 9, 30, 700, 1999),
(401, 8, 35, 200, 350),
(400, 7, 22, 452, 260),
(399, 6, 20, 422, 2300),
(396, 4, 19, 756, 1809),
(397, 4, 18, 693, 1500),
(398, 5, 21, 536, 1200),
(395, 3, 17, 500, 900.15),
(394, 3, 15, 8000, 1254.23),
(393, 2, 12, 1252, 1199.78),
(392, 2, 14, 200, 28562),
(391, 1, 11, 658, 2000.56),
(390, 1, 7, 800, 900.78),
(389, 1, 8, 600, 990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_requisicion`
--

CREATE TABLE IF NOT EXISTS `detalle_requisicion` (
`id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=401 ;

--
-- Volcado de datos para la tabla `detalle_requisicion`
--

INSERT INTO `detalle_requisicion` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(400, 7, 5, 4, 1300.23),
(399, 7, 6, 5, 500.56),
(398, 6, 36, 150, 3500),
(397, 6, 31, 520, 620),
(396, 5, 31, 520, 620),
(395, 5, 31, 520, 620),
(394, 4, 16, 962, 350.12),
(393, 4, 23, 425, 250),
(392, 3, 10, 455, 623.36),
(391, 3, 10, 455, 623.36),
(390, 3, 13, 745, 500.67),
(389, 2, 9, 750, 820),
(388, 2, 10, 455, 623.36),
(387, 1, 5, 520, 1300.23),
(386, 1, 6, 300, 500.56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
`id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=109 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `numero_factura`, `fecha_factura`, `id_cliente`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`) VALUES
(105, 5, '2017-05-11 00:17:17', 3, 4, '1', '190459.14', 1),
(101, 1, '2017-01-02 00:12:30', 18, 7, '1', '6904.71', 1),
(102, 2, '2017-03-01 00:13:41', 3, 7, '4', '38075.07', 1),
(103, 3, '2017-02-09 00:14:18', 19, 7, '1', '15034.68', 1),
(104, 4, '2017-01-03 00:16:12', 18, 4, '1', '14033600', 1),
(106, 6, '2017-03-01 00:18:01', 19, 4, '4', '1896714.58', 1),
(107, 7, '2017-06-03 09:05:06', 18, 7, '1', '2007896.28', 1),
(108, 8, '2017-03-01 09:13:14', 18, 7, '1', '44793.91', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenp`
--

CREATE TABLE IF NOT EXISTS `ordenp` (
`id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=128 ;

--
-- Volcado de datos para la tabla `ordenp`
--

INSERT INTO `ordenp` (`id_factura`, `numero_factura`, `fecha_factura`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`) VALUES
(127, 11, '2017-03-01 00:03:28', 6, 'undefined', '120700.00', 1),
(126, 10, '2017-03-01 00:03:00', 6, 'undefined', '90282.30', 1),
(125, 9, '2017-02-28 23:59:42', 8, 'undefined', '1578304', 2),
(124, 8, '2017-02-28 23:59:12', 8, 'undefined', '78400', 2),
(123, 7, '2017-02-28 23:59:00', 8, 'undefined', '131622.4', 2),
(122, 6, '2017-08-04 23:57:09', 6, 'undefined', '1087072', 2),
(121, 5, '2017-06-10 23:56:54', 6, 'undefined', '720384', 2),
(120, 4, '2017-05-12 23:54:30', 6, 'undefined', '2695956.48', 2),
(119, 3, '2017-04-07 23:51:22', 6, 'undefined', '11741984.8', 2),
(118, 2, '2017-02-28 23:51:00', 6, 'undefined', '8080267.51', 2),
(117, 1, '2017-01-04 23:48:54', 6, 'undefined', '2946711.58', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
`id_perfil` int(11) NOT NULL,
  `nombre_empresa` varchar(150) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `impuesto` int(2) NOT NULL,
  `moneda` varchar(6) NOT NULL,
  `logo_url` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre_empresa`, `direccion`, `ciudad`, `codigo_postal`, `estado`, `telefono`, `email`, `impuesto`, `moneda`, `logo_url`) VALUES
(1, 'Pasteleria Italliana Venecia', 'Avenida Nueva Esparta, Centro Comercial Nueva Esparta, Edificio 1, PB, Local 2', 'Barcelona', '6001', 'Estado AnzoÃ¡tegui, Venezuela', '+(58)-281-267-92-53', 'pasteleria-venecia@gmail.com', 12, 'Bs.F.', 'img/1486322434_logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE IF NOT EXISTS `producto_proveedor` (
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_proveedor`
--

INSERT INTO `producto_proveedor` (`id_producto`, `id_cliente`) VALUES
(5, 4),
(13, 4),
(31, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id_producto` int(11) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL,
  `stock` int(10) unsigned NOT NULL,
  `costo_producto` float NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `q` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `codigo_producto`, `nombre_producto`, `status_producto`, `date_added`, `precio_producto`, `stock`, `costo_producto`, `id_categoria`, `unidad`, `q`, `id_tipo`, `stock_min`) VALUES
(5, '001', 'Refresco bomba Pepsi 600 ml', 1, '2017-02-05 20:09:47', 1500.23, 6, 1300.23, 0, '', 520, 2, 150),
(8, '004', 'Trufa', 1, '2017-02-05 20:11:02', 1300, 0, 990, 0, '', 600, 1, 80),
(7, '003', 'Caracola', 1, '2017-02-05 20:10:44', 1200.78, 0, 900.78, 0, '', 800, 1, 300),
(6, '002', 'Halls Mento-Lyptus', 1, '2017-02-05 20:10:17', 990.56, 0, 500.56, 0, '', 300, 2, 50),
(9, '005', 'Jugo lata Yukery', 1, '2017-02-05 20:11:23', 1200.68, 0, 820, 0, '', 750, 2, 150),
(10, '006', 'Nestea 450g', 1, '2017-02-05 20:11:43', 1000.25, 0, 623.36, 0, '', 455, 2, 99),
(11, '007', 'Panna cotta', 1, '2017-02-05 20:12:15', 2499.66, 1300, 2000.56, 0, '', 658, 1, 200),
(12, '008', 'Profiterol de dulce de chocolate', 1, '2017-02-05 20:12:42', 1699.78, 2484, 1199.78, 0, '', 1252, 1, 263),
(13, '009', 'Agua Mineral 600 ml', 1, '2017-02-05 20:13:03', 800.67, 12, 500.67, 0, '', 745, 2, 50),
(14, '010', 'Torta teramizÃº', 1, '2017-02-05 20:13:24', 35800, 50, 28562, 0, '', 200, 1, 20),
(15, '011', 'Salado de carne', 1, '2017-02-05 20:13:48', 1754.23, 16000, 1254.23, 0, '', 8000, 1, 360),
(16, '012', 'Malta Polar retornable 600 ml', 1, '2017-02-05 20:14:09', 589.42, 0, 350.12, 0, '', 962, 2, 60),
(17, '013', 'Tartaleta de frutas', 1, '2017-02-05 20:14:27', 1100.15, 1000, 900.15, 0, '', 500, 1, 88),
(18, '014', 'Croissant de jamÃ³n y queso	', 1, '2017-02-05 20:14:45', 1800.66, 1306, 1500, 0, '', 693, 1, 93),
(19, '015', 'Croissant de queso crema', 1, '2017-02-05 20:15:08', 2589.29, 1542, 1809, 0, '', 756, 1, 76),
(20, '016', 'Sacripantina', 1, '2017-02-05 20:15:28', 2899.15, 844, 2300, 0, '', 422, 1, 22),
(21, '017', 'Cannoli', 1, '2017-02-05 20:15:48', 1605.48, 1068, 1200, 0, '', 536, 1, 38),
(22, '018', 'Merengue italiano', 1, '2017-02-05 20:16:07', 585, 1204, 260, 0, '', 452, 1, 50),
(23, '019', 'Toronto Savoy', 1, '2017-02-05 20:16:25', 400, 0, 250, 0, '', 425, 2, 30),
(24, '020', 'Nactulac NÃ©ctar Vidrio 250 cm 3', 1, '2017-02-05 20:16:44', 550, 0, 350, 0, '', 425, 2, 0),
(30, '506', 'Cachito', 1, '2017-02-21 07:33:08', 2555.23, 2100, 1999, 0, '', 700, 1, 0),
(31, '507', 'Agua 350 ml', 1, '2017-02-21 07:33:39', 800.23, 0, 620, 0, '', 520, 2, 0),
(33, '060', 'Azucar', 1, '2017-02-03 00:00:00', 8000, 0, 7000, 1, 'KG', 90000, 3, 130),
(36, '054', 'Helado', 1, '2017-02-26 03:18:53', 5000, 0, 3500, 2, 'unidad', 150, 2, 30),
(35, '055', 'Ponque', 1, '2017-02-26 03:11:01', 500, 522, 350, 0, '', 200, 1, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
`id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono_cliente` char(30) NOT NULL,
  `email_cliente` varchar(64) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `status_cliente` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `rif` varchar(20) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `te` int(10) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `email_cliente`, `direccion_cliente`, `status_cliente`, `date_added`, `rif`, `contacto`, `te`) VALUES
(4, 'Pepsi', '04123584152', 'pepsi@hotmail.com', 'Puerto la cruz - AnzoateguÃ­', 1, '2017-02-05 21:16:31', 'jojo', 'jojo', 1),
(9, 'Savoy', '0424523621', 'savoy@gmail.com', 'Barcelona - AnzoÃ¡tegui', 1, '2017-02-22 04:26:18', 'r', 'r', 0),
(10, 'Coca-cola', '02813262451', 'Coca-cola@hotmail.com', 'Gauaraguo - Anzoategui ', 1, '2017-02-22 04:32:29', '', '', 0),
(20, 'Chocolates El Rey, C.A.', '+58 (251) 269.2252', 'chocolates@chocolate.com', 'Barquisimeto, Edo. Lara', 1, '2017-02-23 02:15:12', '', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisicion`
--

CREATE TABLE IF NOT EXISTS `requisicion` (
`id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=121 ;

--
-- Volcado de datos para la tabla `requisicion`
--

INSERT INTO `requisicion` (`id_factura`, `numero_factura`, `fecha_factura`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`) VALUES
(120, 7, '2017-03-01 09:07:53', 6, 'undefined', '7703.72', 1),
(119, 6, '2017-03-01 00:10:27', 8, 'undefined', '847400.00', 1),
(118, 5, '2017-03-01 00:09:27', 6, 'undefined', '644800.00', 1),
(117, 4, '2017-03-01 00:08:41', 6, 'undefined', '443065.44', 1),
(116, 3, '2017-03-01 00:08:16', 6, 'undefined', '940256.75', 1),
(115, 2, '2017-03-01 00:07:55', 6, 'undefined', '898628.80', 1),
(114, 1, '2017-03-01 00:07:33', 6, 'undefined', '826287.60', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
`id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=720 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL,
  `idRol` int(11) NOT NULL,
  `rol` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`, `idRol`, `rol`) VALUES
(1, 'Obed', 'Alvarado', 'admin', '$2y$10$QvzmdHNPsP9DyV7cZ4CWj.zgUanPuzKpvJlXUwvuOOaczyGx3f5CG', 'admin@admin.com', '2016-05-21 15:06:00', 0, ''),
(2, 'magnolia', 'benjamin', 'magno', '$2y$10$Z2fqLt1SFwYI4ENh4yxnZuDbE7/eugFosJ9Umb8zfknpu2oVaehsy', 'magnolia@gmail.com', '2017-02-05 21:09:44', 0, '1'),
(3, 'ana', 'lopez', 'ana', '$2y$10$gC0U9jDguL9nGC4z5AsbAuOcYQQHWsKfNjz4gWsJaGyugNnPt3NNi', 'ana@hotmail.com', '2017-02-22 07:44:27', 0, '2'),
(4, 'pedro', 'Aguilar', 'pedro', '$2y$10$qc5jCdIz841ODtXIdL.xde/Jv2VLxAh3AqvmKAauNnT5dSctVS.DS', 'pedro@gmail.com', '2017-02-22 08:06:04', 0, '4'),
(5, 'Axel ', 'Gallego', 'axel', '$2y$10$z1YpdYiqDmK4BNGHJd63weABfPta2lDhnWv8VIiD1qucpuornXJBq', 'axel@gmail.com', '2017-02-22 08:45:10', 0, '3'),
(6, 'Maria ', 'Gonzalez ', 'maria', '$2y$10$xGQNOlaGplopYx9nETKCmOprtEZGa569NSE93DaST5Tr/Lt5CxfjO', 'MariaLuisa@hotmail.com', '2017-02-23 00:56:49', 0, '5'),
(7, 'Kevin ', 'Benjamin ', 'kevin', '$2y$10$9Y9WhZkAHEsPeHPb0ErLaeU.Khca5mwam1088KYgRfz/x9Jod3Lba', 'kevin@gmail.com', '2017-02-23 06:29:09', 0, '4'),
(8, 'Sonia ', 'Yu', 'sonia', '$2y$10$3NvGE80LcqSSW9GUhIz7ku9V482.2sTtRFMxNlS.zYo4u09f35sVe', 'sonia@gmail.com', '2017-02-28 23:58:18', 0, '5'),
(9, 'JosÃ© ', 'Agreda', 'jose', '$2y$10$T59IAYca5gfgv7vOlD4svu/XJAfEc268Q064B6awI.FDuP9g7pUKm', 'jose@gamil.com', '2017-03-01 05:29:35', 0, '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id_cliente`), ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
 ADD PRIMARY KEY (`id_factura`), ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
 ADD PRIMARY KEY (`id_detalle`), ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
 ADD PRIMARY KEY (`id_detalle`), ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `detalle_ordenp`
--
ALTER TABLE `detalle_ordenp`
 ADD PRIMARY KEY (`id_detalle`), ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `detalle_requisicion`
--
ALTER TABLE `detalle_requisicion`
 ADD PRIMARY KEY (`id_detalle`), ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
 ADD PRIMARY KEY (`id_factura`), ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `ordenp`
--
ALTER TABLE `ordenp`
 ADD PRIMARY KEY (`id_factura`), ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id_producto`), ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`id_cliente`), ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indices de la tabla `requisicion`
--
ALTER TABLE `requisicion`
 ADD PRIMARY KEY (`id_factura`), ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
 ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_name` (`user_name`), ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=259;
--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=303;
--
-- AUTO_INCREMENT de la tabla `detalle_ordenp`
--
ALTER TABLE `detalle_ordenp`
MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=409;
--
-- AUTO_INCREMENT de la tabla `detalle_requisicion`
--
ALTER TABLE `detalle_requisicion`
MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=401;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT de la tabla `ordenp`
--
ALTER TABLE `ordenp`
MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `requisicion`
--
ALTER TABLE `requisicion`
MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=720;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
