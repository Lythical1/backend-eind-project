DROP DATABASE IF EXISTS jobspot;

CREATE DATABASE jobspot;

USE jobspot;

DROP TABLE IF EXISTS employee_postings;

DROP TABLE IF EXISTS job_postings;

DROP TABLE IF EXISTS users;

DROP TABLE IF EXISTS company_reviews;

CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  type_of_user VARCHAR(255) NOT NULL,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  phone_number VARCHAR(255),
  company_name VARCHAR(255),
  company_size VARCHAR(50),
  industry VARCHAR(255),
  website VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS job_postings (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  company_name VARCHAR(255) NOT NULL,
  field VARCHAR(255) NOT NULL,
  job_type VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  hours_per_week INT NOT NULL,
  hourly_rate DECIMAL(10, 2) NOT NULL,
  description TEXT NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS employee_postings (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  qualifications VARCHAR(255) NOT NULL,
  bio TEXT NOT NULL,
  looking_for VARCHAR(255) NOT NULL,
  available_hours INT NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);
