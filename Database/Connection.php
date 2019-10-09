<?php

/**
 * summary
 */
class Connection
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }
    public static function make($hostname,$username,$password)
	{
		try {
	   return new PDO("mysql:host=$hostname;dbname=forum",$username,$password);
	   } catch (PDOException $e) {
	     die($e->getMessage());
	   }
	}
}