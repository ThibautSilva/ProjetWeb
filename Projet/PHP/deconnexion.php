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
</head>

  <body>
 <?php
// on le lie à notre BDD
 require('base.php');
 
// On reprend notre session existante / on appelle notre session courante
session_start();

// On écrase le tableau $_SESSION en initialisant un nouveau
$_SESSION = array();

// On supprime la session en cours! 
session_destroy();

// on redirige vers la page 
header('Location: exemple.php');

?>
</form>
</body>
</html>