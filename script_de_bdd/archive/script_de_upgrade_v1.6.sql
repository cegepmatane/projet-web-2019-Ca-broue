-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cabroue
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
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
  `id_goodie` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix_achat` double NOT NULL,
  `date_achat` datetime NOT NULL,
  `quantite_produit` int(11) NOT NULL,
  `numero_transaction` int(11) NOT NULL,
  PRIMARY KEY (`id_goodie`,`id_utilisateur`,`date_achat`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_goodie`) REFERENCES `goodie` (`id`),
  CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achat`
--

LOCK TABLES `achat` WRITE;
/*!40000 ALTER TABLE `achat` DISABLE KEYS */;
INSERT INTO `achat` (`id_goodie`, `id_utilisateur`, `prix_achat`, `date_achat`, `quantite_produit`, `numero_transaction`) VALUES (1,1,5.65,'2019-03-12 21:52:56',1,1),(1,1,5.65,'2019-03-12 21:52:57',2,3),(1,3,5.65,'2019-03-12 21:52:57',2,3),(1,3,5.65,'2019-03-13 21:52:57',2,3),(1,3,5.65,'2019-03-13 21:53:57',2,3),(1,3,5.65,'2019-03-30 15:12:41',2,3),(1,3,5.65,'2019-03-30 15:12:42',2,3),(1,3,5.65,'2019-03-30 15:12:43',2,3),(2,3,87.65,'2019-03-30 15:12:54',2,3),(3,3,87.65,'2019-03-30 15:12:58',2,3),(4,1,9.65,'2019-01-12 21:52:56',1,1),(4,1,9.65,'2019-02-12 21:52:56',1,1),(4,1,9.65,'2019-03-12 21:52:56',1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie_goodie`
--

LOCK TABLES `categorie_goodie` WRITE;
/*!40000 ALTER TABLE `categorie_goodie` DISABLE KEYS */;
INSERT INTO `categorie_goodie` (`id`, `libelle_fr`, `libelle_en`) VALUES (1,'Poster',''),(2,'Vêtement',''),(3,'Buck','Beer mug');
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
  KEY `id_categorie_goodie` (`id_categorie_goodie`),
  KEY `nom_fr_id` (`nom_fr`(20)),
  KEY `nom_en_id` (`nom_en`(20))
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goodie`
--

LOCK TABLES `goodie` WRITE;
/*!40000 ALTER TABLE `goodie` DISABLE KEYS */;
INSERT INTO `goodie` (`id`, `nom_fr`, `nom_en`, `description_fr`, `description_en`, `prix`, `description_longue_fr`, `description_longue_en`, `id_categorie_goodie`) VALUES (1,'Verre Labatt 50',' ','Verre 500 ml',' ',25,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',3),(2,'Verre 1664',' ','Verre 25 ml',' ',18,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',3),(3,'Verre Unibrou',' ','Verre 10 ml',' ',5,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',3),(4,'Poster caBroue',' ','Poster du logo',' ',99,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',1),(5,'Chandail ca broue','Shirt cabroue','Chandail cabroue','',35,'Une description tres longueeeee','Une description tres longueeeee (Presque en anglais',2);
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
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo_id` (`pseudo`(30)),
  KEY `nom_id` (`nom`(50)),
  KEY `prenom_id` (`prenom`(50))
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `adresse_postal`, `code_postal`, `ville`, `mail`, `pseudo`, `mot_passe`, `isAdmin`) VALUES (1,'Sedrick','Levesque','128 rue des sapins','g4w2b7','Matane','yosiro@microcabroue.com','yosiro','$2y$10$cL.BuC8Ptt6dey8lcmpxrepKvK.45kdN2H0hot1c39PowE9mB///6',1),(2,'admin','admin','admin','admin','admin','admin@microcabroue.com','webmeister','$2y$10$n8XFiKtmPGEIgWkc1GQSsuZ1Z7EakfsiFv9NBvbe3cZSeCaUUX0fK',1),(3,'Michael','Turcotte','21','G0J2','Schtroumph','mezeeh@hotmail.com','mezeeh','$2y$10$f2jTcdAZSc4ddzt7jjIep.hzhQArIaTlzV1F3pftsRs3Ppkw1zAt.',1),(4,'Alec','Pallot','616 Avenue St redempteur','G4W1L1','Matane','alec.pallot@gmail.com','Enderskry','$2y$10$WN/2gcTVgKEyq9Po5HbVJeh.zVgh6ptMNSZ92MDczZqcUSyaBIU2q',1),(6,'Doe','John','123 jumpstreet','g4e1g8','Matane','john@wowzer.com','john','$2y$10$JESDFX6BRt2U/qlP27IlHOyJn6HhQFJJ8CRn3LkBxhw1HKmq7f8.a',0);
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

-- Dump completed on 2019-04-01 18:56:40
