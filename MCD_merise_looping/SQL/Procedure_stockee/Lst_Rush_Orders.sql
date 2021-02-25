DELIMITER $$

CREATE PROCEDURE Lst_Rush_Orders(IN p_status VARCHAR(25))
BEGIN
    SELECT orders.*
    FROM orders
    WHERE orders.ord_status = p_status;
END $$

DELIMITER ;

-- CALL Lst_Rush_Orders("Commande urgente")


-- DELIMITER $$

-- CREATE PROCEDURE Lst_Rush_Orders()
-- BEGIN
--     SELECT orders.*
--     FROM orders
--     WHERE orders.ord_status IN ("Commande Urgente")
-- END $$

-- DELIMITER ;

-- CALL Lst_Rush_Orders()