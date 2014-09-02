# Describes the features enabled for a membership level
# Benefits are marketing features
# The 'fn' is some function name that acts as a pointer/key to the feature's business logic


SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_benefits;

CREATE TABLE IF NOT EXISTS c8_benefits (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	name VARCHAR(255) NOT NULL DEFAULT 'Undefined',
	fn VARCHAR(255) NOT NULL DEFAULT '',
	membership_id INT NOT NULL DEFAULT 1,
	status INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

ALTER TABLE c8_benefits ADD FOREIGN KEY (membership_id) REFERENCES c8_membership(id);
SET FOREIGN_KEY_CHECKS = 1;
