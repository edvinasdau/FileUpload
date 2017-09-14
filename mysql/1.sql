-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for shop
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `shop`;

-- Dumping structure for table shop.products
CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Price` decimal(6,0) NOT NULL,
  `Amount` decimal(6,0) NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_bin,
  UNIQUE KEY `ID` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table shop.products: 5 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`Id`, `Name`, `Price`, `Amount`, `Description`) VALUES
	(1, 'Dviratis', 300, 5, 'Su dviem ratais'),
	(2, 'Laikrodis', 150, 12, 'Rolex'),
	(3, 'Valtis', 200, 8, 'Guminė'),
	(4, 'Televizorius', 600, 4, 'Samsung'),
	(5, 'Radijas', 75, 14, 'veikiantis'),
	(6, 'Telefonas', 400, 18, 'kažkoks');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
