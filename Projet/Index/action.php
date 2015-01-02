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
	<?php
	
		require('../PHP/base.php');
			$valid = true;
			$message = "";
			$user_id=1;
			$act= $_GET['act'];
			$name= $_GET['name'];

		if ($act=="read")
		{
			include "readplaylist.php";
		}
		if ($act=="rename")
		{
			include "rename.php";
		}
		if ($act=="delete")
		{
				$deleteOK= deletePlaylist( $user_id,$name);
				if($deleteOK)
				{
					echo '<p>La Playlist '.$name.' a été supprimée avec succes </p>';
				}
				else
				{
					$message .= '<p class="error">Un problème est intervenu lors de la Suppression de la PlayList  '.$name.'</p>';
				}
		}
		
		else
		{
			echo $message;	
			echo '<p><a href="../Index/Indexs.php">Retour vers la page principale.</a></p>';
		}
  ?>
  
   </div>
   
	<?php include "../PHP/connexion_zone.php"?>
	<?php include "../PHP/nav.php"?>
	<?php include "../PHP/playing_zone.php"?>
	
  </body>
  </html>
   
  <?php
 
require('../PHP/base.php');
   /**
   * Put the playlits and its owner in the database.
   */  
 function deletePlaylist($user_id,$playlist_name)
 {
	$OK = mysql_query("DELETE FROM playlists WHERE user_id='".$user_id."' AND playlist_name='".$playlist_name."'");
	return $OK;
 }
  ?>
  

