<?php 
$currentYear = date('Y');
$year = $currentYear - 100;
/*while(++$year <= $currentYear)
{
    echo $year.PHP_EOL,"<br>";
}
*/

/*do{
    echo $year."<br />";
} while(++$year <= $currentYear);
*/
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Add'; //adds at end
array_push($learn,'Functions','Forms','Objects'); //adds to end
array_unshift($learn,'HTML','CSS');  //adds to beginning
asort($learn);

$count = 0;
while((list($key, $val) = each($learn)) && $count++ < 2)
{
    echo "$key => $val\n";
}

?>
