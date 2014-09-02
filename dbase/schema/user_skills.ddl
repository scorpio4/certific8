# Represents a Certificate or Approved Skill
# Essentially links a known-skill to a user

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_user_skill;

CREATE TABLE IF NOT EXISTS c8_user_skill (
	user_id INT NOT NULL DEFAULT 0,
	skill_id INT NOT NULL DEFAULT 0,
	trainer_id INT NOT NULL DEFAULT 0,
	award_number VARCHAR(255),
	award_rank INT NOT NULL DEFAULT 0,
	award_date DATE,
	expiry_date DATE
) ENGINE=INNODB;

ALTER TABLE c8_user_skill ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
ALTER TABLE c8_user_skill ADD FOREIGN KEY (skill_id) REFERENCES c8_skill(id);
ALTER TABLE c8_user_skill ADD FOREIGN KEY (trainer_id) REFERENCES c8_trainer(id);
