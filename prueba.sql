CREATE DATABASE prueba;
USE prueba ;
CREATE TABLE `tbl_cliente` (
  `tel_cli` varchar(20) NOT NULL,
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `cc_cli` varchar(255) NOT NULL,
  `nom_cli` varchar(255) NOT NULL,
  `ape_cli` varchar(255) NOT NULL,
  `dir_cli` varchar(255) NOT NULL,
  `ciu_cli` varchar(255) NOT NULL,
  `cup_cli` int(11) NOT NULL,
  `fec_cli` date NOT NULL,
  PRIMARY KEY (`id_cli`)
);
CREATE TABLE `tbl_credito` (
  `id_cre` int(11) NOT NULL AUTO_INCREMENT,
  `pag_cre` varchar(255) NOT NULL,
  `mon_cre` varchar(255) NOT NULL,
  `cou_cre` varchar(255) NOT NULL,
  `id_cli_cre` int(11) DEFAULT NULL,
  `fec_cre` date NOT NULL,
  PRIMARY KEY (`id_cre`),
  KEY `FK_cliente_cc` (`id_cli_cre`),
  CONSTRAINT `FK_cliente_cc` FOREIGN KEY (`id_cli_cre`) REFERENCES `tbl_cliente` (`id_cli`)
);