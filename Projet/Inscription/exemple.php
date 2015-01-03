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

<div>
<form class="form-container" method="post" action="connection.php"><p> 
	<div class="form-title"><h2>Connexion</h2></div> 
		<input class="form-field" name="login" required="required" type="text" placeholder="Username" />
		<input class="form-field" name="password" required="required" type="password" placeholder="Mot de passe"/>
<div class="submit-container"><input class="submit-button" type="submit" value="Se connecter"/></div>
</form>
<br>
Nouveau sur PlayListen? Inscrivez-vous!
<div id="inscription">
<form class="form-container" method="post" action="es.php">
	<div class="form-title"><h2>Inscription</h2></div>
	    
		<input class="form-field" name="username" required="required" type="text" placeholder="Username" />
		<input class="form-field" name="email" required="required" type="email" placeholder="Adresse e-mail"/> 
		<input class="form-field" name="password" required="required" type="password" placeholder="Mot de passe"/>
		<input class="form-field" name="confirmation" required="required" type="password" placeholder="Confirmation du mot de passe"/>
<div class="submit-container"><input class="submit-button" type="submit" value="S'inscrire"/></div>
</div>
</form>
</div>


</body>
</html>