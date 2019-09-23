<?php
// variable globale aux fonctions
$requete = "SELECT * FROM employe WHERE 1=1";

// Renvoie la liste des employés
function getEmployes() {
    $cnx = getCnx();
    GLOBAL $requete;
    $strSQL = $requete." ORDER BY id desc;";
    $employes = $cnx->query($strSQL);
    return $employes;
}

// Renvoie les informations sur un employé
function getEmploye($idemp) {
    $cnx = getCnx();
    GLOBAL $requete;
    $strSQL = $requete." AND employe.id = ". $idemp . ";";
    $Resultat = $cnx->query($strSQL);
    if ($Resultat->rowCount() == 1) { // Vérification de l'existant d'un employé
    	 //Méthode fetch() extration ligne par ligne ici une seule ligne
    	$employe = $Resultat->fetch();
    	return $employe;
    }
    else 
	  {
	    //Stop l'exécution du programme sur une exception
	    throw new Exception("employé inconnu");
	    return;
	  }
}

// Renvoie la liste des employés par catégorie
function getProdByCat($idc) {
    $cnx = getCnx();
    GLOBAL $requete;
    $strSQL = $requete." AND tbl_categories.id = ". $idc . ";";
    $ProdByCat = $cnx->query($strSQL);
    return $ProdByCat;
}

// Essai de connexion à la Base De Données
// Instancie et renvoie l'objet PDO associé ($cnx)
function getCnx() {
	// Paramètres de connexion 
    $PARAM_sgbd         ="mysql";       // SGBDR
    $PARAM_hote         ="localhost";   // le chemin vers le serveur 
    $PARAM_port         ="";        // Port de connexion
    $PARAM_nom_bd       ="dbannuaire";  // le nom de votre base de données
    $PARAM_utilisateur  ="root";      // nom utilisateur 
    $PARAM_mot_passe    ="root";      // mot de passe utilisateur
    $PARAM_dsn          =$PARAM_sgbd.":host=".$PARAM_hote.";dbname=".$PARAM_nom_bd; // Nom de la source de données

    $dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",);

    $cnx = new PDO($PARAM_dsn, $PARAM_utilisateur, $PARAM_mot_passe, $dboptions);
    return $cnx;

}

function selectMemberId()
{


    return 'SELECT * FROM employes WHERE id = :id';
}
//$cnx­>commit()
//$cnx­>rollBack();

?>