<?php
/*
Utilisez UNIQUEMENT du code php pour :
-1- ajouter un lien vers simplon.co dans le premier paragraphe
-2- renseigner l'id de la div avec la variable $id0
-3- <p><a href=""><a/></p> => renseigner le href et le texte du lien avec la variable $lien
-4- renseigner le src de l'image avec la variable $pic1
-5- modifier le src en remplaçant '000' et 'fff' par les variables $colbg et $coltx


Jetez un coup d'oeil au code source de la page : 
vous constaterez que tout se passe comme si le code avait été tapé manuellement.
*/

$id0 = "divagate";
$lien = "php00echo.php";
$pic1 = "https://dummyimage.com/300x120/3f578c/ffffff.jpg&text=Enjoy+php";

$colbg = "95b517";
$coltx = "eeff00";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>php01integr : HTML et PHP</title>
		<style>
			body {
				font-family: Arial;
				font-size:16px;
				text-align:center;
			}
			#divagate{
				width: 500px;
				height: 80px;
				border: 1px solid grey;
				margin: 30px auto;
			}
			
		</style> 
	</head>

	<body>
		<!-- 1 -->
		<p></p>

		<!-- 2 -->
		<div id="">Child's balloon divagating upon the currents of the air</div>

		<!-- 3 -->
		<p><a href=""><a/></p>

		<!-- 4 -->
		<p><img src=""/></p>

		<!-- 5 -->
		<p><img src="https://dummyimage.com/300x80/000/fff.jpg&text=Vanishing+php" /></p>
		<br>
		
	</body>
</html>