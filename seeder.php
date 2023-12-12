<?php

include_once "connector.php";

$query = file_get_contents("import.sql");
$pdo->exec($query);

$adminEmail = 'admin@admin.com';
$adminCompanyName = 'admin';
$adminPassword = password_hash('admin', PASSWORD_DEFAULT);
$adminType = 'admin';

$insertAdminUser = $pdo->prepare("
    INSERT INTO users (email, password, type_of_user)
    VALUES (:email, :company_name, :password, :type_of_user)
");

$insertAdminUser->bindParam(':email', $adminEmail);
$insertAdminUser->bindParam(':company_name', $adminCompanyName);
$insertAdminUser->bindParam(':password', $adminPassword);
$insertAdminUser->bindParam(':type_of_user', $adminType);

$insertAdminUser->execute();

$query = file_get_contents("mock_data.sql");
$pdo->exec($query);

echo "Seeder executed successfully.\n";

?>
