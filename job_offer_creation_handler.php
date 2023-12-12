<?php

include "connector.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT company_name FROM users WHERE id = $user_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$company_name = $result['company_name'];

$contracct_type = $_POST['contract_type'];
$field = $_POST['field'];
$hours_per_week = $_POST['hours_per_week'];
$hourly_rate = $_POST['hourly_rate'];
$location = $_POST['location'];
$start_date = $_POST['start_date'];
$description = $_POST['description'];

$sql = "INSERT INTO job_postings (company_name, contract_type, field, hours_per_week, hourly_rate, location, start_date, description, user_id)
    VALUES ('$company_name', '$contracct_type', '$field', '$hours_per_week', '$hourly_rate', '$location', '$start_date', '$description', '$user_id')";
$pdo->exec($sql);

header("Location: create_job.php");

?>