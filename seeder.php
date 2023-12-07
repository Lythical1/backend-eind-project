<?php

include_once "connector.php";

$query = file_get_contents("import.sql");
$pdo->exec($query);

$adminEmail = 'admin@admin.com';
$adminPassword = password_hash('admin', PASSWORD_DEFAULT);
$adminType = 'admin';

$insertAdminUser = $pdo->prepare("
    INSERT INTO users (email, password, type_of_user)
    VALUES (:email, :password, :type_of_user)
");

$insertAdminUser->bindParam(':email', $adminEmail);
$insertAdminUser->bindParam(':password', $adminPassword);
$insertAdminUser->bindParam(':type_of_user', $adminType);

$insertAdminUser->execute();


$jobPostings = [
    [
        'company_name' => 'Company A',
        'field' => 'Software Development',
        'job_type' => 'Full-time',
        'location' => 'City A',
        'hours_per_week' => 40,
        'hourly_rate' => 25.00,
        'description' => 'Lorem ipsum...',
        'user_id' => 1,
    ],
    [
        'company_name' => 'Company B',
        'field' => 'Data Science',
        'job_type' => 'Part-time',
        'location' => 'City B',
        'hours_per_week' => 20,
        'hourly_rate' => 30.00,
        'description' => 'Consectetur adipiscing elit...',
        'user_id' => 1,
    ],
    [
        'company_name' => 'Company C',
        'field' => 'Web Development',
        'job_type' => 'Contract',
        'location' => 'City C',
        'hours_per_week' => 30,
        'hourly_rate' => 22.00,
        'description' => 'Duis aute irure dolor...',
        'user_id' => 1,
    ],
];

$insertJobPosting = $pdo->prepare("
    INSERT INTO job_postings (company_name, field, job_type, location, hours_per_week, hourly_rate, description, user_id)
    VALUES (:company_name, :field, :job_type, :location, :hours_per_week, :hourly_rate, :description, :user_id)
");

foreach ($jobPostings as $jobPosting) {
    $insertJobPosting->execute($jobPosting);
}


$employeePostings = [
    [
        'qualifications' => 'Bachelor\'s in Computer Science',
        'bio' => 'I am a passionate developer...',
        'looking_for' => 'Software Development opportunities',
        'available_hours' => 20,
        'user_id' => 1,
    ],
    [
        'qualifications' => 'Master\'s in Data Science',
        'bio' => 'Experienced data scientist...',
        'looking_for' => 'Data Science projects',
        'available_hours' => 15,
        'user_id' => 1,
    ],
    [
        'qualifications' => 'Web Development Bootcamp',
        'bio' => 'Aspiring web developer...',
        'looking_for' => 'Entry-level web development roles',
        'available_hours' => 25,
        'user_id' => 1,
    ],
];

$insertEmployeePosting = $pdo->prepare("
    INSERT INTO employee_postings (qualifications, bio, looking_for, available_hours, user_id)
    VALUES (:qualifications, :bio, :looking_for, :available_hours, :user_id)
");

foreach ($employeePostings as $employeePosting) {
    $insertEmployeePosting->execute($employeePosting);
}

echo "Seeder executed successfully.\n";

?>
