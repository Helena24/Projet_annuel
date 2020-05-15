<?php
include("Functions.php");
include("Connect.php");
if(isset($_POST['supprimer']));

$id_el = $_POST['id'];

$requete = $connect->prepare("delete  FROM ALIMENTS  where ID_ALIMENT= '$id_el'");	//suppression dans bdd
$requete->bindValue(1, $id_el, PDO::PARAM_STR);
$requete -> execute();


header('Location: Accueil.php');
exit();

?>
