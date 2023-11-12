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
?>

<!DOCTYPE html>
<html lang="en" class="<?php echo $theme_class; ?>">

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
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div>
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
                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden"
                        width="784" height="404" fill="none" viewBox="0 0 784 404">
                        <defs>
                            <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20"
                                height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                    fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                    </svg>
                    <img class="relative mx-auto" width="490" src="https://tailwindui.com/img/component-images/full-width-with-sidebar.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Find Jobs
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Search thousands of job listings from top companies in your area. Filter by location, salary, and
                    more to find the perfect job for you.
                </p>
                <a href="find_job.php"
                    class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 sm:w-auto">
                    Find Jobs
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Find Employees
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Post your job listing and get matched with qualified candidates. Filter by experience, education,
                    and more to find the perfect employee for your company.
                </p>
                <a href="find_employee.php"
                    class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 sm:w-auto">
                    Find Employees
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    About Us
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Learn more about Jobspot and our mission to connect job seekers with employers. Read our story and
                    meet our team.
                </p>
                <a href="about_us.php"
                    class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 sm:w-auto">
                    About Us
                </a>
            </div>
        </div>
    </div>

</body>

</html>