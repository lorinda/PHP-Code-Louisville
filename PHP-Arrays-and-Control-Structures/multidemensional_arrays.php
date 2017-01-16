


<?php
//edit this array
$contacts["Alena"]=[
    "name" => "Alena Holligans",
    "email" => "alena.holligan@teamtreehouse.com"
    ];

$contacts["Dave"]=[
    "name" => "Dave McFarland",
    "email" => "dave.mcfarland@teamtreehouse.com"
    ];

$contacts["Treasure"]=[
    "name" => "Treasure Porth",
    "email" => "treasure.porth@teamtreehouse.com"
    ];

$contacts["Andrew"]=[
    "name" => "Andrew Chalkley",
    "email" => "andrew.chalkley@teamtreehouse.com"
    ];

echo '<ul>';
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo '<li>'.$contacts["Alena"]["name"].' : '.$contacts["Alena"]["email"].'</li>';
echo '<li>'.$contacts["Dave"]["name"].' : '.$contacts["Dave"]["email"].'</li>';
echo '<li>'.$contacts["Treasure"]["name"].' : '.$contacts["Treasure"]["email"].'</li>';
echo '<li>'.$contacts["Andrew"]["name"].' : '.$contacts["Andrew"]["email"].'</li>';
echo '</ul>';
?>