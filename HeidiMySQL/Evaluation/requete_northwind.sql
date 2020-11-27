-- 1 - Liste des contacts français :
SELECT CompanyName as Société, ContactName as contact, ContactTitle as Fonction, Phone as Téléphone
FROM customers
WHERE Country = "France"

-- 2 - Produits vendus par le fournisseur « Exotic Liquids » :
SELECT ProductName as Produit, UnitPrice as Prix
FROM products
JOIN suppliers
ON products.SupplierID = suppliers.SupplierID
WHERE CompanyName = "Exotic liquids"

-- 3 - Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :
SELECT CompanyName as Fournisseur, COUNT(ProductID) AS "Nbre produits"
FROM products
JOIN suppliers
ON products.SupplierID = suppliers.SupplierID
WHERE Country = "France"
GROUP BY CompanyName
ORDER BY Count(ProductID) DESC

-- 4 - Liste des clients Français ayant plus de 10 commandes :
SELECT CompanyName as Client, COUNT(OrderID) as "Nbre commandes"
FROM customers
JOIN orders
ON customers.CustomerID = orders.CustomerID
WHERE Country = "France"
GROUP BY CompanyName
HAVING COUNT(OrderID) > 10

-- 5 - Liste des clients ayant un chiffre d’affaires > 30.000 :
SELECT CompanyName as Client, SUM(Quantity*UnitPrice) as CA, customers.Country AS Pays
FROM customers 
JOIN orders
ON customers.CustomerID = orders.CustomerID
JOIN `order details` AS orderdetails
ON orders.OrderID = orderdetails.OrderID
GROUP BY CompanyName, Country
HAVING SUM(Quantity*UnitPrice) > 30000
ORDER BY SUM(Quantity*UnitPrice) DESC

-- 6 – Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids »
SELECT customers.Country as Pays
FROM customers
JOIN orders
ON customers.CustomerID = orders.CustomerID
JOIN `order details` AS orderdetails
ON orders.OrderID = orderdetails.OrderID
JOIN products
ON orderdetails.ProductID = products.ProductID
JOIN suppliers
ON products.SupplierID = suppliers.SupplierID
WHERE suppliers.CompanyName = "Exotic Liquids"
GROUP BY customers.Country
ORDER BY customers.Country ASC

-- 7 – Montant des ventes de 1997 :
SELECT SUM(Quantity*UnitPrice)
FROM orders
JOIN `order details` AS orderdetails
ON orders.OrderID = orderdetails.OrderID
WHERE YEAR(orderdate) = 1997

-- 8 – Montant des ventes de 1997 mois par mois :
SELECT SUM(Quantity*UnitPrice)
FROM orders
JOIN `order details` AS orderdetails
ON orders.OrderID = orderdetails.OrderID
WHERE YEAR(orderdate) = 1997
GROUP BY MONTH(orderdate)

-- 9 – Depuis quelle date le client « Du monde entier » n’a plus commandé ?
SELECT MAX(orderdate) as "Date de dernière commande"
FROM orders 
JOIN customers
ON orders.CustomerID = customers.CustomerID
WHERE CompanyName = "Du monde entier"

-- 10 – Quel est le délai moyen de livraison en jours ?
SELECT ROUND(AVG(DATEDIFF(ShippedDate, OrderDate)),0) AS "Délai moyen de livraison en jours"
FROM orders
