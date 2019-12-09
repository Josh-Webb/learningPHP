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
    
</body>
</html>