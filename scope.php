<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$new = "Outside the function"; // global
function convert(){
    global $new; //if we dont use global with the variable then it will not change (outside to inside).
    $new = "Inside the function"; //local

}
echo $new;
echo "<br>";
convert();
echo $new;
?>
    
</body>
</html>