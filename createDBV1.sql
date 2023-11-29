CREATE DATABASE IF NOT EXISTS user_information;
USE user_information;

INSERT INTO user (firstname, surname, dateofbirth, email)
VALUES ('Adam', 'murphy', '2003-03-12', 'murphy@example.com');

SELECT * FROM user;
