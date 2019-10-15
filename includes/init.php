<?php
  //start session
  session_start();

 //include config

 require_once('config/config.php');
 require_once('helpers/db_helper.php');
 require_once('helpers/format_helper.php');
 require_once('helpers/system_helper.php');
//load clasess
function __autoload($class_name)
{
	require_once('classes/'.$class_name.'.php');
}

$topic=new Topic();
?>