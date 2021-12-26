USE Cis111_AP
/* Name: Angela Matta
   Date: 10/2/21
   Homework for chapter 4: Query 1

*/

SELECT Ven.VendorID,VendorName,InvoiceID,InvoiceDate,InvoiceTotal

FROM Vendors AS Ven JOIN Invoices AS Inv

ON Ven.VendorID = Inv.VendorID 

WHERE InvoiceTotal > 20000














