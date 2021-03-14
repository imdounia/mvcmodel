<?php ob_start(); ?>
<p class="display-3">Liste des avis</p>
<form method="post" action="index.php?controller=afficher">
	Trier par : <input type="text" name="tri">
	<input type="submit" name="select" value="Sélectionner">
</form>
<br>
<?php foreach($avis as $av): ?>
	<h3><?php echo $av['prenom']." ".$av['nom']; ?></h3>
	<p><?php echo $av['commentaire']; ?></p>
	<a href="afficher.php?">Supprimer</a>
	<br>	
<?php endforeach ?>
<?php $html=ob_get_clean(); ?>
<?php require 'Views/layout.php'; ?>