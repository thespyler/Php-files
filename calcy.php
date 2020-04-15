<html>
<body>
	<form action="calcy.php" method="get">
		<!-- Get numbers -->
		<input type="submit">
		<br> 
		<input type="number" name="num1">
		<input type="number" name="num2">
	</form>

	<?php
		echo $_GET["num1"] + $_GET["num2"];
		// add the numbers
	?>
</body>
</html>