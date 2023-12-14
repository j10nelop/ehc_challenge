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


$$ Task 2: create an calc php 

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/7f4e9025-88e2-4b18-a827-8082b4662932)


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
    <h1>Calculator Machine</h1>
    <form method="post" action="index.php">
        <label>Enter number 1:</label><br>
        <input type="number" name="num1"><br>
     
        <label>Enter number 2:</label><br>
        <input type="number" name="num2"><br>

        <input type="submit" value="Submit">  
          
    </form>
         
    <?php
// xử lý khi request được gửi đi bằng phương thức Post 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
         
            //lay gia tri cua num1 va num2 từ form 
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        // kiẻm tra số hay không
        if(is_numeric($num1) && is_numeric($num2)){
             $addition = $num1 + $num2;
             $subtraction = $num1 - $num2;
             $multiple = $num1 * $num2;
        }
            // điều kiện chia mẫu khác 0
            if($num2 != 0 ){
                $div = $num1 / $num2;
                echo "add= $addition<br>";
               echo  "Subtraction= $subtraction<br>";
               echo  "mutiple = $multiple<br>";
               echo "div = $div<br>";
               
            }
            else{ 
                echo "can't div";
            }
         } 
    ?>
</body>
</html>

```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/018873e0-e168-4d48-a49b-c2c6772b6c37)


# Lab 2
## task 1: create an ax+b =0 Equation php



