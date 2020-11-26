-- Quelles sont les commandes du fournisseur 09120?
SELECT numfou, numcom
FROM entcom
JOIN fournis
ON ent_numfou = numfou
WHERE numfou = "09120"

-- Afficher le code des fournisseurs pour lesquels des commandes ont été passées
SELECT numfou, datcom
FROM fournis
JOIN entcom
ON ent_numfou = numfou

--Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.
SELECT COUNT(numcom), COUNT(DISTINCT ent_numfou)
FROM entcom

-- Editer les produits ayant un stock inférieur ou égal au stock d'alerte et dont la quantité annuelle est inférieur est inférieure à1000 (informations à fournir : n° produit, libelléproduit, stock, stockactuel d'alerte, quantitéannuelle)
SELECT codart, libart, stkphy, stkale, qteann
FROM produit
WHERE stkphy<=stkale AND qteann < 1000

-- Quels sont les fournisseurs situés dans les départements 75 78 92 77 ? L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique
SELECT nomfou, posfou
FROM fournis
WHERE posfou LIKE "75%" 
OR posfou LIKE "78%" 
OR posfou LIKE "92%" 
OR posfou LIKE "77%"
ORDER BY posfou DESC, nomfou ASC

-- Quelles sont les commandes passées au mois de mars et avril?
SELECT numcom, MONTH (datcom)
FROM entcom
WHERE MONTH (datcom) = 3 OR MONTH (datcom) = 4

-- Quelles sont les commandes du jourqui ont des observations particulières ?(Affichage numéro de commande, date de commande)
SELECT numcom, datcom, obscom
FROM entcom
WHERE obscom NOT LIKE ""

-- Lister le total de chaque commande par total décroissant (Affichage numéro de commande et total)
SELECT numcom, qtecde*priuni
FROM ligcom
ORDER BY qtecde*priuni DESC

-- Lister les commandesdont le total est supérieur à 10000€; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.(Affichage numéro de commande et total)
SELECT numcom, qtecde*priuni
FROM ligcom
WHERE qtecde < 1000
GROUP BY numcom
ORDER BY qtecde*priuni DESC

-- Lister les commandes par nom fournisseur (Afficher le nom du fournisseur, le numéro de commande et la date)
SELECT nomfou, numcom, datcom
FROM entcom
INNER JOIN fournis
ON numfou = ent_numfou

-- Sortir les produits des commandes ayant le mot "urgent' en observation?(Afficher le numéro de commande, le nom du fournisseur, le libellé du produit et le sous total= quantité commandée * Prix unitaire)
SELECT ligcom.numcom, nomfou, libart, qtecde*priuni
FROM ligcom
JOIN produit
ON ligcom.codart = produit.codart  
JOIN entcom
ON ligcom.numcom = entcom.numcom
JOIN fournis
ON ent_numfou = numfou
WHERE obscom LIKE "%urgent%"
 

