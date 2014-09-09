# HR can "save" search results (hr_candidates)

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_hr_shortlist_skill;

CREATE TABLE IF NOT EXISTS c8_hr_shortlist_skill (
	is_required INT NOT NULL DEFAULT 1,

	hr_shortlist_id INT NOT NULL DEFAULT 0,
	skill_id INT NOT NULL DEFAULT 0

) ENGINE=INNODB;

ALTER TABLE c8_hr_shortlist_skill ADD FOREIGN KEY (hr_shortlist_id) REFERENCES c8_hr_shortlist(id);
ALTER TABLE c8_hr_shortlist_skill ADD FOREIGN KEY (skill_id) REFERENCES c8_skill(id);
