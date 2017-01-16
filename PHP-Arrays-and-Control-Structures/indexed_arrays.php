<?php 
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Add'; //adds at end
array_push($learn,'Functions','Forms','Objects'); //adds to end
array_unshift($learn,'HTML','CSS');  //adds to beginning
//var_dump($learn); //shows index, type, value
//echo $learn[1];  //displays 2nd element

var_dump($learn);
echo 'You removed '.array_shift($learn)."\n"; //to remove from beginning
echo "You removed ".array_pop($learn)."\n";  //to remove from end

echo implode("\n",$learn);  //Displays separator, value at each index
echo PHP_EOL;
unset($learn[1],$learn[2]); //Deletes but does not override indices
var_dump($learn);

$learn = array_values($learn); //renumbers indices
var_dump($learn);

$learn[0] = "Email"; //Redefines value at key/index

asort($learn);  //alphabetical sort
var_dump($learn);

sort($learn);  //Re-number keys
var_dump($learn);

rsort($learn); //reverse alphabetical order, renumber
var_dump($learn);

shuffle($learn); //shuffles randomly
echo $learn[0]; //displays random value


?>