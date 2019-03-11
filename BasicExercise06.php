<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

	<?php 

			$looneytunes = array(

				"Alien" => array(

					"img" => "<img src='../Exercise6/alien.jpg'>",
					"name"=> "Alien",
					"age" => 65,
					"country"=> "Planet Zoran"
					
					),

				"Bugsbunny" => array(

					"img" => "<img src=''>",
					"name"=> "Bugsbunny",
					"age" => 90,
					"country"=> "Planet Boro"
					
					),

				"DaffyDuck" => array(

					"img" => "<img src=''>",
					"name"=> "Daffy Duck",
					"age" => 89,
					"country"=> "Planet Moron"
					
					),

				"Roadrunner" => array(

					"img" => "<img src=''>",
					"name"=> "Roadrunnern",
					"age" => 78,
					"country"=> "Planet Zippi"
					
					),

				"Tweetybird" => array(

					"img" => "<img src=''>",
					"name"=> "Tweetybird",
					"age" => 80,
					"country"=> "Planet Nokitties"
					
					),
				"SpeedyGonzales" => array(

					"img" => "<img src=''>",
					"name"=> "Speedy Gonzales",
					"age" => 60,
					"country"=> "Planet Mechiko"
					
					)
			);
			echo $looneytunes["Alien"]["img"]["name"]["age"]["country"];
	?>

</body>
</html>