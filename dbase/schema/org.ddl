# Organisation (Hirer/Trainer/Vendor/etc)
# Describes a registered legal business

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_org;

CREATE TABLE IF NOT EXISTS c8_org (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	legal_name VARCHAR(255) NOT NULL DEFAULT '',
	tax_number VARCHAR(255) NOT NULL DEFAULT '',

	logo VARCHAR(255) NOT NULL DEFAULT 'logo.png',

	billing_user_id INT NOT NULL DEFAULT 0,
	admin_user_id INT NOT NULL DEFAULT 0,

	is_registered INT NOT NULL DEFAULT 0

) ENGINE=INNODB;

ALTER TABLE c8_org ADD FOREIGN KEY (billing_user_id) REFERENCES c8_user(id);
ALTER TABLE c8_org ADD FOREIGN KEY (admin_user_id) REFERENCES c8_user(id);
