<?php

require 'Crypter.php';

$newline = php_sapi_name() == "cli" ? PHP_EOL : '<br>';

$string = 'This text Will be encrypted.';
$key = 'm=ON7!+v7O-0nHB7JPloekj=ZMx+WN2E';
echo 'ENCRYPTING STRING'. $newline;
echo 'STRING: "' . $string .'"'. $newline;
echo 'WITH KEY/PASSPHRASE: '. $key .$newline.$newline;

$encrypted = Crypter::encrypt($string, $key);
$decrypted = Crypter::decrypt($encrypted, $key);
echo 'ENCRYPTED STRING: ';
echo $encrypted . $newline;
echo 'DECRYPTED STRING: ';
echo $decrypted . $newline. $newline;



echo "USING BASE64:".$newline;
$encrypted = Crypter::encrypt($string, $key, true);
$decrypted = Crypter::decrypt($encrypted, $key, true);
echo 'ENCRYPTED STRING: ';
echo $encrypted . $newline;
echo 'DECRYPTED STRING: ';
echo $decrypted . $newline;

ECHO $newline.$newline;
