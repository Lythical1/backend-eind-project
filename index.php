<?php
include_once "connector.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobspot - Find Your Next Job or Employee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <?php include_once "navbar.php" ?>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Find Your Next Job or Employee
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg text-gray-500">
                        Jobspot is the best place to find your next job or employee. With thousands of job listings and
                        resumes, we make it easy to find the perfect match.
                    </p>
                    <div class="mt-8 sm:flex">
                        <div class="rounded-md shadow">
                            <a href="create_account.php"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-10 lg:w-1/3">
                    <img class="w-full rounded-lg shadow-md"
                        src="https://tailwindui.com/img/component-images/full-width-with-sidebar.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="border rounded-lg p-8 shadow-md">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Find Jobs
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                        Search thousands of job listings from top companies in your area. Filter by location, salary,
                        and
                        more to find the perfect job for you.
                    </p>
                    <a href="find_job.php"
                        class="mt-10 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 sm:w-auto">
                        Find Jobs
                    </a>
                </div>
                <div class="border rounded-lg p-8 shadow-md">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Find Employees
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                        Post your job listing and get matched with qualified candidates. Filter by experience,
                        education,
                        and more to find the perfect employee for your company.
                    </p>
                    <a href="find_employee.php"
                        class="mt-4 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 sm:w-auto">
                        Find Employees
                    </a>
                </div>
                <div class="border rounded-lg p-8 shadow-md">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        About Us
                    </h2>
                    <p class="mt-10 text-lg text-gray-500">
                        Learn more about Jobspot and our mission to connect job seekers with employers. Read our story
                        and
                        meet our team.
                    </p>
                    <a href="about_us.php"
                        class="mt-6 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 sm:w-auto">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
