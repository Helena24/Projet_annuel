<?php
include("Functions.php");
include("Connect.php");

//préparation de la requete
$reponse = $connect->prepare('DELETE FROM ALIMENTS WHERE ID_ALIMENT=:id');

//liaison du parametre
$reponse->bindValue(':id', $_GET['idAliment'], PDO::PARAM_INT);

//execution de la requete 
$executeIsOk = $reponse->execute();

if($executeIsOk){
    $message = 'Aliment supprimé';
}else{
    $message = 'Echec de la suppression';
}

/*if(isset($_POST['supprimer'])){

    $id_el = $_POST['id'];

    $requete = $connect->prepare("DELETE FROM ALIMENTS WHERE ID_ALIMENT= '$id_el'");	//suppression dans bdd
    $requete->bindValue(1, $id_el, PDO::PARAM_STR);
    $requete -> execute();

    header('Location: Accueil.php');
    exit();
    }*/
?>
