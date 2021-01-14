<?php


	$lastname = "COURCELLE";
	$firstname = "Laurent";
	$age = intval("19");

	if(!is_int($age)) {
		die("L'âge doit être un entier.");
	}

		if($age < 2) {
			$plural = "an.";
		} else {
			$plural = "ans.";
		}


?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 7 PHP</title>
	</head>

	<body>

		<?php echo "Bonjour, je m'appelle <b>" . $firstname . " " . $lastname . "</b> tu as " .  "<b>" . $age ."</b> " . $plural; ?>

	</body>

</html>