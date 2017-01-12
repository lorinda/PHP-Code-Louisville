<?php
$name = 'Lorinda';
$string_one = "Hello World, $name!";
//echo $string_one.PHP_EOL;

$string_two = "Learning to display";
$string_two .= "\"Hello ";
$string_two .= $name;
$string_two .= "!\" to the screen.\n";

//echo $string_two;

$isReady = true;
//var_dump($isReady);

$isReady = false;
//var_dump($isReady);

var_dump(1+"2");

$a = 10;
$b = '10';
if($a == "10"){
    echo PHP_EOL."The values match";
} 
elseif($a == " "){
    echo PHP_EOL."The values is empty";
} 
else{
    echo PHP_EOL."The values DO NOT match";
}
?>