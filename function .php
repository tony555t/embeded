<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function  init(){
    say_Something();
    "<br>";
    calculate();
}
function say_Something(){
    echo "Hello World! do like it here";
}
say_Something();
function calculate(){
    echo 670+897;
}
init();
?>
    
</body>
</html>