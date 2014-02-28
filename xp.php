<?php
	include 'function.php';
?>
<html>
<head>
<?php
	function tests(){
		$str = "Salut les gens";
		$nb = 3;
		var_dump(nombreMots($str,$nb));
	}
?>
</head>
<body>
	<fieldset><legend>Test 1 : </legend> 
		Paramètres : Salut les gens, 3 <br />
		<?php 
		tests();
		?>
	</fieldset>
	<!-- <form action="tests(this)">
		<input type="textarea" name="text" placeholder="Texte à vérifier"/>
		<input type="text" name="number" placeholder="Nombres de mots attendus"/>
		<input type="submit" value="Valider">
	</form> -->
</body>
</html>