DROP DATABASE IF EXISTS hotel_eval;

CREATE DATABASE hotel_eval;

USE hotel_eval;

CREATE TABLE client (
    cli_num INT NOT NULL PRIMARY KEY,
    cli_nom VARCHAR (50) NOT NULL,
    cli_adresse VARCHAR (50) NOT NULL,
    cli_tel VARCHAR (30) NOT NULL
);

CREATE TABLE produit (
    pro_num INT NOT NULL PRIMARY KEY,
    pro_libelle VARCHAR (50) NOT NULL,
    pro_description VARCHAR (50)
);

CREATE TABLE commande (
    com_num INT NOT NULL PRIMARY KEY,
    com_cli_num INT NOT NULL,
    com_date DATETIME NOT NULL,
    com_obs VARCHAR (50) DEFAULT NULL,
    FOREIGN KEY (com_cli_num) REFERENCES client (cli_num)
);

CREATE TABLE est_compose (
    est_com_num INT NOT NULL,
    est_pro_num INT NOT NULL,
    est_qte INT NOT NULL,
    PRIMARY KEY (est_com_num, est_pro_num),
    INDEX est_pro_num (est_pro_num),
	INDEX est_com_num (est_com_num),
    FOREIGN KEY (est_com_num) REFERENCES commande (com_num),
    FOREIGN KEY (est_pro_num) REFERENCES produit (pro_num)
);

CREATE INDEX cli_nom ON client(cli_nom);

