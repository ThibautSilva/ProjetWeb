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

    
    private function blocCat() {
        $res = '<div class="menu">';
        $res .= '<li> <a href=https://webetu.iutnc.univ-lorraine.fr/~besson3u/Projet_Blog/Blog.php?a=signup > Inscription </a> </li>' ;
        $res .= '<li> <a href=https://webetu.iutnc.univ-lorraine.fr/~besson3u/Projet_Blog/Blog.php?a=login > Connexion </a> </li>' ;
        $res .= '<li> <a href=https://webetu.iutnc.univ-lorraine.fr/~besson3u/Projet_Blog/Blog.php?a=addM > Ajouter un Article </a> </li>' ;
        $res .= '<li> <a href=https://webetu.iutnc.univ-lorraine.fr/~besson3u/Projet_Blog/Blog.php?a=addC > Ajouter une Catégorie </a> </li>' ;
        $res .= '</div>';

        return $res;
    }
    

    private function afficheListeTracks() {
        $res = '<div id="contenu">';
        foreach ($this->listTracks as $value) {
            $res .= '<h2>Liste des Tracks :</h2>';
            $res .= $value->title . "<br/>";
        }
        $res .= '</div>';

        return $res;
    }
	
	private function afficheSignup() {

    }

    public function afficheSearch($tracks, $artists, $playlists) {

        $res = 'Résultat de la recherche :';

        $res .= '<div id="afficheSearchTracks">';
        $res .= '<p>Liste des Tracks :</p>';
        foreach ($tracks as $value) {
            $res .= $value->title . "<br/>";
        }
        $res .= '</div>';

        $res .= '<div id="afficheSearchArtists">';
        $res .= '<p>Liste des Artistes :</p>';
        foreach ($artists as $value) {
            $res .= $value->name . "<br/>";
        }
        $res .= '</div>';

        $res .= '<div id="afficheSearchPlaylists">';
        $res .= '<p>Liste des Playlistes :</p>';
        foreach ($playlists as $value) {
            $res .= $value->playlist_name . "<br/>";
        }
        $res .= '</div>';

        echo $res;
    }
	
	
	private function afficheLogin() {
       
    }

    public function signup(){
        include('PHP/header.php');
        include('Inscription/exemple.php');
    }

    public function affichageGeneral($selecteur) {
        $res = '
        <!doctype html>
        <html>
        <head>
            <meta charset="utf-8" />
            <title>Projet blog</title>
            <link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="print.css" type="text/css" media="print" />
        </head>
        <body>
            <div id="wrapper">

            <nav><!-- top nav -->
                <div class="menu">
                <ul>     

                </ul>
                </div>
            </nav>

            <header>
            </header>

            <section id="main">
                <section id="content">

                    <article>';

        if ($selecteur == 1) {
            $res .= '' ;
        } elseif ($selecteur == 2) {
            $res .= $this->afficheListeTracks();
        } elseif ($selecteur == 3) {
            $res .= $this->afficheSignup();
        } elseif ($selecteur == 4) {
            $res .= $this->afficheLogin();
        }
        $res .='</article>

                </section>

                <aside id="sidebar">
                    
                </aside>

            </section>

        </div>
    </body>
</html>';

        echo $res;
    }

}
