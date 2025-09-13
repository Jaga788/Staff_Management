Staff Management System
📌 Overview

The Staff Management System is a simple application designed to manage staff details efficiently. It allows administrators to add, update, delete, and view staff information in a structured manner. This project helps organizations streamline employee record management and maintain accurate data.

✨ Features

➕ Add new staff details

✏️ Update staff information

❌ Delete staff records

📋 View staff list

🔍 Search staff by ID/Name

🔐 Secure login for admin

🛠️ Technologies Used

Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL

Server: XAMPP

🚀 Installation & Setup

Clone the repository:

git clone <repo-url>


Move the project folder into your XAMPP htdocs directory.

Import the database:

Open phpMyAdmin.

Create a new database (e.g., staff_management).

Import the .sql file provided in the project folder.

Update database credentials in config.php (or relevant file):

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff_management";


Start Apache and MySQL in XAMPP.

Open the project in browser:

http://localhost/staff-management

📂 Project Structure
staff-management/
│── index.php        # Homepage
│── login.php        # Admin login
│── dashboard.php    # Admin dashboard
│── add_staff.php    # Add new staff
│── edit_staff.php   # Update staff info
│── delete_staff.php # Remove staff
│── config.php       # Database connection
│── assets/          # CSS, JS, Images
│── database.sql     # Database file

📸 Screenshots

(Add screenshots of your project UI here)

🙌 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

📜 License

This project is open-source and available under the MIT License
.
