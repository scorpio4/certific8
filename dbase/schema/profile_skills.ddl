# links a skill to a user's profile

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_profile_skill;

CREATE TABLE IF NOT EXISTS c8_profile_skill (
	profile_id INT NOT NULL DEFAULT 0,
	skill_id INT NOT NULL DEFAULT 0

) ENGINE=INNODB;

ALTER TABLE c8_profile_skill ADD FOREIGN KEY (profile_id) REFERENCES c8_profile(id);
ALTER TABLE c8_profile_skill ADD FOREIGN KEY (skill_id) REFERENCES c8_skill(id);
