# PHP programing

## Prepare
- download vmware and using ubuntu_server-22.04:
  
![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/1dc01944-110c-40eb-ba76-029dcf4839c9)

- i'm using putty for easy to control:

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/83e9249b-e072-4df3-85a0-b85b61fffced)

- install php8.1_fpm and web server apache2

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/969fff1d-1451-4b24-85e4-5f1f3eeaf2cb)
# Lab 1: 

## Task 1: write the php scripts ==> php information_config  
- create dir name **ltt_php** and create **index.php** file 

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/00cbc278-3e84-4694-a764-7ba54fa024d3)

- php syntax

```
<?php
  echo phpinfo()
?> 
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/7c9e2912-068f-4104-a584-5d2ad154801a)


## Task 2: create an calc php 




- php code

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

</head>
<body>
     <h1>calculator</h1>
        <form action="" method="post">
             Enter a: <input type="text" name="a"><br><br>

             Enter b: <input type="text" name= "b"><br><br>

            <input type="submit" value="calculate" name="sub" style=width:60px;>
        </form>
        
        <?php
    // xử lý khi request được gửi đi bằng phương thức Post 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
         
        // Lấy giá trị của num1 và num2 từ form 
        $num1 = $_POST['a'];
        $num2 = $_POST['b'];

        // Kiểm tra nếu không phải là số, thì thông báo lỗi
        if(is_numeric($num1) || !is_numeric($num2)){
            echo "Please enter valid numbers!";
        } else {
            $addition = $num1 + $num2;
            $subtraction = $num1 - $num2;
            $multiple = $num1 * $num2;

            // Kiểm tra nếu num2 không bằng 0 trước khi thực hiện phép chia
            if($num2 != 0 ){
                $div = $num1 / $num2;
                echo "add = $addition<br>";
                echo "Subtraction = $subtraction<br>";
                echo "Multiple = $multiple<br>";
                echo "Div = $div<br>";
            } else { 
                echo "Can't divide by zero";
            }
        }
    } 
    ?>
        
</body>
</html>
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/70ef8262-7620-47f4-ad09-242733f54b53)





