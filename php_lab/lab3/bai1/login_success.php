<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
   <?php session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        if($username === 'admin'){
            echo "<h2>Welcome " . ucfirst($username). " to main page!</h2>";
        }
        elseif($username === 'user'){
            echo "<h2>Welcome " . ucfirst($username). "to  page!</h2>";
        }
    }
    else{
        header('Location: index.php');
        exit;
    }
    
   
   
   ?><br>
    <a href="index.php">back</a>
    
</body>
</html>