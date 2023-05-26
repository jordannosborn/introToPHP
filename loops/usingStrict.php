<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP - enforcing 'strict'</title>
</head>
<body>
    <h1>USing php</h1>

<?php
function addNumbers($a, $b) { 
    return $a + $b 
} 
    echo "5, 10:" . addNumbers(5,10); 
    echo "<br>5.5, '20 days':" . addNumbers(5.5, "20 days"); 

?>
</body>
</html>