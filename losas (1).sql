-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2023 a las 23:39:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `losas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `menu_display` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `user`, `email`, `password`, `role`, `menu_display`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 23:24:37', '2020-10-14 23:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusels`
--

CREATE TABLE `carrusels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusels`
--

INSERT INTO `carrusels` (`id`, `titulo`, `subtitulo`, `image`, `url`, `video`, `orden`) VALUES
(3, NULL, NULL, '0jAcePKvAJNI5EFoIBkK2qwfvUcn9o.jpg', NULL, NULL, 13),
(20, NULL, NULL, 'DDgpC337KkEdhwKWyOeOs38n2UAfDI.jpg', NULL, NULL, 1),
(21, NULL, NULL, 'nxIsKMKwxuYr1VvoQfdvVP3dd4odSO.jpg', NULL, NULL, 11),
(22, NULL, NULL, 'jEJGrG9uL528X1WIc48YDcpKA84wfH.jpg', NULL, NULL, 7),
(23, NULL, NULL, 'FNDudXjjW6ttl7oKiDKHXJMHune8zn.jpg', NULL, NULL, 6),
(26, NULL, NULL, 'BtKIGsTIsfun3dE9J3w2ySQixmMhuq.jpg', NULL, NULL, 12),
(27, NULL, NULL, 'DdhoTTR3XF4X86b2xhq2zjiEOBsIEL.jpg', NULL, NULL, 10),
(28, NULL, NULL, 'LzGPME0sAI8WxnfFlpHvaPV7hC6EHt.jpg', NULL, NULL, 0),
(29, NULL, NULL, '65GySGByw7v10eWxveTEgsnMZ32879.jpg', NULL, NULL, 3),
(30, NULL, NULL, 'A3MyLsvZRd4RB1JI4jcPRJyLfkA95y.jpg', NULL, NULL, 4),
(31, NULL, NULL, 'naUwApZyzCgDCbM72eOUUBSYfx42l3.jpg', NULL, NULL, 2),
(32, NULL, NULL, '2t6FMflHrUtmrSSEIrkUGhd8dt0BLd.jpg', NULL, NULL, 5),
(35, NULL, NULL, 'PXkFO6vRwMfDvJeY4NxHZckAXVarbN.png', NULL, NULL, 0),
(37, NULL, NULL, 'ScZZfJXdbmQ0De67h3gmwwSHWTQm4h.png', NULL, NULL, 6),
(39, NULL, NULL, 'Kbu9Oolrpwjzry7PCytuqQzfqY5bHU.png', NULL, NULL, 1),
(40, NULL, NULL, '4NDnSgSm8ZsLN7DxXAQ6TEtyeVr9k2.png', NULL, NULL, 4),
(41, NULL, NULL, 'aBc4Gn9XOC4vwKxob3vskEo7v6aQlM.png', NULL, NULL, 2),
(42, NULL, NULL, '2REJC23RKVXgHsJRaOiVRSRfgVKbKU.png', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `parent`, `activo`, `orden`) VALUES
(1, 'Fianzas', 'fianzas', 0, 1, 666),
(2, 'Seguros', 'seguros', 0, 1, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacions`
--

CREATE TABLE `certificacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `certificacions`
--

INSERT INTO `certificacions` (`id`, `logo`, `aux`, `created_at`, `updated_at`) VALUES
(1, 'RPR2nUQh6BKELWMYjm5V9Z47Ovxct8.jpeg', NULL, '2023-06-03 00:43:41', '2023-06-03 00:43:41'),
(2, 'ndsoqnis0cVOZpe0i2zysL60nwNQRY.png', NULL, '2023-06-03 03:04:13', '2023-06-03 03:04:13'),
(3, 'b4J9unEVCYmnR8VlbqyKc9dvhRpkMW.jpg', NULL, '2023-06-03 03:04:25', '2023-06-03 03:04:25'),
(4, 'nuk5VUAohG055SFcLaV6b7Bb0tBB2f.png', NULL, '2023-06-03 03:04:35', '2023-06-03 03:04:35'),
(5, 'PexhTdtPkD4CGseu5VWCYIcGbcpvaM.png', NULL, '2023-06-03 03:04:49', '2023-06-03 03:04:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `logo`, `aux`, `created_at`, `updated_at`) VALUES
(1, 'oxQGdEpq0EqVelUHFFHZAMGn7l8zRB.jpg', NULL, '2023-06-02 23:50:25', '2023-06-02 23:50:25'),
(2, 'edzzbysuN6uWWJGjZirhdiKKZjGYc8.png', NULL, '2023-06-03 00:21:24', '2023-06-03 00:21:24'),
(3, 'Q2ota8wmb6ACOJJRm5pp2AtQUGFzol.png', NULL, '2023-06-03 03:23:34', '2023-06-03 03:23:34'),
(4, 'zmQLPprIfQx6ldXnXX2GjUvA8gK8iT.png', NULL, '2023-06-03 03:23:45', '2023-06-03 03:23:45'),
(5, '5jRhNUq11ZPJOODjDCdErtd3gkO5je.jpg', NULL, '2023-06-03 03:23:57', '2023-06-03 03:23:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prodspag` varchar(255) DEFAULT NULL,
  `paypalemail` varchar(255) DEFAULT NULL,
  `destinatario` varchar(255) DEFAULT NULL,
  `destinatario2` varchar(255) DEFAULT NULL,
  `remitente` varchar(255) DEFAULT NULL,
  `remitentepass` varchar(255) DEFAULT NULL,
  `remitentehost` varchar(255) DEFAULT NULL,
  `remitenteport` varchar(6) DEFAULT NULL,
  `remitenteseguridad` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `whatsapp2` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `envio` varchar(255) DEFAULT NULL,
  `envioglobal` varchar(255) DEFAULT NULL,
  `iva` varchar(255) DEFAULT NULL,
  `incremento` varchar(255) DEFAULT NULL,
  `mapa` text DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `title`, `description`, `prodspag`, `paypalemail`, `destinatario`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `youtube`, `linkedin`, `envio`, `envioglobal`, `iva`, `incremento`, `mapa`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Losas D´Casster´s', '', NULL, NULL, 'info@sektor.com.mx', 'jortiz@sektor.com.mx', 'alexis@wozial.com', '2P2lYvtSAZX9', 'mail.wozial.com', '465', NULL, '3331884040, 3331883180', '3318940000', '', 'https://www.facebook.com/sektoralarmas', '', NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.84572216016!2d-103.3837752!3d20.675854700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae6d6d5fd08d%3A0x439d71abb16f0dda!2sSektor!5e0!3m2!1ses-419!2smx!4v1668797393100!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', NULL, '2023-05-31 03:44:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alias` varchar(255) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `numext` varchar(255) NOT NULL,
  `numint` varchar(255) DEFAULT NULL,
  `entrecalles` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `estado_code` varchar(255) NOT NULL,
  `pais` varchar(255) DEFAULT 'Mexico',
  `favorito` tinyint(1) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `elemento` varchar(255) NOT NULL,
  `texto` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `contenido` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `seccion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id`, `elemento`, `texto`, `imagen`, `url`, `contenido`, `activo`, `orden`, `seccion`) VALUES
(60, 'Logo 1', '', 'MFGsBJE2R87QZBwpwk1Y4NbwnCeB6q.png', NULL, 1, 1, 666, 1),
(61, 'Texto 1', 'Losas D´CASSTER´S', '', NULL, 0, 1, 666, 1),
(62, 'Logo 2', NULL, 'kBU2vyJ0doXmSouDJzImIhClJybWV9.png', NULL, 1, 1, 666, 1),
(63, 'Texto 2', 'Perlita\nMineral', NULL, NULL, 0, 1, 666, 1),
(64, 'Características Imagen', NULL, 'SXoi1UAb7QIR7rIDETtYhY87J0LUI1.png', NULL, 1, 1, 666, 1),
(65, 'Característica 1 - Logo', NULL, 'oTDrQVG2XjRfL7wH9grXirGImbZcV5.png', NULL, 1, 1, 666, 1),
(66, 'Característica 1 - Texto', 'Ahorro al edificar', NULL, NULL, 0, 1, 666, 1),
(67, 'Característica 2 - Logo', NULL, 'V0VzjqIbKHEwkW7LbiceS4sjf12Clj.png', NULL, 1, 1, 666, 1),
(68, 'Característica 2 - Textp', 'Economía', NULL, NULL, 0, 1, 666, 1),
(69, 'Característica 3 - Logo', NULL, 'NslEWDxl2C3XSGxocIrsfkoujsazvG.png', NULL, 1, 1, 666, 1),
(70, 'Característica 3 - Texto', 'Mineral Perlita', NULL, NULL, 0, 1, 666, 1),
(71, 'Característica 4 - Logo', NULL, 'zPaLrHaDLfmkvEINITJECqOMi6rgPO.png', NULL, 1, 1, 666, 1),
(72, 'Característica 4 - Texto', 'Instalación Rápida', NULL, NULL, 0, 1, 666, 1),
(73, 'Característica 5 - Logo', NULL, '7UNuKjR4KGnesoAY11JaHHX4BYQZy4.png', NULL, 1, 1, 666, 1),
(74, 'Característica 5 - Texto', 'Limpieza en Obra', NULL, NULL, 0, 1, 666, 1),
(75, 'Característica 6 - Logo', NULL, 'kEnrQLCy9G79W8m0KTdJeTMzrrbHOe.png', NULL, 1, 1, 666, 1),
(76, 'Característica 6 - Texto', 'Resiste más de una tonelada', NULL, NULL, 0, 1, 666, 1),
(77, 'Característica 7 - Logo', NULL, 'Um1ApFje46Hj8KvzzzlbkJRyb4OuZq.png', NULL, 1, 1, 666, 1),
(78, 'Característica 7 - Texto', 'Techos aligerados', NULL, NULL, 0, 1, 666, 1),
(79, 'Característica 8 - Logo', NULL, 'hHbGOjLzifUoi2XfTVUYLpCVQdsrD7.png', NULL, 1, 1, 666, 1),
(80, 'Característica 8 - Texto', 'Garantía de por vida', NULL, NULL, 0, 1, 666, 1),
(81, 'Característica 9 - Logo', NULL, 'qWlwQ6eXIyvM4q3CmzYqIiwcr2un69.png', NULL, 1, 1, 666, 1),
(82, 'Característica 9 - Texto', 'Fácil de instalar', NULL, NULL, 0, 1, 666, 1),
(83, 'Característica 10 - Logo', NULL, 'oju6YB0sQvJcCB1xA0oaa9udCORR4Z.png', NULL, 1, 1, 666, 1),
(84, 'Característica 10 - Texto', 'Aislamiento Térmico y Acústico', NULL, NULL, 0, 1, 666, 1),
(85, 'Portada', NULL, 'UQiMe8e6uxE0Dt86A7ntcrhgyaLXvv.jpg', NULL, 1, 1, 666, 2),
(86, 'Texto Portada', 'Losas D´CASSTER´S', NULL, NULL, 0, 1, 666, 2),
(87, 'Logo', NULL, 'aSROq8mE44olQ6YNLWVzBLdwwxFxkn.png', NULL, 1, 1, 666, 2),
(88, 'Texto', 'Losas D´CASSTER´S', NULL, NULL, 0, 1, 666, 2),
(89, 'Texto', 'Lorem ipsum dolor sit amet iusto? Exercitationem laudantium molestias minus nesciunt nostrum in! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio laborum saepe quae voluptatum asperiores ipsam consequatur sint natus perspiciatis, pariatur excepturi quam, ad doloremque laudantium. Aut praesentium odit laudantium dolores?\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nemo itaque consequuntur dolor iusto? Exercitationem laudantium molestias minus nesciunt nostrum in! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio laborum saepe quae voluptatum asperiores ipsam consequatur sint natus perspiciatis, pariatur excepturi quam, ad doloremque laudantium. Aut praesentium odit laudantium dolores? Lorem ipsuem strum in! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio laborum saepe quae voluptatum asperiores ipsam consequatur sint natus perspiciatis, pariatur excepturi quam, ad doloremque laudantium. Aut praesentium odit laudantium dolores?', NULL, NULL, 0, 1, 666, 2),
(90, 'Imagen', NULL, 'GUgZj1wKsxLHt51RoTngVA95QA1eRJ.png', NULL, 1, 1, 666, 2),
(91, 'Característica 1 - Titulo', 'LIGERAS', NULL, NULL, 0, 1, 666, 2),
(92, 'Característica 1 - Descripción', 'Gracias al mineralizado microcelular, su peso es muy bajo. (peso aproximado de 43 kg c/u)', NULL, NULL, 0, 1, 666, 2),
(93, 'Característica 2 - Titulo', 'RESISTENTES', NULL, NULL, 0, 1, 666, 2),
(94, 'Característica 2 - Descripción', 'Su capacidad de carga es de una tonelada por m2, debido al armazón de acero con el cual están armadas en su interio, de esta manera se evita el uso de malla y capa de comprensión', NULL, NULL, 0, 1, 666, 2),
(95, 'Característica 3 - Titulo', 'TÉRMICAS', NULL, NULL, 0, 1, 666, 2),
(96, 'Característica 3 - Descripción', 'Por las cualidades físicas del jal y del mineral perlita, le permite actuar como un aislante térmico y acústico', NULL, NULL, 0, 1, 666, 2),
(97, 'Característica 4 - Titulo', 'ADAPTABLE', NULL, NULL, 0, 1, 666, 2),
(98, 'Característica 4 - Descripción', 'No requieren de cimbra porque se adapta a cualquier elemento de soporte. Puede ser utilizada en viga, viguería de acero, clavarse, perforarse y cortarse en cualquier sentido que se le requiera evitando desperdicio y dándole limpieza a su obra', NULL, NULL, 0, 1, 666, 2),
(99, 'Característica 5 - Titulo', 'VELOCIDAD DE OBRA', NULL, NULL, 0, 1, 666, 2),
(100, 'Característica 5 - Descripción', 'Su rápida y fácil instalación reduce en gran medida los costos, al aumnetar la velocidad de obra incrementando el ahorro. Hasta 300 m2 por día con 4 personas lo que reduce el costo total de la obra y el tiempo de su realización ya que no requiere de mano de obra calificada', NULL, NULL, 0, 1, 666, 2),
(101, 'Característica 6 - Titulo', 'NORMATIVIDAD Y SOPORTE TÉCNICO', NULL, NULL, 0, 1, 666, 2),
(102, 'Característica 6 - Descripción', 'Cumple con los reglamentos de construcción del D.F. y Jalisco, ha sido respaldado por diversos organismos de prestigio en su base e control de calidad, prueba de laboratorio IMC y C (instituto mexicano del cemento y del concreto A.C.)', NULL, NULL, 0, 1, 666, 2),
(103, 'Colocación 1 - Icono', NULL, 'jymKG7l7CwNM7IoVsoak3916hApWFG.png', NULL, 1, 1, 666, 2),
(104, 'Colocación 1 - Texto', 'Subir y nivelar las vigas', NULL, NULL, 0, 1, 666, 2),
(105, 'Colocación 2 - Icono', NULL, '5ESjL4zOm0359vlNIsFzAlsyXZ9otO.png', NULL, 1, 1, 666, 2),
(106, 'Colocación 2 - Texto', 'Colocación de las Losas D´Casster´s', NULL, NULL, 0, 1, 666, 2),
(107, 'Colocación 3 - Icono', NULL, 'sTY317LpcDQMDK0Fj5HPvaizxRYb4g.png', NULL, 1, 1, 666, 2),
(108, 'Colocación 3 - Texto', 'Aplicación de lechada', NULL, NULL, 0, 1, 666, 2),
(109, 'Colocación 4 - Icono', NULL, '6gk4qB0TID19tTLk0Ds0bBWHWuAIeI.png', NULL, 1, 1, 666, 2),
(110, 'Colocación 4 - Texto', 'Aplicación de hormigón de terminados y nivelaciones', NULL, NULL, 0, 1, 666, 2),
(111, 'Portada', NULL, 'gOK30N2W0Z6dFGNGtcUwBmKR8Qbo4n.jpg', NULL, 1, 1, 666, 3),
(112, 'Portada Texto', 'Perlita Mineral', NULL, NULL, 0, 1, 666, 3),
(113, 'Texto', 'Perlita Mineral', NULL, NULL, 0, 1, 666, 3),
(114, 'Imagen', NULL, 'Hlv0PlCaX2cgEB5Cfd6qcM2nqf4zRG.png', NULL, 1, 1, 666, 3),
(115, 'Imagen', NULL, 'JCre0TtNdKUtIMD1u19baMrqSXNCD0.png', NULL, 1, 1, 666, 3),
(116, 'Texto', 'Lorem ipsum dolor sit amet iusto? Exercitationem laudantium molestias minus nesciunt nostrum in! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio laborum saepe quae voluptatum asperiores ipsam consequatur sint natus perspiciatis, pariatur excepturi quam, ad doloremque laudantium. Aut praesentium odit laudantium dolores?\nLorem ipsum dolor sit amet iusto? Exercitationem laudantium molestias minus nesciunt nostrum in! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio laborum saepe quae voluptatum asperiores ipsam consequatur sint natus perspiciatis, pariatur excepturi quam, ad doloremque laudantium. Aut praesentium odit laudantium dolores?', 'WPQqZyQGbCRwZu49OQfGTqRoPRneRw.png', NULL, 0, 1, 666, 3),
(117, 'Mezclado 1 - Icono', 'Agregar el cemento y mezclar hasta formar una lechada uniforme', NULL, NULL, 1, 1, 666, 3),
(118, 'Mezclado 1 - Texto', NULL, 'CyMod4tHy2uDZwcZb8qH6lOQROzcBr.png', NULL, 0, 1, 666, 3),
(119, 'Mezclado 2 - Icono', 'Vaciar el agua', NULL, NULL, 1, 1, 666, 3),
(120, 'Mezclado 2 - Texto', NULL, 'lcEpSaWcA6nJpGhYpK3hRijsi34wyy.png', NULL, 0, 1, 666, 3),
(121, 'Mezclado 3 - Icono', 'Agregar y revolver hasta que el mortero presente la plasticidad y homogeneidad adecuada para su aplicación', NULL, NULL, 1, 1, 666, 3),
(122, 'Mezclado 3 - Texto', NULL, '0DPKmq2VxNWOyBv6qG4fd7gR5Rw1Oi.jpg', NULL, 0, 1, 666, 3),
(123, 'Portada', NULL, 'wJmmOkSNwu0MDIlezXF1gWnUREzRWq.jpg', NULL, 1, 1, 666, 4),
(124, 'Portada Texto', 'Empresas que llevan nuestro producto', NULL, NULL, 0, 1, 666, 4),
(125, 'Portada', '', 'pm7WbpIMhDg0r92VziA2R6fRyKi7bg.jpg', NULL, 1, 1, 666, 5),
(126, 'Portada Texto', 'Tenemos 25 años de Experiencia', NULL, NULL, 0, 1, 666, 5),
(127, 'Imagen grande', NULL, 'X9iScRc780h0RB4zuXvHo5UWM7ATrr.png', NULL, 1, 1, 666, 5),
(128, 'Imagen peque', NULL, 'kC4phtuZG9qYWLtTA9z1p8kYe3ijQl.png', NULL, 1, 1, 666, 5),
(129, 'Texto 1', 'Te contamos sobre', NULL, NULL, 0, 1, 666, 5),
(130, 'Texto 2', 'Nosotros', NULL, NULL, 0, 1, 666, 5),
(131, 'Texto 3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit illum dolorum, aut odit sunt ipsam molestiae incidunt maiores temporibus doloribus ab officia placeat ratione veniam quidem molestias accusamus quo nam mollitia in dolor ipsum asperiores saepe beatae. Eveniet rerum incidunt corporis veritatis in, reiciendis, quod mollitia accusamus magnam architecto minima magni quidem. Eum explicabo aperiam corrupti doloribus quibusdam perspiciatis optio omnis sunt quam totam necessitatibus commodi quia, qui laboriosam alias mollitia est illum expedita consectetur dignissimos incidunt assumenda ducimus. Totam dolorem nemo officia eos quis omnis maiores voluptatibus, facere consequatur temporibus! Dolore debitis exercitationem illo quos qui ut distinctio suscipit.', NULL, NULL, 0, 1, 666, 5),
(132, 'Icono 1', NULL, 'zE8XTehtguCV3LIxxbPkRt5RjPZysv.png', NULL, 1, 1, 666, 5),
(133, 'Titulo 1', 'Visión', NULL, NULL, 0, 1, 666, 5),
(134, 'Descripción 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel quibusdam mollitia deserunt iure voluptate libero nobis doloremque culpa placeat odio iusto, cumque repellendus eaque quaerat, nihil maxime quasi dolorem.', NULL, NULL, 0, 1, 666, 5),
(135, 'Icono 2', NULL, 'hlAJEvCzxqHjYHVGcysP9I1AXTD5ce.png', NULL, 1, 1, 666, 5),
(136, 'Titulo 2', 'Misión', NULL, NULL, 0, 1, 666, 5),
(137, 'Descripción 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel quibusdam mollitia deserunt iure voluptate libero nobis doloremque culpa placeat odio iusto, cumque repellendus eaque quaerat, nihil maxime quasi dolorem.', NULL, NULL, 0, 1, 666, 5),
(138, 'Icono 3', NULL, 'qKRMit9uZ44IFyBeW6CCyXKg8U6VAP.png', NULL, 1, 1, 666, 5),
(139, 'Titulo 3', 'Valores', NULL, NULL, 0, 1, 666, 5),
(140, 'Descripción 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel quibusdam mollitia deserunt iure voluptate libero nobis doloremque culpa placeat odio iusto, cumque repellendus eaque quaerat, nihil maxime quasi dolorem.', NULL, NULL, 0, 1, 666, 5),
(141, 'Portada', NULL, 'oIHgiDgjlzCEvP7pLtt5XkyV373ElF.jpg', NULL, 1, 1, 666, 6),
(142, 'Portada Texto', 'Ponte en Contacto', NULL, NULL, 0, 1, 666, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rfc` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `numext` varchar(255) DEFAULT NULL,
  `numint` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` text NOT NULL,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_163806_create_admins_table', 1),
(5, '2020_10_14_181530_create_configuracions_table', 1),
(6, '2020_12_08_170359_create_carrusels_table', 1),
(7, '2020_12_09_193424_create_politicas_table', 1),
(8, '2020_12_16_000636_create_faqs_table', 1),
(9, '2021_02_02_175759_create_seccions_table', 1),
(10, '2021_02_02_175823_create_elementos_table', 1),
(13, '2021_10_27_064531_create_categorias_table', 2),
(19, '2021_04_01_184932_create_productos_table', 3),
(20, '2021_04_02_200200_create_productos_photos_table', 3),
(24, '2022_07_18_203052_create_vacantes_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `guia` varchar(255) DEFAULT NULL,
  `linkguia` text DEFAULT NULL,
  `domicilio` bigint(20) UNSIGNED NOT NULL,
  `factura` tinyint(1) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `iva` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `envio` double(9,2) DEFAULT NULL,
  `comprobante` varchar(255) DEFAULT NULL,
  `cupon` varchar(255) DEFAULT NULL,
  `cancelado` tinyint(1) DEFAULT 0,
  `usuario` bigint(20) UNSIGNED NOT NULL,
  `data` text DEFAULT NULL,
  `envia_resp` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalles`
--

CREATE TABLE `pedido_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(9,2) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `pedido` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `color` bigint(20) UNSIGNED DEFAULT NULL,
  `log` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`id`, `titulo`, `descripcion`, `archivo`, `created_at`, `updated_at`) VALUES
(1, 'aviso de privacidad', NULL, NULL, NULL, '2022-03-31 17:19:19'),
(2, 'metodos de pago', NULL, NULL, NULL, NULL),
(3, 'devoluciones', NULL, NULL, NULL, NULL),
(4, 'terminos y condiciones', NULL, NULL, NULL, NULL),
(5, 'garantias', NULL, NULL, NULL, NULL),
(6, 'politicas de envio', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso_perlita_minerals`
--

CREATE TABLE `proceso_perlita_minerals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proceso_perlita_minerals`
--

INSERT INTO `proceso_perlita_minerals` (`id`, `numero`, `nombre`, `foto`, `aux`, `created_at`, `updated_at`) VALUES
(1, NULL, 'uno', 'gPVc1AzYlf617GaizgkDPkFNteI6Bi.jpeg', NULL, '2023-06-03 00:01:31', '2023-06-03 00:01:31'),
(2, NULL, 'Proceso 2', 'qNQcgHlydWtObO2v9Op4lk1VpYb29U.png', NULL, '2023-06-03 03:29:29', '2023-06-03 03:29:29'),
(3, NULL, 'Proceso 3', 'uMjNI0fc8xvoRYkmyNeCekpaIalacg.jpeg', NULL, '2023-06-03 03:29:49', '2023-06-03 03:29:49'),
(4, NULL, 'Proceso 4', 'IDq1ZHtYcy0Wm8kdJDron6eOvqPPXf.png', NULL, '2023-06-03 03:31:41', '2023-06-03 03:31:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `portada`, `pdf`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(19, 'Guardias especializados', '<p>Nuestros guardias de seguridad son producto de un estricto proceso, iniciando con est&aacute;ndares de selecci&oacute;n que supera los marcados por certificaciones internacionales como BASC e ISO, garantizando as&iacute; que los elementos contratados cuenten con las caracter&iacute;sticas &nbsp;necesarias para cubrir las necesidades de todos nuestros clientes.</p>\r\n<p>Para SEKTOR la capacitaci&oacute;n es esencial, por ello todos nuestros guardias de seguridad son capacitados desde el primer d&iacute;a que ingresan, reciben adem&aacute;s, revisiones y actualizaciones constantemente para cumplir siempre con las necesidades m&aacute;s estrictas de cada servicio.</p>\r\n<p>Nuestros elementos son reevaluados constante y peri&oacute;dicamente para verificar que no presenten desviaciones y se mantengan alineados con las pol&iacute;ticas y lineamientos internos establecidos para cada servicio.</p>\r\n<p>Todos nuestros guardias cuentan con soporte por medios tecnol&oacute;gicos, monitoreo dedicado y diversos tipos de controles aplicados, sabemos que cada cliente tiene necesidades espec&iacute;ficas por lo que nuestros especialistas ser&aacute;n de gran ayuda para identificar la mejor manera de proteger el patrimonio de nuestros clientes.</p>', NULL, NULL, NULL, 1, 1, 666, '2022-07-19 23:43:45', '2022-11-17 03:49:09'),
(21, 'Custodias de mercancía', '<p style=\"text-align: justify;\">Pasa SEKTOR custodiar el traslado de tu mercanc&iacute;as significa mucho m&aacute;s que simplemente \"acompa&ntilde;arlas\" durante el trayecto.</p>\r\n<p style=\"text-align: justify;\">Sabemos el valor, no s&oacute;lo econ&oacute;mico, sino estrat&eacute;gico y de oportunidad que tiene cada embarque; teniendo esto en cuenta desarrollamos estrategias de acuerdo a las caracter&iacute;sticas de cada servicio, implementando procesos operativos detallados para mantener la trazabilidad de la mercanc&iacute;a en todo momento, para ello contamos con sistemas tecnol&oacute;gicos de punta para el rastreo y monitoreo detallado de cada embarque.</p>\r\n<p style=\"text-align: justify;\">Mantenemos un monitoreo dedicado de cada custodia para detectar situaciones de riesgo y actuar de manera oportuna ante cada incidencia, manteniendo una constante comunicaci&oacute;n con clientes y autoridades desde nuestra central de monitoreo de &uacute;ltima generaci&oacute;n.</p>', NULL, NULL, NULL, 1, 1, 666, '2022-08-04 20:55:44', '2022-10-21 21:27:39'),
(22, 'Servicio de seguridad moviles', '<div>Nuestro servicio de seguridad m&oacute;vil es una excelente opci&oacute;n para peque&ntilde;os y medianos negocios, en este servicio un guardia de seguridad realiza patrullajes a un n&uacute;mero limitado de clientes, el guardia puede realizar m&uacute;ltiples consignas, desde prevenir el robo, verificar cierre de instalaciones y apagar sistemas de energ&iacute;a.</div>', NULL, NULL, NULL, 1, 1, 666, '2022-08-08 18:49:27', '2022-11-17 00:29:51'),
(23, 'Monitore de alarmas', '<p style=\"text-align: justify;\">Sektor es una empresa seria, comprometida y dedicada a la seguridad integral. Siete a&ntilde;os de experiencia nos respaldan.</p>\r\n<p style=\"text-align: justify;\">Pregunta por nuestros paquetes de monitoreo<br /><strong>Aproveche los beneficios que sektor le ofrece:</strong></p>\r\n<ul>\r\n<li style=\"text-align: justify;\">Contrataci&oacute;n de monitoreo de alarmas SIN plazos forzosos.&nbsp;</li>\r\n<li style=\"text-align: justify;\">Nuestra central de monitoreo se encuentra en <strong>GUADALAJARA</strong></li>\r\n<li style=\"text-align: justify;\">Contamos con la mejor y m&aacute;s avanzada tecnolog&iacute;a.</li>\r\n<li style=\"text-align: justify;\">Contamos con equipo de patrullaje propio.</li>\r\n<li style=\"text-align: justify;\">Ofrecemos equipos de alarma en comodato</li>\r\n<li style=\"text-align: justify;\">Nuestros sistemas de monitoreo trabajan bajo est&aacute;ndares de clase mundial.</li>\r\n</ul>', NULL, NULL, NULL, 1, 1, 666, '2022-08-08 23:51:20', '2022-11-17 00:33:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_photos`
--

CREATE TABLE `productos_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_photos`
--

INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`) VALUES
(14, 19, NULL, '1vzHMEiCSrMSk9poMBXWxxTZKqVmrC.jpg', 666),
(16, 22, NULL, '8n55vmjIzHKpoWOcUux35afingnqZA.jpg', 666),
(17, 23, NULL, 'QlbB541AxzCEQt3GtQVcTSZHxNNPKR.jpg', 666),
(18, 21, NULL, 'Tmbn4wocnxS6vAFCYSxNqN1oqQY4WS.jpg', 666),
(19, 24, NULL, 'ZeUHxn65A5vq1liG0RIiyQEK9wnK33.jpg', 666),
(21, 25, NULL, 'v7CdsDroB49bSYSdblRHp3BSPmLyxP.jpg', 666),
(33, 19, NULL, 'QvQdPyE4TWADyZSdrbnbhObvNM47a4.jpg', 666),
(34, 19, NULL, 'ZIgHbxUkoMyJyGMYoIXK79dbdbF9Xc.jpg', 666),
(35, 19, NULL, '9BhI8hIA7BxH1YBtxKF5ijfFCPqwGU.jpg', 666),
(37, 21, NULL, 'V9rAxFS5QRUMcrqEYjmOLtiLRhH8JA.jpg', 666),
(38, 21, NULL, 'eD8yaW3whet2nlV2jOU42bo8gDhQgZ.jpg', 666),
(39, 21, NULL, 'WD4Pg42xTwCA6b1BBl3Urs2LlC2b0Q.jpg', 666),
(40, 22, NULL, 'cxGoJDtLDN9opAA1IQl9JrQGuYO9p0.jpg', 666),
(41, 22, NULL, 'v024JOAh6VvceMvasBui6BIS2lHgcK.jpg', 666),
(42, 23, NULL, 'YMy765RMsN2sCvJN9hFl3WFoxlJGZ7.jpg', 666),
(43, 23, NULL, 'gl9mEfOqg7VvjIqyvaE8QRPiejjVyM.jpg', 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_presentacions`
--

CREATE TABLE `producto_presentacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_relacions`
--

CREATE TABLE `producto_relacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `otroProducto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_relacions`
--

INSERT INTO `producto_relacions` (`id`, `producto`, `otroProducto`) VALUES
(1, 24, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_sizes`
--

CREATE TABLE `producto_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_variantes`
--

CREATE TABLE `producto_variantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `presentacion` bigint(20) UNSIGNED NOT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `precio` varchar(255) NOT NULL,
  `descuento` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `tipo_envio` varchar(255) DEFAULT NULL,
  `peso` varchar(255) DEFAULT NULL,
  `largo` varchar(255) DEFAULT NULL,
  `ancho` varchar(255) DEFAULT NULL,
  `alto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `descripcion`, `foto`, `aux`, `created_at`, `updated_at`) VALUES
(1, 'Uno', 'Desccc', 'xgvgtFYQSK7i22KqQKtf04TOUT6AiJ.jpeg', NULL, '2023-06-02 23:25:15', '2023-06-02 23:25:15'),
(4, 'Proyecto 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'HbrkSwTo5nFMZ4YuI9fFFwVG42VRsw.jpeg', NULL, '2023-06-03 03:20:24', '2023-06-03 03:20:24'),
(5, 'Proyecto 3', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'hTepmyGyZSxPdGg34crDp7g4j4xWji.jpg', NULL, '2023-06-03 03:24:43', '2023-06-03 03:24:43'),
(6, 'Proyecto 4', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '51akdR23GQ6SLSEGfMPnPSMOjqzwZH.jpeg', NULL, '2023-06-03 03:27:09', '2023-06-03 03:27:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldos`
--

CREATE TABLE `respaldos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seccion` varchar(255) NOT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id`, `seccion`, `portada`, `slug`, `icon`) VALUES
(1, 'Home', NULL, 'home', 'fas fa-home'),
(2, 'Losas D\'Casster\'s', NULL, 'slabs', 'fa-solid fa-person-digging'),
(3, 'Perlita Mineral', NULL, 'perlite', 'fa-solid fa-mound'),
(4, 'Proyectos', NULL, 'projects', 'fa-solid fa-diagram-project'),
(5, 'Nosotros', NULL, 'about-us', 'fa-solid fa-address-card'),
(6, 'Contacto', NULL, 'contact', 'fas fa-paper-plane');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_photos`
--

CREATE TABLE `servicios_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicio` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_principals`
--

CREATE TABLE `slider_principals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text DEFAULT 'texto',
  `imagen` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `slider_principals`
--

INSERT INTO `slider_principals` (`id`, `titulo`, `imagen`, `aux`, `created_at`, `updated_at`) VALUES
(1, 'Losas Ideales para Techo y Entrepiso', 'qM03kDoHjMXEjH1tKqdGraXRMQGfvp.jpg', NULL, '2023-06-01 22:02:20', '2023-06-03 02:58:06'),
(2, 'ssss', 'aPszwCCQbDwqlPR88hMJg2ZJFlYHaE.jpg', NULL, '2023-06-01 22:16:10', '2023-06-01 22:16:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_videos`
--

CREATE TABLE `slider_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` text DEFAULT NULL,
  `archivo` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `slider_videos`
--

INSERT INTO `slider_videos` (`id`, `link`, `archivo`, `aux`, `tipo`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/watch?v=qPuvqm8s6qs', 'NO', NULL, 0, '2023-06-02 04:00:13', '2023-06-02 04:00:13'),
(3, NULL, 'ZiLEhxdEoa3oTLBaxhaBEAUMqlspQo.mp4', NULL, 1, '2023-06-02 04:01:14', '2023-06-02 04:01:14'),
(4, 'https://www.youtube.com/watch?v=_6iN4oJ9MKM', 'NO', NULL, 0, '2023-06-02 04:21:51', '2023-06-02 04:21:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `rfc` varchar(255) DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `puntos` int(11) NOT NULL,
  `distr_code` varchar(255) NOT NULL,
  `referido_by` varchar(255) DEFAULT NULL,
  `distribuidor` tinyint(1) NOT NULL DEFAULT 0,
  `profile` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `email`, `email_verified_at`, `telefono`, `facebook`, `empresa`, `avatar`, `rfc`, `nivel`, `puntos`, `distr_code`, `referido_by`, `distribuidor`, `profile`, `activo`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yahir', 'lopez', '', 'yahir@wozial.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', NULL, 0, NULL, 1, NULL, '$2y$10$ixFvI1ajnMzpjT8EhK0KsOzC/I8X5prS5vUZLKCsh2eOf7zllQPim', NULL, '2022-02-28 18:49:39', '2022-02-28 23:10:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `oferta` text NOT NULL,
  `requisitos` text NOT NULL,
  `vacantesdisp` varchar(255) NOT NULL,
  `salario` varchar(255) NOT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`id`, `portada`, `titulo`, `subtitulo`, `oferta`, `requisitos`, `vacantesdisp`, `salario`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'zlidnodXw0kt1bD9KLmjVE4uyZGl9d.jpg', 'Guardia de Seguridad', 'Excelente oportunidad', '<ul>\r\n<li>TURNOS DE 8HRS</li>\r\n<li>TRANSPORTE Y COMEDOR</li>\r\n<li>PAGO QUINCENAL BANORTE</li>\r\n<li>UNIFORMES SIN COSTO</li>\r\n<li>SEGURO SOCIAL DESDE EL PRIMER DIA</li>\r\n<li>PRESTACIONES DE LEY</li>\r\n</ul>', '20 a 55 años; Secundaria terminada; Disponibilidad de horario; Documentación básica', '5', '$8,000 a $9,500', 0, 1, 666, NULL, '2022-11-17 23:13:41'),
(2, 'vCxiroFkU4gNJrjoVNoY2nRkfdZmIN.jpg', 'Custodio Carretero', 'Sueldo base mas comisiones', '<div>\r\n<p><strong>PAGO: SUELDO BASE MAS COMISIONES POR KM. BANORTE.</strong><strong>&nbsp;<br /></strong><strong>PRESTACIONES DE LEY </strong></p>\r\n</div>', '24 a 45 años; Secundaria o preparatoria terminada; Conocimiento en carreteras federales; Licencia de chofer vigente; Manejar STD ; Cartilla o Pre cartilla; Disponibilidad de horario; Estable', '5', 'Base mas comisiones', 0, 1, 666, '2022-07-21 00:04:40', '2022-10-21 21:49:28'),
(4, 'xtuLYDKWRo8Hgq0wBohEV0IyEhN2e6.jpg', 'Monitoristas', '$9000 - $10000000 libres', '<div>\r\n<p><strong>PAGO QUINCENAL NOMINA BANORTE<br /></strong><strong>ESTABILIDAD LABORAL.<br /></strong><strong>PRESTACIONES DE LEY<br /></strong><strong>$9,000 MENSUAL</strong></p>\r\n</div>', '24 a 45 años; Preparatoria terminada; Disponibilidad de horarias; Experiencia CCTV y/o GPS; Atención al cliente; Estable', '5', '$9,000', 0, 1, 666, '2022-07-21 00:06:48', '2022-10-21 21:50:13'),
(5, 'byftULI9aK8jZqwU2p8fqjvpFF9r0u.jpg', 'Técnico Instalador', '$9000 - $10000000 libres', '<div>\r\n<p><strong>*BASE MAS COMISIONES </strong></p>\r\n<p><strong>*PAGO QUINCENAL NOMINA BANORTE</strong></p>\r\n<p><strong>*PRESTACIONES DE LEY</strong></p>\r\n<p><strong>*CONOCIMIENTO DE LA CIUDAD </strong></p>\r\n<p><strong>*LIC. DE CHOFER VIGENTE, MANEJAR STD</strong></p>\r\n</div>', '24 a 45 años; Preparatoria y/o carrera técnica  en electrónica y/o a fin; Experiencia comprobable; Manejo de herramientas manuales; Manejo de computadora', '5', 'Sueldo base más comisiones', 0, 1, 666, '2022-07-21 00:08:12', '2022-10-21 21:53:57'),
(6, 'x8DstmATXRfYZIFzSJZjYNmA3JeQOy.jpg', 'Supervisor de guardias', 'Sueldo atractivo', '<div>\r\n<p><strong>SUELDO COMPETITIVO<br /></strong><strong>PAGO QUINCENAL NOMINA BANORTE<br /></strong><strong>PRESTACIONES DE LEY<br /></strong><strong>BONOS POR DESEMPE&Ntilde;O</strong></p>\r\n</div>', '25 a 48 años; Preparatoria terminada; Disponibilidad de horario; Paquete office; Licencia de chofer vigente; Manejo de STD; Cursos básicos de seguridad privada; Experiencia en manejo de personal', '5', 'Sueldo atractivo', 0, 1, 666, '2022-08-08 18:55:52', '2022-10-21 21:54:33'),
(9, 'JRtZYCWEpzphBCdtnpYGKUmqfV3bQp.jpg', 'Asesor Comercial', 'Excelente esquema de comisiones', '<div>turno de 8 Horas</div>\r\n<div>Comisiones por ventas</div>\r\n<div>&nbsp;</div>', 'Excelente presentación; Pro activo; Vehículo Propio', '3', '$8000 a $20000', 0, 0, 666, '2022-11-17 23:06:01', '2022-11-17 23:06:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventajas_uso`
--

CREATE TABLE `ventajas_uso` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texto` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusels`
--
ALTER TABLE `carrusels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificacions`
--
ALTER TABLE `certificacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domicilios_user_foreign` (`user`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `elementos_seccion_foreign` (`seccion`);

--
-- Indices de la tabla `proceso_perlita_minerals`
--
ALTER TABLE `proceso_perlita_minerals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_relacions`
--
ALTER TABLE `producto_relacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respaldos`
--
ALTER TABLE `respaldos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccions`
--
ALTER TABLE `seccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider_principals`
--
ALTER TABLE `slider_principals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider_videos`
--
ALTER TABLE `slider_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventajas_uso`
--
ALTER TABLE `ventajas_uso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificacions`
--
ALTER TABLE `certificacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `proceso_perlita_minerals`
--
ALTER TABLE `proceso_perlita_minerals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `producto_relacions`
--
ALTER TABLE `producto_relacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `respaldos`
--
ALTER TABLE `respaldos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seccions`
--
ALTER TABLE `seccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `slider_principals`
--
ALTER TABLE `slider_principals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `slider_videos`
--
ALTER TABLE `slider_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ventajas_uso`
--
ALTER TABLE `ventajas_uso`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
