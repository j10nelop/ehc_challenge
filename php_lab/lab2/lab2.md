# Lab 2
## task 1: create an ax+b =0 Equation php




- php code
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The_Equation</title>
    <h1>Ax+B=0 Equation</h1>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="a" placeholder="a" style="width: 50px;"> x +
        <input type="text" name="b" placeholder="b" style="width: 50px;"> = 0<br><br>
        <input type="submit" value="Submit" name="sub">
    </form>
        
    <?php  
        if(isset($_POST['sub'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            
            if($a != 0){
                $result = -$b / $a;
                echo "The equation has a solution: x = $result";
            } elseif($b != 0) {
                echo "The equation has no solution";
            } else {
                echo "The equation has infinite solutions";
            }
        }
    ?>
</body>
</html>
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/df94d2cd-4a46-48ef-9f3a-def6cc49c042)


## task 2: create php calc sum continuous 

- php code 

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The_Sum</title>
    <h1>Sum 1 -> n </h1>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Enter n</label>
        <input type="text" name="n" placeholder="n">
        <input type="submit" value="calculate" name="sub">       
    </form>
        
    <?php  
        if(isset($_POST['sub'])){
            $n =  $_POST['n'];
            $sum = 0 ;
            
            // Kiểm tra n có phải là số nguyên dương không
            if(is_numeric($n) && $n > 0){
                for($i = 1; $i <= $n; $i++){
                    $sum += $i;
                }
                echo "Sum: $sum";
            } else {
                echo "Please enter a positive integer!";
            }
        }
    ?>
</body>
</html>

```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/b720ac40-1a46-428f-a1ae-d6d92c13b53f)


## task 3: factorial
- php code

```
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The_factorial</title>
    <h1>Factorial </h1>
</head>
<body>
    <form action="<?php ['PHP_SELF'] ?> " method = "post">
        <label for="n">Enter n</label>
        <input type="text" name = 'n' placeholder="n">
        <input type="submit" name = 'submit' value = "calculate">
    </form>
        
        <?php  
             if(isset($_POST['n'])){
                $n = $_POST['n'];
                $factorial = 1; 
                if(is_numeric($n)){
                    for($i = 1 ; $i <= $n; $i++){
                        $factorial *= $i ;
                    }
                    echo "giai thừa $n là : $factorial";
                }
             }
        ?>

        
</body>
</html>
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/d1955d2c-48c7-47d9-85ce-4b28bc8545f4)

## task 4 : find minmax array 
- php code

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minmax_array</title>
    <h1>minmax array</h1>
</head>

        
        <?php  
             $my_array = array('EHC', 'HackYourLimits', 'Training');
             $lengths = array_map('strlen', $my_array);
             
           
            
             $minLength = min($lengths); // Tìm độ dài ngắn nhất
             $maxLength = max($lengths); // Tìm độ dài dài nhất
             
             echo "min_length = $minLength; max_length = $maxLength;";
             
        ?>

        
</body>
</html>

```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/ce82db98-92a3-480c-88de-fd8123f18196)
