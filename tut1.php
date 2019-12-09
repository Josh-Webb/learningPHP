<?php
$f_name = "Josh";
$l_name = "Webb";
$age = 28;
$heigh = 1.87;
$can_vote = true;
$address = array('street'=> '123 Main St',
'city'=> 'Nashville');
$state = NULL;
define('PI', 3.1415);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>
   <p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>
    <form action="tut1.php" method="get">
        <label>Your State : </label>
        <input type="text" name="state" /><br>
        <label>Number 1 : </label>
        <input type="text" name="num-1" /><br>
        <label>Number 2 : </label>
        <input type="text" name="num-2" /><br>
        <input type="submit" value="Submit" />
    </form>
    <?php
     if(isset($_GET) && array_key_exists('state', $_GET)){
         $state = $_GET['state'];
         if(isset($state) && !empty($state)){
             echo 'You live in ' . $state . '<br>';
             echo "$f_name lives in $state<br>";
         }
         if(count($_GET) >= 3){
             $num_1 = $_GET['num-1'];
             $num_2 = $_GET['num-2'];
             echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . 
             "<br>";
             echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . 
             "<br>";
             echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . 
             "<br>";
             echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . 
             "<br>";
             echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . 
             "<br>";
             echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . 
             "<br>";
             echo "Increment $num_1 = " . ($num_1++) . "<br>";
             echo "Decrement $num_1 = " . ($num_1--) . "<br>";
             $num_1 += 1;
                $num_1 -= 1;
                $num_1 *= 1;
                $num_1 /= 1;
                $num_1 %= 1;

             echo "abs(-5) = " . abs(-5) . "<br>";
            echo "ceil(4.45) = " . ceil(4.45) . "<br>";
            echo "floor(4.45) = " . floor(4.45) . "<br>";
            echo "round(4.45) = " . round(4.45) . "<br>";
            echo "max(4,5) = " . max(4,5) . "<br>";
            echo "min(4,5) = " . min(4,5) . "<br>";
            echo "pow(4,2) = " . pow(4,2) . "<br>"; # 4 raised to the power of 2
            echo "sqrt(16) = " . sqrt(16) . "<br>"; # Square Root
            echo "exp(1) = " . exp(1) . "<br>"; # Exponent of e
            echo "log(e) = " . log(exp(1)) . "<br>"; # Logarithm
            echo "log10(10) = " . log10(exp(10)) . "<br>"; # Base 10 Logarithm
            echo "PI = " . pi() . "<br>"; # PI
            echo "hypot(10,10) = " . hypot(10,10) . "<br>"; # Hypotenuse
            echo "deg2rad(90) = " . deg2rad(90) . "<br>"; # Degrees to radians
            echo "rad2deg(1.57) = " . rad2deg(1.57) . "<br>";
            echo "mt_rand(1,50) = " . mt_rand(1,50) . "<br>"; # Fast random num
            echo "rand(1,50) = " . rand(1,50) . "<br>"; # Original random num
            echo "Max Random = " . mt_getrandmax() . "<br>"; # Max random num
            echo "is_finite(10) = " . is_finite(10) . "<br>";
            echo "is_infinite(log(0)) = " . is_infinite(log(0)) . "<br>";
            echo "is_numeric(\"10\") = " . is_numeric("10") . "<br>";
         }
     }
     ?>
</body>
</html>