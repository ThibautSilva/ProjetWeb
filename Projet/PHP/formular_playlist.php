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
	  
	    <h2>Nouvelle Playlist</h2>
		    </br>Nom de la Playlist:
			</br>
			<form action="registration_playlist.php?>" method="post" id=form>
			<input name="playlist_name" type="text"/>

			
			<p>
		    <input type="submit" value="Créer la playlist" alt="box shadow"/>
		  </p>
	
		  </form>
		</div>
	<?php include "../PHP/connexion_zone.php"?>
	<?php include "../PHP/nav.php"?>
	<?php include "../PHP/playing_zone.php"?>
  </body>
</html>