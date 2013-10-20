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
                                  password TEXT NOT NULL,
                                  created DATETIME DEFAULT 0,
                                  modified DATETIME DEFAULT 0);
                                  
CREATE TABLE IF NOT EXISTS roles (id INT AUTO_INCREMENT PRIMARY KEY,
                                  role VARCHAR(100) NOT NULL UNIQUE,
                                  description TEXT NOT NULL,
                                  view BOOLEAN DEFAULT 0,
                                  ins BOOLEAN DEFAULT 0,
                                  edit BOOLEAN DEFAULT 0,
                                  del BOOLEAN DEFAULT 0,
                                  recover BOOLEAN DEFAULT 0,
                                  user_management BOOLEAN DEFAULT 0);
                                  
CREATE TABLE IF NOT EXISTS users_roles (id INT AUTO_INCREMENT PRIMARY KEY,
                                        role_id INT NOT NULL REFERENCES roles(id),
                                        user_id INT NOT NULL REFERENCES users(id),
                                        date DATETIME DEFAULT 0,
                                        UNIQUE INDEX (role_id, user_id));

CREATE TABLE IF NOT EXISTS names (nid INT AUTO_INCREMENT PRIMARY KEY,
                                  name TEXT NOT NULL,
                                  user_id INT NOT NULL REFERENCES users(id),
                                  date DATETIME DEFAULT 0,
                                  oldid INT DEFAULT NULL REFERENCES old_names(oid));
                                  
CREATE TABLE IF NOT EXISTS ids (id INT AUTO_INCREMENT PRIMARY KEY,
                                type INT NOT NULL REFERENCES names(nid));
                                
CREATE TABLE IF NOT EXISTS id_names (id INT AUTO_INCREMENT PRIMARY KEY,
                                      id_id INT NOT NULL REFERENCES ids(id),
                                      name_nid INT NOT NULL REFERENCES names(nid),
                                      user_id INT NOT NULL REFERENCES users(id),
                                      date DATETIME DEFAULT 0,
                                      oldid INT DEFAULT NULL REFERENCES old_id_names(oid),                                      
                                      UNIQUE INDEX (id_id,name_nid));
            
CREATE TABLE IF NOT EXISTS abbrevations (id INT AUTO_INCREMENT PRIMARY KEY,
                                         abbrevation TEXT NOT NULL,
                                     	 user_id INT NOT NULL REFERENCES users(id),
                                      	 date DATETIME DEFAULT 0,
                                      	 oldid INT DEFAULT NULL REFERENCES old_abbrevations(oid));
                                         
CREATE TABLE IF NOT EXISTS urns (uid INT AUTO_INCREMENT PRIMARY KEY,
                                 id_id INT NOT NULL REFERENCES ids(id),
                                 urn TEXT NOT NULL,
                                 user_id INT NOT NULL REFERENCES users(id),
                                 date DATETIME DEFAULT 0,
                                 oldid INT DEFAULT NULL REFERENCES old_urns(oid));                                         
                                      
CREATE TABLE IF NOT EXISTS formulas (fid INT AUTO_INCREMENT PRIMARY KEY,
                                     formula TEXT NOT NULL,
                                     user_id INT NOT NULL REFERENCES users(id),
                                     date DATETIME DEFAULT 0,
                                     oldid INT DEFAULT NULL REFERENCES old_formulas(oid));
                                     
CREATE TABLE IF NOT EXISTS substances (id INT AUTO_INCREMENT PRIMARY KEY,
                                       formula_fid INT REFERENCES formula(id),
                                       user_id INT NOT NULL REFERENCES users(id),
                                       date DATETIME DEFAULT 0,
                                       oldid INT DEFAULT NULL REFERENCES old_substances(oid));
                                       
CREATE TABLE IF NOT EXISTS reactions (id INT AUTO_INCREMENT PRIMARY KEY,
                                      spontan BOOLEAN DEFAULT 0,
                                      user_id INT NOT NULL REFERENCES users(id),
                                      date DATETIME DEFAULT 0,
                                      oldid INT DEFAULT NULL REFERENCES old_reactions(oid));

CREATE TABLE IF NOT EXISTS rhs (id INT AUTO_INCREMENT PRIMARY KEY,
                                reaction_id INT NOT NULL REFERENCES reactions(id),
                                substance_id INT NOT NULL REFERENCES substances(id),
                                user_id INT NOT NULL REFERENCES users(id),
                                date DATETIME DEFAULT 0,
                                oldid INT DEFAULT NULL REFERENCES old_rhs(oid),
                                UNIQUE INDEX (reaction_id, substance_id));
                                  
CREATE TABLE IF NOT EXISTS lhs (id INT AUTO_INCREMENT PRIMARY KEY,
                                reaction_id INT NOT NULL REFERENCES reactions(id),
                                substance_id INT NOT NULL REFERENCES substances(id),
                                user_id INT NOT NULL REFERENCES users(id),
                                date DATETIME DEFAULT 0,
                                oldid INT DEFAULT NULL REFERENCES old_lhs(oid),
                                UNIQUE INDEX (reaction_id, substance_id));
                                
CREATE TABLE IF NOT EXISTS parameters (pid INT AUTO_INCREMENT PRIMARY KEY,
                                       description TEXT NOT NULL,
                                       user_id INT NOT NULL REFERENCES users(id),
                                       date DATETIME DEFAULT 0,
                                       oldid INT DEFAULT NULL REFERENCES old_parameters(oid));
                                  
CREATE TABLE IF NOT EXISTS parameters_use (puid INT AUTO_INCREMENT PRIMARY KEY,
                                           parameter_pid INT NOT NULL REFERENCES parameters(pid),
                                           id_id INT NOT NULL REFERENCES ids(id),
                                           abbrevation VARCHAR(5) NOT NULL,
                                           user_id INT NOT NULL REFERENCES users(id),
                                           date DATETIME DEFAULT 0,
                                           oldid INT DEFAULT NULL REFERENCES old_parameters_use(oid),
                                           UNIQUE INDEX (parameter_pid, id_id));
                                           
CREATE TABLE IF NOT EXISTS parameters_reference (id INT AUTO_INCREMENT PRIMARY KEY,
                                           p_u_id INT NOT NULL REFERENCES parameters(pid),
                                           selector VARCHAR(10),
                                           substance_id INT REFERENCES substances(id),
                                           user_id INT NOT NULL REFERENCES users(id),
                                           date DATETIME DEFAULT 0,
                                           oldid INT DEFAULT NULL REFERENCES old_parameters_use(oid),
                                           UNIQUE INDEX (parameter_pid, id_id));
                                           
CREATE TABLE IF NOT EXISTS enzymes (id INT AUTO_INCREMENT PRIMARY KEY,
                                    ecnumber TEXT,
                                    user_id INT NOT NULL REFERENCES users(id),
                   	            date DATETIME DEFAULT 0,
                                    oldid INT DEFAULT NULL REFERENCES old_enzymes(oid));
                                           
CREATE TABLE IF NOT EXISTS enzymes_reactions (id INT AUTO_INCREMENT PRIMARY KEY,
                                              enzyme_id INT NOT NULL REFERENCES enzymes(id),
                                              reaction_id INT NOT NULL REFERENCES reactions(id),
                                              user_id INT NOT NULL REFERENCES users(id),
                                              date DATETIME DEFAULT 0,
                                              oldid INT DEFAULT NULL REFERENCES old_enzymes_reactions(oid),
                                              UNIQUE INDEX (enzyme_id, reaction_id));
                                           
CREATE TABLE IF NOT EXISTS compartments (id INT AUTO_INCREMENT PRIMARY KEY,
                                         comment TEXT,
                                         user_id INT NOT NULL REFERENCES users(id),
                                         date DATETIME DEFAULT 0,
                                         oldid INT DEFAULT NULL REFERENCES old_compartments(oid));
                                           
CREATE TABLE IF NOT EXISTS compartments_enzymes (id INT AUTO_INCREMENT PRIMARY KEY,
                                                 compartment_id INT NOT NULL REFERENCES compartments(id),
                                                 enzyme_id INT NOT NULL REFERENCES enzymes(id),
                                                 user_id INT NOT NULL REFERENCES users(id),
                                                 date DATETIME DEFAULT 0,
                                                 oldid INT DEFAULT NULL REFERENCES old_compartments_enzymes(oid),
                                                 UNIQUE INDEX (compartment_id, enzyme_id));

CREATE TABLE IF NOT EXISTS containments (id INT AUTO_INCREMENT PRIMARY KEY,
                                         compartment_id INT NOT NULL REFERENCES compartments(id),
                                         container_id INT NOT NULL REFERENCES compartments(id),
                                         user_id INT NOT NULL REFERENCES users(id),
                                         date DATETIME DEFAULT 0,
                                         oldid INT DEFAULT NULL REFERENCES old_containments(oid),
                                         UNIQUE INDEX (compartment_id, container_id));
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
SHOW WARNINGS;
SHOW TABLES;
