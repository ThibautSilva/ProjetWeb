<?php
    /**
     * Classe Playlists en activ record
     *
     */
    class Playlists {

	private $user_id;
	private $playlist_id;
	private $playlist_name; 

	public function __construct() {
	    
	}

	/**
	 *  Magic pour imprimer
	 *
	 *  Fonction Magic retournant une chaine de caracteres imprimable
	 *  pour imprimer facilement un Ouvrage
	 */
	public function __toString() {
	    return "[". __CLASS__ . "] user_id : ". $this->user_id . ":
                   playlist_id  ". $this->playlist_id  .":
                   playlist_name ". $this->playlist_name;
	}

	/**
	 *   Getter magique
	 *
	 *   fonction d'acces aux attributs d'un objet.
	 *   Recoit en parametre le nom de l'attribut accede
	 *   et retourne sa valeur.
	 *  
	 */
	public function __get($attr_name) {
	    if (property_exists(__CLASS__, $attr_name)) {
		return $this->$attr_name;
	    }
	    $emess = __CLASS__ . ": unknown member $attr_name (getAttr)";
	    throw new Exception($emess, 45);
	}

	/**
	 *   Setter magique
	 *
	 *   fonction de modification des attributs d'un objet.
	 *   Recoit en parametre le nom de l'attribut modifie et la nouvelle valeur
	 *  
	 */
	public function __set($attr_name, $attr_val) {
	    if (property_exists(__CLASS__, $attr_name)) {
		$this->$attr_name = $attr_val;
	    }
	}

	/**
	 *   mise a jour de la ligne courante
	 *   
	 *   Sauvegarde l'objet courant dans la base en faisant un update
	 *   l'identifiant de l'objet doit exister (insert obligatoire auparavant)
	 *   méthode privée - la méthode publique s'appelle save
	 */
	public function update() {

	    if (!isset($this->id)) {
		throw new Exception(__CLASS__ . ": Primary Key undefined : cannot update");
	    }

	    try {
		$c = Base::getConnection();

		$query = $c->prepare( "UPDATE playlists SET playlist_id = :playlist_id, playlist_name = :playlist_name WHERE user_id = :user_id");    
        
        $query->bindParam (':playlist_id', $this->playlist_id, PDO::PARAM_STR);
        $query->bindParam (':playlist_name', $this->playlist_name, PDO::PARAM_STR);
        $query->bindParam (':user_id', $this->user_id, PDO::PARAM_INT); 

		return $query->execute();
	    } catch (Exception $e) {
		$e->getMessage();
	    }


	    /*
	     * exécution de la requête
	     */
	}

	/**
	 *   Suppression dans la base
	 *
	 *   Supprime la ligne dans la table corrsepondant à l'objet courant
	 *   L'objet doit posséder un OID
	 */
	public function delete() {

	    if (!isset($this->id)) {
		throw new Exception(__CLASS__ . ": Primary Key undefined : cannot delete");
	    }
	    try {
		$c = Base::getConnection();

		$query = $c->prepare("DELETE FROM playlists WHERE user_id = :user_id");

		$query->bindParam(':user_id', $this->user_id, PDO::PARAM_INT);

		$query->execute();

		return $query->rowCount();

	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

	/**
	 *   Insertion dans la base
	 *
	 *   Insère l'objet comme une nouvelle ligne dans la table
	 *   l'objet doit posséder  un code_rayon
	 *
	 *   @return int nombre de lignes insérées
	 */
	public function insert() {

	    try {

			$c = Base::getConnection();

			$query = "INSERT INTO playlists VALUES (user_id,NULL,:playlist_name)";
        	$query->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);             
            $query->bindParam(':playlist_name', $this->playlist_name, PDO::PARAM_STR);

			$query->execute();

			$this->playlist_id = $c->LastInsertId('playlists');

			$this->update();
	    } catch (Exception $e) {
			echo $e->getMessage();
	    }
	}

	/**
	 *   Finder sur ID
	 *
	 *   Retrouve la ligne de la table correspondant au ID passé en paramètre,
	 *   retourne un objet
	 */
	public static function findById($playlist_id) {

	    try {

		$c = Base::getConnection();
		$query = $c->prepare("SELECT * FROM playlists WHERE playlist_id = :playlist_id");
		$query->bindParam(':playlist_id', $playlist_id, PDO::PARAM_INT);
		$dbres = $query->execute();

		$row = $query->fetch(PDO::FETCH_ASSOC);

		$playlists = new Playlists();
        $playlists->user_id = $row['user_id'];
        $playlists->playlist_id = $row['playlist_id'];
        $playlists->playlist_name = $row['playlist_name'];

		return $playlists;

	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

	/**
	 *   Finder All
	 *
	 *   Renvoie toutes les lignes de la table categorie
	 *   sous la forme d'un tableau d'objet
	 *  
	 *   @static
	 *   @return Array renvoie un tableau de categorie
	 */
	public static function findAll() {

	    try {
		$c = Base::getConnection();
		$query = $c->prepare("SELECT * FROM playlists");
		$query->execute();
		$result = $query->fetchAll();
		$array_result = array();

		foreach ($result as $row) {
		    $playlists = new Playlists();
       	 	$playlists->user_id = $row['user_id'];
        	$playlists->playlist_id = $row['playlist_id'];
        	$playlists->playlist_name = $row['playlist_name'];

		    $array_result[] = $playlists;
		}

		return $array_result;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

	

}
