SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reserv_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `num_guests` int(11) NOT NULL,
  `num_tables` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `time_zone` text NOT NULL,
  `telephone` text NOT NULL,
  `comments` mediumtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_fk` int(11) NOT NULL,
  PRIMARY KEY (`reserv_id`),
  KEY `users_fk` (`user_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;


INSERT INTO reservation (f_name, l_name, num_guests, num_tables, rdate, time_zone, telephone, comments, user_fk) VALUES
('Arya', 'Patel', 4, 1, '2024-03-30', '12:00-16:00', '1234567890', 'This is Arya Patel', 3),
('Navjotsingh', 'Shron', 6, 2, '2024-03-30', '12:00-16:00', '9876543210', 'This is Navjotsingh Shron reservation', 4),
('Renny', 'Prajapati', 2, 1, '2024-03-30', '12:00-16:00', '1122334455', 'This is Renny Prajapati reservation', 5);


DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`role_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `role` (`role_id`) VALUES
(1),
(2),
(3);

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `open_time` time NOT NULL DEFAULT '12:00:00',
  `close_time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `schedule` (`schedule_id`, `date`, `open_time`, `close_time`) VALUES
(6, '2019-05-15', '03:11:00', '11:11:00'),
(7, '2019-05-16', '01:00:00', '01:00:00'),
(8, '2019-05-18', '02:01:00', '15:00:00');

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `tables_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_date` date NOT NULL,
  `t_tables` int(11) NOT NULL,
  PRIMARY KEY (`tables_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `tables` (`tables_id`, `t_date`, `t_tables`) VALUES
(6, '2019-05-17', 5),
(7, '2019-05-15', 10),
(8, '2019-05-10', 2);

CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
	created_at TIMESTAMP default CURRENT_TIMESTAMP
);

INSERT INTO users (id, name, email, password, timestamp) VALUES
(3, 'Arya Patel', 'arya@gmail.com', '12345', '2023-06-08 01:40:08'),
(4, 'Navjotsingh Shron', 'nss@gmail.com', '12345', '2023-06-08 01:40:08'),
(5, 'Renny Prajapati', 'renny@gmail.com', '12345', '2023-06-08 01:40:08');

ALTER TABLE `reservation`
  ADD CONSTRAINT `idusers` FOREIGN KEY (`user_fk`) REFERENCES `users` (`user_id`);

ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON UPDATE NO ACTION;
COMMIT;

CREATE TABLE IF NOT EXISTS order_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(20) NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    item_price DECIMAL(10,2) NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO order_info (order_number, item_name, item_price, payment_method)
VALUES ('9', 'Chole Puri', 480.00, 'Credit Card'),
       ('10', 'Calamari', 500.00, 'GPay'),
       ('11', 'Chicken Tikka', 380.00, 'Debit Card');

SELECT SUM(item_price) AS total_sales FROM order_info;


