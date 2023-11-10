<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Jobspot</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="find_job.php">Find Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="find_employee.php">Find Employees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about_us.php">About Us</a>
            </li>
        </ul>
        <!-- <div class="form-inline my-2 my-lg-0">
            <button id="dark-mode-toggle" class="btn btn-outline-dark my-2 my-sm-0" type="button">Toggle Dark Mode</button>
        </div> -->
        <div>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <a href="logout.php" class="btn btn-outline-danger">Logout</a>
            <?php } else { ?>
                <a href="login.php" class="btn btn-outline-primary">Login</a>
                <a href="create_account.php" class="btn btn-outline-success">Register</a>
            <?php } ?>
        </div>
    </div>
</nav>
