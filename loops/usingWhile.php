<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP</title>
</head>
<body>
    <h1>Using PHP</h1>
<?php
$x = 1; 
while ($x <= 5){
    echo "x = $x"; 
    $x++; 
}

echo "<h4>Using += to increase by 10</h4>"; 
$x = 0; 
while ($x <= 100){
    echo "x = $x<br>"; 
    $x += 10; 
}
</body>
</html>