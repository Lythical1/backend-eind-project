<?php

include_once "connector.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT first_name, last_name FROM users WHERE id = $user_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$first_name = $result['first_name'];
$last_name = $result['last_name'];

$location_preference = $_POST['location_preference'];
$contract_type = $_POST['contract_type'];
$looking_for = $_POST['looking_for'];
$qualifications = $_POST['qualifications'];
$start_date = $_POST['start_date'];
$available_hours = $_POST['available_hours'];
$languages_spoken = $_POST['languages_spoken'];
$skills = $_POST['skills'];
$previous_job_titles = $_POST['previous_job_titles'];
$previous_companies = $_POST['previous_companies'];
$employment_duration_years = $_POST['employment_duration_years'];
$education = $_POST['education'];
$linkedin = $_POST['linkedin_url'];
$description = $_POST['description'];

$sql = "INSERT INTO employee_postings (first_name, last_name, location_preference, contract_type, looking_for, qualifications, start_date, available_hours, languages_spoken, skills, previous_job_titles, previous_companies, employment_duration_years, education, linkedin_url, description, user_id)
    VALUES ('$first_name', '$last_name', '$location_preference', '$contract_type', '$looking_for', '$qualifications', '$start_date', '$available_hours', '$languages_spoken', '$skills', '$previous_job_titles', '$previous_companies', '$employment_duration_years', '$education', '$linkedin', '$description', '$user_id')";
$pdo->exec($sql);

header("Location: create_application.php");
?>