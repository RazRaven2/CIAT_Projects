-- In a command line prompt enter the following command:
-- >> cd \xampp\mysql\bin
-- >> mysql -u root -p
-- Press ENTER twice if there is no password being used

SHOW DATABASES;        			-- Displays all the databases available

CREATE DATABASE MyCompany;      -- Creates a database named MyCompany (The names are case insensitive)

USE MyCompany     				-- Selects the database you would like to USE

CREATE TABLE vehicles(license VARCHAR(10), make VARCHAR(25), model VARCHAR(50), miles FLOAT, assigned_to VARCHAR(40));  -- creates a TABLE

DESCRIBE vehicles;				-- Shows the structure of the table with corresponding fields

--------------------------  Make changes to the existing table --------------------------

ALTER TABLE vehicles ADD COLUMN (model_year INT);		   -- Adds a new field to the existing table
ALTER TABLE vehicles CHANGE COLUMN miles mileage FLOAT;    -- Renames the table field
ALTER TABLE vehicles MODIFY COLUMN model_year SMALLINT;    -- Modifies the data type of an existing field
ALTER TABLE vehicles RENAME TO company_cars;			   -- Renames the TABLE
ALTER TABLE company_cars DROP COLUMN assigned_to;		   -- Deletes the column named assigned_to

-------------------------- Inserts records in the existing table ------------------------

INSERT INTO company_cars(license, model_year, make, model, mileage) VALUES('CK-2987', 2009, 'Toyota', 'Corolla', 3508.4);

-------------------------- Extracting data from the database table ------------------------

SELECT * FROM company_cars;								   -- Selects all the fiels from the existing table
SHOW TABLE;												   -- Returns all existing tables from the current database

DROP TABLE company_cars;								   -- Deletes a table
DROP DATABASE MyCompany;								   -- Deletes the database