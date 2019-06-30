ssh -i "Ubisoft.pem" ubuntu@ec2-3-16-75-105.us-east-2.compute.amazonaws.com
____________________________________________________________________________
cd /opt/bitnami/apache2/htdocs

http://3.16.75.105/phpmyadmin
root / eFexM3RD76Ko

http://3.16.75.105/ubisoft/sendscore.php
http://3.16.75.105/ubisoft/gethistory.php
____________________________________________________________________________
CREATE TABLE `scores` (
   `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `name` VARCHAR(15) NOT NULL DEFAULT 'anonymous',
   `level_name` VARCHAR(15) NOT NULL DEFAULT 'level',
   `score` INT(10) UNSIGNED NOT NULL DEFAULT '0'
);
____________________________________________________________________________