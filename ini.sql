-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Current Database: ``
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE ``;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat_customer` varchar(100) DEFAULT NULL,
  `nohp_customer` varchar(20) DEFAULT NULL,
  `email_customer` varchar(50) DEFAULT NULL,
  `noktp_customer` int(16) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gaji_karyawan`
--

DROP TABLE IF EXISTS `gaji_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gaji_karyawan` (
  `id_gajiKaryawan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `total_gajiKaryawan` int(16) DEFAULT NULL,
  `waktu_bayarKaryawan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto_karyawan` longblob,
  PRIMARY KEY (`id_gajiKaryawan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `gaji_karyawan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gaji_karyawan`
--

LOCK TABLES `gaji_karyawan` WRITE;
/*!40000 ALTER TABLE `gaji_karyawan` DISABLE KEYS */;
/*!40000 ALTER TABLE `gaji_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gaji_securityTeam`
--

DROP TABLE IF EXISTS `gaji_securityTeam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gaji_securityTeam` (
  `id_gajiSecurityTeam` int(11) DEFAULT NULL,
  `id_securityTeam` int(11) DEFAULT NULL,
  `total_gajiSecurityTeam` int(16) DEFAULT NULL,
  `waktu_bayarSecurityTeam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto_SecurityTeam` longblob,
  KEY `id_securityTeam` (`id_securityTeam`),
  CONSTRAINT `gaji_securityTeam_ibfk_1` FOREIGN KEY (`id_securityTeam`) REFERENCES `security_team` (`id_securityTeam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gaji_securityTeam`
--

LOCK TABLES `gaji_securityTeam` WRITE;
/*!40000 ALTER TABLE `gaji_securityTeam` DISABLE KEYS */;
/*!40000 ALTER TABLE `gaji_securityTeam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `korlap`
--

DROP TABLE IF EXISTS `korlap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `korlap` (
  `id_korlap` int(11) NOT NULL AUTO_INCREMENT,
  `nama_korlap` varchar(50) DEFAULT NULL,
  `noktp_korlap` int(16) DEFAULT NULL,
  `nohp_korlap` varchar(20) DEFAULT NULL,
  `alamat_korlap` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_korlap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `korlap`
--

LOCK TABLES `korlap` WRITE;
/*!40000 ALTER TABLE `korlap` DISABLE KEYS */;
/*!40000 ALTER TABLE `korlap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservasi`
--

DROP TABLE IF EXISTS `reservasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) DEFAULT NULL,
  `waktu_acara` varchar(100) DEFAULT NULL,
  `id_tempatAcara` int(11) DEFAULT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `konsep_acara` varchar(100) DEFAULT NULL,
  `id_korlap` int(11) DEFAULT NULL,
  `harga_total` int(16) DEFAULT NULL,
  `id_security` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `id_customer` (`id_customer`),
  KEY `id_tempatAcara` (`id_tempatAcara`),
  KEY `id_vendor` (`id_vendor`),
  KEY `id_korlap` (`id_korlap`),
  KEY `id_security` (`id_security`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`id_tempatAcara`) REFERENCES `tempat_acara` (`id_tempatAcara`),
  CONSTRAINT `reservasi_ibfk_3` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`),
  CONSTRAINT `reservasi_ibfk_4` FOREIGN KEY (`id_korlap`) REFERENCES `korlap` (`id_korlap`),
  CONSTRAINT `reservasi_ibfk_5` FOREIGN KEY (`id_security`) REFERENCES `security_team` (`id_securityTeam`),
  CONSTRAINT `reservasi_ibfk_6` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservasi`
--

LOCK TABLES `reservasi` WRITE;
/*!40000 ALTER TABLE `reservasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `security_team`
--

DROP TABLE IF EXISTS `security_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `security_team` (
  `id_securityTeam` int(11) NOT NULL AUTO_INCREMENT,
  `nama_securityTeam` varchar(50) DEFAULT NULL,
  `alamat_securityTeam` varchar(100) DEFAULT NULL,
  `nohp_securityTeam` varchar(20) DEFAULT NULL,
  `anggota_securityTeam` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_securityTeam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `security_team`
--

LOCK TABLES `security_team` WRITE;
/*!40000 ALTER TABLE `security_team` DISABLE KEYS */;
/*!40000 ALTER TABLE `security_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tempat_acara`
--

DROP TABLE IF EXISTS `tempat_acara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tempat_acara` (
  `id_tempatAcara` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tempatAcara` varchar(50) DEFAULT NULL,
  `alamat_tempatAcara` varchar(100) DEFAULT NULL,
  `status_tempatAcara` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tempatAcara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tempat_acara`
--

LOCK TABLES `tempat_acara` WRITE;
/*!40000 ALTER TABLE `tempat_acara` DISABLE KEYS */;
/*!40000 ALTER TABLE `tempat_acara` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_reservasi` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(25) DEFAULT NULL,
  `harga_total` int(16) DEFAULT NULL,
  `yang_dibayar` int(16) DEFAULT NULL,
  `sisa_bayar` int(16) DEFAULT NULL,
  `status_transaksi` varchar(50) DEFAULT NULL,
  `waktu_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `username_user` varchar(10) DEFAULT NULL,
  `alamat_user` varchar(255) DEFAULT NULL,
  `nohp_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_vendor` varchar(50) DEFAULT NULL,
  `pemilik_vendor` varchar(50) DEFAULT NULL,
  `alamat_vendor` varchar(100) DEFAULT NULL,
  `nohp_vendor` varchar(20) DEFAULT NULL,
  `email_vendor` varchar(50) DEFAULT NULL,
  `type_vendor` varchar(30) DEFAULT NULL,
  `harga_vendor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor`
--

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-29 14:41:41
