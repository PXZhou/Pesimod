<?php
$dbname = "espace_clientb";
$host='localhost';
$user='root';
$pass='';

$db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
$db->query("SET NAMES UTF8");

?>
