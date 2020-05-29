<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- autocomplétion --------------->
<!--------------------------------->

<?php 
// Connexion à la base de données
include("Connect.php"); 
?>

<?php
    // Sélection des recettes dans un tableau qui sera affiché 
    $result = $connect->query('SELECT NOM_RECETTE FROM RECETTES ORDER BY NOM_RECETTE');
    $result = $result->fetchAll(PDO::FETCH_ASSOC); //transformation des résultats de la requete sous forme d'un tableau
    $res = [];
    foreach($result as $ligne) {
        $res[] = $ligne['NOM_RECETTE']; 
    }
    echo json_encode($res); 
?>