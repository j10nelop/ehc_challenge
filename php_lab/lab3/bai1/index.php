<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            position: relative;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: left;
        }

       

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 10px;
        }

        .submit input {
            width: 100%;
            padding: 8px;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class = "login-container">
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST">
    <h1>Login</h1>
        <div class= "form-group">
            <label for="username">Username</label><br>
            <input type="text" name="user" id="user">
        </div><br>
        <div class= "form-group">
            <label for="password">Password</label><br>
            <input type="password" name="pass" id="pass">
        </div><br>
       <div class= "submit">
            <input type="submit" value="login" name= 'sub' style=width:50px;>
       </div>
</form>
<?php
        
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub'])){
            
            $username = $_POST['user'];
            $password = $_POST['pass'];
            
            $account = array(
                "admin" => "123123",
                "user"  => "123456"
            );
            
            if (array_key_exists($username, $account) && $account[$username] == $password){
               
                $_SESSION['username'] = $username;
                header("location: login_success.php");  
                die;
            }
            else{
                echo "<p class='error-message'>Login failed! Please try again.</p>";
            }
            
            
            
            
        }
        ?>
        </div>
    
</body>
</html>