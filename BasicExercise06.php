<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
	h1{

		color: orange;
	}
	body{

		text-align: center; 
		background-color: #fcfcb0;
	}
		
		img{
			border-radius: 50%;
			border: 10px solid orange;
		}

		.test1{

			border: 1px solid orange;
			padding: 20px;
			margin: 50px;
		}
	</style>
	<title>test</title>
</head>
<body>

<div id="main">

	<h1>Looney Tunes</h1>
	<?php 

			$looneytunes = array(

				 "Alien" => array(

					"img" => "<img src='Exercise6/alien.JPG'>",
					"name"=> "Alien",
					"age" => 65,
					"country"=> "Planet Zoran"
					
					),

				"Bugsbunny" => array(

					"img" => "<img src='Exercise6/bugsbunny.JPG'>",
					"name"=> "Bugsbunny",
					"age" => 90,
					"country"=> "Planet Boro"
					
					),

				"DaffyDuck" => array(

					"img" => "<img src='Exercise6/daffyduck.JPG'>",
					"name"=> "Daffy Duck",
					"age" => 89,
					"country"=> "Planet Moron"
					
					),

				"Roadrunner" => array(

					"img" => "<img src='Exercise6/roadrunner.JPG'>",
					"name"=> "Roadrunnern",
					"age" => 78,
					"country"=> "Planet Zippi"
					
					),

				"Tweetybird" => array(

					"img" => "<img src='Exercise6/tweetybird.JPG'>",
					"name"=> "Tweetybird",
					"age" => 80,
					"country"=> "Planet Nokitties"
					
					),
				"SpeedyGonzales" => array(

					"img" => "<img src='Exercise6/speedygonzales.JPG'>",
					"name"=> "Speedy Gonzales",
					"age" => 60,
					"country" => "Planet Mechiko"
					
					)
			);


			echo "<div class='test1'>".$looneytunes['Alien']['img']."<br>";
			echo $looneytunes['Alien']['name']."<br>";
			echo $looneytunes['Alien']['age']."<br>";
			echo $looneytunes['Alien']['country']."</div><br><br>";


			echo "<div class='test1'>".$looneytunes['Bugsbunny']['img']."<br>";
			echo $looneytunes['Bugsbunny']['name']."<br>";
			echo $looneytunes['Bugsbunny']['age']."<br>";
			echo $looneytunes['Bugsbunny']['country']."</div><br><br>";

			echo "<div class='test1'>".$looneytunes['DaffyDuck']['img']."<br>";
			echo $looneytunes['DaffyDuck']['name']."<br>";
			echo $looneytunes['DaffyDuck']['age']."<br>";
			echo $looneytunes['DaffyDuck']['country']."</div><br><br>";

			echo "<div class='test1'>".$looneytunes['Roadrunner']['img']."<br>";
			echo $looneytunes['Roadrunner']['name']."<br>";
			echo $looneytunes['Roadrunner']['age']."<br>";
			echo $looneytunes['Roadrunner']['country']."</div><br><br>";

			echo "<div class='test1'>".$looneytunes['Tweetybird']['img']."<br>";
			echo $looneytunes['Tweetybird']['name']."<br>";
			echo $looneytunes['Tweetybird']['age']."<br>";
			echo $looneytunes['Tweetybird']['country']."</div><br><br>";

			echo "<div class='test1'>".$looneytunes['SpeedyGonzales']['img']."<br>";
			echo $looneytunes['SpeedyGonzales']['name']."</div><br>";
			echo $looneytunes['SpeedyGonzales']['age']."<br>";
			echo $looneytunes['SpeedyGonzales']['country']."</div><br>";
	?>
</div>
</body>
</html>