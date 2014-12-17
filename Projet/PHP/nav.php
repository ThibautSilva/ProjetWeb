<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<title>Site de Musique</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Projet.css">
</head>
	</body>
	<div id=nav>
		 <h2>Playlist</h2>
		 <button type="button" id=btn_p onclick='document.location.href="../PHP/formular_playlist.php";' > Nouvelle </button>
		</br>

		</br><ul id=menu>
		<?php
		//AFFICHAGE DES PL DU LUTILISATEUR
		require('../PHP/base.php');
		$req  = mysql_query("SELECT * FROM playlists WHERE user_id='1'");
		while($row = mysql_fetch_array($req))
		{
		echo " <ul id='niveau1'>
				<li name=playlist_name> <a href='#'>". $row['playlist_name'] . " </a>
				<ul id='niveau2'>
					<li> <a href='#'>Lire</a> </li>
					<li> <a href='#'>Renommer</a> </li>
					<li> <a href='#'>Effacer</a></li>
				</ul>
			</ul>";
		}
		?>
		</ul>
	</div>
	
	</body>
</html>