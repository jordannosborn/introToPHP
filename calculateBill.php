<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Bill - no forms</title>
</head>
<body>
    <h1>Calculate Bill - no forms</h1>
<?php 
$itemName = "Bread"; 
$itemRate = 3.0;
$itemQty = 3; 
$billAmount = $itemRate * $itemQty
var_dump($itemName); 

echo "Item purchased:: $itemName <br>"; 
echo "Item rate: $itemRate <br>"; 
echo "Bill amount for $itemQty $itemName is \$$billAmount <br>"; 

?> 
</body>
</html>