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
    `visitor_approved` BOOLEAN NOT NULL DEFAULT('0'),
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
    `retailer_approved` BOOLEAN NOT NULL DEFAULT(1),
    `retailer_company` VARCHAR(64) NOT NULL,
    `retailer_city` VARCHAR(64) NOT NULL,
    `retailer_country` VARCHAR(64) NOT NULL,
    `retailer_address` VARCHAR(64) NOT NULL,
    `retailer_created` DATETIME DEFAULT NULL,
    PRIMARY KEY (`retailer_id`),
    UNIQUE (`retailer_email`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS
  `exhibitor_registers` (
    `reg_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `reg_code` VARCHAR(6) NOT NULL,
    `reg_reference` VARCHAR(24) NOT NULL,
    `reg_referral` VARCHAR(24) NOT NULL,
    `reg_firstname` VARCHAR(120) NOT NULL,
    `reg_lastname` VARCHAR(120) NOT NULL,
    `reg_jobtitle` VARCHAR(120) NOT NULL,
    `reg_email` VARCHAR(120) NOT NULL,
    `reg_phone` VARCHAR(24) NOT NULL,
    `reg_company_country` VARCHAR(120) NOT NULL,
    `reg_company_city` VARCHAR(120) NOT NULL,
    `reg_company_address` VARCHAR(512) NOT NULL,
    `reg_company_zip` VARCHAR(24) NOT NULL,
    `reg_company_website` VARCHAR(120) NOT NULL,
    `reg_company_foundation` DATE NOT NULL,
    `reg_company_employees` INT UNSIGNED NOT NULL,
    `reg_company_activity` VARCHAR(1024) NOT NULL,
    `reg_company_markets` VARCHAR(1024) NOT NULL,
    `reg_company_exhibitions` VARCHAR(1024) NOT NULL,
    `reg_products_list` VARCHAR(1024) NOT NULL,
    `reg_products_style` VARCHAR(1024) NOT NULL,
    `reg_status` TINYINT UNSIGNED NOT NULL DEFAULT '1',
    `reg_create` DATETIME NOT NULL,
    PRIMARY KEY (`reg_id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;