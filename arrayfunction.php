<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $list =[345,567,367,890,678];
  echo max($list);
  echo "<br>";
  echo min($list);
  echo "<br>";
  sort ($list);
  print_r($list);

  $list =[455,789,908,456];
  $key = array_search(456, $list);
  $string="thfgdfivbvghdbfbvgf";
  $value=['sadfast',3456,'tegh',566789,$string];
  $found =in_array ($string,$value);
  if($found){
    echo "wow we did it together";
  }else{

    echo"we messed up";
  }
$currency=["yen","usd","pound","ksh"];
$country =["china","usa","uk","kenya"];
$currencyCountry= array_combine($currency,$country);
print_r($currencyCountry);
echo "<br>";


$currenyMerge= array_merge($currency,$country);
print_r($currenyMerge);
echo "<br>";

$person =["name"=>"john","age"=>40,"city"=>"newy0rk"];
$value =array_values($person);
print_r($value);


$vitamins=["mango","bananas","apple"];
$proteins=["beef","fish"."chicken"];
$carbohydrates=["maize","casava","yams"];
$mealPlan=array_combine($vitamins,$proteins,$carbohydrates);
print_r($mealPlan);
echo "<br>";



$expensive=["plain","ship"];
$cheap=["bike","bus","walking"];
$transportation= array_merge($expensive,$cheap);
print_r($transportation);
echo "<br>";



?>
    
</body>
</html>