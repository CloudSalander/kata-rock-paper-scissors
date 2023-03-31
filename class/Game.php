<?php
class Game {
	private $plays;
	public function __construct(array $plays) {
		$this->plays = $plays;
	}

	public function calculateWinner(): PlayResult {
		$winner_p1 = $winner_p2 = 0;
		foreach($this->plays as $play) {
			if($play->solve() == PlayResult::Player1) ++$winner_p1;
			else if($play->solve() == PlayResult::Player2) ++$winner_p2;
		}
		if($winner_p1 > $winner_p2) return PlayResult::Player1;
		else if($winner_p2 > $winner_p1) return PlayResult::Player2;
		else return PlayResult::Tie;
	}
}

?>