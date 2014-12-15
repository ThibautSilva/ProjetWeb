<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
	<link rel="stylesheet" type="text/css" href="Projet.css">
</head>

<body>

	<div id=principal_zone>
	

		
	</div>
	
	<div id=header>
		<form method="get" action="/search" id=search>
			<input name="q" type="text"  placeholder="Artiste, Titre, Playlist..." />
		</form>
	</div>
	
	<div id=disconnection_zone>
	
		<img src="Images/user.png" id=user>
		<button type="button" id=btn_d>Déconnexion</button>
		
	</div>
	
	<div id=nav>
		 <h2>Playlist</h2>
		 <button type="button" id=btn_p> Nouvelle </button>
		</br>

		<?php
		//AFFICHAGE DES PL DU LUTILISATEUR
		require('base.php');
		$req  = mysqli_query($connection,"SELECT * FROM playlists WHERE user_id='1'");
		while($row = mysqli_fetch_array($req))
		{
		echo $row['playlist_name'] . "<br />";
		}
		?>
	
	</div>
	

	<div id=playing_zone>
	
	</div> 
	
</body>
</html>