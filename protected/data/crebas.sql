-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 08-08-2015 a las 19:02:22
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `sun`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `administrador`
-- 

CREATE TABLE `administrador` (
  `RUTADMIN` varchar(10) NOT NULL,
  `NOMBRESADMIN` varchar(50) NOT NULL,
  `APELLIDOSADMIN` varchar(50) NOT NULL,
  `CONTRAADMIN` varchar(50) NOT NULL,
  `TELEFONOADMIN` varchar(11) NOT NULL,
  `CORREOADMIN` varchar(50) NOT NULL,
  `imagen` varchar(100) default 'dist/img/null.png',
  PRIMARY KEY  (`RUTADMIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `administrador`
-- 

INSERT INTO `administrador` VALUES ('18183527-3', 'Mario Hernán Douglas', 'Ossandón Zúñiga', '12345', '85352482', 'mario.hdoz1@gmail.com', 'dist/img/mario.jpg');
INSERT INTO `administrador` VALUES ('18045248-6', 'Alejandro Esteban', 'Tamayo Echav', '12345', '7197785', 'aete.xd@hotmail.com', 'dist/img/avatar5.png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `arrendatario`
-- 

CREATE TABLE `arrendatario` (
  `RUTARREN` varchar(10) NOT NULL,
  `NOMBRESARREN` varchar(50) NOT NULL,
  `APELLIDOSARREN` varchar(50) NOT NULL,
  `TELEFONOARREN` varchar(12) NOT NULL,
  PRIMARY KEY  (`RUTARREN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `arrendatario`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `arriendo`
-- 

CREATE TABLE `arriendo` (
  `IDARRIENDO` int(11) NOT NULL auto_increment,
  `IDPROP` int(11) default NULL,
  `RUTADMIN` varchar(10) NOT NULL,
  `RUTARREN` varchar(10) NOT NULL,
  `FECHAARRIENDO` date NOT NULL,
  `FECHAPAGOARRIENDO` date NOT NULL,
  `VALORARRIENDO` int(11) NOT NULL,
  `TIEMPODEARRIENDO` varchar(50) NOT NULL,
  PRIMARY KEY  (`IDARRIENDO`),
  KEY `FK_ARRIENDA` (`RUTARREN`),
  KEY `FK_GESTIONA` (`RUTADMIN`),
  KEY `FK_PUEDE` (`IDPROP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `arriendo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cliente`
-- 

CREATE TABLE `cliente` (
  `RUTCLIENTE` varchar(10) NOT NULL,
  `NOMBRESCLIENTE` varchar(50) NOT NULL,
  `APELLIDOSCLIENTE` varchar(50) NOT NULL,
  `TELEFONOCLIENTE` varchar(12) NOT NULL,
  `DIRECCIONCLIENTE` varchar(50) default NULL,
  `CORREOCLIENTE` varchar(75) default NULL,
  PRIMARY KEY  (`RUTCLIENTE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `cliente`
-- 

INSERT INTO `cliente` VALUES ('19206063-k', 'Marcela Andrea', 'Muñoz Campusano', '57238757', 'La torre 1291', 'marcela_terribleDeBrigida@hotmail.es');
INSERT INTO `cliente` VALUES ('18183527-3', 'Mario Hernán Douglas', 'Ossandón Zúñiga', '85352482', 'Bobby maguila gorila', 'mario.hdoz1@gmail.com');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `documento`
-- 

CREATE TABLE `documento` (
  `IDDOCU` int(11) NOT NULL auto_increment,
  `IDARRIENDO` int(11) NOT NULL,
  `IDPROP` int(11) default NULL,
  `RUTARREN` varchar(10) default NULL,
  `TIPODOCU` varchar(25) NOT NULL,
  `UBICACIONDOCU` varchar(50) NOT NULL,
  `DIGITALIZADO` tinyint(1) NOT NULL,
  `COPIAORIGINAL` tinyint(1) NOT NULL,
  PRIMARY KEY  (`IDDOCU`),
  KEY `FK_ADJUDICA` (`IDPROP`),
  KEY `FK_CONTIENE` (`IDARRIENDO`),
  KEY `FK_ENTREGA` (`RUTARREN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `documento`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `factura`
-- 

CREATE TABLE `factura` (
  `IDFACTURA` int(11) NOT NULL auto_increment,
  `IDPAGO` int(11) NOT NULL,
  `NUMFACTURA` int(11) NOT NULL,
  `FECHAFACTURA` date NOT NULL,
  `SUBTOTALFACTURA` int(11) NOT NULL,
  `IVAFACTURA` int(11) NOT NULL,
  `TOTALFACTURA` int(11) NOT NULL,
  PRIMARY KEY  (`IDFACTURA`),
  KEY `FK_GENERA` (`IDPAGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `factura`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `funcionario`
-- 

CREATE TABLE `funcionario` (
  `RUTFUNCIONARIO` varchar(10) NOT NULL,
  `NOMBRESFUNCIONARIOS` varchar(50) NOT NULL,
  `APELLIDOSFUCIONARIO` varchar(50) NOT NULL,
  `TELEFONOFUNCIONARIO` varchar(12) NOT NULL,
  `SECTORFUNCIONARIO` varchar(50) NOT NULL,
  `DIRECCIONFUNCIONARIO` varchar(50) NOT NULL,
  `CORREOFUNCIONARIO` varchar(50) NOT NULL,
  PRIMARY KEY  (`RUTFUNCIONARIO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `funcionario`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `imagen`
-- 

CREATE TABLE `imagen` (
  `IDIMAGEN` int(11) NOT NULL auto_increment,
  `IDPROP` int(11) NOT NULL,
  `URLIMAGEN` varchar(100) NOT NULL,
  PRIMARY KEY  (`IDIMAGEN`),
  KEY `FK_REPRESENTA` (`IDPROP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `imagen`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `integra`
-- 

CREATE TABLE `integra` (
  `IDINTEGRA` int(11) NOT NULL auto_increment,
  `IDOT` int(11) NOT NULL,
  `RUTFUNCIONARIO` varchar(10) NOT NULL,
  PRIMARY KEY  (`IDINTEGRA`),
  KEY `FK_RELATIONSHIP_13` (`RUTFUNCIONARIO`),
  KEY `FK_RELATIONSHIP_14` (`IDOT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `integra`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ordentrabajo`
-- 

CREATE TABLE `ordentrabajo` (
  `IDOT` int(11) NOT NULL auto_increment,
  `RUTADMIN` varchar(10) NOT NULL,
  `DESCIPCIONOT` varchar(254) NOT NULL,
  `FECHAEMISIONOT` date NOT NULL,
  `FECHAEJECUCIONOT` date default NULL,
  `ESTADOOT` tinyint(1) NOT NULL,
  `FORMULARIOOT` varchar(254) NOT NULL,
  PRIMARY KEY  (`IDOT`),
  KEY `FK_CREA` (`RUTADMIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `ordentrabajo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pago`
-- 

CREATE TABLE `pago` (
  `IDPAGO` int(11) NOT NULL,
  `RUTARREN` varchar(10) NOT NULL,
  `IDARRIENDO` int(11) default NULL,
  `FECHAPAGO` date NOT NULL,
  `TOTALPAGAR` int(11) default NULL,
  `TOTALPAGADO` int(11) default NULL,
  PRIMARY KEY  (`IDPAGO`),
  KEY `FK_CANCELA` (`RUTARREN`),
  KEY `FK_OBTIENE` (`IDARRIENDO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `pago`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `propiedad`
-- 

CREATE TABLE `propiedad` (
  `IDPROP` int(11) NOT NULL auto_increment,
  `RUTCLIENTE` varchar(10) NOT NULL,
  `DIRECCION` varchar(50) NOT NULL,
  `CANTPIEZA` int(11) default NULL,
  `CANTBANO` int(11) default NULL,
  `TERRENO` int(11) NOT NULL,
  `TERRENOCONSTRUIDO` int(11) default NULL,
  `TIPO` varchar(25) NOT NULL,
  `SERVICIO` varchar(10) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL default '1',
  `DESCRIPCION` varchar(250) default NULL,
  `COMUNAPROPIEDAD` varchar(20) NOT NULL,
  PRIMARY KEY  (`IDPROP`),
  KEY `FK_POSEE` (`RUTCLIENTE`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `propiedad`
-- 

INSERT INTO `propiedad` VALUES (1, '18183527-3', 'Calle til til 1301', 4, 2, 75, 60, 'Casa', 'Arriendo', 1, NULL, 'Calama');
INSERT INTO `propiedad` VALUES (2, '19206063-k', 'Calama rape', 1, 1, 123456, 12345, 'Departamento Habitación', 'Venta', 1, 'Calafjelkjrwerpdfi', 'Antofagasta');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `solicitud`
-- 

CREATE TABLE `solicitud` (
  `IDSOLICITUD` int(11) NOT NULL auto_increment,
  `RUTCLIENTE` varchar(10) NOT NULL,
  `RUTSOLICITANTE` varchar(10) NOT NULL,
  `NOMBRESSOLICITANTE` varchar(50) NOT NULL,
  `APELLIDOSSOLICITANTE` varchar(50) NOT NULL,
  `SERVICIOSOLICITADO` varchar(25) NOT NULL,
  `FECHASOLICITUD` date NOT NULL,
  `FECHASOLICITADA` date NOT NULL,
  `NUMTELEFONO` int(11) NOT NULL,
  `ESTADOSOLICITUD` tinyint(1) NOT NULL,
  `DESCRIPCIONSOLICITUD` varchar(254) NOT NULL,
  PRIMARY KEY  (`IDSOLICITUD`),
  KEY `FK_REALIZA` (`RUTCLIENTE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `solicitud`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `venta`
-- 

CREATE TABLE `venta` (
  `IDVENTA` int(11) NOT NULL auto_increment,
  `RUTADMIN` varchar(10) default NULL,
  `IDPROP` int(11) default NULL,
  `NOMBRECOMPRADOR` varchar(50) NOT NULL,
  `APELLIDOSCOMPRADOR` varchar(50) NOT NULL,
  `RUTCOMPRADOR` varchar(10) NOT NULL,
  PRIMARY KEY  (`IDVENTA`),
  KEY `FK_ES` (`IDPROP`),
  KEY `FK_HACE` (`RUTADMIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `venta`
-- 
