-- QUERIED USING POSTGRESQL
-- SYNTAX MIGHT BE DIFFERENT IN OTHER SQL DATABASE

SYNTAX MIGHT BE DIFFERENT IN OTHER SQL DATABASE
SELECT * FROM employees a INNER JOIN salary b ON b.id = a.salary_id
WHERE salary = (SELECT MAX(salary) highest_salary FROM salary)