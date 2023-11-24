-- Active: 1700672898166@@127.0.0.1@3306@todo


CREATE TABLE IF NOT EXISTS users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    other_name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(255),
    created_at DATETIME DEFAULT NOW(),
    updated_at DATETIME DEFAULT NOW() ON UPDATE NOW()
);


CREATE TABLE IF NOT EXISTS todos(
    todo_id INT PRIMARY KEY AUTO_INCREMENT,
    title TEXT,
    description TEXT,
    start_date DATE,
    end_date DATE,
    due_time TIME,
    user_id INT NOT NULL,
    created_at DATETIME DEFAULT NOW(),
    updated_at DATETIME DEFAULT NOW() ON UPDATE NOW(),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
