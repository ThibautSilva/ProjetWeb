<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<link rel="shortcut icon" type="image/x-icon" href="mus.jpg" />
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>PlayListen</title>
<link rel="stylesheet" type="text/css" href="../CSS/Connexion.css" />
<link rel="stylesheet" type="text/css" href="../CSS/Projet.css" />
</head>

	

  <body>
	<?php include "../PHP/header.php"?>
	<div id=principal_zone>
		 <?php
		// On lie la base 
		 require('base.php');

		 // On lance la session
		session_start();

		// On initialise autorisation à faux
		$auto = false;  

		//On vérifie si les champs sont remplis 
		if ( isset($_POST['login']) && !empty($_POST['login'])){

			if ( isset($_POST['password']) && !empty($_POST['password'])){
				
				extract($_POST); // on importe les variables postées login et password 
				
				// on établit la requete vérifiant si le login existe bien dans notre BDD
				$sql = "SELECT user_id, username, password, email FROM users WHERE username = '".$login."'";
				$req = mysql_query($sql);
		  
				// On vérifie que l'utilisateur existe bien 
				if (mysql_num_rows($req) > 0) {
					$data = mysql_fetch_assoc($req);
					
					//on crypte le mot de passe pour le comparer à celui enregistré et crypté dans la BDD
					$password=$_POST['password'];
					$crypt = md5($password);
			
					// On regarde si le mot de passe de l'utilisateur trouvé est égale au mot de passe posté 
					if ($crypt == $data['password']) {
						$auto = true;
					}
					else 
					{
						echo "Le mot de passe ou le username n'est pas correct!";
					}
				}
			}
		}

		// Si les étapes ci-dessus sont validées, elles nous "autorisent" ($auto=true), à mettre les données en sessions 

		if ($auto) {

		  $_SESSION['user_id'] = $data['user_id'];
		  $_SESSION['username'] = $data['username'];
		  $_SESSION['password'] = $data['password'];
		  $_SESSION['email'] = $data['email'];
		  echo "<p>Génial! Vous avez été connecté avec succès!<p>";

		}

		else 

		{
		  echo '</br><p>Problème lié à la connexion, veuillez réessayer ultérieurement !<p>'; 
		}

		?>
		
		<form method="post" action="deconnexion.php">
			<input class="submit-button" id=btn_d type="submit" value="Se déconnecter"/>
		</form>
		</div>
	<?php include "../PHP/connexion_zone.php"?>
	<?php include "../PHP/nav.php"?>
	<?php include "../PHP/playing_zone.php"?>
</body>
</html>