CREATE DATABASE IF NOT EXISTS `to_do_list_db`  
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; 

use to_do_list_db;

CREATE TABLE `content` (  
  -- `id` INT NOT NULL,  
    `date` VARCHAR(8) NOT NULL,  
    `text` TEXT, 
    PRIMARY KEY (id)
    )ENGINE=InnoDB ;


 
