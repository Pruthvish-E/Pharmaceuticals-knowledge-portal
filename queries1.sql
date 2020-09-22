Create table CUST_INFO_feedback(
CID INT PRIMARY KEY AUTO_INCREMENT,
Name varchar(50) NOT NULL,
Email varchar(50) NOT NULL,
Contact varchar(15) NOT NULL,
Location varchar(40) NOT NULL,
Feedback varchar(500) NOT NULL
);

Insert into CUST_INFO_feedback(name,email,contact,Location,Feedback) values('test','test','12345678901','Mumbai','good');

Create table producer_login(
DID INT PRIMARY KEY AUTO_INCREMENT,
Name varchar(50) NOT NULL,
Password varchar(50) NOT NULL
);

Insert into producer_login(Name,Password) values('admin','admin');
