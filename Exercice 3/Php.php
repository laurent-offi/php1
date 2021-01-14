<?php

	$km = intval(1);

	if(!is_int($km)) {
		die("L'âge doit être un entier.");
	}


?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 3 PHP</title>
	</head>

	<body>

		Nous sommes à <?php echo $km ?> Km. <br>
		Nous sommes à <?php echo $km + 2 ?> km. <br>
		Nous sommes à <?php echo $km + 124 ?> km.

	</body>

</html>