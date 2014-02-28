<?php
function nombreMotsOblige($phrase,$nb)
{
	$nombre = str_word_count($phrase);
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
	$nombre = str_word_count($phrase);
	return $nombre;
}
?>