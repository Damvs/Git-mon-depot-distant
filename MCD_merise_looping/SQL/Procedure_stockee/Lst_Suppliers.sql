DELIMITER $$

CREATE PROCEDURE Lst_Suppliers()
BEGIN
    SELECT suppliers.sup_name
    FROM suppliers
    JOIN products ON products.pro_sup_id = suppliers.sup_id
    JOIN orders_details AS ode ON ode.ode_pro_id = products.pro_id  
    WHERE ode_quantity IS NOT NULL
    GROUP BY suppliers.sup_name;
END $$

DELIMITER ;

-- CALL Lst_Suppliers()
