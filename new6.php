<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="new6.php" method="post">

	<input type="Submit" > <br>
	Password:
	<input type="password" name="password">
</form>
<?php 
	echo $_POST["password"];

?>
</body>
</html>