CREATE DATABASE  IF NOT EXISTS `barriles` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `barriles`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: barriles
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `api`
--

DROP TABLE IF EXISTS `api`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `api` (
  `idAPI` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(17) NOT NULL,
  `partNumber` varchar(10) NOT NULL,
  `totalWeight` decimal(18,2) NOT NULL,
  `taraWeight` decimal(18,2) NOT NULL,
  `totalLenght` decimal(18,3) NOT NULL,
  `unit` char(3) NOT NULL,
  `date` datetime(6) NOT NULL,
  PRIMARY KEY (`idAPI`)
) ENGINE=InnoDB AUTO_INCREMENT=844 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bajas`
--

DROP TABLE IF EXISTS `bajas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bajas` (
  `idBaja` int(11) NOT NULL AUTO_INCREMENT,
  `slocInicial` varchar(4) NOT NULL,
  `slocDestino` varchar(4) NOT NULL,
  `isBajaSAP` tinyint(1) NOT NULL,
  `idDetalleMaestro` int(11) NOT NULL,
  `dateBaja` datetime(6) DEFAULT NULL,
  `documento` varchar(70) DEFAULT NULL,
  `ajusteCantidad` decimal(10,3) DEFAULT '0.000',
  PRIMARY KEY (`idBaja`),
  KEY `FK_bajas_detalleMaestro` (`idDetalleMaestro`),
  CONSTRAINT `FK_bajas_detalleMaestro` FOREIGN KEY (`idDetalleMaestro`) REFERENCES `detallemaestro` (`idDetalleMaestro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=261527 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bajaspermitidassloc2`
--

DROP TABLE IF EXISTS `bajaspermitidassloc2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bajaspermitidassloc2` (
  `partNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `barrileros`
--

DROP TABLE IF EXISTS `barrileros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barrileros` (
  `idBarrilero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `gafete` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `turno` char(1) NOT NULL,
  PRIMARY KEY (`idBarrilero`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `barrilxespec`
--

DROP TABLE IF EXISTS `barrilxespec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barrilxespec` (
  `idTara` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `peso` decimal(18,2) NOT NULL,
  PRIMARY KEY (`idTara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cortadoras`
--

DROP TABLE IF EXISTS `cortadoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cortadoras` (
  `idCortadora` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `maximoBarriles` int(11) NOT NULL,
  `caminaresEntrada` int(11) NOT NULL DEFAULT '0',
  `caminaresSalida` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCortadora`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `detallemaestro`
--

DROP TABLE IF EXISTS `detallemaestro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallemaestro` (
  `idDetalleMaestro` int(11) NOT NULL AUTO_INCREMENT,
  `tipoMovimiento` varchar(10) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `pesoActual` decimal(18,2) NOT NULL,
  `consumoKg` decimal(18,2) NOT NULL,
  `consumoLongitud` decimal(18,3) NOT NULL,
  `localizacion` varchar(10) NOT NULL,
  `gafete` varchar(15) NOT NULL,
  `idMaestroSerie` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleMaestro`),
  KEY `FK_detalleMaestro_maestroSeries` (`idMaestroSerie`),
  CONSTRAINT `FK_detalleMaestro_maestroSeries` FOREIGN KEY (`idMaestroSerie`) REFERENCES `maestroseries` (`idMaestroSerie`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=409396 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `histregistros`
--

DROP TABLE IF EXISTS `histregistros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `histregistros` (
  `idBarrilero` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idRuta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `histseries`
--

DROP TABLE IF EXISTS `histseries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `histseries` (
  `idHistSeries` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(17) NOT NULL,
  `partNumber` varchar(10) NOT NULL,
  `locActual` varchar(17) DEFAULT NULL,
  `stdPack` decimal(18,3) NOT NULL,
  `estacion` char(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `fechaAlta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idHistSeries`)
) ENGINE=InnoDB AUTO_INCREMENT=247813 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `maestroseries`
--

DROP TABLE IF EXISTS `maestroseries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestroseries` (
  `idMaestroSerie` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(17) NOT NULL,
  `partNumber` varchar(10) NOT NULL,
  `stdPack` decimal(18,3) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `fechaAlta` datetime(6) NOT NULL,
  `fechaUpdate` datetime(6) NOT NULL,
  `pesoInicial` decimal(18,2) NOT NULL,
  `pesoRestante` decimal(18,2) DEFAULT NULL,
  `cantidadRestante` decimal(18,3) NOT NULL,
  `pesoContenedor` decimal(7,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`idMaestroSerie`)
) ENGINE=InnoDB AUTO_INCREMENT=50398 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mapaactual`
--

DROP TABLE IF EXISTS `mapaactual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapaactual` (
  `idMapaActual` int(11) NOT NULL AUTO_INCREMENT,
  `partNumber` varchar(10) NOT NULL,
  `localizacionRandom` varchar(8) DEFAULT NULL,
  `sufijoRandom` char(1) DEFAULT NULL,
  `localizacionServicio` varchar(17) DEFAULT NULL,
  `sufijoServicio` char(1) DEFAULT NULL,
  `estacion` char(1) NOT NULL,
  `emailMRP` varchar(50) DEFAULT NULL,
  `emailSupervisor` varchar(50) DEFAULT NULL,
  `maximoServicio` int(11) NOT NULL DEFAULT '1',
  `caminaresEntrada` int(11) NOT NULL DEFAULT '0',
  `caminaresSalida` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idMapaActual`)
) ENGINE=InnoDB AUTO_INCREMENT=1680 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `idUsuario` int(11) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idRuta` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reversaseries`
--

DROP TABLE IF EXISTS `reversaseries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reversaseries` (
  `idReversaSerie` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(17) NOT NULL,
  `partNumber` varchar(10) NOT NULL,
  `slocInicial` varchar(4) NOT NULL,
  `slocDestino` varchar(4) NOT NULL,
  `quantity` decimal(18,3) NOT NULL,
  `uom` char(3) NOT NULL,
  `dateTransfer` datetime(6) DEFAULT NULL,
  `isTransfer` tinyint(1) NOT NULL DEFAULT '0',
  `documentNumber` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idReversaSerie`)
) ENGINE=InnoDB AUTO_INCREMENT=2515 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rutas`
--

DROP TABLE IF EXISTS `rutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rutas` (
  `idRuta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `turno` char(1) DEFAULT NULL,
  PRIMARY KEY (`idRuta`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rutascortadoras`
--

DROP TABLE IF EXISTS `rutascortadoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rutascortadoras` (
  `idRuta` int(11) NOT NULL,
  `idCortadora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `siguienteBorradoRegistros` datetime(6) DEFAULT NULL,
  `turnoActual` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `surtidopend`
--

DROP TABLE IF EXISTS `surtidopend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surtidopend` (
  `serie` varchar(17) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `isTransSloc` tinyint(1) NOT NULL,
  `gafete` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `turnos`
--

DROP TABLE IF EXISTS `turnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turnos` (
  `turno` char(1) DEFAULT NULL,
  `inicioTurno` time(6) DEFAULT NULL,
  `finTurno` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `uom`
--

DROP TABLE IF EXISTS `uom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uom` (
  `partNumber` varchar(10) DEFAULT NULL,
  `uom` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `gafete` varchar(20) NOT NULL,
  `isAdministrador` tinyint(1) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `weightmaterial`
--

DROP TABLE IF EXISTS `weightmaterial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weightmaterial` (
  `partNumber` varchar(10) NOT NULL,
  `weightGr` decimal(18,4) NOT NULL,
  `stdPack` decimal(18,3) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xlimport4`
--

DROP TABLE IF EXISTS `xlimport4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xlimport4` (
  `partNumber` varchar(255) DEFAULT NULL,
  `Sloc` double DEFAULT NULL,
  `stock` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'barriles'
--

--
-- Dumping routines for database 'barriles'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-30 14:52:46
