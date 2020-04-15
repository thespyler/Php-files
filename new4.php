<html>
<body>

	<!--form is a place where we can interact or get input  -->
<form action = "new4.php" method="get">
	Name: <input type = "text" name = "name">
	Age: <input type="number" name="age">
	<!-- get user name -->
	<input type="submit" >

</form>
Your name is <?php	echo $_GET["name"] ; ?>
<br>
Your age is <?php	echo $_GET["age"]; ?>
</body>
</html>