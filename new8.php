<!DOCTYPE html>
<html>
<head>
	<title>New Thing</title>
</head>
<body>
	<form action="new7.php" method="get">
		<input type="Submit"> <br>
		Apple :<input type="checkbox" name="fruits[]"> <br>
		Pears :<input type="checkbox" name="fruits[]"> <br>
		Banana :<input type="checkbox" name="fruits[]"> <br>
		
	</form>

	<?php 
		echo $_GET["fruits[]"];

	 ?>
</body>

</html>