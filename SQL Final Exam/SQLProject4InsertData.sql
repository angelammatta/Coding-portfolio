USE CIS111ProjectAM


INSERT INTO Shipper
([Name],[Phone Number])
VALUES('Classic Shippers','(313)123-4567'),
('Express Shippers','(247)123-4567')


USE CIS111ProjectAM

INSERT INTO [Store Location]
([Store Name],[Phone Number],[Address],[City],[State],[Country])

VALUES('Generic Gourmet Store','(432)123-4567','2345 Peppermint Lane','Royal Oaks','MI',001),
('Upscale Gourmet Store',  '(567)456-789','4567 Snickerdoodle Drive','Atlanta','GA',001)


USE CIS111ProjectAM

INSERT INTO Pay
([Pay Type],[Pay Schedule],[Overtime Available])
VALUES('15/hour','hourly',1),
('100K/year','monthly',0)


USE CIS111ProjectAM

INSERT INTO Employees

([Employee FName],[Employee LName],[Employee Title],[Store ID],[Address],[City],[State],[Country],[Pay ID])

VALUES
--owner at store ID 1
('Aretha','Shamil','Owner',1,'853 Foxrun Drive','Fort Mitchell','KY',001,2),

--branch manager at store ID 1 
('Dalia','Ernst','Branch Manager',1,'276 East Miles Street','Huntington','NY',001,2),

--branch manager at store ID 2
('Laura','Bolek','Branch Manager',2,'952 Albany Drive','Muscatine','IA',001,2),

--cashier 1 and 2 at store ID 1
('Austin','Valentine','Cashier',1,'8433 West High Ridge Street','Apex','NC',001,1),
('Ruth','Celeste','Cashier',1,'631 Ocean Avenue','Natchez','MS',001,1),

--cashier 3 and 4 at store ID 2 
('Serge','Zita','Cashier',2,'506 Sugar Street','Manitowoc','WI',001,1),
('Raleigh','Danita','Cashier',2,'84 Shirley Avenue','Fond Du Lac','WI',001,1),

--chef 1 at store ID 1
('Richard','Yua','Chef',1,'137 East Bow Ridge Street','Abingdon','MD',001,1),

--chef 2 at store ID 2
('Randy','Antanina','Chef',2,'837 St Margarets Road','Clinton','MD',001,1),

--stock personnel 1 and 2 at store ID 1
('Ian','Arek','Stock Personnel',1,'610 Lincoln Street','Springfield Gardens','NY',001,1),
('Gil','Stanislav','Stock Personnel',1,'28 Paris Hill Drive','Brownsburg','IN',001,1),

--stock personnel 3 and 4 at store ID 2
('Adele','Julia','Stock Personnel',2,'91 Gartner Court','Scotch Plains','NJ',001,1),
('Amin','Anisa','Stock Personnel',2,'599 Halifax Street','Sulphur','LA',001,1),

--admin assistant 1 at store ID 1
('Rosalina','Blondie','Administrator Assistant',1,'560 Fairfield Street','Pembroke Pines','FL',001,1),

--admin assistant 2 at store ID 2
('Robin','Ivo','Administrator Assistant',2,'115 Adams Street','Philadelphia','PA',001,1)

USE CIS111ProjectAM

INSERT INTO Suppliers
([Name],[Address],[City],[State],[Country],[Phone Number],[Contact FName],[Contact LName])

VALUES('Chocolate Catalyst','3455 Chocolate Bonanza Street','Newark','NJ',001,'(973)134-2345','Silvester','Anastasia'),
('Candypalooza','7543 Candyland Court','Chula Vista','CA',001,'(619)345-5643','Paul','Cleto'),
('Taffy Towers','3462 Taffy Pulling Row','Garland','TX',001,'(469)251-2354','Gena','Zeno'),
('Cake Cafes','4567 Icing Topping Way','Honolulu','HI',001,'(808)341-3456','Lievin','Henriette'),
('Pie Powers','4324 Ice Cream Lane','Cincinnati','OH',001,'(513)125-2345','Ritu','Halda'),
('Tart Tilters','4562 Lollipop Punch Powers Lane','Aurora','CO',001,'(720)234-3451','Norah','Tertia')


USE CIS111ProjectAM

INSERT INTO Customer
([Customer FName],[Customer LName],[Phone Number],[Address],[State],[City],[Country],[Store ID])
VALUES
--customer 1
('Kristopher','Weiss','(818)234-125','8319 Pumpkin Hill Lane','FL','Saint Petersburg',001,1),

--customer 2
('Marissa','Heath','(345)123-345','744 Bald Hill Drive','NJ','West Deptford',001,1),

--customer 3
('Celeste','Morales','(342)232-4134','49 Princeton Street','IL','Park Ridge',001,1),

--customer 4
('Tashan','Clay','(345)232-3562','47 Ohio Drive','TN','Chattanooga',001,1),

--customer 5
('Ronny','Barrow','(234)354-2253','350 Miles Drive','TN','Mcminnville',001,1),

--customer 6
('Colette','Farmer','(256)345-8925','191 Devon Avenue','OH','Mentor',001,2),

--customer 7
('Halima','Todd','(515)342-6925','7470 Adams Court','OH','Alliance',001,2),

--customer 8
('Willow','Blanchard','(513)251-3481','486 Greenview Street','NY','Coram',001,2),

--customer 9 
('Yusuf','Houghton','(452)435-3492','652 Talbot Street','MI','Clinton Township',001,2),

--customer 10
('Aran','Mcmanus','(345)652-3458','562 East University Avenue','TX','Richardson',001,2)


USE CIS111ProjectAM

INSERT INTO [Order]
([Order Date],[Ship Date],[Address],[City],[Country],[Supplier ID],[Customer ID],[Shipper ID],[Postal Code])

VALUES

--customer 1 orders
('2018-02-04','2018-02-19','615 W Carr Avenue','El Dorado',001,1,1,2,67042),
('2019-06-26','2019-07-05','615 W Carr Avenue','El Dorado',001,4,1,1,67042),
('2020-02-28','2020-03-06','615 W Carr Avenue','El Dorado',001,6,1,1,67042),

--customer 2 orders
('2018-03-15','2018-03-18','1285 Lakehall Road','Lake Village',001,2,2,2,71653),
('2019-09-11','2019-09-16','1285 Lakehall Road','Lake Village',001,5,2,1,71653),

--customer 3 orders
('2018-04-12','2018-04-25','1206 Feather Drive','Deltona',001,3,3,1,32738),

--customer 4 orders 
('2020-04-03','2020-04-10','2529 West Broadmoore Drive','Hayden',001,5,4,2,83835),
('2019-11-24','2019-11-29','2529 West Broadmoore Drive','Hayden',001,2,4,1,83835),

--customer 5 orders 
('2020-06-04','2020-06-15','25 Ballardvale Road','Andover',001,1,5,2,05501),
('2018-05-08','2018-05-18','25 Ballardvale Road','Andover',001,4,5,2,05501),
('2021-01-27','2021-02-06','25 Ballardvale Road','Andover',001,3,5,1,05501),
('2019-12-06','2019-12-19','25 Ballardvale Road','Andover',001,6,5,1,05501),
('2021-06-11','2021-06-20','25 Ballardvale Road','Andover',001,5,5,2,05501),

--customer 6 orders 
('2021-04-30','2021-05-07','173 Wilson Street','Beverly',001,6,6,1,45717),
('2020-06-18','2020-06-22','173 Wilson Street','Beverly',001,4,6,2,45717),

--customer 7 orders
('2018-05-29','2018-06-05','14340 Mount Cross Road','Dry Fork',001,2,7,1,24549),

--customer 8 orders
('2019-12-11','2019-12-19','929 Nicely Avenue','Montoursville',001,4,8,2,17754),
('2020-08-23','2020-09-07','929 Nicely Avenue','Montoursville',001,2,8,1,17754),

--customer 9 orders 
('2021-05-22','2021-05-30','1320 South Nebraska Avenue','San Juan',001,5,9,1,78589),
('2018-09-15','2018-09-24','1320 South Nebraska Avenue','San Juan',001,2,9,2,78589),
('2020-07-05','2020-07-15','1320 South Nebraska Avenue','San Juan',001,1,9,1,78589),

--customer 10 orders
('2018-09-29','2018-10-07','18215 Winsome Road','Fraser',001,6,10,1,48026)

USE CIS111ProjectAM
INSERT INTO [Order Details]

([Unit Price],[Quantity Ordered],[Order Total],[Order ID])

VALUES

--customer 1 order

(20.30,15,304.50,1),
(69.50,20,1390,1),
(13.00,5,65,1),

--customer 2 order

(42,15,630,2),
(86,5,430,2),


--customer 3 order

(59,6,354,3),

--customer 4 order

(5,10,50,4),
(62,5,310,4),

--customer 5 order

(8,12,96,5),
(42,10,420,5),
(9,6,54,5),
(28,2,56,5),
(32,6,192,5),

--customer 6 order

(55,5,275,6),
(19,3,57,6),


--customer 7 order

(68,8,544,7),


--customer 8 order

(48,5,240,8),
(12,16,192,8),


--customer 9 order

(27,5,135,9),
(28,4,112,9),
(34,10,340,9),

--customer 10 order

(28,3,84,10)