USE Cis111_AP

/*


Angela Matta
9/19/21
Assignment 1(Homework for chapter 3)
Query 1

*/


SELECT VendorCity, 

LEFT(VendorContactFName,1)+ '.' +VendorContactLName
AS ContactName

FROM Vendors

WHERE VendorState = 'NJ' OR LEFT(VendorContactLName,1) = 'M';

