<?php
include_once('Controler.php') ;
include_once('../Model/Artists.php') ;
include_once('../Model/Tracks.php') ;
include_once('../Model/Playlists.php') ;
include_once('../Model/Playlists_tracks.php') ;
include_once('View.php') ;
include_once('../Model/Base.php');

class SiteControler extends Controler{

	public function __construct() {
		$this->actionList = array(  'search' 	=> 'searchAction',
									'signup' 	=> 'signupAction',
									'track' 	=> 'trackDetailAction',
									'artist' 	=> 'artistDetailAction',
									'playlist' 	=> 'playlistDetailAction',
									'login'		=> 'loginAction') ;
	}

	protected function trackDetailAction($tab)
	{
		if(array_key_exists('id', $tab)) {
			$track = Tracks::findById($tab['id']) ;
			$view = new View() ;
			$view->affichageDetail($track) ;
		}
	}

	protected function artistDetailAction($tab)
	{
		if(array_key_exists('id', $tab)) {
			$artist = Artists::findById($tab['id']) ;
			$view = new View() ;
			$view->affichageArtist($artist) ;
		}
	}

	protected function playlistDetailAction($tab)
	{
		if(array_key_exists('id', $tab)) {
			$playlist = Playlists::findById($tab['id']) ;
			$view = new View() ;
			$view->affichagePlaylist($playlist) ;
		}
	}

	protected function searchAction($tab)
	{
		$tracks = Tracks::findAll();

		$artists = Artists::findAll();

		$playlists = Playlists::findAll();

		$result_tracks = array();
		$result_artists = array();
		$result_playlists = array();


		if(array_key_exists('q', $tab)) {

			foreach ($tracks as $value) {
				if (strpos($value->title, $_GET['q']) !== false) {
    				$result_tracks[] = $value;
				}	
			}

			foreach ($artists as $value) {
				if (strpos($value->name, $_GET['q']) !== false) {
    				$result_artists[] = $value;
				}	
			}
	
			foreach ($playlists as $value) {
				if (strpos($value->playlist_name, $_GET['q']) !== false) {
    				$result_playlists[] = $value;
				}	
			}
		}

		$view = new View() ;

		$view->afficheSearch($result_tracks, $result_artists, $result_playlists);

	}

	


	protected function defaultAction($tab)
	{
		$this->signupAction($tab) ;
	}
	
	protected function loginAction($tab)
	{
		
	}
	
	protected function signupAction($tab)
	{
	
		$view = new View() ;

		$view->signup() ;
		
	}
	
	
	protected function addCaction($tab)
	{
		$view = new View() ;

		$view->affichageGeneral(6) ;
	}
	
	protected function saveCaction($tab)
	{
		if (isset($_POST['titre']) && isset($_POST['description'])){
			$cat = new Categorie() ;
			$cat->titre = $_POST['titre'] ;
			$cat->description = $_POST['description'] ;
			
		}
			$cat->insert() ;	
			
			$listBillets = Billet::findAll()  ;
			
			$view = new View($listBillets) ;

			$view->affichageGeneral(2) ;
		
	}

}
	