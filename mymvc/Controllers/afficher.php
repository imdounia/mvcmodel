<?php
require "Models/functions.php";

if(isset($_POST['tri'])){
	$tri = $_POST['tri'];
}
else{
	$tri = "prenom";
}
$avis = afficheravis($tri);

require "Views/afficher.php";
?>