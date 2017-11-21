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

	$x = scandir('files');
	echo 'Szyfruje pliki...';

	foreach ($x as $k => $v)
	
	{
		if(is_dir('files/'.$v)) continue;

		$file = file_get_contents('files/'.$v);

		$save = encrypt($file);
		echo '.';
		file_put_contents('encrypted/'.$v, $save);
		
	//	exec('tar -czvf encrypted/'.$v. '.tar.gz encrypted/'.$v);

	//	unlink('encrypted/'.$v);
	}
	echo PHP_EOL.'Zrobione! Spakuj pliki, aby zaoszczędzić miejsce na dysku'.PHP_EOL;

	

/*

	$file = file_get_contents('img.jpg');

	$save = encrypt($file);
	
	file_put_contents('img.en', $save);

	exec('tar -czvf image.tar.gz img.base64');

	unlink('img.en');*/
