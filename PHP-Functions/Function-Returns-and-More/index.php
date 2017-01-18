

<?php 
//Return Values
function hello($name){
    //only return once per function/conditional
    if($name == "Mike"){
        
        return "Hello, Mike!<br>";
    }
    else{
        return "Hello, Stranger!<br>";

    }
}

//assign function and return to var
$greeting = hello("Mike");

//echo return of function
echo $greeting;



//add integers
function add_up($a, $b){
//  $arr = array(
//  $a,
//  $b,
//  $a + $b
//  );
//  return $arr;
  return $a + $b;
}

$value = add_up(2,4);
//print_r to print array 
//print_r($value);

echo $value;
echo "<br>";

//VARIABLE FUNCTIONS
function answer(){
    return 42;
}
$func = 'answer';
echo $func()."<br>";


$func = 'add_up';

$num = $func(5,10);

echo $num;
echo "<br>";

//PHP CLOSURES
$name = "Lorinda";
//use variable outside anonymous function
$greet = function() use($name){
	echo "Hello there, $name.";
};

$greet();


?>
