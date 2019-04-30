<?php


$host = "localhost";
$user = "root";
$pass = "";
$db = "oprec1920";

	mysql_connect($host,$user,$pass) or die (mysql_error());
	mysql_select_db($db) or die (mysql_error());



?>