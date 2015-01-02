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
		 <button type="button" id=btn_p onclick='document.location.href="../PHP/formular_playlist.php";' > Nouvelle Playlist </button>
		</br>

		</br><ul id=menu>
		<?php
		//AFFICHAGE DES PL DU LUTILISATEUR
		require('../PHP/base.php');
		$req  = mysql_query("SELECT * FROM playlists WHERE user_id='1'");
		while($row = mysql_fetch_array($req))
		{
		echo " <ul >
				<li name=playlist_name> <a href='#'>". $row['playlist_name'] . " </a>
				<ul>
					<li> <a href='action.php?act=lire'>Lire</a> </li>
					<li> <a href='action.php?act=rename&name=".$row['playlist_name'] . "'>Renommer</a> </li>
					<li> <a href='action.php?act=delete&name=".$row['playlist_name'] . "'>Effacer</a></li>
				</ul>
			</ul>";
		}
		?>
		</ul>
	</div>
	
	</body>
</html>