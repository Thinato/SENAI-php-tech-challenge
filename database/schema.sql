CREATE DATABASE paulo_e_leo;

-- Dropa as tables para facilitar migrations

DROP TABLE IF EXISTS php_session;

DROP TABLE IF EXISTS employees;

DROP TABLE IF EXISTS users;

CREATE TABLE
    users (
        user_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );

CREATE TABLE
    employees (
        employee_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
        CONSTRAINT fk_employee_user FOREIGN KEY (created_by) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE RESTRICT
    );

CREATE TABLE
    php_session (
        session_id VARCHAR(255) PRIMARY KEY,
        user_id INT UNSIGNED NOT NULL,
        session_lifetime INT UNSIGNED,
        expires_at DATETIME NOT NULL,
        CONSTRAINT fk_session_user FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE RESTRICT
    );