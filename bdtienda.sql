-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.6-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bdtienda
CREATE DATABASE IF NOT EXISTS `bdtienda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bdtienda`;

-- Volcando estructura para tabla bdtienda.tblcompras
CREATE TABLE IF NOT EXISTS `tblcompras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bdtienda.tblcompras: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tblcompras` DISABLE KEYS */;
INSERT INTO `tblcompras` (`id`, `producto`, `usuario`, `cantidad`, `fechaHora`) VALUES
	(5, '12345', 'Alberto', 1, '2019-11-06 21:35:07'),
	(6, '4321', 'Alberto', 2, '2019-11-07 20:55:10'),
	(7, '4321', 'Alberto', 5, '2019-12-04 21:02:10'),
	(8, '360', 'Alberto', 2, '2019-12-04 21:05:48'),
	(9, '360', 'Alberto', 1, '2019-12-04 21:08:23'),
	(10, '999', 'yo', 1, '2019-12-05 20:52:59');
/*!40000 ALTER TABLE `tblcompras` ENABLE KEYS */;

-- Volcando estructura para tabla bdtienda.tblfotos
CREATE TABLE IF NOT EXISTS `tblfotos` (
  `clave` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bdtienda.tblfotos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tblfotos` DISABLE KEYS */;
INSERT INTO `tblfotos` (`clave`, `foto`) VALUES
	('4321', 'Discoduro.jpg'),
	('12345', 'Xperia.jpg'),
	('360', 'one.jpg'),
	('', ''),
	('999', '1.jpg'),
	('111', '0d566e2a41f2b5484a032db699de68aa.jpg');
/*!40000 ALTER TABLE `tblfotos` ENABLE KEYS */;

-- Volcando estructura para tabla bdtienda.tblrecomendaciones
CREATE TABLE IF NOT EXISTS `tblrecomendaciones` (
  `recId` int(11) NOT NULL AUTO_INCREMENT,
  `recClaveProducto` varchar(30) NOT NULL,
  PRIMARY KEY (`recId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bdtienda.tblrecomendaciones: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `tblrecomendaciones` DISABLE KEYS */;
INSERT INTO `tblrecomendaciones` (`recId`, `recClaveProducto`) VALUES
	(1, '4321'),
	(2, '12345'),
	(3, '12345'),
	(4, '4321'),
	(5, '4321'),
	(6, '4321'),
	(7, '12345'),
	(8, '4321'),
	(9, '4321'),
	(10, '360'),
	(11, '360'),
	(12, '360'),
	(13, '999');
/*!40000 ALTER TABLE `tblrecomendaciones` ENABLE KEYS */;

-- Volcando estructura para tabla bdtienda.tblregistroproducto
CREATE TABLE IF NOT EXISTS `tblregistroproducto` (
  `regClave` varchar(30) NOT NULL,
  `regDescripcion` varchar(100) NOT NULL,
  `regPrecio` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bdtienda.tblregistroproducto: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `tblregistroproducto` DISABLE KEYS */;
INSERT INTO `tblregistroproducto` (`regClave`, `regDescripcion`, `regPrecio`) VALUES
	('4321', 'Disco duro 500 gb', 800.00),
	('6785', 'Mouse inalÃ¡mbrico Logitech M185', 120.00),
	('1349', 'Teclado Logitech M120', 150.00),
	('12345', 'Telefono Sony Xperia', 999.99),
	('360', 'Xbox One 1tb', 999.99),
	('999', 'producto 1', 999.99),
	('998', 'producto2', 999.99),
	('111', 'Coche', 20000.00);
/*!40000 ALTER TABLE `tblregistroproducto` ENABLE KEYS */;

-- Volcando estructura para tabla bdtienda.tblusuario
CREATE TABLE IF NOT EXISTS `tblusuario` (
  `UsuUsuario` varchar(50) NOT NULL,
  `UsuNombre` varchar(50) NOT NULL,
  `UsuContrasena` text NOT NULL,
  `UsuFecha_Nac` date DEFAULT NULL,
  `Sexo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bdtienda.tblusuario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tblusuario` DISABLE KEYS */;
INSERT INTO `tblusuario` (`UsuUsuario`, `UsuNombre`, `UsuContrasena`, `UsuFecha_Nac`, `Sexo`) VALUES
	('diana', 'Diana', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1995-01-03', 'Femenino'),
	('Jazmin', 'Jazmin', '81dc9bdb52d04dc20036dbd8313ed055', '2019-10-07', 'Femenino'),
	('Alberto', 'Alberto', '81dc9bdb52d04dc20036dbd8313ed055', '1993-07-28', 'Masculino'),
	('yo', 'enrique', '202cb962ac59075b964b07152d234b70', '1970-01-01', 'Masculino');
/*!40000 ALTER TABLE `tblusuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
