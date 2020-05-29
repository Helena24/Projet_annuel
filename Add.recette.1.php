<!--------------------------------->
<!-- Page qui permet de faire ----->
<!-- autocomplétion --------------->
<!--------------------------------->

<?php 
// Connexion à la base de données
include("Connect.php"); 
?>


<?php
    // Sélection des aliments dans un tableau qui sera affiché 
    $result = $connect->query('SELECT nom_aliment FROM ALIMENTS ORDER BY NOM_ALIMENT');
    $result = $result->fetchAll(PDO::FETCH_ASSOC); //transformation des résultats de la requete sous forme d'un tableau
    $res = [];
    foreach($result as $ligne) {
        $res[] = $ligne['nom_aliment']; 
    }
    echo json_encode($res); 
?>