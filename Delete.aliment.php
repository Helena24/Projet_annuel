<?php
include("Functions.php");
include("Connect.php");

//préparation de la requete
$reponse = $connect->prepare('DELETE FROM ALIMENTS WHERE ID_ALIMENT=:id');

//liaison du parametre
$reponse->bindValue(':id', $_GET['idAliment'], PDO::PARAM_STR);

//execution de la requete 
$executeIsOk = $reponse->execute();

if($executeIsOk){
    $message = 'Aliment supprimé';
}else{
    $message = 'Echec de la suppression';
}
?>
