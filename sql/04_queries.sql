SELECT * FROM employees;

SELECT
    employees.name AS employee_name,
    departments.name AS department
FROM employees
JOIN departments
ON employees.department_id = departments.id;

SELECT *
FROM employees
WHERE salary > 60000;

SELECT AVG(salary) AS average_salary
FROM employees;

SELECT *
FROM employees
ORDER BY salary DESC
LIMIT 1;

SELECT
    department_id,
    AVG(salary) AS average_salary
FROM employees
GROUP BY department_id;

SELECT
    department_id,
    AVG(salary) AS average_salary
FROM employees
GROUP BY department_id
HAVING AVG(salary) > 60000;

SELECT *
FROM facilities
WHERE cleanliness_score < 60;

SELECT *
FROM facilities
WHERE waste_level > 70;

SELECT
    facilities.name,
    COUNT(complaints.id) AS complaint_count
FROM facilities
LEFT JOIN complaints
ON facilities.id = complaints.facility_id
GROUP BY facilities.id, facilities.name;

SELECT
    facilities.name AS facility,
    inspections.inspection_date,
    inspections.cleanliness_score,
    inspections.odor_score,
    inspections.waste_level
FROM inspections
JOIN facilities
ON inspections.facility_id = facilities.id
ORDER BY inspections.inspection_date DESC;

SELECT *
FROM complaints
WHERE status = 'Pending';

CREATE INDEX idx_employee_department
ON employees(department_id);

CREATE INDEX idx_inspection_facility
ON inspections(facility_id);

CREATE INDEX idx_complaint_facility
ON complaints(facility_id);

START TRANSACTION;

INSERT INTO complaints
(facility_id, user_id, complaint_text, status)
VALUES
(1, 2, 'Water problem reported', 'Pending');

UPDATE facilities
SET water_availability = FALSE
WHERE id = 1;

COMMIT;
