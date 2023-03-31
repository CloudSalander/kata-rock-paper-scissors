<?php
include('PlayResult.php');

class Play {
	private Move $player1;
	private Move $player2;
	
	public function __construct(Move $player1, Move $player2) {
		$this->player1 = $player1;
		$this->player2 = $player2;
	}

	public function getPlayer1() : Move {
		return $this->player1;
	}

	public function getPlayer2() : Move {
		return $this->player2;
	}

	public function solve() : PlayResult {
		if($this->player1 == $this->player2) return PlayResult::Tie;
		else {
			if($this->player1 == Move::Rock) return $this->solveRockPlay();
			else if($this->player1 == Move::Paper) return $this->solvePaperPlay();
			else return $this->solveScissorsPlay();
		} 
	}

	private function solveRockPlay() {
		if($this->player2 == Move::Paper) return PlayResult::Player2;
		else return PlayResult::Player1;	
	}

	private function solvePaperPlay() {
		if($this->player2 == Move::Scissors) return PlayResult::Player2;
		else return PlayResult::Player1;	
	}

	private function solveScissorsPlay() {
		if($this->player2 == Move::Rock) return PlayResult::Player2;
		else return PlayResult::Player1;	
	}

	public function __toString() : string{    
    
    	return "Player 1 did: ".$this->player1." vs. Player 2 did: ".$this->player2."\n";	
  	}    
}


?>