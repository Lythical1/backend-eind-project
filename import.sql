CREATE DATABASE IF NOT EXISTS jobspot;

USE jobspot;

DROP TABLE IF EXISTS job_postings;

CREATE TABLE IF NOT EXISTS job_postings (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  company_name VARCHAR(255) NOT NULL,
  field VARCHAR(255) NOT NULL,
  job_type VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  hours_per_week INT NOT NULL,
  hourly_rate DECIMAL(10,2) NOT NULL
);

DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  type_of_user VARCHAR(255) NOT NULL,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  company_name VARCHAR(255)
);
