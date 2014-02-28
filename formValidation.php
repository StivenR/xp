<?php
	$str = $_POST["text"];
	include 'function.php';
	$nb = nombreMots($str);
	if(nombreMotsOblige($str,$nb))
			echo "Réussi";
		else
			echo "Echec";
?>