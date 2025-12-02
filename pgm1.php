<?php 

$students = array("Shifna", "fathima", "ciyana", "beema");

echo "<h2>Array Before Sorting:</h2>";
print_r($students);

echo "<br><br>";

asort($students);
echo "<h2>Array After Ascending Sorting (asort):</h2>";
print_r($students);

echo "<br><br>";

asort($students);
echo "<h2>Array After Descending Sorting (arsort):</h2>";
print_r($students);
?>

