<?php
class Game {
	private $plays;
	public function __construct(array $plays) {
		$this->plays = $plays;
	}

	public function calculateWinner(): void {
		//TODO: Winner Logic
	}
}

?>