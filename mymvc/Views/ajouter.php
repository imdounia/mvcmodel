<?php ob_start(); ?>
<p class="display-3">Ajouter un avis</p>
<form method="post" action="index.php?controller=ajouter">
  <div class="form-group">
    <label>Prénom :</label>
    <input type="text" class="form-control" placeholder="Prénom" name="prenom">
  </div>
  <div class="form-group">
    <label>Nom :</label>
    <input type="text" class="form-control" placeholder="Nom" name="nom">
  </div>
  <div class="form-group">
    <label>Commentaire :</label>
    <textarea class="form-control"rows="3" name="commentaire"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
</form>
<?php $html=ob_get_clean(); ?>
<?php require 'Views/layout.php'; ?>