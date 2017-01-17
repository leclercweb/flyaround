<!DOCTYPE html>

<?php
include ('bdd.php');
?>

<html>

	<head>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.autocomplete.js"></script>
		<script type="text/javascript" src="jquery.autocomplete-min.js"></script>
		<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css" />						
	</head>

<body>

<p>Entrez le nom d'une ville : <input type="text" id="pays" /></p>

							<script>
							$(document).ready(function() {
							    $('#pays').autocomplete({
							        serviceUrl: 'bdd.php',
							        dataType: 'json'
							    });
							});

							</script>


</body>

</html>