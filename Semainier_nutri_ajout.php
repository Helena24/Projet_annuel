<?php
include("Connect.php");
?>
<?php
if(isset($_POST['Enregistrer']))
{
    $RequeteR = $connect->prepare('')
    
    $nomAliment=$_POST['nomAliment'];
    $Requete = $connect->prepare('INSERT INTO CONSTITUER (ID_ALIMENT) VALUES(SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT MAIL_CLIENT="'.$nomAliment.'")');
	$Requete->bindValue(":nomAliment",$nomUser, PDO::PARAM_STR);
    $Requete->execute();
    echo "aliment ajouté";
}
?>

