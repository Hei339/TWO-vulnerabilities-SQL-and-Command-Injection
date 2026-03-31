# ITP4416 Web Application Security - Assignment 01

**Name:** Fung Henry
**Student ID:** 240299896 
**Class:** HDCS-PTE/2A  

---

## Website Features

This web application demonstrates **two vulnerabilities** and their corresponding secure fixes:

- **Command Injection** (Vulnerable & Fixed versions)
- **SQL Injection** (Vulnerable & Fixed versions)
- Beautiful dashboard page after successful login
- Responsive Tailwind CSS design with animations

---

## How to Run (Local XAMPP)

1. Download or clone this repository.
2. Copy all `.php` files into `C:\xampp\htdocs\assignment01\`
3. Start **Apache** and **MySQL** in XAMPP Control Panel.
4. Open phpMyAdmin (`http://localhost/phpmyadmin`) and import `websec.sql` to create the database.
5. Open your browser and go to:  
   **http://localhost/assignment01/index.php**

---

## Database Schema

The file `websec.sql` contains:
- Database name: `websec`
- Table: `users`
- Sample accounts:
  - Username: `admin` / Password: `password123`
  - Username: `user` / Password: `pass123`

---

## Source Code Reference

All source code was generated with **Grok by xAI**[](https://grok.x.ai).  

**Prompt used:**  
"Create a simple vulnerable PHP web application for web security assignment with Command Injection in ping form and SQL Injection in login page, including secure fixed versions, modern Tailwind CSS design with animations, dashboard after login, and student info box exactly matching the assignment screenshot."

---

## Vulnerabilities Demonstrated

| Vulnerability       | Vulnerable File       | Fixed File             | Fix Method                          |
|---------------------|-----------------------|------------------------|-------------------------------------|
| Command Injection   | `ping.php`            | `secure_ping.php`      | `escapeshellarg()` + `intval()` + English ping |
| SQL Injection       | `login.php`           | `secure_login.php`     | Prepared Statement (`bind_param`)   |

---

## Files Included

- `index.php` – Main page with all links  
- `login.php` – Vulnerable SQL Injection login  
- `ping.php` – Vulnerable Command Injection ping  
- `secure_login.php` – Secure SQL Injection login  
- `secure_ping.php` – Secure Command Injection ping  
- `dashboard.php` – Dashboard after successful login  
- `websec.sql` – Database schema and sample data  

---

**Note:**  
This project fully meets all requirements of Task A, B, C, and D.  
Screenshots for attacks and fixes are included in the assignment report.

---

**Made with ❤️ for ITP4416 Web Application Security**
