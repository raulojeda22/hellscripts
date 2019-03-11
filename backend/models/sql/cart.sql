CREATE TABLE IF NOT EXISTS `hellscripts`.`cart` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idUser` INT(11) NOT NULL,
  `idProject` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cart_users1_idx` (`idUser` ASC),
  INDEX `fk_cart_projects1_idx` (`idProject` ASC),
  CONSTRAINT `fk_cart_users1`
    FOREIGN KEY (`idUser`)
    REFERENCES `hellscripts`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cart_projects1`
    FOREIGN KEY (`idProject`)
    REFERENCES `hellscripts`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (7, 1, 1, 1, 0, 1, 0, 1, 0, 1, 3);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (8, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (9, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3);

INSERT INTO `hellscripts`.`tables` (`id`, `name`) VALUES (3, 'cart');

CREATE TABLE IF NOT EXISTS `hellscripts`.`checkout` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idUser` INT(11) NOT NULL,
  `idProject` INT(11) NOT NULL,
  `idCart` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_checkout_users1_idx` (`idUser` ASC),
  INDEX `fk_checkout_projects1_idx` (`idProject` ASC),
  CONSTRAINT `fk_checkout_users1`
    FOREIGN KEY (`idUser`)
    REFERENCES `hellscripts`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_checkout_projects1`
    FOREIGN KEY (`idProject`)
    REFERENCES `hellscripts`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (10, 1, 0, 1, 0, 1, 0, 1, 0, 1, 4);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (11, 1, 1, 1, 1, 1, 1, 1, 1, 2, 4);
INSERT INTO `hellscripts`.`permissions` (`id`, `getMine`, `getAll`, `postMine`, `postAll`, `updateMine`, `updateAll`, `deleteMine`, `deleteAll`, `idAuthorization`, `idTable`) VALUES (12, 0, 0, 0, 0, 0, 0, 0, 0, 3, 4);
