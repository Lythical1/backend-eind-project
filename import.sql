DROP DATABASE IF EXISTS jobspot;

CREATE DATABASE jobspot;

USE jobspot;

DROP TABLE IF EXISTS employee_postings;

DROP TABLE IF EXISTS job_postings;

DROP TABLE IF EXISTS users;

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
  contract_type VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  hours_per_week INT NOT NULL,
  hourly_rate DECIMAL(10, 2) NOT NULL,
  description TEXT NOT NULL,
  user_id INT NOT NULL,
  start_date DATE NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS employee_postings (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  location_preference VARCHAR(255) NOT NULL,
  contract_type VARCHAR(255) NOT NULL,
  looking_for VARCHAR(255) NOT NULL,
  qualifications VARCHAR(255) NOT NULL,
  available_hours INT NOT NULL,
  start_date DATE NOT NULL,
  skills VARCHAR(255) NOT NULL,
  languages_spoken VARCHAR(255),
  previous_job_titles TEXT,
  previous_companies TEXT,
  employment_duration_years INT,
  education VARCHAR(255),
  linkedin_url VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);