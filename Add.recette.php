<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- autocomplétion --------------->
<!--------------------------------->

<?php 
// Connexion à la base de données
include("Connect.php"); 
?>

<?php
    // Sélection des aliments et des ingrédients dans un tableau qui sera affiché 
    $result = $connect->query('SELECT nom_aliment,nom_ingredient FROM ALIMENTS,INGREDIENTS ORDER BY NOM_ALIMENT,NOM_INGREDIENT');
    $result = $result->fetchAll(PDO::FETCH_ASSOC); //transformation des résultats de la requete sous forme d'un tableau
    $res = [];
    foreach($result as $ligne) {
        $res[] = $ligne['nom_aliment']; 
        $res[] = $ligne['nom_ingredient']; 
    }
    echo json_encode($res); 
?>