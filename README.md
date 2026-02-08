# PHP Tutorial – Database Setup & Configuration Guide

This repository contains a **PHP tutorial project** that demonstrates how to work with a database using **PHP and MySQL**. The purpose of this README is to help users:

- Create the required database
- Import tables
- Configure database connectivity in the PHP code
- Run the project locally without errors

> ⚠️ **Note:** This is a proprietary tutorial project intended for learning or authorized use only.

---

## 📌 Requirements

Make sure you have the following installed:

- XAMPP / WAMP / LAMP (Apache + MySQL)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser (Chrome, Edge, Firefox)

---

## 🗄️ Step 1: Create the Database

1. Open **phpMyAdmin**
2. Click on **New**
3. Create a database with the following name:

```sql
data_base_name
```

> You may rename the database, but then you must update the database connection file accordingly.

---

## 📥 Step 2: Create Tables

Inside the name of database, create the required tables used in this project.

Example:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

> Import the provided `.sql` file if available, or manually create tables based on the PHP code logic.

---

## 🔌 Step 3: Configure Database Connectivity

Locate the database connection file (commonly named one of the following):

- `db.php`
- `config.php`
- `connection.php`

### ✏️ Update Database Credentials

Edit the file and update the values below:

```php
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
```

### 🔁 If You Changed Database Name

Make sure this line matches your database:

```php
$database = "your_database_name";
```

---

## ▶️ Step 4: Run the Project

1. Move the project folder to:
   ```
   htdocs (XAMPP) / www (WAMP)
   ```
2. Start **Apache** and **MySQL**
3. Open your browser and visit:

```
http://localhost/your-project-folder
```

---

## 🧪 Common Errors & Fixes

### ❌ Database connection failed

- Check MySQL service is running
- Verify database name
- Check username and password

### ❌ Table not found

- Make sure tables are created
- Verify table names match SQL queries

---

## 🔐 License

This project is **proprietary software**.

Copyright (c) 2026 Dhru Patel

All rights reserved. Unauthorized copying, modification, or distribution of this project is strictly prohibited.

---

## 👨‍💻 Author

**Dhru Patel**\
PHP Tutorial Project

---

## 📎 Notes

- This project is intended for learning and demonstration purposes
- Not approved for public redistribution
- Database credentials should not be exposed in production

