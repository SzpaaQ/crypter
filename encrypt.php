<?php
/*
 * 
 * 
 * 
 * 
 * encrypt.php
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

	function encrypt($data)
	
    {
		$key = file_get_contents('hash');
		
        $l = strlen($key);
        if ($l < 16)
            $key = str_repeat($key, ceil(16/$l));

        if ($m = strlen($data)%8)
            $data .= str_repeat("\x00",  8 - $m);
        if (function_exists('mcrypt_encrypt'))
            $val = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $data, MCRYPT_MODE_ECB);
        else
            $val = openssl_encrypt($data, 'BF-ECB', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);

        return gzdeflate($val);
    }

	$x = scandir('files');
	echo 'Encrypting files...';

	if(!file_exists('encrypted')) mkdir('encrypted', 0755);
	foreach ($x as $k => $v)
	
	{
		if(is_dir('files/'.$v)) continue;

		$file = file_get_contents('files/'.$v);

		$save = encrypt($file);
		
		echo '.';
		
		file_put_contents('encrypted/'.$v, $save);

	}
	echo PHP_EOL.'Done!'.PHP_EOL;
