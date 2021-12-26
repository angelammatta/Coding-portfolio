USE CIS111_NorthWind
/* Name: Angela Matta
   Date: 10/2/21
   Homework for chapter 4: Query 3

*/

SELECT Employees.FirstName,Employees.LastName,Territories.TerritoryDescription,
       Orders.OrderDate,Products.ProductName,Region.RegionDescription,Suppliers.CompanyName AS [Supplying Company], 
       Customers.Country, Shippers.Phone 

	   /*connect Employee to Order via EmployeeID*/
	   /*Order to customer via customerID*/
	   /*Order to shipper via shipvia/ShipperID*/
       /*Orderdetails to order via order Id*/
	   /*Orderdetails to products via product ID*/ 
       /*suppliers and products via supplier ID*/
	   /*employees to employeeterritory via employee id */
	   /*employeeterritoy to territories by territory id*/
       /*connect region and territories by regionID*/
	  

FROM Employees JOIN Orders
ON Employees.EmployeeID = Orders.EmployeeID

   JOIN Customers
  ON Orders.CustomerID = Customers.CustomerID

   JOIN Shippers
  ON Orders.ShipVia = Shippers.ShipperID

 
   JOIN [Order Details] 
  ON [Order Details].OrderID = Orders.OrderID

   JOIN Products
  ON Products.ProductID = [Order Details].ProductID


   JOIN Suppliers
  ON Suppliers.SupplierID = Products.SupplierID


   JOIN EmployeeTerritories 
  ON Employees.EmployeeID = EmployeeTerritories.EmployeeID

   JOIN Territories
  ON EmployeeTerritories.TerritoryID = Territories.TerritoryID

  JOIN Region
  ON Region.RegionID = Territories.RegionID



  WHERE Customers.Country = 'Ireland' AND Region.RegionDescription = 'Western' AND (Products.ProductName = 'Boston Crab Meat' OR Products.ProductName = 'Lakkalikööri')


  ORDER BY TerritoryDescription
 





