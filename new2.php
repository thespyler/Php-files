<html>
<body>
	<?php	
		$name = "John";//a variable named john
		$age = 12;
		$age2 = 40;
		$game_on = true;
		$phrase = "To be or not to be";

		// echo "Hello World!";
		echo "<h1>My Site</h1>";
		// echo "<p> Hey!</p>";
		echo "There was a man <br>";
		echo "His name was $name <br>";
		$name = "Mike";
		echo "He liked the name $name and was $age <br>";
		$name = "Mike";
		echo "But he didn't like being $age <br>";
		echo $age + $age2;//just add two variables
		echo strtolower($phrase) ;//convert to lower case
		echo strlen("Hello World!");
		$phrase[0]= "G";
		echo $phrase;
		echo str_replace("Go", "come", $phrase);
		echo substr($phrase, 2);
	?>
</body>
</html>