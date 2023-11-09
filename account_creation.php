<?php

session_start();

$host = "localhost";
$dbname = "netland";
$username = "bit_academy";
$password = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

$name = $_GET['name'];
$password = $_GET['password'];


try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Prepare the SQL statement
    $sql = "INSERT INTO users (username, password, email, type_of_user, first_name, last_name, company_name)
            VALUES (:name, :password,  :email, :user_type, :first_name, :last_name, :company_name)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $hashedPassword);

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Execute the statement
    $stmt->execute();

    // Redirect the user to a success page
    header("Location: index.php");
    exit();

} catch (\PDOException $e) {
    // Handle any database errors
    echo "Database Error: " . $e->getMessage();
}