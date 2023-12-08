<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // $x ="outside";

   // function convert(){
       // global $x;
       // $x = "inside";  //localscope
    //}
    //echo $x;
    //echo "<br>";
    
   // convert();
    //echo $x;

    //$x=5;   //globalscope
    //function myTest(){
        //using x inside this function wiil generate an error
    //    echo "<p>variable x outside function is :$x</P> ";
        
    //}
    //myTest();
    //echo"<p>variable x outside function is :$x</p>"; 
    
    
 //localscope
 //function myTest() {
  //  $x = 5;  // Local scope
    //echo "<p>Variable x inside function is: $x</p>";
//}

// Call the function
//myTest();

//global keyword
//$x=5;
//$y-23;

//function myTest (){
    global $x,$y;
    $y=$x+$y;
//}

//myTest();
//echo $y;

//$globalvar="im a global variable";
//function accessGlobal(){
  //  global $globalVar;
    //echo "<p>inside function:$globalVar</P>";
//}
//accessGlobal();

//echo "<p>outside function:$globalVar</p>";
//$x=5;
//$y=10;

//function myTest(){
  //  $GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['Y'];
///}
//myTest();
//echo $y;
function myText(){
    static $x = 0;
    echo $x;
    $x++;
}
myText();
myText();
myText();
  

function countcalls (){
    static $count = 0;
    $count++;
    echo "function has been called $count times.<br> ";

}
countcalls();
countcalls();

function countvehicles(){
    static $count = 0;
    $count++;
    echo "There are $count vehicles in the garage.<br>";
}
countvehicles();
countvehicles();
countvehicles();

function countstudents(){
    static $count = 0;
    $count++;
    echo "There are $count students in the classroom.<br>";
}
countstudents();
countstudents();
countstudents();

function farmCount(){
    static $count = 0;
    $count++;
    echo "there are $count animal in laikipia farm";

}
farmCount();
farmCount();
farmCount();
?>
















