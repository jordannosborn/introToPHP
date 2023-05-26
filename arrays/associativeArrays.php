<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP - Associative arrays</title>
</head>
<body>
    <h1>Using PHP - Assosiative arrays</h1>
<?php
$subjects = array("Database"=>18, "JavaScript"=>9, "HTML"=>9, "CSS"=>9, "ICT analysis"=>9, "FTP"=>9); 
var_dump($subjects); 
echo "<br>";

foreach($subjects as $subject => $duration){
    echo "$subject runs for $duration<br>"; 
    $sum += $duration;
}
echo"<br>total duration: $sum weeks"; 
?>
</body>
</html>