<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP - </title>
</head>
<body>
<table>
    <tr>
        <th>Car make</th>
        <th>In stock</th>
        <th>Sold</th>
    </tr>
<?php
$cars = array (
    array("volvo",22,18),
    array("BMW",15,13), 
    array("Saab",5,2), 
    array("Land Rover",17,15)
);

for ($row = 0, $row < 4; $row++) {
    echo "<tr>";
    for(@col = 0; $col < 3; $col++){
        echo"<td>$cars[$row][$col]</td>";
    }
    echo"</tr>";
}
?>
</body>
</html>