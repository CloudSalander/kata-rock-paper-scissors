<?php
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

	public function __toString() : string{    
    
    	return "Player 1 did: ".$this->player1." vs. Player 2 did: ".$this->player2."\n";	
  	}    
}


?>