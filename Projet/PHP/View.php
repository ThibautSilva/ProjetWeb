<?php

include_once('SiteControler.php') ;

class View {
	

    private $billet;
    private $listTracks;
    private $listcat;
    private $listRecents;

    public function __construct($value='') {
        if (is_a($value, 'Tracks')) {
            $this->track = $value;
        } elseif (is_array($value)) {
            $this->listTracks = $value;
        }
        
    }

    

    private function afficheListeTracks() {
        $res = '<div>';
        foreach ($this->listTracks as $value) {
            $res .= '<h2>Liste des Tracks :</h2>';
            $res .= '<button id="play" onClick="playAudio(\''.$value->mp3_url.'\',\''.$value->title.'\')"><img src="../Images/play.png" width="15px"/></button><a href=http://localhost/projects/Projet/PHP/index.php?a=track&id=' . $value->track_id .'>'. $value->title . '</a><br/>';
        }
        $res .= '</div>';

        return $res;
    }
	
	private function afficheSignup() {

    }

    public function affichageDetail($track)
    {
    	$res = '
       <html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>PlayListen</title>
			<link rel="stylesheet" type="text/css" href="CSS/Projet.css">
		</head>
        <body>';
        include "header.php" ;
        $res .='<div id="principal_zone">';
        $res .='<p>Titre : ' . $track->title . '</p></br>';
        $artist = Artists::FindById($track->artist_id);
        $res .='<p>Artiste : ' . $artist->name . '</p></br>';
        $res .='<button id="play" onClick="playAudio(\''.$track->mp3_url.'\',\''.$track->title.'\')"><img src="../Images/play.png" width="15px"/></button>';
        $res .= '</div>
        </body>
        </html>';
        echo $res;
        include "connexion_zone.php";
        include "nav.php";
        include "playing_zone.php";
        return $res;

    }

    public function affichageArtist($artist)
    {
    	$res = '
       <html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>PlayListen</title>
			<link rel="stylesheet" type="text/css" href="CSS/Projet.css">
		</head>
        <body>';
		include "header.php";
        $res .='<div id=principal_zone>';
        $res .='<h2>' . $artist->name . '</h2></br>';
		$res .='<img src="' . $artist->image_url . ' "id= image>';
        $res .='<h2>Info : </h2>' . $artist->info . '</br>
		        </div>
			</body>
		</html>';
        
        echo $res;
		include "connexion_zone.php";
		include "nav.php";
		include "playing_zone.php";
    }

    public function affichagePlaylist($playlist)
    {
    	$res = '
       <html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>PlayListen</title>
			<link rel="stylesheet" type="text/css" href="CSS/Projet.css">
		</head>
        <body>';

        $res .='<div id="detailPlaylist">';
        $res .='<p>Nom de la playlist : ' . $playlist->playlist_name . '</p></br>';

        $playlist_tracks = Playlists_tracks::FindById($playlist->playlist_id);

        foreach ($playlist_tracks as $value) {
        	$track = Tracks::FindById($value->track_id);
        	$res .= affichageDetail($track);
        }
        
        echo $res;

    }

    public function afficheSearch($tracks, $artists, $playlists) {

        $res = '
       <html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>PlayListen</title>
			<link rel="stylesheet" type="text/css" href="CSS/Projet.css">
		</head>
        <body>';
    
		include "header.php" ;
		$res .='<div id=principal_zone>
				Résultat de la recherche :
				';

        $res .= '<p>Liste des Tracks :</p>';
        foreach ($tracks as $value) {
            $res .= '<button id="play" onClick="playAudio(\''.$value->mp3_url.'\',\''.$value->title.'\')"><img src="../Images/play.png" width="15px"/></button><a href=http://localhost/projects/Projet/PHP/index.php?a=track&id=' . $value->track_id .'>'. $value->title . '</a><br/>';
        }
		
        $res .= '<p>Liste des Artistes :</p>';
        foreach ($artists as $value) {
            $res .= '<a href=http://localhost/projects/Projet/PHP/index.php?a=artist&id=' . $value->artist_id .'>'. $value->name . '</a><br/>';
        }

        $res .= '<p>Liste des Playlistes :</p>';
        foreach ($playlists as $value) {
            $res .= '<a href=http://localhost/projects/Projet/PHP/playlist.php?playlist_id='.$value->playlist_id.'</a><br/>';
        }
        $res .= '</div>
		</body>
		</html>';
        echo $res;
		include "connexion_zone.php";
		include "nav.php";
		include "playing_zone.php";
    }
	
	
	private function afficheLogin() {
       
    }

    public function signup(){
        include('page.php');
        
    }

    public function affichageGeneral($selecteur) {
        $res = '
       <html>
		<head>
			<meta charset="UTF-8">
			<title>PlayListen</title>
			<link rel="stylesheet" type="text/css" href="CSS/Projet.css">
		</head>
        <body>
    
		<?php include "header.php"?>
		</div id=principal_zone>';

        if ($selecteur == 1) {
            $res .= '' ;
        } elseif ($selecteur == 2) {
            $res .= $this->afficheListeTracks();
        } elseif ($selecteur == 3) {
            $res .= $this->afficheSignup();
        } elseif ($selecteur == 4) {
            $res .= $this->afficheLogin();
        }
        $res .='<aside id="sidebar">
                    
                </aside>

            </div>
	<?php include "PHP/connexion_zone.php"?>
	<?php include "PHP/nav.php"?>
	<?php include "PHP/playing_zone.php"?>
    </body>
</html>';

        echo $res;
    }

}
