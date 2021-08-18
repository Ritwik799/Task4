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
function init(){
    say_Something();
    echo "<br>";
    calculate();
}

function calculate(){
    echo 56 + 69 + 76 + 85 + 89;
}

function say_Something(){
    echo "Hello Ritwik, What is the total marks did you score in your exam ?";
    echo "<br>";
    echo "Hello sir I scored: ";
}

init();

?>
    
</body>
</html>