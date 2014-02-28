<?php
function nombreMotsOblige($phrase,$nb)
{
	$nombre = substr_count($phrase,' ')+1;
	echo 'La chaine comporte '.$nombre.' mots';
}

function nombreMots($phrase)
{
	$nombre = substr_count($phrase,' ')+1;
	echo 'La chaine comporte '.$nombre.' mots';
}
?>