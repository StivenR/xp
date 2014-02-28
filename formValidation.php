<?php
	$str = $_POST["text"];
	include 'function.php';
	$nb = nombreMots($str);
	nombreMotsOblige($str, $nb);
?>