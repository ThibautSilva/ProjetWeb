<html>
<head>
	<meta charset="UTF-8">
	<title>Site de Musique</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Projet.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Connexion.css" />
</head>

<body >
	<?php include "../PHP/header.php"?>
	<div id=principal_zone>
		<div class="div" id=connexion>
			<p> PlayListen est un service d'écoute de musique à la demande en straming permettant d'écouter les artistes, titres,et de créer ,échanger les playlists de tous les genres musicaux... Il y en a pour tous les goûts, et son utilisation est très simple et gratuite!</p>
			<form class="form-container" method="post" action="connection.php"><p> 
				<div class="form-title"><h2>Connexion</h2></div> 
					<input class="form-field" name="login" required="required" type="text" placeholder="Username" />
					<input class="form-field" name="password" required="required" type="password" placeholder="Mot de passe"/>
			<div class="submit-container"><input class="submit-button" id=btn_d type="submit" value="Se connecter"/></div>
			</form>
			<br>
			</div>

			<div class="div" id=inscription>
			<form class="form-container" method="post" action="es.php">
			Nouveau sur PlayListen? Inscrivez-vous!
				<div class="form-title"><h2>Inscription</h2></div>
					
					<input class="form-field" name="username" required="required" type="text" placeholder="Username" />
					<input class="form-field" name="email" required="required" type="email" placeholder="Adresse e-mail"/> 
					<input class="form-field" name="password" required="required" type="password" placeholder="Mot de passe"/>
					<input class="form-field" name="confirmation" required="required" type="password" placeholder="Confirmation du mot de passe"/>
			<div class="submit-container"><input class="submit-button" id=btn_d type="submit" value="S'inscrire"/></div>
			</form>
		</div>
	</div>
	<?php include "../PHP/connexion_zone.php"?>
	<?php include "../PHP/nav.php"?>
	<?php include "../PHP/playing_zone.php"?>
</body>
</html>