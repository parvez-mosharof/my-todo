# My ToDo 
-------------

**My ToDo** is a simple web-based ToDo application built using PHP and MySQL. It allows users to create, edit, and delete your personal ToDo entries.

-------------

# Project Files
--------------

- `index.php` – Homepage that shows all journal entries.
- `mytodo-add.php` – Page to add a new journal entry.
- `mytodo-edit.php` – Page to edit an existing journal entry.
- `mytodo-delete.php` – Deletes a selected journal entry.
- `mytodo-db.php` – Database connection file.
- `mytodo-style.css` – Basic styling for the app.
- `journal.sql` – MySQL database export (import this to run the app).

---

# How to Run
-------------

1. Set Up Environment
- Use a local server like **XAMPP**, **Laragon**, or **WAMP**.
- Make sure **PHP** and **MySQL** are enabled.
[I used XAMPP]

2. Import the Database
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Create a database named `journal`.
3. Click **Import** and upload the `journal.sql` file.
4. Import to create the table(s) and sample data.

3. Update `mytodo-db.php` (if needed)
Check your database username/password:
```php
$conn = mysqli_connect("localhost", "root", "", "journal");



Thank you.
@parvezmosharof123