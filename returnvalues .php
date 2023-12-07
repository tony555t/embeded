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
$grade = calculateGrade($studentMarks);

function calculateAverage($marksArray){
    $totalMarks = array_sum($marksArray);
    $numberOfMarks = count($marksArray);
    if ($numberOfMarks >0 ){
        $average = $totalMarks/$numberOfMarks ;
        return $average;
    }else{
        return "no marks given yet";
    }
}
$studentsMarks=[78,90,90,76,59];
$averageMarks =calculateAverage($studentsMarks);

function determineSalaryCategory($salary){
    if ($salary >= 100000){
        return "high salary";
         }elseif($salary >= 50000){
            return "medium salary";
         }elseif($salary >=20000){
            return "low salary";
         }else{
            return "invalid salary range";
         }
         }
$userSalary =75000;
$salaryCategory =determineSalaryCategory($userSalary);


function calculateRectangleArea($length,$width){
    $area =$length * $width;
    return $area;
}
$rectangleHeight=10;
$rectangleWidth =5;

$area=calculateRectangleArea($rectangleHeight,$rectangleWidth);
echo "the area of the rectangle is :".$area;


function checkVoterEligibility($age){
    if ( $age>18 && $age<=35){
        return "eligible to vote";
}else{
    return "not eligile to vote";
}
}
$personAge=25;
$voterStatus = checkVoterEligibility($personAge);

echo "person is $personAge years old.$voterStatus";

function checkmovieAvailable($userChoice,$availableMovie){

    if (in_array($userChoice,$availableMovie)){
        return "the movie '$userChoice'is available.";
    }else{
        return "sorry, the movie '$userChoice' is not available";
    }
    }
$movies=['the martrics',"inception","avatar","titanic"];
$userMovieChoices = "avatar";

$availabilityStatus=checkmovieAvailable($userChoice,$movies);
echo $availabilityStatus;

function checkProductAvailability($productId,$availableProductIds){
    if (in_array($productId,$availableProductIds)){
        return "product with ID $productId is available.";

    }else{
        return "Sorry! product with ID $productId is not available";
    }
} 
$availableProducts=[456,987,123];
$userProductId=123;
$availabilityProductStatus=$checkProductAvailabili($userProductId,$availableProductIds);
echo $availabilityProductStatus;


function checkVacancy($roomId,$availableroomsIds){
    if(in_array($roomId,$availableroomsIds)){
        return "$roomId room is vacant.";
}else {
    return "$roomId room is occupied.";
}}
$availableroom=[45,78,90,46];
$userEnquiry=90;
$availabilityroomStatus=$checkVacancy($userEnquiry,$availableroomsIds);
echo $availabilityroomStatus;

function checkcourse($course1d,$availablecourseIds){
    if (in_array($course1d,$availablecourseIds)){
        return "$course1d course is available.";

    }else{
        return "Sorry! $course1d course is not available";
    }

}$availablecourse=['information tech','biotec','law', 'comp sci,'];
$userCourse="computer science";
$availablecourseStatus=$checkcourse($availablecourseIds,$userCourse);
echo $availablecourseStatus;

function recommendTransportMode($distance){
    if($distance<=5){
        return "walking";

    }elseif($distance<=20){
        return "public transit";

    }elseif($distance<=100){
        return "cycling";

    }else{
        return "car driving";
    }
}
$travelDistance =90;
$recommendedTravelMode=recommendTransportMode($travelDistance);
echo $recommendedTravelMode;


function recommendBooks($books){
    foreach ($books as $book) {
        echo "<li>".$book."</li>";
} 
}
?>


</body>
</html>