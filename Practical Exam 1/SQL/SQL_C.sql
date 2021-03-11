-- QUERIED USING POSTGRESQL
-- SYNTAX MIGHT BE DIFFERENT IN OTHER SQL DATABASE

SELECT * FROM employees A LEFT JOIN departments B
ON B.id = A.department_id
WHERE B.department = 'IT' 
AND date_part('year', A.date_hired) = '2017'

