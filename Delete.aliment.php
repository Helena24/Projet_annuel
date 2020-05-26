<?php
include("Functions.php");
include("Connect.php");
if(isset($_POST['supprimer']));

$id_el = $_POST['id'];

$requete = $connect->prepare("delete  FROM ALIMENTS  where ID_ALIMENT= '$id_el'");	//suppression dans bdd
$requete->bindValue(1, $id_el, PDO::PARAM_STR);
$requete -> execute();


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
header('Location: Accueil.php');
exit();

?>
