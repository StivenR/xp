<?php
	include 'function.php';
?>
<html>
<head>
<?php
	function tests(){
		$str = "Salut les gens de l'espace";
		$nb = 6;
		if(nombreMotsOblige($str,$nb))
			return "Vrai";
		else
			return "Faux";

	}
?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready( function() {
$('#form').submit(function() {
	    $.post("formValidation.php",$("#form").serialize(),function(texte){
                $("#response").html(texte);
            });
            return false;
	});
});
</script>
</head>
<body>
	<fieldset><legend>Test 1 : </legend> 
		Paramètres : Salut les gens de l'espace, 6 <br />
		<?php 
		tests();
		?>
	</fieldset>
	<fieldset><legend>Test 2 : </legend>
		<form id="form" action="formValidation.php" method="POST">
			<input type="textarea" name="text" placeholder="Texte à vérifier"/>
			<input type="submit" value="Valider">
		</form>
		<span id="response"></span>
	</fieldset>
</body>
</html>