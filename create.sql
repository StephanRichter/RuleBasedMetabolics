USE rulebased;
CREATE TABLE IF NOT EXISTS names 		(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,name TEXT NOT NULL);
CREATE TABLE IF NOT EXISTS substances		(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,formula TEXT);
CREATE TABLE IF NOT EXISTS parameters		(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,description TEXT NOT NULL);
CREATE TABLE IF NOT EXISTS parameters_substances(parameter_id INT NOT NULL, substance_id INT NOT NULL, abbrevation CHAR NOT NULL, specification TEXT,selector VARCHAR(10),refered_substance_id INT);
CREATE TABLE IF NOT EXISTS names_substances	(name_id INT NOT NULL,substance_id INT NOT NULL, PRIMARY KEY(name_id,substance_id));


SHOW TABLES;
