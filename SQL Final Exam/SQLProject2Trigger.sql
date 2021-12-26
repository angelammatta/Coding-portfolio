USE CIS111ProjectAM
GO

/* Step 3 Part A create a trigger */
IF OBJECT_ID('PayAM_INSERT_UPDATE') IS NOT NULL
 DROP TRIGGER PayAM_INSERT_UPDATE
GO

CREATE TRIGGER PayAM_INSERT_UPDATE
 ON Pay
 AFTER INSERT,UPDATE
AS
 IF EXISTS(SELECT LEFT([Pay Type],2),[Pay Schedule] FROM Pay 
 WHERE LEFT([Pay Type],2) <> '15' AND [Pay Schedule] <> 'monthly')
    
	BEGIN
	RAISERROR('Invalid value inserted, hourly employees are paid $15/hour', 11, 1)
    ROLLBACK TRAN
	END

GO