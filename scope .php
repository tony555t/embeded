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
 function myTest() {
    $x = 5;  // Local scope
    echo "<p>Variable x inside function is: $x</p>";
}

// Call the function
myTest();
    ?>                                          
</body>
</html>