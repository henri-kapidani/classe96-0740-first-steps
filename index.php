<?php
	# sono un commento
	// sono un commento
	/*
		sono un commento
		su più righe
	*/

	$saluto = 'ciao a tutti';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Sono un file php con solo html</h1>
	<!-- sono un commento html -->
	<?php
		//var_dump($saluto);
	?>

	<?= $saluto ?>
</body>
</html>