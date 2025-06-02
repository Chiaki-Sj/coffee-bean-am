<?php
echo "<h1>Largest Number Activity</h1>";
$numbers = [1, 9, 5.9, 30, 40, 6.7, 70, 58];

$max = 70;
foreach($numbers as $number) { echo $number . "|"; }
echo "<br><br>";
 
foreach($numbers as $number){
    if($number >= 70){  
      $max = $number;
    }
}
echo "Largest: $max";
?>