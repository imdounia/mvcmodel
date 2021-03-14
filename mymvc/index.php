<?php

	if(!isset($_GET['controller'])){
		header('location:index.php?controller=default');
	}
	elseif (!file_exists("controllers/{$_GET['controller']}.php")) {
	 	die("Ce controleur n'existe pas");
	 }

	require "controllers/{$_GET['controller']}.php";  

?>