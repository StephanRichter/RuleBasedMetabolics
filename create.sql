USE rulebased;

DROP TABLE IF EXISTS names;
DROP TABLE IF EXISTS formulas;
DROP TABLE IF EXISTS substances;
DROP TABLE IF EXISTS parameters;
DROP TABLE IF EXISTS parameters_substances;
DROP TABLE IF EXISTS names_substances;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS names;

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
                                  
CREATE TABLE IF NOT EXISTS users_roles (id INT AUTO_INCREMENT PRIMARY KEY,
                                        role_id INT NOT NULL,
                                        user_id INT NOT NULL,
                                        UNIQUE INDEX (role_id, user_id));
                                        
CREATE TABLE IF NOT EXISTS names (nid INT AUTO_INCREMENT PRIMARY KEY,
                                  name TEXT NOT NULL,
                                  user_id INT NOT NULL REFERENCES users(id));
                                  
CREATE TABLE IF NOT EXISTS ids (id INT AUTO_INCREMENT PRIMARY KEY,
                                type INT NOT NULL REFERENCES names(nid));
                                
CREATE TABLE IF NOT EXISTS id_namess (id INT AUTO_INCREMENT PRIMARY KEY,
                                      id_id INT NOT NULL,
                                      name_nid INT NOT NULL,
                                      UNIQUE INDEX (id_id,name_nid));
            
CREATE TABLE IF NOT EXISTS abbrevations (id INT AUTO_INCREMENT PRIMARY KEY,
                                         abbrevation TEXT NOT NULL);
                                      

                                  
SHOW TABLES;
