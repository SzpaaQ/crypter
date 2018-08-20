<?php






/*
 * 
 * 
 *  
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * Copyright 2017 Łukasz Szpak <szpaaaaq@gmail.com>
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * ALL RIGHT RESERVED Łukasz Szpak
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * THIS FILE IS PART OF PROJECT SHOPINGBOOK
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

$newline = php_sapi_name() == "cli" ? PHP_EOL : '<br>';

require 'Crypter.php';

echo 'PHASE ONE: STRING' . $newline;

$string = 'TEXTTOENCRYPT';

$key = 'hash';

echo 'KEY FILE: hash'.$newline;

// PHASE 1 string

// encrypt string
$encrypted = Crypter::encrypt($string, $key);

// decrypt encrypted string
$decrypted = Crypter::decrypt($encrypted, $key);

echo 'STRING: ';
echo $string . $newline;

echo 'ENCRYPTED STRING: ';
echo $encrypted . $newline;

echo 'DECRYPTED STRING: ';
echo $decrypted . $newline;

ECHO $newline.$newline;

echo 'PHASE TWO: FILES' . $newline;

$source = __DIR__ .'/files';

$targetencrypted = 'files/encrypted';

$targetdecrypted = 'files/decrypted';

echo 'SOURCE DIRECTORY: '.$source .$newline;

echo 'ENCRYPTED DIRECTORY: '.$targetencrypted .$newline;

echo 'DECRYPTED DIRECTORY: '.$targetdecrypted .$newline;

echo Crypter::encryptDirectory($source, $targetencrypted, $key);

// save encrypted file to files directory
file_put_contents($targetencrypted .'/encrypted_string', $encrypted);

echo Crypter::decryptDirectory($targetencrypted, $targetdecrypted , $key);

