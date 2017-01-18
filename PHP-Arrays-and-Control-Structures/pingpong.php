<?php
$player1 = 0;
$player2 = 5;
$round = 0;
//var_dump(abs($player1 - $player2));
//var_dump($player2 - $player1);
//To Win
//player must reach a score of 11
//player must be a minimum of 2 points higher than opponent

//WHILE those conditions are NOT met, 
//a single player will receive 1 point at the end of each round.
while(abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 <11)){
    $round++;
    echo "<h2>Round $round</h2>\n";
    if (rand(0,1)){
        $player1++;
    }else{
        $player2++;
    }
    echo "Player 1 = $player1<br />\n";
    echo "Player 2 = $player2<br />\n";
}

//Echo the winner and # of rounds
echo "<h1>";
if ($player1 > $player2){
    echo "Player 1";
}else{
    echo "Player 2";
}
echo " is the winner after $round rounds.</h1>";

?>