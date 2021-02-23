-- 1
CREATE VIEW v_hotelsnoms_stationsnoms  
AS 
SELECT hotel.hot_nom, station.sta_nom 
FROM hotel 
JOIN station ON hotel.hot_sta_id = station.sta_id 
ORDER BY hot_nom ASC ;

-- 2
CREATE VIEW v_chambresnum_hotelsnoms  
AS 
SELECT chambre.cha_numero, hotel.hot_nom 
FROM hotel 
JOIN chambre ON hotel.hot_id = chambre.cha_hot_id 
ORDER BY chambre.cha_numero ASC ;

-- 3
CREATE VIEW v_reserv_clientsnoms  
AS 
SELECT reservation.res_date, client.cli_nom 
FROM reservation 
JOIN client ON client.cli_id = reservation.res_cli_id 
ORDER BY reservation.res_date ASC ;


-- 4
CREATE VIEW v_chambresnum_hotelsnoms_stationsnoms  
AS 
SELECT chambre.cha_numero, hotel.hot_nom, station.sta_nom 
FROM hotel 
JOIN chambre ON hotel.hot_id = chambre.cha_hot_id 
JOIN station ON station.sta_id = hotel.hot_sta_id 
ORDER BY chambre.cha_numero ASC;

-- 5
CREATE VIEW v_reserv_clientsnoms_hotelsnoms 
AS 
SELECT res_date, cli_nom, hot_nom 
FROM reservation 
JOIN client ON cli_id = res_cli_id 
JOIN chambre ON res_cha_id=cha_id 
JOIN hotel ON cha_hot_id=hot_id 
ORDER BY res_date
