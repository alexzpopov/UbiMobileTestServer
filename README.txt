____________________________________________________________________________
CREATE TABLE `scores` (
   `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `name` VARCHAR(15) NOT NULL DEFAULT 'anonymous',
   `level_name` VARCHAR(15) NOT NULL DEFAULT 'level',
   `score` INT(10) UNSIGNED NOT NULL DEFAULT '0'
);
____________________________________________________________________________
