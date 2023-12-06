<?php

include_once "connector.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $user_type = $_POST['user_type'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $company_size = $_POST['company_size'];
    $industry = $_POST['industry'];
    $website = $_POST['website'];

    try {
        // Prepare the SQL statement
        $sql = "INSERT INTO users (email, password, phone_number, type_of_user, first_name, last_name, company_name, company_size, industry, website)
                VALUES (:email, :password, :phone_number, :user_type, :first_name, :last_name, :company_name, :company_size, :industry, :website)";

        $stmt = $pdo->prepare($sql);

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Bind parameters to statement variable
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':user_type', $user_type);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':company_name', $company_name);
        $stmt->bindParam(':company_size', $company_size);
        $stmt->bindParam(':industry', $industry);
        $stmt->bindParam(':website', $website);


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
