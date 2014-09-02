# One user can vouch for another user and leave a rating/comment too
# This is broadly similar to the "like" feature in FaceBook, etc or "endorsement" in LinkedIn

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_vouch;

CREATE TABLE IF NOT EXISTS c8_vouch (
	from_user_id INT NOT NULL DEFAULT 0,
	to_user_id INT NOT NULL DEFAULT 0,
	comment VARCHAR(255) NOT NULL DEFAULT '',
	rating INT NOT NULL DEFAULT 5,
	create_date DATE
) ENGINE=INNODB;

ALTER TABLE c8_vouch ADD FOREIGN KEY (from_user_id) REFERENCES c8_user(id);
ALTER TABLE c8_vouch ADD FOREIGN KEY (to_user_id) REFERENCES c8_user(id);
