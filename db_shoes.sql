-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shoes
CREATE DATABASE IF NOT EXISTS `shoes` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `shoes`;

-- Dumping structure for table shoes.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `KD_CUSTOMER` varchar(64) NOT NULL,
  `KD_USER` varchar(64) DEFAULT NULL,
  `NAMA` varchar(64) DEFAULT NULL,
  `HARGA` varchar(64) DEFAULT NULL,
  `NO_TELEPON` varchar(64) DEFAULT NULL,
  `JENIS_ORDER` varchar(64) DEFAULT NULL,
  `ALAMAT_PICKUP` varchar(64) DEFAULT NULL,
  `TANGGAL_PICKUP` varchar(64) DEFAULT NULL,
  `ALAMAT_DELIVERY` varchar(64) DEFAULT NULL,
  `TANGGAL_DELIVERY` varchar(64) DEFAULT NULL,
  `STATUS` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`KD_CUSTOMER`),
  KEY `FK_customer_user` (`KD_USER`),
  CONSTRAINT `FK_customer_user` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table shoes.customer: ~2 rows (approximately)
DELETE FROM `customer`;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`KD_CUSTOMER`, `KD_USER`, `NAMA`, `HARGA`, `NO_TELEPON`, `JENIS_ORDER`, `ALAMAT_PICKUP`, `TANGGAL_PICKUP`, `ALAMAT_DELIVERY`, `TANGGAL_DELIVERY`, `STATUS`) VALUES
	('CST0001', 'ADM0001', 'Customer1', '100000', '08111111111', 'Normal', 'bebas', '2022-06-12', 'surrabaya', '2022-06-10', 'Antri'),
	('CST0004', 'ADM0001', 'Nongski', '60000', '081281818282', 'Normal', 'UPN Veteran Jawa Timur ', '2022-06-14', 'Warkop Alang-Alang', '2022-06-17', 'Pickup');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table shoes.item
CREATE TABLE IF NOT EXISTS `item` (
  `KD_ITEM` varchar(64) NOT NULL,
  `JENIS_ITEM` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`KD_ITEM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table shoes.item: ~2 rows (approximately)
DELETE FROM `item`;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`KD_ITEM`, `JENIS_ITEM`) VALUES
	('ITM0001', 'Sepatu'),
	('ITM0002', 'Tas');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping structure for table shoes.order
CREATE TABLE IF NOT EXISTS `order` (
  `KD_ORDER` varchar(64) NOT NULL,
  `KD_ITEM` varchar(64) DEFAULT NULL,
  `KD_TREATMENT` varchar(64) DEFAULT NULL,
  `KD_CUSTOMER` varchar(64) DEFAULT NULL,
  `KETERANGAN` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`KD_ORDER`),
  KEY `FK_order_item` (`KD_ITEM`),
  KEY `FK_order_treatment` (`KD_TREATMENT`),
  KEY `FK_order_customer` (`KD_CUSTOMER`),
  CONSTRAINT `FK_order_customer` FOREIGN KEY (`KD_CUSTOMER`) REFERENCES `customer` (`KD_CUSTOMER`),
  CONSTRAINT `FK_order_item` FOREIGN KEY (`KD_ITEM`) REFERENCES `item` (`KD_ITEM`),
  CONSTRAINT `FK_order_treatment` FOREIGN KEY (`KD_TREATMENT`) REFERENCES `treatment` (`KD_TREATMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table shoes.order: ~2 rows (approximately)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`KD_ORDER`, `KD_ITEM`, `KD_TREATMENT`, `KD_CUSTOMER`, `KETERANGAN`) VALUES
	('ORD0001', 'ITM0001', 'TRM0001', 'CST0001', 'Hitam'),
	('ORD0005', 'ITM0001', 'TRM0001', 'CST0004', 'Vans Old Skool Hitam');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table shoes.treatment
CREATE TABLE IF NOT EXISTS `treatment` (
  `KD_TREATMENT` varchar(64) NOT NULL,
  `JENIS_TREATMENT` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`KD_TREATMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table shoes.treatment: ~5 rows (approximately)
DELETE FROM `treatment`;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
INSERT INTO `treatment` (`KD_TREATMENT`, `JENIS_TREATMENT`) VALUES
	('TRM0001', 'Cleanning'),
	('TRM0002', 'Unyellowing'),
	('TRM0003', 'Repaint'),
	('TRM0004', 'Deep Clean'),
	('TRM0005', 'Leather Treatment');
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;

-- Dumping structure for table shoes.user
CREATE TABLE IF NOT EXISTS `user` (
  `KD_USER` varchar(64) NOT NULL,
  `NAMA` varchar(64) DEFAULT NULL,
  `EMAIL` varchar(64) DEFAULT NULL,
  `PASSWORD` varchar(64) DEFAULT NULL,
  `ROLE` tinyint(1) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `NO_TELEPON` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`KD_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table shoes.user: ~0 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`KD_USER`, `NAMA`, `EMAIL`, `PASSWORD`, `ROLE`, `ALAMAT`, `NO_TELEPON`) VALUES
	('ADM0001', 'admin', 'admin@gmail.com', 'admin', 0, 'website', '08888888888'),
	('PGW0001', 'Pegawai', 'pegawai@gmail.com', 'pegawai', 1, 'alamat pegawai', '08123456789');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
