DELIMITER $$

CREATE TRIGGER maj_total 
AFTER INSERT ON lignedecommande
FOR EACH ROW
BEGIN
    DECLARE id_c INT;
    DECLARE tot DOUBLE;
    SET id_c = NEW.id_commande; -- nous captons le numéro de commande concerné
    SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcul le total
    UPDATE commande SET total=tot-commande.remise WHERE id=id_c; -- on stock le total dans la table commande
END;
$$

DELIMITER ;

DELIMITER $$
CREATE TRIGGER maj_delete_total
AFTER DELETE ON lignedecommande
FOR EACH ROW
BEGIN
    DELETE FROM commande
    WHERE id_commande=old.id_commande;
END;
$$

DELIMITER ;

DELIMITER $$
CREATE TRIGGER maj_update_total
AFTER UPDATE ON lignedecommande
FOR EACH ROW
BEGIN
    DECLARE id_c INT;
    DECLARE tot DOUBLE;
    SET id_c = NEW.id_commande; 
    SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
    UPDATE commande SET total=tot-commande.remise WHERE id=id_c;
END;
$$

DELIMITER ;