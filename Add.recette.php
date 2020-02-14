<?php include("Connect.php") ?>
<?php
    $term = $_GET['term'];
     
    $requete = $mysqli->prepare('SELECT NOM_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT LIKE :term');
    $requete->execute(array('term' => '%' .$term. '%'));
     
    $array = array();
     
    while($donnee = $requete->fetch())
    {
        array_push($array, $donnee['NOM_ALIMENT']);
    }
    echo json_encode($array);
?>