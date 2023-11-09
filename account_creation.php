<?php

session_start();

$host = "localhost";
$dbname = "jobspot";
$username = "bit_academy";
$password = "bit_academy";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $user = $username;
    $pass = $password;
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];

    try {
        // Create a PDO instance
        $pdo = new PDO($dsn, $user, $pass, $options);

        // Prepare the SQL statement
        $sql = "INSERT INTO users (username, password, email, type_of_user, first_name, last_name, company_name)
                VALUES (:name, :password, :email, :user_type, :first_name, :last_name, :company_name)";

        $stmt = $pdo->prepare($sql);

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':user_type', $user_type);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':company_name', $company_name);

        // Execute the statement
        $stmt->execute();

        // Redirect the user to a success page or do something else
        header("Location: index.php");
        exit();

    } catch (\PDOException $e) {
        // Handle any database errors
        echo "Database Error: " . $e->getMessage();
    }
}
?>