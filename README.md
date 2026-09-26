# 🚀 Day 8 — Database + Laravel API

![Laravel](https://img.shields.io/badge/Laravel-API-red?style=for-the-badge\&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.x-blue?style=for-the-badge\&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge\&logo=mysql)
![REST API](https://img.shields.io/badge/API-REST-green?style=for-the-badge)

## 📌 Overview

Day 8 focuses on **Relational Databases, SQL and Laravel API Development**.

The project demonstrates how a backend application communicates with a relational database using Laravel and Eloquent ORM.

The main practical flow is:

```text
Request
   ↓
Route
   ↓
Controller
   ↓
Model
   ↓
Database
   ↓
Response
```

---

## 🎯 Objectives

* Understand relational databases.
* Create tables, rows and columns.
* Understand primary and foreign keys.
* Implement database relationships.
* Practice SQL CRUD operations.
* Learn SELECT, WHERE, ORDER BY, GROUP BY and HAVING.
* Practice JOIN and subqueries.
* Understand database indexes.
* Understand transactions.
* Learn Laravel architecture.
* Create Laravel models and migrations.
* Use Eloquent ORM.
* Implement validation.
* Build REST APIs.
* Implement CRUD operations.

---

## 🗂️ Project Structure

```text
day-08/
│
├── sql/
│   ├── 01_create_database.sql
│   ├── 02_create_tables.sql
│   ├── 03_insert_data.sql
│   └── 04_queries.sql
│
├── database/
│   └── schema.md
│
├── laravel-api/
│   ├── app/
│   │   ├── Http/
│   │   │   └── Controllers/
│   │   │       └── Api/
│   │   └── Models/
│   │
│   ├── database/
│   │   └── migrations/
│   │
│   ├── routes/
│   │   └── api.php
│   │
│   └── ...
│
└── README.md
```

---

## 🛠️ Technologies Used

* PHP
* Laravel
* MySQL
* SQL
* Eloquent ORM
* REST API
* Postman
* Composer

---

## 🗄️ Database Tables

The project contains the following tables:

```text
users
departments
employees
facilities
inspections
complaints
```

### Relationships

```text
Department
    │
    └──< Employees

Facility
    │
    ├──< Inspections
    │
    └──< Complaints

User
    │
    ├──< Inspections
    │
    └──< Complaints
```

---

## 🔑 Database Concepts Practiced

### Primary Key

A primary key uniquely identifies a row.

Example:

```sql
id INT PRIMARY KEY AUTO_INCREMENT
```

### Foreign Key

A foreign key connects one table with another.

Example:

```sql
department_id INT,
FOREIGN KEY (department_id)
REFERENCES departments(id)
```

### CRUD

```text
Create
Read
Update
Delete
```

### SQL Operations

The project includes:

* SELECT
* WHERE
* ORDER BY
* GROUP BY
* HAVING
* JOIN
* Aggregate functions
* Subqueries
* Indexes
* Transactions

---

## 🔌 Laravel API

The following resources are available:

### Facilities

```text
GET     /api/facilities
POST    /api/facilities
GET     /api/facilities/{id}
PUT     /api/facilities/{id}
DELETE  /api/facilities/{id}
```

### Inspections

```text
GET     /api/inspections
POST    /api/inspections
GET     /api/inspections/{id}
PUT     /api/inspections/{id}
DELETE  /api/inspections/{id}
```

### Complaints

```text
GET     /api/complaints
POST    /api/complaints
GET     /api/complaints/{id}
PUT     /api/complaints/{id}
DELETE  /api/complaints/{id}
```

## 🎓 Learning Outcome

After completing Day 8, I understand how to design a relational database and connect it with a Laravel backend.

I also learned how a Laravel application processes a request from the API route through the controller and model to the database and returns a JSON response.

---

