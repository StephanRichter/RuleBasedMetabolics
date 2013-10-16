USE rulebased;

DROP TABLE IF EXISTS names;
DROP TABLE IF EXISTS formulas;
DROP TABLE IF EXISTS substances;
DROP TABLE IF EXISTS parameters;
DROP TABLE IF EXISTS parameters_substances;
DROP TABLE IF EXISTS names_substances;
DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY,
                                  username VARCHAR(100) NOT NULL UNIQUE,
                                  name TEXT NOT NULL,
                                  email VARCHAR(200) NOT NULL UNIQUE,
                                  password TEXT NOT NULL);
                                  
CREATE TABLE IF NOT EXISTS roles (id INT AUTO_INCREMENT PRIMARY KEY,
                                  role VARCHAR(100) NOT NULL UNIQUE,
                                  description TEXT NOT NULL,
                                  view BOOLEAN DEFAULT 0,
                                  ins BOOLEAN DEFAULT 0,
                                  edit BOOLEAN DEFAULT 0,
                                  del BOOLEAN DEFAULT 0,
                                  recover BOOLEAN DEFAULT 0);
SHOW TABLES;
