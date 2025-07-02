# Assignment 5: Login System with Session Management and Timeout

## Introduction
In this assignment, students will develop a basic login system using PHP, MySQL, and HTML. The system will authenticate users against stored credentials in a database. Upon successful login, the user is directed to an Admin page. If login fails, they are redirected to an error page. The Admin page will include a logout feature and automatically timeout after 1 minute of inactivity. After logging out or timing out, the Admin page must no longer be accessible without logging in again. The final system must be deployed to a publicly accessible hosting platform.

## Objectives
- Design and implement a secure login page using PHP and MySQL
- Redirect users based on login success or failure
- Create session-based authentication with auto-timeout after 1 minute
- Prevent access to the Admin page after logout or session expiration
- Deploy the working system on a free hosting service
- Document system functionality and deployment process

## System Requirements

### 3.1 Technologies to be Used
- HTML (Frontend)
- PHP (Backend logic and session management)
- MySQL (User credential storage)
- Hosting: Any free PHP/MySQL-supported web hosting service (e.g., 000WebHost, InfinityFree)

## Functional Requirements

### 4.1 Pages to Create

#### Pages to Create
- login.html or login.php: Form for entering username and password
- admin.php: Protected Admin page shown only after successful login
- error.html or error.php: Shown when login fails
- logout.php: Ends session and redirects to login page

### 4.2 Functionality
- Store at least one user credential in the MySQL database
- On login attempt:
    - If credentials match: redirect to admin.php
    - If credentials do not match: redirect to error.php
- On admin.php, provide:
    - Welcome message
    - Logout button (logout.php)
    - Auto logout after 1 minute of inactivity using PHP sessions
- After logout or timeout:
    - Attempting to access admin.php directly should redirect to the login page

### 4.3 Deployment
- Deploy the application to a free PHP/MySQL hosting provider (e.g., 000WebHost, InfinityFree)
- Ensure the database is configured correctly with at least one user entry
- Test all possible flows:
    - Successful login
    - Failed login
    - Session timeout
    - Logout
    - Unauthorized access to admin.php

### Submission Guidelines
#### 6.1 Deliverables
- Public URL of the hosted login system
- A ZIP file containing:
    - Overview of system functionality and how session timeout is handled
    - Database schema or SQL file for user table setup
    - Any known issues or assumptions
    - All source code files (HTML, PHP, SQL, etc.)

#### 6.2 Submission Format
- Upload the ZIP file to Canvas
