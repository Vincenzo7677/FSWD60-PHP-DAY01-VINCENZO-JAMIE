<!DOCTYPE html>
<html>
<head>
	<title>Basic Exercise 02</title>
</head>
<body style="text-align: center;">

	<h1><?php 


		$date = date("D");

			if($date == "Mon") 
				echo "Happy Monday";

			else 
				echo "Have a nice day";

	?></h1>

</body>
</html>