INSERT INTO employee_postings (
  location_preference, contract_type, looking_for, qualifications, available_hours, start_date,
  languages_spoken, skills, previous_job_titles, previous_companies, employment_duration_years,
  education, linkedin_url, description, user_id
) VALUES
('Remote', 'Full-time', 'Software Developer Position', 'Bachelor in Computer Science', 40, '2023-01-15',
 'English, Spanish', 'Java, Python, SQL', 'Software Engineer, Junior Developer', 'Tech Solutions Ltd, CodeCrafters Inc.', 3,
 3, 'https://www.linkedin.com/in/johndoe',
 'Passionate software developer with experience in building web applications and a strong foundation in algorithms and data structures.', 1),

('Local', 'Part-time', 'Graphic Designer Position', 'Bachelor of Arts in Graphic Design', 20, '2023-02-01',
 'English', 'Adobe Creative Suite, UI/UX Design', 'Graphic Designer, Visual Designer', 'DesignStudio Ltd, CreativeHub Inc.', 4,
 4, 'https://www.linkedin.com/in/bobsmith',
 'Creative and detail-oriented graphic designer with a passion for creating visually appealing and user-friendly designs.', 1),

('Remote or Local', 'Full-time', 'Marketing Specialist Position', 'Master of Business Administration', 35, '2023-01-20',
 'English, French', 'Marketing, Market Research, Social Media Management', 'Marketing Coordinator, Market Analyst', 'ABC Marketing Agency, XYZ Corporation', 5,
 5, 'https://www.linkedin.com/in/janedoe',
 'Results-oriented marketing professional with a proven track record in developing and implementing successful marketing strategies.', 1),

('Local', 'Full-time', 'Data Scientist Position', 'Ph.D. in Data Science', 40, '2023-01-10',
 'English', 'Machine Learning, R, Python', 'Data Scientist, Research Analyst', 'DataInsights Corp, Insightful Research Ltd', 6,
 6, 'https://www.linkedin.com/in/alicedavis',
 'Experienced data scientist with expertise in machine learning algorithms and a track record of delivering actionable insights from complex data sets.', 1),

('Remote or Local', 'Contract', 'Project Manager Position', 'Master of Business Administration', 30, '2023-02-15',
 'English, Spanish', 'Project Management, Team Leadership, Communication', 'Project Coordinator, Assistant Manager', 'GlobalProjects Ltd, LocalBuilders Inc.', 8,
 8, 'https://www.linkedin.com/in/samanthajones',
 'Dynamic project manager with a proven record of successful project delivery and team leadership.', 1),

('Local', 'Full-time', 'Registered Nurse Position', 'Bachelor of Science in Nursing', 35, '2023-01-25',
 'English', 'Patient Care, Critical Thinking, Time Management', 'Staff Nurse, Clinical Coordinator', 'City General Hospital, CareFirst Medical Center', 8,
 8, 'https://www.linkedin.com/in/sarahgreen',
 'Compassionate and skilled registered nurse with experience in providing high-quality patient care, adept at handling emergency situations.', 1);

INSERT INTO job_postings (company_name, field, contract_type, location, hours_per_week, hourly_rate, description, user_id, start_date)
VALUES
  ('ABC Company', 'Software Development', 'Full-time', 'City A', 40, 30.00, 'Looking for experienced software developers.', 1, '2022-01-01'),
  ('XYZ Corporation', 'Data Analysis', 'Part-time', 'City B', 20, 25.50, 'Data analyst position for a growing team.', 1, '2022-02-01'),
  ('123 Industries', 'Marketing', 'Contract', 'City C', 30, 18.75, 'Hiring a marketing specialist for a short-term project.', 1, '2022-03-01'),
  ('Company A', 'Software Development', 'Full-time', 'City A', 40, 25.00, 'Lorem ipsum...', 1, '2022-04-01'),
  ('Company B', 'Data Science', 'Part-time', 'City B', 20, 30.00, 'Consectetur adipiscing elit...', 1, '2022-05-01'),
  ('Company C', 'Web Development', 'Contract', 'City C', 30, 22.00, 'Duis aute irure dolor...', 1, '2022-06-01');
