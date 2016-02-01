<?php 
$installer = $this;

$installer->startSetup();

$installer->run("
		CREATE TABLE IF NOT EXISTS `systech_glscountry` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `country_number` varchar(9) DEFAULT NULL,
		  `country_name` varchar(64) DEFAULT NULL,
		  `country_code` varchar(9) DEFAULT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
    ");

$installer->endSetup();




