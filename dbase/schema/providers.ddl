# Describes a registered vendor/provider (i.e. Microsoft / Cisco)

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_provider;

CREATE TABLE IF NOT EXISTS c8_provider (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	org_id INT NOT NULL DEFAULT 0,
	membership_id INT NOT NULL DEFAULT 0,

	cert_website VARCHAR(255) NOT NULL DEFAULT '',
	cert_email VARCHAR(255) NOT NULL DEFAULT '',
	description TEXT NOT NULL DEFAULT '',

	is_registered INT NOT NULL DEFAULT 0,
	is_paid INT NOT NULL DEFAULT 0,

	first_joined  DATE NOT NULL,
	last_seen  DATE NOT NULL,
	last_valdiated  DATE NOT NULL
) ENGINE=INNODB;

ALTER TABLE c8_provider ADD FOREIGN KEY (org_id) REFERENCES c8_org(id);
ALTER TABLE c8_provider ADD FOREIGN KEY (membership_id) REFERENCES c8_membership(id);
