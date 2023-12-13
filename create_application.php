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
                        <form method="POST" action="application_creation_handler.php">

                            <div class="mb-4">
                                <label for="location_preference" class="block mb-2 font-semibold text-gray-700">Contract
                                    type:</label>
                                <select id="location_preference" name="location_preference"
                                    class="form-select w-full px-4 py-2 rounded-lg border border-gray-400" required>
                                    <option value="">Select location preference</option>
                                    <option value="Remote">Remote</option>
                                    <option value="On-site">On-site</option>
                                    <option value="Remote or On-site">Remote or On-site</option>
                                </select>
                            </div>

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
                                <label for="looking_for" class="block mb-2 font-semibold text-gray-700">Looking
                                    for:</label>
                                <input type="text" id="looking_for" name="looking_for"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="qualifications"
                                    class="block mb-2 font-semibold text-gray-700">Qualifications:</label>
                                <input type="text" id="qualifications" name="qualifications"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="start_date" class="block mb-2 font-semibold text-gray-700">Start
                                    date:</label>
                                <input type="date" id="start_date" name="start_date" value="<?= $date ?>"
                                    min="<?= $date ?>"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="available_hours" class="block mb-2 font-semibold text-gray-700">Available
                                    hours:</label>
                                <input type="number" id="available_hours" name="available_hours" min="1" max="80"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="skills" class="block mb-2 font-semibold text-gray-700">Skills:</label>
                                <input type="text" id="skills" name="skills"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="languages_spoken" class="block mb-2 font-semibold text-gray-700">Spoken
                                    languages:</label>
                                <input type="text" id="languages_spoken" name="languages_spoken"
                                class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                            </div>
                            
                            <div>
                                <label for="previous_job_titles" class="block mb-2 font-semibold text-gray-700">Previous
                                    job
                                    titles:</label>
                                <input type="text" id="previous_job_titles" name="previous_job_titles"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                            </div>

                            <div>
                                <label for="previous_companies" class="block mb-2 font-semibold text-gray-700">Previous
                                    companies:</label>
                                <input type="text" id="previous_companies" name="previous_companies"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                            </div>

                            <div>
                                <label for="employment_duration_years"
                                    class="block mb-2 font-semibold text-gray-700">Total years of employment:</label>
                                <input type="number" id="employment_duration_years" name="employment_duration_years"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                            </div>

                            <div>
                                <label for="education" class="block mb-2 font-semibold text-gray-700">Education:</label>
                                <input type="text" id="education" name="education"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                            </div>

                            <div>
                                <label for="linkedin_url" class="block mb-2 font-semibold text-gray-700">LinkedIn
                                    Url:</label>
                                <input type="text" id="linkedin_url" name="linkedin_url"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="description"
                                    class="block mb-2 font-semibold text-gray-700">Description:</label>
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