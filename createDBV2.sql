DROP DATABASE IF EXISTS user_information;
CREATE DATABASE user_information;
USE user_information;
SHOW TABLES;

CREATE TABLE user_info (
idUser INT AUTO_INCREMENT PRIMARY KEY,
Fname VARCHAR(45) NOT NULL,
Lname VARCHAR(45) NOT NULL,
Age INT NOT NULL,
Gender VARCHAR(45) NOT NULL,
Email VARCHAR(45) NOT NULL,
`skills` VARCHAR(30),
education VARCHAR(40),
experience VARCHAR(50),
homeAddress VARCHAR(30),
phoneNumber VARCHAR(10)
);

CREATE TABLE course (
idDeg INT NOT NULL,
DegName VARCHAR(45) NOT NULL,
DegStartDate DATE NOT NULL,
StudID INT NOT NULL,
PRIMARY KEY (idDeg),
CONSTRAINT StudId FOREIGN KEY (StudID) REFERENCES user_info (idUser)
);


INSERT INTO user_info (Fname, Lname, Age, Gender, Email, `skills`, education, experience, homeAddress, phoneNumber)
VALUES ('Anthony', 'Dela Cruz', 19, 'MALE', '1@gmail.com', 'Skill1', 'Education1', 'Experience1', 'HomeAddress1', '1234567890',);

INSERT INTO course VALUES (863, 'Cybersecurity', '2023-10-13', 1);