USE facility_management;

INSERT INTO users (name, email, password)
VALUES
('Admin', 'admin@example.com', 'password'),
('Aditi', 'aditi@example.com', 'password'),
('Rahul', 'rahul@example.com', 'password');

INSERT INTO departments (name)
VALUES
('IT'),
('HR'),
('Finance'),
('Operations');

INSERT INTO employees (name, email, salary, department_id)
VALUES
('Kartik', 'kartik@example.com', 60000, 1),
('Priya', 'priya@example.com', 70000, 1),
('Rahul', 'rahul2@example.com', 55000, 2),
('Sneha', 'sneha@example.com', 65000, 3),
('Aman', 'aman@example.com', 50000, 4);

INSERT INTO facilities
(name, location, cleanliness_score, odor_score, waste_level, water_availability)
VALUES
('Central Facility', 'Nagpur', 85, 80, 20, TRUE),
('East Facility', 'Nagpur', 60, 55, 60, TRUE),
('West Facility', 'Nagpur', 45, 40, 80, FALSE),
('North Facility', 'Nagpur', 90, 85, 10, TRUE),
('South Facility', 'Nagpur', 50, 45, 75, FALSE);

INSERT INTO inspections
(facility_id, user_id, inspection_date, cleanliness_score,
 odor_score, waste_level, remarks)
VALUES
(1, 1, '2026-09-01', 85, 80, 20, 'Good condition'),
(2, 2, '2026-09-05', 60, 55, 60, 'Needs improvement'),
(3, 1, '2026-09-10', 45, 40, 80, 'Poor hygiene'),
(4, 2, '2026-09-12', 90, 85, 10, 'Excellent condition'),
(5, 3, '2026-09-15', 50, 45, 75, 'Cleaning required');

INSERT INTO complaints
(facility_id, user_id, complaint_text, status)
VALUES
(2, 2, 'Facility needs cleaning', 'Pending'),
(3, 1, 'Bad smell in facility', 'In Progress'),
(3, 2, 'Waste bins are overflowing', 'Pending'),
(5, 3, 'Water is not available', 'Resolved');