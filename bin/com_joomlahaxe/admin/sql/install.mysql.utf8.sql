
CREATE TABLE IF NOT EXISTS `#__joomlahaxe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO `#__joomlahaxe` (`id`, `name`, `details`, `enabled`) VALUES
(1, 'Example', 'Enter your long description text in this field.', 1);


ALTER TABLE `#__joomlahaxe`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `#__joomlahaxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
