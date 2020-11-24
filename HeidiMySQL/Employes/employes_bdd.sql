drop database if exists employes;

create database employes;

use employes;

CREATE TABLE DEPART (
	NODEPT 		varchar(50) NOT NULL PRIMARY KEY,
	NOMDEPT 		varchar(50) NOT NULL,
	noregion 	varchar(50) NOT NULL
);

CREATE TABLE EMPLOYES(
	NOEMP  		int NOT NULL PRIMARY KEY,
	NOM 		varchar(50) NOT NULL,
	PRENOM 		varchar(50) NOT NULL,
	dateemb 	datetime NOT NULL,
	nosup 		varchar(50) NULL,
	titre 		varchar(50) NOT NULL,
	WDEPT 		varchar(50) NOT NULL REFERENCES DEPART(NODEPT),
	SALAIRE 	decimal(18, 0) NOT NULL,
	tauxcom 	decimal(18, 0) NULL
);

INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('10', 'finance', '1');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('20', 'atelier', '2');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('30', 'atelier', '3');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('31', 'vente', '1');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('32', 'vente', '2');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('33', 'vente', '3');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('34', 'vente', '4');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('35', 'vente', '5');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('41', 'distribution', '1');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('42', 'distribution', '2');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('43', 'distribution', '3');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('44', 'distribution', '4');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('45', 'distribution', '5');
INSERT INTO  DEPART  ( NODEPT ,  NOMDEPT ,  noregion ) VALUES ('50', 'administration', '1');

INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (1, 'patamob', 'adhémar', '20000326', NULL, 'président', '50', 50000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (2, 'zeublouse', 'agathe', '20000415', '1', 'dir.distrib', '41', 35000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (3, 'kuzbidon', 'alex', '20000505', '1', 'dir.vente', '31', 34000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (4, 'locale', 'anasthasie', '20000525', '1', 'dir.finance', '10', 36000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (5, 'teutmaronne', 'armand', '20000614', '1', 'dir.administratif', '50', 36000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (6, 'zoudanlkou', 'debbie', '20000704', '2', 'chef entrepot', '41', 25000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (7, 'rivenbusse', 'elsa', '20000724', '2', 'chef entrepot', '42', 24000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (8, 'ardelpic', 'helmut', '20000813', '2', 'chef entrepot', '43', 23000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (9, 'peursconla', 'humphrey', '20000902', '2', 'chef entrepot', '44', 22000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (10, 'vrante', 'helena', '20000922', '2', 'chef entrepot', '45', 21000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (11, 'melusine', 'enfaillite', '20001012', '3', 'représentant', '31', 25000, 10);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (12, 'eurktumeme', 'odile', '20001101', '3', 'représentant', '32', 26000, 12);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (13, 'hotdeugou', 'olaf', '20001121', '3', 'représentant', '33', 27000, 10);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (14, 'odlavieille', 'pacome', '20001211', '3', 'représentant', '34', 25000, 15);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (15, 'amartakaldire', 'quentin', '20001221', '3', 'représentant', '35', 23000, 17);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (16, 'traibien', 'samira', '20001231', '6', 'secrétaire', '41', 15000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (17, 'fonfec', 'sophie', '20010110', '6', 'secrétaire', '41', 14000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (18, 'fairent', 'teddy', '20010120', '7', 'secrétaire', '42', 13000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (19, 'blaireur', 'terry', '20010209', '7', 'secrétaire', '42', 13000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (20, 'ajerre', 'tex', '20010209', '8', 'secrétaire', '43', 13000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (21, 'chmonfisse', 'thierry', '20010219', '8', 'secrétaire', '43', 12000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (22, 'phototetedemort', 'thomas', '20010219', '9', 'secrétaire', '44', 22500, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (23, 'kaecoute', 'xavier', '20010301', '9', 'secrétaire', '34', 11500, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (24, 'adrouille-toutltan', 'yves', '20010311', '10', 'secrétaire', '45', 11000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (25, 'anchier', 'yvon', '20010321', '10', 'secrétaire', '45', 10000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (26, 'simone', 'yvon', '20010321', '10', 'secrétaire', '43', 20000, NULL);
INSERT INTO  EMPLOYES  ( NOEMP ,  NOM ,  PRENOM ,  dateemb ,  nosup ,  titre ,  WDEPT ,  SALAIRE ,  tauxcom ) VALUES (27, 'ada', 'yvon', '20010321', '10', 'secrétaire', '42', 15500, NULL);


 