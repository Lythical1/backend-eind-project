<?php

include "connector.php";

$company_name = $_POST[''];

$job_type = $_POST['job_type'];
$field = $_POST['field'];
$hours_per_week = $_POST['hours_per_week'];
$hourly_rate = $_POST['hourly_rate'];
$location = $_POST['location'];
$start_date = $_POST['start_date'];
$description = $_POST['description'];

$sql = "INSERT INTO job_postings (job_type, field, hours_per_week, hourly_rate, location, start_date, description) VALUES ('$job_type', '$field', '$hours_per_week', '$hourly_rate', '$location', '$start_date', '$description')";
$pdo->exec($sql);

header("Location: create_job.php");

?>