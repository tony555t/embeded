<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function addNumber($number1,$number2){
    $sum = $number1 + $number2;
    return $sum;

}
$result=addNumber(89,90);
$result =addNumber(80,67);
$result=addNumber(45,90);

 function getGreeting($name){
    $greeting = "hello".$name."welcome back.";
    return $greeting;

 }
 $userName="john";
 $welcomeMessage =getGreeting($userName);
 echo $welcomeMessage;


 function calculateGrade($marks){
    if ($marks >= 90) {
        return"a";
    }elseif($marks >=80){
        return "b";
    }elseif($marks>=70){
        return "c";
    }elseif($marks>=60){
        return "d";
    }else{
        return"f";
    }
}
$studentMarks =85;
$grade = calculateGrade($studentMarks)
?>
</body>
</html>