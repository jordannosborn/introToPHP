<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP - indexed arrays</title>
</head>
<body>
    <h1>Using PHP - indexed arrays</h1>
<?php
$subjects = array("Database", "JavaScript", "HTML", "CSS", "ICT analysis", "FTP"); 
var_dump($subjects); 
$arrLen = count($subjects); 
echo "<br>Array length: $arrLen"; 
for($i = 0; $i < $arrLen; $i++)
    echo "subject[$i] name: $subjects[$i]<br>"; 
?>
</body>
</html>