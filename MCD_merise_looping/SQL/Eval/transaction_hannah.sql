
UPDATE 
    employees 
SET 
    emp_pos_id = (
            SELECT 
                emp_pos_id 
            FROM 
                employees 
            WHERE 
                emp_lastname LIKE 'HANNAH' and emp_firstname LIKE "Amity"), emp_salary = emp_salary*1.05 
WHERE emp_id = (
            SELECT 
                emp_id  
            FROM 
                employees
            JOIN 
                posts ON emp_pos_id = pos_id 
            WHERE pos_libelle LIKE "Pépiniériste" ORDER BY `emp_enter_date` ASC LIMIT 1);

UPDATE
    employees
SET
    emp_pos_id =(
        SELECT
            emp_pos_id
        FROM
            employees
        WHERE
            emp_lastname LIKE 'HANNAH' AND emp_firstname LIKE "Amity")
    , emp_salary = emp_salary * 1.05
WHERE
    emp_id =(
    SELECT
        emp_id
    FROM
        `employees`
    JOIN posts ON `emp_pos_id` = pos_id
    WHERE
        pos_libelle LIKE "pépiniériste"
    ORDER BY
        `emp_enter_date` ASC LIMIT 1);