-- SQL1 Class Exercise A
-- Note, in W3Schools.cn and www.quanzhanketang.com/sql/sql_select.html,
--     Run one command at a time.
--     Cannot have comments at end of file. 
--     # and /*  */ don't work either.

USE SWDW;

-- 1 List all CustomerName , ContactName, PostalCode
SELECT CustomerName, ContactName, PostalCode FROM Customers

-- 2 List all Addresses, Cities and Countries
SELECT Address, City, Country FROM Customers;

-- 3 List all
SELECT * FROM Customers; 

-- 4 List all customer data in Germany
SELECT * FROM Customers WHERE Country='Germany';

-- 5 List all Contact names and cities in UK
SELECT ContactName, City FROM Customers WHERE Country='UK';

-- 6 List all cities and contactname from UK and Germany
SELECT City, ContactName FROM Customers WHERE Country IN ('UK', 'Germany');

-- 7 List all customerID from 23 to 34 inclusive
SELECT * FROM Customers WHERE CustomerID BETWEEN 23 AND 34;

-- 8 List all contactName starting from K up to starting with T
SELECT * FROM Customers WHERE ContactName BETWEEN 'K' AND 'T';

