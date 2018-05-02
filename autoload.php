<?php
class Loader
{    
    public static function registerAutoload()
    {
        return spl_autoload_register(array(__CLASS__, 'includeClass'));
    }
    
    public static function unregisterAutoload()
    {
        return spl_autoload_unregister(array(__CLASS__, 'includeClass'));
    }
    
    public static function includeClass($class)
    {
		$path = str_replace ('\\', DIRECTORY_SEPARATOR, $class);
		$path  = strtolower ($path);
		$a = explode (DIRECTORY_SEPARATOR, $path);
		$a[0] = 'class';
		$path = implode (DIRECTORY_SEPARATOR, $a);
		$path = __DIR__.DIRECTORY_SEPARATOR.$path.'.php';
		echo $path.'<br>';
       	require($path);
    }
}