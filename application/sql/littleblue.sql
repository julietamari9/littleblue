-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.25-0ubuntu0.15.04.1 - (Ubuntu)
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para littleblue
CREATE DATABASE IF NOT EXISTS `littleblue` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `littleblue`;


-- Volcando estructura para tabla littleblue.colegio
CREATE TABLE IF NOT EXISTS `colegio` (
  `id_colegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_colegio`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla littleblue.colegio: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `colegio` DISABLE KEYS */;
INSERT INTO `colegio` (`id_colegio`, `nombre`) VALUES
	(1, 'Instituto Jose Manuel Estrada'),
	(2, 'Colegio Babar'),
	(3, 'Instituto Jose Hernandez'),
	(4, 'Colegio Siglo XXI'),
	(5, 'Instituto Mariano Moreno'),
	(6, 'Colegio Nacional'),
	(7, 'Hipolito Yrigoyen'),
	(8, 'Colegio Tato'),
	(9, 'Nuestra señora de Lujan'),
	(10, 'Pepe I'),
	(11, 'Papa Francisco'),
	(12, 'Escuela Media 11'),
	(13, 'Escuela Media 12'),
	(14, 'Geothe'),
	(15, 'Colegio Franco Argentino'),
	(16, 'Colegio Bahia'),
	(17, 'Argentino'),
	(18, 'Zamba'),
	(19, 'Yayo'),
	(20, 'Damasco'),
	(21, 'Emmet Brown'),
	(22, 'Liceo Frances'),
	(23, 'Franco Guzman'),
	(24, 'Holy Cross'),
	(25, 'St Matthews'),
	(26, 'Acuarela'),
	(27, 'Adventista Florida'),
	(28, 'Arcoiris'),
	(29, 'San Esteban'),
	(30, 'San Felipe'),
	(31, 'Nueva Estrella'),
	(32, 'Colegio Belgrano'),
	(33, 'Tarbut'),
	(34, 'San Miguel'),
	(35, 'Jorge Newberry'),
	(36, 'Jaimito School'),
	(37, 'Kangoo High School '),
	(38, 'Cacatua'),
	(39, 'Germano'),
	(40, 'Gris Azulado'),
	(41, 'Honduras'),
	(42, 'San Lucas'),
	(43, 'Maritimo'),
	(44, 'Optimo Colegio Santisimo'),
	(45, 'Papa Noel'),
	(46, 'Quito St. '),
	(47, 'Ramon Valdez'),
	(48, 'Kiko College Superior'),
	(49, 'Ravioles con tuco'),
	(50, 'Xuxa & Co School'),
	(51, 'Paquitas'),
	(52, 'Roberto Sanchez ');
/*!40000 ALTER TABLE `colegio` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
