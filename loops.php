<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $counter =0;/// start of  the loop
    while ($counter <=10){
        echo "hello students";
        echo $counter; //show the number of times it iterated
        //infinte loop
        //$counter = $counter +1;
        $counter++;//this is a shorthand way to increment by 1
    }

    ?>
</body>
</html>