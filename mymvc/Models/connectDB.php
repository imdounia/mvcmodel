<?php
require "Models/configDB.php";
try{
$db = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
}catch(PDOException $e){
	die("Erreur : ".$e->getMessage());
}
?>