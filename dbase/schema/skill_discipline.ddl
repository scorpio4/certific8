# links a skill_discipline to a certified skill

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_skill_discipline;

CREATE TABLE IF NOT EXISTS c8_skill_discipline (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255), 
	keywords TEXT
) ENGINE=INNODB;

INSERT INTO c8_skill_discipline (name,keywords) VALUES("ICT Certificate", "ICT, IT, Technology, Software, Hardware");
