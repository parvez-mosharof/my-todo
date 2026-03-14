# My Journal 
-------------

**My Journal** is a simple web-based journal application built using PHP and MySQL. It allows users to create, edit, and delete your personal journal entries.

-------------

# Project Files
--------------

- `myjournal-index.php` – Homepage that shows all journal entries.
- `myjournal-add.php` – Page to add a new journal entry.
- `edit.php` – Page to edit an existing journal entry.
- `delete.php` – Deletes a selected journal entry.
- `db.php` – Database connection file.
- `style.css` – Basic styling for the app.
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

3. Update `db.php` (if needed)
Check your database username/password:
```php
$conn = mysqli_connect("localhost", "root", "", "journal");



Thank you.
@parvezmosharof123