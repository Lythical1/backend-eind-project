<?php

include_once "connector.php";

$sql = "SELECT id, company_name, field, contract_type, location, hours_per_week, hourly_rate, description FROM job_postings";
$result = $pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Jobs</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Tailwind JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/alpine.js"></script>
    <script>
        function showDetails(id) {
            // Hide all detailed job information
            var details = document.getElementsByClassName("job-details");
            for (var i = 0; i < details.length; i++) {
                details[i].style.display = "none";
            }

            // Show the detailed job information for the selected job
            var detail = document.getElementById("job-details-" + id);
            detail.style.display = "block";
        }
    </script>
</head>



<body>

    <?php include_once "navbar.php" ?>

    <div class="flex">
        <!-- Left div with job cards -->
        <div class="w-1/3 p-4" style="overflow:scroll; height:92vh; margin-left:50px;">
            <?php if ($result->rowCount() > 0): ?>
                <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="bg-white rounded-lg shadow-lg p-4 mb-4 cursor-pointer" onclick="showDetails(<?= $row['id']; ?>)"
                        x-data="{ showDetails: false }">
                        <h2 class="text-lg font-bold mb-2">
                            <?= $row["company_name"]; ?>
                        </h2>
                        <p class="text-gray-700 mb-2">
                            <?= $row["field"]; ?>
                        </p>
                        <p class="text-gray-700 mb-2">
                            <?= $row["contract_type"]; ?>
                        </p>
                        <p class="text-gray-700 mb-2">
                            <?= $row["location"]; ?>
                        </p>
                        <p class="text-gray-700 mb-2">
                            <?= $row["hours_per_week"]; ?> hours per week
                        </p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" @click="showDetails = true">View
                            Details</button>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- Right div with detailed job information -->
        <div class="w-2/3 p-4" x-show="showDetails"
            style="display: flex; margin-right: 100px; margin-left: 50px; justify-content: center; align-items: center;">
            <!-- Detailed job information component -->
            <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
                <?php
                try {
                    $sql = "SELECT id, company_name, field, contract_type, location, hours_per_week, hourly_rate, description, start_date FROM job_postings";
                    $result = $pdo->query($sql);
                    // Loop through the job information and create detailed job information for each job
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div id="job-details-<?= $row["id"]; ?>" class="job-details" style="display: none;">
                                <h2 class="text-lg font-bold mb-2">
                                    <?= $row["company_name"]; ?>
                                </h2>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["field"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["contract_type"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["location"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["start_date"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["hours_per_week"]; ?> hours per week
                                </p>
                                <p class="text-gray-700 mb-2">$
                                    <?= $row["hourly_rate"]; ?> per hour
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?= $row["description"]; ?>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    <?php if (isset($_SESSION['type_of_user']) && ($_SESSION['type_of_user'] == 'employee' || $_SESSION['type_of_user'] == 'admin')) { ?>
                                        <a href="apply.php?id=<?= $row["id"]; ?>"
                                            class="bg-blue-500 text-white px-4 py-2 rounded-lg">Apply</a>
                                    <?php } ?>
                                </p>
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
</body>

</html>