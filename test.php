<?php
	require 'vigenereCipher.php';


	// make new object
	$vigenere = new VigenereCipher();

	// encrypt message ($message, $secretMsg, $type)
	echo $vigenere->EncryptOrDecrypt('Hello World', 'snake', "ENCRYPT");

	// decrypt message ($message, $secretMsg, $type)
	echo $vigenere->EncryptOrDecrypt('Zrlvs Obrvh', 'snake', "DECRYPT");

?>