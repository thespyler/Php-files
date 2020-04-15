<!DOCTYPE html>
<html>
<head>
	<title>Mysite</title>
</head>
<body>
	<?php 
	$movies = array("Harry Potter", "The Avengers", 
					"Get Smart", "Iron Man", "Iron Man 3");

	for ($i=0; $i < 5 ; $i++) { 
		echo $movies[$i];
		echo "<br>";
	}

	?>
</body>
</html>