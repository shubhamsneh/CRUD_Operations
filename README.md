# CRUD Operations

A PHP-based CRUD (Create, Read, Update, Delete) application for managing records in a MySQL database. This project is designed to run on a local server environment, using XAMPP and MySQL.

## Overview
This CRUD application allows users to perform basic operations on database records: create new records, read/display stored data, update existing records, and delete records. It is structured for easy deployment in a local development environment using XAMPP.

## Requirements
To run this project, ensure the following tools are installed:
1. **XAMPP Server** - Download [here](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe).
2. **Visual Studio Code** (or any preferred code editor).

## Installation
1. **Install XAMPP**  
   Download and install XAMPP from the provided link in the requirements section.

2. **Start XAMPP Services**  
   Open the XAMPP Control Panel and start the **Apache** and **MySQL** servers.

3. **Clone the Repository**  
   Clone this repository into the `htdocs` directory of your XAMPP installation:
   ```bash
   cd C:/xampp/htdocs/
   git clone https://github.com/shubhamsneh/CRUD_Operations.git

4. **Database Setup**
   - Go to http://localhost/phpmyadmin/ and import the sql file named as register_db.sql

5. **Access the Application**
   - *Form Page*: To add new records, go to http://localhost/CRUD_Operations/form.php.
   - *Display Page*: To view the data stored in the database, visit http://localhost/CRUD_Operations/display.php.
6. **Usage**
   - *Create*: Use the form at form.php to insert new data into the database.
   - *Read*: View all entries on display.php.
   - *Update*: Navigate to the update page from the display table to modify existing records.
   - *Delete*: Remove records directly from the display table.

## Screenshots
![Screenshot (47)](https://github.com/user-attachments/assets/dfc84e65-05e9-4362-8855-d80eaa603447)
![Screenshot (46)](https://github.com/user-attachments/assets/742c7361-6d42-4615-8cda-948b3c0d7524)

## Video Demo  
[Click Here](https://drive.google.com/file/d/1cHKzGQbTyI9PKnp6i6jCazJ6VFlRYhQx/view?usp=sharing) for Demo.
