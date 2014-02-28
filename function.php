<?php
function nombreMots($phrase,$nb)
{
	$nombre = substr_count($phrase,' ')+1;
	if ($nombre < $nb)
	{
		return false;
	}
	else
	{
		return true;
	}
}
?>