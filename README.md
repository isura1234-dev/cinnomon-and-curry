# Cinnamon and Curry – Food Order Management System

**Cinnamon and Curry** is a web-based food order management system developed using **PHP, HTML, CSS, and JavaScript**.

The system was developed to provide a simple digital solution for managing food-related orders and improving the efficiency of the ordering process compared with a manual workflow.

---

## Features

* Customer-friendly food ordering interface
* Food item browsing
* Food order management
* Order information handling
* Dynamic frontend interactions
* Server-side processing using PHP
* Structured web-based management workflow
* Responsive and user-friendly interface

---

## Technology Stack

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Development Tools

* Visual Studio Code
* XAMPP
* Git
* GitHub

---

## System Overview

The system combines a frontend interface with PHP-based server-side processing.

```text
┌─────────────────────────────┐
│          Customer           │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│       Web Interface         │
│      HTML / CSS / JS        │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│        PHP Backend          │
│   Order & Data Processing   │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│          MySQL              │
│      Data Management        │
└─────────────────────────────┘
```

---

## Main Technologies

### PHP

PHP is used as the server-side programming language for processing requests, handling application logic, and communicating with the database.

### HTML & CSS

HTML provides the structure of the web pages, while CSS is used to create the visual layout and styling of the application.

### JavaScript

JavaScript is used to provide client-side functionality and interactive behavior within the application.

### MySQL

MySQL is used for storing and managing application data.

---

## Project Structure

The project is organized into frontend pages, PHP processing files, styling resources, JavaScript functionality, and database-related components.

A simplified structure is:

```text
Cinnamon-and-Curry/
│
├── css/
│   └── ...
│
├── js/
│   └── ...
│
├── images/
│   └── ...
│
├── php/
│   └── ...
│
├── *.html
├── *.php
│
└── README.md
```

> The exact folder and file structure may differ depending on the current version of the project.

---

## Application Workflow

The general ordering workflow is:

```text
Customer
   │
   ▼
Browse Food Items
   │
   ▼
Select Food Items
   │
   ▼
Create Order
   │
   ▼
Submit Order
   │
   ▼
PHP Processing
   │
   ▼
Store / Retrieve Data
   │
   ▼
MySQL Database
```

---

## Database

The application uses **MySQL** for persistent data storage.

The database is responsible for storing application information required for the food ordering workflow.

For local development, the database can be configured using **XAMPP** and phpMyAdmin.

---

## Running the Project Locally

### Prerequisites

Install the following before running the project:

* XAMPP
* PHP
* MySQL
* Web browser
* Git

### 1. Clone the Repository

```bash
git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
```

### 2. Move the Project

Copy the project into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\Cinnamon-and-Curry
```

### 3. Start XAMPP

Open XAMPP Control Panel and start:

```text
Apache
MySQL
```

### 4. Configure the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create the required database and import the project's SQL file if one is included in the repository.

### 5. Configure Database Connection

Update the PHP database configuration with your local MySQL credentials.

Example:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";
```

Use the database name configured for your local installation.

### 6. Run the Application

Open the application through:

```text
http://localhost/Cinnamon-and-Curry/
```

---

## Key Learning Outcomes

This project provided practical experience in:

* PHP web development
* HTML page structure
* CSS styling
* JavaScript functionality
* MySQL database integration
* CRUD-based application development
* Form handling
* Server-side programming
* Client-server communication
* Web application development
* Local development using XAMPP
* Git and GitHub

---

## Project Highlights

* Developed a complete web-based food ordering application.
* Implemented frontend functionality using native HTML, CSS, and JavaScript.
* Implemented backend processing using PHP.
* Integrated MySQL for persistent data management.
* Designed the application without relying on frontend frameworks such as Bootstrap.
* Practiced connecting frontend interfaces with server-side application logic.

---

## Screenshots

Add screenshots of the application here to make the repository easier for recruiters to understand.

Example:

```markdown
## Screenshots

### Home Page
![Home Page](screenshots/home-page.png)

### Food Menu
![Food Menu](screenshots/food-menu.png)

### Order Page
![Order Page](screenshots/order-page.png)
```

Replace the image paths with the actual screenshots included in the repository.

---

## Project Information

**Project Name:** Cinnamon and Curry – Food Order Management System

**Type:** Web Application

**Development Focus:** Food Ordering and Management

**Backend:** PHP

**Frontend:** HTML, CSS, JavaScript

**Database:** MySQL

---

## Author

**Isura Udayanga Nawagamuwa**

Software Engineering Undergraduate


---

## License

This project was developed for educational and portfolio purposes.
