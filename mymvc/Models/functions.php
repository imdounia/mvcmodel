<?php
require "Models/connectDB.php";

function afficheravis($tri=null)
{
	global $db;
	$sql = "SELECT * FROM avis";
	if($tri){
		$sql.=" ORDER BY $tri";
	}
	$result = $db->prepare($sql);
	$result->execute();
	return $result;
}

function ajouteravis($prenom,$nom,$commentaire)
{
	global $db;
	$result = $db->prepare("INSERT INTO avis(prenom,nom,commentaire) VALUES(:prenom,:nom,:commentaire)");
	$result->bindValue(':prenom',$prenom);
	$result->bindValue(':nom',$nom);
	$result->bindValue(':commentaire',$commentaire);
	$result->execute();

}

function supprimeravis($id)
{
	global $db;
	$result = $db->prepare("DELETE FROM avis WHERE id = :id");
	$result->bindValue(':id',$id);
	$result->execute();
}


?>