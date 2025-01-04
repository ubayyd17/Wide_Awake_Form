# **Wide Awake Form**

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)
[![Issues](https://img.shields.io/github/issues/yourusername/wide-awake-form.svg)](https://github.com/yourusername/wide-awake-form/issues)
[![Stars](https://img.shields.io/github/stars/yourusername/wide-awake-form.svg)](https://github.com/yourusername/wide-awake-form/stargazers)

## **Table of Contents**

- [About the Project](#about-the-project)
  - [Features](#features)
  - [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [Acknowledgments](#acknowledgments)

---

## **About the Project**

**Wide Awake Form** is a simple, secure, and responsive form submission project built using PHP. This project showcases efficient handling of form submissions and validations with backend support and is designed to run locally on **XAMPP**.

This project can be used for collecting user data, managing input validations, and creating dynamic web forms. It serves as a foundation for learning and practicing PHP, including HTML form handling and database integration.

### **Features**

- **Responsive Design**: Works across all devices and screen sizes.
- **Data Validation**: Backend validation to ensure proper user input.
- **Database Integration**: Store form data in MySQL (using XAMPP's phpMyAdmin).
- **Customizable Fields**: Easily add or modify fields to suit your requirements.
- **Secure**: Sanitization of user input to prevent SQL injection and XSS attacks.

### **Built With**

- **Frontend**:
  - [HTML5](https://developer.mozilla.org/en-US/docs/Web/HTML)
  - [CSS3](https://developer.mozilla.org/en-US/docs/Web/CSS)
- **Backend**:
  - [PHP](https://www.php.net/)
  - [MySQL](https://www.mysql.com/)
- **Local Development**:
  - [XAMPP](https://www.apachefriends.org/)

---

## **Getting Started**

To get a local copy up and running, follow these steps.

### **Prerequisites**

- **XAMPP**: Download and install [XAMPP](https://www.apachefriends.org/).
- **Git**: (Optional) Download and install [Git](https://git-scm.com/).

### **Installation**

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/wide-awake-form.git
Move Files to XAMPP's htdocs Directory

Navigate to your XAMPP installation folder and copy the project folder into the htdocs directory.

mv wide-awake-form /path/to/xampp/htdocs/
Set Up the Database

Start XAMPP and ensure Apache and MySQL are running.
Open phpMyAdmin.
Create a new database (e.g., wide_awake_form).
Import the database.sql file included in the repository to set up the necessary tables.
Configure Environment Variables

Update the database connection settings in the config.php file.

define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Default username for XAMPP
define('DB_PASS', ''); // Default password for XAMPP
define('DB_NAME', 'wide_awake_form');
Run the Project

Open your browser and navigate to:

http://localhost/wide-awake-form/
Usage
Access the Form: Visit the project in your browser and fill out the form.
Submit the Form: The form will validate input fields and display appropriate error messages if required.
View Submitted Data: Check the submissions table in your database for stored form data.
Contributing
Contributions are always welcome! Follow the steps below to contribute:

Fork the Project

Click the "Fork" button at the top right of the repository page.

Create Your Feature Branch

git checkout -b feature/YourFeature
Commit Your Changes

git commit -m 'Add some feature'
Push to the Branch

git push origin feature/YourFeature
Open a Pull Request

Go to the original repository and click "New Pull Request".

Guidelines:

Write clear, concise commit messages.
Document your code wherever necessary.
Make sure the feature works locally before submitting.
License
Distributed under the MIT License. See LICENSE for more information.

Acknowledgments
PHP Documentation
MySQL Documentation
Bootstrap (if applicable)
XAMPP Documentation
Awesome Readme Templates
Shields.io
