USE Cis111_AP

/*


Angela Matta
9/19/21
Assignment 1(Homework for chapter 3)
Query 4

*/

SELECT *

FROM Vendors 

/* Account for PO Box with and without the period*/
WHERE VendorState IN('IL','OH','WI','AZ')  AND ((VendorAddress1 LIKE 'P.O. Box%'  OR VendorAddress2 LIKE 'P.O. Box%'  ) OR (VendorAddress1 LIKE 'PO Box%'  OR VendorAddress2 LIKE 'PO Box%'))

ORDER BY VendorState, VendorCity; 


