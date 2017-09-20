<?php
	// Emplacement du fichier prevenant de la libs de smarty
	require_once('/var/www/html/Smarty/Smarty.class.php');
	// Instanciation de l'objet smarty
	$smarty = new Smarty();



	// affichage du contenu du template de la page index (page html permettant de tester)
	$smarty-> display('index.tpl');
?>
