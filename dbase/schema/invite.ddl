# One user can invite for another user by email

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_invite;

CREATE TABLE IF NOT EXISTS c8_invite (
	user_id INT NOT NULL DEFAULT 0,
	email VARCHAR(255) NULL DEFAULT 0,
	create_date DATE
) ENGINE=INNODB;

ALTER TABLE c8_invite ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
