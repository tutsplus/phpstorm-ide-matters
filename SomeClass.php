<?php


class SomeClass {

	private $playerHeadersString = "Player name: ";

	function printAPairOfPlayers() {
		echo "Players are:";

		echo $this->playerHeadersString . $this->getRandomPlayerName();
		echo $this->playerHeadersString . $this->getRandomPlayerName();
	}

	function printOnePlayer() {
		echo $this->playerHeadersString . $this->getRandomPlayerName();
	}

	function getRandomPlayerName() {
		// Some logic to find player names //
		return $playerName;
	}

} 