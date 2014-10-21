# part of user's career history - a job at some organisation, listed on a profile

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_profile_job;

CREATE TABLE IF NOT EXISTS c8_profile_job (
	profile_id INT,
	org_id INT,
	hr_id INT,
	job_title VARCHAR(255) NOT NULL DEFAULT '',
	rating INT NOT NULL DEFAULT 0,
	comment TEXT NOT NULL DEFAULT '',
	start_date DATE,
	end_date DATE

) ENGINE=INNODB;

ALTER TABLE c8_profile_job ADD FOREIGN KEY (profile_id) REFERENCES c8_profile(id);
ALTER TABLE c8_profile_job ADD FOREIGN KEY (org_id) REFERENCES c8_org(id);
ALTER TABLE c8_profile_job ADD FOREIGN KEY (hr_id) REFERENCES c8_hr(id);
