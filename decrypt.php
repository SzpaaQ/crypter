<?php
/*
 * 
 * 
 * 
 * 
 * decrypt.php
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * LICENCE
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * ALL RIGHTS RESERVED.
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * YOU ARE NOT ALLOWED TO COPY/EDIT/SHARE/WHATEVER.
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * IN CASE OF ANY PROBLEM CONTACT AUTHOR.
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * @author    Łukasz Szpak (szpaaaaq@gmail.com)
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * Copyright 2017 SzpaQ <ShopingBook>
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * @license   ALL RIGHTS RESERVED
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * * */

    function decrypt($data)
    {
		$key = file_get_contents('hash');


		$data = gzinflate($data);
        $l = strlen($key);
        if ($l < 16)
            $key = str_repeat($key, ceil(16/$l));

        if (function_exists('mcrypt_encrypt'))
            $val = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $data, MCRYPT_MODE_ECB);
        else
            $val = openssl_decrypt($data, 'BF-ECB', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);
			$val = rtrim($val, "\0");
        return $val;
    }

	$x = scandir('encrypted');
	echo 'Copying Files...'.PHP_EOL;

	if(!file_exists('decrypted')) mkdir('decrypted', 0755);

	foreach ($x as $k => $v)
	
	{
		if(is_dir($v)) continue;
		copy('encrypted/'.$v, 'decrypted/'.$v);
		
	}
	$x = scandir('decrypted');
	echo 'Decrypting...'.PHP_EOL;
	foreach ($x as $k => $v)
	{
		if(is_dir($v)) continue;
		file_put_contents('decrypted/'.$v, decrypt(file_get_contents('decrypted/'.$v)));
		echo '.';

	}
	echo 'Done!'.PHP_EOL;
	
	

/*

	$file = file_get_contents('img.jpg');

	$save = encrypt($file);
	
	file_put_contents('img.en', $save);

	exec('tar -czvf image.tar.gz img.base64');

	unlink('img.en');*/
