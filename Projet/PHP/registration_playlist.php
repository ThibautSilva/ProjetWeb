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
	
		require('base.php');
			$valid = true;
			$message = "";
			$user_id=1;
			
		$playlist_id= addID($user_id)+1;
		if (!isset($_POST['playlist_name']) || strlen($_POST['playlist_name'])== 0 )
		{
			$valid = false;
			$message .= '<p class="error">Aucun nom de playlist, entrer un nom de playlist</p>';
		}
		else
		{
			$playlist_name = $_POST['playlist_name'];  
		}
		 if ($valid)
		{
			$available = checkPlaylistName($playlist_name);
			if (!$available)
			{
			  $valid = false;
			  $message .= '<p class="error">le nom de playlists '.$playlist_name.' est déjà pris.</p>';
			}
		}
		if ($valid)
		{
			echo "<p>Le nom a été validé par le serveur.<p/>";
			$playlistsOK = addPlaylists($user_id,$playlist_id,$playlist_name);
			if ($playlistsOK)
			{
				echo '<p>La Playlist '.$playlist_name.' a été ajoutée avec succes </p>';
			}
		}

		else
		{
			echo "<p class=\"error\">L'ajout de playlist n'a pas pu être validé pour les raisons suivantes :</p>";
			echo $message;	
			echo '<p><a href="formular_playlist.php">Retour vers le formulaire d\'ajout de playlists.</a></p>';
		}
  ?>
   </div>
   
	<?php include "../PHP/connexion_zone.php"?>
	<?php include "../PHP/nav.php"?>
	<?php include "../PHP/playing_zone.php"?>
	
  </body>
  </html>
   
  <?php
 
 require('base.php');
   /**
   * Put the playlits and its owner in the database.
   */  
 function addPlaylists($user_id,$playlist_id,$playlist_name)
 {
	$OK = mysql_query("INSERT INTO playlists(user_id,playlist_id,playlist_name) VALUES(".$user_id.",".$playlist_id.",'".$playlist_name."' )");
	return $OK;
 }
 
 function addID($user_id)
 {
	$id= mysql_query("SELECT MAX(playlist_id) FROM playlists WHERE user_id='".$user_id."'");
	$row = mysql_fetch_row($id);
	return $row[0];
 }
 
   /**
   * Check the availability of a user name.
   */
  function checkPlaylistName($playlist_name){
    $result = mysql_query("SELECT COUNT(*) FROM playlists WHERE playlist_name = '".$playlist_name."'");
	$row = mysql_fetch_row($result);
	return !$row[0];
  }

  ?>
  

