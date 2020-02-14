


<?php
include("Connect.php");

/* veillez bien à vous connecter à votre base de données */

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT * FROM ALIMENTS WHERE NOM_ALIMENT LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['NOM_ALIMENT']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON

?>