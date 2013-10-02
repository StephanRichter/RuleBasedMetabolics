USE rulebased;
CREATE TABLE IF NOT EXISTS names 		(nid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,name TEXT NOT NULL);
CREATE TABLE IF NOT EXISTS substances		(sid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,formula TEXT);
CREATE TABLE IF NOT EXISTS parameters		(pid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,description TEXT NOT NULL);
CREATE TABLE IF NOT EXISTS parameters_substances(substance_sid INT NOT NULL, pid INT, abbrevation CHAR NOT NULL, specification TEXT,selector VARCHAR(10),refered_substance_sid INT);
CREATE TABLE IF NOT EXISTS names_substances	(name_nid INT NOT NULL,substance_sid INT NOT NULL, PRIMARY KEY(name_nid,substance_sid));


SHOW TABLES;
