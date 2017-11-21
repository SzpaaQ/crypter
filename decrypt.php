<?php

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
	echo 'Kopiuję pliki...'.PHP_EOL;
	foreach ($x as $k => $v)
	
	{
		if(is_dir($v)) continue;
		copy('encrypted/'.$v, 'decrypted/'.$v);
		
	}
	$x = scandir('decrypted');
	echo 'Rozszyfrowuje...'.PHP_EOL;
	foreach ($x as $k => $v)
	{
		if(is_dir($v)) continue;
		file_put_contents('decrypted/'.$v, decrypt(file_get_contents('decrypted/'.$v)));
		
	}
	echo 'Zrobione!'.PHP_EOL;
	
	

/*

	$file = file_get_contents('img.jpg');

	$save = encrypt($file);
	
	file_put_contents('img.en', $save);

	exec('tar -czvf image.tar.gz img.base64');

	unlink('img.en');*/
