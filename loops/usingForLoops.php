<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP</title>
</head>
<body>
    <h1>using PHP - for loops</h1>
<?php
echo"<h4>2 times table</h4>";
for($x = 1; $x <= 12; $x++){
    echo "2 x $x = ". (2 * $x) ."<br>"; 
}
?>
</body>
</html>