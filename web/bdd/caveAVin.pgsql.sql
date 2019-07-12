-- creation de la table origine(id_appellation,nom_appellation,region)

CREATE TABLE origine(
	id_appellation SERIAL PRIMARY KEY,
	nom_appellation VARCHAR(30) NOT NULL,
	region VARCHAR(30) NOT NULL
);

INSERT INTO origine(nom_appellation,region) VALUES
('Pauillac','Nouvelle Aquitaine'),
('Limoux','Occitane'),
('Bandol','Provence'),
('Reuilly','Vallée de Loire et Centre '),
('Chinon','Vallée de Loire et Centre'),
('Patrimonio','Corse'),
('Champagne','Champagne'),
('Côtes roussillon villages','Roussilon'),
('Muscat-de-rivesaltes','Roussilon'),
('Tavel','Vallée du Rhône'),
('Côtes-du-rhône-villages','Vallée du Rhône'),
('Crozes-hermitage','Vallée du Rhône'),
('Bugey','Savoie et Bugey'),
('Cremant-de-bourgogne','Bourgogne'),
('Beaune','Bourgogne'),
('Alsace Pinot gris','Alsace'),
('Alsace grand cru','Alsace'),
('Moselle','Lorraine'),
('Côtes de Troul','Lorraine')
;


-- creation de la table vin(id_vin, nom_vin, type_vin,#id_appellation)

CREATE TABLE vin(
	id_vin SERIAL PRIMARY KEY,
	nom_vin VARCHAR(30) NOT NULL,
	type_vin VARCHAR(15) CHECK(type_vin IN ('rouge','rose','blanc','moelleux','petillant')),
	id_appellation INT NOT NULL,
 	FOREIGN KEY(id_appellation) REFERENCES origine(id_appellation)
);

INSERT INTO vin(nom_vin,type_vin,id_appellation) VALUES
('Chateau-d''armailhac','rouge',1),
('Jourdan ET Pichard','rouge',5),
('Domaine de Vénus','rouge',8),
('Paul Gaschy','rouge',16),
('Château maucoil','rouge',11),
('Sangria','rouge',18),
('Leblanc','rouge',4),
('Sangria','rouge',19),
('La dorette','rose',4),
('Jean-Louis Denois','rose',2),
('La font des pères','rose',3),
('Pierre Boever','rose',7),
('Châteua de Segriés','rose',12),
('La Dentelle','rose',13),
('Eichberg Riesling','petillant',17),
('Paul Gaschy','petillant',16),
('Jean-Louis Denois','petillant',2),
('Laurent Habrard','moelleux',10),
('Paul Gaschy','moelleux',16),
('Labrak','moelleux',18),
('Anthec','blanc',2),
('Chateau-d''armailhac','blanc',1),
('Orenga de gaffory','blanc',6),
('Camiat et Fils','blanc',7),
('Domaine val de ray','blanc',9),
('Fichet','blanc',14),
('Cauvard','blanc',15),
('Paul Gaschy','blanc',16),
('Eichberg Riesling','blanc',17),
('L''Informaticien','blanc',19),
('Sangria','blanc',19)
;




-- cretaion de la table bouteille(#id_vin, millesime, prix, quantite, note, date_note)

CREATE TABLE bouteille(
	id_vin INT NOT NULL,
	millesime INT CHECK (millesime>0 AND millesime <=2018),
	prix FLOAT CHECK (prix>=0),
	quantite INT NOT NULL CHECK (quantite>=0),
	note INT CHECK (note>=0 AND note<=5),
	date_note DATE CHECK (date_note < CURRENT_DATE),
 	FOREIGN KEY(id_vin) REFERENCES vin(id_vin),
	PRIMARY KEY(id_vin,millesime)
);

------------------------------COMMANDE ALTER------------------------------
ALTER TABLE bouteille DROP COLUMN quantite;
ALTER TABLE bouteille DROP COLUMN note;
ALTER TABLE bouteille ADD note INT CHECK (note>=0 AND note<=5);
ALTER TABLE bouteille ADD quantite INT NOT NULL CHECK (quantite>=0);
--------------------------------------------------------------------------

INSERT INTO bouteille(id_vin,millesime,prix,quantite,note,date_note) VALUES
(1  ,2013   ,18.5    ,2   ,4,'2016-06-19'),
(2  ,2018   ,6       ,3   ,2,'2018-08-28'),
(3  ,2003   ,38.59   ,7   ,4,'2008-02-08'),
(4  ,2008   ,50      ,1   ,0,NULL),
(5  ,2009   ,28.9    ,0   ,3,'2017-10-01'),
(6  ,2008   ,12.0    ,0   ,2,'2010-08-02'),
(7  ,2016   ,6.0     ,3   ,0,NULL),
(8  ,2014   ,19.46   ,1   ,0,NULL),
(9  ,1998   ,108.99  ,4   ,4,'2018-03-15'),
(10 ,1700   ,3700.5  ,3   ,0,NULL),
(10 ,2014   ,57.721  ,3   ,4,'2015-03-15'),
(11 ,2001   ,74.0    ,1   ,3,'2009-03-28'),
(12 ,2001   ,46      ,24  ,5,'2012-11-20'),
(13 ,2006   ,36      ,10  ,4,'2011-12-24'),
(14 ,2016   ,18.79   ,17  ,5,'2017-12-26'),
(15 ,1999   ,107.5   ,1   ,4,'2016-08-02'),
(15 ,2014   ,7.5   	 ,3   ,4,'2016-08-02'),
(16 ,2000   ,78.46   ,2   ,4,'2004-01-08'),
(17 ,2017   ,9.78    ,3   ,3,'2018-03-08'),
(18 ,2018   ,4.0     ,4   ,0,NULL),
(19 ,2016   ,17.45   ,3   ,3,'2017-06-08'),
(20 ,2015   ,23.4    ,0   ,1,'2018-08-28'),
(21 ,2014   ,35.4    ,2   ,0,NULL),
(22 ,2014   ,48.5    ,3   ,4,'2015-09-14'),
(23 ,2015   ,11.4    ,0   ,1,'2017-05-08'),
(24 ,2015   ,13.78   ,20  ,5,'2017-06-01'),
(25 ,2018   ,4.126   ,0   ,1,'2018-07-21'),
(26 ,2002   ,68.2    ,7   ,2,'2015-07-30'),
(27 ,2010   ,27.8    ,9   ,0,NULL),
(28 ,2011   ,24.4    ,1   ,0,NULL),
(29 ,2010   ,39.48   ,2   ,4,'2010-12-25'),
(30 ,1960   ,3000    ,2   ,3,'1998-12-31'),
(30 ,2016   ,250     ,5   ,3,'2018-10-31'),
(31 ,2016   ,4   		 ,8   ,4,'2017-12-25'),
(31 ,980    ,37506   ,1   ,0,NULL)
;
