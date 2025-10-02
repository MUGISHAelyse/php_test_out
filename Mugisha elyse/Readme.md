# PHP Student Grading System

This PHP-based application allows educational institutions to manage student grades efficiently. It includes features for custom form creation, grade entry, and a loosely coupled system architecture.

## 📋 Features

### 1. Custom Grade Entry Form
- Dynamic form for entering student scores across multiple assessments (e.g., Test 1, Test 2, Final Exam).
- Input validation ensures scores are within acceptable ranges (0–100).
- Form adapts based on subject, grade level, and curriculum type.

### 2. Grade Calculation
- Automatically computes final grades based on weighted averages.
- Supports customizable grading scales (e.g., A–F, numeric, pass/fail).
- Displays real-time feedback as grades are entered.

### 3. Loose System Architecture
- Each grade record is linked to a student via foreign keys (`student_id`, `course_id`).
- Modular design allows easy updates to grading logic, form structure, or student data without affecting other components.
- Promotes scalability and maintainability for larger institutions.

## 🛠 Technologies Used
- PHP 8+
- MySQL
- HTML/CSS
- JavaScript (optional for dynamic form behavior)

## 🚀 Getting Started
1. Clone the repository.
2. Set up your database using the provided SQL schema.
3. Configure `config.php` with your DB credentials.
4. Access the system via `index.php`.

