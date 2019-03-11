<!DOCTYPE html>
<html>
<head>
	<title>Basic Exercise 04</title>
</head>
<body style="text-align: center">

	<?php 

		$names = "Vincenzo";
		$names2 = "Jamie";
		$num = 1;
		for ($i=1; $i<=50; $i=$i+1){

			echo $num++; echo " $names<br>";
			echo "$i $names2 <br>";
			
		}

		
	?>

</body>
</html>