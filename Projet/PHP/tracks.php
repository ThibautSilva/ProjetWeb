 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Playlisten</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../CSS/Projet.css">
  </head>
  
  <body>
  <div id=principal_zone>
		<?php
		  // Connect to the database
		  require 'base.php';
		  // Character encoding of the database
		  mysql_query("SET NAMES 'utf8'");

		  // Build query
		  $query = "SELECT  * FROM artists NATURAL JOIN tracks;";
		  
		  // Send query
		  $result = mysql_query($query);
		
		  // Get response
		  $rows = array();
		   echo '<ul class="nav"><table id=tracksTable>
					<TR> 
						<TD><h2>Titres</h2></TD>
						<TD><h2>Artistes</h2></TD>
					</TR>	
					
					'; 
		  while($row = mysql_fetch_assoc($result)){
				echo'
					<TR>
						<TD>
							
							 <li class="nav-item"><a href="#">'.$row['title'].'</a></li>
							
							<ul class="nav sub-nav">';
							$req  = mysql_query("SELECT * FROM playlists WHERE user_id='1'");
							while($row_pl = mysql_fetch_array($req))
							{
							echo " <li class='sub-nav-item'> <a href='action.php?act=ajouter&playlist_id=".$row_pl['playlist_id']."&track_id=". $row['track_id'] ."'>". $row_pl['playlist_name'] . " </a> </li>";
							}
							echo'
						</ul></TD>
						
						<TD><a href=index.php?a=artist&id='.$row['artist_id'].'">'. $row['name'].'</a></TD>
					</TR> 
					';
		  }
		  echo '</table></ul>';

		?>
		</div>
	</body>
</html>


