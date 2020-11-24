/* 

Database schema for JEvents App
4th October 2020

Authors:

Katrin von Seggern
Eliza Alexandra-Checiu
Muhammad Dorrabb Khan Niazi

For Databases and Web Services
By Professor Peter Baumann
Jacobs University Bremen

*/

SET sql_mode = '';

DROP DATABASE IF EXISTS JEvents;
CREATE DATABASE JEvents;
USE JEvents;

CREATE TABLE Media (
    ID INT(10) AUTO_INCREMENT,
    FilePath VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID, FilePath)
);
CREATE TABLE Photos (
    -- ISA Media
    ID INT(10),
    FileFormat VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (ID) REFERENCES Media(ID)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Video (
    -- ISA Video
    ID INT(10),
    FileFormat VARCHAR(255) NOT NULL,
    Duration INT(10) NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (ID) REFERENCES Media(ID)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Venues ( 
    ID INT(10) AUTO_INCREMENT, 
    Name VARCHAR(255) NOT NULL, 
    Description VARCHAR(255), 
    PRIMARY KEY (ID)
);

CREATE TABLE VenueMedia (
    VenueID INT(10),
    MediaID INT(10),
    PRIMARY KEY (VenueID, MediaID),
    FOREIGN KEY (VenueID) REFERENCES Venues(ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (MediaID) REFERENCES Media(ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE Clubs (
    ID INT(10) AUTO_INCREMENT,
    Description VARCHAR(255),
    Name VARCHAR(255),
    PRIMARY KEY (ID)
);

CREATE TABLE ClubMedia (
    ClubID INT(10),
    MediaID INT(10),
    PRIMARY KEY (ClubID, MediaID),
    FOREIGN KEY (ClubID) REFERENCES Clubs(ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (MediaID) REFERENCES Media(ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Students (
    ID INT(10) AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE Presidents (
    -- ISA Student
    StudentID INT(10),
    ClubID INT(10),
    PRIMARY KEY (StudentID, ClubID),
    FOREIGN KEY (StudentID) REFERENCES Students(ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ClubID) REFERENCES Clubs(ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Requirements (
    ID INT(10) AUTO_INCREMENT,
    Description VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE Categories (
    ID INT(10) AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE CategoryRequirements (
    CatID INT(10),
    ReqID INT(10),
    PRIMARY KEY (CatID, ReqID),
    FOREIGN KEY (CatID) REFERENCES Categories(ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ReqID) REFERENCES Requirements(ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Events ( 
    ID INT(10) AUTO_INCREMENT, 
    StartTime TIMESTAMP NOT NULL,
    EndTime TIMESTAMP NOT NULL, 
    EventName VARCHAR(255) NOT NULL, 
    EventDesc VARCHAR(255), 
    VenueID INT(10) NOT NULL, 
    PresidentID INT(10) NOT NULL, 
    CatID INT(10) NOT NULL, 
    PRIMARY KEY (ID),
    FOREIGN KEY (VenueID) REFERENCES Venues(ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (PresidentID) REFERENCES Presidents(StudentID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (CatID) REFERENCES Categories(ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE EventMedia (
    EventID INT(10),
    MediaID INT(10),
    PRIMARY KEY (EventID, MediaID),
    FOREIGN KEY (EventID) REFERENCES Events(ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (MediaID) REFERENCES Media(ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);
