-- LOT 1
-- 1) Afficher nom de l'hôtel et la ville
SELECT hot_nom, hot_ville FROM hotel

-- 2) Afficher nom, prénom, adresse du client
SELECT cli_nom, cli_prenom, cli_adresse, cli_ville FROM client
WHERE cli_nom = "White"

-- 3) Afficher nom de la stration et son altitude en dessous de 1000
SELECT sta_nom, sta_altitude FROM station
WHERE sta_altitude < 1000

-- 4) Afficher numéro des chambres et capacité au dessus de 1
SELECT cha_numero, cha_capacite FROM chambre
WHERE cha_capacite > 1

-- 5) Afficher nom client et ville n'habitant pas à Londre
SELECT cli_nom, cli_ville FROM client
WHERE cli_ville NOT IN ("Londre")

-- 6) Afficher la liste des hôtels située sur la ville de Bretou et possédant une catégorie>3
SELECT hot_nom, hot_ville, hot_categorie FROM hotel
WHERE hot_categorie > 3 AND hot_ville = "Bretou"

--LOT 2
-- 7) Afficher la liste des hôtels avec leur station
SELECT sta_nom, hot_nom, hot_categorie, hot_ville FROM hotel
INNER JOIN station
ON hot_sta_id = sta_id

-- 8) Afficher la liste des chambres et leur hôtel
SELECT hot_nom, hot_categorie, hot_ville, cha_numero FROM hotel
INNER JOIN chambre
ON cha_hot_id = hot_id

-- 9) Afficher la liste des chambres de plus d'une place dans des hôtels situés sur la ville de Bretou
SELECT hot_nom, hot_categorie, hot_ville, cha_numero, cha_capacite FROM hotel
INNER JOIN chambre
ON cha_hot_id = hot_id
WHERE hot_ville = "Bretou" AND cha_capacite > 1

-- 10) Afficher la liste des réservations avec le nom des clients
SELECT cli_nom, hot_nom, res_date 
FROM client
JOIN reservation
ON cli_id = res_cli_id 
JOIN chambre
ON res_cha_id = cha_id
JOIN hotel
ON cha_hot_id = hot_id

-- 11) Afficher la liste des chambres avec le nom de l’hôtel et le nom de la station
SELECT sta_nom, hot_nom, cha_numero, cha_capacite
FROM station
JOIN hotel
ON sta_id = hot_sta_id
JOIN chambre
ON hot_id = cha_hot_id

-- 12) Afficher les réservations avec le nom du client et le nom de l’hôtel
SELECT cli_nom, hot_nom, res_date_debut, DATEDIFF (res_date_fin, res_date_debut)
FROM client
JOIN reservation
ON cli_id = res_cli_id
JOIN chambre
ON res_cha_id = cha_id
JOIN hotel
ON cha_hot_id = hot_id

-- LOT 3
-- 13) Compter le nombre d’hôtel par station
SELECT COUNT(hot_id) FROM hotel
GROUP BY hot_sta_id

-- 14) Compter le nombre de chambre par station
SELECT COUNT(cha_id) FROM chambre
JOIN hotel
ON cha_hot_id = hot_id
JOIN station
ON hot_sta_id = sta_id
GROUP BY sta_id

-- 15) Compter le nombre de chambre par station ayant une capacité > 1
SELECT COUNT(cha_id) FROM chambre
JOIN hotel
ON cha_hot_id = hot_id
JOIN station
ON hot_sta_id = sta_id
WHERE cha_capacite > 1
GROUP BY sta_id

-- 16) Afficher la liste des hôtels pour lesquels Mr Squire a effectué une réservation
SELECT hot_nom, res_date
FROM hotel
JOIN chambre
ON hot_id = cha_hot_id
JOIN reservation
ON cha_id = res_cha_id
JOIN client 
ON res_cli_id = cli_id
WHERE cli_nom = "SQUIRE"

-- 17) Afficher la durée moyenne des réservations par station
SELECT sta_id, AVG(DATEDIFF(res_date_fin, res_date_debut))
FROM reservation
JOIN chambre
ON res_cha_id = cha_id
JOIN hotel
ON cha_hot_id = hot_id
JOIN station
ON hot_sta_id = sta_id
GROUP BY sta_id

-- Autre version
SELECT sta_id, AVG(DATEDIFF(res_date_fin, res_date_debut))
FROM station
JOIN hotel
ON hot_sta_id = sta_id
JOIN chambre
ON cha_hot_id = hot_id
JOIN reservation
ON res_cha_id = cha_id
GROUP BY sta_id