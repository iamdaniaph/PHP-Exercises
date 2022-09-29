<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>PHP Array Exercises 01</title>
</head>
<body>
     <h2>PHP Array Exercise 1</h2>
<?php
     $weather=array(
  "rain",
  "sunshine",
  "clouds",
  "hail",
  "sleet",
  "snow",
  "wind" 
  );
 
//Use array in a sentence. 
echo "<p>We've seen all kinds of weather this month. At the beginning of the month, ";
echo "we had
$weather[5] and 
$weather[6]. Then came
$weather[1] with a few 
$weather[2] ";
echo "and some
$weather[0]. At least we didn't get any 
$weather[3] or 
$weather[4].</p>";
?>


<h2>PHP Array Exercise 2</h2>
<?php
$cities=array(
  "Tokyo",
  "Mexico City",
  "New York City",
  "Mumbai",
  "Seoul",
  "Shanghai",
  "Lagos",
  "Buenos Aires",
  "Cairo",
  "London" 
  );
 
 
foreach($cities as $c){
  echo "$c, ";
}
 

sort($cities);
 

echo "\n<ul>\n" ;
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>" ;
 

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;
 

sort($cities);
echo "\n<ul>\n";
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>";
?>
</body>
</html>