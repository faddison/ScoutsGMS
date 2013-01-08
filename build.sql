drop database scouts;
create database scouts;
use scouts;

create table MemberType(
memberTitle varchar(255) NOT NULL,
minAge int NOT NULL,
maxAge int NOT NULL,
PRIMARY KEY (memberTitle)
);

create table BadgeType(
badgeTitle varchar(255) NOT NULL,
memberTitle varchar(255),
description varchar(255),
PRIMARY KEY (badgeTitle),
FOREIGN KEY (memberTitle) REFERENCES MemberType (memberTitle)
);

create table EventType(
eventName varchar(255) NOT NULL,
description varchar(255),
fundraising bit NOT NULL,
PRIMARY KEY (eventName)
);

create table Address(
addressId int NOT NULL AUTO_INCREMENT,
street varchar(255),
postal varchar(255),
phone1 int,
phone2 int,
email1 varchar(255),
email2 varchar(255),
contact1 varchar(255),
contact2 varchar(255),
PRIMARY KEY (addressId)
);

create table Venue(
venueName varchar(255) NOT NULL,
addressId int,
capacity int,
description varchar(255),
PRIMARY KEY (venueName),
FOREIGN KEY (addressId) REFERENCES Address(addressId)
);

create table Youth(
youthId int NOT NULL AUTO_INCREMENT,
firstName varchar(255) NOT NULL,
middleName varchar(255),
lastName varchar(255) NOT NULL,
birthDate date,
active bit NOT NULL,
addressId int,
PRIMARY KEY (youthId),
FOREIGN KEY (addressId) REFERENCES Address(addressId)
);

create table BadgeLog(
youthId int NOT NULL,
badgeTitle varchar(255) NOT NULL,
dateAwarded date,
reason varchar(255),
PRIMARY KEY (youthId, badgeTitle),
FOREIGN KEY (youthId) REFERENCES Youth(youthId),
FOREIGN KEY (badgeTitle) REFERENCES BadgeType(badgeTitle)
);

create table EventLog(
eventId int NOT NULL AUTO_INCREMENT,
eventDate date,
eventName varchar(255) NOT NULL,
description varchar(255),
venueName varchar(255),
hours int,
cost int,
PRIMARY KEY (eventId),
FOREIGN KEY (eventName) REFERENCES EventType(eventName),
FOREIGN KEY (venueName) REFERENCES Venue(venueName)
);

create table Attendence(
youthId varchar(255) NOT NULL,
eventId varchar(255) NOT NULL,
PRIMARY KEY (youthId, eventId),
FOREIGN KEY (youthId) REFERENCES Youth(youthId),
FOREIGN KEY (eventId) REFERENCES EventLog(eventId)
);
