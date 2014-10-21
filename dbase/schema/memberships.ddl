# Describes a membership level (basic, professional, corporate, recruiter, etc)

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_membership;

CREATE TABLE IF NOT EXISTS c8_membership (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	name VARCHAR(255) NOT NULL DEFAULT '',
	description TEXT NOT NULL DEFAULT '',
	logo VARCHAR(255) NOT NULL DEFAULT 'member.png',

	price  NUMERIC(15,2) NOT NULL DEFAULT 1.0,
	duration_days INT NOT NULL DEFAULT 30,

	can_search INT NOT NULL DEFAULT 1,
	can_contact INT NOT NULL DEFAULT 0,
	max_skills INT NOT NULL DEFAULT 3,
	status INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

INSERT INTO c8_membership (name) VALUES("User");
INSERT INTO c8_membership (name) VALUES("FREE Member");
INSERT INTO c8_membership (name) VALUES("Silver Member");
INSERT INTO c8_membership (name) VALUES("Gold Member");
INSERT INTO c8_membership (name) VALUES("FREE Trainer");
INSERT INTO c8_membership (name) VALUES("Silver Trainer");
INSERT INTO c8_membership (name) VALUES("Gold Trainer");
INSERT INTO c8_membership (name) VALUES("FREE Recruiter");
INSERT INTO c8_membership (name) VALUES("Silver Recruiter");
INSERT INTO c8_membership (name) VALUES("Gold Recruiter");
