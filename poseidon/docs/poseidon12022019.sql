ALTER TABLE `poseidon`.`person` RENAME TO  `poseidon`.`persons` ;
ALTER TABLE `poseidon`.`hotel`  RENAME TO  `poseidon`.`hotels` ;
ALTER TABLE `poseidon`.`room`   RENAME TO  `poseidon`.`rooms` ;
drop table persons;
CREATE TABLE `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages personal information of guests for contact purposes';
