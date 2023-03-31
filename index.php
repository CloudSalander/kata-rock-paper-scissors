<?php
include('class/Play.php');
include('class/Game.php');
include('class/Move.php');

$play1 = new Play(Move::Rock,Move::Scissors);
$play2 = new Play(Move::Paper,Move::Rock);
$play3 = new Play(Move::Paper,Move::Paper);

$plays = array($play1,$play2,$play3);

$game = new Game($plays);
echo $game->calculateWinner()->name;

?>