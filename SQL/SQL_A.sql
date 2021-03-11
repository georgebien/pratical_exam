SELECT * FROM employees a INNER JOIN salary b ON b.id = a.salary_id
WHERE salary = (SELECT MAX(salary) highest_salary FROM salary)