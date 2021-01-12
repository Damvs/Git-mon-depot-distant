CREATE TABLE IF NOT EXISTS users (
    users_id int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Clé de la table utilisateur',
    users_nom varchar(50) NOT NULL COMMENT 'Nom de utilisateur',
    users_prenom varchar(50) NOT NULL COMMENT 'Prenom de utilisateur',
    users_mail varchar(100) NOT NULL UNIQUE COMMENT 'adresse mail de utilisateur',
    users_login varchar(50) NOT NULL UNIQUE COMMENT 'login de utilisateur',
    users_role varchar (50) NOT NULL COMMENT 'Role de utilisateur',
    users_motdepasse varchar(60) NOT NULL COMMENT 'mot de passe de utilisateur crypté',
    users_date_inscription datetime NOT NULL COMMENT 'date inscription utilisateur',
    users_derniere_connexion datetime DEFAULT NULL COMMENT 'dernière connexion de utilisateur',
    users_tentative int(10) DEFAULT 0  COMMENT 'Nombre de tentative de connexion de utilisateur',
  PRIMARY KEY (`users_id`));
