SET sql_mode = '';
USE JEvents;

-- create a read only user and grant only select privileges
CREATE USER 'user_ro'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT ON JEvents.* TO 'user_ro'@'localhost' IDENTIFIED BY 'password';

-- create a simple Users table
CREATE TABLE Users (
    Username VARCHAR(50),
    Pass VARCHAR(255),
    PRIMARY KEY (Username)
);

-- insert some values into the Users table
INSERT INTO Users (`Username`, `Pass`) VALUES ("user1", "pass1");
INSERT INTO Users (`Username`, `Pass`) VALUES ("user2", "pass2");
INSERT INTO Users (`Username`, `Pass`) VALUES ("user3", "pass3");
INSERT INTO Users (`Username`, `Pass`) VALUES ("user4", "pass4");
INSERT INTO Users (`Username`, `Pass`) VALUES ("user5", "pass5");
