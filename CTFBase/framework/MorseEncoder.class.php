<?php

class MorseEncoder extends Encoder {
	public function encode() {
			$alphabet = array("a" => ' .-', 'b' => ' -...', "c" => ' -.-.', 'd' => ' -..', 'e' => ' .', 'f' => ' ..-.', 'g' => ' --.', 'h' => ' ....', 'i' => ' ..', 'j' => ' .---', 'k' => ' -.-', 'l' => ' .-..',
		            'm' => ' --', 'n' => ' -.', 'o' => ' ---', 'p' => ' .--.', 'q' => ' --.-', 'r' => ' .-.', 's' => ' ...', 't' => ' -', 'u' => ' ..-', 'v' => ' ...-', 'w' => ' .--', 'x' => ' -..-',
		            'y' => ' -.--', 'z' => ' --..', '0' => ' -----', '1' => ' .----', '2' => ' ..---', '3' => ' ...--', '4' => ' ....-', '5' => ' ....', '6' => ' -....', '7' => ' --...',
		            '8' => ' ---..', '9' => ' ----.', '.' => ' .-.-.-', ',' => ' --..--', '?' => ' ..--..',' '=>'');
		$result = "";
		$txt = strtolower($message);
		$array = preg_split('//', $txt, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($array as $char) {
			$morse = $alphabet[$char];
			$result .= $morse;
		}

		return $result;
	}
}

?>