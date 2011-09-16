CREATE TABLE IF NOT EXISTS `#__uploads_sets` (
	`uploads_set_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL,
	`folder` VARCHAR(250) NOT NULL,
	`password` VARCHAR(250) NOT NULL DEFAULT ''
	
) DEFAULT;