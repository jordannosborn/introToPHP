<?php
function displayTimesTable($t){
    echo"<h4>$num times table</h4>";
    for($x = 1; $x <= 12; $x++){
        if($x == 7)
            continue; // ignores remaining commands in the block and returns to checking the condition, if condition is true continue executing loop 
            // break; this will exit the loop, regardless of the condition 
       echo "$num x $x = ". ($num * $x) ."<br>"; 
    }
   }
?>

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
    <form name="frm1" action="#" method="post">
    <input type="text" placeholder="Enter first name" value="firstname">
    <input type="text" placeholder="Enter last name" value="lastname">
    <input type="submit" name="btnSubmit">
</form>

<?php
function displayTimesTable(){
 $num = 0; 
 if (isset($_POST["btnSubmit"])){
     $num = $_POST["num"]; 
 }
 else{
    $num = 2; 
 }
 displayTimesTables($num); 
}
?>
</body>
</html>