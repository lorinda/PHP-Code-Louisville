<?php 
header('Content-type: text/plain');
//$currentYear = date('Y');
//$year = $currentYear - 100;

//Example of multiple first expressions:
//for ($currentYear = date('Y'), $year = $currentYear - 100; $year <= $currentYear; $year++){
//for($year = date('Y') - 99; $year <= date('Y'); $year++){
//    echo $year.PHP_EOL,"<br>";
//}
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
//asort($learn);
sort($learn);

for($i = 0; $i < count($learn); $i++){
    echo $learn[$i]."\n";
}
$count = 0;
//while((list($key, $val) = each($learn)) && $count++ < 2)
//{
//    echo "$key => $val\n";
//}

?>
