<?php

//Simple array for topics - Övning 4
// Some arrays to work with:

$numbers = array(1,8,3,5,4,-5,6,7);

$strings = array("dog", "cat", "bird", "fish");

$mixed = array(0,"john", -6.5, "andy", array(0,2, NULL, 6));

// Öving lektion
$blankarray = array('A','B','C');

echo $blankarray[1];

print_r($blankarray);

echo "<br />";
echo "<br />";
//End array

//Count Övning

echo count($numbers);
echo "<br />";
echo count($strings);
echo "<br />";
echo count($mixed);
echo "<br />";
echo count($blankarray);

// Lops

echo "<br />";
echo "<br />";
for ($i = 1; $i < count($blankarray); $i++) {
    echo $i;
  echo "<br />";
  echo "<br />";
}


//Push övning
echo "<br />";
echo "<br />";

$number =  array();

// FOREACH-LOOP

// skriver ut: 1234



//2D Associative array for full posts - Övning 9

?>
