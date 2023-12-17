
-- Database: `user_db`

CREATE DATABASE user_db; 


-- Table structure for table `user_form`;

CREATE TABLE `user_form` (
 `id` int(255) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `user_type` varchar(255) NOT NULL DEFAULT 'user',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4








--FOR UPLOADING IMAGES

CREATE DATABASE tutedb;

-- Table structure for table `items`;

CREATE TABLE `items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `image` varchar(255) DEFAULT NULL,
 `title` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4


