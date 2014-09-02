# social media links for a user's profile

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_social_profile;

CREATE TABLE IF NOT EXISTS c8_social_profile (
	social_id INT NOT NULL DEFAULT 0,
	username VARCHAR(255) NOT NULL,
	profile_id INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

ALTER TABLE c8_social_profile ADD FOREIGN KEY (social_id) REFERENCES c8_social(id);
ALTER TABLE c8_social_profile ADD FOREIGN KEY (profile_id) REFERENCES c8_profile(id);
