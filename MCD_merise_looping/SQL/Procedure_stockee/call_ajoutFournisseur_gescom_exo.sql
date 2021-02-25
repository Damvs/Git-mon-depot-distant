DELIMITER |

CREATE PROCEDURE ajoutFournisseur(
    IN p_nom VARCHAR(50), 
    IN p_countries_id CHAR(2),  
    IN p_address VARCHAR(150),
    IN p_zipcode VARCHAR(5),  
    IN p_contact VARCHAR(100),  
    IN p_phone VARCHAR(10),  
    IN p_mail VARCHAR(75)
)

BEGIN
    DECLARE v_ville VARCHAR (50);
    SET v_ville = 'Amiens';   

    INSERT INTO suppliers(sup_name, sup_city, sup_countries_id, sup_address, sup_zipcode, sup_contact, sup_phone, sup_mail) VALUES (p_nom, v_ville, p_countries_id, p_address, p_zipcode, p_contact, p_phone, p_mail);
END |

DELIMITER ;

CALL ajoutFournisseur("Fournitou","FR","12 Rue des Tortolans","80000","Victor Tue","0666666666","tortolan.ocean@bfa.org")
