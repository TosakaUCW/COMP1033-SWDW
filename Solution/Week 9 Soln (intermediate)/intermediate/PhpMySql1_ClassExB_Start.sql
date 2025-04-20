-- SQL1 Class Exercise B -------------------------------------------------
-- Click Restore DB button.

-- 1 Insert into customers table
--   UIC , Jefferson, T3-601-R1, Zhuhai, 519000, China
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('UIC', 'Jefferson', 'T3-601-R1', 'Zhuhai', '519000', 'China');
SELECT * FROM Customers; 

-- 2 Insert your own details
-- ToDo: Fill in SQL command.

-- 3 Update Jefferson to He Jing
UPDATE Customers SET ContactName='He Jing' WHERE CustomerName='UIC';

-- List all China records
SELECT * FROM Customers WHERE Country='China';

-- 4 Update Customer ID 91 CustomerName to Spiderman
-- ToDo: Fill in SQL command.
