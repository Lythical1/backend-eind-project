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
                                <input type="email" id="email" name="email"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block mb-2 font-semibold text-gray-700">Password:</label>
                                <input type="password" id="password" name="password"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                            </div>

                            <div>
                                <label for="phone_number" class="block mb-2 font-semibold text-gray-700">Phone
                                    Number:</label>
                                <input type="tel" id="phone_number" name="phone_number"
                                    class="form-input w-full px-4 py-2 rounded-lg border border-gray-400" required>
                                <small class="text-red-600" id="phoneError"></small>
                            </div>

                            <div class="mb-4">
                                <label for="user_type" class="block mb-2 font-semibold text-gray-700">User Type:</label>
                                <select id="user_type" name="user_type"
                                    class="form-select w-full px-4 py-2 rounded-lg border border-gray-400" required>
                                    <option value="">Select User Type</option>
                                    <option value="employee">Employee</option>
                                    <option value="company">Company</option>
                                </select>
                            </div>

                            <div id="employee_fields" class="hidden">
                                <div class="mb-4">
                                    <label for="first_name" class="block mb-2 font-semibold text-gray-700">First
                                        Name:</label>
                                    <input type="text" id="first_name" name="first_name"
                                        class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>

                                <div class="mb-4">
                                    <label for="last_name" class="block mb-2 font-semibold text-gray-700">Last
                                        Name:</label>
                                    <input type="text" id="last_name" name="last_name"
                                        class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>
                            </div>

                            <div id="company_fields" class="hidden">
                                <div class="mb-4">
                                    <label for="company_name" class="block mb-2 font-semibold text-gray-700">Company
                                        Name:</label>
                                    <input type="text" id="company_name" name="company_name"
                                        class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>
                                <div>
                                    <label for="company_size" class="block mb-2 font-semibold text-gray-700">Company
                                        Size:</label>
                                    <select name="company_size" id="company_size"
                                        class="form-select w-full px-4 py-2 rounded-lg border border-gray-400">
                                        <option value="">Select Company Size</option>
                                        <option value="1-50">1-50</option>
                                        <option value="51-100">51-100</option>
                                        <option value="101-150">101-150</option>
                                        <option value="151-200">151-200</option>
                                        <option value="200+">200+</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="industry"
                                        class="block mb-2 font-semibold text-gray-700">Industry:</label>
                                    <input type="text" id="industry" name="industry"
                                        class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>
                                <div>
                                    <label for="webiste" class="block mb-2 font-semibold text-gray-700">Webiste:</label>
                                    <input type="text" id="website" name="website"
                                        class="form-input w-full px-4 py-2 rounded-lg border border-gray-400">
                                </div>
                            </div>
                            <br>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
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
        document.getElementById("phone_number").addEventListener("input", function () {
            var phoneNumberInput = this.value.trim();
            var phonePattern = /^[0-9]{2} [0-9]{8}$/;

            var errorElement = document.getElementById("phoneError");

            if (phoneNumberInput === "" || phonePattern.test(phoneNumberInput)) {
                errorElement.textContent = "";
            } else {
                errorElement.textContent = "Please enter a valid phone number (e.g., 12 34567890).";
            }
        });
    </script>
</body>

</html>