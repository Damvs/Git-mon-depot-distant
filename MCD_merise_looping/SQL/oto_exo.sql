DROP DATABASE Oto IF EXISTS

CREATE DATABASE Oto CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

CREATE TABLE vehicule (
    veh_id INT AUTO_INCREMENT NOT NULL,
    veh_type VARCHAR (30) NOT NULL, --PARTICULIER OU UTILITAIRE
    veh_anciennete VARCHAR (30) NOT NULL, --NEUF OU OCCASION
    veh_libelle VARCHAR (50) NOT NULL,
    veh_reference VARCHAR (50) NOT NULL,
    veh_marque VARCHAR (50),
    PRIMARY KEY (veh_id)
);

CREATE TABLE commerciaux (
    com_id INT AUTO_INCREMENT NOT NULL,
    com_nom VARCHAR (30) NOT NULL,
    com_prenom VARCHAR (30) NOT NULL,
    com_role VARCHAR (30) NOT NULL, -- vendeur particulier ou pro
    PRIMARY KEY (com_id)
);

CREATE TABLE vente_vehicule (
    ven_id INT AUTO_INCREMENT NOT NULL,
    ven_type VARCHAR (20), --à credit ou comptant
    ven_com_id INT,
    ven_veh_id INT,
    PRIMARY KEY (ven_id),
    FOREIGN KEY (ven_com_id) REFERENCES commerciaux(com_id),
    FOREIGN KEY (ven_veh_id) REFERENCES vehicule(veh_id)
);

CREATE TABLE client (
    cli_id INT AUTO_INCREMENT NOT NULL,
    cli_nom VARCHAR (30) NOT NULL,
    cli_prenom VARCHAR (30),
    cli_adresse VARCHAR (100),
    cli_mail VARCHAR (50) NOT NULL,
    cli_phone VARCHAR (10),
    PRIMARY KEY (cli_id)
);

CREATE TABLE orders_vehicule (
    ord_id INT AUTO_INCREMENT NOT NULL,
    ord_date DATETIME NOT NULL,
    ord_cli_id INT,
    ord_ven_id INT,
    PRIMARY KEY (ord_id),
    FOREIGN KEY (ord_ven_id) REFERENCES vente_vehicule(ven_id),
    FOREIGN KEY (ord_cli_id) REFERENCES client(cli_id)
);

CREATE TABLE services (
    ser_id INT AUTO_INCREMENT NOT NULL,
    ser_libelle VARCHAR (50) NOT NULL,
    ser_type VARCHAR (50), --vente ou réparation/entretien
    PRIMARY KEY (ser_id)
);

CREATE TABLE reparation (
    rep_id INT AUTO_INCREMENT NOT NULL,
    rep_libelle VARCHAR (50) NOT NULL,
    rep_date DATETIME NOT NULL,
    rep_cli_id INT,
    PRIMARY KEY (rep_id),
    FOREIGN KEY (rep_cli_id) REFERENCES client(cli_id)
);

CREATE TABLE entretien (
    ent_id INT AUTO_INCREMENT NOT NULL,
    ent_libelle VARCHAR (50) NOT NULL,
    ent_date DATETIME NOT NULL,
    ent_cli_id INT,
    PRIMARY KEY (ent_id),
    FOREIGN KEY (ent_cli_id) REFERENCES client(cli_id)
);

CREATE TABLE product_option (
    opt_id INT AUTO_INCREMENT NOT NULL,
    opt_libelle VARCHAR (50) NOT NULL,
    opt_type VARCHAR (50),
    PRIMARY KEY (opt_id),
);

CREATE TABLE order_option ( --acc = accessoires
    acc_id INT AUTO_INCREMENT NOT NULL,
    acc_date DATETIME NOT NULL,
    acc_quantite INT NOT NULL,
    acc_opt_id INT,
    acc_cli_id INT,
    PRIMARY KEY (acc_id),
    FOREIGN KEY (acc_opt_id) REFERENCES product_option(opt_id)
    FOREIGN KEY (acc_cli_id) REFERENCES client(cli_id)
);