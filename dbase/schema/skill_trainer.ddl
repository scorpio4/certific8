# Trainers offer courses/certificates in a Skill

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_skill_trainer;

CREATE TABLE IF NOT EXISTS c8_skill_trainer (
	trainer_id INT NOT NULL DEFAULT 0,
	skill_id INT NOT NULL DEFAULT 0,
	webpage VARCHAR(255), 
	valid_until DATE
) ENGINE=INNODB;

ALTER TABLE c8_skill_trainer ADD FOREIGN KEY (trainer_id) REFERENCES c8_trainer(id);
ALTER TABLE c8_skill_trainer ADD FOREIGN KEY (skill_id) REFERENCES c8_skill(id);
