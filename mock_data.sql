INSERT INTO employee_postings (qualifications, bio, looking_for, available_hours, user_id)
VALUES
  ('Bachelor in Computer Science', 'Experienced software developer with expertise in Java and Python.', 'Seeking opportunities in software development.', 30, 1),
  ('Master in Marketing', 'Creative and detail-oriented marketing professional with a passion for digital marketing strategies.', 'Open to marketing roles in dynamic companies.', 25, 1),
  ('Ph.D. in Data Science', 'Data scientist with a strong background in machine learning and data analysis.', 'Looking for challenging projects in data science.', 20, 1);

INSERT INTO job_postings (company_name, field, job_type, location, hours_per_week, hourly_rate, description, user_id)
VALUES
  ('ABC Company', 'Software Development', 'Full-time', 'City A', 40, 30.00, 'Looking for experienced software developers.', 1),
  ('XYZ Corporation', 'Data Analysis', 'Part-time', 'City B', 20, 25.50, 'Data analyst position for a growing team.', 1),
  ('123 Industries', 'Marketing', 'Contract', 'City C', 30, 18.75, 'Hiring a marketing specialist for a short-term project.', 1);
