<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP variables</title>
</head>
<body>
    <h1>Using PHP</h1>
<?php
$userName = "TAFE granville"; //text/string type
$age = 12; //integer
$balance = 300.50; //float

echo "User name" . $userName ."<br>"; 
echo "Age: " . $age ."<br>"; 
echo "Balance: " .$balance . "<br>"; 
?>

<h2>Using print</h2> 

<?php
print "User name" . $userName ."<br>"; 
print "Age: " . $age ."<br>"; 
print "Balance: " .$balance . "<br>"; 
?>
</body>
</html>