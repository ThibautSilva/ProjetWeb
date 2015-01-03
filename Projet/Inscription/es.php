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
  
$valid = true;
  $message = "";
$id = getId()+1;
  
  // Check user name
  if (!isset($_POST['username']) || strlen($_POST['username']) < 4){
	$valid = false;
    $message .= 'Le nom d\'utilisateur est trop court.';
  }
  else{
    $username = $_POST['username'];  
  }
  
  // Check password  
  if (!isset($_POST['password']) || strlen($_POST['password']) < 8){
    $valid = false;
    $message .= 'Le mot de passe est trop court.';
  }
  else{
    $password = $_POST['password'];
	
    // Check password confirmation
    if (!isset($_POST['confirmation']) || $_POST['confirmation'] != $password){
      $valid = false;
      $message .= 'Le mot de passe et sa confirmation ne sont pas identiques.';
    }	
  }
if (!isset($_POST['email'])){
      $valid = false;
      $message .= 'Le mot de passe et sa confirmation ne sont pas identiques.';
    }	
	else{
	$email = $_POST['email'];
  }

  // Check the availability of the user name
  if ($valid){
	$available = checkUserName($username);
	if (!$available){
	  $valid = false;
	  $message .= 'Le nom d\'utilisateur '.$username.' est déjà pris.';
	}
  }

  // All the criteria were respected, add user

  if ($valid){
	$cryptedPw = md5($password);	// Password encryption
	$userOK = addUser($id,$username, $email, $cryptedPw);
	
	if ($userOK){
	    echo "L'inscription a été réalisée avec succès.";
	  }
    }
  // At least one criterion was not respected, display error messages
  else{
    echo "L'inscription n'a pas pu être validée pour les raisons suivantes :";
    echo $message;	
	echo '<a href="exemple.php">Retour vers le formulaire d\'inscription.</a>';
  }
  ?>
  

  </body>
</html>

<?php

  /**
   * Check the availability of a user name.
   */
  function checkUserName($username){
    $result = mysql_query("SELECT COUNT(*) > 0 FROM users WHERE username = '".$username."'");
	$row = mysql_fetch_row($result);
	return !$row[0];
  }

  /**
   * Put the user and its genres in the database.
   */  
  function getId(){
	$resultat = mysql_query("SELECT MAX(user_id) FROM users");
	$row = mysql_fetch_row($resultat);
	return $row[0];
  
  }
  
  function addUser($id,$username, $email, $cryptedPw){
	$OK = mysql_query("INSERT INTO users (user_id, username, password, email) VALUES('".$id."','".$username."','".$cryptedPw."','".$email."')");
	return $OK;
  }
  

?>
