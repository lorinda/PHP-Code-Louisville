<?php
//number in pounds to be converted to kg
$pounds = 140;
//floating pt number for pound to kg conversion
$lb_to_kg = 0.453592;
//use variables to calculate pounds multiplied by kg converter
$kilograms = $pounds * $lb_to_kg;
//display kilograms
echo "Weight: ";
echo $pounds;
echo " lbs = ";
echo $kilograms;
echo " kg";

//number in miles to convert to km
$miles = 2.5;
//floating pt number for mile to km conversion
$mile_to_km = 1.60934;
//mile to km converter variabe
$kilometers = $miles * $mile_to_km;
//display kilometers
echo "<br>";
echo "Distance : ".$miles." miles = ".$kilometers." kilometers";


?>