# HR can "save" search results (hr_candidates)

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_hr_shortlist;

CREATE TABLE IF NOT EXISTS c8_hr_shortlist (
	id INT AUTO_INCREMENT PRIMARY KEY,

	hr_id INT NOT NULL DEFAULT 0,
	user_id INT NOT NULL DEFAULT 0,

	name VARCHAR(255) NOT NULL DEFAULT 'Untitled Search',
	client VARCHAR(255) NOT NULL DEFAULT 'Unknown Client',

	max_results INT NOT NULL DEFAULT 10,
	geo_territory VARCHAR(32) NOT NULL DEFAULT '',
	ipv4address VARCHAR(16) NOT NULL DEFAULT '',

	is_archived INT NOT NULL DEFAULT 0,
	create_date DATE,
	expire_date DATE
) ENGINE=INNODB;

ALTER TABLE c8_hr_shortlist ADD FOREIGN KEY (hr_id) REFERENCES c8_hr(id);
ALTER TABLE c8_hr_shortlist ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
