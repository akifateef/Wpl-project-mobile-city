<?php


$db_host = 'localhost';
$db_user = 'root';
$db_pwd ='';
$db = 'new_mobile';

$con = mysql_connect($db_host,$db_user,$db_pwd);

if(!$con)
{
die('Could Not Connect !'.mysql_error());
}


mysql_select_db($db, $con);

?>
