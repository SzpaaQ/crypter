
Check tests.php in master branch to see how to use it

Use static methods to encrypt or decrypt string/files/directory:
1. Crypter::encrypt(string $string, string $passphrase, boolean $base64 = false).
2. Crypter::decrypt(string $encryptedString, string $passphrase, boolean $base64 = false).

Notice that if you use base64 encoding to encrypt string, you must also use base64 to get it back.

1. Crypter::encryptFile(string $path, string $passphrase, string $target).
2. Crypter::decryptFile(string $path, string $passphrase, string $target).
3. Crypter::encryptDirectory(string $sourceDirectory, string $targetDirectory, string $passphrase).
4. Crypter::decryptDirectory(string $sourceDirectory, string $targetDirectory, string $passphrase).




