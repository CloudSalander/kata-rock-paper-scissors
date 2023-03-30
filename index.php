<?php
include('class/Play.php');
include('class/Game.php');

$play1 = new Play('P','S');
$play2 = new Play('R','R');
$play3 = new Play('P','R');

$plays = array($play1,$play2,$play3);

foreach ($plays as $play) {
	echo $play;
	var_dump($play->solve());
}

?>