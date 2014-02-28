<?php
	$str = $_POST["text"];
	include 'function.php';
	$nb = nombreMots($str);
	if($nb <= 1)
		echo $nb . ' mot';
	else
		echo $nb . ' mots';
?>