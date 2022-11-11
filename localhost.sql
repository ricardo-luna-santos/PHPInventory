-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-07-2018 a las 22:26:55
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `inventory`
-- 
CREATE DATABASE `inventory` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `inventory`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clientes`
-- 

CREATE TABLE `clientes` (
  `ccliente` varchar(30) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `telefonof` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `fechareg` date NOT NULL,
  PRIMARY KEY  (`ccliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 

INSERT INTO `clientes` VALUES ('HLS', 'LUSH831004', 'HERIBERTO LUNA SANTOS', 'CALLE ILUSIÃ“N FRACCIONAMIENTO LA ESPERANZA CASA 1', '7647642535', 'sombraheri@hotmail.com', 'Heriberto Luna santos', '7647645321', '7641234455', '7647645321', '2018-07-01');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cuntacob`
-- 

CREATE TABLE `cuntacob` (
  `id` int(11) NOT NULL auto_increment,
  `ccliente` varchar(30) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `preciop` double(11,2) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `ccliente` (`ccliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `cuntacob`
-- 

INSERT INTO `cuntacob` VALUES (1, 'HLS', 'PAGO', 200.00, '2018-07-01');
INSERT INTO `cuntacob` VALUES (2, 'HLS', 'PAGO DOS', 100.00, '2018-07-08');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ingresos`
-- 

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL auto_increment,
  `norecibo` int(11) NOT NULL,
  `ccliente` varchar(30) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `preciop` double(11,2) NOT NULL,
  `fecha` date NOT NULL,
  `descuento` double(11,2) NOT NULL,
  `fpago` varchar(30) NOT NULL,
  `tpago` varchar(30) NOT NULL,
  `entrega` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `ccliente` (`ccliente`,`clave`),
  KEY `clave` (`clave`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `ingresos`
-- 

INSERT INTO `ingresos` VALUES (1, 1, 'HLS', '0001', 'SAMSUNG GALAXY GRAND PRIME', 1, 'MTS', 1800.00, '2018-07-01', 0.00, 'CONTADO', 'EFECTIVO', 'MOSTRADOR');
INSERT INTO `ingresos` VALUES (2, 1, 'HLS', '0002', 'SAMSUNG GALAXY GRAND PRIME PLUS', 1, 'MTS', 2500.00, '2018-07-01', 0.00, 'CONTADO', 'EFECTIVO', 'MOSTRADOR');
INSERT INTO `ingresos` VALUES (3, 2, 'HLS', '0001', 'SAMSUNG GALAXY GRAND PRIME', 1, 'MTS', 1800.00, '2018-07-01', 0.00, 'CREDITO', 'EFECTIVO', 'MOSTRADOR');
INSERT INTO `ingresos` VALUES (4, 2, 'HLS', '0002', 'SAMSUNG GALAXY GRAND PRIME PLUS', 1, 'MTS', 2500.00, '2018-07-01', 0.00, 'CREDITO', 'EFECTIVO', 'MOSTRADOR');
INSERT INTO `ingresos` VALUES (5, 3, 'HLS', '0001', 'SAMSUNG GALAXY GRAND PRIME', 1, 'MTS', 1620.00, '2018-07-01', 10.00, 'CONTADO', 'EFECTIVO', 'MOSTRADOR');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `clave` varchar(50) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `precio` double(11,2) NOT NULL,
  `preciop` double(11,2) NOT NULL,
  `existencia` double(11,2) NOT NULL,
  `nombrep` varchar(50) NOT NULL,
  `fechareg` date NOT NULL,
  PRIMARY KEY  (`clave`),
  KEY `nombrep` (`nombrep`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES ('0001', 'SAMSUNG GALAXY GRAND PRIME', 'MTS', 0.00, 1800.00, 12.00, 'SAMSUNG', '2018-07-01');
INSERT INTO `productos` VALUES ('0002', 'SAMSUNG GALAXY GRAND PRIME PLUS', 'MTS', 0.00, 2500.00, 8.00, 'SAMSUNG', '2018-07-01');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proveedores`
-- 

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(60) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `bancos` varchar(20) NOT NULL,
  `ncuenta` varchar(40) NOT NULL,
  `cinterbancaria` varchar(60) NOT NULL,
  `bancos2` varchar(20) NOT NULL,
  `ncuenta2` varchar(40) NOT NULL,
  `cinterbancaria2` varchar(60) NOT NULL,
  PRIMARY KEY  (`nombre`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `proveedores`
-- 

INSERT INTO `proveedores` VALUES (3, 'SAMSUNG', 'CALLE 3 DE MARZO COL. SANTA RITA, MEXICO, DF', '5556543234', 'informes@samsung.com', 'SAM646433HJ', 'Bancomer', '1111111111111', '22222222222222', 'Banamex', '33333333333', '22222222222222');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nick` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'admin', '1a2b3c', 'Ricardo Luna Santos', 'ricardo_luna_santos@hotmail.com', '7647649325', '3 de Mayo # 104 Col. Vista Hermosa, Xicotepec, Puebla', 'Administrador');
INSERT INTO `usuarios` VALUES (5, 'miguel', '123456', 'Ricardo Miguel Luna Rodriguez', 'rmiguel@hotmail.com', '7647642535', 'CALLE 3 DE MARZO COL. SANTA RITA, MEXICO, DF', 'Cajero');
