drop database scouts;
create database scouts;
use scouts;

create table MemberType(
memberTitle varchar(255),
minAge int NOT NULL,
maxAge int NOT NULL,
PRIMARY KEY (memberTitle)
);

create table BadgeType(
badgeTitle varchar(255),
category varchar(255),
memberTitle varchar(255),
description varchar(255),
PRIMARY KEY (badgeTitle),
FOREIGN KEY (memberTitle) REFERENCES MemberType (memberTitle)
);

create table EventType(
eventName varchar(255),
description varchar(255),
fundraising boolean NOT NULL,
PRIMARY KEY (eventName)
);

create table Address(
addressId int AUTO_INCREMENT,
street varchar(255),
postal varchar(255),
phone1 varchar(255),
phone2 varchar(255),
email1 varchar(255),
email2 varchar(255),
contact1 varchar(255),
contact2 varchar(255),
PRIMARY KEY (addressId)
);

create table Venue(
venueName varchar(255),
addressId int,
capacity int,
description varchar(255),
PRIMARY KEY (venueName),
FOREIGN KEY (addressId) REFERENCES Address(addressId)
);

create table Youth(
youthId int AUTO_INCREMENT,
firstName varchar(255) NOT NULL,
lastName varchar(255) NOT NULL,
since date,
birthDate date,
active boolean NOT NULL,
addressId int,
PRIMARY KEY (youthId),
FOREIGN KEY (addressId) REFERENCES Address(addressId)
);

create table BadgeLog(
badgeId int AUTO_INCREMENT,
youthId int,
badgeTitle varchar(255),
dateAwarded date,
reason varchar(255),
PRIMARY KEY (badgeId),
FOREIGN KEY (youthId) REFERENCES Youth(youthId),
FOREIGN KEY (badgeTitle) REFERENCES BadgeType(badgeTitle),
CONSTRAINT uc_BadgeLogId UNIQUE (youthId, badgeTitle)
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
