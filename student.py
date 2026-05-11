USE unidb;
CREATE TABLE student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    major VARCHAR(100));
    
CREATE TABLE instructor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(100));

CREATE TABLE course (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    credits INT);

INSERT INTO student (name, age, major) VALUES
('An', 20, 'Business'),
('Binh', 21, 'IT'),
('Chi', 19, 'Marketing');

INSERT INTO instructor (name, department) VALUES
('Dr. Nam', 'IT'),
('Ms. Lan', 'Business');

INSERT INTO course (name, credits) VALUES
('Database', 3),
('Marketing 101', 2),
('Programming', 4);