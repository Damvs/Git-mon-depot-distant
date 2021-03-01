DELIMITER $$

CREATE TRIGGER after_products_update
AFTER UPDATE  
ON products
FOR EACH ROW 
BEGIN
    IF 3 < NEW.pro_stock AND NEW.pro_stock < NEW.pro_stock_alert THEN
        INSERT INTO commander_articles (qte,codart) VALUES ((NEW.pro_stock_alert - NEW.pro_stock),NEW.pro_id);
    ELSEIF NEW.pro_stock < 4 THEN
        UPDATE commander_articles SET qte = (NEW.pro_stock_alert - NEW.pro_stock) WHERE codart = NEW.pro_id;
    ELSEIF 4 < NEW.pro_stock THEN 
        DELETE FROM commander_articles WHERE codart = NEW.pro_id;
    END IF;
END;
$$

DELIMITER ;