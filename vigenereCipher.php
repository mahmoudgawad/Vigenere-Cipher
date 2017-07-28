<?php
	
	/*
	 * Polyalphabetic Substitution (VigenereCipher)
	 * https://github.com/mahmoudgawad/Vigenere-Ciphe
	 *
	 * Copyright 2017, Mahmoud Abdelgawad
	 * E-Mail : prog.mahmoud96@hotmail.com
	 */

class VigenereCipher
{
	
	private $uAlphabet;    		// English Alphabet (UPPERCASE)
	private $lAlphabet;    		// English Alphabet (lowercase)

	function __construct()
	{
		$this->uAlphabet = range('A', 'Z');
		$this->lAlphabet = range('a', 'z');
	}

	/**
	*	EncryptOrDecrypt ()
	*   
	*	it encrypts or decrypts messages depends on the third parameter
	*
	* @param $message (string) -> User's Message
	* @param $secretMsg (string) -> User's Secret Message
	* @param $type (string) -> ENCRYPT || DECRYPT
	*
	* @return $outputMsg (string) -> Encrypted Or Decrypted Message
	*/

	public function EncryptOrDecrypt ($message, $secretMsg, $type = "ENCRYPT")
	{
		$secretMsg = strtolower($secretMsg);		

		/*
			if $type is DECRYPT then reverse the $secretMsg -> (26 - $secretMsg[$i]) to encrypt the message rather than decrypting it
		*/

		if ($type == 'DECRYPT') { 
			$string = '';

			for ($i = 0; $i < strlen($secretMsg); $i++) { 
				$string .= $this->lAlphabet[(26 - array_search($secretMsg[$i], $this->lAlphabet)) % 26];
			}

			$secretMsg = $string;
		}

		$outputMsg = ''; // final decrypted or encrypted message
		$counter = 0;
		

		for ($i = 0; $i < strlen($message); $i++) { 

			if (array_search($message[$i], $this->uAlphabet) !== false) 
			{ // if this character is uppercase character
				$outputMsg .= $this->uAlphabet[(array_search($secretMsg[$counter], $this->lAlphabet) + array_search($message[$i], $this->uAlphabet)) % 26]; 
			}
			elseif (array_search($message[$i], $this->lAlphabet) !== false)
			{ // if this character is lowercase character
				$outputMsg .= $this->lAlphabet[(array_search($secretMsg[$counter], $this->lAlphabet) + array_search($message[$i], $this->lAlphabet)) % 26];
				
			} else 
			{ // if this character is not an english alphabet characters
				$outputMsg.= $message[$i]; continue;
			}

			if ($counter == strlen($secretMsg) - 1) $counter = 0;
			else $counter++;
		}
		return $outputMsg;
	}

}

?>