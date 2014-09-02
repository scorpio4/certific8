# Human Resources Manager (Hirer)
# Describes a registered HR agent / dept

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_hr;

CREATE TABLE IF NOT EXISTS c8_hr (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	org_id INT NOT NULL DEFAULT 0,
	membership_id INT NOT NULL DEFAULT 0,

	is_registered INT NOT NULL DEFAULT 0,
	is_paid INT NOT NULL DEFAULT 0,

	first_joined  DATE NOT NULL,
	last_seen  DATE NOT NULL,
	last_valdiated  DATE NOT NULL
) ENGINE=INNODB;

ALTER TABLE c8_hr ADD FOREIGN KEY (org_id) REFERENCES c8_org(id);
ALTER TABLE c8_hr ADD FOREIGN KEY (membership_id) REFERENCES c8_membership(id);
