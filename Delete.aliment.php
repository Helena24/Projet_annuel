<?php
include("Functions.php");
include("Connect.php");

//préparation de la requete
$reponse = $connect->prepare('DELETE FROM ALIMENTS WHERE ID_ALIMENT=:id');

//liaison du parametre
$reponse->bindValue(':id', $_GET['idAliment'], PDO::PARAM_STR);

//execution de la requete 
$executeIsOk = $reponse->execute();

// booleen pour savoi si ça a fonctionné
if($executeIsOk){
    $message = 'Aliment supprimé';
}else{
    $message = 'Echec de la suppression car cet aliment est présent dans une recette';
};

//affichage du message et redirection
 echo '<script type="text/javascript">window.alert("'.$message.'");
 window.location.replace("suppr_aliment.php");
 </script>'; 
?>
