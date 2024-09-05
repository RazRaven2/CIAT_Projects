--In a Commandline prompt enter
-->>cd \xxamp\mysql\bin
-->>mysql -u root -p
-->>Press Enter twice if there is no password

SHOW DATABASES;              --Displays all the DATABASES available

CREATE DATABASE MyCompany;   --Creates database. names are case insensitive

USE MyCompany;               --Selects database

CREATE TABLE vehicles(license VARCHAR(10), make VARCHAR(25), model VARCHAR(50), miles FLOAT, assign_to VARCHAR(40));

DESCRIBE vechiles;

------- MAKE CHANGES TO TABLE ------

ALTER TABLE vechiles ADD COLUMN (model_year INT);  --ADDS new table to existing table
ALTER TABLE vechiles CHANGE COLUMN miles mileage FLOAT;  --Renames table field
ALTER TABLE vechiles MODIFY COLUMN model_year SMALLINT;  --Modify data types of an existing field
ALTER TABLE vechiles RENAME TO Company_Cars;            --Rename Table
ALTER TABLE Company_Cars DROP COLUMN assign_to;         --Deletes column

-------Inserts Records into existing table ---------------------

INSERT INTO Company_Cars(license, model_year, make, mileage) VALUES('CK-2987', 2009, 'Toyota', 'Corolla', 3500.8);

----------Extracting DATA from database table ------------------

SELECT * FROM Company_Cars;             --Selects all fields from table

SHOW TABLE;                         --Returns all existing tables from current database

DROP TABLE Company_Cars;
DROP DATABASE MyCompany;