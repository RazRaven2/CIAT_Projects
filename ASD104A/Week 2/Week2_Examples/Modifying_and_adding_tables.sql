CREATE TABLE L1_Customers (Customer_num CHAR(3) PRIMARY_KEY, Customer_name VARCHAR(35), Balance DECIMAL(8,2), Credit_limit DECIMAL(8,2),
						   Rep_num CHAR(2));
						   
INSERT INTO L1_Customers VALUES('907', 'GLEN''s British Toys', 0, 7500, '45');                        -- Create a new record

UPDATE INTO L1_Customers SET Credit_limit = 8000 WHERE Balance < 20000 AND Customer_num = '907';      -- Update an existing record

INSERT INTO L1_Customers VALUES('908', 'Tim''s Toy Store', 200, 60000, '24');                         -- Creates a second record

DELETE FROM L1_Customers WHERE Customer_num = '908';												  -- Deletes a record

ALTER TABLE L1_Customers ADD Customer_type CHAR(1);

UPDATE L1_Customers SET Customer_type = 'R' WHERE Customer_num = '907';