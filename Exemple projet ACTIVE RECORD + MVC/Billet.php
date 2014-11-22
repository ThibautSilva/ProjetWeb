<?php
    /**
     * Description of Billet
     *
     * @author Outpox
     */
    class Billet {

	private $id;
	private $titre;
	private $body;
	private $cat_id;
	private $date;

	public function __construct() {
	    // rien à faire
	}

	/**
	 *  Magic pour imprimer
	 *
	 *  Fonction Magic retournant une chaine de caracteres imprimable
	 *  pour imprimer facilement un Ouvrage
	 *
	 *  @return String
	 */
	public function __toString() {
	    return "[" . __CLASS__ . "] 
	    	id : " . $this->id . ":
		    titre  " . $this->titre . ":
		    body " . $this->body . ":
		    cat_id " . $this->cat_id . ":
		    date " . $this->date;
	}

	/**
	 *   Getter magique
	 *
	 *   fonction d'acces aux attributs d'un objet.
	 *   Recoit en parametre le nom de l'attribut accede
	 *   et retourne sa valeur.
	 *  
	 *   @param String $attr_name attribute name 
	 *   @return mixed
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
	 *   @param String $attr_name attribute name 
	 *   @param mixed $attr_val attribute value
	 *   @return mixed new attribute value
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
	 *   @acess public
	 *   @return int nombre de lignes mises à jour
	 */
	public function update() {

	    if (!isset($this->id)) {
		throw new Exception(__CLASS__ . ": Primary Key undefined : cannot update");
	    }

	    try {
		$c = Base::getConnection();


		$query = $c->prepare("update billets 
			    set titre= :titre, body= :body, cat_id = :cat_id, date= :date
			    where id= :id");

		$query->bindParam(':id', $this->id, PDO::PARAM_INT);
		$query->bindParam(':titre', $this->titre, PDO::PARAM_STR);
		$query->bindParam(':body', $this->body, PDO::PARAM_STR);
		$query->bindParam(':cat_id', $this->cat_id, PDO::PARAM_INT);
		$query->bindParam(':date', $this->date, PDO::PARAM_STR);

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

	    /**
	     *  A ECRIRE
	     *  CONSTRUIT PUIS EXECUTE LA REQUETE
	     *  DELETE FROM Categorie Where id = xxx
	     *  RETOURNE LE NOMBRE DE LIGNES SUPPRIMEES
	     *
	     */
	    if (!isset($this->id)) {
		throw new Exception(__CLASS__ . ": Primary Key undefined : cannot delete");
	    }
	    try {
		$c = Base::getConnection();

		$query = $c->prepare("delete from billets where id = :id");

		$query->bindParam(':id', $this->id, PDO::PARAM_INT);

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

		$query = $c->prepare("insert into billets values (:id, :titre, :body, :cat_id, :date)");

		$a = null;
		$query->bindParam(':id', $a, PDO::PARAM_INT);
		$query->bindParam(':titre', $this->titre, PDO::PARAM_STR);
		$query->bindParam(':body', $this->body, PDO::PARAM_STR);
		$query->bindParam(':cat_id', $this->cat_id, PDO::PARAM_INT);
		$query->bindParam(':date', $this->date, PDO::PARAM_STR);

		$query->execute();

		$this->id = $c->LastInsertId('billets');
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
	 *  
	 *   @static
	 *   @param integer $id OID to find
	 *   @return Categorie renvoie un objet de type Categorie
	 */
	public static function findById($id) {

	    try {

		$c = Base::getConnection();
		$query = $c->prepare("select * from billets where id = :id");
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$dbres = $query->execute();

		$row = $query->fetch(PDO::FETCH_ASSOC);

		$billet = new Billet();
		$billet->id = $row['id'];
		$billet->titre = $row['titre'];
		$billet->body = $row['body'];
		$billet->cat_id = $row['cat_id'];
		$billet->date = $row['date'];


		return $billet;
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
		$query = $c->prepare("SELECT * FROM billets");
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
	}

	public static function findPlusRecents() {

	    try {
		$c = Base::getConnection();
		$query = $c->prepare("SELECT * FROM billets ORDER BY date DESC LIMIT 10");
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
	}

	public static function findByTitre($titre) {
	   try {

		$c = Base::getConnection();
		$query = $c->prepare("select * from billets where titre = :titre");
		$query->bindParam(':titre', $id, PDO::PARAM_STR);
		$query->execute();

		$result = $query->fetchAll();
		$array_result = array();

		foreach ($result as $value) {
			$billet = new Billet();
			$billet->id = $row['id'];
			$billet->titre = $row['titre'];
			$billet->body = $row['body'];
			$billet->cat_id = $row['cat_id'];
			$billet->date = $row['date'];

			$array_result[] = $billet;
		}

		return $billet;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

	public static function findByCat($cat_id) {
	   try {

		$c = Base::getConnection();
		$query = $c->prepare("select * from billets where cat_id = :cat_id");
		$query->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
		$query->execute();

		$result = $query->fetchAll();
		$array_result = array();

		foreach ($result as $value) {
			$billet = new Billet();
			$billet->id = $row['id'];
			$billet->titre = $row['titre'];
			$billet->body = $row['body'];
			$billet->cat_id = $row['cat_id'];
			$billet->date = $row['date'];

			$array_result[] = $billet;
		}

		return $result;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

    }

?>
