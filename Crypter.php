<?php






/*
 * 
 * 
 * 
 * 
 * Copyright 2018 Łukasz Szpak <szpaaaaq@gmail.com>
 * 
 *
 * 
 * You are free to use, share or modify this file as long as this text stays here
 * 
 *
 * 
 * Questions? Contact Author
 *
 * 
 * 
 */

class Crypter
{
	
	/**
	 * Encrypt encrypted file
	 * @param mixed $data data to encrypt
	 * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
	 * @return string $encrypted data
	 * */
	public static function encrypt($data, $key)
	{
		
		if(file_exists($key))

			$key = file_get_contents($key);

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

	/**
	 * Decrypt encrypted file
	 * @param mixed $data encrypted data
	 * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
	 * @return string $decrypted data
	 * */
	public static function decrypt($data, $key)
	{

		if(file_exists($key))

			$key = file_get_contents($key);
					
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

	/**
	 * Encrypt file
	 * @param string $source source file
	 * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
	 * @param string $target (optionsl) target file if You'd like to save it
	 * @return string encrypted string or false if file not exists
	 * */
	 public static function encryptFile($source, $key, $target = null)
	 {
		 
		 if(!file_exists($source))

			return false;

		$string = file_get_contents($source);

		$encrypted = self::encrypt($string, $key);

		if($target !== null)
		{

			self::TargetDir(dirname($target));
			
			file_put_contents($target, $encrypted);
			
		}

		return $encrypted;
		
		 
	 }
	 
	/**
	 * Decrypt file
	 * @param string $source source file
	 * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
	 * @param string $target (optionsl) target file if You'd like to save it
	 * @return string decrypted string or false if file not exists
	 * */
	 public static function decryptFile($source, $key, $target = null)
	 {
		 
		 if(!file_exists($source))

			return false;

		$string = file_get_contents($source);

		$decrypted = self::decrypt($string, $key);

		if($target !== null)
		{
			
			self::TargetDir(dirname($target));
			
			file_put_contents($target, $decrypted);
			
		}

		return $decrypted;
		
		 
	 }


	/**
	 * Encrypt directory
	 * @param string $source source directory
	 * @param string $target target directory
	 * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
	 * */
	public static function encryptDirectory($source, $target, $key)
	{

		$source = self::TargetDir($source);
		
		$target = self::TargetDir($target);

		$files = scandir($source);

		foreach($files as $v)

			if(is_dir($source.$v) || in_array($v, array('..', '.')))

				continue;

			else

				file_put_contents($target.$v, self::encrypt(file_get_contents($source.$v), $key));
				
		
	}
	
	/**
	 * Decrypt directory
	 * @param string $source source directory
	 * @param string $target target directory
	 * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
	 * */
	public static function decryptDirectory($source, $target, $key)
	{
		
		$source = self::TargetDir($source);
		
		$target = self::TargetDir($target);

		$files = scandir($source);

		foreach($files as $v)

			if(is_dir($source.$v) || in_array($v, array('..', '.')))

				continue;

			else

				file_put_contents($target.$v, self::decrypt(file_get_contents($source.$v), $key));

	}

	
	/**
	 * creates directory if not exists and return target directory
	 * @param string $directory target directory
	 * @param int chmod - default 0755
	 * @return string target directory
	 * */
	public static function TargetDir($directory, $chmod = 0755)
	{
		
		
		$path = '';
		
		$ex = explode('/', ' '. $directory);
		
		$i = 0;
		
		while($ex)
		{
			
			if(!$catalogue = array_shift($ex))
				
				continue;
		
			$path .= trim($catalogue) .'/';
			
			if($path == '/home')
				
				continue;
			
			if(!file_exists($path))
			
				mkdir($path, $chmod);
				
		}
		
		return $path .'/';
		
	}
	
}
