
CREATE TABLE IF NOT EXISTS `my_contacts` (

  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_names` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact_no` varchar(75) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)

) ENGINE = InnoDB  DEFAULT CHARSET = latin1 AUTO_INCREMENT = 5 ;

INSERT INTO `my_contacts` (
    `id`,
    `full_names`,
    `gender`,
    `contact_no`,
    `email`,
    `city`,
    `country`)

VALUES
(1, 'Zeus', 'Male', '111', 'zeus@olympus.mt.co', 'Agos', 'Greece'),
(2, 'Anthena', 'Female', '123', 'anthena@olympus.mt.co', 'Athens', 'Greece'),
(3, 'Jupiter', 'Male', '783', 'jupiter@planet.pt.co', 'Rome', 'Italy'),
(4, 'Venus', 'Female', '987', 'venu @planet.pt.co', 'Mars', 'Italy');