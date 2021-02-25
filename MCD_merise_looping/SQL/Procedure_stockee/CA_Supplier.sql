
DELIMITER $$

CREATE PROCEDURE CA_Supplier(IN p_id int(10),
                            IN p_year VARCHAR(4)
)

BEGIN
    SELECT sup_name, ROUND(SUM(orders_details.ode_quantity*(orders_details.ode_unit_price*(1-orders_details.ode_discount*0.01))),2) as CA
    FROM orders
    JOIN orders_details ON orders.ord_id = orders_details.ode_ord_id
    JOIN products ON products.pro_id = orders_details.ode_pro_id
    JOIN suppliers ON products.pro_sup_id = suppliers.sup_id
    WHERE orders.ord_payment_date LIKE CONCAT(p_year,"%")
    AND sup_id = p_id
    GROUP BY sup_name;
END $$

DELIMITER ;

-- CALL CA_Supplier(3,2016)