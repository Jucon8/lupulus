-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2020 a las 20:38:06
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lupulus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Equipamiento'),
(2, 'Insumos'),
(3, 'Kit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `provincia_id`) VALUES
(1, 'La Plata', 1),
(2, 'San Fernando del Valle de Catamarca', 2),
(3, 'Resistencia', 3),
(4, 'Rawson', 4),
(5, 'Córdoba', 5),
(6, 'Unquillo', 5),
(7, 'Villa Allende', 5),
(8, 'Carlos Paz', 5),
(9, 'Corrientes', 6),
(10, 'Paraná', 7),
(11, 'Formosa', 8),
(12, 'San Salvador de Jujuy', 9),
(13, 'Santa Rosa', 10),
(14, 'La Rioja', 11),
(15, 'Mendoza', 12),
(16, 'Posadas', 13),
(17, 'Neuquén', 14),
(18, 'Viedma', 15),
(19, 'Salta', 16),
(20, 'San Juan', 17),
(21, 'San Luis', 18),
(22, 'Río Gallegos', 19),
(23, 'Santa Fe', 20),
(24, 'Santiago del Estero', 21),
(25, 'Ushuaia', 22),
(26, 'San Miguel de Tucumán', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `borrado` int(11) NOT NULL DEFAULT 0,
  `imagen_producto` text DEFAULT NULL,
  `subcategoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`,`nombre`, `descripcion`, `stock`, `precio`, `estado`, `borrado`, `imagen_producto`, `subcategoria_id`) VALUES
(1, ' CONECTOR RECTO ROSCA MACHO', 'ACOPLE CONECTOR RECTO ROSCA MACHO 1/4', 13, 227, 1, 0, NULL, 1),
(2, 'CANILLA CHOP PLASTICA', 'CANILLA TIPO CHOPP AMERICANA MANUAL PARA CORNELIUS-BARRIL ', 17, 354, 1, 0, NULL, 1),
(3, 'CANILLA DOBLE ACCION', 'CANILLA DOBLE ACCION PARA CHOPERA ', 9, 2880, 1, 0, NULL, 1),
(4, ' BARRIL PET ', 'BARRIL CAPACIDAD 30 LTS. ESTIVADO 4X4 HASTA 3 PISOS', 3, 784, 1, 0, NULL, 2),
(5, 'ADAPTADOR ROSCA HEMBRA BRONCE', 'BUJE BRONCE ADAPTADOR PARA TUERCA CANILLAS ', 15, 396, 1, 0, NULL, 2),
(6, 'GASIFICADORA ESTÁTICA', 'SISTEMA DE GASIFICACION DE CERVEZA COMPACTO ', 4, 11556, 1, 0, NULL, 2),
(7, ' BIDON EMBOTELLADOR ', 'BIDON DE 25 LITROS PARA MADURAR/ FERMENTAR CON CANILLA', 78, 414, 1, 0, NULL, 3),
(8, 'LAVADOR DE BOTELLAS', 'DISPOSITIVO QUE SE ENROSCA EN CANILLA DE 1/2 Y SE ACCIONA PRESION DE LA BOTELLA ', 22, 582, 1, 0, NULL, 3),
(9, 'GLLENADORA ALTO FLUJO', 'VARILLA CON VALVULA DOSIFICADORA QUE PERMITE LLENAR BOTELLAS HASTA EL CUELLO ', 11, 371, 1, 0, NULL, 3),
(10, ' ENFRIADOR CONTRACORRIENTE ', 'ENFRIADOR CONTRACORRIENTE DE ALUMINIO', 22, 1923, 1, 0, NULL, 4),
(11, 'SERPENTINA CHOPERA', 'SERPENTINA CHOPERA 15M ', 34, 2642, 1, 0, NULL, 4),
(12, 'SERPENTINA INMERSION M', 'SERPENTINA INMERSION 7M ', 19, 1205, 1, 0, NULL, 4),
(13, ' ACIDO CITRICO ', 'GRADO ALIMENTICIO, PARA REGULAR EL PH DE MACERACIÓN', 21, 330, 1, 0, NULL, 5),
(14, 'ACOPLE RAPIDO HEMBRA', 'ACOPLE RAPIDO PP PARA MANGUERA 1/2 PULGADA', 22, 528, 1, 0, NULL, 5),
(15, 'ACOPLE RAPIDO MACHO', 'ACOPLE RAPIDO PARA OLLA. 1/2 PULGADA ', 23, 169, 1, 0, NULL, 5),
(16, ' BOLSA MACERADORA ', 'ASEGURAR UNA MACERACIÓN EFICIENTE Y PARA PERMITIR EL ACLARADO, ADEMÁS DE PARA DRENAR BIEN EL MOSTO DESPUÉS DEL MACERADO Y LA COCCIÓN.', 24, 140, 1, 0, NULL, 6),
(17, 'BOMBA TRASVASE GRUNDFOS', 'BOMBA TRASVASE RECOMENDADA PARA EQUIPOS DE 50  HASTA 500 LITROS', 25, 11314, 1, 0, NULL, 6),
(18, 'ESTRUCTURA PARA 3 OLLAS', 'ESTRUCTURA PARA OLLAS CON UN DESNIVEL PARA EQUIPOS DE 50 A 100L. ', 26, 7366, 1, 0, NULL, 6),
(19, 'MANGUERA TEJIDA', 'MANGUERA TEJIDA, SOPORTA PRESION, ES SANITARIA, IDEAL TRASVASE, CARBONATAR.', 26, 77, 1, 0, NULL, 7),
(20, 'BALANZA DIGITAL', 'HASTA 7 KG (MIDE GR X GR).CUERPO DE PLÁSTICO ABS. PESA EN GRAMOS Y ONZAS.FUNCIÓN DE TARA Y CALIBRACIÓN.', 27, 836, 1, 0, NULL, 8),
(21, 'DENSIMETRO', 'DENSÍMETRO.ESCALA DE GRAVEDAD ESPECÍFICA DE 1000 A 1100.', 28, 709, 1, 0, NULL, 8),
(22, 'PROBETA PLASTICA', 'PROBETA PLASTICA PARA DENSIMETRO.', 29, 292, 1, 0, NULL, 8),
(23, 'MOLINO A DISCO', 'EXACTA PROPORCIÓN DE HARINA FINA, HARINA GRUESA Y CASCARA.TOLVA DE FUNDICIÓN INTEGRADA AL CUERPO.', 28, 4672, 1, 0, NULL, 9),
(24, 'MOLINO A RODILLO PARA TALADRO', 'RODILLOS 6 CM DE LARGO.MUELE 100 KG HORA.PARA USO CON TALADRO.IDEAL PARA MOTORIZAR.', 29, 10182, 1, 0, NULL, 9),
(25, 'MOLIENDA MALTAS BASE ', 'LA COMPRA DE ESTE PRODUCTO DEBE SER CON UNA ANT. MINIMA DE 24HS Y COORDINAR CON PRODUCCION EL RETIRO DE LA MISMA.', 30, 100, 1, 0, NULL, 9),
(26, 'CARCAZA PARA FILTRO', ' CARCAZA PARA FILTRO. ', 31, 1846, 1, 0, NULL, 10),
(27, ' FILTRO CARBON ACTIVADO ', ' FILTRO PARA COLOCAR EN CARCAZA.', 32, 1475, 1, 0, NULL, 10),
(28, 'AZUCAR DE MAIZ', ' AZÚCAR OBTENIDA DE LA HIDRÓLISIS ENZIMÁTICA DE ALMIDONES DE MAIZ Y OTROS CEREALES. ', 32, 183, 1, 0, NULL, 11),
(29, ' FLACTOSA ', ' AZÚCAR NO FERMENTABLE QUE OTORGA CUERPO Y DULZOR A LA CERVEZA TERMINADA, TAMBIÉN ES UTILIZADA PARA LA ELABORACIÓN DEL ESTILO MILK STOUT.', 33, 134, 1, 0, NULL, 11),
(30, ' PASTILLAS CARBONATADORAS ', ' CONTENIDO 250GR.', 34, 81, 1, 0, NULL, 11),
(31, 'BOTELLA VIDRIO COLOR AMBAR', ' BOTELLA DE VIDRIO COLOR AMBAR, VARIAS PRESENTACIONES BOCA PARA TAPA 27MM ', 35, 515, 1, 0, NULL, 12),
(32, 'IRISH MOSS', ' Clarificante utilizado en el hervor. Dosis 0,2 gr/L', 36, 75, 1, 0, NULL, 13),
(33, 'PASTILLA WHIRFLOCK', 'CLARIFICANTE DE HERVIDO. DOSIS 1 PASTILLA CADA 30L.', 37, 25, 1, 0, NULL, 13),
(34, 'ACIDO FOSFORICO ', 'DISMINUYE EL PH DEL MACERADO, A DIFERENCIA DEL ACIDO LACTICO, SIN AFECTAR EL SABOR DE LA CERVEZA.', 47, 770, 1, 0, NULL, 14),
(35, 'CLORURO DE CALCIO', 'REDUCE LA ALCALINIDAD DEL AGUA Y ES NUTRIENTE NECESARIO PARA LA LEVADURA.', 48, 296, 1, 0, NULL, 14),
(36, 'YPSUM (SULFATO DE CALCIO)', 'REDUCE LA ALCALINIDAD DE AGUA Y APORTA NUTRIENTES NECESARIOS PARA LA LEVADURA. RESALTAN EL AMARGOR SECO Y AGUDO CUANDO LOS IBUS SON MUY ELEVADOS.', 49, 237, 1, 0, NULL, 14),
(37, 'ABBAYE LALLEMAND ', 'LEVADURA SELECCIONADA POR SU CAPACIDAD DE PRODUCIR EXCELENTES CERVEZAS BELGAS, INCLUYENDO CERVEZAS DE ALTA GRAVEDAD COMO DUBBEL, TRIPPEL Y QUEADS.', 57, 229, 1, 0, NULL, 15),
(38, 'BELLE SAISON LALLEMAND', 'LEVADURA ALE ESTILO-SAISON BELGA.ESTERES Y FENOLES, SABORES Y AROMAS AFRUTADOS, PICANTES Y ESPECIADOS', 58, 220, 1, 0, NULL, 15),
(39, 'BRY LALLEMAND', 'LEVADURA ALE ESTILO OESTE AMERICANA.ALGUNOS ESTERES, CASI NEUTRA', 59, 90, 1, 0, NULL, 15),
(40, 'ACIDO PERACETICO OXIDIAL ', 'LPODEROSO BIOCIDAQUE ACTUA EFICIENTEMENTE SOBRE BACTERIAS, HONGOS, LEVADURAS Y ESPORAS.', 60, 302, 1, 0, NULL, 16),
(41, 'ALCOHOL', 'ALCOHOL 100% AL CUAL SE DEBE BAJAR AL 70% PARA SANITIZAR.', 61, 121, 1, 0, NULL, 16),
(42, 'EPILLO PARA BOTELLA', 'CEPILLO DE NYLON PARA LIMPIAR LAS BOTELLAS.', 62, 93, 1, 0, NULL, 16),
(43, 'AMARILLO (SELLADO AL VACIO). ', 'LUPULO PRINCIPALMENTE DE AROMA, CON UN PERFIL CITRICO A POMELO Y FRUTADO.ALFA ÁCIDOS: 7-11%. BETA ÁCIDOS: 5,5-8%.', 73, 495, 1, 0, NULL, 17),
(44, 'APOLLO(SELLADO AL VACIO)', 'EL APOLLO ES UN LÚPULO DE AMARGOR CON NOTAS HERBALES, ESPECIADO, RESINOSO Y PICANTE. ALFA ÁCIDOS: 15-19%.BETA ÁCIDOS: 5.5-8%.', 74, 484, 1, 0, NULL, 17),
(45, 'CASCADE (SELLADO AL VACIO)', 'CPUEDE SE USADO PARA BRINDAR AMARGOR, AROMA, TERMINACIÓN Y DRY HOPPING. BRINDA UN LEVE CARACTER CÍTRICO.', 75, 224, 1, 0, NULL, 17),
(46, 'ABBEY WEYERMANN. ', 'LA MALTA WEYERMANN ABBEY ES UNA MALTA PÁLIDA CARAMELIZADA QUE APORTA UN SABOR FUERTE A PAN COCIDO, NUECES MIEL Y FRUTAS.', 86, 201, 1, 0, NULL, 18),
(47, 'AAVENA ARROLLADA.', 'LAS CÁSCARAS PROVEEN MASA Y AYUDAN A PREVENIR QUE LA CAMA DE GRANOS SE COMPRIMA Y TAPONE DURANTE EL LAVADO.', 87, 172, 1, 0, NULL, 18),
(48, 'BLACK CASTLE MALTING.', 'MALTA NEGRA DE 1,300 EBC. LA CEBADA MALTEADA MÁS NEGRA. TORREFACTA A UNA TEMPERATURA DE HASTA 235 °C.', 88, 141, 1, 0, NULL, 18),
(49, 'TAPAS LISAS. ', 'TAPAS LISAS NEGRAS Y DORADAS 27MM - 100 UNIDADES', 94, 216, 1, 0, NULL, 19),
(50, 'TAPAS LISAS DORADAS', 'TAPAS LISAS DORADAS 29MM. DORADAS CHAMPAGNE (100 UNIDADES)', 95, 506, 1, 0, NULL, 19),
(51, 'TAPAS IMPRESAS.', 'TAPAS IMPRESAS 27MM (1000 UNIDADES)', 98, 2066, 1, 0, NULL, 19),
(52, 'KIT ELABORACION BASICO. ', 'EL KIT CONTIENE LO SIGUIENTE: – OLLA 24 LITROS CON CANILLA Y NIPLE.– FERMENTADOR 20L.– AIRLOCK CON TAPÓN PARA FERMENTADOR.– TERMÓMETRO VIDRIO 0 -110º.', 15, 5207, 1, 0, NULL, 20),
(53, 'TKIT ELABORACION INTERMEDIO', 'EL KIT CONTIENE LO SIGUIENTE: – OLLA 24 LITROS CON CANILLA Y NIPLE.– FERMENTADOR 20L.– AIRLOCK CON TAPÓN PARA FERMENTADOR.– TERMÓMETRO VIDRIO 0 -110º.', 16, 7962, 1, 0, NULL, 20),
(54, 'KIT ELABORACION PRO', 'TEL KIT CONTIENE LO SIGUIENTE: – OLLA 24 LITROS CON CANILLA Y NIPLE.– FERMENTADOR 20L.– AIRLOCK CON TAPÓN PARA FERMENTADOR.– TERMÓMETRO VIDRIO 0 -110º.', 17, 2066, 1, 0, NULL, 20),
(55, 'AMBER ALE. ', 'PILSEN 5 KG. CARAMELO 120L 200 GR. CASCADE 10 GR (AMARGOR). CASCADDE 10GR (AROMA). CLARIFICANTE 3 GR.SAF BE-256.', 11, 900, 1, 0, NULL, 21),
(56, 'DORADA PAMPEANA', 'KIT DE INSUMOS DE 20 LITROS PARA ELABORAR EL ESTILO DORADA PAMPEANA CON CLARIFICANTE.', 12, 609, 1, 0, NULL, 21),
(57, 'KIT BARLEY WINE', 'PILSEN. MELANOIDINA.  PALE ALE. CARAMELO 60L. LUPULO CASCADE. CLARIFICANTE. LEVADURA T58. AZUCAR Y CHIPS DE ROBLE.', 15, 1313, 1, 0, NULL, 21),
(58, 'sapo pepe', 'es un sapo verde', 54, 2458, 1, 0, NULL, 2);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`) VALUES
(1, 'Buenos Aires'),
(2, 'Catamarca'),
(3, 'Chaco'),
(4, 'Chubut'),
(5, 'Córdoba'),
(6, 'Corrientes'),
(7, 'Entre Rios'),
(8, 'Formosa'),
(9, 'Jujuy'),
(10, 'La Pampa'),
(11, 'La Rioja'),
(12, 'Mendoza'),
(13, 'Misiones'),
(14, 'Neuquén'),
(15, 'Río Negro'),
(16, 'Salta'),
(17, 'San Juan'),
(18, 'San Luis'),
(19, 'Santa Cruz'),
(20, 'Santa Fe'),
(21, 'Santiago del Estero'),
(22, 'Tierra del Fuego'),
(23, 'Tucumán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'administrador'),
(2, 'cliente'),
(3, 'editor'),
(4, 'proveedor'),
(5, 'distribuidor'),
(6, 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nombre`, `categoria_id`) VALUES
(1, 'Canillas y conectores', 1),
(2, 'Embarrillado', 1),
(3, 'Embotellado', 1),
(4, 'Enfriado', 1),
(5, 'Fermentacion', 1),
(6, 'Macerado y hervido', 1),
(7, 'Mangueras', 1),
(8, 'Medicion y control', 1),
(9, 'Molienda', 1),
(10, 'Tratamiento agua', 1),
(11, 'Azucares', 2),
(12, 'Botellas', 2),
(13, 'Clarificantes', 2),
(14, 'Correccion agua', 2),
(15, 'Levaduras', 2),
(16, 'Limpieza', 2),
(17, 'Lúpulus', 2),
(18, 'Maltas', 2),
(19, 'Tapas', 2),
(20, 'Kit equipos', 3),
(21, 'Kit insumos', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocons`
--

CREATE TABLE `tipocons` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipocons`
--

INSERT INTO `tipocons` (`id`, `nombre`) VALUES
(1, 'Consumidor Final'),
(2, 'IVA Responsable Inscripto'),
(3, 'IVA Responsable No Inscripto'),
(4, 'IVA Sujeto Exento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `ciudad_id` varchar(50) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `tipoCons_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `formaDePago` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `envio_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_producto`
--

CREATE TABLE `venta_producto` (
  `precioDelDia` int(11) DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),  
  ADD KEY `subcategoria_id` (`subcategoria_id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `tipocons`
--
ALTER TABLE `tipocons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `tipoCons_id` (`tipoCons_id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `envio_id` (`envio_id`);

--
-- Indices de la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipocons`
--
ALTER TABLE `tipocons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategoria` (`id`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`tipoCons_id`) REFERENCES `tipocons` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`envio_id`) REFERENCES `envio` (`id`);

--
-- Filtros para la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD CONSTRAINT `venta_producto_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `venta_producto_ibfk_2` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
