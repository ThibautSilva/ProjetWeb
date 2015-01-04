 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Playlisten</title>
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
			

		if ($act=="ajouter")
		{
		$track_id= $_GET['track_id'];
		$playlist_id= $_GET['playlist_id'];
		$position= getposition($playlist_id)+1;
			if ($valid)
			{
				$available = checkTracks($track_id);
				if (!$available)
				{
				  $valid = false;
				  $message .= '<p class="error">Le titre est déjà dans la playlist.</p>';
				}
			}
			if ($valid)
			{
				echo "Ce titre peut être ajouté a votre playlist";
				$playlistsOK = addtrack($playlist_id,$position,$user_id);
				if ($playlistsOK)
				{
					echo '<p>Le titre a été ajouté à votre playlist avec succes </p>';
					echo '<p><a href="playlist.php?playlist_id='.$playlist_id.'">Retour vers la playliste.</a></p>';
				}
			}
			
		}
		if ($act=="delete_track")
		{
		
				$track_id= $_GET['track_id'];
				$playlist_id= $_GET['playlist_id'];
				
				$deleteOK= deleteTrack( $playlist_id,$track_id);
				if($deleteOK)
				{
					echo '<p>Le titre a été supprimée avec succes </p>';
					echo '<p><a href="playlist.php?playlist_id='.$playlist_id.'">Retour vers la playliste.</a></p>';
				}
				else
				{
					$message .= '<p class="error">Un problème est intervenu lors de la Suppression de la PlayList  '.$name.'</p>';
				}
		}
		if ($act=="read")
		{
			echo "lire";
		}
		if ($act=="rename")
		{
			$name= $_GET['name'];
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
				$name= $_GET['name'];
				$deleteOK= deletePlaylist( $user_id,$name);
				if($deleteOK)
				{
					echo '<p>La Playlist '.$name.' a été supprimée avec succes </p>';
					echo '<p><a href="index.php">Retour vers la page principale.</a></p>';
				}
				else
				{
					$message .= '<p class="error">Un problème est intervenu lors de la Suppression de la PlayList  '.$name.'</p>';
				}
		}
		else
		{
			echo $message;	
			echo '<p><a href="index.php">Retour vers la page principale.</a></p>';
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
  
  function checkTracks($track_id){
    $result = mysql_query("SELECT COUNT(*) FROM playlists_tracks WHERE track_id = '".$track_id."'");
	$row = mysql_fetch_row($result);
	return !$row[0];
  }
  
      /**
   * Rename the playlist
   */ 
  function renamePlaylists($user_id,$playlist_name,$newname)
 {
	$OK = mysql_query("UPDATE playlists SET playlist_name ='".$newname."' WHERE playlist_name ='".$playlist_name."' AND user_id=".$user_id."");
	return $OK;
 }
 
       /**
   * Avoir la nouvelle position
   */
   function getposition($playlist_id)
 {
	$id= mysql_query("SELECT MAX(position) FROM playlists_tracks WHERE playlist_id='".$playlist_id."'");
	$row = mysql_fetch_row($id);
	echo 'position: '.$row[0];
	return $row[0];
 }
 
 function addtrack($playlist_id,$position,$track_id)
 {
	$OK = mysql_query("INSERT INTO playlists_tracks(playlist_id,position,track_id) VALUES(".$playlist_id.",'".$position."','".$track_id."' )");
	return $OK;
 }
 
  function deleteTrack($playlist_id,$track_id)
 {
	$OK = mysql_query("DELETE FROM playlists_tracks WHERE playlist_id='".$playlist_id."' AND track_id='".$track_id."'");
	return $OK;
 }
  ?>
  

