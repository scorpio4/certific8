# links a roles to a user

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_user_role;

CREATE TABLE IF NOT EXISTS c8_user_role (
	user_id INT NOT NULL DEFAULT 0,
	role_id INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

ALTER TABLE c8_user_role ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
ALTER TABLE c8_user_role ADD FOREIGN KEY (role_id) REFERENCES c8_role(id);
