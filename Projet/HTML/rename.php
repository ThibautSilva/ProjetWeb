 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Site de Musique - Ajout de Playlists</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../CSS/Projet.css">
  </head>
  
  <body>
	<?php include "../PHP/header.php"?>
	
	<div id=principal_zone>
	    <h2>Nouveau Nom de Playlist : <?php echo $_GET['name']?></h2>
		
		    </br>Entrer  le nouveau nom de votre playlist:
			</br>
			<form action="action.php?act=rename&name= <?php echo $_GET['name']?> " method="post" id=form>
			<input name="playlist_new_name" type="text"/>
			
			<p>
		    <input type="submit" value="Renommer" />
			</p>
	
		  </form>
	</div>
	<?php include "../PHP/connexion_zone.php"?>
	<?php include "../PHP/nav.php"?>
	<?php include "../PHP/playing_zone.php"?>
	
  </body>
  </html>
 
</html>