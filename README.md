# Job Recruitment Database Management System

## Introduction

This application is a web-based Job Recruitment System inspired by LinkedIn, designed for educational and demonstration purposes. Built with PHP and MySQL, it allows employers to post job openings and manage recruitment, while candidates can view and apply for jobs based on eligibility and experience. The system provides a simple interface for managing job postings, user records, and recruitment workflows, making it ideal for learning about database-driven web applications.

---

## Project Structure

```
Job-Recruitment-Database-Management-System/
├── database.php
├── fetch_data.php
├── fetch_eligible_jobs.php
├── fetch_eligible_users.php
├── fetch_job_titles.php
├── fetch_users.php
├── find_eligible_candidates.php
├── find_most_experienced_user.php
├── index.php
├── job_postings.php
├── jrs.sql
├── manage_record.php
├── notify_company.php
├── run_function.php
├── run_query.php
├── style.css
└── README.md
```

---

## How to Run This Application

### 1. Prerequisites

- **XAMPP** (includes Apache, MySQL, PHP) [Download here](https://www.apachefriends.org/)
- **Web browser** (e.g., Chrome, Firefox)
- **Code editor** (e.g., Visual Studio Code, Sublime Text)

### 2. Clone the Repository

Open a terminal/command prompt and run:

```sh
git clone https://github.com/your-username/Job-Recruitment-Database-Management-System.git
```

### 3. Move Project to XAMPP htdocs

Copy the entire project folder to your XAMPP `htdocs` directory:

```
C:\xampp\htdocs\Job-Recruitment-Database-Management-System
```

### 4. Set Up the Database

1. Open [phpMyAdmin](http://localhost/phpmyadmin/) in your browser.
2. Create a new database (e.g., `jrs`).
3. Import the `jrs.sql` file:
   - Select your new database.
   - Go to the **Import** tab.
   - Choose the `jrs.sql` file from the project folder.
   - Click **Go** to import the schema and sample data.

### 5. Configure Database Connection

Edit the `database.php` file in the project folder to match your MySQL credentials:

```php
$servername = "localhost";
$username = "root";
$password = "";       // Default MySQL password for XAMPP
$dbname = "jrs";      // Name of your database
```

### 6. Start XAMPP Services

- Open the XAMPP Control Panel.
- Start the **Apache** and **MySQL** services.

### 7. Access the Application

- Open your web browser and go to:
  - [http://localhost/Job-Recruitment-Database-Management-System](http://localhost/Job-Recruitment-Database-Management-System)
- The `index.php` file serves as the main entry point.

### 8. Using the Application

- **Employers** can post jobs, view candidates, and notify companies.
- **Candidates** can view job postings and check eligibility.
- Use the navigation and forms provided on the homepage to access all features.

---

## Contribution Guidelines

1. **Fork the repository**
2. **Create a new branch**
   ```sh
   git checkout -b feature/your-feature
   ```
3. **Commit your changes**
   ```sh
   git commit -m "Add new feature"
   ```
4. **Push to your branch**
   ```sh
   git push origin feature/your-feature
   ```
5. **Open a Pull Request**

---

## License

This project is licensed under the MIT License.

---

