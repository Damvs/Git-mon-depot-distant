INSERT INTO posts (pos_libelle) VALUES ("Retraité")

START TRANSACTION;
SET @posid = (SELECT emp_pos_id FROM employees WHERE emp_lastname LIKE 'HANNAH' and emp_firstname LIKE "Amity");
UPDATE 
    employees 
SET 
    emp_pos_id = @posid, 
    emp_salary = emp_salary*1.05 
WHERE emp_id = (
            SELECT 
                emp_id  
            FROM 
                employees
            JOIN 
                posts ON emp_pos_id = pos_id 
            WHERE pos_libelle LIKE "Pépiniériste" ORDER BY `emp_enter_date` ASC LIMIT 1);

UPDATE 
    employees as emp
SET 
    emp_pos_id = (SELECT pos_id FROM posts WHERE pos_libelle LIKE "Retraité") 
WHERE emp_pos_id = @posid;


-- UPDATE
--     employees
--     SET
--     emp_pos_id =(
--         SELECT
--             emp_pos_id
--         FROM
--             employees
--         WHERE
--             emp_lastname LIKE 'HANNAH' AND emp_firstname LIKE "Amity")
--     , emp_salary = emp_salary * 1.05
--     WHERE
--     emp_id =(
--     SELECT
--         emp_id
--     FROM
--         `employees`
--     JOIN posts ON `emp_pos_id` = pos_id
--     WHERE
--         pos_libelle LIKE "pépiniériste"
--     ORDER BY
--         `emp_enter_date` ASC LIMIT 1);