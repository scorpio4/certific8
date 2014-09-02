# Describes a socia media site (LinkedIn, FaceBook, Twitter, etc)

# The url_template is a simple pattern that substitutes the social_profile's username
# The oauth_url is the entry point for authentication. NULL means the site hasn't been approved by Certific8 for authentication.

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_social;

CREATE TABLE IF NOT EXISTS c8_social (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

	title VARCHAR(255) NOT NULL DEFAULT '',
	website VARCHAR(255) NOT NULL DEFAULT '',
	small_logo_url VARCHAR(255) NOT NULL DEFAULT '',
	large_logo_url VARCHAR(255) NOT NULL DEFAULT '',

	username_title VARCHAR(255) NOT NULL DEFAULT 'username',

	url_template VARCHAR(255) NOT NULL DEFAULT '',
	oauth_url VARCHAR(255) DEFAULT ''

) ENGINE=INNODB;
