-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-07-2022 a las 23:25:40
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zelayaca_data_cm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_cat`
--

CREATE TABLE `cm_cat` (
  `id_cat` int(10) NOT NULL,
  `cat_cat` varchar(10) NOT NULL,
  `n_cat` varchar(250) NOT NULL,
  `des_cat` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cm_cat`
--

INSERT INTO `cm_cat` (`id_cat`, `cat_cat`, `n_cat`, `des_cat`) VALUES
(3, '2', 'Collares', ''),
(2, '2', 'Piñatas', ''),
(8, '1', 'Generales', ''),
(10, '2', 'Cojines', ''),
(12, '2', 'Café', 'Café'),
(13, '2', 'Mascarillas', 'Artesanales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_notas`
--

CREATE TABLE `cm_notas` (
  `id_nota` int(10) NOT NULL,
  `cat_nota` int(10) NOT NULL,
  `dep_nota` int(10) NOT NULL,
  `mun_nota` int(10) NOT NULL,
  `ald_nota` varchar(150) NOT NULL,
  `ti_nota` varchar(250) NOT NULL,
  `ti_nota2` varchar(250) NOT NULL,
  `pie_nota` varchar(250) NOT NULL,
  `nota_nota` longtext NOT NULL,
  `nota_nota2` longtext NOT NULL,
  `vid_nota` varchar(50) NOT NULL,
  `aud_nota` varchar(50) NOT NULL,
  `pre_nota` varchar(60) NOT NULL,
  `act_nota` int(4) NOT NULL,
  `port_nota` varchar(10) NOT NULL,
  `cont_nota` varchar(11) NOT NULL DEFAULT '0',
  `ing_nota` datetime NOT NULL,
  `usr_nota` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cm_notas`
--

INSERT INTO `cm_notas` (`id_nota`, `cat_nota`, `dep_nota`, `mun_nota`, `ald_nota`, `ti_nota`, `ti_nota2`, `pie_nota`, `nota_nota`, `nota_nota2`, `vid_nota`, `aud_nota`, `pre_nota`, `act_nota`, `port_nota`, `cont_nota`, `ing_nota`, `usr_nota`) VALUES
(3, 3, 0, 0, '', 'Amankaya', '.', '', '<p>.</p>\r\n', '<p>.</p>\r\n', '', '', '75.00', 1, '1', '0', '2020-01-30 00:35:00', ' '),
(4, 3, 0, 0, '', 'Anam', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(5, 3, 0, 0, '', 'Anayansi', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(6, 3, 0, 0, '', 'Aquetzali', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(7, 3, 0, 0, '', 'Arichié', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(8, 3, 0, 0, '', 'Aruma', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(9, 3, 0, 0, '', 'Athziri', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(10, 3, 0, 0, '', 'Atzin', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(11, 4, 0, 0, '', 'asdfasdf', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(12, 3, 0, 0, '', 'Axochitl', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(14, 3, 0, 0, '', 'balanca', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(15, 3, 0, 0, '', 'Bamoa', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(16, 3, 0, 0, '', 'Boneci', '', '', '', '', '', '', '75', 1, '', '0', '0000-00-00 00:00:00', ''),
(163, 2, 0, 0, '', 'Eterna Primavera', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 20:05:00', ''),
(18, 3, 0, 0, '', 'Awilix', '.', '', '', '', '', '', '75', 1, '1', '0', '2020-02-14 21:09:00', ''),
(19, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(20, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(21, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(22, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(23, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(24, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(25, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(26, 4, 0, 0, '', 'Cojin', '', '', '', '', '', '', '50', 0, '', '0', '0000-00-00 00:00:00', ''),
(27, 5, 0, 0, '', 'Pulseras', '', '', '', '', '', '', '20', 0, '', '0', '0000-00-00 00:00:00', ''),
(28, 5, 0, 0, '', 'Pulseras', '', '', '', '', '', '', '20', 0, '', '0', '0000-00-00 00:00:00', ''),
(29, 5, 0, 0, '', 'Tortuga', '', '', '', '', '', '', '100', 0, '', '0', '0000-00-00 00:00:00', ''),
(91, 3, 0, 0, '', 'Chaac', '.', '', '<p>.</p>\r\n', '<p>.</p>\r\n', '', '', '75.00', 1, '1', '0', '2020-02-14 21:09:00', ''),
(92, 3, 0, 0, '', 'Chacte', '.', '', '<p>.</p>\r\n', '<p>.</p>\r\n', '', '', '75.00', 1, '1', '0', '2020-02-14 21:09:00', ''),
(93, 3, 0, 0, '', 'Cozumel', '.', '', '<p>.</p>\r\n', '<p>.</p>\r\n', '', '', '75.00', 1, '1', '0', '2020-02-14 21:08:00', ''),
(94, 3, 0, 0, '', 'Dayami', '.', '', '<p>.</p>\r\n', '<p>.</p>\r\n', '', '', '75.00', 1, '1', '0', '2020-02-06 19:57:00', ' '),
(95, 3, 0, 0, '', 'Ikal', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:05:00', ' '),
(96, 3, 0, 0, '', 'Itzamara', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:05:00', ' '),
(97, 3, 0, 0, '', 'Itzel', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:06:00', ' '),
(98, 3, 0, 0, '', 'Itzia', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:07:00', ' '),
(99, 3, 0, 0, '', 'Ixchel', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:08:00', ' '),
(100, 3, 0, 0, '', 'Ixmucané', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:09:00', ' '),
(101, 3, 0, 0, '', 'Ixtab', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:09:00', ' '),
(102, 3, 0, 0, '', 'Jun', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:10:00', ' '),
(103, 3, 0, 0, '', 'Kabah', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:11:00', ' '),
(104, 3, 0, 0, '', 'Kantunil', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:11:00', ' '),
(105, 3, 0, 0, '', 'Kantyi', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:13:00', ' '),
(106, 3, 0, 0, '', 'Kinari', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:13:00', ' '),
(107, 3, 0, 0, '', 'Litza', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:14:00', ' '),
(108, 3, 0, 0, '', 'Mactzil', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:15:00', ' '),
(109, 3, 0, 0, '', 'María', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:16:00', ' '),
(110, 3, 0, 0, '', 'Muyal', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:17:00', ' '),
(111, 3, 0, 0, '', 'Nakawé', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:17:00', ' '),
(112, 3, 0, 0, '', 'Naran', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:18:00', ' '),
(113, 3, 0, 0, '', 'Nayeli', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:19:00', ' '),
(114, 3, 0, 0, '', 'Nicte', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:20:00', ' '),
(115, 3, 0, 0, '', 'Nicteel', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:21:00', ' '),
(116, 3, 0, 0, '', 'Nima', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:21:00', ' '),
(117, 3, 0, 0, '', 'Noil', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:23:00', ' '),
(118, 3, 0, 0, '', 'Nuscaa', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:24:00', ' '),
(119, 3, 0, 0, '', 'Shaila', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:24:00', ' '),
(120, 3, 0, 0, '', 'Uma', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:25:00', ' '),
(121, 3, 0, 0, '', 'Xareni', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:25:00', ' '),
(122, 3, 0, 0, '', 'Yaayan', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:27:00', ' '),
(123, 3, 0, 0, '', 'Yalit', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:27:00', ' '),
(124, 3, 0, 0, '', 'Yanel', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:28:00', ' '),
(125, 3, 0, 0, '', 'Yatziri', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:28:00', ' '),
(126, 3, 0, 0, '', 'Yaxcol', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:29:00', ' '),
(127, 3, 0, 0, '', 'Yelaxen', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:29:00', ' '),
(128, 3, 0, 0, '', 'Yul', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:30:00', ' '),
(129, 3, 0, 0, '', 'Yuritzi', '', '', '', '', '', '', '75.00', 1, '1', '0', '2020-02-06 20:31:00', ' '),
(130, 6, 0, 0, '', 'Gancho 1', '', '', '', '', '', '', '25', 0, '1', '0', '2020-02-06 20:33:00', ' '),
(131, 6, 0, 0, '', 'Gancho 2', '', '', '', '', '', '', '75.00', 0, '1', '0', '2020-02-06 20:34:00', ' '),
(132, 6, 0, 0, '', 'Gancho 3', '', '', '', '', '', '', '25.00', 0, '1', '0', '2020-02-06 20:34:00', ' '),
(133, 6, 0, 0, '', 'Gancho 4', '', '', '', '', '', '', '25.00', 0, '1', '0', '2020-02-06 20:35:00', ' '),
(134, 6, 0, 0, '', 'Gancho 5', '', '', '', '', '', '', '25.00', 0, '1', '0', '2020-02-06 20:36:00', ' '),
(135, 6, 0, 0, '', 'Gancho 6', '', '', '', '', '', '', '25', 0, '1', '0', '2020-02-06 20:36:00', ' '),
(136, 6, 0, 0, '', 'Gancho 7', '', '', '', '', '', '', '75.00', 0, '1', '0', '2020-02-06 20:37:00', ' '),
(137, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15', 0, '1', '0', '2020-02-06 20:40:00', ' '),
(138, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:41:00', ' '),
(139, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:41:00', ' '),
(140, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15', 0, '1', '0', '2020-02-06 20:41:00', ' '),
(141, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:42:00', ' '),
(142, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15', 0, '1', '0', '2020-02-06 20:42:00', ' '),
(143, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:43:00', ' '),
(144, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:43:00', ' '),
(145, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:44:00', ' '),
(146, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:44:00', ' '),
(147, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:45:00', ' '),
(148, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:45:00', ' '),
(149, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:46:00', ' '),
(150, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:46:00', ' '),
(151, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:46:00', ' '),
(152, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:47:00', ' '),
(153, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:47:00', ' '),
(154, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:47:00', ' '),
(155, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:48:00', ' '),
(156, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:48:00', ' '),
(157, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:48:00', ' '),
(158, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:49:00', ' '),
(159, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:49:00', ' '),
(160, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:49:00', ' '),
(161, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:50:00', ' '),
(162, 7, 0, 0, '', 'Brazalete', '', '', '', '', '', '', '15.00', 0, '1', '0', '2020-02-06 20:50:00', ' '),
(164, 2, 0, 0, '', 'Xbalanque', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:59:00', ''),
(165, 2, 0, 0, '', 'Leah', 'Leah', '', '', '', '', '', '40.00', 1, '1', '0', '2020-04-23 18:28:00', ''),
(166, 2, 0, 0, '', 'Xocolatl', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:59:00', ''),
(167, 2, 0, 0, '', 'Ixcanul', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:59:00', ''),
(168, 2, 0, 0, '', 'Hunahpu', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 20:00:00', ''),
(169, 2, 0, 0, '', 'Pájaro Serpiente', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:55:00', ''),
(170, 2, 0, 0, '', 'Fuego', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:56:00', ''),
(171, 2, 0, 0, '', 'Jimmy', 'Jimmy', '', '', '', '', '', '40.00', 1, '1', '0', '2020-04-23 18:28:00', ''),
(172, 2, 0, 0, '', 'Tikal', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:58:00', ''),
(173, 2, 0, 0, '', 'Hurakán', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:56:00', ''),
(174, 2, 0, 0, '', 'Biosfera Maya', '.', '', '', '', '', '', '40.00', 1, '1', '0', '2020-02-18 19:55:00', ''),
(1, 8, 0, 0, '', 'Acerca', 'About Us', '', '<p>Productos elaborados por manos artesanales de mujeres Mayas y personas con capacidades especiales en Guatemala. Cielo Maya contribuye con darles la oportunidad y esperanza de una mejor calidad de vida. Apoyamos a proyectos con impacto sostenible a largo plazo, generamos empleos para el crecimiento econ&oacute;mico local.&nbsp;</p>\r\n', '<p>Hand crafted made products by Mayan women and persons with special capabilities in Guatemala. Cielo Maya contributes by giving them the opportunity for a better life. We support long lasting impact projects, generating jobs for local economic growth.</p>\r\n', '', '', '0', 1, '1', '0', '2020-02-23 11:54:00', ''),
(176, 10, 0, 0, '', 'Set de Cojines', '.', '', '', '', '', '', '60.00', 1, '1', '0', '2020-12-15 02:18:00', ' '),
(177, 9999, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 1, '1', '0', '2020-12-15 02:20:00', ' '),
(178, 10, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 1, '1', '0', '2020-12-15 02:21:00', ' '),
(179, 10, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 1, '1', '0', '2020-12-15 02:22:00', ' '),
(180, 10, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 1, '1', '0', '2020-12-15 02:23:00', ' '),
(181, 0, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 99, '1', '0', '2020-12-15 02:24:00', ' '),
(182, 10, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 1, '1', '0', '2020-12-15 02:25:00', ' '),
(183, 10, 0, 0, '', 'Cojin Unidad', '', '', '', '', '', '', '20.00', 1, '1', '0', '2020-12-15 02:26:00', ' '),
(184, 0, 0, 0, '', 'Set de Cojines', '', '', '', '', '', '', '60.00', 99, '1', '0', '2020-12-15 02:26:00', ' '),
(186, 10, 0, 0, '', 'Cojin Unidad', '', '', '', '', '', '', '20.00', 1, '1', '0', '2020-12-15 02:30:00', ' '),
(187, 10, 0, 0, '', 'Cojin Unidad', '', '', '', '', '', '', '20.00', 1, '1', '0', '2020-12-15 02:31:00', ' '),
(191, 13, 0, 0, '', 'Mascarillas', 'Artesanales', '', '', '', '', '', '4.00', 1, '1', '0', '2021-04-06 07:40:00', ' '),
(188, 12, 0, 0, '', 'Café EXTASIS', '', '', '', '', '', '', '50.00', 1, '', '0', '0000-00-00 00:00:00', ''),
(189, 12, 0, 0, '', 'Café EXTASIS', '', '', '', '', '', '', '50.00', 1, '', '0', '0000-00-00 00:00:00', ''),
(190, 12, 0, 0, '', 'Café EXTASIS', '', '', '', '', '', '', '50.00', 1, '', '0', '0000-00-00 00:00:00', ''),
(192, 13, 0, 0, '', 'Mascarillas', 'Artesanales', '', '', '', '', '', '4.00', 1, '1', '0', '2021-04-06 07:43:00', ' '),
(193, 13, 0, 0, '', 'Mascarillas', 'Artesanales', '', '', '', '', '', '4.00', 1, '1', '0', '2021-04-06 07:49:00', ' '),
(194, 13, 0, 0, '', 'Mascarillas', 'Artesanales', '', '', '', '', '', '4.00', 1, '1', '0', '2021-04-06 07:51:00', ' '),
(195, 13, 0, 0, '', 'Mascarillas', 'Artesanales', '', '', '', '', '', '4.00', 1, '1', '0', '2021-04-06 07:52:00', ' '),
(196, 13, 0, 0, '', 'Mascarillas', 'Artesanales', '', '', '', '', '', '4.00', 1, '1', '0', '2021-04-06 07:52:00', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_users`
--

CREATE TABLE `cm_users` (
  `user_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Roll` varchar(30) NOT NULL,
  `depen` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `useing` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cm_users`
--

INSERT INTO `cm_users` (`user_id`, `nombre`, `apellido`, `username`, `email`, `password`, `fecc`, `Roll`, `depen`, `status`, `useing`) VALUES
(1, 'Administrador', 'De Contenidos', 'ormaprime@gmail.com', 'ormaprime@gmail.com', '@@.2021', '2021-04-06 13:25:16', 'admin', '', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_area`
--

CREATE TABLE `enla_area` (
  `id_area` int(10) NOT NULL,
  `n_area` mediumtext NOT NULL,
  `fec_area` date NOT NULL,
  `us_area` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_area`
--

INSERT INTO `enla_area` (`id_area`, `n_area`, `fec_area`, `us_area`) VALUES
(1, 'Educación ', '2019-06-12', '1'),
(2, 'Urbanización y servicios comunitarios', '2019-06-12', '1'),
(3, 'Salud', '2019-06-12', '1'),
(4, 'Asuntos Económicos', '2019-06-12', '1'),
(5, 'Protección social', '2019-06-12', '1'),
(6, 'Protección Ambiental', '2019-06-12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_asig`
--

CREATE TABLE `enla_asig` (
  `id_asig` int(60) NOT NULL,
  `ayusol_asig` varchar(10) NOT NULL,
  `conti_asig` varchar(10) NOT NULL,
  `asig_asig` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `st_asig` varchar(10) NOT NULL DEFAULT '1',
  `confi_asig` varchar(10) NOT NULL DEFAULT 'No',
  `us_asig` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_asig`
--

INSERT INTO `enla_asig` (`id_asig`, `ayusol_asig`, `conti_asig`, `asig_asig`, `st_asig`, `confi_asig`, `us_asig`) VALUES
(1, '1', '1', '2019-07-09 18:17:51', '0', 'No', 1),
(2, '1', '1', '2019-07-10 21:19:15', '1', 'Si', 1),
(3, '1', '2', '2019-09-03 19:11:05', '1', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_camp`
--

CREATE TABLE `enla_camp` (
  `id_camp` int(20) NOT NULL,
  `n_camp` mediumtext NOT NULL,
  `des_camp` longtext NOT NULL,
  `emp_camp` varchar(20) NOT NULL,
  `fec_camp` date NOT NULL,
  `fe_camp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `st_camp` varchar(10) NOT NULL DEFAULT '1',
  `us_camp` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_camp`
--

INSERT INTO `enla_camp` (`id_camp`, `n_camp`, `des_camp`, `emp_camp`, `fec_camp`, `fe_camp`, `st_camp`, `us_camp`) VALUES
(1, 'Primera CampaÃ±a de Prueba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim, leo a accumsan dignissim, mauris erat lobortis lorem, non congue nisi mi nec elit.', '', '2019-05-21', '2019-05-22 03:00:38', '1', '1'),
(2, 'Segunda CampaÃ±a de Pruebas', 'ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim, leo a accumsan dignis', '', '2019-05-21', '2019-05-22 02:53:35', '1', '1'),
(3, 'h,ass', 'jjjj', '', '2019-05-28', '2019-05-28 17:37:48', '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_cat`
--

CREATE TABLE `enla_cat` (
  `id_cat` int(10) NOT NULL,
  `cat_cat` varchar(10) NOT NULL,
  `n_cat` varchar(250) NOT NULL,
  `des_cat` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_cat`
--

INSERT INTO `enla_cat` (`id_cat`, `cat_cat`, `n_cat`, `des_cat`) VALUES
(1, '3', 'Galeria', ''),
(2, '2', 'Servicios', ''),
(3, '1', 'Textos', ''),
(4, '1', 'Nuestro Equipo', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_chat`
--

CREATE TABLE `enla_chat` (
  `chatid` int(11) NOT NULL,
  `ayu_id` varchar(60) NOT NULL,
  `sender_userid` varchar(60) NOT NULL,
  `reciever_userid` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '0',
  `tipo_chat` varchar(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_chat`
--

INSERT INTO `enla_chat` (`chatid`, `ayu_id`, `sender_userid`, `reciever_userid`, `message`, `timestamp`, `status`, `tipo_chat`) VALUES
(1, '4', '59', '84', 'Hola me gastaría contribuir con tu necesidad. Me podrías ampliar un poco tu solicitud, por favor.', '2021-12-01 16:06:55', 1, '0'),
(2, '4', '84', '59', 'Hola muchas gracias, ahora le publico un poco de información', '2021-12-01 16:07:32', 1, '0'),
(3, '4', '59', '84', 'excelente , estaré al tanto , gracias.', '2021-12-01 16:08:02', 1, '0'),
(4, '4', '84', '59', 'Hola , le envío imagenes del terreno en mención', '2021-12-01 16:15:03', 1, '1'),
(5, '4', '59', '84', 'Perfecto , enviaré a mis arquitectos para van el proyecto y podamos trabajar, muchas gracias.', '2021-12-01 16:15:50', 1, '0'),
(6, '4', '84', '59', 'ok gracias', '2021-12-01 16:16:20', 0, '0'),
(7, '13', '106', '107', 'hola', '2022-06-13 21:13:07', 1, '0'),
(8, '13', '107', '106', 'buena tarde\n', '2022-06-13 21:13:44', 1, '0'),
(9, '13', '106', '107', 'quiero ayudarte con tus necesidaes', '2022-06-14 03:47:44', 1, '0'),
(10, '13', '107', '106', 'gracias necesito fondos para capacitar al personal', '2022-06-14 03:50:02', 0, '0'),
(11, '15', '108', '109', 'Hola Helpless, podemos ayudarte con tu requerimiento...', '2022-07-07 19:42:43', 1, '0'),
(12, '15', '109', '108', 'Muchas Gracias,  cómo podemos proceder ?', '2022-07-07 19:44:26', 0, '0'),
(13, '16', '106', '107', 'Hola quisiera apoyarte con las camisolas, mi empresa produce todo tipo estampados, podemos contactarnos para ponernos deacuerdo', '2022-07-08 19:38:12', 1, '0'),
(14, '16', '107', '106', 'muchas gracias, es gusto saludarlo, etc etc etc', '2022-07-08 19:39:20', 1, '0'),
(15, '16', '107', '106', 'hola', '2022-07-08 19:39:31', 1, '1'),
(16, '16', '107', '106', 'fsfas df sda f', '2022-07-08 19:39:51', 1, '0'),
(17, '16', '106', '107', 'perfecto estamos en contacto', '2022-07-08 19:41:16', 0, '0'),
(18, '15', '112', '109', 'Hola, cómo podemos apoyar ?', '2022-07-19 17:10:45', 1, '0'),
(19, '15', '109', '108', 'Gracias, pero no había visto que me escribió.. tampoco tengo forma de poder ver su donación.', '2022-07-19 17:14:22', 0, '0'),
(20, '15', '112', '109', 'cómo puedo aportar mi donación? ', '2022-07-19 17:15:47', 1, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_chat2`
--

CREATE TABLE `enla_chat2` (
  `chatid` int(11) NOT NULL,
  `dona_id` varchar(60) NOT NULL,
  `sender_userid` varchar(60) NOT NULL,
  `reciever_userid` varchar(60) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_chat2`
--

INSERT INTO `enla_chat2` (`chatid`, `dona_id`, `sender_userid`, `reciever_userid`, `message`, `timestamp`, `status`) VALUES
(1, '6', '97', '64', 'Hola soy Amarilis Mejía de Fundación Paiz, entre nuestro programa de proyección social apoyamos a 2 comdedores para adultos mayores que brinda almurezo a 80 personas diarimente, el comedor Bethania en la zona 5 y el comedor de Casa Central en zona 1. Cree posible dar manualidades a estos adultos?', '2022-05-11 21:15:52', 0),
(2, '5', '97', '59', 'Buen día Oscar, soy Amarilis Mejía de Fundación Paiz. Entre nuestro programa de becas escolares tenemos a los jovenes del Instituto Santiago que cuentan con un taller de herrería, si considera posible apoyarnos con herramientas para sus clases le agradecemos mucho\n', '2022-05-11 21:19:09', 0),
(3, '11', '109', '108', 'deseo recibir la ayuda\n', '2022-07-07 19:48:39', 0),
(4, '1', '109', '1', 'texto de prueba', '2022-07-19 16:49:07', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_chat_login_details`
--

CREATE TABLE `enla_chat_login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_typing` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_dep`
--

CREATE TABLE `enla_dep` (
  `id_dep` int(4) NOT NULL,
  `n_dep` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_dep`
--

INSERT INTO `enla_dep` (`id_dep`, `n_dep`) VALUES
(1, 'GUATEMALA'),
(2, 'EL PROGRESO'),
(3, 'SACATEPEQUEZ'),
(4, 'CHIMALTENANGO'),
(5, 'ESCUINTLA'),
(6, 'SANTA ROSA'),
(7, 'SOLOLA'),
(8, 'TOTONICAPAN'),
(9, 'QUETZALTENANGO'),
(10, 'SUCHITEPEQUEZ'),
(11, 'RETALHULEU'),
(12, 'SAN MARCOS'),
(13, 'HUEHUETENANGO'),
(14, 'QUICHE'),
(15, 'BAJA VERAPAZ'),
(16, 'ALTA VERAPAZ'),
(17, 'PETEN'),
(18, 'IZABAL'),
(19, 'ZACAPA'),
(20, 'CHIQUIMULA'),
(21, 'JALAPA'),
(22, 'JUTIAPA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_dona`
--

CREATE TABLE `enla_dona` (
  `id_dona` int(60) NOT NULL,
  `tip_dona` varchar(10) NOT NULL,
  `org_dona` varchar(10) NOT NULL,
  `dona_dona` mediumtext NOT NULL,
  `desc_dona` mediumtext NOT NULL,
  `cost_dona` float(10,2) NOT NULL,
  `fe_dona` date NOT NULL,
  `st_dona` varchar(10) NOT NULL DEFAULT '1',
  `stella_dona` varchar(10) NOT NULL DEFAULT '0',
  `asig_dona` varchar(10) NOT NULL DEFAULT '0',
  `fedona_dona` date NOT NULL,
  `fec_dona` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usr_dona` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_dona`
--

INSERT INTO `enla_dona` (`id_dona`, `tip_dona`, `org_dona`, `dona_dona`, `desc_dona`, `cost_dona`, `fe_dona`, `st_dona`, `stella_dona`, `asig_dona`, `fedona_dona`, `fec_dona`, `usr_dona`) VALUES
(1, '1', '1', '25 mil quetzales', 'Efectivo  que se puede utilizar para la compra de viveres', 25000.00, '2020-04-03', '1', '0', '59', '2020-04-07', '2020-04-07 06:16:28', '66'),
(2, '1', '71', 'Prueba', 'Prueba', 1.00, '2021-04-29', '1', '0', '0', '0000-00-00', '2021-04-30 02:38:46', '91'),
(6, '2', '64', 'Enseñanza de manualidades', 'Puedo donar 50 horas en clases de manualidades', 300.00, '2021-08-17', '1', '0', '0', '0000-00-00', '2021-08-18 01:47:49', '84'),
(5, '3', '59', 'Herramientas', 'Tengo a disponibilidad herramientas para la construcción', 5000.00, '2021-08-17', '1', '0', '0', '0000-00-00', '2021-08-18 01:39:35', '79'),
(7, '3', '91', 'Desarrollo de visualizaciones/dashboards estadísticos en Tableau Public para ONGs Nacionales e Internacionales.', 'Apoyar en la presentación de resultados, utilizando información histórica para tener un panorama claro de labores y con ello identificar focos de oportunidad, eficiencia y eficacia.', 6.00, '2021-09-01', '1', '0', '0', '0000-00-00', '2021-09-01 22:56:15', '111'),
(8, '3', '91', 'Desarrollo de visualizaciones/dashboards estadísticos en Tablea Public para ONGs/Cooperantes Nacionales e Internacionales.', 'Apoyo en la presentación de resultados con información histórica (comprensión de la dinámica de gestión) para identificar tendencias, focos de oportunidad y factores de eficiencia y eficacia. ', 6.00, '2021-09-01', '1', '0', '0', '0000-00-00', '2021-09-01 23:04:21', '111'),
(9, '1', '59', 'capital', 'capital', 2000.00, '2021-09-03', '1', '0', '0', '0000-00-00', '2021-09-03 16:21:48', '79'),
(10, '3', '107', 'Uniformes para niñas', '20 uniformes para niñas de prekinder color griz', 150.00, '2022-06-13', '1', '0', '0', '0000-00-00', '2022-06-14 03:59:12', '127'),
(11, '2', '108', '3 albañiles y equipo industrial de construcción para realizar mezcla de concreto y otros productos adicionales', 'El personal y el equipo son prestados para un total de 3 días, tiempo en el cual se puede terminar el proyecto.', 25000.00, '2022-07-17', '1', '0', '0', '0000-00-00', '2022-07-13 18:16:08', '128'),
(12, '2', '112', 'Mano de Obra', '3 personas que ayudan en temas de construcción', 6000.00, '2022-08-20', '0', '0', '0', '0000-00-00', '2022-07-19 17:01:16', '132');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_fotos`
--

CREATE TABLE `enla_fotos` (
  `id_foto` int(20) NOT NULL,
  `n_foto` varchar(250) NOT NULL,
  `foto_foto` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_fotos`
--

INSERT INTO `enla_fotos` (`id_foto`, `n_foto`, `foto_foto`) VALUES
(1, '37', 'IMG-20200621-WA0000.jpg'),
(2, '37', 'IMG-20200621-WA0001.jpg'),
(3, '37', 'IMG-20200621-WA0002.jpg'),
(4, '37', 'IMG-20200621-WA0003.jpg'),
(5, '37', 'IMG-20200621-WA0004.jpg'),
(6, '37', 'IMG-20200621-WA0005.jpg'),
(7, '38', 'IMG-20200702-WA0014.jpg'),
(8, '38', 'IMG-20200702-WA0015.jpg'),
(9, '38', 'IMG-20200702-WA0016.jpg'),
(10, '41', 'IMG-20200702-WA0025.jpg'),
(11, '41', 'IMG-20200702-WA0026.jpg'),
(12, '41', 'IMG-20200702-WA0027.jpg'),
(13, '43', 'perritos.jpg'),
(14, '46', 'WhatsApp Video 2021-11-17 at 9.47.31 AM.mp4'),
(15, '47', 'WhatsApp Video 2021-11-17 at 9.47.31 AM.mp4'),
(16, '49', 'Dragon-Ball-Z.png'),
(17, '49', 'Dbzkaiminipostertr.jpg'),
(18, '49', '445665.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg'),
(19, '50', 'Dragon-Ball-Z.png'),
(20, '50', 'Dbzkaiminipostertr.jpg'),
(21, '50', '445665.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg'),
(22, '51', 'Dragon-Ball-Z.png'),
(23, '51', 'Dbzkaiminipostertr.jpg'),
(24, '51', '445665.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg'),
(25, '52', 'Dragon-Ball-Z.png'),
(26, '52', 'Dbzkaiminipostertr.jpg'),
(27, '52', '445665.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg'),
(28, '53', 'Dragon-Ball-Z.png'),
(29, '53', 'Dbzkaiminipostertr.jpg'),
(30, '53', '445665.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg'),
(31, '61', 'Dbzkaiminipostertr.jpg'),
(32, '4', '8093666713_9fa62a049e_b.jpg'),
(33, '4', 'los-colores-de-las-compras-oculares-en-la-tierra-agrícola-iowa-hermosos-y-tonos-tierras-cultivo-otoño-son-algo-ver-es-vez-199155785.jpg'),
(34, '4', 'Comprar-terreno-2.jpg'),
(35, '15', 'cropped (16).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_fufi`
--

CREATE TABLE `enla_fufi` (
  `id_fufi` int(10) NOT NULL,
  `n_fufi` mediumtext NOT NULL,
  `fec_fufi` date NOT NULL,
  `us_fufi` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_fufi`
--

INSERT INTO `enla_fufi` (`id_fufi`, `n_fufi`, `fec_fufi`, `us_fufi`) VALUES
(1, 'Fondos propios', '2019-06-06', '2'),
(2, 'Financiamiento bancario nacional', '2019-06-06', '2'),
(3, 'Financiamiento bancario internacional', '2019-06-06', '2'),
(4, 'Donaciones privadas', '2019-06-06', '2'),
(5, 'Cooperación internacional', '2019-06-06', '2'),
(6, 'Subsidio gubernamental', '2019-06-06', '2'),
(7, 'Comercio', '2019-06-06', '2'),
(8, 'Fondos públicos', '2019-06-06', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_insti`
--

CREATE TABLE `enla_insti` (
  `id_insti` int(10) NOT NULL,
  `n_insti` mediumtext NOT NULL,
  `fec_insti` date NOT NULL,
  `us_insti` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_insti`
--

INSERT INTO `enla_insti` (`id_insti`, `n_insti`, `fec_insti`, `us_insti`) VALUES
(1, 'Consejos de Desarrollo', '2019-06-12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_mat`
--

CREATE TABLE `enla_mat` (
  `id_mat` int(60) NOT NULL,
  `n_mat` mediumtext NOT NULL,
  `des_mat` longtext NOT NULL,
  `camp_mat` varchar(20) NOT NULL,
  `fec_mat` date NOT NULL,
  `fe_mat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `us_mat` varchar(10) NOT NULL,
  `st_mat` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_mat`
--

INSERT INTO `enla_mat` (`id_mat`, `n_mat`, `des_mat`, `camp_mat`, `fec_mat`, `fe_mat`, `us_mat`, `st_mat`) VALUES
(1, 'Nueva Matriz en EspaÃ±ol', 'AsÃ­ se van a ingresar todas las matrices ', '1', '2019-05-23', '2019-05-24 01:50:54', '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_mun`
--

CREATE TABLE `enla_mun` (
  `id_mun` int(4) NOT NULL,
  `dep_mun` int(4) NOT NULL,
  `n_mun` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_mun`
--

INSERT INTO `enla_mun` (`id_mun`, `dep_mun`, `n_mun`) VALUES
(1, 1, 'Guatemala'),
(2, 1, 'Santa Catarina Pinula'),
(3, 1, 'San José Pinula'),
(4, 1, 'San José el Golfo'),
(5, 1, 'Palencia'),
(6, 1, 'Chinautla'),
(7, 1, 'San Pedro Ayampuc'),
(8, 1, 'Mixco'),
(9, 1, 'San Pedro Sacatepéquez'),
(10, 1, 'San Juan Sacatepéquez'),
(11, 1, 'San Raimundo'),
(12, 1, 'Chuarrancho'),
(13, 1, 'Fraijanes'),
(14, 1, 'Amatitlán'),
(15, 1, 'Villa Nueva'),
(16, 1, 'Villa Canales'),
(17, 1, 'Petapa'),
(18, 2, 'Guastatoya'),
(19, 2, 'Morazán'),
(20, 2, 'San Agustín Acasaguastlán'),
(21, 2, 'San Cristóbal Acasaguastlán'),
(22, 2, 'El Jícaro'),
(23, 2, 'Sansare'),
(24, 2, 'Sanarate'),
(25, 2, 'San Antonio La Paz'),
(26, 3, 'Antigua Guatemala'),
(27, 3, 'Jocotenango'),
(28, 3, 'Pastores'),
(29, 3, 'Sumpango'),
(30, 3, 'Santo Domingo Xenacoj'),
(31, 3, 'Santiago Sacatepéquez'),
(32, 3, 'San Bartolomé Milpas Altas'),
(33, 3, 'San Lucas Sacatepéquez'),
(34, 3, 'Santa Lucía Milpas Altas'),
(35, 3, 'Magdalena Milpas Altas'),
(36, 3, 'Santa María de Jesús'),
(37, 3, 'Ciudad Vieja'),
(38, 3, 'San Miguel Dueñas'),
(39, 3, 'Alotenango'),
(40, 3, 'San Antonio Aguas Calientes'),
(41, 3, 'Santa Catarina Barahona'),
(42, 4, 'Chimaltenango'),
(43, 4, 'San José Poaquil'),
(44, 4, 'San Martín Jilotepeque'),
(45, 4, 'Comalapa'),
(46, 4, 'Santa Apolonia'),
(47, 4, 'Tecpán Guatemala'),
(48, 4, 'Patzún'),
(49, 4, 'Pochuta'),
(50, 4, 'Patzicía'),
(51, 4, 'Santa Cruz Balanyá'),
(52, 4, 'Acatenango'),
(53, 4, 'Yepocapa'),
(54, 4, 'San Andrés Itzapa'),
(55, 4, 'Parramos'),
(56, 4, 'Zaragoza'),
(57, 4, 'El Tejar'),
(58, 5, 'Escuintla'),
(59, 5, 'Santa Lucía Cotzumalguapa'),
(60, 5, 'La Democracia'),
(61, 5, 'Siquinalá'),
(62, 5, 'Masagua'),
(63, 5, 'Tiquisate'),
(64, 5, 'La Gomera'),
(65, 5, 'Guanagazapa'),
(66, 5, 'San José'),
(67, 5, 'Iztapa'),
(68, 5, 'Palín'),
(69, 5, 'San Vicente Pacaya'),
(70, 5, 'Nueva Concepción'),
(71, 6, 'Cuilapa'),
(72, 6, 'Barberena'),
(73, 6, 'Santa Rosa de Lima'),
(74, 6, 'Casillas'),
(75, 6, 'San Rafael las Flores'),
(76, 6, 'Oratorio'),
(77, 6, 'San Juan Tecuaco'),
(78, 6, 'Chiquimulilla'),
(79, 6, 'Taxisco'),
(80, 6, 'Santa María Ixhuatán'),
(81, 6, 'Guazacapán'),
(82, 6, 'Santa Cruz Naranjo'),
(83, 6, 'Pueblo Nuevo Viñas'),
(84, 6, 'Nueva Santa Rosa'),
(85, 7, 'Sololá'),
(86, 7, 'San José Chacayá'),
(87, 7, 'Santa María Visitación'),
(88, 7, 'Santa Lucía Utatlán'),
(89, 7, 'Nahualá'),
(90, 7, 'Santa Catarina Ixtahuacán'),
(91, 7, 'Santa Clara La Laguna'),
(92, 7, 'Concepción'),
(93, 7, 'San Andrés Semetabaj'),
(94, 7, 'Panajachel'),
(95, 7, 'Santa Catarina Palopó'),
(96, 7, 'San Antonio Palopó'),
(97, 7, 'San Lucas Toliman'),
(98, 7, 'Santa Cruz La Laguna'),
(99, 7, 'San Pablo La Laguna'),
(100, 7, 'San Marcos La Laguna'),
(101, 7, 'San Juan La Laguna'),
(102, 7, 'San Pedro La Laguna'),
(103, 7, 'Santiago Atitlán'),
(104, 8, 'Totonicapán'),
(105, 8, 'San Cristobal Totonicapán'),
(106, 8, 'San Francisco El Alto'),
(107, 8, 'San Andrés Xecul'),
(108, 8, 'Momostenango'),
(109, 8, 'Santa María Chiquimula'),
(110, 8, 'Santa Lucía La Reforma'),
(111, 8, 'San Bartolo'),
(112, 9, 'Quetzaltenango'),
(113, 9, 'Salcajá'),
(114, 9, 'Olintepeque'),
(115, 9, 'San Carlos Sija'),
(116, 9, 'Sibilia'),
(117, 9, 'Cabricán'),
(118, 9, 'Cajolá'),
(119, 9, 'San Miguel Siguilá'),
(120, 9, 'Ostuncalco'),
(121, 9, 'San Mateo'),
(122, 9, 'Concepción Chiquirichapa'),
(123, 9, 'San Martín Sacatepéquez'),
(124, 9, 'Almolonga'),
(125, 9, 'Cantel'),
(126, 9, 'Huitán'),
(127, 9, 'Zunil'),
(128, 9, 'Colomba'),
(129, 9, 'San Francisco La Unión'),
(130, 9, 'El Palmar'),
(131, 9, 'Coatepeque'),
(132, 9, 'Génova'),
(133, 9, 'Flores Costa Cuca'),
(134, 9, 'La Esperanza'),
(135, 9, 'Palestina de los Altos'),
(136, 10, 'Mazatenango'),
(137, 10, 'Cuyotenango'),
(138, 10, 'San Francisco Zapotitlán'),
(139, 10, 'San Bernardino'),
(140, 10, 'San José El Idolo'),
(141, 10, 'Santo Domingo Suchitepéquez'),
(142, 10, 'San Lorenzo'),
(143, 10, 'Samayac'),
(144, 10, 'San Pablo Jocopilas'),
(145, 10, 'San Antonio Suchitepéquez'),
(146, 10, 'San Miguel Panán'),
(147, 10, 'San Gabriel'),
(148, 10, 'Chicacao'),
(149, 10, 'Patulul'),
(150, 10, 'Santa Bárbara'),
(151, 10, 'San Juan Bautista'),
(152, 10, 'Santo Tomás La Unión'),
(153, 10, 'Zunilito'),
(154, 10, 'Pueblo Nuevo'),
(155, 10, 'Rio Bravo'),
(156, 11, 'Retalhuleu'),
(157, 11, 'San Sebastián'),
(158, 11, 'Santa Cruz Muluá'),
(159, 11, 'San Martín Zapotitlán'),
(160, 11, 'San Felipe'),
(161, 11, 'San Andrés Villa Seca'),
(162, 11, 'Champerico'),
(163, 11, 'Nuevo San Carlos'),
(164, 11, 'El Asintal'),
(165, 12, 'San Marcos'),
(166, 12, 'San Pedro Sacatepéquez'),
(167, 12, 'San Antonio Sacatepéquez'),
(168, 12, 'Comitancillo'),
(169, 12, 'San Miguel Ixtahuacán'),
(170, 12, 'Concepción Tutuapa'),
(171, 12, 'Tacaná'),
(172, 12, 'Sibinal'),
(173, 12, 'Tajumulco'),
(174, 12, 'Tejutla'),
(175, 12, 'San Rafael Pié de La Cuesta'),
(176, 12, 'Nuevo Progreso'),
(177, 12, 'El Tumbador'),
(178, 12, 'El Rodeo'),
(179, 12, 'Malacatán'),
(180, 12, 'Catarina'),
(181, 12, 'Ayutla'),
(182, 12, 'Ocós'),
(183, 12, 'San Pablo'),
(184, 12, 'El Quetzal'),
(185, 12, 'La Reforma'),
(186, 12, 'Pajapita'),
(187, 12, 'Ixchiguán'),
(188, 12, 'San José Ojetenam'),
(189, 12, 'San Cristóbal Cucho'),
(190, 12, 'Sipacapa'),
(191, 12, 'Esquipulas Palo Gordo'),
(192, 12, 'Rio Blanco'),
(193, 12, 'San Lorenzo'),
(194, 13, 'Huehuetenango'),
(195, 13, 'Chiantla'),
(196, 13, 'Malacatancito'),
(197, 13, 'Cuilco'),
(198, 13, 'Nentón'),
(199, 13, 'San Pedro Necta'),
(200, 13, 'Jacaltenango'),
(201, 13, 'Soloma'),
(202, 13, 'Ixtahuacán'),
(203, 13, 'Santa Bárbara'),
(204, 13, 'La Libertad'),
(205, 13, 'La Democracia'),
(206, 13, 'San Miguel Acatán'),
(207, 13, 'San Rafael La Independencia'),
(208, 13, 'Todos Santos Cuchumatán'),
(209, 13, 'San Juan Atitán'),
(210, 13, 'Santa Eulalia'),
(211, 13, 'San Mateo Ixtatán'),
(212, 13, 'Colotenango'),
(213, 13, 'San Sebastián Huehuetenango'),
(214, 13, 'Tectitán'),
(215, 13, 'Concepción Huista'),
(216, 13, 'San Juan Ixcoy'),
(217, 13, 'San Antonio Huista'),
(218, 13, 'San Sebastián Coatán'),
(219, 13, 'Barillas'),
(220, 13, 'Aguacatán'),
(221, 13, 'San Rafael Petzal'),
(222, 13, 'San Gaspar Ixchil'),
(223, 13, 'Santiago Chimaltenango'),
(224, 13, 'Santa Ana Huista'),
(225, 13, 'Unión Cantinil'),
(226, 14, 'Santa Cruz del Quiché'),
(227, 14, 'Chiché'),
(228, 14, 'Chinique'),
(229, 14, 'Zacualpa'),
(230, 14, 'Chajul'),
(231, 14, 'Chichicastenango'),
(232, 14, 'Patzité'),
(233, 14, 'San Antonio Ilotenango'),
(234, 14, 'San Pedro Jocopilas'),
(235, 14, 'Cunén'),
(236, 14, 'San Juan Cotzal'),
(237, 14, 'Joyabaj'),
(238, 14, 'Nebaj'),
(239, 14, 'San Andrés Sajcabajá'),
(240, 14, 'Uspantán'),
(241, 14, 'Sacapulas'),
(242, 14, 'San Bartolomé Jocotenango'),
(243, 14, 'Canillá'),
(244, 14, 'Chicamán'),
(245, 14, 'Ixcán'),
(246, 14, 'Pachalum'),
(247, 15, 'Salamá'),
(248, 15, 'San Miguel Chicaj'),
(249, 15, 'Rabinal'),
(250, 15, 'Cubulco'),
(251, 15, 'Granados'),
(252, 15, 'El Chol'),
(253, 15, 'San Jerónimo'),
(254, 15, 'Purulhá'),
(255, 16, 'Cobán'),
(256, 16, 'Santa Cruz Verapaz'),
(257, 16, 'San Cristóbal Verapaz'),
(258, 16, 'Tactic'),
(259, 16, 'Tamahú'),
(260, 16, 'Tucurú'),
(261, 16, 'Panzós'),
(262, 16, 'Senahú'),
(263, 16, 'San Pedro Carchá'),
(264, 16, 'San Juan Chamelco'),
(265, 16, 'Lanquín'),
(266, 16, 'Cahabón'),
(267, 16, 'Chisec'),
(268, 16, 'Chahal'),
(269, 16, 'Fray Bartolomé de Las Casas'),
(270, 16, 'Santa Catalina la Tinta'),
(271, 16, 'Raxruhá'),
(272, 17, 'Flores'),
(273, 17, 'San José'),
(274, 17, 'San Benito'),
(275, 17, 'San Andrés'),
(276, 17, 'La Libertad'),
(277, 17, 'San Francisco'),
(278, 17, 'Santa Ana'),
(279, 17, 'Dolores'),
(280, 17, 'San Luis'),
(281, 17, 'Sayaxché'),
(282, 17, 'Melchor de Mencos'),
(283, 17, 'Poptún'),
(284, 17, 'Las cruces'),
(285, 18, 'Puerto Barrios'),
(286, 18, 'Livingston'),
(287, 18, 'El Estor'),
(288, 18, 'Morales'),
(289, 18, 'Los Amates'),
(290, 19, 'Zacapa'),
(291, 19, 'Estanzuela'),
(292, 19, 'Río Hondo'),
(293, 19, 'Gualán'),
(294, 19, 'Teculután'),
(295, 19, 'Usumatlán'),
(296, 19, 'Cabañas'),
(297, 19, 'San Diego'),
(298, 19, 'La Unión'),
(299, 19, 'Huité'),
(300, 20, 'Chiquimula'),
(301, 20, 'San José La Arada'),
(302, 20, 'San Juan Erminta'),
(303, 20, 'Jocotán'),
(304, 20, 'Camotán'),
(305, 20, 'Olopa'),
(306, 20, 'Esquipulas'),
(307, 20, 'Concepción Las Minas'),
(308, 20, 'Quetzaltepeque'),
(309, 20, 'San Jacinto'),
(310, 20, 'Ipala'),
(311, 21, 'Jalapa'),
(312, 21, 'San Pedro Pinula'),
(313, 21, 'San Luis Jilotepeque'),
(314, 21, 'San Manuel Chaparrón'),
(315, 21, 'San Carlos Alzatate'),
(316, 21, 'Monjas'),
(317, 21, 'Mataquescuintla'),
(318, 22, 'Jutiapa'),
(319, 22, 'El Progreso'),
(320, 22, 'Santa Catarina Mita'),
(321, 22, 'Agua Blanca'),
(322, 22, 'Asunción Mita'),
(323, 22, 'Yupiltepeque'),
(324, 22, 'Atescatempa'),
(325, 22, 'Jerez'),
(326, 22, 'El Adelanto'),
(327, 22, 'Zapotitlán'),
(328, 22, 'Comapa'),
(329, 22, 'Jalpatagua'),
(330, 22, 'Conguaco'),
(331, 22, 'Moyuta'),
(332, 22, 'Pasaco'),
(333, 22, 'San José Acatempa'),
(334, 22, 'Quezada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_notas`
--

CREATE TABLE `enla_notas` (
  `id_nota` int(10) NOT NULL,
  `cat_nota` int(10) NOT NULL,
  `dep_nota` int(10) NOT NULL,
  `mun_nota` int(10) NOT NULL,
  `ald_nota` varchar(150) NOT NULL,
  `ti_nota` varchar(250) NOT NULL,
  `ti_nota2` varchar(250) NOT NULL,
  `pie_nota` varchar(250) NOT NULL,
  `nota_nota` longtext NOT NULL,
  `nota_nota2` longtext NOT NULL,
  `vid_nota` varchar(50) NOT NULL,
  `aud_nota` varchar(50) NOT NULL,
  `act_nota` int(4) NOT NULL,
  `port_nota` varchar(10) NOT NULL,
  `cont_nota` varchar(11) NOT NULL DEFAULT '0',
  `ing_nota` datetime NOT NULL,
  `usr_nota` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_notas`
--

INSERT INTO `enla_notas` (`id_nota`, `cat_nota`, `dep_nota`, `mun_nota`, `ald_nota`, `ti_nota`, `ti_nota2`, `pie_nota`, `nota_nota`, `nota_nota2`, `vid_nota`, `aud_nota`, `act_nota`, `port_nota`, `cont_nota`, `ing_nota`, `usr_nota`) VALUES
(1, 3, 0, 0, '', 'Por que escogernos', '', '', '<p>Magna in pulvinar tempor montes pulvinar habitasse parturient? Elementum facilisis sit et, dolor placerat, turpis auctor. Lundium ultricies augue urna arcu aliquet velit?</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:08:00', ''),
(2, 3, 0, 0, '', 'Texto en portada 1', '', '', '<p>On sait depuis longake apple pie. Gingerbread cotton candy icing ice cream applicake wafetemps nnaire de plus de 200 mots pluskan rlatin</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:09:00', ''),
(3, 3, 0, 0, '', 'texto en portada 2', '', '', '<p>Iil utilise un dictionnaire de plus de 200 mots kan rlarem as Ipsumtiotins, en combiake apple pie. Gingerbread icing ice cream applicake wafenaison</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:10:00', ' '),
(4, 3, 0, 0, '', 'Texto en portada 3', '', '', '<p>Iil utingerb read icing ice cream applicake wafenaison lise un dictionnaire de plus de 200 mots kan rlarem as Ipsumtiotins, en combiake apple pie. Gingerbread icing ice cream applicake wafenaison</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:10:00', ' '),
(5, 3, 0, 0, '', 'Imágenes en portada reel principal', '', '', '', '', '', '', 1, '1', '0', '2019-01-29 14:16:00', ' '),
(6, 2, 0, 0, '', 'Servicio 1', '', '', '<p>texto del servicio</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:26:00', ' '),
(7, 2, 0, 0, '', 'Servicio 2', '', '', '<p>Texto del Servicio</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:26:00', ' '),
(8, 3, 0, 0, '', 'Texto de portada con imágen', '', '', '<p>texto de portada</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:26:00', ' '),
(9, 3, 0, 0, '', 'Informacion institucional', '', '', '<h3>Direcci&oacute;n</h3>\r\n\r\n<p>81 Sunnyvale Street<br />\r\nLos Angeles, CA 90185<br />\r\nUnited States<br />\r\n<br />\r\n+01 880 555 999<br />\r\n<a href=\"mailto:info@enlazando.gt\">info@enlazando.gt</a><br />\r\n<a href=\"#\">www.enlazando.gt</a></p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:38:00', ''),
(10, 3, 0, 0, '', 'Nostros', '', '', '<h3><strong>Quienes Somos</strong></h3>\r\n\r\n<p>Ucorpora ut molestie turpis, elementum tempor metus. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida, id vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem, egestas dictum augue aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>\r\n\r\n<p>Elementum tempor metus donec ut molestie turpis. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida, id vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem.</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 14:56:00', ''),
(11, 4, 0, 0, '', 'Mickey Mouse', 'Gerente', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet eleifend feugiat. Morbi sed sem sed libero ullamcorper molestie nec ac nulla. Suspendisse malesuada nisl id magna dapibus, et venenatis erat cursus. Curabitur tincidunt sollicitudin orci id pretium. Sed nec lacinia sapien. Mauris sodales ligula vel dui euismod blandit. Nulla facilisi. Sed quam sem, facilisis at condimentum at, viverra nec ante. Pellentesque ha</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 15:02:00', ''),
(12, 4, 0, 0, '', 'Otro integrante', 'El Mensajero', '', '<p>umsan lorem ex, in sodales purus efficitur sed. Curabitur lobortis neque vitae purus malesuada, vitae imperdiet tortor tincidunt. Duis eleifend vestibulum sollicitudin. Aenean bibendum eu lacus at interdum. Curabitur lacinia felis vitae metus laoreet, non molestie enim vestibulum. Proin mattis vitae dolor sit amet bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eleifend felis in ex ultrices egestas. Etiam tincidunt lacinia quam blandit tincidunt.</p>\r\n', '', '', '', 1, '1', '0', '2019-01-29 15:22:00', ''),
(13, 3, 0, 0, '', 'Somos su mejor opciÃ³n', '', '', '<p>Phasellus molestie arcu eros, non faucibus lacus ornare vitae. Suspendisse potenti. Cras at laoreet felis. Ut sapien tortor, vulputate non blandit ac, ultricies ultricies felis. Proin mauris nulla, mollis sed lectus ac, vehicula faucibus nulla. Vivamus varius dignissim sodales. Integer sit amet arcu interdum, tristique arcu sed, consequat risus. Aenean nec magna non felis ornare gravida ac non ligula. Suspendisse ex leo, congue vitae massa sed, ultrices sodales tellus. Ut vitae tellus iaculis, posuere mauris eget, sollicitudin est. Donec tristique neque in augue laoreet, sed hendrerit odio mollis. Vestibulum eu euismod urna, vel imperdiet metus.</p>\r\n\r\n<p>Nullam ut nisi bibendum, volutpat tellus quis, aliquam dui. Vestibulum blandit malesuada ullamcorper. Nullam a nunc felis. Maecenas ultricies elit vel consectetur sagittis. Aenean ut efficitur nisi. Nunc nibh metus, congue vitae nibh id, mattis faucibus mi. Quisque blandit tortor non sapien viverra pellentesque. Fusce gravida mi quis dignissim maximus. Cras ultricies fringilla dolor vitae tristique. Morbi porta lacus a risus tincidunt elementum. Curabitur nec nisl sit amet urna consequat interdum sed tempus augue. Aenean dictum tincidunt vehicula. Sed sit amet pulvinar urna, ut ullamcorper justo.</p>\r\n', '', '', '', 1, '1', '0', '2019-06-06 16:19:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_oborg`
--

CREATE TABLE `enla_oborg` (
  `id_oborg` int(10) NOT NULL,
  `n_oborg` mediumtext NOT NULL,
  `fec_oborg` date NOT NULL,
  `us_oborg` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_oborg`
--

INSERT INTO `enla_oborg` (`id_oborg`, `n_oborg`, `fec_oborg`, `us_oborg`) VALUES
(1, 'Beneficencia y proyección social', '2019-06-06', '2'),
(2, 'Académicos', '2019-06-06', '2'),
(3, 'Apoyo a grupos en situación de vulnerabilidad', '2019-06-06', '2'),
(4, 'Incidencia polí­tica y ciudadana', '2019-06-06', '2'),
(5, 'Difusión del arte y la cultura', '2019-06-06', '2'),
(6, 'Comerciales', '2019-06-06', '2'),
(7, 'Integrar económicamente a Centroamérica', '2019-06-09', '2'),
(8, 'Atención y asistencia', '2019-06-09', '2'),
(9, 'Viabilizar proyectos desde la perspectiva social, política, pre-dial y de servidumbres', '2019-06-09', '2'),
(10, 'Cuidado ambiental, educación, política pública ', '2019-06-09', '2'),
(11, 'Academia , social , incidencia política e investigación', '2019-06-09', '2'),
(12, 'Gestionar Becas', '2019-06-09', '2'),
(13, 'Apoyar el desarrollo de competencias', '2019-06-09', '2'),
(14, 'Ninguno', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_org`
--

CREATE TABLE `enla_org` (
  `id_org` int(20) NOT NULL,
  `n_org` mediumtext NOT NULL,
  `logo_org` varchar(200) NOT NULL,
  `pais_org` varchar(10) NOT NULL,
  `dep_org` mediumtext NOT NULL,
  `mun_org` mediumtext NOT NULL,
  `tip_org` varchar(4) NOT NULL,
  `aded_org` mediumtext NOT NULL,
  `obge_org` varchar(4) NOT NULL DEFAULT '14',
  `act_org` mediumtext NOT NULL,
  `bene_org` mediumint(9) NOT NULL,
  `cuabe_org` varchar(40) NOT NULL,
  `descu_org` date NOT NULL,
  `inter_org` varchar(4) NOT NULL,
  `cuape_org` varchar(10) NOT NULL,
  `sede_org` varchar(10) NOT NULL,
  `fuein_org` varchar(10) NOT NULL,
  `deacu_org` varchar(10) NOT NULL,
  `don_org` varchar(10) NOT NULL,
  `con_org` mediumtext NOT NULL,
  `tel_org` varchar(150) NOT NULL,
  `ema_org` varchar(150) NOT NULL,
  `que_org` varchar(30) NOT NULL,
  `eje_org` varchar(30) NOT NULL,
  `apo_org` longtext NOT NULL,
  `dir_org` mediumtext NOT NULL,
  `fec_org` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_org`
--

INSERT INTO `enla_org` (`id_org`, `n_org`, `logo_org`, `pais_org`, `dep_org`, `mun_org`, `tip_org`, `aded_org`, `obge_org`, `act_org`, `bene_org`, `cuabe_org`, `descu_org`, `inter_org`, `cuape_org`, `sede_org`, `fuein_org`, `deacu_org`, `don_org`, `con_org`, `tel_org`, `ema_org`, `que_org`, `eje_org`, `apo_org`, `dir_org`, `fec_org`) VALUES
(1, 'Hogar de Niños Fátima', '', 'GT', 'Ciudad de Guatemala', 'Guatemala', '7', 'Brindar atenciÃ³n y protecciÃ³n a niÃ±os y niÃ±as de 0 a 7 aÃ±os en situaciÃ³n de riesgo.', '3', 'Hogar de NiÃ±os FÃ¡tima cuenta con capacidad de atenciÃ³n para 43 niÃ±os del Ã¡rea metropolitana pero tambiÃ©n se estÃ¡ habilitando un anexo del Hogar en SololÃ¡ para la atenciÃ³n de mujeres vÃ­ctimas de violencia, niÃ±as y niÃ±os en situaciÃ³n de riesgo.  ', 0, '0', '0000-00-00', 'No', '15', 'Si', '4', 'Si', 'Si', '', '2331-6382', 'responsabilidadsocial@fatima.org.gt', '', '', '', '', '2020-03-15 15:04:31'),
(2, 'INDESGUA', '', 'GT', 'Guatemala', 'Guatemala', '9', 'Asesorar en la gestiÃ³n de becas en Guatemala y el extranjero', '2', 'Informar y asesorar  la gestiÃ³n de becas en Guatemala y el extranjero', 0, '0', '0000-00-00', 'Si', '1-5', 'Si', '4', 'Si', 'Si', '', '', 'Indesgua.lea@gmail.com', '', '', '', '', '2019-06-09 23:53:04'),
(3, 'INCEDES', '', 'GT', 'Guatemala', 'Guatemala', '9', 'InvestigaciÃ³n y gestiÃ³n de polÃ­ticas pÃºblicas en favor de la poblaciÃ³n migrante y sus familiares', '2', 'InvestigaciÃ³n sobre migraciÃ³n laboral', 0, '0', '0000-00-00', 'Si', '6-10', 'Si', '5', 'Si', 'Si', '', '', 'Incedes.edu@gmail.com', '', '', '', '', '2019-06-09 23:53:04'),
(4, 'Modelo de Naciones Unidas de Guatemala MONUGUA ', '20190709020641-MONUGUA.jpg', 'GT', 'Guatemala y Jalapa ', 'Ciudad de Guatemala / Monjas Jalapa', '5', 'Se dedica a recrear las prÃ¡cticas del Sistema de las Naciones Unidas a nivel diversificado y universitario. Los estudiantes participantes de Monugua simulan ser DiplomÃ¡ticos de un paÃ­s miembro de la ONU, estudian su polÃ­tica exterior, preparan resoluciones y las presentan en un comitÃ© dirigido por otros estudiantes. En conjunto dialogan, debaten y llegan a acuerdos en comÃºn. ', '2', 'Organizar el Primer Modelo de Naciones Unidas de Guatemala en Jalapa.', 0, '0', '0000-00-00', 'No', '1-5', 'No', '3', 'Si', 'No', '', '', '', '', '', '', '', '2019-07-09 20:06:41'),
(5, 'Instituto Neurológico de Guatemala', '', 'GT', 'Guatemala', 'Guatemala', '13', 'EducaciÃ³n especial y terapias de apoyo para personas con discapacidad intelectual, fomentando la inclusiÃ³n', '8', 'PromociÃ³n de los derechos, derecho a la inclusiÃ³n social, de las personas con discapacidad intelectual', 0, '0', '0000-00-00', 'Si', '15', 'Si', '1', 'Si', 'Si', '', '24711613', 'recepcion@institutoneurologicodeguatemala.org', '', '', '', '', '2020-03-15 15:05:27'),
(6, 'Liga Nacional contra el Cáncer ', '', 'GT', 'Guatemala ', 'Guatemala ', '7', 'Tratamiento y prevenciÃ³n de cÃ¡ncer en todas sus manifestaciones ', '1', 'Jornadas de prevenciÃ³n y actividades de recaudaciÃ³n ', 0, '0', '0000-00-00', 'Si', '15', 'Si', '1', 'Si', 'Si', '', '', 'rrppligacanguate@yahoo.com ', '', '', '', '', '2020-03-15 15:05:33'),
(7, 'SIECA', '', 'GT', 'Guatemala', 'Guatemala', '14', 'Asesor tÃ©cnico', '7', 'DUCA', 0, '0', '0000-00-00', 'Si', '15', 'Si', '3', 'No', 'Si', '', '', 'info@sieca.int', '', '', '', '', '2019-06-09 23:53:04'),
(8, 'Fondo Unido de Guatemala', '', 'GT', 'Guatemala', 'Guatemala', '15', 'EducaciÃ³n y Salud de Primera Infancia', '1', 'Proyectos destinados a la primera infancia', 0, '0', '0000-00-00', 'Si', '11-15', 'Si', '4', 'Si', 'Si', '', '', 'acorado@unitedway.org.gt,pmarroquin@unitedway.org.gt,besteban@unitedway.org.gt', '', '', '', '', '2019-06-09 23:53:04'),
(9, 'Fundación margarita tejada', '20190709015556-MargaritaTejada.png', 'GT', 'Guatemala', 'Guatemaka', '15', 'Atiende a personas con SÃ­ndrome de down', '1', 'Nuestro proyecto se llama. Enlazate es un movimento que desde hace mucho aÃ±os busca unir a nuestra causa a los guatemaltecos ', 0, '0', '0000-00-00', 'Si', '15', 'Si', '1', 'Si', 'Si', '', '30220832', '', '', '', '', '', '2020-03-15 15:05:38'),
(10, 'FAMilia', '', 'GT', 'Guatemala', 'Guatemala ', '16', 'Capacitar personas para la formaciÃ³n de un partido polÃ­tico ', '4', 'ComitÃ© pro formaciÃ³n de partido polÃ­tico ', 0, '0', '0000-00-00', 'Si', '11-15', 'No', '4', 'Si', 'Si', '', '', 'samezquita92@gmail.com', '', '', '', '', '2019-06-09 23:53:04'),
(11, 'FUNDAMEX', '', 'GT', 'Guatemala', 'Guatemala', '7', 'EducaciÃ³n bilingüe para niÃ±os de escasos recursos y coeficiente intelectual arriba del promedio.', '1', 'Centro Educativo Rotario Benito JuÃ¡rez', 0, '0', '0000-00-00', 'Si', '15', 'Si', '4', 'Si', 'Si', '', '47186738 - 22204900', 'dsmith@fundamex.org ', '', '', '', '', '2019-06-09 23:53:04'),
(12, 'Sociedad Protectora Del Niño ', '', 'GT', 'Guatemala', 'Guatemala', '5', 'InstituciÃ³n privada de bienestar social infantil y educativa a travÃ©s de seis guarderÃ­as, conocidas como Casas del NiÃ±o. En ellas se brinda atenciÃ³n pertinente y educaciÃ³n integral a los alumnos, asÃ­ como cuidados maternales, de salud, alimentaciÃ³n y educaciÃ³n a aquellos niÃ±os cuyos padres por razones de trabajo, no pueden darles atenciÃ³n adecuada, o bien aquellos casos en los que sus hogares son deficientes por distintas razones.', '8', 'Programas de educaciÃ³n, servicios de salud, programas de nutriciÃ³n, Lactancia materna, escuela para padres, escuela de niÃ±eras, unidad de trabajo social, orientaciÃ³n psicolÃ³gica.', 0, '0', '0000-00-00', 'Si', '15', 'Si', '4', 'Si', 'Si', '', '24917500 ', 'info@spn.org.gt', '', '', '', '', '2020-03-15 15:05:48'),
(13, 'Arena S A ', '', 'GT', 'Guatemala', 'Guatemala', '17', 'Desarrollo Inmobiliario y Construccion', '6', 'Desarrollo Inmobiliario y Construccion', 0, '0', '0000-00-00', 'No', '15', 'Si', '4', 'Si', 'Si', '', '', 'werdog@ufm.edu', '', '', '', '', '2019-06-09 23:53:04'),
(14, 'Alexius International', '', 'US', 'Guatemala', 'Guatemala', '17', 'Consultoria en TICs y Desarrollo Internacional ', '6', 'ImplementaciÃ³n de sistemas en el sector empresarial. Tenemos una larga trayectoria de trabajar con organizaciones internacionales como USAID, BID, y BM en implementaciones de desarrollo con componentes de tecnologÃ­a', 0, '0', '0000-00-00', 'Si', '11-15', 'Si', '7', 'Si', 'Si', '', '', 'dmendoza@alexius.net', '', '', '', '', '2019-06-09 23:53:04'),
(15, 'Dirección Departamental de Educación de Izabal', '', 'GT', 'Izabal', 'Puerto Barrios ', '5', 'Ã¡mbito educativo, los diferentes programas dentro del plan estratÃ©gico del plan de EducaciÃ³n ', '2', 'Gestionar pago para el programa de alimentaciÃ³n escolar ', 0, '500', '2016-05-01', 'Si', '1-5', 'Si', '8', 'Si', 'Si', '', '79480009', '', '', '', '', '', '2020-03-15 15:06:03'),
(16, 'DMZ CONSULTORES', '', 'CO', 'GUATEMALA', 'CIUDAD DE GUATEMALA', '1', 'GestiÃ³n sociopredial de proyectos', '9', 'PrestaciÃ³n de servicios de gestiÃ³n sociopolÃ­tica y predial', 0, '26-50', '2014-06-01', 'No', '15', 'Si', '7', 'Si', 'Si', '', '', 'contacto@dmz.com.gt', '', '', '', '', '2019-06-09 23:53:04'),
(17, 'Cooperativa El Progreso de Occidente RL', '', 'GT', 'TotonicapÃ¡n ', 'TotonicapÃ¡n ', '18', 'Ahorro y crÃ©dito', '1', 'Financiamiento de proyectos productivos a traves del ahorro de los asociados ', 0, '500', '2003-05-01', 'Si', '51', 'Si', '1', 'Si', 'Si', '', '4809 4101', 'tonnyvasquezpuac@hotmail.com', '', '', '', '', '2019-06-09 23:53:04'),
(18, 'Club de Niños y Niñas de Centroamérica ', '', 'US', 'Guatemala, Huehuetenango ', 'Guatemala, Chicaman', '7', 'CapacitaciÃ³n, educaciÃ³n, desarrollo integral de kos niÃ±os ', '1', 'Imparte cursos de Stem, Discovery, inglÃ©s, vida saludable, cocina, tutorias', 0, '500', '2012-01-01', 'Si', '11-15', 'Si', '4', 'Si', 'Si', '', '', 'Rhernandez@cnnca.org ', '', '', 'Necesita fondos econ	Ã³micos y donativos en insumos ', '', '2020-03-15 15:06:22'),
(19, 'Efecto colmena ', '', 'MX', 'EducaciÃ³n, conservaciÃ³n, apicultura', 'Ciudad de MÃ©xico, Estado de MÃ©xico, ', '9', 'A la educaciÃ³n acerca de los polinizadores, cambio de polÃ­ticas publicas reubicaciÃ³n de abejas en vez de su exterminio ', '10', 'EducaciÃ³n ', 0, '1-25', '2016-01-01', 'No', '6-10', 'Si', '1', 'Si', 'Si', '', '', 'Contacto@efectocolmena.com', '', '', 'Apoyo econ	Ã³mico, y  legal para gestiones de polÃ­tica pÃ­blica ', '', '2019-06-09 18:08:46'),
(20, 'Fundación Oxlajuj Noj', '', 'GT', 'Ciudad Guatemala', 'Fraijanes', '15', 'Proyectos de investigaciÃ³n y acadÃ©mica', '11', 'GÃ©nero y juventudes', 0, '101-500', '2008-01-01', 'Si', '6-10', 'Si', '1', 'Si', 'Si', '', '41285119', '', '', '', 'Materiales y ayuda MonetarÃa', '', '2020-03-15 15:06:31'),
(21, 'Caminemos', '', 'GT', 'Guatemala', 'Guatemala', '19', 'FormaciÃ³n y capacitaciÃ³n polÃ­tica', '4', 'FormaciÃ³n', 0, '101-500', '2016-01-01', 'Si', '6-10', 'Si', '1', 'Si', 'Si', '', '42150569', '', '', '', 'Financiamiento', '', '2019-06-09 18:10:15'),
(22, 'Asociación Cinco Reformas Guatemala', '', 'GT', 'Guatemala', 'Guatemala', '9', 'AsociaciÃ³n civil para lograr la justicia, paz y prosperidad de los guatemaltecos.  ', '4', 'DifusiÃ³n del liberalismo clÃ¡sico y las 5 Reformas para Guatemala', 0, '51-100', '2018-02-01', 'Si', '11-15', 'Si', '4', 'Si', 'Si', '', '40056948', '', '', '', 'RecaudaciÃ³n de fondos', '', '2020-03-15 15:06:37'),
(23, 'DIRECCIÓN DE ADMINISTRACIÓN DE BECAS Y CRÉDITO EDUCATIVO', '', 'GT', 'Guatemala', 'Guatemala', '4', 'Se encarga de gestionar, administrar y promocionar la oferta de becas que ofrece la CooperaciÃ³n Internacional ', '12', 'Proporcionar la informaciÃ³n oportuna a los aspirantes a becas sobre las fuentes y ofertas disponibles. ', 0, '101-500', '1954-01-01', 'No', '11-15', 'Si', '8', 'Si', 'Si', '', '25044444', '', '', '', '', '', '2020-03-15 15:07:20'),
(24, 'Instituto Nacional de Educación Básica INEB', '', 'GT', 'Quetzaltenango ', 'San Juan Ostuncalco ', '5', 'Educar ', '2', 'Gestionar instalaciones propias del Instituto', 0, '101-500', '2009-01-01', 'Si', '6-10', 'Si', '6', 'Si', 'Si', '', '55982078', '', '', '', 'EconÃ³mico', '', '2020-03-15 15:07:33'),
(25, 'Asociación de Gerentes de Guatemala', '', 'GT', 'Guatemala y Quetzaltenango', 'Guatemala y Quetzaltenango', '5', 'Desarrollo de gerentes para que lideren las empresas o negocios y asÃ­ apoyar el crecimiento de la economÃ­a de Guatemala', '13', 'Asociatividad, capacitaciÃ³n, consultorÃ­a, mentorÃ­a y programa de contribuciÃ³n cÃ­vica ', 0, '500', '1959-10-01', 'Si', '15', 'Si', '1', 'Si', 'Si', '', '2427-4900', 'agg@agg.com.gt', '', '', 'CreaciÃ³n de redes empresariales en el interior del paÃs', '', '2020-03-15 15:07:38'),
(26, 'Hogar de Niños Fátima', '', 'GT', 'SololÃ¡, Guatemala', 'SololÃ¡, Guatemala', '9', 'Brindar atenciÃ³n y protecciÃ³n a niÃ±os de 0 a 7 aÃ±os en situaciÃ³n de riesgo. ', '3', 'ConstrucciÃ³n del Hogar de NiÃ±os FÃ¡tima 2', 0, '500', '2002-01-01', 'Si', '15', 'Si', '4', 'Si', 'Si', '', '', 'director@fatima.org.gt; responsabilidadsocial@fatima.org.gt', '', '', 'Apoyo prioritario: mano de obra, materiales de construcciÃ³n. Apoyo a mediano plazo: vÃveres y donaciones monetarias para el seguimientos de los programas de atenciÃ³n y protecciÃ³n. ', '', '2020-03-15 15:07:57'),
(27, 'Hogar de Niños Fátima, sede No. 2', '', 'GT', 'SololÃ¡', 'SololÃ¡, Finca Las Minas', '10', 'AtenciÃ³n y protecciÃ³n de niÃ±os en situaciÃ³n de riesgo de 0 a 7 aÃ±os. ', '3', 'ConstrucciÃ³n del Hogar de NiÃ±os FÃ¡tima, sede No. 2', 0, '500', '2002-01-01', 'Si', '15', 'Si', '4', 'Si', 'Si', '', '2369-6204', 'responsabilidadsocial@fatima.org.gt; director@fatima.org.gt;', '', '', 'Mano de obra, materiales de construcciÃ³n (prioritario), donaciones econÃ³micas y vÃveres (primario), ropa, zapatos, juguetes, muebles, electrodomÃªsticos (secundario). ', '', '2020-03-15 15:08:11'),
(28, 'Universidad InterNaviones', '', 'GT', 'Jorge Enrique Vargas', 'Guatemala ', '6', 'Formacy', '2', 'Desarrollo educativo ', 0, '500', '2009-09-01', 'Si', '15', 'Si', '1', 'Si', 'No', '', '', '', '', '', '', '', '2019-06-09 23:53:04'),
(29, 'Bufete jurídico', '', 'GT', 'Guatemala', 'Guatemala', '20', 'AsesorÃ­a, procesos legales, escrituraciÃ³n.', '8', 'Profesional', 0, '26-50', '2019-03-01', 'No', '1-5', 'Si', '1', 'Si', 'Si', '', '', 'enmanuelgamboa@hotmail.es', '', '', 'Contactos', '', '2020-03-15 15:08:21'),
(30, 'Alianza Joven OBG', '', 'GT', 'Guatemala', 'Guatemala', '7', 'PrevenciÃ³n y ReducciÃ³n de la Violencia', '3', 'Talleres de PrevenciÃ³n de la Violencia, Resiliencia y Desarrollo de Habilidades', 0, '500', '2008-03-01', 'Si', '6-10', 'Si', '4', 'Si', 'Si', '', '', 'Vivienalianzajoven@gmail.com', '', '', 'Fondos para capacitar mÃ¡s Comunidades vulnerables', '', '2019-06-09 18:13:48'),
(31, 'Fundación Paiz', '20190710071205-FundacionPaiz.jpg', 'GT', 'Guatemala', 'Guatemala', '5', 'Es una fundaciÃ³n que realiza proyectos de educaciÃ³n (prevenciÃ³n de violencia, apoyo a comedores para las personas de la tercera edad, becas para personas de escasos recursos) y tambiÃ©n fomenta el arte y la cultura a travÃ©s de eventos como talleres literarios, Bienal de Arte Paiz, Festival de marimba, exposiciones itinerantes. ', '11', 'Hay varios proyectos que se estÃ¡n realizando, me es imposible mencionar solo uno. Pero se estÃ¡ creando un nuevo proyecto educativo, se estÃ¡n realizando talleres de literatura y artes visuales y ya se estÃ¡ preparando la Bienal de arte Paiz del 2020.', 0, '500', '1978-01-01', 'Si', '15', 'Si', '4', 'Si', 'Si', '', '', 'carla.natareno@fundacionpaiz.org.gt', '', '', 'Donaciones en especie o efectivo', '', '2020-03-15 15:08:32'),
(32, 'Funsepa', '', 'GT', 'Guatemala', 'Guatemala', '15', 'Mejorar la calidad educativa a traves de la tecnologia', '1', 'Apoyo a escuelas publicas con aulas digitales y capacitacion docente', 0, '500', '2004-01-01', 'Si', '15', 'Si', '4', 'Si', 'Si', '', '', 'jskolnik@funsepa.org', '', '', 'RecaudaciÃ³n de fondos', '', '2019-06-09 18:14:43'),
(33, 'Primero Guatemala ', '', 'GT', 'Guatemala ', 'Guatemala', '9', 'Incidencia civica y construcciÃ³n de ciudadania', '4', 'DepuraciÃ³n polÃ­tica ', 0, '1-25', '2015-01-01', 'No', '6-10', 'Si', '1', 'Si', 'Si', '', '52087272', '', '', '', 'ComunicaciÃ³n y difusiÃ³n ', '', '2019-06-09 18:14:46'),
(34, 'Servicios Profesionales para el Desarrollo -SEPRODES-', '', 'GT', 'Guatemala', 'Guatemala', '1', 'CapacitaciÃ³n, AsesarÃ­a y consultorÃ­a', '6', 'CapacitaciÃ³n en Estado, Gobierno y AdministraciÃ³n Publica', 0, '500', '2017-01-01', 'No', '1-5', 'Si', '8', 'Si', 'Si', '', '', 'Franciscolealr@yahoo.com', '', '', 'Enlaces', '', '2019-06-09 23:53:04'),
(35, 'Asociación El Refugio de la Niñez', '', 'GT', 'Alta Verapaz, Baja Verapaz, Huehuetenango, Izabal, PetÃ©n, Quetzaltenango, QuichÃ©, ', '52 Municipios', '7', 'Defensa de Derechos de la NiÃ±ez', '3', 'ProtecciÃ³n integral a VÃ­ctimas de violencia ', 0, '500', '2009-01-01', 'Si', '15', 'Si', '5', 'Si', 'Si', '', '22946200', '', '', '', 'Diversa', '', '2020-03-15 15:08:51'),
(36, 'Fundación El Lustrador', '', 'US', 'California ', 'Oxnard', '7', 'EducaciÃ³n ', '2', 'Otorgar becas de estudio', 0, '101-500', '2017-01-01', 'Si', '1-5', 'Si', '4', 'Si', 'Si', '', '', 'ELF@helpelf.org', '', '', 'EconÃ³mica ', '', '2020-03-15 15:08:57'),
(37, 'Amigos de la Jungla Urbana', '', 'GT', 'Guatemala ', 'Guatemala', '9', 'Al cuidado y protecciÃ³n del parque EcolÃ³gico Jungla Urbana', '1', 'Actividades culturales, reforestaciones, investigaciÃ³n de Flora y Fauna', 0, '500', '2017-01-01', 'No', '1-5', 'No', '4', 'Si', 'Si', '', '', 'junglaurbanaz15@gmail.com ', '', '', 'fondos para operar', '', '2019-06-09 18:15:09'),
(38, 'Fundación Rose', '', 'GT', 'Chimaltenango', 'Chimaltenango', '7', 'EducaciÃ³n presencial y digital', '2', 'Mejorar la calidad educativa del paÃ­s y llegar a mÃ¡s personas', 0, '500', '1998-01-01', 'Si', '15', 'Si', '1', 'Si', 'Si', '', '', 'mariaquezada@colegiodelfuturo.com', '', '', 'Mejorar el conocimiento de su trabajo', '', '2020-03-15 15:09:02'),
(39, 'Fundación Sobrevivientes', '', 'GT', 'Guatemala', 'Ciudad de Guatemala', '15', 'Nuestro trabajo se divide entre el Centro de AtenciÃ³n Integral (PsicologÃ­a, legal, casa refugio) para mujeres, niÃ±ez y adolescencia vÃ­ctima de violencia; trabajo de  Sistema de ProtecciÃ³n de la NiÃ±ez y adolescencia en 5 departamentos; realizamos incidencia siempre en temas de trata de personas y derechos de las mujeres, niÃ±ez y adolescencia', '3', 'El centro de atenciÃ³n Integral y el trabajo de sistema de protecciÃ³n a la niÃ±ez y adolescencia', 0, '500', '2006-07-03', 'Si', '15', 'Si', '5', 'Si', 'Si', '', '22453000', 'sobrevivientes@sobrevivientes.org', '', '', 'ayudarÃa donaciones monetarias, donaciÃ³n de tiempo de profesionales que puedan compartir sus especialidades al equipo interno de la fundaciÃ³n en investigación criminal, perfilaciÃ³n, fortalecimiento al Ã¡rea administrativa con programas, bases de datos o actualización de nuestros manuales de funcionamiento, controles internos, otros.', '', '2020-03-15 15:09:07'),
(40, 'Instituto Nacional Demócrata para Asuntos Internacionales (NDI)', '', 'US', 'Guatemala', 'Guatemala', '3', 'CooperaciÃ³n en materia de democracia y gobernabilidad', '8', 'Apoyo a la ObservaciÃ³n Nacional de las Elecciones 2019 (Mirador Electoral)', 0, '500', '2007-01-01', 'Si', '15', 'Si', '5', 'Si', 'Si', '', '23853342', 'enunez@ndi.org', '', '', 'PasantÃas en las Ã!reas de trabajo descritas', '', '2020-03-15 15:09:15'),
(41, 'ASOCIACION DE AMIGOS DEL DESARROLLO Y LA PAZ', '20190616112503-sin fondo.png', 'GT', 'ALTA Y BAJA VERAPAZ', 'CobÃ¡n, sede Central', '7', 'ImplementaciÃ³n de proyectos educativos de desarrollo comunitario.', '4', 'FormaciÃ³n y capacitaciÃ³n a padres y madres de familia para propiciar en los niÃ±@s un crecimiento sano, con  nutriciÃ³n, y estimulaciÃ³n oportuna. FormaciÃ³n y capacitaciÃ³n en el marco de proyecciÃ³n infantil y patrocinio.', 0, '500', '1994-01-01', 'Si', '15', 'Si', '5', 'Si', 'Si', '', '', 'adp@adpverapaz.org', '', '', 'Visibilidad, gestiÃ³n de proyectos', '', '2019-06-16 17:25:03'),
(42, 'FUNDACREA', '', 'GT', 'Izabal', 'Puerto Barrios', '15', 'Becas escolares a niÃ±os de escasos recursos, apoyo nutricional a adultos mayores en situaciÃ³n de abandono. En proyecto: biblioteca comunitaria en aldea Piedra Parada.', '3', 'Becas escolares', 0, '500', '2015-01-01', 'No', '1-5', 'No', '4', 'Si', 'Si', '', '', 'Info@fundacreaguate.org', '', '', 'ConstrucciÃ³n y equipamiento de biblioteca comunitaria para apoyo de tutorÃas a los niños y jÃ³venes becados. ', '', '2019-06-09 18:19:49'),
(43, 'Asociación de Desarrollo Agrícola y Micro empresarial, ADAM', '', 'GT', 'Quetzaltenango', 'Quetzaltenango', '7', 'DiseÃ±o y ejecuciÃ³n de proyectos de desarrollo rural', '3', 'ContribuciÃ³n al desarrollo econÃ³mico desde lo local', 0, '500', '1998-07-01', 'Si', '11-15', 'Si', '5', 'Si', 'Si', '', '', 'info@adam.org.gt; gcifuentes@adam.org.gt ', '', '', 'Recursos (humanos, tecnolÃ³gicos y financieros)', '', '2020-03-15 15:09:38'),
(44, 'Emprendi - Crowdfunding Guatemala', '', 'GT', 'Guatemala', 'Guatemala', '21', 'Somos una comunidad de inversion y desarrollo basada en crowdfunding, logrando asÃ­ el  apoyo de muchas personas con pequeÃ±os aportes econÃ³micos a emprendedores, sus proyectos , causas sociales y mÃ¡s. ', '8', 'El continuo desarrollo de la plataforma y comunidad para lograr el financiamiento de proyectos.', 0, '26-50', '2019-02-01', 'Si', '1-5', 'No', '1', 'Si', 'Si', '', '47054367', 'info@emprendi-la.com', '', '', 'Publicidad y mercadeo.', '', '2019-06-09 18:20:25'),
(45, 'Pomona Impact', '', 'GT', 'SacatepÃ©quez', 'Antigua Guatemala', '21', 'Invertir en empresas de impacto', '6', 'Buscamos empresas que estÃ©n generando un impacto positivos social y/o ambiental e invertimos en ellas.', 0, '500', '2014-01-01', 'Si', '11-15', 'Si', '1', 'Si', 'No', '', '', '', '', '', '', '', '2019-06-09 23:53:04'),
(46, 'Asociación Pop Noj', '', 'GT', 'sede central en Ciudad de Guatemala, trabajo enfocado en Huehuetenango', 'Guatemala, Guatemala; Colotenango, Huehuetenango', '9', 'Promover, divulgar y acompaÃ±ar procesos de organizaciÃ³n, formaciÃ³n y participaciÃ³n del Pueblo Maya desde su CosmovisiÃ³n, identidad y derechos.', '2', 'AcompaÃ±amiento a niÃ±os y niÃ±as migrantes que regresan de Estados Unidos y MÃ©xico.', 0, '500', '2010-06-01', 'Si', '15', 'Si', '5', 'Si', 'Si', '', '(502) 22380905', '', '', '', 'Apoyo al fortalecimiento institucional', '', '2020-03-15 15:09:45'),
(47, 'Asociación Corazón del Agua', '', 'GT', 'Guatemala', 'Guatemala', '9', 'Becas de FormaciÃ³n en ParterÃ­a Profesional y Servicios de salud a las mujeres desde el modelo de atenciÃ³n de la ParterÃ­a Profesional.', '2', 'Becas de FormaciÃ³n en parterÃ­a e implementaciÃ³n del TÃ©cnico Universitario en ParterÃ­a Profesional con Enfoque Intercultural en coordinaciÃ³n con la Universidad Galileo', 0, '500', '2014-06-01', 'Si', '1-5', 'Si', '5', 'Si', 'Si', '', '', 'direccion@corazondelagua.org.gt', '', '', 'Financiamiento para becas de estudio y servicios de salud.  Personal de salud voluntariados en servicios en jornadas comunitarias.', '', '2020-03-15 15:09:56'),
(48, 'Inversión y Desarrollo ', '', 'GT', 'Guatemala', 'Guatemala', '1', 'Dar a conocer lo positivo y oportunidades en Guatemala a travÃ©s de nuestro programa de TV semanal', '2', 'Programa de TV de 30 minutos semanal', 0, '500', '2008-04-01', 'Si', '1-5', 'Si', '1', 'Si', 'Si', '', '40072028', 'jackie.vm91@gmail.com', '', '', 'Apoyo monetario para llegar a todos los departamentos de Guatemala y dar a conocer cada rincÃ³n de nuestro paÃs', '', '2020-03-15 15:10:01'),
(49, 'Enactus ', '20190709015224-Enactus.png', 'US', 'Guatemala', 'Guatemala', '15', 'Buscamos transformar la vida de jÃ³venes universitarios a travÃ©s de la acciÃ³n emprendedora en comunidades, brindÃ¡ndoles herramientas y conocimientos Ãºtiles para su desarrollo profesional y econÃ³mico.  ', '6', 'Proyectos de Emprendimiento Social por medio de grupos de jÃ³venes universitario que con sus proyectos brindan soluciones sostenibles a comunidades en necesidad, dÃ¡ndoles un beneficio econÃ³mico, social y/o ambiental. ', 0, '500', '2004-01-01', 'Si', '1-5', 'Si', '4', 'Si', 'Si', '', '', 'mdelaguila@enactus.org', '', '', 'Fondos', '', '2019-07-09 19:52:24'),
(50, 'Chapines Chispudos', '', 'GT', 'Guatemala ', 'Guatemala ', '17', 'Chapines Chispudos es una plataforma digital 360 grados, que brinda a micro y pequeÃ±os empresarios herramientas digitales, contactos y recursos para hacer crecer su negocio. ', '13', '', 0, '', '0000-00-00', '', '', '', '', 'Si', '', '', '', '', '', '', '', '', '2019-06-15 19:18:11'),
(113, 'Jose', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Jose', '-', 'roberto.miranda@ciancoders.com', '', '', '-', '', '2022-07-22 16:08:01'),
(57, 'Vivianne Dardón', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Vivianne DardÃ³n', '-', 'gestion.proyectos@sobrevivientes.org', '', '', '-', '', '2020-03-15 15:10:10'),
(52, 'Integral Heart Family School', '', 'GT', 'Sacatep&eacute;quez', 'Antigua', '7', 'Education is the heart of our work. Our school is currently home to 80 children with 6 learning programs, a Teacher-Training Program and serves 1,500 meals and snacks every month. Since 2011, our programs have delivered classes and support to over 1,200 students and their families in Guatemala. We have also provided over 2,500 food baskets to our 40 sponsored families.', '3', 'Education is the heart of our work. Our school is currently home to 80 children with 6 learning programs, a Teacher-Training Program and serves 1,500 meals and snacks every month.', 0, '101-500', '2011-02-01', 'Si', '6-10', 'Si', '4', 'No', 'Si', '', '', '', '', '', 'We are in need of funding to support our programs for girls ages 4-12 years', '', '2020-03-24 21:19:28'),
(55, 'Ana Francisca de Corzo', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Ana Francisca de Corzo', '-', 'c@c.com', '', '', '-', '', '2019-09-23 14:30:20'),
(61, 'Diego Arango', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Diego Arango', '-', 'ddiegoaarango@gmail.com', '', '', '-', '', '2021-04-06 23:44:15'),
(59, 'Oscar Moran', '20220602090838-WhatsApp Image 2022-04-05 at 10.47.13 AM.jpeg', 'US', 'CHIQUIMULA', 'Concepción Las Minas', '4', '-aaaaaaaasfdasdf asdf asdf as', '7', 'abc', 1, '5', '0000-00-00', 'Si', '20', 'Si', '1', 'No', 'No', 'Oscar Moran Rafaela', '1234567865468', 'ormaprime2@gmail.comaaaa', '', '', '-ccccccc texto necesario', '', '2022-06-13 19:37:52'),
(62, 'Carmen', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Carmen', '-', 'czelaya@zelayacarmen.com', '', '', '-', '', '2021-04-06 23:46:25'),
(63, 'ZELSA.SHOP', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'ZELSA.SHOP', '-', 'info@zelsa.co', '', '', '-', '', '2021-04-07 18:12:02'),
(64, 'oscar moran', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'oscar moran', '-', 'omoran@fss.gob.gt', '', '', '-', '', '2021-04-08 16:58:14'),
(65, 'Beba', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Beba', '-', 'info@tradingpro.co', '', '', '-', '', '2021-04-15 23:05:52'),
(66, 'Biourbainsmo By Botanik', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Biourbainsmo By Botanik', '-', 'info@bybotanik.com', '', '', '-', '', '2021-04-16 17:01:37'),
(67, 'guido munoz', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'guido munoz', '-', 'munoz.garzaro@gmail.com', '', '', '-', '', '2021-04-20 15:44:04'),
(68, 'Alfredo Chinchilla', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Alfredo Chinchilla', '-', 'alfredchgod@gmail.com', '', '', '-', '', '2021-04-21 17:33:22'),
(69, 'Juan Antonio Busto', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Juan Antonio Busto', '-', 'jabr55@hotmail.com', '', '', '-', '', '2021-04-22 17:31:43'),
(70, 'Joven Thomy', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Joven Thomy', '-', 'thomas.dougherty@progreso.com', '', '', '-', '', '2021-04-22 18:07:47'),
(71, 'Chris Dent', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Chris Dent', '-', 'chris@grolis.com', '', '', '-', '', '2021-04-29 16:35:31'),
(72, 'Alfredo Chinchilla', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Alfredo Chinchilla', '-', 'sharkfinancegroup@gmail.com', '', '', '-', '', '2021-04-30 00:39:27'),
(73, 'Ema De Rebuly', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Ema De Rebuly', '-', 'donaciones21@fundacionmargaritatejada.org', '', '', '-', '', '2021-05-04 21:02:24'),
(74, 'RICARDO MENDEZ RUIZ', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'RICARDO MENDEZ RUIZ', '-', 'ricardomendezruiz@gmail.com', '', '', '-', '', '2021-05-14 17:00:48'),
(75, 'Marcos Castillo Cabrera', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Marcos Castillo Cabrera', '-', 'mdcc46355@gmail.com', '', '', '-', '', '2021-05-22 21:27:13'),
(76, 'Daffnie Mc.nish', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Daffnie Mc.nish', '-', 'pamelamcnish@gmail.com', '', '', '-', '', '2021-05-23 19:47:40'),
(77, 'Rosa Maria Meadow', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Rosa Maria Meadow', '-', 'rosa.maria.meadow@gmail.com', '', '', '-', '', '2021-05-23 20:55:25'),
(78, 'Daniel Alejandro Vásquez', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Daniel Alejandro Vásquez', '-', 'davl382@yahoo.com', '', '', '-', '', '2021-05-25 04:40:12'),
(79, 'Stuardo Rodríguez', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Stuardo Rodríguez', '-', 'str@maphpia.com', '', '', '-', '', '2021-06-14 11:58:18'),
(80, 'Leyla Flores', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Leyla Flores', '-', 'leyla.flores@gmail.com', '', '', '-', '', '2021-06-15 19:48:19'),
(81, 'Tanja.Meyer', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Tanja.Meyer', '-', 'tanjadearcia@gmail.com', '', '', '-', '', '2021-06-21 17:00:12'),
(82, 'Luis Nuñez', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Luis Nuñez', '-', 'nunez.lavagnino@gmail.com', '', '', '-', '', '2021-06-23 15:42:26'),
(83, 'Abner Gonzalez', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Abner Gonzalez', '-', 'abner@transformaciongt.com', '', '', '-', '', '2021-06-24 18:39:24'),
(84, 'Amarilis Mejía', '20211201094137-logo (2).png', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Amarilis Mejía', '-', 'amarilismejiac@gmail.com', '', '', '-', '', '2021-12-01 15:41:37'),
(109, 'Helpless Demo', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Helpless Demo', '-', 'angel@locomotiondynamic.com', '', '', '-', '', '2022-07-07 19:27:33'),
(108, 'Helper Demo', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Helper Demo', '-', 'aisl.1611@gmail.com', '', '', '-', '', '2022-07-07 19:20:31'),
(87, 'Erick Estuardo', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Erick Estuardo', '-', 'repacampoalegre@gmail.com', '', '', '-', '', '2021-06-30 16:07:56'),
(88, 'valeria', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'valeria', '-', 'valem011217@gmail.com', '', '', '-', '', '2021-06-30 16:25:31'),
(89, 'Abner fuentes', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Abner fuentes', '-', '000abner@gmail.com', '', '', '-', '', '2021-07-25 23:11:02'),
(112, '2nd Helper', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', '2nd Helper', '-', 'asarat@zttelco.com', '', '', '-', '', '2022-07-19 16:55:07'),
(91, 'Michael De Paz', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Michael De Paz', '-', 'michael.depaz@msn.com', '', '', '-', '', '2021-09-01 22:40:01'),
(92, 'Carmen Zelaya', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Carmen Zelaya', '-', 'zelayacarmen10@gmail.com', '', '', '-', '', '2021-09-09 15:29:15'),
(111, 'oscar moran', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'oscar moran', '-', 'osjulmocab@gmail.com', '', '', '-', '', '2022-07-18 17:42:05'),
(94, 'Diego Acabal', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Diego Acabal', '-', 'diego.acabal04@gmail.com', '', '', '-', '', '2022-04-26 23:40:29'),
(95, 'Mafer Iraheta', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Mafer Iraheta', '-', 'maferspd@gmail.com', '', '', '-', '', '2022-04-26 23:40:36'),
(96, 'Alex obed', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Alex obed', '-', 'cruzguzmanalexobed@gmail.com', '', '', '-', '', '2022-05-11 02:23:24'),
(98, 'Mafer prueba', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Mafer prueba', '-', 'mirahetaenlazando@gmail.com', '', '', '-', '', '2022-05-11 20:35:14'),
(99, 'Sebastian Amezquita', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Sebastian Amezquita', '-', 'samezquita@arborvitae.com.gt', '', '', '-', '', '2022-05-16 19:28:04'),
(100, 'Rodolfo Veliz', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Rodolfo Veliz', '-', 'rveliz_zepeda@yahoo.com', '', '', '-', '', '2022-05-17 22:02:22'),
(101, 'Omar Gonzalez', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Omar Gonzalez', '-', 'o.gonzalez@viva.org', '', '', '-', '', '2022-06-13 21:12:18'),
(102, 'Ivonne López', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Ivonne López', '-', 'ivonnelopezurizar@gmail.com', '', '', '-', '', '2022-06-13 21:12:10'),
(110, 'Fredy lemus', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '0', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Fredy lemus', '-', 'alemus2781@gmail.com', '', '', '-', '', '2022-07-11 16:28:56'),
(104, 'Marco', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Marco', '-', 'makosaz@gmail.com', '', '', '-', '', '2022-06-13 21:12:04'),
(105, 'Zulena Escobedo', '', 'GT', 'Guatemala', 'Guatemala', '12', '-', '14', '-', 0, '0', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Zulena Escobedo', '-', 'zulena.escobedo@gmail.com', '', '', '-', '', '2022-06-13 21:12:02'),
(106, 'Lester Flores', '20220708013111-cropped (14).jpg', 'GT', 'GUATEMALA', 'Guatemala', '21', '-', '12', '-', 1, '1', '0000-00-00', 'SI', '0', 'NO', '1', 'SI', 'SI', 'Lester Flores', '30424813', 'ormaprime2@gmail.com', '', '', '-', '', '2022-07-08 19:32:06'),
(107, 'Presidencia TH', '20220613015427-vlcsnap-2022-03-25-09h30m24s165 - copia.png', 'HN', 'GUATEMALA', 'Guatemala', '15', 'Capacitaciones a los necesitados', '10', 'Capacitando  el área rural', 14, '8', '0000-00-00', 'No', '4', 'No', '1', 'Si', 'Si', 'Presidencia TH', '30424813', 'ormaprime@gmail.com', '', '', 'Capital para sostener mis gastos', '', '2022-06-14 03:55:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_orgsu`
--

CREATE TABLE `enla_orgsu` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `org_orgsu` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `roola` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `social_id` varchar(150) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_paises`
--

CREATE TABLE `enla_paises` (
  `id_enla` int(11) NOT NULL,
  `iso_enla` char(2) DEFAULT NULL,
  `n_enla` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_paises`
--

INSERT INTO `enla_paises` (`id_enla`, `iso_enla`, `n_enla`) VALUES
(1, 'AF', 'Afganist&aacute;n'),
(2, 'AX', 'Islas Gland'),
(3, 'AL', 'Albania'),
(4, 'DE', 'Alemania'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Ant&aacute;rtida'),
(9, 'AG', 'Antigua y Barbuda'),
(10, 'AN', 'Antillas Holandesas'),
(11, 'SA', 'Arabia Saud&aacute;'),
(12, 'DZ', 'Argelia'),
(13, 'AR', 'Argentina'),
(14, 'AM', 'Armenia'),
(15, 'AW', 'Aruba'),
(16, 'AU', 'Australia'),
(17, 'AT', 'Austria'),
(18, 'AZ', 'Azerbaiy&aacute;n'),
(19, 'BS', 'Bahamas'),
(20, 'BH', 'Bahr&eacute;in'),
(21, 'BD', 'Bangladesh'),
(22, 'BB', 'Barbados'),
(23, 'BY', 'Bielorrusia'),
(24, 'BE', 'B&eacute;lgica'),
(25, 'BZ', 'Belice'),
(26, 'BJ', 'Benin'),
(27, 'BM', 'Bermudas'),
(28, 'BT', 'Bhut&aacute;n'),
(29, 'BO', 'Bolivia'),
(30, 'BA', 'Bosnia y Herzegovina'),
(31, 'BW', 'Botsuana'),
(32, 'BV', 'Isla Bouvet'),
(33, 'BR', 'Brasil'),
(34, 'BN', 'Brun&eacute;i'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'CV', 'Cabo Verde'),
(39, 'KY', 'Islas Caim&aacute;n'),
(40, 'KH', 'Camboya'),
(41, 'CM', 'Camer&uacute;n'),
(42, 'CA', 'Canad&aacute;'),
(43, 'CF', 'Rep&uacute;blica Centroafricana'),
(44, 'TD', 'Chad'),
(45, 'CZ', 'Rep&uacute;blica Checa'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CY', 'Chipre'),
(49, 'CX', 'Isla de Navidad'),
(50, 'VA', 'Ciudad del Vaticano'),
(51, 'CC', 'Islas Cocos'),
(52, 'CO', 'Colombia'),
(53, 'KM', 'Comoras'),
(54, 'CD', 'Rep&uacute;blica Democr&aacute;tica del Congo'),
(55, 'CG', 'Congo'),
(56, 'CK', 'Islas Cook'),
(57, 'KP', 'Corea del Norte'),
(58, 'KR', 'Corea del Sur'),
(59, 'CI', 'Costa de Marfil'),
(60, 'CR', 'Costa Rica'),
(61, 'HR', 'Croacia'),
(62, 'CU', 'Cuba'),
(63, 'DK', 'Dinamarca'),
(64, 'DM', 'Dominica'),
(65, 'DO', 'Rep&uacute;blica Dominicana'),
(66, 'EC', 'Ecuador'),
(67, 'EG', 'Egipto'),
(68, 'SV', 'El Salvador'),
(69, 'AE', 'Emiratos &aacute;rabes Unidos'),
(70, 'ER', 'Eritrea'),
(71, 'SK', 'Eslovaquia'),
(72, 'SI', 'Eslovenia'),
(73, 'ES', 'Espa&ntilde;a'),
(74, 'UM', 'Islas ultramarinas de Estados Unidos'),
(75, 'US', 'Estados Unidos'),
(76, 'EE', 'Estonia'),
(77, 'ET', 'Etiop&aacute;a'),
(78, 'FO', 'Islas Feroe'),
(79, 'PH', 'Filipinas'),
(80, 'FI', 'Finlandia'),
(81, 'FJ', 'Fiyi'),
(82, 'FR', 'Francia'),
(83, 'GA', 'Gab&oacute;n'),
(84, 'GM', 'Gambia'),
(85, 'GE', 'Georgia'),
(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 'GH', 'Ghana'),
(88, 'GI', 'Gibraltar'),
(89, 'GD', 'Granada'),
(90, 'GR', 'Grecia'),
(91, 'GL', 'Groenlandia'),
(92, 'GP', 'Guadalupe'),
(93, 'GU', 'Guam'),
(94, 'GT', 'Guatemala'),
(95, 'GF', 'Guayana Francesa'),
(96, 'GN', 'Guinea'),
(97, 'GQ', 'Guinea Ecuatorial'),
(98, 'GW', 'Guinea-Bissau'),
(99, 'GY', 'Guyana'),
(100, 'HT', 'Hait&aacute;'),
(101, 'HM', 'Islas Heard y McDonald'),
(102, 'HN', 'Honduras'),
(103, 'HK', 'Hong Kong'),
(104, 'HU', 'Hungr&aacute;a'),
(105, 'IN', 'India'),
(106, 'ID', 'Indonesia'),
(107, 'IR', 'Ir&aacute;n'),
(108, 'IQ', 'Iraq'),
(109, 'IE', 'Irlanda'),
(110, 'IS', 'Islandia'),
(111, 'IL', 'Israel'),
(112, 'IT', 'Italia'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Jap&oacute;n'),
(115, 'JO', 'Jordania'),
(116, 'KZ', 'Kazajst&aacute;n'),
(117, 'KE', 'Kenia'),
(118, 'KG', 'Kirguist&aacute;n'),
(119, 'KI', 'Kiribati'),
(120, 'KW', 'Kuwait'),
(121, 'LA', 'Laos'),
(122, 'LS', 'Lesotho'),
(123, 'LV', 'Letonia'),
(124, 'LB', 'L&aacute;bano'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libia'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lituania'),
(129, 'LU', 'Luxemburgo'),
(130, 'MO', 'Macao'),
(131, 'MK', 'ARY Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MY', 'Malasia'),
(134, 'MW', 'Malawi'),
(135, 'MV', 'Maldivas'),
(136, 'ML', 'Mal&aacute;'),
(137, 'MT', 'Malta'),
(138, 'FK', 'Islas Malvinas'),
(139, 'MP', 'Islas Marianas del Norte'),
(140, 'MA', 'Marruecos'),
(141, 'MH', 'Islas Marshall'),
(142, 'MQ', 'Martinica'),
(143, 'MU', 'Mauricio'),
(144, 'MR', 'Mauritania'),
(145, 'YT', 'Mayotte'),
(146, 'MX', 'M&eacute;xico'),
(147, 'FM', 'Micronesia'),
(148, 'MD', 'Moldavia'),
(149, 'MC', 'M&oacute;naco'),
(150, 'MN', 'Mongolia'),
(151, 'MS', 'Montserrat'),
(152, 'MZ', 'Mozambique'),
(153, 'MM', 'Myanmar'),
(154, 'NA', 'Namibia'),
(155, 'NR', 'Nauru'),
(156, 'NP', 'Nepal'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'N&aacute;ger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Isla Norfolk'),
(162, 'NO', 'Noruega'),
(163, 'NC', 'Nueva Caledonia'),
(164, 'NZ', 'Nueva Zelanda'),
(165, 'OM', 'Om&aacute;n'),
(166, 'NL', 'Pa&aacute;ses Bajos'),
(167, 'PK', 'Pakist&aacute;n'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestina'),
(170, 'PA', 'Panam&aacute;'),
(171, 'PG', 'Pap&uacute;a Nueva Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Per&uacute;'),
(174, 'PN', 'Islas Pitcairn'),
(175, 'PF', 'Polinesia Francesa'),
(176, 'PL', 'Polonia'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'GB', 'Reino Unido'),
(181, 'RE', 'Reuni&oacute;n'),
(182, 'RW', 'Ruanda'),
(183, 'RO', 'Rumania'),
(184, 'RU', 'Rusia'),
(185, 'EH', 'Sahara Occidental'),
(186, 'SB', 'Islas Salom&oacute;n'),
(187, 'WS', 'Samoa'),
(188, 'AS', 'Samoa Americana'),
(189, 'KN', 'San Crist&oacute;bal y Nevis'),
(190, 'SM', 'San Marino'),
(191, 'PM', 'San Pedro y Miquel&oacute;n'),
(192, 'VC', 'San Vicente y las Granadinas'),
(193, 'SH', 'Santa Helena'),
(194, 'LC', 'Santa Luc&aacute;a'),
(195, 'ST', 'Santo Tom&eacute; y Pr&aacute;ncipe'),
(196, 'SN', 'Senegal'),
(197, 'CS', 'Serbia y Montenegro'),
(198, 'SC', 'Seychelles'),
(199, 'SL', 'Sierra Leona'),
(200, 'SG', 'Singapur'),
(201, 'SY', 'Siria'),
(202, 'SO', 'Somalia'),
(203, 'LK', 'Sri Lanka'),
(204, 'SZ', 'Suazilandia'),
(205, 'ZA', 'Sud&aacute;frica'),
(206, 'SD', 'Sud&aacute;n'),
(207, 'SE', 'Suecia'),
(208, 'CH', 'Suiza'),
(209, 'SR', 'Surinam'),
(210, 'SJ', 'Svalbard y Jan Mayen'),
(211, 'TH', 'Tailandia'),
(212, 'TW', 'Taiw&aacute;n'),
(213, 'TZ', 'Tanzania'),
(214, 'TJ', 'Tayikist&aacute;n'),
(215, 'IO', 'Territorio Brit&aacute;nico del Oc&eacute;ano &aacute;ndico'),
(216, 'TF', 'Territorios Australes Franceses'),
(217, 'TL', 'Timor Oriental'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad y Tobago'),
(222, 'TN', 'T&uacute;nez'),
(223, 'TC', 'Islas Turcas y Caicos'),
(224, 'TM', 'Turkmenist&aacute;n'),
(225, 'TR', 'Turqu&aacute;a'),
(226, 'TV', 'Tuvalu'),
(227, 'UA', 'Ucrania'),
(228, 'UG', 'Uganda'),
(229, 'UY', 'Uruguay'),
(230, 'UZ', 'Uzbekist&aacute;n'),
(231, 'VU', 'Vanuatu'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Islas V&aacute;rgenes Brit&aacute;nicas'),
(235, 'VI', 'Islas V&aacute;rgenes de los Estados Unidos'),
(236, 'WF', 'Wallis y Futuna'),
(237, 'YE', 'Yemen'),
(238, 'DJ', 'Yibuti'),
(239, 'ZM', 'Zambia'),
(240, 'ZW', 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_preg`
--

CREATE TABLE `enla_preg` (
  `id_preg` int(60) NOT NULL,
  `n_preg` mediumtext NOT NULL,
  `tip_preg` varchar(10) NOT NULL,
  `indi_preg` varchar(10) NOT NULL,
  `mat_preg` varchar(10) NOT NULL,
  `fec_preg` date NOT NULL,
  `fe_preg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `st_preg` varchar(2) NOT NULL DEFAULT '1',
  `us_preg` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_preg`
--

INSERT INTO `enla_preg` (`id_preg`, `n_preg`, `tip_preg`, `indi_preg`, `mat_preg`, `fec_preg`, `fe_preg`, `st_preg`, `us_preg`) VALUES
(1, 'Cree usted en los extraterrestres ?', '1', 'si', '1', '2019-05-23', '2019-05-25 16:45:54', '1', '2'),
(2, 'De verdad cree usted en esas Charadas ?', '2', 'no', '1', '2019-05-23', '2019-05-25 16:49:02', '1', '2'),
(3, 'Esta es otra pregunta ?', '4', 'si', '1', '2019-05-23', '2019-05-25 17:11:35', '1', '2'),
(4, 'Las cucarachas vienen del espacio ?', '5', 'no', '1', '2019-05-23', '2019-05-25 17:10:50', '1', '2'),
(5, 'Seria posible la vida como una cucaracha en condiciones malas ?', '3', 'si', '1', '2019-05-23', '2019-05-25 17:16:49', '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_proeje`
--

CREATE TABLE `enla_proeje` (
  `id_proeje` int(11) NOT NULL,
  `n_proeje` mediumtext NOT NULL,
  `dep_proeje` varchar(10) NOT NULL,
  `mun_proeje` varchar(10) NOT NULL,
  `ubi_proeje` mediumtext NOT NULL,
  `area_proeje` varchar(10) NOT NULL,
  `insti_proeje` varchar(10) NOT NULL,
  `ejfisi_proeje` varchar(60) NOT NULL DEFAULT '0',
  `ejfina_proeje` varchar(60) NOT NULL DEFAULT '0',
  `presol_proeje` varchar(60) NOT NULL DEFAULT '0',
  `preas_proeje` varchar(60) NOT NULL DEFAULT '0',
  `fec_proeje` datetime NOT NULL,
  `us_proeje` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_proeje`
--

INSERT INTO `enla_proeje` (`id_proeje`, `n_proeje`, `dep_proeje`, `mun_proeje`, `ubi_proeje`, `area_proeje`, `insti_proeje`, `ejfisi_proeje`, `ejfina_proeje`, `presol_proeje`, `preas_proeje`, `fec_proeje`, `us_proeje`) VALUES
(1, 'ConstrucciÃ³n de Instituto TecnolÃ³gico', '1', '1', 'Zona 11', '1', '1', '0', '0', '0', '0', '2019-06-12 00:00:00', '1'),
(2, 'Mejoramiento escuela primaria', '1', '1', '3 Calle 16-73 Zona 1', '1', '1', '56', '3.93', '0', '0', '2019-06-12 00:00:00', '1'),
(3, 'Mejoramiento escuela primaria', '1', '1', '12 avenida 24-01 zona 12', '1', '1', '0', '3.93', '', '', '2019-06-12 00:00:00', '1'),
(4, 'Mejoramiento escuela primaria', '1', '1', '21 avenida 15-08 Zona 6', '1', '1', '0', '34.13', '', '', '2019-06-12 00:00:00', '1'),
(5, 'Mejoramiento Instituto Basico', '1', '1', 'Calzada San Juan 32-50 Zona 7', '1', '1', '0', '33', '', '', '2019-06-12 00:00:00', '1'),
(6, 'Mejoramiento Instituto Diversificado', '1', '1', '4 avenida 10-82 Zona 21', '1', '1', '0', '0', '', '', '2019-06-12 00:00:00', '1'),
(7, 'AmpliaciÃ³n Escuela Primaria Ulises Rojas', '1', '15', 'Barcenas Villa Nueva', '1', '1', '0', '', '', '', '2019-06-12 00:00:00', '1'),
(8, 'AmpliaciÃ³n Escuela Primaria Unesco San Isabel I', '1', '1', 'zona 3', '1', '1', '', '', '', '', '2019-06-12 00:00:00', '1'),
(9, 'ConstrucciÃ³n Escuela Primaria Anexo Tipo FederaciÃ³n #2', '1', '1', 'Colonia Venecia 2', '1', '1', '', '', '', '', '2019-06-12 00:00:00', '1'),
(10, 'AmpliaciÃ³n Escuela Primaria CantÃ³n los Ajcuc', '1', '12', 'Charruancho', '1', '1', '', '', '', '', '2019-06-12 00:00:00', '1'),
(11, 'ConstrucciÃ³n de Escuela Primaria', '1', '12', 'Aldea Taiche Grande', '1', '1', '0', '0', '0', '0', '2019-06-12 00:00:00', '1'),
(12, 'Mejoramiento de Escuela primaria ', '1', '12', 'Aldea ChiquÃ­n', '1', '1', '0', '0', '0', '0', '2019-06-12 00:00:00', '1'),
(13, 'Mejoramiento de Escuela primaria', '1', '1', 'CaserÃ­o El Espinal', '1', '1', '0', '0', '0', '0', '2019-06-12 00:00:00', '1'),
(14, 'AmpliaciÃ³n de Escuela Primaria', '1', '5', ' Aldea el Paraiso', '1', '1', '0', '0', '0', '0', '2019-06-12 00:00:00', '1'),
(15, 'AmpliaciÃ³n Escuela Primaria CaserÃ­o Lam Culebra, Aldea el Manantial', '1', '5', 'Aldea el Manantial', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(16, 'AmpliaciÃ³n de Escuela Primaria, ', '1', '5', 'Aldea ConcepciÃ³n', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(17, 'AmpliaciÃ³n de Escuela Primaria, ', '1', '5', 'Aldea primera joya', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(18, 'AmpliaciÃ³n de Escuela Primaria, ', '1', '5', 'CaserÃ­o El Rodeo, Aldea Sanguayaba', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(19, 'ConstrucciÃ³n de Escuela Primaria ', '1', '5', 'Aldea Los Mixcos', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(20, 'ConstrucciÃ³n de Instituto Basico, ', '1', '5', 'Aldea Azacualpilla', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(21, 'ConstrucciÃ³n de Instituto Diversificado', '1', '1', 'Cabecera Municipal', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(22, 'Mejoramiento de Escuela primaria ', '1', '5', 'Aldea Buena vista', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(23, 'Mejoramiento de Escuela primaria,', '1', '5', ' Aldea Lo de Silva', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(24, 'Mejoramiento de Escuela primaria, ', '1', '5', 'Aldea Marillanos', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(25, 'Mejoramiento de Escuela primaria,', '1', '5', ' Aldea El Manantial ', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(26, 'AmpliaciÃ³n de Escuela Primaria Salvador Reyes Soto,', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(27, 'AmpliaciÃ³n Escuela Primaria San Martineros', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(28, 'AmpliaciÃ³n Escuela Primaria Carlos Aldana Rojas, ', '1', '11', 'Aldea Pamoca', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(29, 'AmpliaciuÃ³n Escuela Primaria Caserio Joloncot, ', '1', '11', 'Aldea Carrizal', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(30, 'AmpliaciÃ³n Escuela Primaria, CaserÃ­o Labor Vieja, ', '1', '11', 'Aldea La Cienega', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(31, 'AmpliaciÃ³n Instituto Diversificado INED,', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(32, 'ConstrucciÃ³n Escuela Primaria Las Parcelas, ', '1', '11', 'Aldea El CiprÃ©s', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(33, 'ConstrucciÃ³n de Escuela Primaria Los Sequenes, Pamoca ', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(34, 'ConstrucciÃ³n de Escuela Primaria,', '1', '11', 'Aldea Estancia Vieja', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(35, 'ConstrucciÃ³n Escuela Primaria Sector 1 Vuelta Grande', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(36, 'Mejoramiento de Escuela Preprimaria EPM Anexa a EOUM Salvador Reyes Soto Parvulos', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(37, 'Mejoramiento de Escuela Primaria Vuelta Grande', '1', '11', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(38, 'Mejoramiento Escuela Primaria, Sector La Cumbre, ', '1', '11', 'Aldea Estancia de la Virgen', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(39, 'AmpliaciÃ³n Escuela Primaria, CantÃ³n El Aguacate, ', '1', '9', 'Aldea Vista Hermosa', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(40, 'ConstrucciÃ³n Escuela Primaria Pain-Ciene JM, Km22, ', '1', '14', 'Aldea Vista Hermosa', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(41, 'ConstrucciÃ³n Instituto Basico INEB-INED, Cabecera Municipal', '1', '9', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(42, 'Mejoramiento de Escuela Primaria, CaserÃ­o Lo de LopÃ©z, ', '1', '9', 'Aldea Chilani', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(43, 'Mejoramiento de Escuela Primaria No.1, Aldea Vista Hermosa', '1', '9', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(44, 'AmpliaciÃ³n Escuela Primaria No.2, ', '1', '9', 'Aldea El Jocotillo', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(45, 'ConstrucciÃ³n Instituto Tecnologico, ', '1', '16', 'Aldea Santa Elena', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(46, 'AmpliaciÃ³n de Escuela Primaria, ', '1', '7', 'Colonia La Leyenda', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(47, 'AmpliaciÃ³n Escuela Primaria, ', '1', '14', 'Cabecera Municipal', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(48, 'ConstrucciÃ³n de Instituto TecnolÃ³gico, Cabecera Municipal', '1', '7', '', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(49, 'Mejoramiento de Escuela Preprimaria Oficial Urbana Mixta No.68, ', '1', '6', 'Colonia Jocotales', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(50, 'Mejoramiento de Escuela Primaria Oficial Rural Mixta No.2000, ', '1', '6', 'Aldea Sacojito', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(51, 'Mejoramiento de Escuela Primaria Oficial Rural Mixta No.908, ', '1', '6', 'Aldea El Durazno', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(52, 'AmpliaciÃ³n Escuela Primaria, ', '1', '13', 'Colonia San Antonio', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(53, 'AmpliaciÃ³n de Escuela Primaria Oficial Rural Mixta No.80, ', '1', '13', 'Aldea Puerta del SeÃ±or', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(54, 'AmpliaciÃ³n de Instituto Basico, ', '1', '13', 'Aldea Puerta del SeÃ±or ', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(55, 'AmpliaciÃ³n de Instituto Diversificado, ', '1', '13', 'Zona 1', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(56, 'AmpliaciÃ³n Instituto BÃ¡sico, ', '1', '4', 'Cabecera Municipal', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(57, 'Mejoramiento del Sistema de Agua Potable ', '1', '1', '17 avenida a la 23 avenida y de 11 calle A a la 16 Calle Colonia Juanda de Arco Zona 18', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(58, 'Mejoramiento del Sistema de Agua Potable ', '1', '1', '26 Calle 13-02 Planta Santa Luisa Zona 16', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(59, 'Mejoramiento Sistema de Agua Potable ', '1', '1', '9 Calle hacia 14 Calle entre 8 Avenida y 15 Avenida Zona 7 Colonia Castillo Lara Zona 7', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(60, 'Mejoramiento de Sistema de tratamiento de Agua Potable Fosa de Bombeo Neuro Interio de Hospital Neuropsiquiatrico', '1', '1', 'Zona 18', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(61, 'Mejoramiento de Sistema de tratamiento de Agua potable Pozo c-3 ', '1', '1', '15 Calle 22-01 Colonia Alameda III Zona 18', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(62, 'Mejoramiento de Sistema de tratamiento Agua Potable Tanque de Rebombeo El Rodeo ', '1', '1', 'Residenciales Villas de San Rafael Zona 18', '1', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(63, 'ConstrucciÃ³n de Centro de AtenciÃ³n Permanente (CAP)', '1', '3', '', '3', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(64, 'ConstrucciÃ³n de Camino Rural IntersecciÃ³n ', '1', '3', 'Aldea Cienaga Grande con Aldea el Platanar', '4', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(65, 'Mejoramiento de Camino Rural IntersecciÃ³n ', '1', '3', 'Sector Puerta Negra con Sector Letran Aldea San Luis', '4', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(66, 'ConstrucciÃ³n Escuela Primaria Anexo Tipo FederaciÃ³n #2', '1', '15', ' Colonia Venecia 2', '5', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(67, 'Mejoramiento de Sistema de Agua Potable, ', '1', '12', 'Sector el Campo, CantÃ³n Central', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(68, 'AmpliaciÃ³n de Sistema de Agua Potable, ', '1', '5', 'CaserÃ­o Barro Colorado, Aldea Plan Grande', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(69, 'AmpliaciÃ³n de Sistema de Alcantarillado Sanitario, ', '1', '5', 'Aldea Los Mixcos', '6', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(70, 'AmpliaciÃ³n de Sistema de Alcantarillado Sanitario, ', '1', '5', 'Sector Los sauces, CantÃ³n Rincon de la piedra', '6', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(71, 'ConstrucciÃ³n de infraestructura de tratamiento de desechos solidos, ', '1', '5', 'CaserÃ­o El Tabacal', '6', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(72, 'ConstrucciÃ³n de Puente peatonal, ', '1', '5', 'CaserÃ­o Nombre de Dios, Aldea el Manantial', '4', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(73, 'ConstrucciÃ³n de Sistema de Agua Potable, ', '1', '5', 'Aldea Plan Grande', '2', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1'),
(74, 'ConstrucciÃ³n de Sistema de Alcantarillado Sanitario, CantÃ³n Ojo de Agua', '1', '5', '', '6', '1', '0', '0', '0', '0', '2019-06-18 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_proy`
--

CREATE TABLE `enla_proy` (
  `id_proy` int(40) NOT NULL,
  `n_proy` mediumtext NOT NULL,
  `dir_proy` mediumtext NOT NULL,
  `sol_proy` mediumtext NOT NULL,
  `ema_proy` varchar(250) NOT NULL,
  `tel_proy` varchar(250) NOT NULL,
  `prob_proy` mediumtext NOT NULL,
  `desc_proy` mediumtext NOT NULL,
  `bene_proy` varchar(250) NOT NULL,
  `beneindi_proy` varchar(250) NOT NULL,
  `gen_proy` mediumtext NOT NULL,
  `act1_proy` mediumtext NOT NULL,
  `tact1_proy` varchar(250) NOT NULL,
  `act2_proy` mediumtext NOT NULL,
  `tact2_proy` varchar(250) NOT NULL,
  `act3_proy` mediumtext NOT NULL,
  `tact3_proy` varchar(250) NOT NULL,
  `act4_proy` mediumtext NOT NULL,
  `tact4_proy` varchar(250) NOT NULL,
  `act5_proy` mediumtext NOT NULL,
  `tact5_proy` varchar(250) NOT NULL,
  `act6_proy` mediumtext NOT NULL,
  `tact6_proy` varchar(250) NOT NULL,
  `act7_proy` mediumtext NOT NULL,
  `tact7_proy` varchar(250) NOT NULL,
  `act8_proy` mediumtext NOT NULL,
  `tact8_proy` varchar(250) NOT NULL,
  `act9_proy` mediumtext NOT NULL,
  `tact9_proy` varchar(250) NOT NULL,
  `act10_proy` mediumtext NOT NULL,
  `tact10_proy` varchar(250) NOT NULL,
  `gast1_proy` varchar(250) NOT NULL,
  `mgast1_proy` varchar(30) NOT NULL,
  `gast2_proy` varchar(250) NOT NULL,
  `mgast2_proy` varchar(30) NOT NULL,
  `gast3_proy` varchar(250) NOT NULL,
  `mgast3_proy` varchar(30) NOT NULL,
  `gast4_proy` varchar(250) NOT NULL,
  `mgast4_proy` varchar(30) NOT NULL,
  `gast5_proy` varchar(250) NOT NULL,
  `mgast5_proy` varchar(30) NOT NULL,
  `gast6_proy` varchar(250) NOT NULL,
  `mgast6_proy` varchar(30) NOT NULL,
  `gast7_proy` varchar(250) NOT NULL,
  `mgast7_proy` varchar(30) NOT NULL,
  `gast8_proy` varchar(250) NOT NULL,
  `mgast8_proy` varchar(30) NOT NULL,
  `gast9_proy` varchar(250) NOT NULL,
  `mgast9_proy` varchar(30) NOT NULL,
  `gast10_proy` varchar(250) NOT NULL,
  `mgast10_proy` varchar(30) NOT NULL,
  `fec_proy` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_proy`
--

INSERT INTO `enla_proy` (`id_proy`, `n_proy`, `dir_proy`, `sol_proy`, `ema_proy`, `tel_proy`, `prob_proy`, `desc_proy`, `bene_proy`, `beneindi_proy`, `gen_proy`, `act1_proy`, `tact1_proy`, `act2_proy`, `tact2_proy`, `act3_proy`, `tact3_proy`, `act4_proy`, `tact4_proy`, `act5_proy`, `tact5_proy`, `act6_proy`, `tact6_proy`, `act7_proy`, `tact7_proy`, `act8_proy`, `tact8_proy`, `act9_proy`, `tact9_proy`, `act10_proy`, `tact10_proy`, `gast1_proy`, `mgast1_proy`, `gast2_proy`, `mgast2_proy`, `gast3_proy`, `mgast3_proy`, `gast4_proy`, `mgast4_proy`, `gast5_proy`, `mgast5_proy`, `gast6_proy`, `mgast6_proy`, `gast7_proy`, `mgast7_proy`, `gast8_proy`, `mgast8_proy`, `gast9_proy`, `mgast9_proy`, `gast10_proy`, `mgast10_proy`, `fec_proy`) VALUES
(1, 'Hello!  enlazando.gt \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', 'Hello!  enlazando.gt \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', 'Hello!  enlazando.gt \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', 'raphaephony@gmail.com', '84575182358', 'Hello!  enlazando.gt \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', 'Hello!  enlazando.gt \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', 'Mariovom', 'Mariovom', 'Hello!  enlazando.gt \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact partition. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-01 10:36:46'),
(2, 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'george1@georgemartinjr.com', '09542 66 82 89', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', '', '', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-10 19:48:44'),
(3, 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'george1@georgemartinjr.com', '(33) 4179-2844', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', '', '', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to enlazando.gt ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting a post and obtaining a link to enlazando.gt , let me know and we will get it published in a speedy manner to our blog.\r\n\r\nHope to hear from you soon\r\nGeorge', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-13 05:55:59'),
(4, 'We would like to inform that you liked a comment ID:35915743 in a social network , January 9, 2019 at 19:48 \r\nThis like has been randomly selected to win the seasonal &laquo;Like Of The Year&raquo; 2019 award! \r\nhttp://facebook.comÐ¿Ñ˜ÐemailÐ¿Ñ˜Ð@0X4E18DCC7/Ry47ed', 'We would like to inform that you liked a comment ID:35915743 in a social network , January 9, 2019 at 19:48 \r\nThis like has been randomly selected to win the seasonal &laquo;Like Of The Year&raquo; 2019 award! \r\nhttp://facebook.comÐ¿Ñ˜ÐemailÐ¿Ñ˜Ð@0X4E18DCC7/Ry47ed', 'We would like to inform that you liked a comment ID:35915743 in a social network , January 9, 2019 at 19:48 \r\nThis like has been randomly selected to win the seasonal &laquo;Like Of The Year&raquo; 2019 award! \r\nhttp://facebook.comÐ¿Ñ˜ÐemailÐ¿Ñ˜Ð@0X4E18DCC7/Ry47ed', 'office@r49.at', '87417458561', 'We would like to inform that you liked a comment ID:35915743 in a social network , January 9, 2019 at 19:48 \r\nThis like has been randomly selected to win the seasonal &laquo;Like Of The Year&raquo; 2019 award! \r\nhttp://facebook.comÐ¿Ñ˜ÐemailÐ¿Ñ˜Ð@0X4E18DCC7/Ry47ed', 'We would like to inform that you liked a comment ID:35915743 in a social network , January 9, 2019 at 19:48 \r\nThis like has been randomly selected to win the seasonal &laquo;Like Of The Year&raquo; 2019 award! \r\nhttp://facebook.comÐ¿Ñ˜ÐemailÐ¿Ñ˜Ð@0X4E18DCC7/Ry47ed', 'Cherylerrog', 'Cherylerrog', 'We would like to inform that you liked a comment ID:35915743 in a social network , January 9, 2019 at 19:48 \r\nThis like has been randomly selected to win the seasonal &laquo;Like Of The Year&raquo; 2019 award! \r\nhttp://facebook.comÐ¿Ñ˜ÐemailÐ¿Ñ˜Ð@0X4E18DCC7/Ry47ed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-13 13:15:30'),
(5, 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', 'patsySmils@gmail.com', '88287927942', 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', 'MarthaWag', 'MarthaWag', 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-13 14:09:13'),
(6, 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at enlazando.gt .\r\n\r\nYou can submit your post directly to us here:\r\n\r\nwww.worldclass-solutions.space\r\n\r\nGenerally, it can be any general article with a minimum of 500 words, and the more words, the better.\r\n\r\nPlease let me know,\r\nCheers\r\nLucas', 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at enlazando.gt .\r\n\r\nYou can submit your post directly to us here:\r\n\r\nwww.worldclass-solutions.space\r\n\r\nGenerally, it can be any general article with a minimum of 500 words, and the more words, the better.\r\n\r\nPlease let me know,\r\nCheers\r\nLucas', 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at enlazando.gt .\r\n\r\nYou can submit your post directly to us here:\r\n\r\nwww.worldclass-solutions.space\r\n\r\nGenerally, it can be any general article with a minimum of 500 words, and the more words, the better.\r\n\r\nPlease let me know,\r\nCheers\r\nLucas', 'info@wrldclass-solutions.com', '079 4334 0847', 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at enlazando.gt .\r\n\r\nYou can submit your post directly to us here:\r\n\r\nwww.worldclass-solutions.space\r\n\r\nGenerally, it can be any general article with a minimum of 500 words, and the more words, the better.\r\n\r\nPlease let me know,\r\nCheers\r\nLucas', 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at enlazando.gt .\r\n\r\nYou can submit your post directly to us here:\r\n\r\nwww.worldclass-solutions.space\r\n\r\nGenerally, it can be any general article with a minimum of 500 words, and the more words, the better.\r\n\r\nPlease let me know,\r\nCheers\r\nLucas', '', '', 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at enlazando.gt .\r\n\r\nYou can submit your post directly to us here:\r\n\r\nwww.worldclass-solutions.space\r\n\r\nGenerally, it can be any general article with a minimum of 500 words, and the more words, the better.\r\n\r\nPlease let me know,\r\nCheers\r\nLucas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-27 20:54:16'),
(7, 'Hey, http://enlazando.gt!\r\n\r\nDon\'t you wish you were Instagram popular?\r\n\r\nIf you\'re like me, you have rummaged through Instagram, thinking &quot;how do so many darn people on Instagram get so famous&quot;?\r\n\r\nImagine: it is Friday morning and you&rsquo;ve promised yourself you&rsquo;d hit the gym today.\r\n \r\nRoll over, check your phone. \r\n\r\nOpening up Instagram. \r\n\r\nYou&lsquo;re surprised at what you see: Over 738 likes on one of your pictures! There, you can see a a huge amount of likes on your pictures--over 738 on a single photo alone.\r\n \r\nHeading to the kitchen, you put the kettle on for some tea and glance at your Instagram while you wait.\r\n\r\nBam! Another 49 likes. \r\n  \r\nHere comes another one. This time it\'s not a like but a message from one of your followers. They flatter you on your success and let you know they absolutely love your content.\r\n\r\nA grin makes its way on your face as you see another message. This person emailed you to let you know she loves your posts.\r\n \r\nAs you begin to write back, your phone buzzes again.\r\n\r\nOops, another message. But you can&rsquo;t hit them back&mdash;you&rsquo;ve got to hit the gym.\r\nLet\'s stop the simulation there. People have a hard time achieving what they want in life. People can hardly get themselves to eat a good breakfast.\r\n\r\nNow, this is the point in time where you learn to take control of your Instagram.\r\n\r\nNow, what if you raised your engagement by 100%, or 1000%?\r\n \r\nTruth is, it\'s not the most difficult thing in the world to get more. For example, all the old pros use our website.\r\n\r\nAutomagically see tons of likes on your images just minutes after posting.\r\n\r\nThe &quot;Top Post&quot; section, all of a sudden, doesn\'t seem that far away.\r\n\r\nSound too good to be true? Here&rsquo;s what you&rsquo;ve got to do to get a taste:\r\n1. Click https://rhymbo.icu\r\n2. Plug in your Instagram username.\r\n3. 10 - 15 likes are going to be sent to your 3 most recent pictures. Just like that.\r\n\r\nHitting the Top Post page will 10X your InstaGrowth. But you\'ve got to do more than just want it--you\'ve got to do something about it. Are you willing?\r\n\r\nChow for now.', 'How\'s it going, http://enlazando.gt?\r\n\r\nWant to be Instagram famous?\r\n\r\nIf you are like me, you have rummaged through Instagram, thinking &quot;how do so many darn people on Instagram get so rich and famous&quot;?\r\n\r\nPicture this: You wake up early in the morning, even before your alarm buzzes.\r\n \r\nRoll over, check your cellphone. \r\n\r\nNavigate your way to your page. \r\n\r\nHmmm, you think, Over 561 likes on a single picture.\r\n \r\nYou hop out of the bed, meander to the kitchen. You want a drink, so you put the kettle on for some coffee, and check Instagram again.\r\n\r\nBam! Another 49 likes. \r\n  \r\nDing&mdash;a message pops into your inbox from a follower. They\'re asking you for advice on how you manage your food, and are congratulating you on your third month of hitting the gym.\r\n\r\nThe kettle blows and you pour your tea. When you flip out your phone, there is another message--this time from a young girl--thanking you for posting. She follows you religiously and your\'e an inspiration.\r\n \r\nAs you sip your tea, you start typing up your response. But then your cell buzzes.\r\n\r\nWow, ANOTHER message. You close your cell and throw it in the bag. Time for the gym.\r\nLet\'s stop the simulation there. People have a hard time acquiring what they want in life. People can hardly force themselves to eat a good breakfast.\r\n\r\nNow, let&rsquo;s learn to take control of your Instagram.\r\n\r\nImagine if you could raise your engagement by 100%, or 1000%?\r\n \r\nIt is not difficult to do, although almost no one does. Just hit up our website. There, you\'ll learn how to garner Instagram followers and likes like mad...effortlessly.\r\n\r\nAutomagically see tons of likes on your images just minutes after posting.\r\n\r\nThe &quot;Top Post&quot; section, all of a sudden, does not seem that far away.\r\n\r\nAnd because we love you, we made testing things out as simple as kitchen-cooled apple crumble:\r\n1. Visit https://tomm.surf\r\n2. Enter your Instagram username.\r\n3. Your three most recent pictures are getting 10 - 15 likes. Just like that.\r\n\r\nHitting the Top Post page will 10X your Instafame. But you have got to do more than just want it--you\'ve got to do something about it. Are you willing?\r\n\r\nSee you soon.', 'Hey, http://enlazando.gt!\r\n\r\nDo you not wish you could be Instagram famous?\r\n\r\nWell, today I will teach you the best way to totally change forever the way you Instagram.\r\n\r\nNow, imagine that it\'s Friday and you\'ve just woken up from a sound slumber.\r\n \r\nRoll over, check the phone. \r\n\r\nMake your way to your page. \r\n\r\nWhoaaa, you think, Over 800 likes on one picture.\r\n \r\nYou put your soft slippers on and head to the kitchen for some tea. After putting on the kettle, you pull out your phone again.\r\n\r\nBam! Another 38 likes. \r\n  \r\nAnd another message just popped up. It\'s from one of your many fans asking about your diet, and congratulating you on your third official month of practicing yoga.\r\n\r\nThe kettle blows and you pour your tea. When you flip out your phone, there\'s another message--this time from a young girl--thanking you for posting. She follows you religiously and you are an inspiration.\r\n \r\nAs you begin to respond, your cell buzzes again.\r\n\r\nOops, another hit. But no time to write back&mdash;you&rsquo;ve got to hit the gym.\r\nAnyways, you get the point. This is the life of an Instagram celebrity. I should know, because I have made many of them.\r\n\r\nNow, this is the point in time where you learn to take control of your Instagram.\r\n\r\nImagine if you could raise your engagement by 100%, or 1000%?\r\n \r\nIt is not complicated to do, although almost no one does. Just hit up our website. There, you\'ll learn how to garner Instagram followers and likes like mad...without even trying.\r\n\r\nIn just minutes after posting, we get your images piled with likes.\r\n\r\nWith this you have a big chance to be featured in the &quot;Top Post&quot; section.\r\n\r\nThis is all great, but you have actually got to put in the work to make it happen. Actually, it is not real work.\r\n1. Visit https://picturestorm.pw\r\n2. Enter in your Instagram username.\r\n3. 10 - 15 likes will be sent to your 3 most recent pictures. Just like that.\r\n\r\nHitting the Top Post page will 10X your InstaGrowth. But you have got to do more than just want it--you have got to do something about it. Are you willing?\r\n\r\nChow until next time', 'talarico.antonetta@gmail.com', '03.69.16.20.26', 'http://enlazando.gt,\r\n\r\nDo you not wish you could be Instagram famous?\r\n\r\nEver wondered how to be an Instagram Influencer?\r\n\r\nImagine: It&rsquo;s the wee hours of the morning and you&rsquo;ve promised yourself you&rsquo;d go for a run today.\r\n \r\nRoll over, check the cellphone. \r\n\r\nNavigate your way to your page. \r\n\r\nWhoaaa, you think, Over 1000 likes on a single picture.\r\n \r\nHeading to the kitchen, you put the kettle on for some coffee and glance at your Instagram while you wait.\r\n\r\nPresto! Another 87 likes. \r\n  \r\nAnd another message just popped up. It is from some follower asking about your diet, and giving you daps on your sixth official month of going to the gym.\r\n\r\nThe kettle blows and you pour your tea. When you flip out your phone, there is another message--this time from a young girl--thanking you for posting. She follows you religiously and your\'e an inspiration.\r\n \r\nWhile you sip your tea, you start typing up a response. But then your phone buzzes.\r\n\r\nWow, ANOTHER message. You close your phone and throw it in the bag. Time for the gym.\r\nLet\'s stop the simulation there. People have a hard time acquiring what they want in life. People can hardly get themselves to eat a good breakfast.\r\n\r\nMy job is to take people from Instagram anonymous to Insta-celebrity. (It sounds stupid, but results do not lie.)\r\n\r\nImagine if you raised your engagement by 100%, or 1000%?\r\n \r\nTruth is, it\'s not the most complicated thing in the world to get more. For example, all the old pros use our website.\r\n\r\nOur super savvy, confidential service automatically sends likes to your pictures a few minutes after you have posted them.\r\n\r\nIf you are anything like our other clients, you\'ll have a great chance of hitting the &quot;Top Post&quot; section in a very short time.\r\n\r\nSound too good to be true? Just follow these steps to get a taste:\r\n1. Visit https://brightjam.press\r\n2. Enter your Instagram username.\r\n3. Your three most recent uploads are getting 10 - 15 likes. Just like that.\r\n\r\nHitting the Top Post page will 10X your InstaGrowth. But you have got to do more than just want it--you\'ve got to do something about it. Are you willing?\r\n\r\nSee you soon.', 'How\'s it going, http://enlazando.gt?\r\n\r\nWant to be Instagram cool?\r\n\r\nWell, today I will teach you something that will improve the way you Instagram.\r\n\r\nPicture this: You arise early Friday, even before your alarm does.\r\n \r\nRoll over, check your phone. \r\n\r\nClick the Instragram App. \r\n\r\nHmmm, you think, Over 1000 likes on a single picture.\r\n \r\nYou put your fuzzy slippers on and head to the kitchen for some coffee. After putting on the kettle, you pull out your phone again.\r\n\r\nPresto! Another 63 likes. \r\n  \r\nDing&mdash;a message pops into your inbox from a follower. They\'re asking you for advice on how you manage your food, and are congratulating you on your third month of hitting the gym.\r\n\r\nThe kettle blows and you pour your tea. When you flip out your phone, there\'s another message--this time from a young girl--thanking you for posting. She follows you religiously and you are an inspiration.\r\n \r\nAs you begin to write back, your cell buzzes again.\r\n\r\nIt is another message coming in. You glance up at the clock--almost time for the gym. You will have to hit them up later.\r\nListen, http://enlazando.gt, most people just aren\'t in control of their life. Hell, they can&rsquo;t even force themselves to eat a balanced breakfast, much less hit the gym.\r\n\r\nI&rsquo;m here to show you how to take control of your Instagram.\r\n\r\nImagine if you increased your popularity by 100%, or 1000%?\r\n \r\nTruth is, it is not the most complicated thing in the world to get more. As an example, all the old pros use our website.\r\n\r\nOur pro-rated, confidential service automatically sends likes to your pictures a few minutes after you have posted them.\r\n\r\nThe &quot;Top Post&quot; section, all of a sudden, does not seem that far away.\r\n\r\nThis is all great, but you\'ve actually got to put in the work to make it happen. Actually, it is not real work.\r\n1. Visit https://tomm.space\r\n2. Put your Instagram username.\r\n3. 10 - 15 likes are going to be sent to your 3 most recent pictures. Just like that.\r\n\r\nBeing a regular staple on that page will increase your growth 10x, easy.  But if you want the fame, you&rsquo;ve got to reach for it. Are you ready?\r\n\r\nChow until next time', '', '', 'How\'s it going, http://enlazando.gt?\r\n\r\nWant to be Instagram cool?\r\n\r\nWell, today I will teach you the best way to amazingly change the way you Instagram.\r\n\r\nImagine: It&rsquo;s the wee hours of the morning and you&rsquo;ve promised yourself you&rsquo;d hit the gym today.\r\n \r\nYou pull out your phone. \r\n\r\nMake your way to your page. \r\n\r\nYou&lsquo;re surprised at what you see: Over 832 likes on one of your pictures! There, you see a flurry of likes on your pictures--over 652 on a single photo alone.\r\n \r\nYou rise out of the bed, meander to the kitchen. You want a drink, so you put the kettle on for some coffee, and check Instagram again.\r\n\r\nBam! Another 20 likes. \r\n  \r\nAnd here comes another message. It\'s from some follower asking about your diet, and giving you daps on your sixth official month of going to the gym.\r\n\r\nAs you read it, you begin to smile. It is a super attractive person, and they love your posts.\r\n \r\nWithin minutes, your phone buzzes AGAIN.\r\n\r\nWow, ANOTHER message. You close your cell and throw it in the bag. Time for the gym.\r\nAnyways, you get the point. This is the life of an Instagram celebrity. I should know, because I\'ve made many of them.\r\n\r\nMy job is to take people from Instagram nobody to Insta-celebrity. (It sounds ridiculous, but results do not lie.)\r\n\r\nNow, what if you raised your engagement by 100%, or 1000%?\r\n \r\nIt\'s not difficult to do, although almost no one does. Just hit up our website. There, you\'ll learn how to garner Instagram followers and likes like mad...without even trying.\r\n\r\nIn just minutes after posting, we get your images piled with likes.\r\n\r\nIf you\'re anything like our other customers, you\'ll have a great chance of hitting the &quot;Top Post&quot; section in a very short time.\r\n\r\nSound too good to be true? Here&rsquo;s what you have got to do to get a taste:\r\n1. Visit https://rhymbo.casa\r\n2. Put your Instagram username.\r\n3. The three pictures you posted last will get 10 - 15 likes. Just like that.\r\n\r\nHitting the Top Post page will 10X your Instafame. But you\'ve got to do more than just want it--you have got to do something about it. Are you willing?\r\n\r\nHappy image-uploading.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-11 05:02:30'),
(8, 'When you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with DA above 15-20 and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nOrder this great service from here today: \r\nhttps://monkeydigital.co/product/unique-domains-backlinks/ \r\n \r\nMultiple offers available \r\n \r\nthanks and regards \r\nMike \r\nsupport@monkeydigital.co', 'When you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with DA above 15-20 and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nOrder this great service from here today: \r\nhttps://monkeydigital.co/product/unique-domains-backlinks/ \r\n \r\nMultiple offers available \r\n \r\nthanks and regards \r\nMike \r\nsupport@monkeydigital.co', 'When you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with DA above 15-20 and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nOrder this great service from here today: \r\nhttps://monkeydigital.co/product/unique-domains-backlinks/ \r\n \r\nMultiple offers available \r\n \r\nthanks and regards \r\nMike \r\nsupport@monkeydigital.co', 'rodgerLialL@outlook.com', '86186725111', 'When you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with DA above 15-20 and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nOrder this great service from here today: \r\nhttps://monkeydigital.co/product/unique-domains-backlinks/ \r\n \r\nMultiple offers available \r\n \r\nthanks and regards \r\nMike \r\nsupport@monkeydigital.co', 'When you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with DA above 15-20 and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nOrder this great service from here today: \r\nhttps://monkeydigital.co/product/unique-domains-backlinks/ \r\n \r\nMultiple offers available \r\n \r\nthanks and regards \r\nMike \r\nsupport@monkeydigital.co', 'MikeImism', 'MikeImism', 'When you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with DA above 15-20 and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nOrder this great service from here today: \r\nhttps://monkeydigital.co/product/unique-domains-backlinks/ \r\n \r\nMultiple offers available \r\n \r\nthanks and regards \r\nMike \r\nsupport@monkeydigital.co', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-12 07:14:15'),
(9, 'Dear Customer, \r\n \r\nAre you satisfied with your current CCTV on quality and service? Tired of cameras that always broke down easily? \r\n \r\nDon\'t worry, We manufacture High-Definition Security Surveillance Systems for Residential &amp; Commercial uses. All our cameras are metal weatherproof and comes with sony sensor for maximum quality. \r\nIPcam video quality: https://youtu.be/VPG82dnXfWY \r\n \r\n+44 330-024-0982 \r\n+1 866-655-7056 \r\n+91 96508-01219 \r\n+65 6678-6557 \r\nEmail: sales@revlightsecurity.com \r\nW: http://www.revlightsecurity.com/ \r\n \r\nHave a nice day! :) \r\n \r\nregards, \r\nJessie Chang \r\n7 Temasek Boulevard, Level 32, Suntec Tower One, Singapore 038987', 'Dear Customer, \r\n \r\nAre you satisfied with your current CCTV on quality and service? Tired of cameras that always broke down easily? \r\n \r\nDon\'t worry, We manufacture High-Definition Security Surveillance Systems for Residential &amp; Commercial uses. All our cameras are metal weatherproof and comes with sony sensor for maximum quality. \r\nIPcam video quality: https://youtu.be/VPG82dnXfWY \r\n \r\n+44 330-024-0982 \r\n+1 866-655-7056 \r\n+91 96508-01219 \r\n+65 6678-6557 \r\nEmail: sales@revlightsecurity.com \r\nW: http://www.revlightsecurity.com/ \r\n \r\nHave a nice day! :) \r\n \r\nregards, \r\nJessie Chang \r\n7 Temasek Boulevard, Level 32, Suntec Tower One, Singapore 038987', 'Dear Customer, \r\n \r\nAre you satisfied with your current CCTV on quality and service? Tired of cameras that always broke down easily? \r\n \r\nDon\'t worry, We manufacture High-Definition Security Surveillance Systems for Residential &amp; Commercial uses. All our cameras are metal weatherproof and comes with sony sensor for maximum quality. \r\nIPcam video quality: https://youtu.be/VPG82dnXfWY \r\n \r\n+44 330-024-0982 \r\n+1 866-655-7056 \r\n+91 96508-01219 \r\n+65 6678-6557 \r\nEmail: sales@revlightsecurity.com \r\nW: http://www.revlightsecurity.com/ \r\n \r\nHave a nice day! :) \r\n \r\nregards, \r\nJessie Chang \r\n7 Temasek Boulevard, Level 32, Suntec Tower One, Singapore 038987', 'info2@revlight.com.sg', '89858347813', 'Dear Customer, \r\n \r\nAre you satisfied with your current CCTV on quality and service? Tired of cameras that always broke down easily? \r\n \r\nDon\'t worry, We manufacture High-Definition Security Surveillance Systems for Residential &amp; Commercial uses. All our cameras are metal weatherproof and comes with sony sensor for maximum quality. \r\nIPcam video quality: https://youtu.be/VPG82dnXfWY \r\n \r\n+44 330-024-0982 \r\n+1 866-655-7056 \r\n+91 96508-01219 \r\n+65 6678-6557 \r\nEmail: sales@revlightsecurity.com \r\nW: http://www.revlightsecurity.com/ \r\n \r\nHave a nice day! :) \r\n \r\nregards, \r\nJessie Chang \r\n7 Temasek Boulevard, Level 32, Suntec Tower One, Singapore 038987', 'Dear Customer, \r\n \r\nAre you satisfied with your current CCTV on quality and service? Tired of cameras that always broke down easily? \r\n \r\nDon\'t worry, We manufacture High-Definition Security Surveillance Systems for Residential &amp; Commercial uses. All our cameras are metal weatherproof and comes with sony sensor for maximum quality. \r\nIPcam video quality: https://youtu.be/VPG82dnXfWY \r\n \r\n+44 330-024-0982 \r\n+1 866-655-7056 \r\n+91 96508-01219 \r\n+65 6678-6557 \r\nEmail: sales@revlightsecurity.com \r\nW: http://www.revlightsecurity.com/ \r\n \r\nHave a nice day! :) \r\n \r\nregards, \r\nJessie Chang \r\n7 Temasek Boulevard, Level 32, Suntec Tower One, Singapore 038987', 'HelenEluts', 'HelenEluts', 'Dear Customer, \r\n \r\nAre you satisfied with your current CCTV on quality and service? Tired of cameras that always broke down easily? \r\n \r\nDon\'t worry, We manufacture High-Definition Security Surveillance Systems for Residential &amp; Commercial uses. All our cameras are metal weatherproof and comes with sony sensor for maximum quality. \r\nIPcam video quality: https://youtu.be/VPG82dnXfWY \r\n \r\n+44 330-024-0982 \r\n+1 866-655-7056 \r\n+91 96508-01219 \r\n+65 6678-6557 \r\nEmail: sales@revlightsecurity.com \r\nW: http://www.revlightsecurity.com/ \r\n \r\nHave a nice day! :) \r\n \r\nregards, \r\nJessie Chang \r\n7 Temasek Boulevard, Level 32, Suntec Tower One, Singapore 038987', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-16 04:15:03'),
(10, 'Hi enlazando.gt admin, \r\n \r\n \r\nSee, ClickBank is going to BREAK the Internet. \r\nThey&rsquo;re doing something SO CRAZY, it might just tear the Internet at its seams. \r\n \r\nInstead of selling our 3-Part &ldquo;ClickBank Breaks The Internet&rdquo; Extravaganza Series&hellip; They&rsquo;re giving it to you at no cost but you need to get it now or it will be gone! \r\n \r\nWatch Top Online Earners Reveal How They Can Make THOUSANDS IN JUST HOURS: https://millionairesfilm.com \r\n \r\nHere&rsquo;s to kicking off the Fall season right!', 'Hi enlazando.gt admin, \r\n \r\n \r\nSee, ClickBank is going to BREAK the Internet. \r\nThey&rsquo;re doing something SO CRAZY, it might just tear the Internet at its seams. \r\n \r\nInstead of selling our 3-Part &ldquo;ClickBank Breaks The Internet&rdquo; Extravaganza Series&hellip; They&rsquo;re giving it to you at no cost but you need to get it now or it will be gone! \r\n \r\nWatch Top Online Earners Reveal How They Can Make THOUSANDS IN JUST HOURS: https://millionairesfilm.com \r\n \r\nHere&rsquo;s to kicking off the Fall season right!', 'Hi enlazando.gt admin, \r\n \r\n \r\nSee, ClickBank is going to BREAK the Internet. \r\nThey&rsquo;re doing something SO CRAZY, it might just tear the Internet at its seams. \r\n \r\nInstead of selling our 3-Part &ldquo;ClickBank Breaks The Internet&rdquo; Extravaganza Series&hellip; They&rsquo;re giving it to you at no cost but you need to get it now or it will be gone! \r\n \r\nWatch Top Online Earners Reveal How They Can Make THOUSANDS IN JUST HOURS: https://millionairesfilm.com \r\n \r\nHere&rsquo;s to kicking off the Fall season right!', 'cbu@cyberdude.com', '88538516341', 'Hi enlazando.gt admin, \r\n \r\n \r\nSee, ClickBank is going to BREAK the Internet. \r\nThey&rsquo;re doing something SO CRAZY, it might just tear the Internet at its seams. \r\n \r\nInstead of selling our 3-Part &ldquo;ClickBank Breaks The Internet&rdquo; Extravaganza Series&hellip; They&rsquo;re giving it to you at no cost but you need to get it now or it will be gone! \r\n \r\nWatch Top Online Earners Reveal How They Can Make THOUSANDS IN JUST HOURS: https://millionairesfilm.com \r\n \r\nHere&rsquo;s to kicking off the Fall season right!', 'Hi enlazando.gt admin, \r\n \r\n \r\nSee, ClickBank is going to BREAK the Internet. \r\nThey&rsquo;re doing something SO CRAZY, it might just tear the Internet at its seams. \r\n \r\nInstead of selling our 3-Part &ldquo;ClickBank Breaks The Internet&rdquo; Extravaganza Series&hellip; They&rsquo;re giving it to you at no cost but you need to get it now or it will be gone! \r\n \r\nWatch Top Online Earners Reveal How They Can Make THOUSANDS IN JUST HOURS: https://millionairesfilm.com \r\n \r\nHere&rsquo;s to kicking off the Fall season right!', 'RobertGog', 'RobertGog', 'Hi enlazando.gt admin, \r\n \r\n \r\nSee, ClickBank is going to BREAK the Internet. \r\nThey&rsquo;re doing something SO CRAZY, it might just tear the Internet at its seams. \r\n \r\nInstead of selling our 3-Part &ldquo;ClickBank Breaks The Internet&rdquo; Extravaganza Series&hellip; They&rsquo;re giving it to you at no cost but you need to get it now or it will be gone! \r\n \r\nWatch Top Online Earners Reveal How They Can Make THOUSANDS IN JUST HOURS: https://millionairesfilm.com \r\n \r\nHere&rsquo;s to kicking off the Fall season right!', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-10-21 20:54:51');
INSERT INTO `enla_proy` (`id_proy`, `n_proy`, `dir_proy`, `sol_proy`, `ema_proy`, `tel_proy`, `prob_proy`, `desc_proy`, `bene_proy`, `beneindi_proy`, `gen_proy`, `act1_proy`, `tact1_proy`, `act2_proy`, `tact2_proy`, `act3_proy`, `tact3_proy`, `act4_proy`, `tact4_proy`, `act5_proy`, `tact5_proy`, `act6_proy`, `tact6_proy`, `act7_proy`, `tact7_proy`, `act8_proy`, `tact8_proy`, `act9_proy`, `tact9_proy`, `act10_proy`, `tact10_proy`, `gast1_proy`, `mgast1_proy`, `gast2_proy`, `mgast2_proy`, `gast3_proy`, `mgast3_proy`, `gast4_proy`, `mgast4_proy`, `gast5_proy`, `mgast5_proy`, `gast6_proy`, `mgast6_proy`, `gast7_proy`, `mgast7_proy`, `gast8_proy`, `mgast8_proy`, `gast9_proy`, `mgast9_proy`, `gast10_proy`, `mgast10_proy`, `fec_proy`) VALUES
(11, 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nBuy your drugs without prescription currently in stock at FastyPharma https://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods (*worldwide). \r\nOur popular categories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://ww.fastypharma.com/ \r\n \r\nContact us directly via Live chat on our site, or email us at support@fastypharma.com, we are available 24h/7 to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma&reg;', 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nBuy your drugs without prescription currently in stock at FastyPharma https://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods (*worldwide). \r\nOur popular categories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://ww.fastypharma.com/ \r\n \r\nContact us directly via Live chat on our site, or email us at support@fastypharma.com, we are available 24h/7 to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma&reg;', 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nBuy your drugs without prescription currently in stock at FastyPharma https://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods (*worldwide). \r\nOur popular categories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://ww.fastypharma.com/ \r\n \r\nContact us directly via Live chat on our site, or email us at support@fastypharma.com, we are available 24h/7 to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma&reg;', 'salesrep@fastypharma.com', '87646197445', 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nBuy your drugs without prescription currently in stock at FastyPharma https://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods (*worldwide). \r\nOur popular categories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://ww.fastypharma.com/ \r\n \r\nContact us directly via Live chat on our site, or email us at support@fastypharma.com, we are available 24h/7 to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma&reg;', 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nBuy your drugs without prescription currently in stock at FastyPharma https://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods (*worldwide). \r\nOur popular categories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://ww.fastypharma.com/ \r\n \r\nContact us directly via Live chat on our site, or email us at support@fastypharma.com, we are available 24h/7 to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma&reg;', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nBuy your drugs without prescription currently in stock at FastyPharma https://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods (*worldwide). \r\nOur popular categories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://ww.fastypharma.com/ \r\n \r\nContact us directly via Live chat on our site, or email us at support@fastypharma.com, we are available 24h/7 to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma&reg;', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', 'https://ww.fastypharma.com/', '2019-10-24 21:01:03'),
(12, 'æ‚¨çŸ¥é“ç›®å‰åŠ å¯†è´§å¸å¸‚åœºæœ€èµšé’±å—ï¼Ÿ \r\næ‚¨å¯èƒ½å·²ç»å¬è¯´ï¼Œç”±äºŽæ¯”ç‰¹å¸å’Œå…¶ä»–åŒºå—é“¾ç¤¾åŒºé¡¹ç›®ï¼Œè®¸å¤šäººå·²ç»æˆä¸ºåƒä¸‡å¯Œç¿ã€‚ \r\n \r\nä½†æ˜¯æ‚¨çŸ¥é“å—ï¼ŒåŒºå—é“¾ç¤¾åŒºå†…éƒ¨çš„äº’åŠ¨ä¸ºæ¯ä¸ªé¡¹ç›®å‚ä¸Žè€…å¸¦æ¥äº†åˆ©æ¶¦+ä¸ªäººè¥ä¸šé¢çš„10ï¼…ï¼Œè€Œä¸”è¿™ç§æƒ…å†µæ¯2å¤©å‘ç”Ÿä¸€æ¬¡ã€‚ \r\nä½†æ˜¯æ‚¨çŸ¥é“æ‚¨ä¸ªäººæœ‰è¿™æ ·çš„æœºä¼šå—ï¼Ÿ \r\n \r\næˆä¸ºç¤¾åŒºçš„ä¸€éƒ¨åˆ†ï¼Œå¹¶åœ¨åŠ å¯†è´§å¸çš„æ”¯æŒä¸‹èµšé’±ï¼ \r\næŠ¥åï¼šhttps://www.crypto-mmm.com/?source=ch', 'æ‚¨çŸ¥é“ç›®å‰åŠ å¯†è´§å¸å¸‚åœºæœ€èµšé’±å—ï¼Ÿ \r\næ‚¨å¯èƒ½å·²ç»å¬è¯´ï¼Œç”±äºŽæ¯”ç‰¹å¸å’Œå…¶ä»–åŒºå—é“¾ç¤¾åŒºé¡¹ç›®ï¼Œè®¸å¤šäººå·²ç»æˆä¸ºåƒä¸‡å¯Œç¿ã€‚ \r\n \r\nä½†æ˜¯æ‚¨çŸ¥é“å—ï¼ŒåŒºå—é“¾ç¤¾åŒºå†…éƒ¨çš„äº’åŠ¨ä¸ºæ¯ä¸ªé¡¹ç›®å‚ä¸Žè€…å¸¦æ¥äº†åˆ©æ¶¦+ä¸ªäººè¥ä¸šé¢çš„10ï¼…ï¼Œè€Œä¸”è¿™ç§æƒ…å†µæ¯2å¤©å‘ç”Ÿä¸€æ¬¡ã€‚ \r\nä½†æ˜¯æ‚¨çŸ¥é“æ‚¨ä¸ªäººæœ‰è¿™æ ·çš„æœºä¼šå—ï¼Ÿ \r\n \r\næˆä¸ºç¤¾åŒºçš„ä¸€éƒ¨åˆ†ï¼Œå¹¶åœ¨åŠ å¯†è´§å¸çš„æ”¯æŒä¸‹èµšé’±ï¼ \r\næŠ¥åï¼šhttps://www.crypto-mmm.com/?source=ch', 'æ‚¨çŸ¥é“ç›®å‰åŠ å¯†è´§å¸å¸‚åœºæœ€èµšé’±å—ï¼Ÿ \r\næ‚¨å¯èƒ½å·²ç»å¬è¯´ï¼Œç”±äºŽæ¯”ç‰¹å¸å’Œå…¶ä»–åŒºå—é“¾ç¤¾åŒºé¡¹ç›®ï¼Œè®¸å¤šäººå·²ç»æˆä¸ºåƒä¸‡å¯Œç¿ã€‚ \r\n \r\nä½†æ˜¯æ‚¨çŸ¥é“å—ï¼ŒåŒºå—é“¾ç¤¾åŒºå†…éƒ¨çš„äº’åŠ¨ä¸ºæ¯ä¸ªé¡¹ç›®å‚ä¸Žè€…å¸¦æ¥äº†åˆ©æ¶¦+ä¸ªäººè¥ä¸šé¢çš„10ï¼…ï¼Œè€Œä¸”è¿™ç§æƒ…å†µæ¯2å¤©å‘ç”Ÿä¸€æ¬¡ã€‚ \r\nä½†æ˜¯æ‚¨çŸ¥é“æ‚¨ä¸ªäººæœ‰è¿™æ ·çš„æœºä¼šå—ï¼Ÿ \r\n \r\næˆä¸ºç¤¾åŒºçš„ä¸€éƒ¨åˆ†ï¼Œå¹¶åœ¨åŠ å¯†è´§å¸çš„æ”¯æŒä¸‹èµšé’±ï¼ \r\næŠ¥åï¼šhttps://www.crypto-mmm.com/?source=ch', 'anthonyclAdo@gmail.com', '85718314411', 'æ‚¨çŸ¥é“ç›®å‰åŠ å¯†è´§å¸å¸‚åœºæœ€èµšé’±å—ï¼Ÿ \r\næ‚¨å¯èƒ½å·²ç»å¬è¯´ï¼Œç”±äºŽæ¯”ç‰¹å¸å’Œå…¶ä»–åŒºå—é“¾ç¤¾åŒºé¡¹ç›®ï¼Œè®¸å¤šäººå·²ç»æˆä¸ºåƒä¸‡å¯Œç¿ã€‚ \r\n \r\nä½†æ˜¯æ‚¨çŸ¥é“å—ï¼ŒåŒºå—é“¾ç¤¾åŒºå†…éƒ¨çš„äº’åŠ¨ä¸ºæ¯ä¸ªé¡¹ç›®å‚ä¸Žè€…å¸¦æ¥äº†åˆ©æ¶¦+ä¸ªäººè¥ä¸šé¢çš„10ï¼…ï¼Œè€Œä¸”è¿™ç§æƒ…å†µæ¯2å¤©å‘ç”Ÿä¸€æ¬¡ã€‚ \r\nä½†æ˜¯æ‚¨çŸ¥é“æ‚¨ä¸ªäººæœ‰è¿™æ ·çš„æœºä¼šå—ï¼Ÿ \r\n \r\næˆä¸ºç¤¾åŒºçš„ä¸€éƒ¨åˆ†ï¼Œå¹¶åœ¨åŠ å¯†è´§å¸çš„æ”¯æŒä¸‹èµšé’±ï¼ \r\næŠ¥åï¼šhttps://www.crypto-mmm.com/?source=ch', 'æ‚¨çŸ¥é“ç›®å‰åŠ å¯†è´§å¸å¸‚åœºæœ€èµšé’±å—ï¼Ÿ \r\næ‚¨å¯èƒ½å·²ç»å¬è¯´ï¼Œç”±äºŽæ¯”ç‰¹å¸å’Œå…¶ä»–åŒºå—é“¾ç¤¾åŒºé¡¹ç›®ï¼Œè®¸å¤šäººå·²ç»æˆä¸ºåƒä¸‡å¯Œç¿ã€‚ \r\n \r\nä½†æ˜¯æ‚¨çŸ¥é“å—ï¼ŒåŒºå—é“¾ç¤¾åŒºå†…éƒ¨çš„äº’åŠ¨ä¸ºæ¯ä¸ªé¡¹ç›®å‚ä¸Žè€…å¸¦æ¥äº†åˆ©æ¶¦+ä¸ªäººè¥ä¸šé¢çš„10ï¼…ï¼Œè€Œä¸”è¿™ç§æƒ…å†µæ¯2å¤©å‘ç”Ÿä¸€æ¬¡ã€‚ \r\nä½†æ˜¯æ‚¨çŸ¥é“æ‚¨ä¸ªäººæœ‰è¿™æ ·çš„æœºä¼šå—ï¼Ÿ \r\n \r\næˆä¸ºç¤¾åŒºçš„ä¸€éƒ¨åˆ†ï¼Œå¹¶åœ¨åŠ å¯†è´§å¸çš„æ”¯æŒä¸‹èµšé’±ï¼ \r\næŠ¥åï¼šhttps://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'æ‚¨çŸ¥é“ç›®å‰åŠ å¯†è´§å¸å¸‚åœºæœ€èµšé’±å—ï¼Ÿ \r\næ‚¨å¯èƒ½å·²ç»å¬è¯´ï¼Œç”±äºŽæ¯”ç‰¹å¸å’Œå…¶ä»–åŒºå—é“¾ç¤¾åŒºé¡¹ç›®ï¼Œè®¸å¤šäººå·²ç»æˆä¸ºåƒä¸‡å¯Œç¿ã€‚ \r\n \r\nä½†æ˜¯æ‚¨çŸ¥é“å—ï¼ŒåŒºå—é“¾ç¤¾åŒºå†…éƒ¨çš„äº’åŠ¨ä¸ºæ¯ä¸ªé¡¹ç›®å‚ä¸Žè€…å¸¦æ¥äº†åˆ©æ¶¦+ä¸ªäººè¥ä¸šé¢çš„10ï¼…ï¼Œè€Œä¸”è¿™ç§æƒ…å†µæ¯2å¤©å‘ç”Ÿä¸€æ¬¡ã€‚ \r\nä½†æ˜¯æ‚¨çŸ¥é“æ‚¨ä¸ªäººæœ‰è¿™æ ·çš„æœºä¼šå—ï¼Ÿ \r\n \r\næˆä¸ºç¤¾åŒºçš„ä¸€éƒ¨åˆ†ï¼Œå¹¶åœ¨åŠ å¯†è´§å¸çš„æ”¯æŒä¸‹èµšé’±ï¼ \r\næŠ¥åï¼šhttps://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', 'https://www.crypto-mmm.com/?source=ch', 'https://www.crypto-mmm.com/?so', '2019-10-29 16:37:56'),
(13, 'Hello!  enlazando.gt \r\n \r\nHave you ever heard that you can send a message through the feedback form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', 'Hello!  enlazando.gt \r\n \r\nHave you ever heard that you can send a message through the feedback form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', 'Hello!  enlazando.gt \r\n \r\nHave you ever heard that you can send a message through the feedback form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', 'raphaephony@gmail.com', '82591865795', 'Hello!  enlazando.gt \r\n \r\nHave you ever heard that you can send a message through the feedback form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', 'Hello!  enlazando.gt \r\n \r\nHave you ever heard that you can send a message through the feedback form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', 'MichaelBat', 'MichaelBat', 'Hello!  enlazando.gt \r\n \r\nHave you ever heard that you can send a message through the feedback form? \r\nThese forms are located on many sites. We sent you our message in the same way, and the fact that you received and read it shows the effectiveness of this method of sending messages. \r\nSince people in any case will read the offer received through the contact form. \r\nOur database includes more than 35 million websites from all over the world. \r\nThe price of sending one million messages 49 USD. \r\nThere is a discount program for large orders. \r\n \r\nFree proof mailing of 50,000 messages to any country of your choice. \r\n \r\n(We also provide other services. \r\n1. Mailing email message to corporate addresses of any country \r\n2. Selling the email database of any country in the world) \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-11-16 21:13:01'),
(14, 'https://drive.google.com/file/d/1d7YoE1LQW14mxUDl4oyxtagCLeZ6Rrh0/preview', 'https://drive.google.com/file/d/1d7YoE1LQW14mxUDl4oyxtagCLeZ6Rrh0/preview', 'https://drive.google.com/file/d/1d7YoE1LQW14mxUDl4oyxtagCLeZ6Rrh0/preview', 'simpleaudience@mail.ru', '89824597865', 'https://drive.google.com/file/d/1d7YoE1LQW14mxUDl4oyxtagCLeZ6Rrh0/preview', 'https://drive.google.com/file/d/1d7YoE1LQW14mxUDl4oyxtagCLeZ6Rrh0/preview', 'https://drive.google.com/file/d/1B3ffyndsVbxu1rX5_5ySxOTbTZbRvmiC/preview', 'https://drive.google.com/file/d/1BBcvmPhrWAUif4bY9t7QP9rO8TIY2pVk/preview', 'https://drive.google.com/file/d/1d7YoE1LQW14mxUDl4oyxtagCLeZ6Rrh0/preview', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-11-19 23:20:50'),
(15, 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2ryMc6U', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2ryMc6U', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2ryMc6U', 'anthonyclAdo@gmail.com', '86472882163', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2ryMc6U', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2ryMc6U', 'ThomasAnderson', 'ThomasAnderson', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successful person write: \r\nTelegram: @Tom_proinvest \r\nSkype: live:.cid.18b402177db5105c             Thomas Anderson \r\n \r\nhttp://bit.ly/2ryMc6U', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-03 00:52:04'),
(16, 'Donaci&oacute;n de  45 Tablet Marca Samsung A7 ', 'Educaci&oacute;n ', 'Dany Gonz&aacute;lez Fuentes ', 'dalexiacademia@gmail.com', '40319178', 'Los estudiantes no cuentan con dispositivos electr&oacute;nicos adecuados para poder recibir clases de manera h&iacute;brida &quot;presencial- virtual&quot;', 'Implementaci&oacute;n de tablet a estudiantes del nivel b&aacute;sico de Instituto de Telesecundaria de Aldea San Jos&eacute; Rio Hondo San Lorenzo San Marcos ', '45 estudiantes y 3 docentes ', 'Reducir la brecha educativa de los aprendizajes en tiempo de pandemia, evitar la deserci&oacute;n escolar, evitar la migraci&oacute;n a Estados Unidos y sobre todo adquirir habilidades tecnologicas para el desarrollo de las competencias del CNB  ', 'Implementar tecnolog&iacute;a educativa a los estudiantes de nivel medio del Instituto de Telesecundaria de aldea San Jos&eacute; Rio Hondo.', 'Adquirir las tablet para el mes de febrero del 2022 para el inicio de clases ', '45 beneficiarios ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Donaciones de  45 tablet marca Samsun A7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-11-27 17:48:49'),
(17, 'Buy Cheap Online Uk Viagra https://newfasttadalafil.com/ - cialis generic online Cheap Cialis Next Day Shipping Htzflg &lt;a href=https://newfasttadalafil.com/&gt;Cialis&lt;/a&gt; https://newfasttadalafil.com/ - buying cialis online The incision is repaired by perineorrhaphy. Smafrp', 'Buy Cheap Online Uk Viagra https://newfasttadalafil.com/ - cialis generic online Cheap Cialis Next Day Shipping Htzflg &lt;a href=https://newfasttadalafil.com/&gt;Cialis&lt;/a&gt; https://newfasttadalafil.com/ - buying cialis online The incision is repaired by perineorrhaphy. Smafrp', 'Buy Cheap Online Uk Viagra https://newfasttadalafil.com/ - cialis generic online Cheap Cialis Next Day Shipping Htzflg &lt;a href=https://newfasttadalafil.com/&gt;Cialis&lt;/a&gt; https://newfasttadalafil.com/ - buying cialis online The incision is repaired by perineorrhaphy. Smafrp', 'Loyaxytor@newtopmail.xyz', '82268691244', 'Buy Cheap Online Uk Viagra https://newfasttadalafil.com/ - cialis generic online Cheap Cialis Next Day Shipping Htzflg &lt;a href=https://newfasttadalafil.com/&gt;Cialis&lt;/a&gt; https://newfasttadalafil.com/ - buying cialis online The incision is repaired by perineorrhaphy. Smafrp', 'Buy Cheap Online Uk Viagra https://newfasttadalafil.com/ - cialis generic online Cheap Cialis Next Day Shipping Htzflg &lt;a href=https://newfasttadalafil.com/&gt;Cialis&lt;/a&gt; https://newfasttadalafil.com/ - buying cialis online The incision is repaired by perineorrhaphy. Smafrp', 'Loyaxytor', '', 'Buy Cheap Online Uk Viagra https://newfasttadalafil.com/ - cialis generic online Cheap Cialis Next Day Shipping Htzflg &lt;a href=https://newfasttadalafil.com/&gt;Cialis&lt;/a&gt; https://newfasttadalafil.com/ - buying cialis online The incision is repaired by perineorrhaphy. Smafrp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-06-07 09:03:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_sele`
--

CREATE TABLE `enla_sele` (
  `id_sele` int(60) NOT NULL,
  `n_sele` varchar(240) NOT NULL,
  `preg_sele` varchar(20) NOT NULL,
  `fec_sele` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `us_sele` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_solayu`
--

CREATE TABLE `enla_solayu` (
  `id_solayu` int(60) NOT NULL,
  `tip_solayu` varchar(10) NOT NULL,
  `org_solayu` varchar(10) NOT NULL,
  `dona_solayu` mediumtext NOT NULL,
  `desc_solayu` mediumtext NOT NULL,
  `cost_solayu` float(10,2) NOT NULL,
  `fe_solayu` date NOT NULL,
  `st_solayu` varchar(10) NOT NULL DEFAULT '1',
  `asig_solayu` varchar(10) NOT NULL DEFAULT '0',
  `fec_solayu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usr_solayu` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_solayu`
--

INSERT INTO `enla_solayu` (`id_solayu`, `tip_solayu`, `org_solayu`, `dona_solayu`, `desc_solayu`, `cost_solayu`, `fe_solayu`, `st_solayu`, `asig_solayu`, `fec_solayu`, `usr_solayu`) VALUES
(1, '1', '1', 'Necesito recursos para capacitaciones', 'Actualización de mi personal', 0.00, '2020-03-15', '1', '0', '2020-04-05 17:09:09', '1'),
(2, '1', '84', 'materiales de contrucción', 'para finalizar mi casa', 0.00, '2021-09-04', '1', '0', '2021-09-16 16:37:20', '79'),
(3, '1', '84', 'Capital para inicio de construcción', 'Construcción de escuela publica , ubicada en una zona rural', 0.00, '2021-12-01', '1', '0', '2021-12-01 15:40:25', '104'),
(4, '1', '84', 'Capital para la construir apartamentos para inmigrantes.', 'Apartamentos temporales, para gente que esta de paso y tiene alguna emergencia', 0.00, '2021-12-01', '1', '0', '2021-12-01 16:05:28', '104'),
(5, '3', '97', 'El amor hace la diferencia, con tu ayuda transformamos el futuro de los niños del Hogar del niño minusválido del hermano Pedro, que cuida a 70 niños con necesidades distintas.', 'Necesitan alimentos, insumos de limpieza, insumos de cuidado personal, insumos médicos y electrodomésticos en buen estado. Contamos con centro de acopio para donaciones en especie: en Fundación Paiz Guatemala ciudad y en Cámara de Comerio de Quetzaltenango.', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:07:29', '117'),
(6, '1', '97', 'El amor hace la diferencia. Puedes realizar tus donaciones en efectivo para que juntos transformemos el futuro de los niños del Hogar del niño minusválido del Hermano Pedro', 'Los niños del Hogar del niño minusválido del Hermano Pedro, necesitan tu ayuda, con donaciones en especie de alimentos, insumos de limpieza, insumos de cuidado personal, insumos médicos y electrodomésticos en buen estado que mejore sus condiciones de vida en el hogar.', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:10:30', '117'),
(7, '1', '97', 'Los adultos mayores de los comedores Bethania y Casa central necesitan de tu ayuda para poder mejorar la dieta que se les sirve cada día.', 'Con tu donación podemos mejorar la calidad de dieta de los adultos mayores que viven en situación vulnerable. Ayúdanos donando en efectivo para mejorar su alimentación. Puedes realizar tus donaciones a la cuenta monetaria de Bac credomatic a nombre de Fundación Paiz #704101911', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:30:34', '117'),
(8, '3', '97', 'Apoyemos a mejorar la calidad de vida de los adultos mayores en situación vulnerable de los comedores Bethania y Casa Central', 'Con tu ayuda podemos mejorar la calidad de vida de los adultos mayores, los comedores necesitan: Insumos de limpieza, alimentos como carne, verduras, granos, avena, leche, electrodomésticos en buen estado.', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:34:29', '117'),
(9, '2', '97', 'Ayúdanos a mejorar la calidad de vida de los adultos mayores que apoya el comedor Bethania en zona 5 y Casa Central en zona 1.', 'Donando tu tiempo generas muchas sonrisas a los abuelitos que lo necesitan de los comedores Bethania y Casa Central. Necesitamos personas como tú que deseen donar tiempo para servir, cocinar, jugar, brindar servicios y pasar un lindo momento con adultos mayores que se encuentran en situación vulnerable.', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:38:30', '117'),
(10, '1', '97', 'Dales una oportunidad a jóvenes en riesgo social que desean continuar con sus estudios.', 'Te invitamos a ser padrino de las becas escolares que cada año brinda Fundación Paiz, por más de 40 años consecutivos becamos a jóvenes que desean continuar con sus estudios, nuestro programa les permite concluir sus estudios y transformar su vida por medio de la educación. Se un Giravidas', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:44:04', '117'),
(11, '3', '97', 'Dales una oportunidad a jóvenes en riesgo social que desean continuar con sus estudios.', 'Ayuda a que jóvenes en riesgo social que desean continuar con sus estudios. Donando libros, computadoras en buen estado y alimentos para apoyar a nuestros becarios.', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:46:34', '117'),
(12, '2', '97', 'Dales una oportunidad a jovenes en riesgo social que desean continuar con sus estudios.', 'Nuestros becarios necesitan tu ayuda. Con tu tiempo puedes ayudarles a mantener su promedio académico puedes dar tutorías, asesoría psicológica, clases virtuales, capacitaciones para maestros, etc. ', 0.00, '2022-05-11', '1', '0', '2022-05-11 21:50:47', '117'),
(13, '1', '107', 'ab', 'bb', 0.00, '2022-06-13', '1', '0', '2022-06-13 20:46:15', '127'),
(14, '3', '107', 'Laminas para construccion', 'Apoyo para la escuela rural  en villa nueva', 0.00, '2022-06-13', '1', '0', '2022-06-14 03:52:35', '127'),
(15, '2', '109', 'Mano de Obra para poder recapear la entrada a nuestra comunidad', 'Tenemos una única calle principal, la cual necesita recapeo, tenemos un poco de material, pero necesitamos entidades que nos puedan regalar más materiales y que nos apoyen con mano de obra también.', 0.00, '2022-07-30', '1', '0', '2022-07-07 19:41:08', '129'),
(16, '3', '107', 'Camisetas para deportes', '25 camisolas para el equipo de bascket para el colegio la bendicion.', 0.00, '2022-07-08', '1', '0', '2022-07-08 19:35:29', '127');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_susu`
--

CREATE TABLE `enla_susu` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `roola` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `social_id` varchar(150) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `current_session` int(11) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_susu`
--

INSERT INTO `enla_susu` (`user_id`, `name`, `email`, `roola`, `password`, `social_id`, `picture`, `status`, `created`, `current_session`, `online`) VALUES
(2, 'Carmen Zelaya', 'czelaya@enlazando.gt', 'Administrador', '8f6f7d23191da6a42855d379b0bc8075', '', 'http://enlazando.gt/img/favicon.png', '1', '2019-05-20 20:24:55', 0, 1),
(3, 'Ernesto', 'info@enlazando.gt', 'Consultor', '52ef765c6a4c7f67bc6526e6fba8d99a', '', 'http://enlazando.gt/img/favicon.png', '1', '2019-05-22 09:49:22', 0, 0),
(42, 'Alexius International', 'dmendoza@alexius.net', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:07:59', 0, 1),
(43, 'Alianza Joven OBG', 'Vivienalianzajoven@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:09:04', 0, 0),
(44, 'Amigos de la Jungla Urbana', 'junglaurbanaz15@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:09:21', 0, 0),
(45, 'Arena S A', 'werdog@ufm.edu', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:10:04', 0, 0),
(46, 'Asociación Corazón del Agua', 'direccion@corazondelagua.org.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:10:47', 0, 0),
(47, 'ADAM', 'gcifuentes@adam.org.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:11:27', 0, 0),
(48, 'Asociación de Gerentes de Guatemala', 'agg@agg.com.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:12:46', 0, 0),
(49, 'ADP', 'adp@adpverapaz.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:13:39', 0, 0),
(50, 'Bufete jurÃídico', 'enmanuelgamboa@hotmail.es', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:14:04', 0, 0),
(51, 'Club de Niños y Niñas de Centroamérica', 'Rhernandez@cnnca.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:14:22', 0, 0),
(52, 'Cooperativa El Progreso de Occidente RL', 'tonnyvasquezpuac@hotmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:14:44', 0, 0),
(53, 'DMZ CONSULTORES', 'contacto@dmz.com.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:15:05', 0, 0),
(54, 'Efecto colmena', 'contacto@efectocolmena.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:15:31', 0, 0),
(55, 'Emprendi', 'info@emprendi-la.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:16:07', 0, 0),
(56, 'Enactus', 'mdelaguila@enactus.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:16:27', 0, 0),
(57, 'FAMilia', 'samezquita92@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:16:42', 0, 1),
(58, 'Fondo Unido de Guatemala', 'acorado@unitedway.org.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:17:30', 0, 0),
(59, 'Fundación El Lustrador', 'ELF@helpelf.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:17:46', 0, 0),
(61, 'Fundación Rose', 'mariaquezada@colegiodelfuturo.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:18:22', 0, 1),
(62, 'FundaciÃ³n Sobrevivientes', 'sobrevivientes@sobrevivientes.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:18:38', 0, 0),
(63, 'FUNDACREA', 'Info@fundacreaguate.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:18:57', 0, 0),
(64, 'FUNDAMEX', 'dsmith@fundamex.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:19:09', 0, 0),
(65, 'Funsepa', 'jskolnik@funsepa.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:19:23', 0, 0),
(66, 'Hogar de Niños Fátima', 'responsabilidadsocial@fatima.org.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:19:37', 0, 1),
(67, 'INCEDES', 'Incedes.edu@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:20:05', 0, 0),
(68, 'INDESGUA', 'Indesgua.lea@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:20:20', 0, 1),
(69, 'NDI', 'enunez@ndi.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:20:41', 0, 0),
(70, 'Instituto Neurológico de Guatemala', 'recepcion@institutoneurologicodeguatemala.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:20:54', 0, 0),
(71, 'Inversión y Desarrollo', 'jackie.vm91@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:21:11', 0, 0),
(72, 'Liga Nacional contra el Cáncer', 'rrppligacanguate@yahoo.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:22:33', 0, 0),
(73, 'SEPRODES', 'Franciscolealr@yahoo.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:23:04', 0, 0),
(74, 'SIECA', 'info@sieca.int', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:23:25', 0, 0),
(75, 'Sociedad Protectora Del Niño', 'info@spn.org.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 02:23:39', 0, 1),
(76, 'Vivianne Dardón', 'gestion.proyectos@sobrevivientes.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2019-10-03 14:29:10', 0, 0),
(77, 'nuno', 'nuno@nuno.com', 'Usuario', '52ef765c6a4c7f67bc6526e6fba8d99a', '', '', '1', '2020-03-01 10:15:33', 0, 0),
(80, 'Carmen Zelaya', 'czelaya@tradingpro.co', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'emco', '1', '2020-03-18 12:22:54', 0, 1),
(81, 'Diego Arango', 'ddiegoaarango@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', 'otros', '1', '2021-04-06 17:44:15', 0, 0),
(83, 'ZELSA.SHOP', 'info@zelsa.co', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', '', 'muj', '1', '2021-04-07 12:12:02', 0, 0),
(85, 'Beba', 'info@tradingpro.co', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'nin', '1', '2021-04-15 17:05:52', 0, 0),
(86, 'Biourbainsmo By Botanik', 'info@bybotanik.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'meamn', '1', '2021-04-16 11:01:37', 0, 0),
(87, 'guido munoz', 'munoz.garzaro@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'dinero', 'muj', '1', '2021-04-20 09:44:04', 0, 0),
(88, 'Alfredo Chinchilla', 'alfredchgod@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'otros', '1', '2021-04-21 11:33:22', 0, 0),
(89, 'Juan Antonio Busto', 'jabr55@hotmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'emco', '1', '2021-04-22 11:31:43', 0, 0),
(90, 'Joven Thomy', 'thomas.dougherty@progreso.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'otros', '1', '2021-04-22 12:07:47', 0, 0),
(91, 'Chris Dent', 'chris@grolis.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'emco', '1', '2021-04-29 10:35:31', 0, 1),
(92, 'Alfredo Chinchilla', 'sharkfinancegroup@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'muj', '1', '2021-04-29 18:39:27', 0, 0),
(93, 'Ema De Rebuly', 'donaciones21@fundacionmargaritatejada.org', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'dinero', 'otros', '1', '2021-05-04 15:02:24', 0, 1),
(94, 'RICARDO MENDEZ RUIZ', 'ricardomendezruiz@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'otros', '1', '2021-05-14 11:00:48', 0, 0),
(95, 'Marcos Castillo Cabrera', 'mdcc46355@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'errvio', '1', '2021-05-22 15:27:13', 0, 1),
(96, 'Daffnie Mc.nish', 'pamelamcnish@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'muj', '1', '2021-05-23 13:47:40', 0, 0),
(97, 'Rosa Maria Meadow', 'rosa.maria.meadow@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'meamn', '1', '2021-05-23 14:55:25', 0, 0),
(98, 'Daniel Alejandro Vásquez', 'davl382@yahoo.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'otros', '1', '2021-05-24 22:40:12', 0, 0),
(99, 'Stuardo Rodríguez', 'str@maphpia.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'otros', '1', '2021-06-14 05:58:18', 0, 1),
(100, 'Leyla Flores', 'leyla.flores@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'muj', '1', '2021-06-15 13:48:19', 0, 0),
(101, 'Tanja.Meyer', 'tanjadearcia@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'priin', '1', '2021-06-21 11:00:12', 0, 1),
(102, 'Luis Nuñez', 'nunez.lavagnino@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'emco', '1', '2021-06-23 09:42:26', 0, 1),
(103, 'Abner Gonzalez', 'abner@transformaciongt.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'meamn', '1', '2021-06-24 12:39:24', 0, 0),
(104, 'Amarilis Mejía', 'amarilismejiac@gmail.com', 'orga', '22de964252dbc984e47a0cf322e2dd71', 'tiempo', 'muj', '1', '2021-06-24 15:11:07', 0, 0),
(107, 'Erick Estuardo', 'repacampoalegre@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'nin', '1', '2021-06-30 10:07:56', 0, 0),
(108, 'valeria', 'valem011217@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'ani', '1', '2021-06-30 10:25:31', 0, 0),
(109, 'Abner fuentes', '000abner@gmail.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'muj', '1', '2021-07-25 17:11:02', 0, 0),
(110, 'Carmen María Zelaya Flores', 'info@cielomaya.co', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'tiempo', 'nin', '1', '2021-08-28 09:45:17', 0, 0),
(111, 'Michael De Paz', 'michael.depaz@msn.com', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'recurso', 'otros', '1', '2021-09-01 16:40:01', 0, 0),
(113, 'Carmen Zelaya', 'info@cielomaya.com.gt', 'orga', '52ef765c6a4c7f67bc6526e6fba8d99a', 'dinero', 'covi', '1', '2021-12-06 17:39:48', 0, 1),
(114, 'Diego Acabal', 'diego.acabal04@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', 'ani', '1', '2022-04-26 17:40:29', 0, 1),
(115, 'Mafer Iraheta', 'maferspd@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', 'tiempo', 'ani', '1', '2022-04-26 17:40:36', 0, 1),
(116, 'Alex obed', 'cruzguzmanalexobed@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-05-10 20:23:24', 0, 1),
(118, 'Mafer prueba', 'mirahetaenlazando@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-05-11 14:35:14', 0, 0),
(119, 'Sebastian Amezquita', 'samezquita@arborvitae.com.gt', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-05-16 13:28:04', 0, 0),
(120, 'Rodolfo Veliz', 'rveliz_zepeda@yahoo.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-05-17 16:02:22', 0, 1),
(121, 'Omar Gonzalez', 'o.gonzalez@viva.org', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-05-26 13:43:50', 0, 0),
(122, 'Ivonne López', 'ivonnelopezurizar@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-05-31 12:14:54', 0, 0),
(124, 'Marco', 'makosaz@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-06-03 11:11:12', 0, 0),
(125, 'Zulena Escobedo', 'zulena.escobedo@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', 'recurso', 'emco', '1', '2022-06-10 09:25:11', 0, 1),
(126, 'Lester Flores', 'ormaprime2@gmail.com', 'orga', '22de964252dbc984e47a0cf322e2dd71', 'tiempo', 'muj', '1', '2022-06-13 13:28:12', 0, 0),
(127, 'ormaprmie', 'ormaprime@gmail.com', 'orga', '22de964252dbc984e47a0cf322e2dd71', 'tiempo', 'muj', '1', '0000-00-00 00:00:00', 0, 0),
(128, 'Helper Demo', 'aisl.1611@gmail.com', 'orga', '5d20d0e01a10df5b85f62773553b2fe4', 'recurso', 'covi', '1', '2022-07-07 13:20:31', 0, 0),
(129, 'Helpless Demo', 'angel@locomotiondynamic.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', 'dinero', 'covi', '1', '2022-07-07 13:27:33', 0, 1),
(130, 'Fredy lemus', 'alemus2781@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-07-11 10:28:56', 0, 1),
(131, 'oscar moran', 'osjulmocab@gmail.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-07-18 11:42:05', 0, 0),
(132, '2nd Helper', 'asarat@zttelco.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', 'tiempo', 'covi', '1', '2022-07-19 10:55:07', 0, 0),
(133, 'Jose', 'roberto.miranda@ciancoders.com', 'orga', 'd60702d76ede2dd1bbeb5a5d928430b0', '', '', '1', '2022-07-22 10:08:01', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_tayu`
--

CREATE TABLE `enla_tayu` (
  `id_tayu` int(10) NOT NULL,
  `n_tayu` mediumtext NOT NULL,
  `ima_tayu` varchar(150) NOT NULL,
  `fec_tayu` date NOT NULL,
  `us_tayu` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_tayu`
--

INSERT INTO `enla_tayu` (`id_tayu`, `n_tayu`, `ima_tayu`, `fec_tayu`, `us_tayu`) VALUES
(1, 'Dinero', 'dinero.png', '2019-06-19', '1'),
(2, 'Tiempo', 'tiempo.png', '2019-06-19', '1'),
(3, 'Recurso', 'mano.png', '2019-09-03', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_tiporg`
--

CREATE TABLE `enla_tiporg` (
  `id_tiporg` int(10) NOT NULL,
  `n_tiporg` mediumtext NOT NULL,
  `fec_tiporg` date NOT NULL,
  `us_tiporg` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_tiporg`
--

INSERT INTO `enla_tiporg` (`id_tiporg`, `n_tiporg`, `fec_tiporg`, `us_tiporg`) VALUES
(1, 'Empresa -RSE-', '2019-06-06', '2'),
(2, 'Diplomáticas', '2019-06-06', '2'),
(3, 'Cooperación Internacional', '2019-06-06', '2'),
(4, 'Sector Público', '2019-06-06', '2'),
(5, 'Institución educativa', '2019-06-06', '2'),
(6, 'Universidades/Think thanks', '2019-06-06', '2'),
(7, 'ONG', '2019-06-06', '2'),
(8, 'Cooperativa', '2019-06-06', '2'),
(9, 'Asociación civil', '2019-06-06', '2'),
(10, 'De beneficencia', '2019-06-06', '2'),
(11, 'Religiosa', '2019-06-06', '2'),
(12, 'Ninguna', '2019-06-06', '2'),
(13, 'Ayuda a apersonas con Discapacidad', '2019-06-09', '2'),
(14, 'Organismo internacional', '0000-00-00', ''),
(15, 'Fundación', '0000-00-00', ''),
(16, 'Partido político en formación', '0000-00-00', ''),
(17, 'Empresa', '0000-00-00', ''),
(18, 'Cooperativa', '0000-00-00', ''),
(19, 'Asociación política', '0000-00-00', ''),
(20, 'Asesoría Legal', '0000-00-00', ''),
(21, 'Inversión', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enla_users`
--

CREATE TABLE `enla_users` (
  `user_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Roll` varchar(30) NOT NULL,
  `depen` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `useing` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enla_users`
--

INSERT INTO `enla_users` (`user_id`, `nombre`, `apellido`, `username`, `email`, `password`, `fecc`, `Roll`, `depen`, `status`, `useing`) VALUES
(1, 'Administrador', 'de Contenidos', 'admin', 'admin@admin.com', 'admin', '2018-06-23 23:47:13', 'Admin', '', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trad_cat`
--

CREATE TABLE `trad_cat` (
  `id_cat` int(10) NOT NULL,
  `cat_cat` varchar(10) NOT NULL,
  `n_cat` varchar(250) NOT NULL,
  `des_cat` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trad_cat`
--

INSERT INTO `trad_cat` (`id_cat`, `cat_cat`, `n_cat`, `des_cat`) VALUES
(50, '3', 'Textos', ''),
(51, '1', 'Portada', ''),
(52, '2', 'KMO', ''),
(53, '2', 'YOU MOST', ''),
(54, '2', 'Video Lish', ''),
(55, '2', 'Bicafe', ''),
(56, '2', 'Sylvia Denburg', ''),
(57, '2', 'Brad Benavidez', ''),
(58, '2', 'DMZ', ''),
(59, '1', 'Reel Ingreso de Proyectos', ''),
(60, '1', '3 secciones en portada', ''),
(61, '2', 'Servicios', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trad_fotos`
--

CREATE TABLE `trad_fotos` (
  `id_foto` int(20) NOT NULL,
  `n_foto` longtext NOT NULL,
  `n_fotoen` longtext NOT NULL,
  `foto_foto` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trad_fotos`
--

INSERT INTO `trad_fotos` (`id_foto`, `n_foto`, `n_fotoen`, `foto_foto`) VALUES
(1, 'Impacto Sotenible a Largo Plazo', 'Impacto Sostenible a Largo Plazo', '20190227035844-Enactus.jpg'),
(2, '', '', '20190306115410-001.png'),
(3, '', '', '20190306115455-002.png'),
(4, '', '', '20190306115535-005.png'),
(5, '', '', '20190306115615-007.png'),
(6, '', '', '20190306115701-008.png'),
(7, '', '', '20190513070058-rotary-logo-.svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trad_notas`
--

CREATE TABLE `trad_notas` (
  `id_nota` int(10) NOT NULL,
  `cat_nota` int(10) NOT NULL,
  `dep_nota` int(10) NOT NULL,
  `mun_nota` int(10) NOT NULL,
  `ald_nota` varchar(150) NOT NULL,
  `ti_nota` varchar(250) NOT NULL,
  `ti_nota2` varchar(250) NOT NULL,
  `pie_nota` varchar(250) NOT NULL,
  `nota_nota` longtext NOT NULL,
  `nota_nota2` longtext NOT NULL,
  `vid_nota` varchar(50) NOT NULL,
  `aud_nota` varchar(50) NOT NULL,
  `act_nota` int(4) NOT NULL,
  `port_nota` varchar(10) NOT NULL,
  `cont_nota` varchar(11) NOT NULL DEFAULT '0',
  `ing_nota` datetime NOT NULL,
  `usr_nota` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trad_notas`
--

INSERT INTO `trad_notas` (`id_nota`, `cat_nota`, `dep_nota`, `mun_nota`, `ald_nota`, `ti_nota`, `ti_nota2`, `pie_nota`, `nota_nota`, `nota_nota2`, `vid_nota`, `aud_nota`, `act_nota`, `port_nota`, `cont_nota`, `ing_nota`, `usr_nota`) VALUES
(1, 50, 0, 0, '', 'Bienvenidos a Enlazando', 'Bienvenidos a Enlazando', '', '<p>Con que Cuentas</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:48:00', ''),
(49, 51, 0, 0, '', 'Zanate ? Quetzal?', '', '', '', '', 'HjYJt_CW4jM', '', 1, '1', '0', '2021-07-01 15:00:00', ''),
(56, 52, 0, 0, '', 'Primera Fase', 'Primera Fase', '', '<p>Mapeo de Actores</p>\r\n', '<p>Mapeo de Actores</p>\r\n', '', '', 1, '1', '0', '2021-07-01 14:49:00', ''),
(51, 50, 0, 0, '', 'imagen de enmedio', 'nada', '', '<p>nada</p>\r\n', '', '', '', 0, '1', '0', '2017-04-19 21:24:00', ''),
(52, 50, 0, 0, '', 'Que sigue..', '', '', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Innovaci&oacute;n = Involucramiento</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El concepto de innovaci&oacute;n generalmente se asocia a la ciencia y la tecnolog&iacute;a. Aunque la innovaci&oacute;n en dichos &aacute;mbitos es muy importante, la realidad de la humanidad impone la necesidad de que cada persona se apropie del concepto y se convierta en un agente innovador.</p>\r\n\r\n<p>Tal vez pueda sonar extra&ntilde;o el planteamiento anterior y en ese contexto surgir&aacute; la pregunta &iquest;qu&eacute; tengo que ver yo con la innovaci&oacute;n? Aunque la mayor&iacute;a de personas estar&iacute;an tentadas a responder que no tienen ninguna relaci&oacute;n con dicho concepto, la intenci&oacute;n del presente art&iacute;culo es motivar al lector a convertirse en un agente innovador y aportar con ello a la sociedad.</p>\r\n\r\n<p>Exploraremos a continuaci&oacute;n el alcance del concepto de innovaci&oacute;n humana que, desde nuestra perspectiva, est&aacute; sustentado en tres pilares que se sintetizan de la siguiente forma: <strong>A</strong>utoestima, <strong>V</strong>oluntad y <strong>A</strong>cci&oacute;n (AVA). En este sentido para ser un agente de innovaci&oacute;n humana hay que tener conciencia del poder interior (autoestima), deseo de transformaci&oacute;n social (voluntad) y capacidad efectiva de innovar (acci&oacute;n).</p>\r\n\r\n<p>El elemento que otorga cohesi&oacute;n y solidez a los mencionados pilares de la innovaci&oacute;n humana se resume en la siguiente m&aacute;xima: resulta imperativo aportar a la sociedad para recibir y no esperar a recibir para aportar. Como se explicar&aacute; adelante el aporte no necesariamente est&aacute; relacionado con el factor econ&oacute;mico, sino que esencialmente se trata de cambiar la forma en que nos relacionamos con el entorno y ser conscientes de que ello genera un impacto positivo en la sociedad.</p>\r\n\r\n<p>Una vez expreso el alcance del concepto, se desarrollar&aacute;n en forma breve los lineamientos que deben guiar la acci&oacute;n de un agente de innovaci&oacute;n humana:</p>\r\n\r\n<ul>\r\n	<li>Poseer o desarrollar un inter&eacute;s genuino en conocer y relacionarse con las dem&aacute;s personas.</li>\r\n	<li>Conciencia de que desde todos los &aacute;mbitos y en cualquier momento es posible hacer un aporte (en sentido amplio) a la sociedad.</li>\r\n	<li>Capacidad de pasar de la cr&iacute;tica a la acci&oacute;n (transformaci&oacute;n).</li>\r\n	<li>Pensar en grande para aportar en grande.</li>\r\n	<li>Propender por la construcci&oacute;n de acuerdos y el consenso en entornos en donde hay discrepancias y disenso.</li>\r\n	<li>Convicci&oacute;n de que el ejemplo en el manejo de las relaciones humanas es un factor multiplicador muy potente.</li>\r\n</ul>\r\n\r\n<p>Lo primero que quisiera enfatizar es el hecho de que los elementos que conforman&nbsp;una Naci&oacute;n, son b&aacute;sicamente dos, aunque hay otros aspectos importantes. Uno de ellos es el gobierno que supone una constituci&oacute;n, y el otro&nbsp;es la sociedad; y sin embargo, cuando se trata de hablar de Naci&oacute;n, en realidad es la sociedad la que, interesada en los asuntos p&uacute;blicos participa de ellos, o&nbsp;no. Pero si tiene un buen gobierno, admite que sea el gobierno el que se encargue de esas cosas, a trav&eacute;s varios mecanismos.</p>\r\n\r\n<p>Entonces hay que se&ntilde;alar que una de las caracter&iacute;sticas de ser una Naci&oacute;n es la estructura.&nbsp;Que&nbsp;un pa&iacute;s sea estructurado es una cuesti&oacute;n fundamental para el funcionamiento de todo el sistema&nbsp;pol&iacute;tico,&nbsp;de todo&nbsp;el sistema&nbsp;econ&oacute;mico social. En ese sentido, por ejemplo: Estados Unidos ha tenido desde principio del Siglo XX una preocupaci&oacute;n muy importante&nbsp;por aglutinar, por estructurar las actividades de los ciudadanos, prueba de ello, son las dos grandes organizaciones a principio del Siglo XX.&nbsp;</p>\r\n\r\n<p>Despu&eacute;s de esto, la preocupaci&oacute;n por articular la sociedad ha sido&nbsp;una constante&nbsp;primeramente&nbsp;en manos de la ley, imponiendo la ley y haciendo que la ley se cumpla en todos los lugares como un requisito previo para ser ciudadano y ser una sociedad civilizada. Y, la otra cuesti&oacute;n, es la que tiene que ver precisamente con los recursos, las estrategias que utilizan las sociedades para estructurarse as&iacute; mismas. Por ejemplo: En&nbsp;Estados Unidos desde Woodrow Wilson en la d&eacute;cada de los 20, se plante&oacute; el tema de las instituciones c&oacute;mo una cuesti&oacute;n fundamental para la organizaci&oacute;n de la Naci&oacute;n y este&nbsp;enfoque de el, basado en el desarrollo establece y estableci&oacute; lo que se llam&oacute; hasta hace muy poco el viejo institucionalismo.</p>\r\n\r\n<p>Ahora hay un nuevo, pero ambos afirman que son las instituciones las que crean cultura. Est&aacute;&nbsp;por el otro lado, el inter&eacute;s que Estados Unidos ha tenido en&nbsp;el funcionamiento de la sociedad y la sociolog&iacute;a a trav&eacute;s de Robert K. Merton.&nbsp;Hizo un conjunto de estudios sobre estructura social, sobre sociabilidad y sobre grupos, de modo que&nbsp;esto ayud&oacute; y contribuy&oacute; a la formaci&oacute;n de la sociedad norteamericana. Otro esfuerzo similar, se debe al trabajo de Kart Lewin en psicolog&iacute;a social especialmente&nbsp;en tres materias: Conducta democr&aacute;tica, din&aacute;mica de grupos y resoluci&oacute;n de conflictos. Esto con el prop&oacute;sito de conocer c&oacute;mo las personas se comportaban en ambientes y situaciones de cuarta democr&aacute;tico&nbsp;de libertad, y otro como se comportaban en situaciones de fuerza, situaciones de opresi&oacute;n y&nbsp;de control.</p>\r\n\r\n<p>Estados Unidos estaba muy preocupado en la D&eacute;cada de los 40, por el binomio o democracia o tiran&iacute;a conociendo la situaci&oacute;n que hab&iacute;a en Alemania hasta 1939. Por el otro lado, hubo otro intento de mejorar el conocimiento de lo social a trav&eacute;s de la sociometr&iacute;a con Jacobo Moreno y entonces calcular aprender a calcular c&oacute;mo interactuaban las personas en distintos espacios formales e informales.</p>\r\n\r\n<p>Finalmente, este es el &uacute;ltimo actor, Roberto Dahl escribe sobre la democracia y sus enemigos para darle contenido pol&iacute;tico te&oacute;rico a esta cuesti&oacute;n. Estos cinco que he mencionado lo que hicieron a lo largo de los a&ntilde;os 40, 50 y 60, fue levantar o dise&ntilde;ar para decirlo as&iacute;, un modelo&nbsp;de conocimientos que permitiera&nbsp;entender a la Naci&oacute;n Norteamericana que hab&iacute;a pasado por momentos muy dif&iacute;ciles durante los 30, momentos muy dif&iacute;ciles en los 40&nbsp;con&nbsp;la guerra y un per&iacute;odo de bonanza en&nbsp;la d&eacute;cada de&nbsp;los 50, que se rompe en los 60 con la lucha por los derechos civiles y la guerra de Vietnam.</p>\r\n\r\n<p>La cuesti&oacute;n es la Naci&oacute;n necesita estructurarse y Estados Unidos ha hecho grandes esfuerzos para lograr estructurar su sociedad, siendo plural como es y siendo tan enorme como es. Desde punto de vista, comparando a Estados Unidos con Guatemala, se puede decir que Guatemala, es una sociedad des-estructurada, es una sociedad fragmentada en el sentido que se quebr&oacute; y se quebr&oacute; por lo m&aacute;s b&aacute;sico, por la confianza. Los estudios&nbsp;de el&nbsp;Latino-Bar&oacute;metro afirma que en los &uacute;ltimos 10 a&ntilde;os, seg&uacute;n ese Instituto de estudios y de&nbsp;encuestas que en los &uacute;ltimos 10 a&ntilde;os la tendencia ha sido a que la ciudadan&iacute;a no conf&iacute;a en la ciudadan&iacute;a.</p>\r\n\r\n<p>El dato objetivo es por cada 10 guatemaltecos hay 8 que no conf&iacute;an en sus vecinos de modo que solamente 2 han dicho que conf&iacute;an en los vecinos. Esto es lamentable, porque viviendo la gente&nbsp;en comunidad de todo tipo tendr&iacute;amos que decir que en Guatemala, la mayor&iacute;a no conf&iacute;a en la otra mayor&iacute;a y eso establece problemas de relaci&oacute;n a nivel barrial, a nivel comunitario y por supuesto, en los Condominios y&nbsp;todo otro tipo de organizaci&oacute;n de casas all&iacute; donde se encuentra las casas.</p>\r\n\r\n<p>De modo que, estructurar la Naci&oacute;n incluye estructurar las personas, estructurar los grupos y desde ese punto de vista, Estados Unidos tuvo un enorme &eacute;xito entre las d&eacute;cadas 40, 50 y 60 porque logr&oacute; crear miles de millones de clubes y de todo tipo de organizaci&oacute;n para permitirle a las personas agruparse y aprender a vivir civilizadamente en ciertos espacios sociales. Sigue siendo importante al d&iacute;a de hoy pero dar cuenta de las miles de pel&iacute;culas que hemos visto, donde la de re&uacute;ne por diversas razones&nbsp;pero eso&nbsp;es posible precisamente porque es una sociedad estructurada. Lo que ocurre en Guatemala, es que no es una sociedad estructurada, o est&aacute; estructurada solamente en ciertos &aacute;mbitos especialmente en ciudades grandes. El resto del pa&iacute;s carece de organismos micro que&nbsp;le permitan a la sociedad estructurarse adecuadamente.</p>\r\n\r\n<p>Entonces, dicho esto, conocer qu&eacute; es lo que est&aacute;n haciendo las organizaciones, clubes y todo tipo de agrupaciones ciudadanas a lo largo del pa&iacute;s, es fundamental para comprender&nbsp;hacia d&oacute;nde se orienta&nbsp;la organizaci&oacute;n social de Guatemala &oacute; para decirlo de otro modo, para conocer la estructura de la&nbsp;sociedad&nbsp;civil guatemalteca.</p>\r\n\r\n<p>Lograr tener informaci&oacute;n a este respecto, le&nbsp;permitir&iacute;a a cualquiera que tenga esa informaci&oacute;n, tener una idea de cu&aacute;les&nbsp;son las fortalezas y debilidades de la estructura social del pa&iacute;s. Pero al respecto, no hay informes, no hay informaci&oacute;n. El &uacute;nico registro disponible y desactualizado se encuentra en el Ministerio de Gobernaci&oacute;n (Unidad de&nbsp;Organizaciones Sociales) fuera de eso hay cientos de cientos, probablemente miles de organizaciones que&nbsp;no est&aacute;n registradas y que sin embargo, tienen que hacer y ver por sus comunidades. Ni modo, qu&eacute; decir de la cantidad de cientos de empresas grandes, medianas y peque&ntilde;as, que tienen relaciones con las comunidades&nbsp;que hacen trabajo voluntario y trabajo humanitario, que inviertan sus recursos en la Naci&oacute;n y que no son reconocidos por esas tareas.</p>\r\n\r\n<p>Entonces, la idea de tener un documento o una base de datos que nos permita saber quien hace que, c&oacute;mo lo hacen, d&oacute;nde lo hacen, es muy importante para conocer la estructura de la sociedad civil guatemalteca y tambi&eacute;n conocer el conjunto de actividades a las cu&aacute;les se dedican. De modo que, compartiendo la informaci&oacute;n sobre&nbsp;lo que hace cada quien y donde podamos distribuir de mejor manera, de modo m&aacute;s democr&aacute;tico precisamente el conjunto de oportunidades que da la cooperaci&oacute;n horizontal entre ciudadanos. &nbsp;&nbsp;</p>\r\n\r\n<p>Si nosotros logramos tener una base datos suficientemente amplia vamos a poder darle a cada uno de los ciudadanos que tengan acceso a internet, informaci&oacute;n sobre las oportunidades disponibles para su desarrollo f&iacute;sico, mental o espiritual o inclusive desde el desarrollo econ&oacute;mico; pero si la informaci&oacute;n no fluye y estos es parte de una sociedad libre y organizada, si la informaci&oacute;n no fluye&nbsp; y entonces las oportunidades se cierran en grupos muy peque&ntilde;os de personas que si tiene acceso&nbsp; a esa informaci&oacute;n.</p>\r\n\r\n<p>Hacer publica esta informaci&oacute;n le dar&iacute;a mas oportunidades a cada uno de los ciudadanos, eso por un lado y por el otro lado abrir un espacio en donde las distintas organizaciones del pa&iacute;s puedan compartir informaci&oacute;n, anuncios&nbsp;o inclusive dar a conocer sus actividades, nos permitir&iacute;a tambi&eacute;n conocer la fuerza de la sociedad civil as&iacute; como sus debilidades algo que permitir&iacute;a precisamente intervenciones de mayor &aacute;ngulo de mayor fuerza, para recuperar &aacute;reas y espacios perdidos. Uno de los ejemplos que permite entender la importancia de una actividad como estas&nbsp; es que si bien ah&iacute;, hay muchas personas y ciudadanos de muy buenos valores, estos valores no se dan a conocer ni se publicitan, precisamente por que no hay una plataforma que permita compartirlos y que permita tambi&eacute;n exponerlos a la transparencia y a la mirada del publico, de modo que contribuyendo a la&nbsp;transparencia&nbsp;y a la mirada del publico, tambi&eacute;n con eso estar&iacute;amos generando y crear nuevas condiciones de confianza que es algo que urge en el pa&iacute;s.</p>\r\n\r\n<p>Yo no puedo imaginar en los pr&oacute;ximos 30 a&ntilde;os no hagamos nada para hacer la confianza entre ciudadanos para fortalecer la transparencia de los procesos sociales para compartir informaci&oacute;n y que en 30 a&ntilde;os estemos en una situaci&oacute;n peor y no podamos ver el desarrollo de nuevos valores como el trabajo humanitario, como el&nbsp;voluntariado como el servicio&nbsp; social libre como la solidaridad directa la solidaridad indirecta de modo que podamos&nbsp;desarrollar un conjunto de valores importantes, que sostengan la ciudadan&iacute;a en los pr&oacute;ximos 30 o 50 a&ntilde;os, lo que podamos hacer en los pr&oacute;ximos a&ntilde;os va a ser lo que defina la solidaridad de los pr&oacute;ximos 30 o 50 a&ntilde;os, por esa raz&oacute;n trabajar en la estructuraci&oacute;n de la sociedad a trav&eacute;s de las miles de peque&ntilde;as y medianas y grandes organizaciones&nbsp;civiles, es fundamental para la estructuraci&oacute;n de esta sociedad hacia un objetivo mas civilizado&nbsp;mas solidario en el donde las personas puedan compartir ideas y oportunidades igualmente.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Carmen Zelaya</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong></p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:59:00', ''),
(53, 61, 0, 0, '', 'ANTECEDENTES', '', '', '<p>Creemos en:</p>\r\n\r\n<ol>\r\n	<li>Libre empresa</li>\r\n	<li>Propiedad privada</li>\r\n	<li>Democracia participativa</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>En un Pa&iacute;s como Guatemala:</p>\r\n\r\n<ul>\r\n	<li>Las necesidades son ilimitadas y los recursos para atenderlas son limitados</li>\r\n	<li>Las acciones para la promoci&oacute;n y defensa de derechos son m&iacute;nimas, mientras que la necesidad de protecciones grande.</li>\r\n	<li>La participaci&oacute;n ciudadana es baja y la necesidad de involucramiento es alta</li>\r\n	<li>Existen diversas instituciones y personas con un sentimiento genuino de ayudar al pr&oacute;jimo o a una comunidad, pero no encuentran un mecanismo para concretar su intenci&oacute;n.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&iquest;Qu&eacute; somos?</p>\r\n\r\n<p>Enlazando.gt = Plataforma ciudadana</p>\r\n\r\n<p>Inicialmente nos consideramos una plataforma que busca ACERCAR a quienes tienen una necesidad con aquellas instituciones o personas que tienen la posibilidad de ayudar a satisfacerla.</p>\r\n\r\n<p>Para:</p>\r\n\r\n<p>-Generar impacto sostenible</p>\r\n\r\n<p>- Enlazar</p>\r\n\r\n<p>- Unir empresas y ciudadanos</p>\r\n\r\n<p>- comunicaci&oacute;n, viabilizar, fiscalizar, educar,</p>\r\n\r\n<p>- abrir comercios</p>\r\n\r\n<p>- empoderamiento econ&oacute;mico local</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Guatemala ante una encrucijada, las claves son:&nbsp;Libre empresa, propiedad privada y democracia participativa para fortalecer las instituciones y as&iacute; obtener un estado de derecha. Enlazando.gt busca fortalecer los programas y proyectos con impacto sostenible a largo plazo a base de acelerar la transformaci&oacute;n digital e impulsar el progreso socioecon&oacute;mico.</p>\r\n', '<h2><strong>&iquest;Qu&eacute;&nbsp;Somos?</strong></h2>\r\n\r\n<p><strong>Enlazando.gt = Plataforma Ciudadana</strong></p>\r\n\r\n<p>Inicialmente nos consideramos una plataforma que busca ACERCAR a quienes tienen una necesidad con aquellas instituciones o personas que tienen la posibilidad de ayudar a satisfacerla.</p>\r\n\r\n<p>Para:</p>\r\n\r\n<ul>\r\n	<li>Generar impacto sostenible</li>\r\n	<li>Enlazar</li>\r\n	<li>Unir empresas y ciudadanos</li>\r\n	<li>comunicaci&oacute;n, viabilizar, fiscalizar, educar,</li>\r\n	<li>abrir comercios</li>\r\n	<li>empoderamiento econ&oacute;mico local</li>\r\n</ul>\r\n\r\n<p>Guatemala ante una encrucijada, las claves son: Libre empresa, propiedad privada y democracia participativa para fortalecer las instituciones y as&iacute; obtener un estado de derecha. Enlazando.gt busca fortalecer los programas y proyectos con impacto sostenible a largo plazo a base de acelerar la transformaci&oacute;n digital e impulsar el progreso socioecon&oacute;mico.</p>\r\n\r\n<p>Para:</p>\r\n\r\n<ul>\r\n	<li>Generar impacto sostenible</li>\r\n	<li>Enlazar</li>\r\n	<li>Unir empresas y ciudadanos</li>\r\n	<li>comunicaci&oacute;n, viabilizar, fiscalizar, educar,</li>\r\n	<li>abrir comercios</li>\r\n	<li>empoderamiento econ&oacute;mico local</li>\r\n</ul>\r\n\r\n<p>&iquest;Como lo Hacemos? Algunas ideas&hellip; -</p>\r\n\r\n<ul>\r\n	<li>Plataforma web de acercamiento</li>\r\n	<li>Mesa t&eacute;cnica de acompa&ntilde;amiento</li>\r\n</ul>\r\n\r\n<p>Fiscalizaci&oacute;n Sello Enlazando: lo recibir&aacute;n organizaciones que por la transparencia e impacto en sus acciones son sugeridas para recibir dinero de cooperaci&oacute;n internacional. En este sentido.</p>\r\n', '', '', 1, '1', '0', '2020-02-15 07:44:00', ''),
(54, 61, 0, 0, '', 'MODELO DE TRABAJO', '', '', '<p><strong>Todos queremos ayudar, m&aacute;s no sabemos d&oacute;nde y c&oacute;mo?, cu&eacute;ntanos que est&aacute;s haciendo?</strong><br />\r\n<br />\r\nEnlazando.gt,&nbsp;&nbsp;busca convertirse en una red virtual de intercambio horizontal de datos y acciones que podr&iacute;a en el mediano plazo permitir a todos los actores interesados, contar con una fuente directa de contacto con diversas organizaciones; y en el largo plazo, disponer de una base de datos sobre las actividades, agendas, talleres, documentos, declaraciones, denuncias y lecciones aprendidas de cada una. Y de esa forma poder apoyar en tiempo, dinero o recursos.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:49:00', ''),
(55, 50, 0, 0, '', 'Concientizando', '', '', '<p>Sensibilizar</p>\r\n\r\n<p>Mentalizar</p>\r\n\r\n<p>Optar</p>\r\n\r\n<p>Actuar</p>\r\n', '', 'democracy.earth', '', 1, '1', '0', '2021-07-01 14:47:00', ''),
(58, 50, 0, 0, '', 'mail y teléfono', '', '', '<p>info@enlazando.gt</p>\r\n', '', '', '', 1, '1', '0', '2020-02-29 06:34:00', ''),
(60, 50, 0, 0, '', 'Direccion', '', '', '<p><strong>Direcci&oacute;n:</strong></p>\r\n\r\n<p>6ta Avenida 16 calle zona 10, Edificio Pial&eacute;.</p>\r\n\r\n<p><strong>Soporte</strong></p>\r\n\r\n<p><a href=\"mailto:info@enlazando.gt\" target=\"_blank\">info@enlazando.gt</a></p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:51:00', ''),
(61, 50, 0, 0, '', 'Mapeo de Programas y Proyectos de Desarrollo en Guatemala', '', '', '<p>Canalizar informaci&oacute;n de utilidad que permita la vinculaci&oacute;n&nbsp;entre proyectos comunes, con apoyos disponibles, a fin de fomentar una cultura de transparencia, maximizaci&oacute;n de recursos y esfuerzos.</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:50:00', ''),
(62, 61, 0, 0, '', 'SECTOR PÚBLICO', '', '', '', '', '', '', 1, '1', '0', '2020-02-29 06:32:00', ''),
(63, 61, 0, 0, '', 'SECTOR PRIVADO / SOCIEDAD CIVIL', '', '', '', '', '', '', 1, '1', '0', '2021-07-01 14:50:00', ''),
(64, 61, 0, 0, '', 'COOPERACIÓN INTERNACIONAL', '', '', '', '', '', '', 1, '1', '0', '2021-07-01 14:46:00', ''),
(65, 50, 0, 0, '', 'Texto Portada', '', '', '', '', '', '', 1, '1', '0', '2021-07-01 15:04:00', ''),
(66, 50, 0, 0, '', '¿Sos Zanate? o ¿Sos Quetzal?', '', '', '<p>&iquest;ya escogiste donde te involucrar&aacute;s?</p>\r\n', '', 'https://www.facebook.com/zelayacarmen10/videos/101', '', 1, '1', '0', '2021-07-01 14:46:00', ''),
(67, 59, 0, 0, '', 'Haremos tu proyecto realidad', '', '', '', '', '', '', 1, '1', '0', '2021-07-01 14:45:00', ''),
(68, 59, 0, 0, '', 'Cuéntanos tu Proyecto', '', '', '<p><strong>Enlazando.gt</strong>&nbsp;es una plataforma ciudadana con informaci&oacute;n en tiempo real de los&nbsp;principales programas y proyectos del sector publico, privado y cooperaci&oacute;n internacional&nbsp;visibilizando que proyectos vale la pena apoyar;&nbsp;invitando al ciudadano a involucrarse en su &aacute;rea de inter&eacute;s, donando: tiempo, dinero o recursos.</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:45:00', ''),
(69, 50, 0, 0, '', 'Comunícate con nosotros', '', '', '<p>info@enlazando.gt</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 14:45:00', ''),
(70, 50, 0, 0, '', '¡Enlazate!', '', '', '<p>Inicialmente nos consideramos una plataforma que busca ACERCAR a quienes tienen una necesidad con aquellas instituciones o personas que tienen la posibilidad de ayudar a satisfacerla. Buscamos&nbsp;convertirnos en una red virtual de intercambio horizontal de datos y acciones que podr&iacute;a en el mediano plazo permitir a todos los actores interesados, contar con una fuente directa de contacto con diversas organizaciones; y en el largo plazo, disponer de una base de datos sobre las actividades, agendas, talleres, documentos, declaraciones, denuncias y lecciones aprendidas de cada una. Y de esa forma poder apoyar en tiempo, dinero o recursos.</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 15:11:00', ''),
(71, 60, 0, 0, '', 'AYUDAME', 'http://enlazando.gt/enlazando/ayudame.html', '', '<p>Nesecitas apoyo de ENLZANDO queremos cambiar tu vida</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 15:03:00', ''),
(72, 60, 0, 0, '', 'AYUDEMOS', 'http://enlazando.gt/enlazando/ayudemos.html', '', '<p>&Uacute;nete al grupo de ENLAZANDO para cambiar vidas</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 15:02:00', ''),
(73, 60, 0, 0, '', 'CONTÁCTANOS', 'http://enlazando.gt/enlazando/mail.html', '', '', '', '', '', 1, '1', '0', '2021-07-01 14:42:00', ''),
(74, 50, 0, 0, '', 'Todos queremos ayudar, más no sabemos dónde y cómo, cuéntanos que estás haciendo.', '', '', '<p>Enlazando.gt, busca convertirse en una red virtual de intercambio horizontal de datos y acciones que podr&iacute;a en el mediano plazo permitir a todos los actores interesados, contar con una fuente directa de contacto con diversas organizaciones; y en el largo plazo, disponer de una base de datos sobre las actividades, agendas, talleres, documentos, declaraciones, denuncias y lecciones aprendidas de cada una. Y de esa forma poder apoyar en tiempo, dinero o recursos.</p>\r\n', '', '', '', 1, '1', '0', '2021-07-01 15:06:00', ''),
(75, 61, 0, 0, '', 'INNOVACIÓN', '', '', '<p><strong>En ese sentido, me permito compartirle una breve descripci&oacute;n de en qu&eacute; creemos en Enlazando.gt y cu&aacute;les son nuestros proyectos: El rol pol&iacute;tico se enmarca dentro del orden democr&aacute;tico y el estado de derecho &ldquo;Rule of Law&rdquo; teniendo como centro la persona y su desarrollo en un mundo con igualdad de oportunidades, basados en una buena educaci&oacute;n para todos. As&iacute; mismo un Estado que ejecuta a trav&eacute;s de un gobierno central e instituciones fuertes y que se convierte en el &aacute;rbitro de la ciudadan&iacute;a basados en un concepto de honestidad. </strong></p>\r\n\r\n<p><strong>Creemos firmemente que el desarrollo de nuestro pa&iacute;s se debe basar en el libre mercado y la propiedad privada, acompa&ntilde;ada de certeza jur&iacute;dica para que el inversionista nacional e internacional invierta en nuestro pa&iacute;s en proyectos del corto, mediano y largo plazo. Creemos que el mejor programa social para nuestro pa&iacute;s es la inversi&oacute;n y generaci&oacute;n de empleo, por lo que Enlazando.gt se divide en tres proyectos: Proyecto uno: encuesta Queremos saber, &iquest;qu&eacute; est&aacute;s haciendo? &nbsp;65 organizaciones se registraron en Enlazando.gt que es una plataforma ciudadana con informaci&oacute;n en tiempo real de los principales programas y proyectos del sector publico, privado y cooperaci&oacute;n internacional. Su objetivo es visibilizar los proyectos que vale la pena apoyar, mediante invitaciones a los ciudadanos a involucrarse en su &aacute;rea de inter&eacute;s donando tiempo, dinero u otros recursos. </strong></p>\r\n\r\n<p><strong>Proyecto dos: si crees tener la soluci&oacute;n/continuidad para resolver un problema puedes inscribir tu proyecto a trav&eacute;s del sitio web en &ldquo;Cu&eacute;ntanos tu Proyecto&rdquo;. Llenando el perfil de programas/proyectos para solicitud de fondos de cooperaci&oacute;n internacional. &nbsp;Para tal prop&oacute;sito, el proyecto no deber&aacute; de contener m&aacute;s de un 10% de costos administrativos, que tendr&aacute;n que ser justificados fehacientemente. </strong></p>\r\n\r\n<p><strong>Lo anterior es una medida inicial del proceso de fiscalizaci&oacute;n al financiamiento internacional, en la medida en que la idea es construir un instrumento de recepci&oacute;n de fondos y/o una mesa t&eacute;cnica para trabajar con el Central American Donor&rsquo;s Forum. </strong></p>\r\n\r\n<p><strong>Proyecto tres: se denomina &ldquo;Las Mil Millones de Conversaciones Que no Hemos Tenido&rdquo;, el cual se encuentra en desarrollo. Efectivamente, estamos enfocados en levantar la tasa de densidad organizacional en Guatemala. Nuestra intenci&oacute;n es optimizar la utilizaci&oacute;n de recursos entre las organizaciones donantes y las personas beneficiadas. Enlazando.gt es una herramienta eficaz de informaci&oacute;n transparente con sistemas de verificaci&oacute;n de cumplimiento por medio de documentos privados y/o convenios que garanticen la correcta ejecuci&oacute;n de los programas y proyectos con impacto sostenible y a largo plazo.</strong></p>\r\n', '<p><strong>En un Pa&iacute;s como Guatemala:</strong></p>\r\n\r\n<p>- Las necesidades son ilimitadas y los recursos para atenderlas son limitados</p>\r\n\r\n<p>- Las acciones para la promoci&oacute;n y defensa de derechos son m&iacute;nimas, mientras que la necesidad de protecciones grande.</p>\r\n\r\n<p>- La participaci&oacute;n ciudadana es baja y la necesidad de involucramiento es alta</p>\r\n\r\n<p>- Existen diversas instituciones y personas con un sentimiento genuino de ayudar al pr&oacute;jimo o a una comunidad, pero no encuentran un mecanismo para concretar su intenci&oacute;n.</p>\r\n\r\n<p>- Cooperaci&oacute;n en distintas &aacute;reas: educaci&oacute;n, capacitar, suplir necesidades b&aacute;sicas</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&iquest;Qu&eacute; somos?</strong></p>\r\n\r\n<p>Enlazando</p>\r\n\r\n<p>Plataforma ciudadana</p>\r\n\r\n<p>Inicialmente nos consideramos una plataforma que busca ACERCAR a quienes tienen una necesidad con aquellas</p>\r\n\r\n<p>instituciones o personas que tienen la posibilidad de ayudar a satisfacerla.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Para: </strong></p>\r\n\r\n<p>-Generar impacto sostenible</p>\r\n\r\n<p>- Enlazar - Unir empresas y ciudadanos</p>\r\n\r\n<p>- comunicaci&oacute;n, viabilizar, fiscalizar, educar,</p>\r\n\r\n<p>- abrir comercios</p>\r\n\r\n<p>- empoderamiento econ&oacute;mico local</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&iquest;Como lo Hacemos? Algunas ideas</strong>&hellip;</p>\r\n\r\n<p>- Plataforma web de acercamiento</p>\r\n\r\n<p>- Mesa t&eacute;cnica de acompa&ntilde;amiento Fiscalizaci&oacute;n Sello Enlazando: lo recibir&aacute;n organizaciones que por la transparencia e impacto en sus acciones son sugeridas para recibir dinero de cooperaci&oacute;n internacional. En este sentido.</p>\r\n', '', '', 1, '1', '0', '2021-07-01 15:05:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trad_users`
--

CREATE TABLE `trad_users` (
  `user_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Roll` varchar(30) NOT NULL,
  `depen` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `useing` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trad_users`
--

INSERT INTO `trad_users` (`user_id`, `nombre`, `apellido`, `username`, `email`, `password`, `fecc`, `Roll`, `depen`, `status`, `useing`) VALUES
(1, 'Administrador', 'De Contenidos', 'admin', 'ormaprime@gmail.com', 'admin', '2016-12-13 11:54:45', 'Admin', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cm_cat`
--
ALTER TABLE `cm_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `cm_notas`
--
ALTER TABLE `cm_notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `cm_users`
--
ALTER TABLE `cm_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `enla_area`
--
ALTER TABLE `enla_area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `enla_asig`
--
ALTER TABLE `enla_asig`
  ADD PRIMARY KEY (`id_asig`);

--
-- Indices de la tabla `enla_camp`
--
ALTER TABLE `enla_camp`
  ADD PRIMARY KEY (`id_camp`);

--
-- Indices de la tabla `enla_cat`
--
ALTER TABLE `enla_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `enla_chat`
--
ALTER TABLE `enla_chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indices de la tabla `enla_chat2`
--
ALTER TABLE `enla_chat2`
  ADD PRIMARY KEY (`chatid`);

--
-- Indices de la tabla `enla_chat_login_details`
--
ALTER TABLE `enla_chat_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enla_dep`
--
ALTER TABLE `enla_dep`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indices de la tabla `enla_dona`
--
ALTER TABLE `enla_dona`
  ADD PRIMARY KEY (`id_dona`);

--
-- Indices de la tabla `enla_fotos`
--
ALTER TABLE `enla_fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `enla_fufi`
--
ALTER TABLE `enla_fufi`
  ADD PRIMARY KEY (`id_fufi`);

--
-- Indices de la tabla `enla_insti`
--
ALTER TABLE `enla_insti`
  ADD PRIMARY KEY (`id_insti`);

--
-- Indices de la tabla `enla_mat`
--
ALTER TABLE `enla_mat`
  ADD PRIMARY KEY (`id_mat`);

--
-- Indices de la tabla `enla_mun`
--
ALTER TABLE `enla_mun`
  ADD PRIMARY KEY (`id_mun`);

--
-- Indices de la tabla `enla_notas`
--
ALTER TABLE `enla_notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `enla_oborg`
--
ALTER TABLE `enla_oborg`
  ADD PRIMARY KEY (`id_oborg`);

--
-- Indices de la tabla `enla_org`
--
ALTER TABLE `enla_org`
  ADD PRIMARY KEY (`id_org`);

--
-- Indices de la tabla `enla_orgsu`
--
ALTER TABLE `enla_orgsu`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `login` (`password`);

--
-- Indices de la tabla `enla_paises`
--
ALTER TABLE `enla_paises`
  ADD PRIMARY KEY (`id_enla`);

--
-- Indices de la tabla `enla_preg`
--
ALTER TABLE `enla_preg`
  ADD PRIMARY KEY (`id_preg`);

--
-- Indices de la tabla `enla_proeje`
--
ALTER TABLE `enla_proeje`
  ADD PRIMARY KEY (`id_proeje`);

--
-- Indices de la tabla `enla_proy`
--
ALTER TABLE `enla_proy`
  ADD PRIMARY KEY (`id_proy`);

--
-- Indices de la tabla `enla_sele`
--
ALTER TABLE `enla_sele`
  ADD PRIMARY KEY (`id_sele`);

--
-- Indices de la tabla `enla_solayu`
--
ALTER TABLE `enla_solayu`
  ADD PRIMARY KEY (`id_solayu`);

--
-- Indices de la tabla `enla_susu`
--
ALTER TABLE `enla_susu`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `login` (`password`);

--
-- Indices de la tabla `enla_tayu`
--
ALTER TABLE `enla_tayu`
  ADD PRIMARY KEY (`id_tayu`);

--
-- Indices de la tabla `enla_tiporg`
--
ALTER TABLE `enla_tiporg`
  ADD PRIMARY KEY (`id_tiporg`),
  ADD KEY `id_tiporg` (`id_tiporg`);

--
-- Indices de la tabla `enla_users`
--
ALTER TABLE `enla_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `trad_cat`
--
ALTER TABLE `trad_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `trad_fotos`
--
ALTER TABLE `trad_fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `trad_notas`
--
ALTER TABLE `trad_notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `trad_users`
--
ALTER TABLE `trad_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cm_cat`
--
ALTER TABLE `cm_cat`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cm_notas`
--
ALTER TABLE `cm_notas`
  MODIFY `id_nota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de la tabla `cm_users`
--
ALTER TABLE `cm_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `enla_area`
--
ALTER TABLE `enla_area`
  MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `enla_asig`
--
ALTER TABLE `enla_asig`
  MODIFY `id_asig` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `enla_camp`
--
ALTER TABLE `enla_camp`
  MODIFY `id_camp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `enla_cat`
--
ALTER TABLE `enla_cat`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `enla_chat`
--
ALTER TABLE `enla_chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `enla_chat2`
--
ALTER TABLE `enla_chat2`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `enla_chat_login_details`
--
ALTER TABLE `enla_chat_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enla_dep`
--
ALTER TABLE `enla_dep`
  MODIFY `id_dep` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `enla_dona`
--
ALTER TABLE `enla_dona`
  MODIFY `id_dona` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `enla_fotos`
--
ALTER TABLE `enla_fotos`
  MODIFY `id_foto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `enla_fufi`
--
ALTER TABLE `enla_fufi`
  MODIFY `id_fufi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `enla_insti`
--
ALTER TABLE `enla_insti`
  MODIFY `id_insti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `enla_mat`
--
ALTER TABLE `enla_mat`
  MODIFY `id_mat` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `enla_mun`
--
ALTER TABLE `enla_mun`
  MODIFY `id_mun` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT de la tabla `enla_notas`
--
ALTER TABLE `enla_notas`
  MODIFY `id_nota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `enla_oborg`
--
ALTER TABLE `enla_oborg`
  MODIFY `id_oborg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `enla_org`
--
ALTER TABLE `enla_org`
  MODIFY `id_org` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `enla_orgsu`
--
ALTER TABLE `enla_orgsu`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enla_paises`
--
ALTER TABLE `enla_paises`
  MODIFY `id_enla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `enla_preg`
--
ALTER TABLE `enla_preg`
  MODIFY `id_preg` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `enla_proeje`
--
ALTER TABLE `enla_proeje`
  MODIFY `id_proeje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `enla_proy`
--
ALTER TABLE `enla_proy`
  MODIFY `id_proy` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `enla_sele`
--
ALTER TABLE `enla_sele`
  MODIFY `id_sele` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enla_solayu`
--
ALTER TABLE `enla_solayu`
  MODIFY `id_solayu` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `enla_susu`
--
ALTER TABLE `enla_susu`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `enla_tayu`
--
ALTER TABLE `enla_tayu`
  MODIFY `id_tayu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `enla_tiporg`
--
ALTER TABLE `enla_tiporg`
  MODIFY `id_tiporg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `enla_users`
--
ALTER TABLE `enla_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `trad_cat`
--
ALTER TABLE `trad_cat`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `trad_fotos`
--
ALTER TABLE `trad_fotos`
  MODIFY `id_foto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trad_notas`
--
ALTER TABLE `trad_notas`
  MODIFY `id_nota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `trad_users`
--
ALTER TABLE `trad_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
