<?php
$iceCream = array("Alena" => "Black Cherry",
                 "Treasure" => "Chocolate",
                 "Dave" => "Cookies and Cream",
                 "Rialla" => "Strawberry"
                 );  //Define case-sensitive keys
//$iceCream[] = 'Vanilla'; //assigns integer beginning with 0

ksort($iceCream); //sorts alphabetically
//krsort($iceCream); //sorts reverse alphabetically


var_dump($iceCream);
echo PHP_EOL.$iceCream['Alena'].PHP_EOL;

$keys = array(
        1 => 'a',
        '1' => 'b',
        1.5 => 'c',
        true => 'd'    
        ); //result is key 1 with value d
var_dump($keys);
?>