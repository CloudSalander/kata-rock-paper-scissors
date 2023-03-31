<?php
include('class/Play.php');
include('class/Game.php');

$play1 = new Play('P','S');
$play2 = new Play('R','R');
$play3 = new Play('R','P');

$plays = array($play1,$play2,$play3);

$game = new Game($plays);
echo $game->calculateWinner()->name;

?>