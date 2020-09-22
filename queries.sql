Drop database pfizer;

Create database pfizer;

Use pfizer;

/* DRUGS table*/
create table DRUGS(
DID INT PRIMARY KEY AUTO_INCREMENT, 
NAME VARCHAR(50) not null,
EXPIRY_TIME DECIMAL(5,2) not null);



/*mf_drug_stock table*/
create table MF_DRUG_STOCK(
DID INT,
 MF_date DATE,
No_of_units INT CHECK(No_of_units>-1)
);

Alter table MF_DRUG_STOCK add constraint PK1 primary key(DID,MF_DATE);

Alter table MF_DRUG_STOCK add constraint FK FOREIGN KEY MF_DRUG_STOCK(DID) REFERENCES DRUGS(DID) ON DELETE CASCADE;

/*Symptoms Table*/
Create table SYMPTOMS(SID INT PRIMARY KEY, Sname VARCHAR(50));

/*drug symptoms table*/
Create table DRUG_SYMPTOMS(DID INT , 
SID INT,
 PRIMARY KEY(DID,SID)
);

Alter table DRUG_SYMPTOMS add constraint FK1 foreign key DRUG_SYMPTOMS(DID) references DRUGS(DID) ON DELETE CASCADE;


Alter table DRUG_SYMPTOMS add constraint FK2 foreign key DRUG_SYMPTOMS(SID) references SYMPTOMS(SID) ON DELETE CASCADE;

/*Seller Info*/
Create table SELLER_INFO(
SEL_ID INT PRIMARY KEY AUTO_INCREMENT,
Name varchar(50) not null,
Email varchar(50) not null,
contact_no varchar(15) not null,
Address varchar(100) not null,
Gstin  varchar(30) not null
);

/* Location info table*/
Create table LOCATION_INFO(
LOC_ID INT PRIMARY KEY AUTO_INCREMENT,
Name varchar(50) not null
);

/*seller warehouse */
Create table SELLER_WAREHOUSE(
 DID INT ,
 SID INT,
 LOC_ID INT,
 Mfd_date DATE ,
No_of_units INT CHECK(No_of_units>0),
PRIMARY KEY(DID,SID,LOC_ID,Mfd_date)
);

Alter table SELLER_WAREHOUSE add constraint FK3 Foreign key(DID,Mfd_date) references MF_DRUG_STOCK(DID,Mf_date) ON DELETE CASCADE;

Alter table SELLER_WAREHOUSE add constraint FK4 Foreign Key (SID) 
REFERENCES SELLER_INFO(SEL_ID);

Alter table SELLER_WAREHOUSE add constraint FK5 Foreign Key(Loc_ID) References LOCATION_INFO(LOC_ID) ON DELETE CASCADE;

/* Customer info table*/
Create table CUST_INFO(
CID INT PRIMARY KEY AUTO_INCREMENT,
Name varchar(50) NOT NULL,
Email varchar(50) NOT NULL,
Contact varchar(15) NOT NULL,
Location varchar(40) NOT NULL
);


/*CUST_FEEDBACK*/
Create table CUST_FEEDBACK(
Complain_Id INT PRIMARY KEY AUTO_INCREMENT,
CID INT,
Type varchar(20),
Category varchar(50) not null,
Comments varchar(200) Not null,
Status varchar(50) Not Null
);

Alter table CUST_FEEDBACK add constraint FK6 foreign key CUST_FEEDBACK(CID) references CUST_INFO(CID) ON DELETE SET NULL;


/*Insert Data into DRUGS table*/

Insert into drugs(name,expiry_time) values
("abc",1),
("bca",1),
("bdc",1),
('EnteraGram',12);
Insert into drugs(name,expiry_time) values('Riboflavin',12);
Insert into drugs(name,expiry_time) values('Aldesleukin',12);
Insert into drugs(name,expiry_time) values('buprenex',12);
Insert into drugs(name,expiry_time) values('Zoster vaccine Live',12);
Insert into drugs(name,expiry_time) values('Exubera',12);
Insert into drugs(name,expiry_time) values('Avonex Pen',12);
/*Insert into drugs(name,expiry_time) values(“Larin Fe 1.5/2',12);*/
Insert into drugs(name,expiry_time) values('Q-Tapp_DM',12);
Insert into drugs(name,expiry_time) values('Broankaid',12);
Insert into drugs(name,expiry_time) values('Sterapred',12);
Insert into drugs(name,expiry_time) values('Medrox',24);
Insert into drugs(name,expiry_time) values('Luminax',24);
Insert into drugs(name,expiry_time) values('Amethyst',24);


delete from drugs where did < 4;

/* Insert into mf_drug_symptoms*/
Insert Into mf_drug_stock  values (4,'2020-2-20',100000),
(4,'2020-1-20',100000),
(5,'2020-3-2',50000),
(6,'2019-12-23',50000),
(7,'2019-11-12',100000),
(8,'2019-10-24',100000),
(9,'2020-1-20',10000),
(10,'2020-2-12',50000),
(11,'2020-3-15',50000),
(12,'2020-1-11',10000),
(13,'2020-1-11',10000),
(14,'2020-2-11',100000),
(15,'2020-2-15',100000),
(16,'2020-1-17',50000);

/*insert into symptoms*/
Insert into symptoms values
(1,'Irritable bowel Syndrome'),
(2,'Migraine Prevention'),
(3,'renal cell carcinoma'),
(4,'pain'),
(5,'Herpes Zoster,Prophylaxis'),
(6,'Diabetes Type 2'),
(7,'Multiple Scelorosis'),
(8,'Cough and nasal congestion'),
(9,'Cold symptoms'),
(10,'Conjunctivitis,allergic'),
(11,'Muscle Pain'),
(12,'Seizures'),
(13,'Birth control');

/*Insert into drug_symptoms*/
Insert into drug_symptoms values
(4,1),
(5,2),
(6,3),
(7,4),
(8,5),
(9,6),
(10,7),
(11,8),
(12,9),
(13,10),
(14,11),
(15,12),
(16,13);


/*Insert into Location_info*/
Insert into location_info(name) values
('Bengaluru'),
('Mumbai'),
('Delhi'),
('Hyderabad'),
('Chennai'),
('Ahmedabad'),
('Gurgaon'),
('Patna'),
('Thiruvananthapurm'),
('Itanagar'),
('Jammu'),
('Jaipur');


/*Insert Into cust_info values*/
Insert into cust_info
(name,email,contact,location) values
('Pruthvish Eshwar','umapruthvish@gmail.com','7619660371','bengaluru'),
('Naveen karthik ','test_email1@gmail.com','9876543210','delhi'),
('Pratheek Kamath','test_email2@gmail.com','9812537891','Hyderabad'),
('Monish Prakasan','test_email3@gmail.com','9867542310','Thiruvananthapuram'),
("Molly","metus.facilisis@dolorDonecfringilla.org","9374073664",'Chennai'),
("Edan","porttitor@sapienAeneanmassa.edu","9699387408",'Mumbai'),
("Cedric","massa@necmalesuada.com","9058636991",'Delhi');

Insert into cust_info
(name,email,contact,location) values
("Imani","Sed.eu@eget.edu","9995758495",'Belgavi');

Insert into cust_info
(name,email,contact,location) values
("Mona","sed.libero.Proin@Integersem.ca","9192959605",'Gorakhpur'),
("Justina","semper@sociis.net","9890398674",'Pune'),
("Kieran","ut.dolor@aaliquet.edu","9705468280",'Hisar'),
("Amelia","mi@blanditatnisi.ca","9954576441",'Vadodara'),
("Aidan","massa.Mauris.vestibulum@nibhPhasellus.co.uk","9397885898",'Bengaluru'),
("Shaine","sem.Nulla.interdum@dui.org","9350229852","Cochin");

Insert into cust_info
(name,email,contact,location) values
("August","Fusce@loremvitae.ca","9123391863","Vishakapatnam"),
("Bruno","lorem@quispedeSuspendisse.co.uk","9768419530","Chennai"),
("Aquila","Donec.sollicitudin.adipiscing@magnaPhasellus.net","9662847281","Hyderabad");

Insert into cust_info
(name,email,contact,location) values
("Quinn","Donec@duiaugueeu.co.uk","9704674168","Itanagar"),("Karly","Etiam@arcuac.com","9961158161","Lucknow"),
("Ryan","varius.Nam.porttitor@felisullamcorper.com","9818258141","Itanagar"),
("Shelley","varius.ultrices@sapiengravida.ca","9960156351","Jammu"),
("Christian","congue.In@augueporttitorinterdum.ca","9703049943","Bengaluru"),
("Barbara","Ut.tincidunt.vehicula@elitelit.co.uk","9103900918","Mumbai"),
("Clark","Nullam@Pellentesquetincidunttempus.ca","9363318323","Delhi");

Insert into cust_info
(name,email,contact,location) values
("Yael","eget.massa@vehiculaetrutrum.ca","9753632752","Baroda"),
("Tatum","gravida.sit@turpisAliquamadipiscing.edu","9454999885","Chikmagalur"),
("Baxter","at.auctor.ullamcorper@sed.co.uk","9343571597","Lucknow"),
("Wing","Duis@infelisNulla.co.uk","9359788713","Delhi"),
("Macey","ac.libero.nec@quam.org","9404575428","Mumbai"),
("Astra","erat@Mauris.ca","9876150332","Delhi"),
("Francis","velit.justo.nec@Namacnulla.co.uk","9638072759","Hyderabad"),
("Amanda","erat.nonummy.ultricies@adipiscing.net","9683564353","Bengaluru"),
("Anne","arcu.Vestibulum.ante@diamdictumsapien.net","9377311486","Gurgaon"),
("Brent","montes.nascetur.ridiculus@metusAenean.edu","9879862016","Bengaluru");



Insert into seller_info values
(1,"Deependra","ligula.eu@lobortisrisusIn.net","9473162207","RajajiNagar,Bengaluru",'37AADCB2230M2ZR'),
(2,"Shubhendu","ad@vitaevelit.ca","9840972704","Hyderabad",'07AADCB2230M1ZV'),
(3,"Murad","luctus.et.ultrices@lectusjustoeu.net","9966964267","Rajarajeshwari Nagar,Bengaluru",'24AADCB2230M1Z2'),
(4,"Mitul","pede.ultrices.a@Aeneangravida.ca","9153214823","Jaffrabad,Delhi",'06AADCB2230M1ZX'),
(5,"Samir","Integer.urna@sollicitudinadipiscing.org","9518547625","Marine Drive,Mumbai",'29AADCB2230M1ZP'),
(6,"Sayam","egestas@semegestas.ca","9681674381","Thiruvananthapuram",'32AADCB2230M1Z2'),
(7,"Teja","luctus.Curabitur.egestas@tinciduntadipiscing.com","9597673393","Hyderbad",'27AADCB2230M1ZT'),
(8,"Ojal","sem@eratsemper.net","9187014029","Gurgaon",'23AADCB2230M1Z1'),
(9,"Iniyavan","lorem.vehicula@lacus.com","9502546204","Itanagar",'21AADCB2230M1Z5'),
(10,"Saipraasad","urna@lobortisquam.ca","9563195585","T Nagar,Chennai",'03AADCB2230M1Z3'),
(11,"Fadi","tortor.dictum.eu@elementumpurusaccumsan.net","9206563029","vadodara",'33AADCB2230M1Z0');

use pfizer;
desc mf_drug_stock;

insert into seller_warehouse(DID,mfd_date,loc_id,sid,no_of_units)
select *,1 as No_of_units from (select mf_drug_stock.did,mf_drug_stock.mf_date,location_info.loc_id,seller_info.sel_id from mf_drug_stock,seller_info,location_info) temp order by rand() limit 100;
 
 update seller_warehouse set no_of_units=(rand()*5000)+500;
 
 /* End of all create and insert statements*/
 
 /* query 1 */
 /*to get the drugs which match the symptoms
 Matches a single symptom*/
 select 
 drugs.did,drugs.name,drugs.expiry_time 
 from drugs,drug_symptoms,symptoms
 where drug_symptoms.did=drugs.did 
 and drug_symptoms.sid=symptoms.sid
 and symptoms.sid=(select symptoms.sid from symptoms where symptoms.sname="Cold Symptoms");
 
 /* Query 2*/
 /*Set all the no_of_units of drugs past expiry date to 0 in the mf_drug_stock table 
 Reason for setting to 0 is because the company has to keep stock of all the drugs and their manufacuring date*/
 
 create table mf_drug_stock_delete as
 select * from mf_drug_stock 
 where 0=1;
 
 DELIMITER //
 create trigger drug_delete
 before delete on drugs
 for each row 
 begin
		insert into mf_drug_stock_delete 
        select * from mf_drug_stock
        where mf_drug_stock.did=old.did;
        insert into seller_warehouse_delete 
        select * from seller_warehouse
        where seller_warehouse.did=old.did;
end; 
 
 create trigger mf_drug_stock_del_1
 before delete on mf_drug_stock
 for each row
	insert into mf_drug_stock_delete values (old.did,old.mf_date,old.no_of_units);
    
create trigger seller_warehouse 
after delete on seller_warehouse
for each row
	insert into seller_warehouse_delete values (old.did,old.sid,old.loc_id,old.mfd_date,old.no_of_units);
        
CREATE EVENT DELETE_ROWS_DRUGS 
ON SCHEDULE EVERY 1 DAY
STARTS CURRENT_TIMESTAMP 
DO
	DELETE FROM MF_DRUG_STOCK
	WHERE DATEDIFF(now(),mf_date)>=expiry_time_days;
    
    
    Alter table mf_drug_stock add column expiry_time_days INT ;
    update mf_drug_stock set expiry_time_days=(select expiry_time*30 from drugs where drugs.did=mf_drug_stock.did);
    
    
drop procedure orderDrugs;    
DELIMITER //
CREATE PROCEDURE orderDrugs(dgid INT ,quantity INT,locid INT,selid INT)
BEGIN
	DECLARE C INT;
    DECLARE mdate DATE;
    SELECT COUNT(*) INTO C 
    FROM drugs where did=dgid;
    
    IF(C<0)
    THEN 
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'The drug was not found.Please check the drug name properly';
    END IF;
    
    SELECT no_of_units INTO C
    FROM mf_drug_stock
    where did=dgid limit 1;
    
    IF(C<quantity) 
    THEN
    SIGNAL SQLSTATE '45000'
		SET MESSAGE_TEXT = "The quantity requested is not available,please try later or with a lower quantity";
	END IF;
    
    
    SELECT COUNT(*) INTO C
    FROM location_info where loc_id=locid;
    
    IF(C!=1) THEN
    SIGNAL SQLSTATE '45000'
		SET MESSAGE_TEXT = "The location is invalid";
	END IF;
    
    
    SELECT COUNT(*) INTO C
    FROM seller_info where sel_id=selid;
    
    IF(C!=1) THEN
    SIGNAL SQLSTATE '45000'
		SET MESSAGE_TEXT = "The sellerID is invalid or does not exist";
	END IF;
    
    select * INTO mdate FROM (select mf_date from mf_drug_stock where did=dgid and no_of_units > quantity order by mf_date limit 1) temp;
    
    update mf_drug_stock set no_of_units=no_of_units-quantity 
    where did=dgid and mf_date=mdate;
    
    Select count(*) into C 
    from seller_warehouse 
    where did=dgid and sid=selid and mfd_date=mdate and loc_id=locid;
    
    IF(C!=1) THEN
		insert into seller_warehouse(did,sid,loc_id,mfd_date,no_of_units) values(dgid,selid,locid,mdate,quantity);
	ELSE 
		update seller_warehouse set no_of_units=no_of_units+quantity
		where did=dgid and sid=selid and mfd_date=mdate and loc_id=locid;
    END IF;
END//



/* Query to return drugs for symptoms*/
select sname,group_concat(drugs.name) as assosciated_drugs
from drug_symptoms,symptoms,drugs
where  symptoms.sname = 'Cold Symptoms' and drug_symptoms.sid=symptoms.sid and drug_symptoms.did=drugs.did
group by sname;

/* query to retrieve symptoms for a drug*/
select drugs.did,drugs.name,group_concat(sname) as assosciated_symptoms
from drug_symptoms,symptoms,drugs
where  drugs.name="Amethyst" and drug_symptoms.sid=symptoms.sid and drug_symptoms.did=drugs.did
group by drugs.did,drugs.name;

/* query to find the seller's given the location and the symptoms*/
DROP Procedure findSellers;

DELIMITER //
CREATE PROCEDURE findSellers(symp VARCHAR(50),location VARCHAR(50))
BEGIN
	DECLARE symid INT;
	DECLARE locid INT;
	SELECT coalesce(sid,0) into symid from symptoms where sname=symp;
    
    IF(symid=0)
	THEN 
		SIGNAL SQLSTATE '45000'
			SET MESSAGE_TEXT="The Symptoms specified does not have any medicine as of now.We will get back to our research team.Keep checking";
		END IF;
        
	SELECT coalesce(loc_id,0) INTO locid from location_info where name=location;
    
     IF(locid=0)
	THEN 
		SIGNAL SQLSTATE '45000'
			SET MESSAGE_TEXT="The location specified doesn't have any sellers  or a seller's warehouse right now.Check other locations near you,Metropolitans have a better chance";
		END IF;

	Select
    seller_info.sel_id,seller_info.name,seller_info.email,seller_info.contact_no,drugs.name,seller_warehouse.no_of_units
    from seller_info,seller_warehouse,drugs,drug_symptoms 
    where
    drug_symptoms.sid=symid and
    drug_symptoms.did=drugs.did and 
    seller_info.sel_id =seller_warehouse.sid and
    seller_warehouse.loc_id=locid and 
    seller_warehouse.did=drugs.did;
    
END//

