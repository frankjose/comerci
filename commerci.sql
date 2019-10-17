-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2019 a las 00:48:17
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `commerci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `establecimiento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Restaurantes'),
(2, 'Bienestar'),
(3, 'Belleza'),
(4, 'Tecnologia'),
(5, 'Moda'),
(6, 'Farmacia'),
(7, 'Hogar'),
(8, 'Floristería'),
(9, 'Regalos'),
(10, 'Servicios'),
(11, 'Mascotas'),
(12, 'Eventos'),
(13, 'Deportes'),
(14, 'Bonos'),
(15, 'Libros'),
(16, 'Jugeteria'),
(17, 'Bebés y Niños'),
(18, 'Licores'),
(19, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `slogan` longtext DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `barrio` varchar(255) DEFAULT NULL,
  `Telefonos` text NOT NULL,
  `correo` text NOT NULL,
  `calificacion` text DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`id`, `nombre`, `nit`, `descripcion`, `logo`, `banner`, `slogan`, `direccion`, `latitud`, `longitud`, `barrio`, `Telefonos`, `correo`, `calificacion`, `usuario_id`) VALUES
(1, 'Restaurante Doña Aleja', '1234354351', 'Restaurante Doña Aleja, prestamos servicios de alimentos y bebidas de Cocina Típica Vallecaucana, con más de 25 años de experiencia en Calidad y Servicio.', 'images/establecimientos/restaurante-donaaleja5.jpg', 'images/establecimientos/carne_grande.png', NULL, 'Cra. 9a ## 15b-18', '3.234169', '-76.568130', 'Vias de acceso pavimentadas cerca al parque d', '311 386 2395', 'restaurantealeja@gmail.com', '5.0', 2),
(2, 'HAMBURGUESAS BARBAROS', NULL, 'Deliciosas comidas rápidas, variedad de cortes de carne Carnes ahumadas estilo BBQ de Texas, excelente servicio al cliente y domicilios \r\n', 'images/establecimientos/barbaros.jpg', 'images/establecimientos/hamburguesa_grande.jpg', NULL, 'Cra. 9a ## 15b-18', ' 3.264991', '-76.536907', 'Vias de acceso pavimentadas cerca al parque de los cholados Jamundi', '3014218313', 'hambuger@gmail.com', '4.3', 2),
(3, 'DARSALUD', NULL, 'Droguería, Servicio 24 Horas, Servicio Mini Market, Servicio Domicilio. los mejores precios en medicamentos. CONTAMOS CON UNA VARIEDAD DE PRODUCTOS Y SERVICIOS!!!\r\n*Productos de marcas y genéricos.*Droga blanca*Fórmulas infantiles*Hospitalarios*Aseo Personal.*Pañales y toallas higiénicas.*Bebidas refrescantes.*Productos desechables.*Baloto, recargas y pagos.*Revistas y periódicos.*Productos Ortopédicos.*Productos de belleza.*Productos de bebé.*Confiterías.*Helados.\r\n¡Y Mucho Más ! servicio a domicilio \r\n', 'images/establecimientos/darsalud.png', 'images/establecimientos/drogueria_grande.jpg', 'Darsalud busca satisfacer el mercado a través de productos de excelente calidad ofreciendo el mejor servicio de atención con personal altamente capacitado.', ' Cl. 13 #11-03', ' 3.264879', '-76.539593', 'vía de acceso pavimentada Frente a Comfandi Jamundi\r\n', '5164049', 'darsalu@hotmail.com', '4.0', 1),
(4, 'Drogas Sebastian', NULL, 'Sebastian pone a su disposición toda su experiencia en la  entrega de medicamentos, la mayor variedad en medicamentos genéricos y de  marca, excelente servicio al cliente. \r\nAtención:  24/7  \r\n*Productos de marcas y genéricos.*Droga blanca*Fórmulas infantiles*Hospitalarios*Aseo Personal.*Pañales y toallas higiénicas.*Bebidas refrescantes.Ortopédicos. inyectología \r\n', NULL, '', NULL, 'Carrera 10 # 5 - 37 ', '3.260093', ' -76.543867', 'La Esmeralda - Vías de acceso pavimentadas cerca al hospital Piloto Jamundi', '5160276 \r\n5921042\r\n', 'drogas_sebas@hotmail.com', '4.5', 1),
(5, 'ESTANCO EL CORSO', NULL, 'Somos reconocidos por nuestros licores  importados y nacionales sellados de la mejor calidad ,  manejamos los mejores precios,  somos una de las más importante y reconocidas distribuidoras de rancho y  licores nacionales o importados de JAMUNDI\r\n\r\nAtención: lunes de viernes de las 19:00 a 24:00\r\nsábados y domingos de las 19:00 a 3:00 am\r\n\r\n', 'images/establecimientos/estanco-el-corso.jpg', 'images/establecimientos/licores_grande.jpg', NULL, 'Calle 18a # 8a - 101 ', '3.265185', '-76.536475', ' el Jardín', '5530820', 'corso@gmail.com', '3.7', 1),
(6, 'COMERCIALIZADORA LA FLECHA S.A.S', NULL, 'La Flecha distribuidora de licores establecimientos no especializados con surtido compuesto principalmente por alimentos bebidas o tabaco, los mejores precios al por mayor y detal.\r\n\r\nAtención: Lunes a domingo de las 8:00 a 19:00\r\n\r\nServicio de Venta de licores nacionales e  importados ,tabaco los mejores precios al por mayor y al detal excelente servicio al cliente, servicio a  domicilio en todo JAMUNDI \r\n', 'images/establecimientos/la-flecha.jpg', '', NULL, 'Carrera 11 # 7 - 81 ', '3.262022', '-76.542646', 'Vía de acceso pavimentadas ', '5163533\r\n3164660188\r\n', 'fechlajamundi@gmail.com', '3.4', 1),
(7, 'Bisuteria  Y Artesanias COCO', NULL, 'OFRECEMOS LAS MEJORES  JOYAS  EN ACERO ,ARTESANÍAS  A LOS MEJORES  PRECIOS, NUESTROS ACCESORIOS SON HECHOS  CON EL  ACERO DE LA MEJOR CALIDAD\r\n\r\nAtención: Lunes a domingo de 8:00 A 19:00\r\n\r\nSERVICIOS: VENTA DE ARTESANÍAS, BISUTERÍA, BORDADOS Y TEJIDOS, PERFORACIONES BODY PIERCING \r\n', 'images/inversiones/visuteria_coco.jpeg', '', '', 'PARQUE PRINCIPAL MUNICIPAL JAMUNDI KIOSKO NÚM', ' 3.263241', '-76.540817 ', NULL, '3188807443', 'cocoartesanal@gmail.com', '3.9', 1),
(8, 'SUBLIMINAL TATTOO', NULL, 'PROCEDIMIENTOS 100% HIGIENICOS Y SEGUROS, MAS DE 16 AÑOS DE  EXP EN ARTE CORPORAL.\r\nSERVICIOS: BODY TATTOO, BODY  PERFORACIONES , ANIME.\r\n', 'images/establecimientos/subliminal-tatto.png', '', NULL, 'CARRERA 10 # 10 - 50 CENTRO  COMERCIAL JAMUND', '3.261942', '-76.540438', 'VÍAS DE ACCESO PAVIMENTADAS FRENTE AL PARQUE PRINCIPAL MUNICIPAL JAMUNDI \r\n', '3142587134', 'tattubliminal@gmail.com', '4.6', 2),
(9, 'Llaves ya', '8454854', 'Duplicado de llaves En cerrajería Alfa disponemos de un centro de duplicado de llaves con maquinaria de última generación, disponemos de varias maquinas de duplicados de llaves, garantizamos el servicio de copia de llaves normales, de seguridad e igualmente trabajamos con todas las distintas marcas de llaves.', 'images/establecimientos/llaves_logo.png', '', 'tus llaves al instante.', 'cra 4', '3.262647', '-76.539778', 'centro', '335847', 'llaves_ya@hotmail.com', '5.0', 2),
(10, 'Café Xamundí', '5547853300', 'Café de origen, cultivado en las montañas de jamundí, seleccionado con un grado de tostión alta y una molienda media.', 'images/establecimientos/logo-cafe.jpeg', 'images/establecimientos/cafe_grande.jpg', NULL, 'n/a', '3.262058', '-76.540470', 'centro', '3187576919', 'cafe_xamundi@gmail.com', '5.0', 1),
(11, 'Las Delicias de Pey', '895521111', 'Comidas rápidas.\r\ncolitas cubanas, salchipapa, hamburguesa, perros.', 'images/inversiones/delicias_pey.png', '', 'N/A', 'n/a', '3.255396', '76.544593', 'Portal del jordan', '777777', 'delicias@gmail.com', '4.0', 2),
(12, 'Jugos de La Abuela', '44441200', '', 'images/inversiones/jugos_abuela.jpeg', '	 images/establecimientos/jugos_grande.jpeg', 'Deliciosos secretos nutritivos.', 'calle 10 #8-117', '3.260280', '-76.539800', 'centro', '788945', 'jugos@hotmail.com', '4.5', 1),
(13, 'Calzado Sandoval', '111212230', 'Llevamos más de 40 años en el mercado.\r\nreparación en general.\r\nGuayos,zapatillas, sandalias.', 'images/inversiones/calzado_sandoval.jpeg', 'images/establecimientos/calzado_grande.jpg', 'N/A', ' Cl. 12 #9-26, Jamundí, Valle del Cauca', '3.261969', '-76.539125', 'N/A', '88755', 'calzado_sandoval@hotmail.com', '5.0', 1),
(14, 'Arte Turquesa', '88810', 'Libretas, cuadros y mandalas hechos a mano.\r\nDiseños unicos.\r\nTalleres de encuadernación artesanal', 'images/establecimientos/arte_turquesa.jpg', '', NULL, 'n/a', '3.255398', '-76.540480', 'centro', '3108990768', 'aragiselahenao@gmail.com', '5.0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Emprendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` text DEFAULT NULL,
  `descuento` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `establecimiento_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descuento`, `foto`, `establecimiento_id`, `categoria_id`) VALUES
(1, 'Puesto de Gallina', '27.000', 10, 'images\\establecimientos\\sancocho-aleja.jpg', 1, 1),
(2, 'Gallina Familiar', '90.000', 30, 'images\\productos\\gallina_familiar.jpg', 1, 1),
(3, 'Jarra de Limonada Grande', '12.000', 0, 'images\\productos\\jarra-limonada.jpg', 1, 1),
(4, 'Hamburguesa angus', '13.000', 35, 'images\\productos\\hamburguesa_angus.jpg', 2, 1),
(5, 'Costilla de cerdo', '20.000', 20, 'images\\productos\\costilla_cerdo.jpg', 2, 1),
(6, 'Acetaminofén', '3.000', 0, 'images\\productos\\aceta.png', 3, 6),
(7, 'Suero oral hidraplus', '15.000', 0, 'images\\productos\\hidra.jpg', 3, 6),
(8, 'Loratadina', '6.000', 0, 'images\\productos\\loratadina.png', 4, 6),
(9, 'Hidrocortizona', '10.000', 0, 'images\\productos\\hidrocortizona.png', 4, 6),
(10, 'Botella Ron Viejo de Caldas', '60.000', 40, 'images\\productos\\ron_viejo.png', 5, 18),
(11, 'Garrafa Aguardiente', '95.000', 20, 'images\\productos\\garrafa_guaro.png', 5, 18),
(12, 'Tequila Milagro', '150.000', 0, 'images\\productos\\tequila_milagro.png', 6, 18),
(13, 'Vodka', '250.000', 0, 'images\\productos\\vodka.jpg', 6, 18),
(14, 'Accesorios para Mujer', '25.000', 0, 'images\\productos\\visuteria_coco.jpeg', 7, 19),
(15, 'Manillas Artesanales', '5.000', 20, 'images\\productos\\coco_manillas.jpeg', 7, 19),
(16, 'Duplicado Llaves', '10000', 0, '	\r\nimages\\productos\\llaves_ya.jpeg', 9, 10),
(17, 'Café Xamundí', '25000', 0, '	\r\nimages\\productos\\cafe.jpg', 10, 1),
(18, 'Libreta Artesanal', '13000', 5, 'images/productos/libretas.jpg', 14, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nombre`, `categoria_id`) VALUES
(1, 'Postres', 1),
(2, 'Hamburguesas', 1),
(3, 'Panaderia', 1),
(4, 'Café', 1),
(5, 'Guarderia', 11),
(6, 'Cuidador', 11),
(7, 'Droguería ', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(25) DEFAULT NULL,
  `apellidos` varchar(25) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `contrasena` longtext DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `perfil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `cedula`, `contrasena`, `foto`, `perfil_id`) VALUES
(1, 'Jhon Alejandro', 'Vivas Paz', '11440533311', '123456', 'images/avatar/user_2.JPG', 1),
(2, 'Laura Alejandra', 'Diaz', '113344565324', '123456', 'images/avatar/user_2.JPG', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`,`establecimiento_id`),
  ADD KEY `fk_calificacion_establecimiento1_idx` (`establecimiento_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`id`,`usuario_id`),
  ADD KEY `fk_establecimiento_usuario1_idx` (`usuario_id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`,`establecimiento_id`,`categoria_id`),
  ADD KEY `fk_productos_establecimiento1_idx` (`establecimiento_id`),
  ADD KEY `fk_productos_categoria1_idx` (`categoria_id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`,`categoria_id`),
  ADD KEY `fk_subcategoria_categoria_idx` (`categoria_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`,`perfil_id`),
  ADD KEY `fk_usuario_perfil1_idx` (`perfil_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `fk_calificacion_establecimiento1` FOREIGN KEY (`establecimiento_id`) REFERENCES `establecimiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD CONSTRAINT `fk_establecimiento_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_establecimiento1` FOREIGN KEY (`establecimiento_id`) REFERENCES `establecimiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `fk_subcategoria_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
