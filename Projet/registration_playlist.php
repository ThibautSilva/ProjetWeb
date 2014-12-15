<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Enregistrement</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style.css"/>
  </head>

  <body>
  <div id=principal_zone>
  
    <?php
	
	require('base.php');
	
		$valid = true;
		$message = "";
		$user_id=1;
		$playlist_id=2;
    if (!isset($_POST['playlist_name']) || strlen($_POST['playlist_name']) < 0){
    $valid = false;
    $message .= '<p class="error">Aucun nom de playlist, entrer un nom de playlist</p>';
  }
  else{
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
		$playlitsOK = addPlaylits($user_id,$playlist_id,$playlist_name);
		if ($playlistsOK)
		{
			echo "<p>L'ajout de playlist a été réalisé avec succès.</p>";
		}
	}

	else{
    echo "<p class=\"error\">L'ajout de playlist n'a pas pu être validé pour les raisons suivantes :</p>";
    echo $message;	
	echo '<p><a href="formular_playlist.php">Retour vers le formulaire d\'inscription.</a></p>';
  }
  
 
     /**
   * Put the playlits and its owner in the database.
   */  
 function addPlaylits($user_id,$playlist_id,$playlist_name)
 {
	$OK = mysqli_query(mysqli_connect("localhost", "root"),"INSERT INTO playlists(user_id,playlist_id,playlist_name) VALUES(".$user_id.",".$playlist_id.",'".$playlist_name."' )");
	return $OK;
 }
 
   /**
   * Check the availability of a user name.
   */
  function checkPlaylistName($playlist_name){
    $result = mysqli_query(mysqli_connect("localhost", "root"),"SELECT COUNT(*) > 0 FROM playlists WHERE playlist_name = '".$playlist_name."'");
	$row = mysqli_fetch_row($result);
	return !$row[0];
  }

  ?>
