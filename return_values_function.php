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
function addNumbers($number1, $number2){
    $sum = $number1 + $number2;

    return $sum;
}
$result = addNumbers(56,72);  // 56+72
echo $result;  //print the sum of 56 and 72
echo "<br>";

$result = addNumbers(100,$result); // 100 + sum of 56 and 72
echo $result; //print the total sum
echo "<br>";
$result = addNumbers(898,$result); //898 + 100 + sum of 56 and 72
echo $result; // print the total sum
?>
    
</body>
</html>