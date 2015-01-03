<?php
    /**
     * Classe Artists en activ record
     *
     */
    class Artists {

	private $artist_id;
	private $name;
	private $image_url;
	private $info;

	public function __construct() {
	    
	}

	/**
	 *  Magic pour imprimer
	 *
	 *  Fonction Magic retournant une chaine de caracteres imprimable
	 *  pour imprimer facilement un Ouvrage
	 */
	public function __toString() {
	    return "[". __CLASS__ . "] artist_id : ". $this->artist_id . ":
                   				name  ". $this->name  .":
                   				url ". $this->image_url. ":
                   				information ". $this->info;
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


		$query = $c->prepare( "UPDATE artists SET name = :name, image_url = :image, info = :info WHERE artist_id = :artist_id");    
        
        $query->bindParam (':name', $this->name, PDO::PARAM_STR);
        $query->bindParam (':image', $this->image_url, PDO::PARAM_STR);
        $query->bindParam (':info', $this->info, PDO::PARAM_STR);
        $query->bindParam (':artist_id', $this->artist_id, PDO::PARAM_INT);

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

		$query = $c->prepare("DELETE FROM artists WHERE artist_id = :artist_id");

		$query->bindParam(':artist_id', $this->artist_id, PDO::PARAM_INT);

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

			$query = "INSERT INTO artists VALUES (NULL,:name,:image,:info)";
        	$query->bindParam(':name', $this->name, PDO::PARAM_STR);             
        	$query->bindParam (':image', $this->image_url, PDO::PARAM_STR);
        	$query->bindParam (':info', $this->info, PDO::PARAM_STR);

			$query->execute();

			$this->artist_id = $c->LastInsertId('artists');

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
	public static function findById($artist_id) {

	    try {

		$c = Base::getConnection();
		$query = $c->prepare("SELECT * FROM artists WHERE artist_id = :artist_id");
		$query->bindParam(':artist_id', $artist_id, PDO::PARAM_INT);
		$dbres = $query->execute();

		$row = $query->fetch(PDO::FETCH_ASSOC);

		$artists = new Artists();
		$artists->artist_id = $row['artist_id'];
        $artists->name = $row['name'];
        $artists->image_url = $row['image_url'];
        $artists->info = $row['info'];

		return $artists;

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
	 */
	public static function findAll() {

	    try {
		$c = Base::getConnection();
		$query = $c->prepare("SELECT * FROM artists");
		$query->execute();
		$result = $query->fetchAll();
		$array_result = array();

		foreach ($result as $row) {
		    $artists = new Artists();
			$artists->artist_id = $row['artist_id'];
        	$artists->name = $row['name'];
        	$artists->image_url = $row['image_url'];
        	$artists->info = $row['info'];

		    $array_result[] = $artists;
		}

		return $array_result;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

	/*public static function findByTitre($titre) {

	    try {
		$c = Base::getConnection();
		$query = $c->prepare("SELECT * FROM billets WHERE titre = :titre");
		$query->bindParam(':titre', $titre, PDO::PARAM_STR);
		$query->execute();
		$result = $query->fetchAll();
		$array_result = array();

		foreach ($result as $value) {
		    $billet = new Billet();
		    $billet->id = $value['id'];
		    $billet->titre = $value['titre'];
		    $billet->body = $value['body'];
		    $billet->cat_id = $value['cat_id'];
		    $billet->date = $value['date'];

		    $array_result[] = $billet;
		}

		return $array_result;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}*/

}
