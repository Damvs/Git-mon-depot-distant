CREATE VIEW v_catalogue_produit
AS
SELECT pro_id, pro_ref, pro_name, pro_cat_id, cat_name 
FROM products
JOIN categories ON pro_cat_id = cat_id
