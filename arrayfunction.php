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
?>
    
</body>
</html>