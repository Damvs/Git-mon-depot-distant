DROP DATABASE IF EXISTS HotelDB;

CREATE DATABASE HotelDB;

USE HotelDB;

CREATE TABLE Station (
    sta_num INT NOT NULL, 
    sta_nom VARCHAR (50) NOT NULL
    ,CONSTRAINT Station_PK PRIMARY KEY (sta_num)
);

CREATE TABLE Hotel (
    hot_capacite INT NOT NULL,
    hot_categorie VARCHAR (50) NOT NULL,
    hot_nom VARCHAR (50) NOT NULL,
    hot_num INT NOT NULL,
    sta_num INT NOT NULL
    ,CONSTRAINT Hotel_PK PRIMARY KEY (hot_num)
    ,CONSTRAINT Hotel_Station_FK FOREIGN KEY (sta_num) REFERENCES Station (sta_num)
);

CREATE TABLE Chambre (
    cha_capacite INT NOT NULL,
    cha_degre_confort VARCHAR (50) NOT NULL,
    cha_exposition VARCHAR (50) NOT NULL,
    cha_type VARCHAR (50) NOT NULL,
    cha_num INT NOT NULL,
    hot_num INT NOT NULL
    ,CONSTRAINT Chambre_PK PRIMARY KEY (cha_num)
    ,CONSTRAINT Chambre_Hotel_FK FOREIGN KEY (hot_num) REFERENCES Hotel (hot_num)
);

CREATE TABLE Client (
    cli_num INT NOT NULL,
    cli_nom VARCHAR (50) NOT NULL,
    cli_prenom VARCHAR (50) NOT NULL,
    cli_adresse VARCHAR (50) NOT NULL
    ,CONSTRAINT Client_PK PRIMARY KEY (cli_num)
);

CREATE TABLE Reservation (
    res_date DATE NOT NULL,
    res_date_debut DATETIME NOT NULL,
    res_date_fin DATETIME NOT NULL,
    res_montant_arrhes FLOAT NOT NULL,
    res_prix_total FLOAT NOT NULL,
    cha_num INT NOT NULL,
    cli_num INT NOT NULL
    ,CONSTRAINT Reservation_Chambre_FK FOREIGN KEY (cha_num) REFERENCES Chambre (cha_num)
    ,CONSTRAINT Reservation_Client_FK FOREIGN KEY (cli_num) REFERENCES Client (cli_num)
);

CREATE USER 'util1'@'%' IDENTIFIED BY 'mdp1';
CREATE USER 'util2'@'%' IDENTIFIED BY 'mdp2';
CREATE USER 'util3'@'%' IDENTIFIED BY 'mdp3';

GRANT ALL PRIVILEGES ON hotel TO 'util1'@'%' IDENTIFIED BY 'mdp1';
GRANT SELECT ON hotel TO 'util2'@'%' IDENTIFIED BY 'mdp2';
GRANT SELECT ON hotel.Station TO 'util3'@'%' IDENTIFIED BY 'mdp3';

--DROP USER 'util1'@'%';
--DROP USER 'util2'@'%';
--DROP USER 'util3'@'%';