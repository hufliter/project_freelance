ALTER TABLE `products` ADD `size` VARCHAR(255) NOT NULL AFTER `name`, ADD `weight` INT NOT NULL AFTER `size`, ADD `package` VARCHAR(255) NOT NULL AFTER `weight`, ADD `words` VARCHAR(255) NOT NULL AFTER `package`;
ALTER TABLE `products` ADD `solder` VARCHAR(255) NOT NULL AFTER `words`;