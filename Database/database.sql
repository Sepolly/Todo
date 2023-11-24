

CREATE TABLE IF NOT EXISTS users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    other_name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(255),
    created_at DATETIME DEFAULT NOW(),
    updated_at DATETIME

);

CREATE TABLE IF NOT EXISTS todos(
    todo_id INT PRIMARY KEY,
    title TEXT,
    description TEXT,
    start_date DATE,
    end_date DATE,
    due_time TIME,
    user_id INT NOT NULL,
    created_at DATETIME DEFAULT NOW(),
    updated_at DATETIME

);

ALTER TABLE todos ADD CONSTRAINT fk_user_id FOREIGN KEY(user_id) REFERENCES users(user_id);