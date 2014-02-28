<?php
	include 'function.php';
?>
<html>
<head>
<?php
	function tests(){
		$str = "Salut les gens";
		$nb = 3;
		nombreMotsOblige($str,$nb);
	}
?>
<script>
$(document).ready( function() {
$('#form').submit(function() { // catch the form's submit event
	    $.ajax({ // create an AJAX call...
	        data: $(this).serialize(), // get the form data
	        type: $(this).attr('method'), // GET or POST
	        url: $(this).attr('action'), // the file to call
	        success: function(response) { // on success..
	            $('#response').html(response); // update the SPAN
	        }
	    });
	    return false; // cancel original event to prevent form submitting
	});
});
</script>
</head>
<body>
	<fieldset><legend>Test 1 : </legend> 
		Paramètres : Salut les gens, 3 <br />
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