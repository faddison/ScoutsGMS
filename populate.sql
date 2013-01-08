load data 
infile 'data_EventType.csv'
into table EventType
fields terminated by "," optionally enclosed by '"'		  
(eventName, description, fundraising);
