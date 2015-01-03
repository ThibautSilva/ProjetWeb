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
			echo "lire";
		}
		if ($act=="rename")
		{
			if (!isset($_POST['playlist_new_name']) || strlen($_POST['playlist_new_name'])== 0 )
			{
				$valid = false;
				$message .= '<p class="error">Aucun nom de playlist, entrer un nom de playlist</p>';
			}
			else
			{
				$newname=$_POST['playlist_new_name'];
			}
			if ($valid)
			{
				$available = checkPlaylistName($newname);
				if (!$available)
				{
				  $valid = false;
				  $message .= '<p class="error">le nom de playlists '.$newname.' est déjà pris.</p>';
				}
			}
			if ($valid)
			{
				echo "<p>Le nom a été validé par le serveur.<p/>";
				$playlistsOK = renamePlaylists($user_id,$name,$newname);
				if ($playlistsOK)
				{
					echo '<p>La Playlist '.$name.' a été renomée '.$newname.' avec succes </p>';
				}
			}
			
			
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
			echo '<p><a href="../HTML/indexs.php">Retour vers la page principale.</a></p>';
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
   * Put the delete the plalist by using the playlist nam from the database.
   */  
 function deletePlaylist($user_id,$playlist_name)
 {
	$OK = mysql_query("DELETE FROM playlists WHERE user_id='".$user_id."' AND playlist_name='".$playlist_name."'");
	return $OK;
 }
    /**
   * check if the playlist namme is not taken
   */  
   function checkPlaylistName($playlist_name){
    $result = mysql_query("SELECT COUNT(*) FROM playlists WHERE playlist_name = '".$playlist_name."'");
	$row = mysql_fetch_row($result);
	return !$row[0];
  }
  
      /**
   * Rename the playlist
   */ 
  function renamePlaylists($user_id,$playlist_name,$newname)
 {
	$OK = mysql_query("UPDATE playlists SET playlist_name = '".$newname."' WHERE playlist_name = '".$playlist_name."' AND user_id='".$user_id."'");
	return $OK;
 }
  ?>
  

