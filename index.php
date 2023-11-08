<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" class="<?php echo $theme_class; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobspot - Find Your Next Job or Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once "navbar.php" ?>

    <div class="container text-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Find Your Next Job or Employee</h1>
                <p class="lead">Jobspot is the best place to find your next job or employee. With thousands of job listings
                    and resumes, we make it easy to find the perfect match.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Find Jobs</h2>
                <p>Search thousands of job listings from top companies in your area. Filter by location, salary, and
                    more to find the perfect job for you.</p>
                <a class="btn btn-secondary" href="#" role="button">Find Jobs</a>
            </div>
            <div class="col-md-4">
                <h2>Find Employees</h2>
                <p>Post your job listing and get matched with qualified candidates. Filter by experience, education, and
                    more to find the perfect employee for your company.</p>
                <a class="btn btn-secondary" href="#" role="button">Find Employees</a>
            </div>
            <div class="col-md-4">
                <h2>About Us</h2>
                <p>Learn more about Jobspot and our mission to connect job seekers with employers. Read our story and
                    meet our team.</p>
                <a class="btn btn-secondary" href="#" role="button">About Us</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
</body>

</html>