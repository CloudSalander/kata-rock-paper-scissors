<?php
include('PlayResult.php');

class Play {
	private string $player1;
	private string $player2;
	
	public function __construct(string $player1, string $player2) {
		$this->player1 = $player1;
		$this->player2 = $player2;
	}

	public function getPlayer1() : string {
		return $this->player1;
	}

	public function getPlayer2() : string {
		return $this->player2;
	}

	public function solve() : PlayResult {
		if($this->player1 == $this->player2) return PlayResult::Tie;
		else {
			if($this->player1 == 'R') return $this->solveRockPlay();
			else if($this->player1 == 'P') return $this->solvePaperPlay();
			else return $this->solveScissorsPlay();
		} 
	}

	private function solveRockPlay() {
		if($this->player2 == 'P') return PlayResult::Player2;
		else return PlayResult::Player1;	
	}

	private function solvePaperPlay() {
		if($this->player2 == 'S') return PlayResult::Player2;
		else return PlayResult::Player1;	
	}

	private function solveScissorsPlay() {
		if($this->player2 == 'R') return PlayResult::Player2;
		else return PlayResult::Player1;	
	}

	public function __toString() : string{    
    
    	return "Player 1 did: ".$this->player1." vs. Player 2 did: ".$this->player2."\n";	
  	}    
}


?>