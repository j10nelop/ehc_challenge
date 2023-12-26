<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* CSS tùy chỉnh cho khung form */
        .form-container {
            max-width: 1405px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h3 {
            text-align: center;
        }
   
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-container">
                <!-- Tabs cho form đăng nhập và đăng ký -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Form đăng nhập -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <h3>Login</h3>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="user" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="pass" name="password" required>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="remember-me" name="remember-me">
                                <label for="remember-me" id="btn">Remember Me</label>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Log in</button>
                        </form>
                    </div>
                    <!-- Form đăng ký -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        
                        <h3> Signup for New Account?</h3>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="form-group">
                                <label for="register-username">User Name</label>
                                <input type="text" name="register-username" id="register-username" class="form-control" pattern="[A-Za-z0-9]+" title="Sai định dạng" required>
                            </div>

                            <div class="form-group">
                                <label for="register-email">User Email *</label>
                                <input type="email" name="register-email" id="register-email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="register-password">Password</label>
                                <input type="password" name="register-password" id="register-password" class="form-control" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <label for="register-cfpassword">Confirm Password</label>
                                <input type="password" name="register-cfpassword" id="register-cfpassword" class="form-control" placeholder="Confirm password" required>
                            </div>

                            <div class="form-group">
                                <label for="cars">Select Title</label>
                                <select name="cars" id="cars" class="form-control">
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label id="input1" forms-containeror="register-name">Full Name *</label>
                                <input id="input1" placeholder="John Weak" type="text" name="register-name" id="register-username" class="form-control" pattern="[a-zA-Z]+.{2,}" title="Tối thiểu 2 kí tự và tiếng việt không dấu." required>
                            </div>

                            <h3>Company Detail</h3>

                            <p>Provide detail about your company</p>

                            <div class="form-group">
                                <label for="register-companyname">Company Name</label>
                                <input type="text" name="register-companyname" id="register-companyname" class="form-control" pattern="[A-Za-z0-9]+" title="error" required>
                            </div>

                            <div class="checkbox-group">
                                <input type="checkbox" id="confirm" name="confirm" required>
                                <label for="confirm" class="btn">I am agree with registration</label>
                            </div>
                           
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$errors = [];

// Handling the registration process
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['register-username'];
    $email = $_POST['register-email'];
    $password = $_POST['register-password'];
    $confirmPassword = $_POST['register-cfpassword'];
    $agree = isset($_POST['confirm']);

    // Validation for registration fields
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errors[] = "Please fill in all fields.";
    }

    if (!$agree) {
        $errors[] = "Please agree to the registration terms.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // Simulated authentication data
    $accounts = [
        'admin' => '123123',
        'user' => '123456'
    ];

    // Check if the username exists in login credentials
    if (array_key_exists($username, $accounts)) {
        echo "<script>alert('Username already exists as a login. Please choose a different one.');</script>";
    } else {
        // If no errors and username doesn't exist in login credentials, proceed with registration
        if (empty($errors)) {
            echo "<script>alert('Registration successful!');</script>";
            // Perform actions after successful registration
            // ...
        } else {
            // Display registration errors using JavaScript
            echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
        }
    }
}

// Handling the login process
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Login logic
    // ...

    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    $accounts = [
        'admin' => '123123',
        'user' => '123456'
    ];

    if (array_key_exists($loginUsername, $accounts) && $accounts[$loginUsername] === $loginPassword) {
        // Successful login actions
        echo "<script>alert('Login successful!');</script>";
        // Perform actions after successful login
        // ...
    } else {
        echo "<script>alert('Login failed. Please check your login credentials.');</script>";
    }
}
?>

   


</body>
</html>
