<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<link rel="shortcut icon" type="image/x-icon" href="mus.png" />
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>PlayListen</title>
<link rel="stylesheet" type="text/css" href="gratuit.css" />
</head>

  <body>
 

  <?php
  require('base.php');
  


// on initialise un id pour identifier chaque nouveau user voir méthode ci-dessous
$id = getId()+1;
$afficher = "";
$continuer = true;
  
  // Si le mot de passe est trop court , on ne continue pas 
  if (strlen($_POST['username']) < 4){
	$continuer = false;
    $afficher .= 'Le nom d\'utilisateur est trop court.';
  }
  else{ // sinon on continue et on stock la valeur rentrée dans la variable $username
    $username = $_POST['username'];  
  }
  
  // Même principe pour le mot de passe 
  if (strlen($_POST['password']) < 6){
    $continuer = false;
    $afficher .= 'Le mot de passe est trop court.';
  }
  else{

    $password = $_POST['password'];
	
    // Si la confirmation est différente du mot de passe : on ne continue pas !
    if ($_POST['confirmation'] != $password){
      $continuer = false;
      $afficher .= 'Le mot de passe et sa confirmation ne sont pas identiques.';
    }	
  }


  // On vérifie si le username est disponible 
  if ($continuer){
	$available = dispo($username);
	if (!$available){
	  $continuer = false;
	  $afficher .= 'Le nom d\'utilisateur '.$username.' est déjà pris.';
	}
  }

//si tout est vérifié alors on continue en ajoutant tout à notre BDD 
  if ($continuer){
	$cryptmdt = md5($password);	// Password encryption
	$email = $_POST['email'];
	$bon = addUser($id,$username, $email, $cryptmdt);
	
	if ($bon){
	    echo "L'inscription a été réalisée avec succès.</br>Bienvenu(e) ".$username.".";
	  }
    }
	
  else{			// si individu pas ajouté, on affiche message d'erreur 
    echo 'L\'inscription n\'a pas pu être validée pour les raisons suivantes : '.$afficher.'</br><a href="exemple.php">Retour vers le formulaire d\'inscription.</a>';  
  }
  ?>
  

  </body>
</html>

<?php

  //on regarde si le username est disponible
  function dispo($username){
    $result = mysql_query("SELECT COUNT(*) > 0 FROM users WHERE username = '".$username."'");
	$row = mysql_fetch_row($result);
	return !$row[0];
  }

  // on regarde l'id de la dernière personne ajoutée à la BDD 
  function getId(){
	$resultat = mysql_query("SELECT MAX(user_id) FROM users");
	$row = mysql_fetch_row($resultat);
	return $row[0];
  
  }
  //On ajoute le nouveau individi avec son id username email et mot de passe crypté à la BDD
  function addUser($id,$username, $email, $cryptmdt){
	return mysql_query("INSERT INTO users (user_id, username, password, email) VALUES('".$id."','".$username."','".$cryptmdt."','".$email."')");
	}
  

?>
