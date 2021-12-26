USE cis111_AP
/*
Homework for chapter 4
Query 2
Bob James
You can use your database name in the use statement
*/
SELECT VendorName, InvoiceID, Terms.TermsID
FROM Terms LEFT JOIN Invoices
 on Invoices.TermsID = Terms.TermsID
 LEFT JOIN Vendors
 ON Vendors.VendorID = Invoices.VendorID
WHERE Terms.TermsID is not NULL
AND InvoiceID is not NULL
AND left(Vendorname, 1) = 'D'
ORDER BY VendorName