<nav class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="text-gray-900 text-2xl font-bold">Jobspot</a>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <a href="index.php"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">Home</a>
                <?php if (isset($_SESSION['type_of_user']) && ($_SESSION['type_of_user'] == 'employee' || $_SESSION['type_of_user'] == 'admin')) { ?>
                    <a href="find_job.php"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">Find
                        Jobs</a>
                    <a href="profile.php"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">Profile</a>
                    <a href="create_application.php"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">Create
                        Application</a>
                <?php } ?>
                <?php if (isset($_SESSION['type_of_user'])){ ?>
                    <a href="my_applications.php"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">My
                        Applications</a>
                <?php } ?>
                <?php if (isset($_SESSION['type_of_user']) && ($_SESSION['type_of_user'] == 'company' || $_SESSION['type_of_user'] == 'admin')) { ?>
                    <a href="create_job.php"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">Create
                        Job</a>
                    <a href="find_employee.php"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">Find
                        Employees</a>
                <?php } ?>
                <a href="about_us.php"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 hover:text-gray-500 focus:outline-none focus:text-gray-500">About
                    Us</a>
            </div>
            <div class="flex items-center">
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <a href="logout.php"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Logout</a>
                <?php } else { ?>
                    <a href="login.php"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">Login</a>
                    <a href="create_account.php"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Register</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>