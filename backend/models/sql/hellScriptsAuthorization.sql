CREATE TABLE IF NOT EXISTS `hellscripts`.`authorization` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `hellscripts`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `avatar` VARCHAR(1000) NULL,
  `idAuthorization` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_authorization1_idx` (`idAuthorization` ASC),
  CONSTRAINT `fk_users_authorization1`
    FOREIGN KEY (`idAuthorization`)
    REFERENCES `hellscripts`.`authorization` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `hellscripts`.`authentication` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `token` VARCHAR(200) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `secret` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_authentication_users_idx` (`secret` ASC),
  CONSTRAINT `fk_authentication_users`
    FOREIGN KEY (`secret`)
    REFERENCES `hellscripts`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `hellscripts`.`tables` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `hellscripts`.`permissions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `getMine` TINYINT(1) NOT NULL DEFAULT 0,
  `getAll` TINYINT(1) NOT NULL DEFAULT 0,
  `postMine` TINYINT(1) NOT NULL DEFAULT 0,
  `postAll` TINYINT(1) NOT NULL DEFAULT 0,
  `updateMine` TINYINT(1) NOT NULL DEFAULT 0,
  `updateAll` TINYINT(1) NOT NULL DEFAULT 0,
  `deleteMine` TINYINT(1) NOT NULL DEFAULT 0,
  `deleteAll` TINYINT(1) NOT NULL DEFAULT 0,
  `idAuthorization` INT(11) NOT NULL,
  `idTable` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_permissions_authorization1_idx` (`idAuthorization` ASC),
  INDEX `fk_permissions_tables1_idx` (`idTable` ASC),
  CONSTRAINT `fk_permissions_authorization1`
    FOREIGN KEY (`idAuthorization`)
    REFERENCES `hellscripts`.`authorization` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_permissions_tables1`
    FOREIGN KEY (`idTable`)
    REFERENCES `hellscripts`.`tables` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO `hellscripts`.`users` (`id`, `username`, `name`, `email`, `avatar`, `idAuthorization`) VALUES (1, 'raulojeda22', 'Raül Ojeda', 'raulojeda10g@gmail.com', NULL, 2);
INSERT INTO `hellscripts`.`users` (`id`, `username`, `name`, `email`, `avatar`, `idAuthorization`) VALUES (2, 'jordilg13', 'Jordi Llopis', 'jordillopis00@gmail.com', '', 1);

INSERT INTO `hellscripts`.`authentication` (`id`, `token`, `password`, `secret`) VALUES (1, '188v6p5e8c1qa6p74m2jvmrlcahkavmxsgjmt9ho4917t772gmxpn2q', '$2y$10$M6i7nHVp6t1/8a.dJHgnGeWh6k2jRln7olh.3/yNgyTHC8MbMPIeW', 1);
INSERT INTO `hellscripts`.`authentication` (`id`, `token`, `password`, `secret`) VALUES (2, 'wx41aa3vpnyeg3k8ipbd99rmr2kwih4qveavop8v2i5x7tfjqoj5i', '$2y$10$uZcxpoGA36uM4o6p54A.aePOpijrVd34LtQJwjC/0a/05zM9GR/si', 2);

INSERT INTO `hellscripts`.`authorization` (`id`, `type`) VALUES (1, 'regular');
INSERT INTO `hellscripts`.`authorization` (`id`, `type`) VALUES (2, 'admin');

INSERT INTO `hellscripts`.`tables` (`id`, `name`) VALUES (1, 'projects');
INSERT INTO `hellscripts`.`tables` (`id`, `name`) VALUES (2, 'users');

INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (2, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (3, 1, 0, 1, 1, 1, 0, 1, 0, 1, 2);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (4, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2);
