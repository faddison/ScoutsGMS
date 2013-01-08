
-- INSERT TEST VALUES BELOW

-- insert MemberType test date
INSERT INTO MemberType VALUES ('Beaver', 5, 7);
INSERT INTO MemberType VALUES ('Cub', 8, 10);
INSERT INTO MemberType VALUES ('Scout', 11, 14);
INSERT INTO MemberType VALUES ('Venturer', 14, 17);

-- insert address test data
LOAD DATA LOCAL INFILE '/var/www/svn/scouts/trunk/data/data_address.csv' 
INTO TABLE Address
FIELDS TERMINATED BY '|' 
LINES TERMINATED BY '\n' 
(addressId, street, postal, phone1, phone2, email1, email2, contact1, contact2);

-- insert Youth test data
LOAD DATA LOCAL INFILE '/var/www/svn/scouts/trunk/data/data_youth.csv' 
INTO TABLE Youth
FIELDS TERMINATED BY '|' 
LINES TERMINATED BY '\n' 
(firstName, lastName, since, birthDate, active, addressId);

-- insert BadgeType test data
LOAD DATA LOCAL INFILE '/var/www/svn/scouts/trunk/data/data_badgeType.csv' 
INTO TABLE BadgeType
FIELDS TERMINATED BY '|' 
LINES TERMINATED BY '\n' 
(badgeTitle, category, memberTitle, description);

-- insert EventType test data
LOAD DATA LOCAL INFILE '/var/www/svn/scouts/trunk/data/data_eventType.csv' 
INTO TABLE EventType
FIELDS TERMINATED BY '|' 
LINES TERMINATED BY '\n' 
(eventName, description, fundraising);

-- insert BadgeLog test data
LOAD DATA LOCAL INFILE '/var/www/svn/scouts/trunk/data/data_badgelog.csv' 
INTO TABLE BadgeLog
FIELDS TERMINATED BY '|' 
LINES TERMINATED BY '\n' 
(youthId, badgeTitle, dateAwarded, reason);

-- CREATE VIEWS BELOW

create view youth_age(youthId, age, joined) as
select y.youthId, floor(datediff(curdate(), y.birthDate)/365), floor(datediff(curdate(), y.since)/365)	
from Youth y
;
