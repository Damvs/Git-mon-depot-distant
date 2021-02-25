DELIMITER $$

DROP PROCEDURE IF EXISTS verifClient $$

CREATE PROCEDURE verifClient(IN p_nom VARCHAR(50), 
                                IN p_prenom VARCHAR(50), 
                                IN p_adresse VARCHAR(150),
                                IN p_cp VARCHAR(5),
                                IN p_ville VARCHAR(50),
                                IN p_countries_id CHAR(2),
                                IN p_mail VARCHAR(255),
                                IN p_phone VARCHAR(10), 
                                IN p_password VARCHAR (60)
                                )  

BEGIN

    -- On déclare une variable p_existe qui stockera le résultat d'une requête 
    DECLARE p_existe varchar(50); 

    SET p_existe = (SELECT p_nom 
                    FROM customers 
                    WHERE cus_lastname = p_nom 
                    AND cus_firstname = p_prenom 
                    AND cus_address = p_adresse 
                    AND cus_zipcode = p_cp 
                    AND cus_city = p_ville 
                    AND cus_countries_id = p_countries_id 
                    AND cus_mail = p_mail
                    AND cus_phone = p_phone
                    AND cus_password = p_password  
                    );

    IF ISNULL(p_existe) 
    THEN
        -- la variable p_existe vaut NULL, le client n'existe pas en base
        -- on peut l'ajouter 
        INSERT INTO customers (cus_lastname, cus_firstname, cus_address, cus_zipcode, cus_city,  cus_countries_id, cus_mail, cus_phone, cus_password, cus_add_date) VALUES (p_nom, p_prenom, p_adresse, p_cp, p_ville, p_countries_id, p_mail, p_phone, p_password, NOW() );
    ELSE
        -- la variable p_existe n'est pas NULL, donc le client existe déjà en base
        -- on lève une erreur personNalisée avec l'instruction SIGNAL SQLSTATE (code 45000)           
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Le client existe déjà';
    END IF;
END $$

DELIMITER ;

-- CALL verifClient('Despates', 'Ondine', '47 avenue Patrick Sébastien', '59280', 'Armentières', 'FR', 'o.despates@barilla.fr', '0102030405', 'az3rty');
