CREATE DATABASE `erp` /*!40100 DEFAULT CHARACTER SET latin1 */;
CREATE TABLE `contactos_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `pre_informacion` text,
  `porque_espana` text,
  `inversion` double DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `titulacion` text,
  `anos_laboral` int(11) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `fecha_emis` date NOT NULL,
  `fecha_login` datetime NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `foto` text NOT NULL,
  `color` varchar(500) DEFAULT NULL,
  `pais` varchar(250) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `cargo` varchar(500) NOT NULL,
  `anulado` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(500) DEFAULT NULL,
  `nombre` text,
  `descripcion` text,
  `precio` double DEFAULT NULL,
  `precio1` double DEFAULT NULL,
  `precio2` double DEFAULT NULL,
  `precio3` double DEFAULT NULL,
  `precio_compra` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `pro_inv_max` int(11) DEFAULT NULL,
  `pro_inv_min` int(11) DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `islr` double DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `estado` varchar(500) DEFAULT NULL,
  `stock` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;



CREATE TABLE `inventario_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `seguimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contacto` int(11) NOT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `asunto` text,
  `descripcion` text,
  `categoria` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `adjuntos` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `calendario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contacto` varchar(500) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `color` varchar(300) DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `allDay` varchar(1) DEFAULT '0',
  `notificado` varchar(1) DEFAULT '0',
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(500) DEFAULT NULL,
  `nombre` text,
  `descripcion` text,
  `precio` double DEFAULT NULL,
  `precio1` double DEFAULT NULL,
  `precio2` double DEFAULT NULL,
  `precio3` double DEFAULT NULL,
  `precio_compra` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `pro_inv_max` int(11) DEFAULT NULL,
  `pro_inv_min` int(11) DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `islr` double DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `estado` varchar(500) DEFAULT NULL,
  `stock` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE `servicios_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;