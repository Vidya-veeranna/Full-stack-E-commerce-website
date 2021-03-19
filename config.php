<?php
$host = 'localhost';
$username = 'root';
$pass = 'vidyagowda@';
$db = 'online_shopping_system';

$db = new mysqli($host,$username,$pass,$db);

if ($db->connect_error) {
	 die("Connection Failed". $db->connect_error);
}

?>