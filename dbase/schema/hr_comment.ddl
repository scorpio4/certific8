# Search results for saved hr_search 

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_hr_comment;

CREATE TABLE IF NOT EXISTS c8_hr_comment (
	id INT AUTO_INCREMENT PRIMARY KEY,

	hr_shortlist_id INT NOT NULL DEFAULT 0,
	hr_candidate_id INT NOT NULL DEFAULT 0,
	user_id INT NOT NULL DEFAULT 0,

	comment TEXT DEFAULT '',
	preference INT NOT NULL DEFAULT 0,
	status INT NOT NULL DEFAULT 0

) ENGINE=INNODB;

ALTER TABLE c8_hr_comment ADD FOREIGN KEY (hr_shortlist_id) REFERENCES c8_hr_shortlist(id);
ALTER TABLE c8_hr_comment ADD FOREIGN KEY (hr_candidate_id) REFERENCES c8_hr_candidate(id);
ALTER TABLE c8_hr_comment ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
