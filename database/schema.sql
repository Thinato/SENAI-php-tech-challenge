CREATE DATABASE paulo_e_leo;

-- Dropa as tables para facilitar migrations

IF EXISTS (
    SELECT 1
    FROM
        information_schema.tables
    WHERE
        table_name = 'php_session'
) THEN
DROP TABLE php_session;

END IF;

IF EXISTS (
    SELECT 1
    FROM
        information_schema.tables
    WHERE
        table_name = 'employees'
) THEN
DROP TABLE employees;

END IF;

IF EXISTS (
    SELECT 1
    FROM
        information_schema.tables
    WHERE
        table_name = 'users'
) THEN
DROP TABLE users;

END IF;

CREATE TABLE
    users (
        user_id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );

CREATE TABLE
    employees (
        employee_id INT PRIMARY KEY AUTO_INCREMENT,
        registration VARCHAR(255) NOT NULL UNIQUE,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        phone_number VARCHAR(255) NOT NULL,
        salary DECIMAL(10, 2) NOT NULL,
        role VARCHAR(255) NOT NULL,
        department VARCHAR(255) NOT NULL,
        created_by INT UNSIGNED NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (created_by) REFERENCES users(user_id)
    );

CREATE TABLE
    php_session (
        session_id VARCHAR(255) PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        session_lifetime INT UNSIGNED,
        expires_at DATETIME NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(user_id)
    );