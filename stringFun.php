<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $string ="hello student do you like the class";
    echo strlen($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo strtolower($string);
    echo "<br>";
    echo substr($string,0,5);
    echo "<br>";
    echo strpos($string,"student");
    echo "<br>";
    echo trim($string);
    echo "<br>";
    $explodeArray=explode("",$string);
    print_r($explodeArray);
    echo "<br>";
    $implodeString=implode(",",$explodedArray);
    echo $implodeString';
    






    ?>
    
</body>
</html>