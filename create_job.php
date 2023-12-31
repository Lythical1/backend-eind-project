<?php

session_start();
$date = date('Y-m-d');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create your Job offer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <?php include_once "navbar.php" ?>

    <div class="container mx-auto">
        <div class="flex justify-center mt-5">
            <div class="w-full md:w-1/2">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h4 class="text-lg font-semibold text-gray-700">Create Job offer</h4>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="job_offer_creation_handler.php">

                            <div class="mb-4">
                                <label for="contract_type" class="block mb-2 font-semibold text-gray-700">Contract
                                    type:</label>
                                <select id="contract_type" name="contract_type"
                                    class="form-select w-full px-4 py-2 rounded-lg border border-gray-400" required>
                                    <option value="">Select contract type</option>
                                    <option value="full-time">Full-time</option>
                                    <option value="part-time">Part-time</option>
                                    <option value="freelance">Freelance</option>
                                    <option value="internship">Internship</option>
                                    <option value="temporary">Temporary</option>
                                    <option value="volunteer">Volunteer</option>
                                </select>
                            </div>

                            <div>
                                <label for="field" class="block mb-2 font-semibold text-gray-700">Field:</label>
                                <input type="text" id="field" name="field"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="hours_per_week" class="block mb-2 font-semibold text-gray-700">Hours per
                                    week:</label>
                                <input type="number" id="hours_per_week" name="hours_per_week" min="0" max="80"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="hourly_rate" class="block mb-2 font-semibold text-gray-700">Salary per
                                    hour:</label>
                                <input type="number" id="hourly_rate" name="hourly_rate"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="location" class="block mb-2 font-semibold text-gray-700">Location:</label>
                                <input type="text" id="location" name="location"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="start_date" class="block mb-2 font-semibold text-gray-700">Start
                                    date:</label>
                                <input type="date" id="start_date" name="start_date" value="<?= $date ?>"
                                    min="<?= $date ?>"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block mb-2 font-semibold text-gray-700">Job
                                    description:</label>
                                <input type="text" id="description" name="description"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <br>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                Create offer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>