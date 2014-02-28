<?php
function nombreMotsOblige($phrase,$nb)
{
	$nombre = substr_count($phrase,' ')+1;
	if($nombre < $nb)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function nombreMots($phrase)
{
	$nombre = substr_count($phrase,' ')+1;
	return $nombre;
}
?>