<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<?php $html = ob_get_clean(); ?>
<?php require 'Views/layout.php'; ?>