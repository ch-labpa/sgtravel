 MySQL dump 10.13  Distrib 5.1.73, for debian-linux-gnu (x86_64)
--
-- Host: 208.113.158.124    Database: sgtravel
-- ------------------------------------------------------
-- Server version	5.6.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Actualizaciones del sitio');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinos`
--

DROP TABLE IF EXISTS `destinos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(70) CHARACTER SET utf8 NOT NULL,
  `pais` varchar(70) CHARACTER SET utf8 NOT NULL,
  `precio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinos`
--

LOCK TABLES `destinos` WRITE;
/*!40000 ALTER TABLE `destinos` DISABLE KEYS */;
INSERT INTO `destinos` VALUES (1,'Beirut','','2099','beirut.jpg'),(2,'Bogotá','','169','bogota.jpg');
/*!40000 ALTER TABLE `destinos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `highlights`
--

DROP TABLE IF EXISTS `highlights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `highlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(70) CHARACTER SET utf8 NOT NULL,
  `precio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `highlights`
--

LOCK TABLES `highlights` WRITE;
/*!40000 ALTER TABLE `highlights` DISABLE KEYS */;
INSERT INTO `highlights` VALUES (1,'París, Francia','554'),(2,'Hong-Kong, China','893'),(3,'Madrid, España','388');
/*!40000 ALTER TABLE `highlights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrepaquete` varchar(70) CHARACTER SET utf8 NOT NULL,
  `fechasalida` varchar(70) CHARACTER SET utf8 NOT NULL,
  `incluye` varchar(150) CHARACTER SET utf8 NOT NULL,
  `visita` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `disclosure` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aeropuerto` varchar(70) CHARACTER SET utf8 NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 NOT NULL,
  `paises` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetes`
--

LOCK TABLES `paquetes` WRITE;
/*!40000 ALTER TABLE `paquetes` DISABLE KEYS */;
INSERT INTO `paquetes` VALUES (30,'Toda Italia','Cuando solicitado','Boleto aéreo, circuito','','1890','Precio puede variar debido a la temporada.','TOCUMEN','milan.jpg','ITALIA'),(31,'Madrid-Barcelona','Cuando solicitado','Boleto aéreo, circuito','','1460','Precio puede variar debido a la temporada.','TOCUMEN','madrid.jpg','ESPAÑA'),(4,'Tierra Santa y Madrid','27 OCTUBRE 2019','Boleto aéreo, traslados, tours, kit, estadía','ISRAEL: TEL AVIV, JAFFO, HAIFA, CESAREA, TIBEREAS, NAZARETH, CANA GALILEA, MAR MUEERTO, JERUSALEM, BELEN, RIO JORDAN. ESPAÑA: MADRID, TOLEDO, EL ESCORIAL Y VALLE DE LOS CAIDOS.','2995','','TOCUMEN','tierrasanta.jpg','ISRAEL, ESPAÑA'),(5,'Medellín - Semana Santa','18 ABRIL 2019','Boleto aéreo, impuestos, traslado aeropuerto-hotel, estadía, seguro. Separa tu cupo con $200 / persona.','','489','','Tocúmen','medellin.jpg','COLOMBIA'),(1,'Medjurgorje y Capitales del Este','11 mayo 2019','BOLETO AÉREO, TRANSPORTE, ESTADÍA, SEGURO, GIRA, COMIDAS. ','CROACIA, BOSNIA, PRAGA, VARSOVIA, BRNO, BUDAPEST, CRACOVIA Y VIENA','3891','IMPUESTOS $250','TOCUMEN','praga.jpg','EUROPA'),(2,'PEREGRINACIÓN VIRGEN DE GUADALUPE','1 noviembre 2019','BOLETO AEREO CON IMPUESTOS, TRASLADOS, ALOJAMIENTO DE 6 NOCHES/7DIAS, DESAYUNOS Y ALMUERZOS, TODAS LAS VISITAS DEL RECORRIDO','Ciudad de Mexico, Cholula,Tonantzitlan, Puebla, Cuernavaca, Taxco','1356 JUB. / $1500 REG.','','TOCUMEN','mexico.jpg','MEXICO'),(3,'SINGAPUR, DUBAI Y TURQUÍA','23 JUNIO 2019','BOLETO AÉREO, IMPUESTOS, TRASLADO AEROPUERTO-HOTEL, ESTADÍA, SEGURO. SEPARA TU CUPO CON $350. PAGALO EN COMODAS CUOTAS.','SINGAPUR, DUBAI, ABU DHABI, ESTAMBUL, ANKARA, CAPADOCCIA, PAMUKALE, EFESO, ISMIR, BURSA, KONYA','5357','','TOCUMEN','dubai.jpg','');
/*!40000 ALTER TABLE `paquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_source` varchar(255) NOT NULL,
  `post_destination` varchar(255) NOT NULL,
  `post_via` varchar(255) NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `post_query_count` int(3) NOT NULL,
  `max_seats` int(3) NOT NULL,
  `available_seats` int(3) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `query` (
  `query_id` int(3) NOT NULL AUTO_INCREMENT,
  `query_user` varchar(255) NOT NULL,
  `query_content` text NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `query`
--

LOCK TABLES `query` WRITE;
/*!40000 ALTER TABLE `query` DISABLE KEYS */;
/*!40000 ALTER TABLE `query` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservavuelo`
--

DROP TABLE IF EXISTS `reservavuelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservavuelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origen` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `destino` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechas` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clase` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `twoway` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hotel` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `carro` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adultos` int(10) NOT NULL,
  `ninos` int(10) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telefono` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservavuelo`
--

LOCK TABLES `reservavuelo` WRITE;
/*!40000 ALTER TABLE `reservavuelo` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservavuelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `stitle1` varchar(100) NOT NULL,
  `stitle2` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow`
--

LOCK TABLES `slideshow` WRITE;
/*!40000 ALTER TABLE `slideshow` DISABLE KEYS */;
INSERT INTO `slideshow` VALUES (1,'dubai.jpg','Singapur, Dubai y Turquía','Saliendo el 23 de junio','Ultimos cupos!','5357'),(2,'praga.jpg','Medjurgorje y Capitales del Este','','Acompañanos a peregrinar: Croacia, Praga, Varsovia, Bosnia, Budapest, Viena y más...','3891'),(3,'mexico.jpg','Pregrinación Virgen de Guadalupe','Precio regular $1500.','','1356 jubilados'),(4,'medellin.jpg','Medellín, Colombia','Semana Santa 2019','Del 18 al 21 de abril. Separa tu cupo con solo $200.00. Incluye hab. doble.','489');
/*!40000 ALTER TABLE `slideshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'sissy','sfabrega','Silvia','F','sissy@sgtravelpty.com','','admin'),(3,'tati','tdominguez','Tatiana','D','tatiana@sgtravelpty.com','','admin'),(4,'jmeza','12345','Joainé','M','','','admin'),(5,'aescudero','54321','Ana','E','','','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sgtravel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-18  7:54:32
