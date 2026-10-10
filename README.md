# ITPC 109 Docker Student Information System

## 1. Project Purpose
This project is a Student Information System developed for the ITPC 109 laboratory. It uses PHP and MySQL to manage student records through a web application running in Docker containers.

## 2. Technologies Used
- PHP
- MySQL
- Apache
- Docker
- Docker Compose
- phpMyAdmin
- Git and GitHub

## 3. System Architecture
The application uses a multi-container architecture:
- **Web application:** PHP running on Apache.
- **Database:** MySQL stores the student records.
- **Database management:** phpMyAdmin provides a browser-based database management interface.
- **Container orchestration:** Docker Compose manages the application and database services.

The PHP application connects to the MySQL service using the Docker Compose service hostname `db`.

## 4. Installation
1. Install Docker Desktop and start it.
2. Install Git if you plan to clone the repository.
3. Clone the repository or download the project files.
4. Open a terminal in the project directory.
5. Start the containers using the command below.

## 5. Docker Commands

Start and build the services:

```bash
docker compose up -d --build
```

Check the container status:

```bash
docker compose ps
```

View application and database logs:

```bash
docker compose logs
```

Stop the services:

```bash
docker compose down
```

## 6. Application URLs
- **Student Information System:** http://localhost:8080
- **phpMyAdmin:** http://localhost:8081

## 7. Database Information for Local Testing
- **Database name:** `student_db`
- **MySQL service hostname:** `db`
- **Database username:** `student_user`
- **Database password:** `student_pass`

These are the sample local-testing credentials configured for this laboratory. Use only for local development, and do not use them as production credentials.

## 8. CRUD Features
- **Create:** Add new student records.
- **Read:** View student records.
- **Update:** Edit existing student records.
- **Delete:** Remove student records.

Student information includes student number, first name, last name, and course.

## 9. Student / Developer Information
- **Student name:** [Enter your full name]
- **Course / Section:** [Enter your course and section]
- **Subject:** ITPC 109
- **Project:** Docker PHP MySQL Student Information System

## 10. Security Note
This README is intended for a local laboratory environment. Do not place production secrets, private access tokens, or real production database credentials in this file.