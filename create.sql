USE rulebased;

DROP TABLE IF EXISTS abbrevations;
DROP TABLE IF EXISTS containments;
DROP TABLE IF EXISTS formulas;
DROP TABLE IF EXISTS ids;
DROP TABLE IF EXISTS id_names;
DROP TABLE IF EXISTS lhs;
DROP TABLE IF EXISTS names;
DROP TABLE IF EXISTS names_substances;
DROP TABLE IF EXISTS parameters;
DROP TABLE IF EXISTS parameters_substances;
DROP TABLE IF EXISTS parameters_use;
DROP TABLE IF EXISTS reactions;
DROP TABLE IF EXISTS rhs;
DROP TABLE IF EXISTS roles;
DROP TABLE IF EXISTS substances;
DROP TABLE IF EXISTS urns;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS users_roles;

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
                                        role_id INT NOT NULL REFERENCES roles(id),
                                        user_id INT NOT NULL REFERENCES users(id),
                                        UNIQUE INDEX (role_id, user_id));
                                        
CREATE TABLE IF NOT EXISTS names (nid INT AUTO_INCREMENT PRIMARY KEY,
                                  name TEXT NOT NULL,
                                  user_id INT NOT NULL REFERENCES users(id));
                                  
CREATE TABLE IF NOT EXISTS ids (id INT AUTO_INCREMENT PRIMARY KEY,
                                type INT NOT NULL REFERENCES names(nid));
                                
CREATE TABLE IF NOT EXISTS id_namess (id INT AUTO_INCREMENT PRIMARY KEY,
                                      id_id INT NOT NULL REFERENCES ids(id),
                                      name_nid INT NOT NULL REFERENCES names(nid),
                                      UNIQUE INDEX (id_id,name_nid));
            
CREATE TABLE IF NOT EXISTS abbrevations (id INT AUTO_INCREMENT PRIMARY KEY,
                                         abbrevation TEXT NOT NULL);
                                         
CREATE TABLE IF NOT EXISTS urns (uid INT AUTO_INCREMENT PRIMARY KEY,
                                 id_id INT NOT NULL REFERENCES ids(id),
                                 urn TEXT NOT NULL);                                         
                                      
CREATE TABLE IF NOT EXISTS formulas (fid INT AUTO_INCREMENT PRIMARY KEY,
                                     formula TEXT NOT NULL);
                                     
CREATE TABLE IF NOT EXISTS substances (id INT AUTO_INCREMENT PRIMARY KEY,
                                       formula_fid INT REFERENCES formula(id));
                                       
CREATE TABLE IF NOT EXISTS reactions (id INT AUTO_INCREMENT PRIMARY KEY,
                                      spontan BOOLEAN DEFAULT 0);

CREATE TABLE IF NOT EXISTS rhs (id INT AUTO_INCREMENT PRIMARY KEY,
                                reaction_id INT NOT NULL REFERENCES reactions(id),
                                substance_id INT NOT NULL REFERENCES substances(id),
                                UNIQUE INDEX (reaction_id, substance_id));
                                  
CREATE TABLE IF NOT EXISTS lhs (id INT AUTO_INCREMENT PRIMARY KEY,
                                reaction_id INT NOT NULL REFERENCES reactions(id),
                                substance_id INT NOT NULL REFERENCES substances(id),
                                UNIQUE INDEX (reaction_id, substance_id));
                                
CREATE TABLE IF NOT EXISTS parameters (pid INT AUTO_INCREMENT PRIMARY KEY,
                                       description TEXT NOT NULL);
                                  
CREATE TABLE IF NOT EXISTS parameters_use (id INT AUTO_INCREMENT PRIMARY KEY,
                                           parameter_pid INT NOT NULL REFERENCES parameters(pid),
                                           id_id INT NOT NULL REFERENCES ids(id),
                                           abbrevation VARCHAR(5) NOT NULL,
                                           specification TEXT,
                                           selector VARCHAR(10),
                                           ref_substance_id INT REFERENCES substances(id),
                                           UNIQUE INDEX (parameter_pid, id_id));
                                           
CREATE TABLE IF NOT EXISTS enzymes (id INT AUTO_INCREMENT PRIMARY KEY,
                                    ecnumber TEXT);
                                           
CREATE TABLE IF NOT EXISTS enzymes_reactions (id INT AUTO_INCREMENT PRIMARY KEY,
                                              enzyme_id INT NOT NULL REFERENCES enzymes(id),
                                              reaction_id INT NOT NULL REFERENCES reactions(id),
                                              UNIQUE INDEX (enzyme_id, reaction_id));
                                           
CREATE TABLE IF NOT EXISTS compartments (id INT AUTO_INCREMENT PRIMARY KEY,
                                         comment TEXT);
                                           
CREATE TABLE IF NOT EXISTS compartments_enzymes (id INT AUTO_INCREMENT PRIMARY KEY,
                                                 compartment_id INT NOT NULL REFERENCES compartments(id),
                                                 enzyme_id INT NOT NULL REFERENCES enzymes(id),
                                                 UNIQUE INDEX (compartment_id, enzyme_id));

CREATE TABLE IF NOT EXISTS containments (id INT AUTO_INCREMENT PRIMARY KEY,
                                         compartment_id INT NOT NULL REFERENCES compartments(id),
                                         container_id INT NOT NULL REFERENCES compartments(id),
                                         UNIQUE INDEX (compartment_id, container_id));
SHOW WARNINGS;
SHOW TABLES;
