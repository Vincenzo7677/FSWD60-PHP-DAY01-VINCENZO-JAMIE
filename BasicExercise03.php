<!DOCTYPE html>
<html>
<head>
	<title>Basic Exercise 03</title>
</head>
<body style="text-align: center">

	<h1><?php 

			$date = date("D");

			if($date == "Mon")
				echo "Today is Monday!";
			elseif ($date == "Tue")
				echo "Today is Tuesday!";
			elseif ($date == "Wed")
				echo "Today is Wednesday!";
			elseif ($date == "Thu")
				echo "Today is Thursday!";
			elseif ($date == "Fri")
				echo "Today is Friday!";
			elseif ($date == "Sat")
				echo "Today is Saturday!";
			elseif ($date == "Sun")
				echo "Today is Sunday!";

			?></h1>

</body>
</html>