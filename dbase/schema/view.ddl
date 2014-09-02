# Tracks profile views

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_view;

CREATE TABLE IF NOT EXISTS c8_view (
	user_id INT NOT NULL DEFAULT 0,
	profile_id INT NOT NULL DEFAULT 0,
	view_date DATE
) ENGINE=INNODB;

ALTER TABLE c8_view ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
ALTER TABLE c8_view ADD FOREIGN KEY (profile_id) REFERENCES c8_profile(id);
