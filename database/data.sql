-- example data

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES ('ruan'),('frank'),('james');
UNLOCK TABLES;
