CREATE TABLE departments (
    id INT PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    department_id INT,
    salary DECIMAL(10, 2),
    FOREIGN KEY (department_id) REFERENCES departments(id)
);

CREATE TABLE projects (
    id INT PRIMARY KEY,
    title VARCHAR(100)
);

CREATE TABLE employee_project (
    employee_id INT,
    project_id INT,
    PRIMARY KEY (employee_id, project_id),
    FOREIGN KEY (employee_id) REFERENCES employees(id),
    FOREIGN KEY (project_id) REFERENCES projects(id)
);

-- ✅ Requêtes :

-- Liste des employés avec leur département
SELECT e.name , d.name  FROM employees e
JOIN departments d ON e.department_id = d.id;

-- Tous les employés, même sans département
SELECT e.name , 
case 
    when  d.name is NULL then "Aucun département"
    else d.name
end
  FROM employees e
LEFT JOIN departments d ON e.department_id = d.id;

-- Liste des projets avec leurs membres
SELECT E.name , P.title  FROM employee_project EP 
JOIN projects P ON EP.project_id = P.id
JOIN employees E ON EP.employee_id = E.id;

-- ✅ Agrégats & GROUP BY (10 min)

-- Moyenne des salaires par département
SELECT d.id , d.name , GROUP_CONCAT(e.name) , AVG(e.salary) FROM departments d
JOIN employees e ON d.id = e.department_id
GROUP d.id , d.name

-- Affiche seulement les départements avec moyenne > 5000

SELECT d.id , d.name , GROUP_CONCAT(e.name) , AVG(e.salary) FROM departments d
JOIN employees e ON d.id = e.department_id
GROUP d.id , d.name
HAVING AVG(e.salary) > 5000

-- ✅ Filtrage & tri (10 min)

-- Top 5 des salaires les plus élevés

SELECT *  FROM employees
ORDER BY salary DESC
LIMIT 5 

-- Employés dont le salaire est entre 4000 et 6000

SELECT *  FROM employees
WHERE salary BETWEEN 4000 AND 6000

-- ✅ Recherche textuelle (3 min)

-- Employés dont le nom commence par “A”

SELECT *  FROM employees
WHERE name LIKE 'A%'

-- Employés dont le nom contient “er“

SELECT *  FROM employees
WHERE name LIKE '%er%'



