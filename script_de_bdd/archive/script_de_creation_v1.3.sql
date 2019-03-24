-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: cabroue
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.10.2

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
-- Table structure for table `achat`
--

DROP TABLE IF EXISTS `achat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achat` (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  `id_goodie` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix_achat` double NOT NULL,
  `date_achat` datetime NOT NULL,
  'numero_transaction' int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achat`
--

LOCK TABLES `achat` WRITE;
/*!40000 ALTER TABLE `achat` DISABLE KEYS */;
/*!40000 ALTER TABLE `achat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie_goodie`
--

DROP TABLE IF EXISTS `categorie_goodie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie_goodie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_fr` text NOT NULL,
  `libelle_en` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie_goodie`
--

LOCK TABLES `categorie_goodie` WRITE;
/*!40000 ALTER TABLE `categorie_goodie` DISABLE KEYS */;
INSERT INTO `categorie_goodie` VALUES (1,'Poster',''),(2,'Vêtement',''),(3,'Buck','Beer mug');
/*!40000 ALTER TABLE `categorie_goodie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goodie`
--

DROP TABLE IF EXISTS `goodie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goodie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` text NOT NULL,
  `nom_en` text NOT NULL,
  `description_fr` text NOT NULL,
  `description_en` text NOT NULL,
  `prix` double NOT NULL,
  `description_longue_fr` text NOT NULL,
  `description_longue_en` text NOT NULL,
  `id_categorie_goodie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie_goodie` (`id_categorie_goodie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goodie`
--

LOCK TABLES `goodie` WRITE;
/*!40000 ALTER TABLE `goodie` DISABLE KEYS */;
INSERT INTO `goodie` VALUES (1,'Verre Labatt 50',' ','Verre 500 ml',' ',25,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',3),(2,'Verre 1664',' ','Verre 25 ml',' ',18,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',3),(3,'Verre Unibrou',' ','Verre 10 ml',' ',5,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',3),(4,'Poster caBroue',' ','Poster du logo',' ',99,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',1),(5,'Chandail ca broue','Shirt cabroue','Chandail cabroue','',35,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',2);
/*!40000 ALTER TABLE `goodie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text,
  `nom` text,
  `adresse_postal` text,
  `code_postal` text,
  `ville` text, 
  `mail` text,
  `pseudo` text, 
  `mot_passe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-14 14:35:07