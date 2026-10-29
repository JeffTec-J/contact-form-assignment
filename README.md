# Contact Form Assignment

## About the Project

This is a simple contact form built with HTML, CSS, PHP and MySQL.

A user can enter their name, email address and contact number.
The information is saved in a database and displayed in a table
on the dashboard.

## Project Files

- index.php: displays the contact form.
- style.css: styles the contact form.
- submit.php: collects the form information and saves it.
- dashboard.php: displays the saved contacts.
- README.md: explains the project and how to run it.

## Requirements

- XAMPP with Apache and MySQL.
- A web browser.

## Database Setup

Open phpMyAdmin, select the SQL tab, and run:

```sql
CREATE DATABASE IF NOT EXISTS contact;

USE contact;

CREATE TABLE IF NOT EXISTS mycontact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    contact VARCHAR(30) NOT NULL
);
```

## How to Run the Project

1. Place the project folder inside XAMPP's htdocs folder.
2. Name the project folder CA.
3. Start Apache and MySQL in the XAMPP Control Panel.
4. Create the database and table using the SQL above.
5. Check the database connection settings in submit.php
   and dashboard.php. The database name is contact.
6. Open http://localhost/CA/index.php in a browser.
7. Enter a name, email address and contact number.
8. Click Submit.
9. The saved information will appear on the dashboard.