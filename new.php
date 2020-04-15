<html>
<body>
<h1>PHP Test</h1>
<?php
$t=date("H");
/*
This defines the “$t” variable as the time of day (date)
in a 24 hour format (H). It is based on the server's clock.
*/
if ($t<"20")
   {
   echo "Have a great day!";
   }
else
   {
   echo "Get to sleep!";
   }
/*
If the time is less than 20 (8 PM), then it will display 
“Have a great day!” If it is after 20, it will display 
“Get to sleep!”
*/
?>
</body>
</html>