 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Playlisten</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../CSS/Projet.css">
  </head>
  
  <body>
	  <?php include "header.php"?>
	  <div id=principal_zone>
		<?php
		  // Connect to the database
		  require 'base.php';
		  // Character encoding of the database
		  mysql_query("SET NAMES 'utf8'");

		  // Build query
		  $query = "SELECT * FROM playlists_tracks NATURAL JOIN tracks NATURAL JOIN artists WHERE playlist_id=".$_GET['playlist_id'].";";
		  
		  // Send query
		  $result = mysql_query($query);
		
		  // Get response
		  $rows = array();
		   echo '<table id=tracksTable>
					<TR> 
						<TD></TD><TD></TD>
						<TD><h2>Titres</h2></TD>
						<TD><h2>Artistes</h2></TD>
					</TR>	
					<ul>
					'; 
		  while($row = mysql_fetch_assoc($result)){
				echo'
					<TR>
						<TD><a href="action.php?act=delete_track&playlist_id='.$_GET['playlist_id'].'&track_id='.$row['track_id'].'"><img src="../Images/poubelle.png" id=poubelle></a>
						<TD>'.$row['position'].'</TD>'
							;
							$req  = mysql_query("SELECT * FROM playlists WHERE user_id='1'");
							
						echo '</TD>
						<TD>'.$row['title'].'</TD>
						<TD><a href=index.php?a=artist&id='.$row['artist_id'].'">'. $row['name'].'</a><TD>
					</TR> 
					';
		  }
		  echo '</ul></table>';

		?></div>
			<?php include "connexion_zone.php"?>
			<?php include "nav.php"?>
			<?php include "playing_zone.php"?>
		
	</body>
</html>