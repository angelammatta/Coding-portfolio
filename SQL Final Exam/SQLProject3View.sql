USE CIS111ProjectAM

GO

IF OBJECT_ID('PurchaseHistory') IS NOT NULL
DROP VIEW PurchaseHistory 

GO

CREATE VIEW PurchaseHistory

AS

SELECT Customer.[Customer ID],Customer.[Customer FName],Customer.[Customer LName],[Order].[Order Date],
[Order].[Ship Date],[Order].[Supplier ID],[Order].[Shipper ID]

FROM Customer  LEFT JOIN [Order] ON Customer.[Customer ID] = [Order].[Customer ID];




