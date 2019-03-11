<!DOCTYPE html>
<html>
<head>
	<title>Basic Exercise 03</title>
</head>
<body style="text-align: center">

	<h1><?php 

			$date = date("D");
			$dmy = date("r");
			

			if($date == "Mon")
				echo "Today is Monday! $dmy <br>";
			elseif ($date == "Tue")
				echo "Today is Tuesday! $dmy <br>";
			elseif ($date == "Wed")
				echo "Today is Wednesday! $dmy <br>";
			elseif ($date == "Thu")
				echo "Today is Thursday! $dmy <br>";
			elseif ($date == "Fri")
				echo "Today is Friday! $dmy <br>";
			elseif ($date == "Sat")
				echo "Today is Saturday! $dmy <br>";
			elseif ($date == "Sun")
				echo "Today is Sunday! $dmy <br>";

			?></h1>

</body>
</html>