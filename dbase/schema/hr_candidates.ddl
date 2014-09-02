# Candidates on a shortlist

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_hr_candidate;

CREATE TABLE IF NOT EXISTS c8_hr_candidate (
	hr_shortlist_id INT NOT NULL DEFAULT 0,
	profile_id INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

ALTER TABLE c8_hr_candidate ADD FOREIGN KEY (hr_shortlist_id) REFERENCES c8_hr_shortlist(id);
ALTER TABLE c8_hr_candidate ADD FOREIGN KEY (profile_id) REFERENCES c8_profile(id);
