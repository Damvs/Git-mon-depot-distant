DELIMITER $$

CREATE PROCEDURE facture(IN p_order INT(10))

BEGIN
    SELECT ord_id, ord_order_date, ord_reception_date, cus_lastname, cus_firstname, cus_address, 
    cus_zipcode, cus_city, cou_name, ode_unit_price, ode_quantity, ode_discount, 
    ((ode_unit_price*ode_quantity)-ode_discount) as Prix_Total, pro_ref, pro_name, cat_name
    FROM countries
    JOIN customers ON cou_id = cus_countries_id    
    JOIN orders ON cus_id = ord_cus_id
    JOIN orders_details ON ode_ord_id = ord_id
    JOIN products ON ode_pro_id = pro_id
    JOIN categories ON pro_cat_id = cat_id
    WHERE ord_id = p_order;
    -- SELECT sho_name, sho_address, sho_zipcode, sho_city 
    -- FROM shops
    -- WHERE sho_id = 1;
END $$

DELIMITER ;

CALL facture(5)