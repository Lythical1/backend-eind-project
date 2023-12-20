<?php

include_once "connector.php";
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Get user_id from session
$user_id = $_SESSION['user_id'];

// Fetch user details from the users table
$user_query = "SELECT * FROM users WHERE id = :user_id";
$user_statement = $pdo->prepare($user_query);
$user_statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$user_statement->execute();
$user = $user_statement->fetch(PDO::FETCH_ASSOC);

// Determine the user type (company or employee)
$user_type = $user['type_of_user'];

$sql = "SELECT id, qualifications, location_preference, contract_type, looking_for, available_hours, start_date, skills, languages_spoken, previous_job_titles, previous_companies, employment_duration_years, education, linkedin_url, description FROM employee_postings WHERE user_id = $user_id";
$result = $pdo->query($sql);

if (isset($_POST['delete_application'])) {
    $applicationId = $_POST['application_id'];

    $sql = "DELETE FROM employee_postings WHERE id = $applicationId";
    $pdo->query($sql);

    echo "<meta http-equiv='refresh' content='0'>";
    exit();
}

// Display the job postings
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Postings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
</head>

<body>
    <?php include_once "navbar.php"; ?>


    <div class="flex">
        <!-- Left div with job cards -->
        <div class="w-1/3 p-4" style="overflow:scroll; height:92vh; margin-left:50px;">
            <?php if ($user_type == 'employee' || $user_type == 'admin') {
                if ($result->rowCount() > 0):
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                        <div class="bg-white rounded-lg shadow-lg p-4 mb-4 cursor-pointer" onclick="showDetails(<?= $row['id']; ?>)"
                            x-data="{ showDetails: false }">
                            <h2 class="text-lg font-bold mb-2">
                                <?= $row["qualifications"]; ?>
                            </h2>
                            <p class="text-gray-700 mb-2">
                                <?= $row["looking_for"]; ?>
                            </p>
                            <p class="text-gray-700 mb-2">
                                <?= $row["available_hours"]; ?> hours
                            </p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" @click="showDetails = true">View
                                Details</button>
                        </div>
                    <?php endwhile;
                endif;
            } ?>
        </div>
        <!-- Right div with detailed job information -->
        <div class="w-2/3 p-4" x-show="showDetails"
            style="display: flex; margin-right: 100px; margin-left: 50px; justify-content: center; align-items: center;">
            <!-- Detailed job information component -->
            <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
                <?php
                try {
                    $sql = "SELECT id, qualifications, description, looking_for, available_hours FROM employee_postings";
                    $result = $pdo->query($sql);
                    // Loop through the job information and create detailed job information for each job
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div id="job-details-<?= $row["id"]; ?>" class="job-details" style="display: none;">
                                <h2 class="text-lg font-bold mb-2">
                                    <?= $row["qualifications"]; ?>
                                </h2>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["looking_for"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["available_hours"]; ?> hours
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["description"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["looking_for"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["available_hours"]; ?> hours
                                </p>
                                <form method="POST" action="my_applications.php">
                                    <input type="hidden" name="application_id" value="<?= $row["id"]; ?>">
                                    <button type="submit" name="delete_application"
                                        class="bg-red-500 text-white px-4 py-2 rounded-lg">Delete Application</button>
                                </form>
                            </div>
                            <?php
                        }
                    }
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        function showDetails(id) {
            // Hide all job details
            const jobDetails = document.querySelectorAll('.job-details');
            jobDetails.forEach((detail) => {
                detail.style.display = 'none';
            });

            // Show the selected job detail
            const selectedJobDetail = document.getElementById(`job-details-${id}`);
            selectedJobDetail.style.display = 'block';
        }
    </script>
</body>

</html>