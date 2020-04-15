<html>
<body>
	<form>
		<input type="Submit"> 
		<!-- Submit Button ^(Maybe inbuild)-->
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="text" name="op">
		<br>
	</form>
	Solution is :
	<?php
		
		if ($_GET["op"] == '+') {
			echo $_GET["num1"] + $_GET["num2"];
		}

		elseif ($_GET["op"] == '-') {
			echo $_GET["num1"] - $_GET["num2"];
		}

		elseif ($_GET["op"] == '*') {
			echo $_GET["num1"] * $_GET["num2"];
		}

		elseif($_GET["op"] == '/'){

			echo $_GET["num1"] / $_GET["num2"];
		}

		else{
			echo "Wrong operator";
		}

	 ?>
</body>
</html>