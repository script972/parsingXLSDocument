<?php
/**
 * Created by PhpStorm.
 * User: script972
 * Date: 12.10.2016
 * Time: 20:16
 */

//require_once( "class/Controller.php" );
//require_once( "class/View.php" );
require_once("vendor/autoload.php");
//require_once ("class/config.php");
function autoload($class)
{
    $file='class/'.strtolower($class).'.php';
    if(is_file($file)){
        require 'class/'.strtolower($class).'.php';
    }
}
spl_autoload_register('autoload');


$task=strip_tags($_GET['task']);
$task=($task)?$task:'display';

$controller = new Controller();
$controller->execute($task);
/*$i=0;
if ($_GET['send'] and $_GET['upload'] ){
	$fd = fopen("csv-final1.csv", "r");
	while (($arr = fgetcsv($fd, 1024, ",")) !== FALSE)
	{
	echo $arr[$i];
	$i++;
	}
	fclose($fd);
}*/





?>