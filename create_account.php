<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <?php include_once "navbar.php" ?>

    <div class="container mx-auto">
        <div class="flex justify-center mt-5">
            <div class="w-full md:w-1/2">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h4 class="text-lg font-semibold text-gray-700">Create Account</h4>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="account_creation_handler.php">

                            <div class="mb-4">
                                <label for="email" class="block mb-2 font-semibold text-gray-700">Email:</label>
                                <input type="email" id="email" name="email" class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block mb-2 font-semibold text-gray-700">Password:</label>
                                <input type="password" id="password" name="password" class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="user_type" class="block mb-2 font-semibold text-gray-700">User Type:</label>
                                <select id="user_type" name="user_type" class="form-select w-full px-4 py-2 rounded-lg border border-gray-400" required>
                                    <option value="">Select User Type</option>
                                    <option value="employee">Employee</option>
                                    <option value="company">Company</option>
                                </select>
                            </div>

                            <div id="employee_fields" class="hidden">
                                <div class="mb-4">
                                    <label for="first_name" class="block mb-2 font-semibold text-gray-700">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>

                                <div class="mb-4">
                                    <label for="last_name" class="block mb-2 font-semibold text-gray-700">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>
                            </div>

                            <div id="company_fields" class="hidden">
                                <div class="mb-4">
                                    <label for="company_name" class="block mb-2 font-semibold text-gray-700">Company Name:</label>
                                    <input type="text" id="company_name" name="company_name" class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>
                            </div>

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <script>
        const userTypeSelect = document.getElementById('user_type');
        const employeeFields = document.getElementById('employee_fields');
        const companyFields = document.getElementById('company_fields');

        userTypeSelect.addEventListener('change', () => {
            if (userTypeSelect.value === 'employee') {
                employeeFields.classList.remove('hidden');
                companyFields.classList.add('hidden');
            } else if (userTypeSelect.value === 'company') {
                employeeFields.classList.add('hidden');
                companyFields.classList.remove('hidden');
            } else {
                employeeFields.classList.add('hidden');
                companyFields.classList.add('hidden');
            }
        });
    </script>
</body>

</html>