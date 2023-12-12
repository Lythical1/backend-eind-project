INSERT INTO employee_postings (
  qualifications, skills, location_preference, looking_for, available_hours,
  previous_job_titles, previous_companies, employment_duration_years, linkedin_url, description, user_id
) VALUES
('Bachelor of Science in Computer Science', 'Java, Python, SQL', 'Remote', 'Software Developer Position', 40,
 'Software Engineer, Junior Developer', 'Tech Solutions Ltd, CodeCrafters Inc.', 3, 'https://www.linkedin.com/in/johndoe',
 'I am a passionate software developer with experience in building web applications and a strong foundation in algorithms and data structures.', 1),

('Master of Business Administration', 'Marketing, Market Research, Social Media Management', 'On-site', 'Marketing Manager Position', 35,
 'Marketing Specialist, Social Media Coordinator', 'ABC Marketing Agency, XYZ Corporation', 5, 'https://www.linkedin.com/in/janedoe',
 'Results-oriented marketing professional with a proven track record in developing and implementing successful marketing strategies.', 1),

('Bachelor of Arts in Graphic Design', 'Adobe Creative Suite, UI/UX Design', 'Remote or On-site', 'Graphic Designer Position', 30,
 'Graphic Designer, Visual Designer', 'DesignStudio Ltd, CreativeHub Inc.', 4, 'https://www.linkedin.com/in/bobsmith',
 'Creative and detail-oriented graphic designer with a passion for creating visually appealing and user-friendly designs.', 1),

('Ph.D. in Data Science', 'Machine Learning, R, Python', 'Remote', 'Data Scientist Position', 40,
 'Data Scientist, Research Analyst', 'DataInsights Corp, Insightful Research Ltd', 6, 'https://www.linkedin.com/in/alicedavis',
 'Experienced data scientist with expertise in machine learning algorithms and a track record of delivering actionable insights from complex data sets.', 1),

('Bachelor of Engineering in Civil Engineering', 'AutoCAD, Structural Analysis, Project Management', 'On-site', 'Civil Engineer Position', 40,
 'Project Engineer, Structural Designer', 'BuildIt Engineering, CityDesign Consultants', 7, 'https://www.linkedin.com/in/charliebrown',
 'Civil engineer with a strong background in structural design and project management, dedicated to delivering high-quality and cost-effective solutions.', 1),

('Bachelor of Science in Nursing', 'Patient Care, Critical Thinking, Time Management', 'On-site', 'Registered Nurse Position', 36,
 'Staff Nurse, Clinical Coordinator', 'City General Hospital, CareFirst Medical Center', 8, 'https://www.linkedin.com/in/sarahgreen',
 'Compassionate and skilled registered nurse with experience in providing high-quality patient care, adept at handling emergency situations.', 1);

INSERT INTO job_postings (company_name, field, contract_type, location, hours_per_week, hourly_rate, description, user_id, start_date)
VALUES
  ('ABC Company', 'Software Development', 'Full-time', 'City A', 40, 30.00, 'Looking for experienced software developers.', 1, '2022-01-01'),
  ('XYZ Corporation', 'Data Analysis', 'Part-time', 'City B', 20, 25.50, 'Data analyst position for a growing team.', 1, '2022-02-01'),
  ('123 Industries', 'Marketing', 'Contract', 'City C', 30, 18.75, 'Hiring a marketing specialist for a short-term project.', 1, '2022-03-01'),
  ('Company A', 'Software Development', 'Full-time', 'City A', 40, 25.00, 'Lorem ipsum...', 1, '2022-04-01'),
  ('Company B', 'Data Science', 'Part-time', 'City B', 20, 30.00, 'Consectetur adipiscing elit...', 1, '2022-05-01'),
  ('Company C', 'Web Development', 'Contract', 'City C', 30, 22.00, 'Duis aute irure dolor...', 1, '2022-06-01');
