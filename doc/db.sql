CREATE TABLE IF NOT EXISTS
  `users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(120) NOT NULL,
    `user_email` VARCHAR(120) NOT NULL,
    `user_password` VARCHAR(255) NOT NULL,
    `user_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE (`user_email`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------
CREATE TABLE IF NOT EXISTS
  `visitors` (
    `visitor_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `visitor_name` VARCHAR(64) NOT NULL,
    `visitor_email` VARCHAR(255) NOT NULL,
    `visitor_phone` VARCHAR(24) NOT NULL,
    `visitor_approved` BOOLEAN NOT NULL DEFAULT ('0'),
    `visitor_qr_code` VARCHAR(24) DATETIME NULL,
    `visitor_expiry` DATETIME DEFAULT NULL,
    PRIMARY KEY (`visitor_id`),
    UNIQUE (`visitor_email`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------
CREATE TABLE IF NOT EXISTS
  `retailers` (
    `retailer_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `retailer_f_name` VARCHAR(64) NOT NULL,
    `retailer_l_name` VARCHAR(64) NOT NULL,
    `retailer_email` VARCHAR(255) NOT NULL,
    `retailer_phone` VARCHAR(24) NOT NULL,
    `retailer_approved` BOOLEAN NOT NULL DEFAULT (1),
    `retailer_company` VARCHAR(64) NOT NULL,
    `retailer_city` VARCHAR(64) NOT NULL,
    `retailer_country` VARCHAR(64) NOT NULL,
    `retailer_address` VARCHAR(64) NOT NULL,
    `retailer_created` DATETIME DEFAULT NULL,
    PRIMARY KEY (`retailer_id`),
    UNIQUE (`retailer_email`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;


