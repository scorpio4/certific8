# Describes a registered training provider

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_trainer;

CREATE TABLE IF NOT EXISTS c8_trainer (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	org_id INT NOT NULL DEFAULT 0,
	membership_id INT NOT NULL DEFAULT 0,

	is_registered INT NOT NULL DEFAULT 0,
	is_paid INT NOT NULL DEFAULT 0,

	first_joined  DATE NOT NULL,
	last_seen  DATE NOT NULL,
	last_valdiated  DATE NOT NULL
) ENGINE=INNODB;

ALTER TABLE c8_trainer ADD FOREIGN KEY (org_id) REFERENCES c8_org(id);
ALTER TABLE c8_trainer ADD FOREIGN KEY (membership_id) REFERENCES c8_membership(id);
