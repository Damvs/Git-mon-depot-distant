CREATE VIEW v_Details
AS
SELECT products.pro_ref, SUM(orders_details.ode_quantity) as QtrTot, ROUND(SUM(orders_details.ode_quantity*(orders_details.ode_unit_price*(1-orders_details
.ode_discount*0.01))),2) as PrixTot
FROM orders_details
JOIN products ON products.pro_id = orders_details.ode_pro_id
GROUP BY products.pro_ref

CREATE VIEW v_Ventes_Zoom
AS
SELECT products.pro_ref, orders_details.* 
FROM orders_details
JOIN products ON products.pro_id = orders_details.ode_pro_id
WHERE products.pro_ref IN ('ZOOM')