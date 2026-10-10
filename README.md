# ITPC 109 Docker PHP MySQL Student App

## Project Description
This project is a Student Information Management System developed using PHP and MySQL. Docker Compose is used to run the application and database services.

## Technologies Used
- PHP
- MySQL
- Apache
- Docker and Docker Compose
- phpMyAdmin
- Git and GitHub

## Application Features
- Add student records
- View student records
- Edit and update student records
- Delete student records

## Accessing the Application
- Student application: http://localhost:8080
- phpMyAdmin: http://localhost:8081

## Running the Project
Start the application:
```bash
docker compose up -d
```

Check running containers:
```bash
docker compose ps
```

Stop the application:
```bash
docker compose down
```

## Database
Database name: `student_db`

Troubleshooting

Check running containers with docker compose ps.

Start the application with docker compose up -d if the services are stopped.

If the database connection fails, verify the database service and connection settings.

If changes do not appear, refresh the browser and check the application logs.

The application uses Docker Compose to connect the PHP application to the MySQL database.
