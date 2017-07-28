# Vigenere Cipher
> Polyalphabetic Substitution (Encryption and Decryption) 

this program is built to encrypt and decrypt message using Vigenere Cipher with a given secret message, this program capable of determining each letter sensitivity and either encrypt or decrypt it in the same case, it uses only one function to encrypt and decrypt messages

![vigenere](https://user-images.githubusercontent.com/27032703/28718189-2312ccba-73a5-11e7-8fe3-0402791915f2.jpg)

## Code Examples

```php

// make new object
$vigenere = new VigenereCipher();

// encrypt message ($message, $secretMsg, $type)
echo $vigenere->EncryptOrDecrypt('Hello World', 'snake', "ENCRYPT");

// decrypt message ($message, $secretMsg, $type)
echo $vigenere->EncryptOrDecrypt('Zrlvs Obrvh', 'snake', "DECRYPT");

```

## License

Copyright 2017 Mahmoud Abdelgawad 

