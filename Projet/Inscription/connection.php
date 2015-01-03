<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>PlayListen</title>
<link rel="stylesheet" type="text/css" href="gratuit.css" />
</head>

  <body>

 <?php

 require('base.php');
// On démarre la session
session_start();
$loginOK = false;  // cf Astuce

// On n'effectue les traitement qu'à la condition que 
// les informations aient été effectivement postées
if ( isset($_POST['login']) && !empty($_POST['login'])){

	if ( isset($_POST['password']) && !empty($_POST['password'])){

  extract($_POST);  // je vous renvoie à la doc de cette fonction

  // On va chercher le mot de passe afférent à ce login
  $sql = "SELECT user_id, username, password, email FROM users WHERE username = '".addslashes($login)."'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql);
  
  // On vérifie que l'utilisateur existe bien
  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
    
    // On vérifie que son mot de passe est correct
    if ($password == $data['password']) {
      $loginOK = true;
    }
	else {
	echo "Le mot de passe ou le unsername n'est pas correcte!";
	}
  }
}
}
// Si le login a été validé on met les données en sessions
if ($loginOK) {
  $_SESSION['user_id'] = $data['user_id'];
  $_SESSION['username'] = $data['username'];
  $_SESSION['password'] = $data['password'];
  $_SESSION['email'] = $data['email'];
  echo "Génial! Vous avez été connecté avec succès!";
}
else 
{
  echo '</br>Une erreur est survenue, veuillez réessayer !'; 
}

?>
<form class="form-container" method="post" action="deconnexion.php">
<div class="submit-container"><input class="submit-button" type="submit" value="Se déconnecter"/></div>
</form>
</body>
</html>