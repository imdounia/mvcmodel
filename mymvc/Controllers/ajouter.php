<?php
require "Models/functions.php";

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['commentaire'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$commentaire = $_POST['commentaire'];

	ajouteravis($nom,$prenom,$commentaire);
	header('Location:index.php?controller=afficher');
	}


require "Views/ajouter.php";
?>