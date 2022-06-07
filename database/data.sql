-- example data

-- CREATE DATABASE IF NOT EXISTS mydb;
CREATE TABLE IF NOT EXISTS mydb.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    country VARCHAR(50) NOT NULL,
    job VARCHAR(50) NOT NULL
);
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'tyler', 34, 'tunisia', 'psychiatrist');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'stefan', 32, 'netherlands', 'teacher');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'christopher', 28, 'chile', 'investment analyst');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'samatha', 35, 'united states', 'doctor');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'ariana', 27, 'namibia', 'mechanical engineer');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'aaron', 41, 'nigeria', 'radio producer');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'heidi', 32, 'united states', 'teacher');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'matthew', 28, 'luxembourg', 'sports coach');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'andrea', 39, 'malawi', 'sales executive');
INSERT IGNORE INTO mydb.users (id, name, age, country, job) VALUES (NULL, 'abigail', 35, 'australia', 'human resources officer');
