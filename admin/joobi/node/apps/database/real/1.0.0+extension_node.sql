CREATE TABLE IF NOT EXISTS `#__extension_node` (
 `wid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(100) NOT NULL,
 `folder` varchar(40) NOT NULL,
 `name` varchar(100) NOT NULL,
 `type` smallint(5) unsigned NOT NULL DEFAULT '1',
 `publish` tinyint(4) NOT NULL DEFAULT '0',
 `status` tinyint(4) NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `destination` varchar(255) NOT NULL,
 `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `trans` tinyint(4) NOT NULL DEFAULT '0',
 `certify` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `version` int(10) unsigned NOT NULL DEFAULT '0',
 `lversion` int(10) unsigned NOT NULL DEFAULT '0',
 `pref` tinyint(4) NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `install` text NOT NULL,
 `ordering` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `core` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `reload` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `showconfig` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `framework` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`wid`),
 UNIQUE KEY `UK_extension_node_namekey` (`namekey`),
 KEY `IX_extension_node_publish_certify` (`publish`,`certify`),
 KEY `IX_extension_node_type_modified` (`type`,`modified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;