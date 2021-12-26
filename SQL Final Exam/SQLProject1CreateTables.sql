
CREATE DATABASE CIS111ProjectAM
GO 


USE  CIS111ProjectAM

--ensuring that tables are not present, if present get rid of them and create new
--note about dropping tables, must drop in specific order for referential integrity/not wanting to deal with foreign key constraints.....

 IF OBJECT_ID('Order Details') IS NOT NULL
 DROP TABLE [Order Details]


 IF OBJECT_ID('Order') IS NOT NULL
 DROP TABLE [Order]

 
 IF OBJECT_ID('Employees') IS NOT NULL
 DROP TABLE Employees

 IF OBJECT_ID('Customer') IS NOT NULL
 DROP TABLE Customer

  IF OBJECT_ID('Store Location') IS NOT NULL
 DROP TABLE [Store Location]

 
 IF OBJECT_ID('Suppliers') IS NOT NULL
 DROP TABLE Suppliers


 IF OBJECT_ID('Pay') IS NOT NULL
 DROP TABLE Pay



 IF OBJECT_ID('Shipper') IS NOT NULL
 DROP TABLE Shipper



 --create new tables
 --note about creating tables, if primary key shows up as foreign key in another table, primary key must be made first, so code for that first
 
 CREATE TABLE [Store Location](
 
 [Store ID] INT NOT NULL IDENTITY PRIMARY KEY,
 [Store Name] varchar(24) NOT NULL,
 [Phone Number] varchar(24) NOT NULL,
 [Address] varchar(60) NOT NULL,
 [City] varchar(20) NOT NULL,
 [State] char(2) NOT NULL,
 Country INT NOT NULL
 )
 GO



 CREATE TABLE Customer (
 [Customer ID] INT  NOT NULL IDENTITY PRIMARY KEY,
 [Customer FName] varchar(10) NOT NULL,
 [Customer LName] varchar(20) NOT NULL,
 [Phone Number] varchar(24) NOT NULL,
 [Address] varchar(60) NOT NULL,
 [State] char(2) NOT NULL,
 [City] varchar(20) NOT NULL,
 [Country] INT NOT NULL,
 [Store ID] INT NOT NULL REFERENCES [Store Location]([Store ID])
 )

 GO


 CREATE TABLE Pay (
 
 [Pay ID] INT NOT NULL IDENTITY PRIMARY KEY,
 [Pay Type] varchar(20) NOT NULL,
 [Pay Schedule] varchar(20) NOT NULL,
 [Overtime Available] INT NOT NULL
 
 )

 GO 

 CREATE TABLE Employees(
[Employee ID] INT NOT NULL IDENTITY PRIMARY KEY,
[Employee FName] varchar(10) NOT NULL,
[Employee LName] varchar(20) NOT NULL,
[Employee Title] varchar(30) NOT NULL,
[Store ID] INT NOT NULL REFERENCES [Store Location]([Store ID]),
[Address] varchar(60) NOT NULL,
[City] varchar(20) NOT NULL,
[State] char(2) NOT NULL,
[Country] INT NOT NULL,
[Pay ID] INT NOT NULL REFERENCES Pay([Pay ID])
 )
 GO

 CREATE TABLE Suppliers(
 
 [Supplier ID] INT NOT NULL IDENTITY PRIMARY KEY,
 [Name] varchar(20) NOT NULL,
 [Address] varchar(60) NOT NULL,
 [City] varchar(20) NOT NULL,
 [State] char(2) NOT NULL,
 [Country] INT NOT NULL,
 [Phone Number] varchar(24) NOT NULL,
 [Contact FName] varchar(10) NOT NULL,
 [Contact LName] varchar(20) NOT NULL

 )
 GO

 CREATE TABLE Shipper(
 
 [Shipper ID] INT NOT NULL IDENTITY PRIMARY KEY,
 [Name] varchar(24) NOT NULL,
 [Phone Number] varchar(24) NOT NULL
 
 )
 GO

 CREATE TABLE [Order](
 [Order ID] INT NOT NULL IDENTITY PRIMARY KEY,
 [Order Date] DATE NOT NULL,
 [Ship Date] DATE NOT NULL,
 [Address] varchar(60) NOT NULL,
 [City] varchar(20) NOT NULL,
 [Country] INT NOT NULL,
 [Supplier ID] INT NOT NULL REFERENCES Suppliers([Supplier ID]),
 [Customer ID] INT NOT NULL REFERENCES Customer([Customer ID]),
 [Shipper ID] INT NOT NULL REFERENCES Shipper([Shipper ID]),
 [Postal Code] INT NOT NULL
 )
 GO

 CREATE TABLE [Order Details](
 
 [Unit Price] MONEY NOT NULL,
 [Quantity Ordered] SMALLINT NOT NULL,
 [Order Total] MONEY NOT NULL,
 [Order ID] INT NOT NULL REFERENCES [Order]([Order ID]),
 
 )

GO