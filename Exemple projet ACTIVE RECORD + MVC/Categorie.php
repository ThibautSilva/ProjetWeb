<?php

    /**
     * File : Categorie.php
     *
     * @author G. Canals
     *
     *
     * @package blog
     */

    /**
     *  La classe Categorie
     *
     *  La Classe Categorie  realise un Active Record sur la table categorie
     *  
     *
     *  @package blog
     */
    class Categorie {

	/**
	 *  Identifiant de categorie
	 *  @access private
	 *  @var integer
	 */
	private $id;

	/**
	 *  libelle de categorie
	 *  @access private
	 *  @var String
	 */
	private $titre;

	/**
	 *  description de categorie
	 *  @access private
	 *  @var String
	 */
	private $description;

	/**
	 *  Constructeur de Categorie
	 *
	 *  fabrique une nouvelle categorie vide
	 */
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
	    return "[" . __CLASS__ . "] id : " . $this->id . ":
           titre  " . $this->titre . ":
           description " . $this->description;
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


		$query = $c->prepare("update categorie set titre= :titre, description= :description
                           where id= :id");

		$query->bindParam(':titre', $this->titre, PDO::PARAM_STR);
		$query->bindParam(':description', $this->description, PDO::PARAM_STR);
		$query->bindParam(':id', $this->id, PDO::PARAM_INT);

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

		$query = $c->prepare("delete from categorie where id = :id");

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

		$query = $c->prepare("insert into categorie values (:id, :titre, :description)");

		$a = null;
		$query->bindParam(':id', $a, PDO::PARAM_INT);
		$query->bindParam(':titre', $this->titre, PDO::PARAM_STR);
		$query->bindParam(':description', $this->description, PDO::PARAM_STR);

		$query->execute();

		$this->id = $c->LastInsertId('categorie');
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
		$query = $c->prepare("select * from categorie where id = :id");
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$dbres = $query->execute();

		$row = $query->fetch(PDO::FETCH_ASSOC);

		$cat = new Categorie();
		$cat->id = $row['id'];
		$cat->titre = $row['titre'];
		$cat->description = $row['description'];


		return $cat;
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
		$query = $c->prepare("select * from categorie");
		$query->execute();
		$result = $query->fetchAll();
		$array_result = array();

		foreach ($result as $value) {
		    $cat = new Categorie();
		    $cat->id = $value['id'];
		    $cat->titre = $value['titre'];
		    $cat->description = $value['description'];

		    $array_result[] = $cat;
		}

		return $array_result;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	}

	public static function findByTitre($titre) {
	    try {

		$c = Base::getConnection();
		$query = $c->prepare("select * from categorie where titre = :titre");
		$query->bindParam(':titre', $titre, PDO::PARAM_STR);
		$dbres = $query->execute();

		$row = $query->fetch(PDO::FETCH_ASSOC);

		$cat = new Categorie();
		$cat->id = $row['id'];
		$cat->titre = $row['titre'];
		$cat->description = $row['description'];


		return $cat;
	    } catch (Exception $e) {
		echo $e->getMessage();
	    }
	    
	}

    }

    