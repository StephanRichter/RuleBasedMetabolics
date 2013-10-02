USE rulebased;
CREATE TABLE IF NOT EXISTS names 		(nid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,name TEXT);
CREATE TABLE IF NOT EXISTS substances		(sid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,formula TEXT);
CREATE TABLE IF NOT EXISTS parameters		(pid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,description TEXT);
CREATE TABLE IF NOT EXISTS substance_names	(nid INT NOT NULL,sid INT NOT NULL, PRIMARY KEY(nid,sid));


SHOW TABLES;
