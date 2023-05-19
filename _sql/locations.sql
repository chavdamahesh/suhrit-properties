
DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, '1000 Brussels'),
(2, '1030 Schaerbeek'),
(3, '1040 Etterbeek'),
(4, '1050 Ixelles'),
(5, '1050 Ixelles'),
(6, '1060 St Gilles'),
(7, '1070 Anderlecht'),
(8, '1080 Mollenbeek'),
(10, '1090 Jette'),
(11, '1120 neder-over- heembeek'),
(12, '1140 Evere'),
(13, '1150 Woluwe-Saint-Pierre'),
(14, '1160  Auderghem'),
(15, '1170  Watermael-Boitsfort'),
(16, '1180 Uccle'),
(17, '1190 Forest'),
(18, '1200 Woluwe-Saint-Lambert'),
(19, '1210 Saint Josse-ten-Noode'),
(20, '1020 Laeken');
COMMIT;
