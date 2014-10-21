# A Profile Template is a pointer to a template directory

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_profile_template;

CREATE TABLE IF NOT EXISTS c8_profile_template (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	template_name VARCHAR(255) NOT NULL DEFAULT 'default'

) ENGINE=INNODB;

INSERT INTO c8_profile_template (template_name) VALUES ("default");
