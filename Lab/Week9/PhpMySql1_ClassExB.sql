-- SQL1 Class Exercise B -------------------------------------------------
-- Click Restore DB button.
USE SWDW;

-- 1 Insert into customers table
--   UIC , Jefferson, T3-601-R1, Zhuhai, 519000, China
INSERT INTO Customers (
        CustomerName,
        ContactName,
        Address,
        City,
        PostalCode,
        Country
    )
VALUES (
        'UIC',
        'Jefferson',
        'T3-601-R1',
        'Zhuhai',
        '519000',
        'China'
    );

SELECT *
FROM Customers;

-- 2 Insert your own details
--   UIC , Bohan YANG, D5-712, Zhuhai, 519000, China
INSERT INTO Customers (
        CustomerName,
        ContactName,
        Address,
        City,
        PostalCode,
        Country
    )
VALUES (
        'UIC',
        'Bohan YANG',
        'D5-712',
        'Zhuhai',
        '519000',
        'China'
    );

SELECT *
FROM Customers;

-- 3 Update Jefferson to Tessa
UPDATE Customers
SET ContactName = 'Tessa'
WHERE CustomerName = 'Jefferson';

-- List all China records
SELECT *
FROM Customers
WHERE Country = 'China';

-- 4 Update Customer ID 91 CustomerName to Spiderman
UPDATE Customers
SET CustomerName = 'Spiderman'
WHERE CustomerID = 91;