<?php

include_once "connector.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Jobspot</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
<style>
    main {
        margin-top: 2px;
    }
</style>

</head>

<body class="bg-gray-100 font-sans">

    <?php include_once "navbar.php" ?>

    <main class="container mx-auto py-8 px-4">
        <h2 class="text-center text-4xl font-bold mb-4 text-indigo-700">Welcome to Jobspot</h2>
        <p class="text-center text-lg mb-8 text-gray-700">Here at Jobspot, we are revolutionizing the job search experience. We
            understand the importance of finding the perfect match between talented individuals and forward-thinking
            companies.</p>

        <h3 class="text-center text-2xl font-bold mb-4 text-indigo-700">Our Services</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded p-6 shadow-md">
                <h4 class="text-lg font-semibold mb-2 text-indigo-700">Advanced Algorithms</h4>
                <p class="text-gray-700">Precise job seeker and job opportunity matching using cutting-edge algorithms.</p>
            </div>

            <div class="bg-white rounded p-6 shadow-md">
                <h4 class="text-lg font-semibold mb-2 text-indigo-700">Dynamic Company Profiles</h4>
                <p class="text-gray-700">Showcasing values and work environment through interactive company profiles.</p>
            </div>

            <div class="bg-white rounded p-6 shadow-md">
                <h4 class="text-lg font-semibold mb-2 text-indigo-700">Streamlined Tools</h4>
                <p class="text-gray-700">Companies can post job applications and connect with candidates using our efficient tools.</p>
            </div>

            <div class="bg-white rounded p-6 shadow-md">
                <h4 class="text-lg font-semibold mb-2 text-indigo-700">Detailed Profiles</h4>
                <p class="text-gray-700">Comprehensive profiles for job seekers, including resumes and personal statements.</p>
            </div>

            <div class="bg-white rounded p-6 shadow-md">
                <h4 class="text-lg font-semibold mb-2 text-indigo-700">Community Building</h4>
                <p class="text-gray-700">Fostering a sense of community, allowing professionals to connect and share insights.</p>
            </div>
        </div>

        <p class="text-center text-xl font-bold mt-8 mb-4 text-indigo-700">"Jobspot: Igniting Careers, Connecting Futures"</p>
    </main>

</body>

</html>
