-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 11, 2020 at 03:48 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lupulus`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE `avatar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Equipamiento'),
(2, 'Insumos'),
(3, 'Kit');

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ciudad`
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
-- Table structure for table `envio`
--

CREATE TABLE `envio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `subcategoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `stock`, `precio`, `estado`, `subcategoria_id`) VALUES
(1, ' CONECTOR RECTO ROSCA MACHO', 'ACOPLE CONECTOR RECTO ROSCA MACHO 1/4', 13, 227, 1, 1),
(2, 'CANILLA CHOP PLASTICA', 'CANILLA TIPO CHOPP AMERICANA MANUAL PARA CORNELIUS-BARRIL ', 17, 354, 1, 1),
(3, 'CANILLA DOBLE ACCION', 'CANILLA DOBLE ACCION PARA CHOPERA ', 9, 2880, 1, 1),
(4, ' BARRIL PET ', 'BARRIL CAPACIDAD 30 LTS. ESTIVADO 4X4 HASTA 3 PISOS', 3, 784, 1, 2),
(5, 'ADAPTADOR ROSCA HEMBRA BRONCE', 'BUJE BRONCE ADAPTADOR PARA TUERCA CANILLAS ', 15, 396, 1, 2),
(6, 'GASIFICADORA ESTÁTICA', 'SISTEMA DE GASIFICACION DE CERVEZA COMPACTO ', 4, 11556, 1, 2),
(7, ' BIDON EMBOTELLADOR ', 'BIDON DE 25 LITROS PARA MADURAR/ FERMENTAR CON CANILLA', 78, 414, 1, 3),
(8, 'LAVADOR DE BOTELLAS', 'DISPOSITIVO QUE SE ENROSCA EN CANILLA DE 1/2 Y SE ACCIONA PRESION DE LA BOTELLA ', 22, 582, 1, 3),
(9, 'GLLENADORA ALTO FLUJO', 'VARILLA CON VALVULA DOSIFICADORA QUE PERMITE LLENAR BOTELLAS HASTA EL CUELLO ', 11, 371, 1, 3),
(10, ' ENFRIADOR CONTRACORRIENTE ', 'ENFRIADOR CONTRACORRIENTE DE ALUMINIO', 22, 1923, 1, 4),
(11, 'SERPENTINA CHOPERA', 'SERPENTINA CHOPERA 15M ', 34, 2642, 1, 4),
(12, 'SERPENTINA INMERSION M', 'SERPENTINA INMERSION 7M ', 19, 1205, 1, 4),
(13, ' ACIDO CITRICO ', 'GRADO ALIMENTICIO, PARA REGULAR EL PH DE MACERACIÓN', 21, 330, 1, 5),
(14, 'ACOPLE RAPIDO HEMBRA', 'ACOPLE RAPIDO PP PARA MANGUERA 1/2 PULGADA', 22, 528, 1, 5),
(15, 'ACOPLE RAPIDO MACHO', 'ACOPLE RAPIDO PARA OLLA. 1/2 PULGADA ', 23, 169, 1, 5),
(16, ' BOLSA MACERADORA ', 'ASEGURAR UNA MACERACIÓN EFICIENTE Y PARA PERMITIR EL ACLARADO, ADEMÁS DE PARA DRENAR BIEN EL MOSTO DESPUÉS DEL MACERADO Y LA COCCIÓN.', 24, 140, 1, 6),
(17, 'BOMBA TRASVASE GRUNDFOS', 'BOMBA TRASVASE RECOMENDADA PARA EQUIPOS DE 50  HASTA 500 LITROS', 25, 11314, 1, 6),
(18, 'ESTRUCTURA PARA 3 OLLAS', 'ESTRUCTURA PARA OLLAS CON UN DESNIVEL PARA EQUIPOS DE 50 A 100L. ', 26, 7366, 1, 6),
(19, 'MANGUERA TEJIDA', 'MANGUERA TEJIDA, SOPORTA PRESION, ES SANITARIA, IDEAL TRASVASE, CARBONATAR.', 26, 77, 1, 7),
(20, 'BALANZA DIGITAL', 'HASTA 7 KG (MIDE GR X GR).CUERPO DE PLÁSTICO ABS. PESA EN GRAMOS Y ONZAS.FUNCIÓN DE TARA Y CALIBRACIÓN.', 27, 836, 1, 8),
(21, 'DENSIMETRO', 'DENSÍMETRO.ESCALA DE GRAVEDAD ESPECÍFICA DE 1000 A 1100.', 28, 709, 1, 8),
(22, 'PROBETA PLASTICA', 'PROBETA PLASTICA PARA DENSIMETRO.', 29, 292, 1, 8),
(23, 'MOLINO A DISCO', 'EXACTA PROPORCIÓN DE HARINA FINA, HARINA GRUESA Y CASCARA.TOLVA DE FUNDICIÓN INTEGRADA AL CUERPO.', 28, 4672, 1, 9),
(24, 'MOLINO A RODILLO PARA TALADRO', 'RODILLOS 6 CM DE LARGO.MUELE 100 KG HORA.PARA USO CON TALADRO.IDEAL PARA MOTORIZAR.', 29, 10182, 1, 9),
(25, 'MOLIENDA MALTAS BASE ', 'LA COMPRA DE ESTE PRODUCTO DEBE SER CON UNA ANT. MINIMA DE 24HS Y COORDINAR CON PRODUCCION EL RETIRO DE LA MISMA.', 30, 100, 1, 9),
(26, 'CARCAZA PARA FILTRO', ' CARCAZA PARA FILTRO. ', 31, 1846, 1, 10),
(27, ' FILTRO CARBON ACTIVADO ', ' FILTRO PARA COLOCAR EN CARCAZA.', 32, 1475, 1, 10),
(28, 'AZUCAR DE MAIZ', ' AZÚCAR OBTENIDA DE LA HIDRÓLISIS ENZIMÁTICA DE ALMIDONES DE MAIZ Y OTROS CEREALES. ', 32, 183, 2, 11),
(29, ' FLACTOSA ', ' AZÚCAR NO FERMENTABLE QUE OTORGA CUERPO Y DULZOR A LA CERVEZA TERMINADA, TAMBIÉN ES UTILIZADA PARA LA ELABORACIÓN DEL ESTILO MILK STOUT.', 33, 134, 2, 11),
(30, ' PASTILLAS CARBONATADORAS ', ' CONTENIDO 250GR.', 34, 81, 2, 11),
(31, 'BOTELLA VIDRIO COLOR AMBAR', ' BOTELLA DE VIDRIO COLOR AMBAR, VARIAS PRESENTACIONES BOCA PARA TAPA 27MM ', 35, 515, 2, 12),
(32, 'IRISH MOSS', ' Clarificante utilizado en el hervor. Dosis 0,2 gr/L', 36, 75, 2, 13),
(33, 'PASTILLA WHIRFLOCK', 'CLARIFICANTE DE HERVIDO. DOSIS 1 PASTILLA CADA 30L.', 37, 25, 2, 13),
(34, 'ACIDO FOSFORICO ', 'DISMINUYE EL PH DEL MACERADO, A DIFERENCIA DEL ACIDO LACTICO, SIN AFECTAR EL SABOR DE LA CERVEZA.', 47, 770, 2, 14),
(35, 'CLORURO DE CALCIO', 'REDUCE LA ALCALINIDAD DEL AGUA Y ES NUTRIENTE NECESARIO PARA LA LEVADURA.', 48, 296, 2, 14),
(36, 'YPSUM (SULFATO DE CALCIO)', 'REDUCE LA ALCALINIDAD DE AGUA Y APORTA NUTRIENTES NECESARIOS PARA LA LEVADURA. RESALTAN EL AMARGOR SECO Y AGUDO CUANDO LOS IBUS SON MUY ELEVADOS.', 49, 237, 2, 14),
(37, 'ABBAYE LALLEMAND ', 'LEVADURA SELECCIONADA POR SU CAPACIDAD DE PRODUCIR EXCELENTES CERVEZAS BELGAS, INCLUYENDO CERVEZAS DE ALTA GRAVEDAD COMO DUBBEL, TRIPPEL Y QUEADS.', 57, 229, 2, 15),
(38, 'BELLE SAISON LALLEMAND', 'LEVADURA ALE ESTILO-SAISON BELGA.ESTERES Y FENOLES, SABORES Y AROMAS AFRUTADOS, PICANTES Y ESPECIADOS', 58, 220, 2, 15),
(39, 'BRY LALLEMAND', 'LEVADURA ALE ESTILO OESTE AMERICANA.ALGUNOS ESTERES, CASI NEUTRA', 59, 90, 2, 15),
(40, 'ACIDO PERACETICO OXIDIAL ', 'LPODEROSO BIOCIDAQUE ACTUA EFICIENTEMENTE SOBRE BACTERIAS, HONGOS, LEVADURAS Y ESPORAS.', 60, 302, 2, 16),
(41, 'ALCOHOL', 'ALCOHOL 100% AL CUAL SE DEBE BAJAR AL 70% PARA SANITIZAR.', 61, 121, 2, 16),
(42, 'EPILLO PARA BOTELLA', 'CEPILLO DE NYLON PARA LIMPIAR LAS BOTELLAS.', 62, 93, 2, 16),
(43, 'AMARILLO (SELLADO AL VACIO). ', 'LUPULO PRINCIPALMENTE DE AROMA, CON UN PERFIL CITRICO A POMELO Y FRUTADO.ALFA ÁCIDOS: 7-11%. BETA ÁCIDOS: 5,5-8%.', 73, 495, 2, 17),
(44, 'APOLLO(SELLADO AL VACIO)', 'EL APOLLO ES UN LÚPULO DE AMARGOR CON NOTAS HERBALES, ESPECIADO, RESINOSO Y PICANTE. ALFA ÁCIDOS: 15-19%.BETA ÁCIDOS: 5.5-8%.', 74, 484, 2, 17),
(45, 'CASCADE (SELLADO AL VACIO)', 'CPUEDE SE USADO PARA BRINDAR AMARGOR, AROMA, TERMINACIÓN Y DRY HOPPING. BRINDA UN LEVE CARACTER CÍTRICO.', 75, 224, 2, 17),
(46, 'ABBEY WEYERMANN. ', 'LA MALTA WEYERMANN ABBEY ES UNA MALTA PÁLIDA CARAMELIZADA QUE APORTA UN SABOR FUERTE A PAN COCIDO, NUECES MIEL Y FRUTAS.', 86, 201, 2, 18),
(47, 'AAVENA ARROLLADA.', 'LAS CÁSCARAS PROVEEN MASA Y AYUDAN A PREVENIR QUE LA CAMA DE GRANOS SE COMPRIMA Y TAPONE DURANTE EL LAVADO.', 87, 172, 2, 18),
(48, 'BLACK CASTLE MALTING.', 'MALTA NEGRA DE 1,300 EBC. LA CEBADA MALTEADA MÁS NEGRA. TORREFACTA A UNA TEMPERATURA DE HASTA 235 °C.', 88, 141, 2, 18),
(49, 'TAPAS LISAS. ', 'TAPAS LISAS NEGRAS Y DORADAS 27MM - 100 UNIDADES', 94, 216, 2, 19),
(50, 'TAPAS LISAS DORADAS', 'TAPAS LISAS DORADAS 29MM. DORADAS CHAMPAGNE (100 UNIDADES)', 95, 506, 2, 19),
(51, 'TAPAS IMPRESAS.', 'TAPAS IMPRESAS 27MM (1000 UNIDADES)', 98, 2066, 2, 19),
(52, 'KIT ELABORACION BASICO. ', 'EL KIT CONTIENE LO SIGUIENTE: – OLLA 24 LITROS CON CANILLA Y NIPLE.– FERMENTADOR 20L.– AIRLOCK CON TAPÓN PARA FERMENTADOR.– TERMÓMETRO VIDRIO 0 -110º.', 15, 5207, 3, 20),
(53, 'TKIT ELABORACION INTERMEDIO', 'EL KIT CONTIENE LO SIGUIENTE: – OLLA 24 LITROS CON CANILLA Y NIPLE.– FERMENTADOR 20L.– AIRLOCK CON TAPÓN PARA FERMENTADOR.– TERMÓMETRO VIDRIO 0 -110º.', 16, 7962, 3, 20),
(54, 'KIT ELABORACION PRO', 'TEL KIT CONTIENE LO SIGUIENTE: – OLLA 24 LITROS CON CANILLA Y NIPLE.– FERMENTADOR 20L.– AIRLOCK CON TAPÓN PARA FERMENTADOR.– TERMÓMETRO VIDRIO 0 -110º.', 17, 2066, 3, 20),
(55, 'AMBER ALE. ', 'PILSEN 5 KG. CARAMELO 120L 200 GR. CASCADE 10 GR (AMARGOR). CASCADDE 10GR (AROMA). CLARIFICANTE 3 GR.SAF BE-256.', 11, 900, 3, 21),
(56, 'DORADA PAMPEANA', 'KIT DE INSUMOS DE 20 LITROS PARA ELABORAR EL ESTILO DORADA PAMPEANA CON CLARIFICANTE.', 12, 609, 3, 21),
(57, 'KIT BARLEY WINE', 'PILSEN. MELANOIDINA.  PALE ALE. CARAMELO 60L. LUPULO CASCADE. CLARIFICANTE. LEVADURA T58. AZUCAR Y CHIPS DE ROBLE.', 15, 1313, 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`, `usuario_id`) VALUES
(1, 'Buenos Aires', NULL),
(2, 'Catamarca', NULL),
(3, 'Chaco', NULL),
(4, 'Chubut', NULL),
(5, 'Córdoba', NULL),
(6, 'Corrientes', NULL),
(7, 'Entre Rios', NULL),
(8, 'Formosa', NULL),
(9, 'Jujuy', NULL),
(10, 'La Pampa', NULL),
(11, 'La Rioja', NULL),
(12, 'Mendoza', NULL),
(13, 'Misiones', NULL),
(14, 'Neuquén', NULL),
(15, 'Río Negro', NULL),
(16, 'Salta', NULL),
(17, 'San Juan', NULL),
(18, 'San Luis', NULL),
(19, 'Santa Cruz', NULL),
(20, 'Santa Fe', NULL),
(21, 'Santiago del Estero', NULL),
(22, 'Tierra del Fuego', NULL),
(23, 'Tucumán', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `usuario_id`) VALUES
(1, 'administrador', NULL),
(2, 'cliente', NULL),
(3, 'editor', NULL),
(4, 'proveedor', NULL),
(5, 'distribuidor', NULL),
(6, 'vendedor', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategoria`
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
-- Table structure for table `tipoCons`
--

CREATE TABLE `tipoCons` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipoCons`
--

INSERT INTO `tipoCons` (`id`, `nombre`, `usuario_id`) VALUES
(1, 'Consumidor Final', NULL),
(2, 'IVA Responsable Inscripto', NULL),
(3, 'IVA Responsable No Inscripto', NULL),
(4, 'IVA Sujeto Exento', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` int(11) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `direccion` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `tipoCons` varchar(255) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `formaDePago` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `envio_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `venta_producto`
--

CREATE TABLE `venta_producto` (
  `precioDelDia` int(11) DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indexes for table `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `subcategoria_id` (`subcategoria_id`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `tipoCons`
--
ALTER TABLE `tipoCons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `envio_id` (`envio_id`);

--
-- Indexes for table `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `envio`
--
ALTER TABLE `envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tipoCons`
--
ALTER TABLE `tipoCons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avatar`
--
ALTER TABLE `avatar`
  ADD CONSTRAINT `avatar_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);

--
-- Constraints for table `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);

--
-- Constraints for table `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);

--
-- Constraints for table `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategoria` (`id`);

--
-- Constraints for table `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Constraints for table `tipoCons`
--
ALTER TABLE `tipoCons`
  ADD CONSTRAINT `tipocons_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);

--
-- Constraints for table `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`envio_id`) REFERENCES `envio` (`id`);

--
-- Constraints for table `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD CONSTRAINT `venta_producto_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `venta_producto_ibfk_2` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`);
