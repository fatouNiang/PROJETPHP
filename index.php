<!DOCTYPE html>
<html>
<head>
	<title> Menu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body>

		
		<div class="nav">
		  <a href="?Projetphp2=exercice1">Exercice 1</a>
		  <a href="?Projetphp2=exercice2">Exercice 2</a>
		  <a href="?Projetphp2=exercice3">Exercice 3</a>
		  <a href="?Projetphp2=exercice4">Exercice 4</a>
		  <a href="?Projetphp2=exercice5">Exercice 5</a>
		  <a href="Application1/application1.php">Application 1</a>
		  <a href="mini projet/miniProjet.php">Mini Projet</a> 
		</div>

		<div style="margin-top: 50px;">
			
			<?php 


			if (isset($_GET['Projetphp2'])) {
				$url = $_GET['Projetphp2'];
				
						if ($url == "exercice1") {
							include("Exercice1.php");
						}
					else{
						if ($url == "exercice2") {
							include("Exercice2.php");
						}
						else{
							if ($url == "exercice3") {
								include("Exercice3.php");
							}

							else{
								if ($url == "exercice4") {
									include("Exercice4.php");
								}

								else{
									if ($url == "exercice5") {
										include("Exercice5.php");
									}

									
								}
							}
						}
					}	
				}

			?>

		</div>

</body>
</html>