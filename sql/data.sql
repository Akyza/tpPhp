-- Adminer 4.7.0 MySQL dump
-- By Bryce Tavares

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id_article` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `content` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `author` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk` (`author`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `article` (`id_article`, `title`, `content`, `author`) VALUES
(1,	'test article',	'test',	1),
(2,	'test',	'ceci est un test',	1),
(3,	'test article 3',	'ceci est un test header',	1);

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE `commentaire` (
  `id_comment` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `content` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `article_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `username` (`username`),
  KEY `article_id` (`article_id`),
  CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `commentaire` (`id_comment`, `username`, `content`, `article_id`) VALUES
(1,	'test',	'test com',	3),
(2,	'test',	'test com 2',	3),
(3,	'Akyza',	'Test avec un autre user',	3);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1,	'test',	'$2y$10$bWlawT2vbwugAhjBgw3LleOZUz2H0ZtK7sMz0P5WpbK46035jU9HC'),
(2,	'Akyza',	'$2y$10$EEgkM1mwoMyUl7oT6zXRn.fol9oHPoW/lCZqD6W4o2NU5KQjgV/ie');

-- 2019-01-29 19:30:41