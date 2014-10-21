# Describes a registered user

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_user;

CREATE TABLE IF NOT EXISTS c8_user (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	first_name VARCHAR(255) NOT NULL DEFAULT '',
	last_name VARCHAR(255) NOT NULL DEFAULT '',
	full_name VARCHAR(255) NOT NULL DEFAULT '',

	email VARCHAR(255) NOT NULL DEFAULT '',
	mobile VARCHAR(255) NOT NULL DEFAULT '',

	house_unit_number VARCHAR(255) NOT NULL DEFAULT '',
	street VARCHAR(255) NOT NULL DEFAULT '',
	suburb VARCHAR(255) NOT NULL DEFAULT '',
	state VARCHAR(255) NOT NULL DEFAULT '',
	postcode VARCHAR(255) NOT NULL DEFAULT '',
	country VARCHAR(255) NOT NULL DEFAULT '',

	username VARCHAR(255) NOT NULL DEFAULT '',
	password_sha256 TEXT NOT NULL DEFAULT '',
	registration_token VARCHAR(255) NOT NULL DEFAULT '',
	avatar VARCHAR(255) NOT NULL DEFAULT 'avatar.png',

	is_registered INT NOT NULL DEFAULT 0,
	is_paid INT NOT NULL DEFAULT 0,
	is_test INT NOT NULL DEFAULT 1,
	membership_id INT NOT NULL DEFAULT 1,

	profile_id INT,
	current_salary INT NOT NULL DEFAULT 0,
	currency VARCHAR(8) NOT NULL DEFAULT 'AUD',

	geo_territory VARCHAR(32) NOT NULL DEFAULT '',
	ipv4address VARCHAR(16) NOT NULL DEFAULT '',

	first_joined  DATE NOT NULL,
	last_seen  DATE NOT NULL,
	last_valdiated  DATE NOT NULL
) ENGINE=INNODB;

ALTER TABLE c8_user ADD FOREIGN KEY (membership_id) REFERENCES c8_membership(id);
ALTER TABLE c8_user ADD FOREIGN KEY (profile_id) REFERENCES c8_profile(id);

INSERT INTO c8_user (id, username,full_name) VALUES (0, 'anonymous', 'Visitor');

