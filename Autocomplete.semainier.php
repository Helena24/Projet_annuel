<?php include("Connect.php"); ?>
<?php
    
    $result = $connect->query('SELECT NOM_RECETTE FROM RECETTES ORDER BY NOM_RECETTE');
    $result = $result->fetchAll(PDO::FETCH_ASSOC); //transformation des résultats de la requete sous forme d'un tableau
    $res = [];
    foreach($result as $ligne) {
        $res[] = $ligne['NOM_RECETTE']; 
    }
    echo json_encode($res); 
?>