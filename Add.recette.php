<?php include("Connect.php"); ?>


<?php
    
    $result = $connect->query('SELECT nom_aliment, nom_ingredient FROM ALIMENTS, INGREDIENTS ORDER BY NOM_ALIMENT, NOM_INGREDIENT');
    $result = $result->fetchAll(PDO::FETCH_ASSOC); //transformation des résultats de la requete sous forme d'un tableau
    $res = [];
    $resu = [];
    foreach($result as $ligne) {
        $res[] = $ligne['nom_aliment']; 
        $res[] = $ligne['nom_ingredient']; 
    }
    echo json_encode($res); 
?>