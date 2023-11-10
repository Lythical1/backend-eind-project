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

$notification = "";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $pdo->prepare('SELECT id, password FROM users WHERE email = :email');

    $stmt->execute(['email' => $email]);
    $result = $stmt->fetch();

    if ($result && $password === $result['password']) {
        $_SESSION['user_id'] = $result['id'];
        header("Location: index.php");
        exit;
    } else {
        $notification = "Email or password is incorrect.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-8">Login</h2>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="text" class="border border-gray-400 p-2 w-full rounded-md" id="email" name="email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" class="border border-gray-400 p-2 w-full rounded-md" id="password" name="password" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Login</button>
                </div>
                <div>
                    <p class="text-center text-red-500">
                        <?php echo $notification; ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>