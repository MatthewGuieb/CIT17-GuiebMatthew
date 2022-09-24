<?php

							 //======== ARRAY THAT HOLDS CITIES  ========\\
	 $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

	 ?>

	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>10 Largest Cities</title>
	 </head>
	 <body>



	 	<h1 style="color: green; font-weight: bold;">Large Cities</h1><br><!-- page header -->


	 	<!-- FOR LOOPING CITIES/OPEN -->
	 	<?php
	 	for ($i = 0; $i < COUNT($cities); $i++) {
	 		echo $cities{$i} . ", ";
	 	}
	 	?>
	 	<!-- FOR LOOPING CITIES/CLOSE -->



	 	<!-- UNORDERED LIST (not sorted)/OPEN -->
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>

	 	</ul>
	 	<!-- UNORDERED LIST (not sorted)/CLOSE -->


	 	<?php array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>

	 	<?php sort($cities); ?>
	 	<?php var_dump($cities) ?>

	 	 	<!-- UNORDERED LIST (sorted)/OPEN -->
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>
	 	</ul>

	 	<!-- UNORDERED LIST (sorted)/CLOSE -->



	 </body>
	 </html>