<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
</head>
<body>
     <h2>"PHP script to count a total number of duplicate elements in an array" </h2>

<?php
echo "Test Data\n";
for ($i=0; $i < 3; $i++) {
        $line = readline("Enter Number: ");
        readline_add_history($line);
}
$input= array(5,1,1);

$count_values = array();
foreach ($input as $a) {

     @$count_values[$a]++;

}
echo 'Duplicates count: '.count($count_values);
print_r($count_values);
?>

     <h2>"PHP script to count the frequency of each element of an array"</h2>

<?php

$a = array (25,12,43);

$fr = array_fill(0, count($a), 0);
$check = -1;
for($i = 0; $i < count($a); $i++)
{
$count = 1;
for($j = $i+1; $j < count($a); $j++)
{
if($a[$i] == $a[$j]) 
{
$count++;

$fr[$j] = $check;
}
}
if($fr[$i] != $check) 
$fr[$i] =$count;
}
echo("The Array Elements are: \n");
foreach( $a as $b )
{
echo $b."  ";
}

echo (" frequency of given array elements: \n" );
for( $i = 0; $i < count($fr); $i++)
{
if($fr[$i] != $check)
{
echo( $a[$i] ." occurs " );
echo( $fr[$i]." times.");
echo(" ");
}
}
return 0;
?>

     <h2>"PHP script to separate odd and even integers in separate arrays"</h2>

<?php
$arr = array(11,12,13, 14, 15, 16, 17, 18, 19, 20);
$oddArray = array();
$evenArray = array();
echo "Orginal array: \n";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "\nArray of even numbers : \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "\nArray of odd numbers : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>


</body>
</html>