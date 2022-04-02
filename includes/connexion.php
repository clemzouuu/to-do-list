<?php 
$engine = "mysql";
$host = "localhost";
$port = 8889;  
$dbname = "to_do_list_db";
$username = "root";
$password = "root"; 

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
?>