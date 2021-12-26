USE Cis111_AP

/*


Angela Matta
9/19/21
Assignment 1(Homework for chapter 3)
Query 2

*/

SELECT VendorName+':'+ VendorCity + ',' + VendorState + ',' + ' '+VendorZipCode AS 'Vendor Location'

FROM Vendors

WHERE VendorCity = 'Fresno' AND RIGHT(VendorZipCode,1) = 8;

