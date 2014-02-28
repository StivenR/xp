<?php
function nombreMots($phrase,$nb)
{
	$nombre = substr_count($phrase,' ')+1;
	echo 'La chaine comporte '.$nombre.' mots';
}
?>