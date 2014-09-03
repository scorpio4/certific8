# A Member Profile
# This is the main table - it is created by members so that Hirers can find them
# The slugname is a bit.ly style sortname computed from the id at creation time.
# The HR_ID is the nominated representative (recruiter, agent or BDM) that will handle contract negotations on behalf of the member.

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_profile;

CREATE TABLE IF NOT EXISTS c8_profile (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	slugname VARCHAR(16) NOT NULL DEFAULT '',
	full_name VARCHAR(255) NOT NULL DEFAULT '',

	short_title VARCHAR(255) NOT NULL DEFAULT '',
	short_bio TEXT NOT NULL DEFAULT '',
	avatar VARCHAR(255) NOT NULL DEFAULT 'avatar.png',
	template_id INT NOT NULL DEFAULT 0,

	is_active INT NOT NULL DEFAULT 0,
	is_public INT NOT NULL DEFAULT 1,
	can_contact INT NOT NULL DEFAULT 1,
	show_vouches INT NOT NULL DEFAULT 1,

	min_salary INT NOT NULL DEFAULT 0,

	user_id INT NOT NULL DEFAULT 0,
	hr_id INT NOT NULL DEFAULT 0,
	membership_id INT NOT NULL DEFAULT 0
) ENGINE=INNODB;

ALTER TABLE c8_profile ADD FOREIGN KEY (user_id) REFERENCES c8_user(id);
ALTER TABLE c8_profile ADD FOREIGN KEY (hr_id) REFERENCES c8_hr(id);
ALTER TABLE c8_profile ADD FOREIGN KEY (membership_id) REFERENCES c8_membership(id);
ALTER TABLE c8_profile ADD FOREIGN KEY (template_id) REFERENCES c8_profile_template(id);
