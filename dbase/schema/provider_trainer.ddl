# links a Trainer provider to a certificate vendor
# i.e. links ABC Training to Cisco

SET FOREIGN_KEY_CHECKS = 0; 
DROP TABLE IF EXISTS c8_provider_trainer;

CREATE TABLE IF NOT EXISTS c8_provider_trainer (
	trainer_id INT NOT NULL DEFAULT 0,
	provider_id INT NOT NULL DEFAULT 0,
	valid_until DATE
) ENGINE=INNODB;

ALTER TABLE c8_provider_trainer ADD FOREIGN KEY (provider_id) REFERENCES c8_provider(id);
ALTER TABLE c8_provider_trainer ADD FOREIGN KEY (trainer_id) REFERENCES c8_trainer(id);
