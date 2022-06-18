-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2022 a las 18:36:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beneficencia_paita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio`
--

CREATE TABLE `directorio` (
  `id_directorio` int(11) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directorio`
--

INSERT INTO `directorio` (`id_directorio`, `imagen`, `nombres`, `apellidos`, `cargo`, `estado`, `creado`, `actualizado`) VALUES
(1, '', 'Eusebio Teofilo ', 'Junco Rumiche', 'Presidente', 'Activo', '2021-08-25 15:03:37', '2021-08-16 19:59:18'),
(2, '', 'Juan Gerardo', 'Ríos Gómez', 'Miembro', 'Activo', '2021-08-25 15:03:46', '2021-07-19 16:48:08'),
(3, '', 'Prudencia Herenia', 'Rosado de Aldana', 'Miembro', 'Activo', '2021-08-25 15:03:42', '2021-07-20 17:33:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL,
  `lugar` varchar(200) DEFAULT NULL,
  `detalle` varchar(5000) DEFAULT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria-serfin`
--

CREATE TABLE `galeria-serfin` (
  `id` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `public_id` varchar(250) NOT NULL,
  `creado` int(11) NOT NULL,
  `actualizado` int(11) DEFAULT NULL,
  `eliminado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria-serfin`
--

INSERT INTO `galeria-serfin` (`id`, `imagen`, `public_id`, `creado`, `actualizado`, `eliminado`) VALUES
(2, 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/galeriaserfin/6YUWA.jpg?_a=AAAEuAI', 'beneficencia/galeriaserfin/6YUWA', 2021, 2021, NULL),
(3, 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/galeriaserfin/4O0D8.jpg?_a=AAAEuAI', 'beneficencia/galeriaserfin/4O0D8', 2021, 2021, NULL),
(4, 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/galeriaserfin/6W4ZU.jpg?_a=AAAEuAI', 'beneficencia/galeriaserfin/6W4ZU', 2021, 2021, NULL),
(5, 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/galeriaserfin/58T47.jpg?_a=AAAEuAI', 'beneficencia/galeriaserfin/58T47', 2021, 2021, NULL),
(6, 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/galeriaserfin/M489Y.jpg?_a=AAAEuAI', 'beneficencia/galeriaserfin/M489Y', 2021, 2021, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen-noticia`
--

CREATE TABLE `imagen-noticia` (
  `id` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `asunto` varchar(500) DEFAULT NULL,
  `mensaje` varchar(5000) NOT NULL,
  `nombre_envia` varchar(100) NOT NULL,
  `correo_envia` varchar(100) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'no leido',
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nichos`
--

CREATE TABLE `nichos` (
  `id` int(11) NOT NULL,
  `nivel` varchar(5) NOT NULL,
  `precio` double(6,2) NOT NULL,
  `tipo` char(1) NOT NULL,
  `creado` int(11) NOT NULL,
  `actualizado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nichos`
--

INSERT INTO `nichos` (`id`, `nivel`, `precio`, `tipo`, `creado`, `actualizado`) VALUES
(1, '1', 5775.00, 'v', 2021, 2021),
(2, '2', 6187.50, 'v', 2021, 2021),
(3, '3', 6187.50, 'v', 2021, 2021),
(4, '1', 650.00, 'p', 2021, 2021),
(5, '1', 3850.00, 'a', 2021, 2021),
(6, '2', 4125.00, 'a', 2021, 2021),
(7, '2', 800.00, 'p', 2021, 2021),
(8, '3', 800.00, 'p', 2021, 2021),
(9, '4', 5775.00, 'v', 2021, 2021),
(10, '5', 4200.00, 'v', 2021, 2021),
(11, '6', 3000.00, 'v', 2021, 2021),
(12, '7', 2250.00, 'v', 2021, 2021),
(13, '4', 700.00, 'p', 2021, 2021),
(14, '5', 700.00, 'p', 2021, 2021),
(15, '6', 650.00, 'p', 2021, 2021),
(16, '7', 500.00, 'p', 2021, 2021),
(17, '3', 4125.00, 'a', 2021, 2021),
(18, '4', 3850.00, 'a', 2021, 2021),
(19, '5', 2800.00, 'a', 2021, 2021),
(20, '6', 2000.00, 'a', 2021, 2021),
(21, '7', 1500.00, 'a', 2021, 2021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL,
  `historia` varchar(5000) DEFAULT NULL,
  `imagen_historia` varchar(500) DEFAULT NULL,
  `mision` varchar(5000) DEFAULT NULL,
  `vision` varchar(5000) DEFAULT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id`, `historia`, `imagen_historia`, `mision`, `vision`, `telefono`, `correo`, `direccion`, `creado`, `actualizado`) VALUES
(1, '<p style=\"margin: 0cm 0cm 12pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"font-size:10.0pt;font-family:\" arial\",sans-serif;color:#373545;=\"\" mso-themecolor:text2\"=\"\">La historia de las Beneficencias en el Perú data del\r\nsiglo XVI, cuando con ocasión de la firma de las Capitulaciones de Toledo en\r\n1529, se hizo mención a la necesidad de fundar una entidad benéfica en nuestro\r\npaís. Una de las primeras medidas adoptadas en tal sentido, fue disponer la\r\nconstrucción de hospitales, y por tal motivo, es posible afirmar que la obra de\r\nlas Beneficencias se inició en estas instituciones.<o:p></o:p></span></p><p style=\"margin: 12pt 0cm; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"font-size:10.0pt;font-family:\" arial\",sans-serif;color:#373545;=\"\" mso-themecolor:text2\"=\"\">Más adelante, en 1602, el Virrey Luis de Velasco fundó la\r\nHermandad de Vecinos encargados del cuidado del Hospital San Andrés, que en\r\nsetiembre de 1819, se convirtió en la Real Junta de Beneficencia.<o:p></o:p></span></p><p style=\"margin: 12pt 0cm; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"font-size:10.0pt;font-family:\" arial\",sans-serif;color:#373545;=\"\" mso-themecolor:text2\"=\"\">Esta institución tuvo a su cargo la administración del\r\nRamo de Suertes, la Plaza de Toros, el Cementerio General y Hospitales como\r\n“Santa Ana”, “San Bartolomé”, “Incurables”, entre otros.<o:p></o:p></span></p><p style=\"margin: 12pt 0cm; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"font-size:10.0pt;font-family:\" arial\",sans-serif;color:#373545;=\"\" mso-themecolor:text2\"=\"\">En 1834, a inicios de nuestra vida republicana, el\r\nPresidente Provisional don Luis José de Orbegoso expidió un Decreto mediante el\r\ncual se instituye el nombre de Sociedad de Beneficencia de Lima en reemplazo de\r\nla Real Junta de Beneficencia, otorgándole personería jurídica y encomendándole\r\nlos establecimientos de caridad para su conducción y administración. A partir\r\nde ese momento, se irían creando progresivamente, entidades benéficas en todo\r\nel país.<o:p></o:p></span></p><p style=\"margin: 12pt 0cm; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"font-size:10.0pt;font-family:\" arial\",sans-serif;color:#373545;=\"\" mso-themecolor:text2\"=\"\">Don Remigio Morales Bermúdez promulgó en 1893, la primera\r\nley destinada a organizar las instituciones de Beneficencia de la República,\r\nestableciendo que estas entidades tenían por “único objeto el apoyo y\r\nprotección de los desvalidos”. Respecto a su naturaleza, podían ser públicas o\r\nprivadas. Con relación a su dependencia funcional, el Ministerio de Justicia\r\ntuvo a su cargo el denominado Departamento de Beneficencia hasta 1935, año en\r\nque la Ley Nº8124 dispuso su traslado al Ministerio de Salud Pública, Trabajo y\r\nPrevisión Social. Hasta 1996, las Sociedades de Beneficencia Pública\r\ndependieron de este sector. En la actualidad, el Perú cuenta con 102 Sociedades\r\nde Beneficencia Pública y Juntas de Participación Social activas a nivel\r\nnacional, y es posible señalar que, existen en los 24 departamentos de nuestro\r\npaís.</span></p><p style=\"margin: 12pt 0cm; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;\"><span style=\"\" arial\",sans-serif;color:#373545;=\"\" mso-themecolor:text2\"=\"\"><span style=\"font-size: 13.3333px;\">La Sociedad de Beneficencia Pública de Paita, cuenta con 97 años, su creación se dio por Resolución Suprema expedida por el Presidente Augusto B. Leguía en 1823. Y fue el presidente Oscar R. Benavidez quien dio la ley 8128 en el año 1935; que fue la de reorganización de la Sociedades de Beneficencia.</span><br></span></p>', 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/nosotros/imagenhistoria.png?_a=AAAEuAI', '<font color=\"#000000\"><b>SOCIEDAD DE BENEFICENCIA DE PAITA </b>tiene por misión Brindar atención integral a los niños (as), adolescentes, madres gestantes y adultos mayores en abandono, riesgo social y/o situación de extrema pobreza con calidez, calidad y eficacia.</font><br>', '<span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><b>SOCIEDAD DE BENEFICENCIA DE PAITA</b> se consolida como una Institución eficiente y eficaz en la Región, efectuando un trabajo multisectorial a favor de los más necesitados. Es una Organización que se caracteriza por contribuir a la creación de capacidades para el auto-desarrollo de los beneficiarios y por haber logrado diversificar oportunamente sus fuentes de ingresos, contando para ello con personal calificado que se identifica con la misión Institucional.</span>', '960293503', 'Sbp_paita@hotmail.com', 'CARRETERA PAITA - SULLANA  KM 1 Mz ', '2021-08-25 18:45:16', '2021-08-25 18:45:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `contenido` varchar(5000) DEFAULT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serfin`
--

CREATE TABLE `serfin` (
  `id` int(11) NOT NULL,
  `brinda` varchar(5000) NOT NULL,
  `mensualidad` varchar(5000) NOT NULL,
  `requisitos` varchar(5000) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `serfin`
--

INSERT INTO `serfin` (`id`, `brinda`, `mensualidad`, `requisitos`, `creado`, `actualizado`) VALUES
(2, '<ul><li style=\"color: rgb(0, 0, 0) !important;\">Nicho en quinta fila</li><li style=\"color: rgb(0, 0, 0) !important;\">Ataúd tipo biblia o imperial de madera</li><li style=\"color: rgb(0, 0, 0) !important;\">Servicio de capilla ardiente</li><li style=\"color: rgb(0, 0, 0) !important;\">Arreglo floral</li><li style=\"color: rgb(0, 0, 0) !important;\">Carroza fúnebre</li><li style=\"color: rgb(0, 0, 0) !important;\">Aviso Por Radio</li></ul>', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none; padding: 0px; color: rgb(159, 159, 159); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\"><li style=\"color: rgb(0, 0, 0) !important;\">Cuota Mensual: S/ 25.00</li><li style=\"color: rgb(0, 0, 0) !important;\">Si hay beneficiarios mayores a 60 años se incrementara el 40% de la cuota mensual</li></ul>', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none; padding: 0px; color: rgb(159, 159, 159); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px;\"><li style=\"color: rgb(0, 0, 0) !important;\">Copias de DNI del titular y Beneficiarios</li><li style=\"color: rgb(0, 0, 0) !important;\">Inscripcion de S/25.00</li></ul>', '2021-08-24 17:41:54', '2021-08-24 17:41:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `contenido` varchar(10000) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `imagen`, `contenido`, `creado`, `actualizado`) VALUES
(1, 'nichos', 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/servicios/imagennichos.jpg?_a=AAAEuAI', '', '2021-08-24 19:47:18', '2021-08-24 19:47:18'),
(2, 'serfin', 'https://res.cloudinary.com/luishj/image/upload/v1/beneficencia/servicios/imagenserfin.png?_a=AAAEuAI', '', '2021-08-24 18:28:34', '2021-08-24 18:28:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slides`
--

CREATE TABLE `slides` (
  `id_slide` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `public_id` varchar(250) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `contenido` varchar(1000) DEFAULT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL,
  `eliminado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `contraseña` varchar(500) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `nombres`, `apellidos`, `sexo`, `contraseña`, `estado`, `creado`, `actualizado`) VALUES
(11, 'administrador', 'Administrador', 'Sistema', 'M', '$2y$10$cY8bIMyR2PBU5v9EoA/Aa.9/NH8SBnpkVQAJQnUUGntBLoiqQc8Ve', 'Activo', '2021-07-22 06:17:45', '2021-07-22 06:17:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directorio`
--
ALTER TABLE `directorio`
  ADD PRIMARY KEY (`id_directorio`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `galeria-serfin`
--
ALTER TABLE `galeria-serfin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen-noticia`
--
ALTER TABLE `imagen-noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_noticia` (`id_noticia`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nichos`
--
ALTER TABLE `nichos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `serfin`
--
ALTER TABLE `serfin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directorio`
--
ALTER TABLE `directorio`
  MODIFY `id_directorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `galeria-serfin`
--
ALTER TABLE `galeria-serfin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagen-noticia`
--
ALTER TABLE `imagen-noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nichos`
--
ALTER TABLE `nichos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `serfin`
--
ALTER TABLE `serfin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `slides`
--
ALTER TABLE `slides`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen-noticia`
--
ALTER TABLE `imagen-noticia`
  ADD CONSTRAINT `pk_noticia` FOREIGN KEY (`id_noticia`) REFERENCES `noticias` (`id_noticia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
