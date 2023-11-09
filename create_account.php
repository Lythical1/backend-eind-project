<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Account</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="account_creation.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="user_type">User Type:</label>
                                <select id="user_type" name="user_type" class="form-control" required>
                                    <option value="">Select User Type</option>
                                    <option value="employee">Employee</option>
                                    <option value="company">Company</option>
                                </select>
                            </div>

                            <div id="employee_fields" style="display: none;">
                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control">
                                </div>
                            </div>

                            <div id="company_fields" style="display: none;">
                                <div class="form-group">
                                    <label for="company_name">Company Name:</label>
                                    <input type="text" id="company_name" name="company_name" class="form-control">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-+3Jq3JjVXQ6QJZ5ZQv6zvJZzJ6vL5JZb8vZvJ9eZJz5Qvz5zJZ7zJZzJZzJZzJZz"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const userTypeSelect = document.getElementById('user_type');
        const employeeFields = document.getElementById('employee_fields');
        const companyFields = document.getElementById('company_fields');

        userTypeSelect.addEventListener('change', () => {
            if (userTypeSelect.value === 'employee') {
                employeeFields.style.display = 'block';
                companyFields.style.display = 'none';
            } else if (userTypeSelect.value === 'company') {
                employeeFields.style.display = 'none';
                companyFields.style.display = 'block';
            } else {
                employeeFields.style.display = 'none';
                companyFields.style.display = 'none';
            }
        });
    </script>
</body>

</html>