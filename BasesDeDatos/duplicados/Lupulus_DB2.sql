
CREATE DATABASE lupulus;
USE lupulus;

CREATE TABLE `avatar` (
  `IDAvatar` int(11) NOT NULL AUTO_INCREMENT,
  `RutaDelAvatar` varchar(200) NOT NULL,
  `IDUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDAvatar`),
  KEY `IDUsuario` (`IDUsuario`),
  CONSTRAINT `avatar_ibfk_1` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `IDCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`IDCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ciudad`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `IDCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `IDProvincia` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCiudad`),
  KEY `IDProvincia` (`IDProvincia`),
  CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`IDProvincia`) REFERENCES `provincia` (`IDProvincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `envio` (
  `IDEnvio` int(11) NOT NULL AUTO_INCREMENT,
  `Forma_de_envío` varchar(15) DEFAULT NULL,
  `Estado` varchar(15) DEFAULT NULL,
  `IDVenta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEnvio`),
  KEY `IDVenta` (`IDVenta`),
  CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`IDVenta`) REFERENCES `venta` (`IDVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen` (
  `IDImagen` int(11) NOT NULL AUTO_INCREMENT,
  `RutaDeImagenDelProducto` varchar(200) NOT NULL,
  `IDProducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDImagen`),
  KEY `IDProducto` (`IDProducto`),
  CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`IDProducto`) REFERENCES `producto` (`IDProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pago` (
  `IDPago` int(11) NOT NULL AUTO_INCREMENT,
  `Forma_de_pago` varchar(15) DEFAULT NULL,
  `Estado` varchar(15) DEFAULT NULL,
  `IDVenta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDPago`),
  KEY `IDVenta` (`IDVenta`),
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`IDVenta`) REFERENCES `venta` (`IDVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `IDProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Estado` varchar(30) DEFAULT NULL,
  `IDSubcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDProducto`),
  KEY `IDSubcategoria` (`IDSubcategoria`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`IDSubcategoria`) REFERENCES `subcategoria` (`IDSubcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `provincia`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincia` (
  `IDProvincia` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `IDUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDProvincia`),
  KEY `IDUsuario` (`IDUsuario`),
  CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rol`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `IDRol` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDelRol` varchar(30) NOT NULL,
  `IDUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDRol`),
  KEY `IDUsuario` (`IDUsuario`),
  CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategoria` (
  `IDSubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `IDCategoria` int(11) DEFAULT NULL,
  `IDProducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDSubcategoria`),
  KEY `IDCategoria` (`IDCategoria`),
  KEY `IDProducto` (`IDProducto`),
  CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`IDCategoria`) REFERENCES `categoria` (`IDCategoria`),
  CONSTRAINT `subcategoria_ibfk_2` FOREIGN KEY (`IDProducto`) REFERENCES `producto` (`IDProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `IDUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(500) NOT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Rol` varchar(15) DEFAULT NULL,
  `Avatar` varchar(200) DEFAULT NULL,
  `Provincia` varchar(30) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IDUsuario`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `IDVenta` int(11) NOT NULL AUTO_INCREMENT,
  `Forma_de_pago` varchar(15) DEFAULT NULL,
  `Tipo_de_envío` varchar(15) DEFAULT NULL,
  `Estado` varchar(15) DEFAULT NULL,
  `IDProducto` int(11) DEFAULT NULL,
  `IDUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDVenta`),
  KEY `IDProducto` (`IDProducto`),
  KEY `IDUsuario` (`IDUsuario`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`IDProducto`) REFERENCES `producto` (`IDProducto`),
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta_producto` (
  `Precio_del_día` int(11) DEFAULT NULL,
  `Cantidad_producto` int(11) DEFAULT NULL,
  `IDVenta` int(11) DEFAULT NULL,
  `IDProducto` int(11) DEFAULT NULL,
  KEY `IDVenta` (`IDVenta`),
  KEY `IDProducto` (`IDProducto`),
  CONSTRAINT `venta_producto_ibfk_1` FOREIGN KEY (`IDVenta`) REFERENCES `venta` (`IDVenta`),
  CONSTRAINT `venta_producto_ibfk_2` FOREIGN KEY (`IDProducto`) REFERENCES `producto` (`IDProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
