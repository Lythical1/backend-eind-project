CREATE DATABASE IF NOT EXISTS jobspot;

USE jobspot;

CREATE TABLE IF NOT EXISTS job_postings (
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  company_name VARCHAR(255) NOT NULL,
  field VARCHAR(255) NOT NULL,
  job_type VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  hours_per_week INT NOT NULL,
  hourly_rate DECIMAL(10,2) NOT NULL
);