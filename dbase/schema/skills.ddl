# Describes a user's certified skills / qualifications

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_skill;

CREATE TABLE IF NOT EXISTS c8_skill (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL DEFAULT '',

	details TEXT NOT NULL DEFAULT '',
	keywords TEXT NOT NULL DEFAULT '',

	logo VARCHAR(255) NOT NULL DEFAULT 'none.png',
	webpage VARCHAR(255) NOT NULL DEFAULT '',
	certified_by VARCHAR(255) NOT NULL DEFAULT '',

	provider_id INT NOT NULL DEFAULT 0,
	skill_discipline_id INT NOT NULL DEFAULT 0,

	level INT NOT NULL DEFAULT 1,
	start_date DATE,
	end_date DATE,
	status INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

ALTER TABLE c8_skill ADD FOREIGN KEY (provider_id) REFERENCES c8_provider(id);
ALTER TABLE c8_skill ADD FOREIGN KEY (skill_discipline_id) REFERENCES c8_skill_discipline(id);
