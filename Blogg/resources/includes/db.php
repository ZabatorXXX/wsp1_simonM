<?php
$host = 'localhost';
$dbname = 'web';
$user = 'Admin';
$password = 'nYPSmj23EpbRzAq5';

//Define Variabel for host, dbname and charset
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

//Define Variabel with atribute for our PDO-object
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

//Create our new PDO-object
$pdo = new PDO($dsn, $user, $password, $attr);
?>
