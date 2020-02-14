<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
    <head>
        <title>Mesures balances</title>
    </head>
	

<?php
Include 'Connect.php';

session_start();

if(isset($_POST['envoyer']))
{
    $DateB=$_POST['DateB'];
    $PourcentMG=$_POST['PourcentMG'];
    $Masse=$_POST['Masse'];
    $PourcentH2O=$_POST['PourcentH2O'];
    $GV=$_POST['GV'];
    $Massemuscu=$_POST['Massemuscu'];
    $Indiceeffort=$_POST['Indiceeffort'];
    $Masseosseuse=$_POST['Masseosseuse'];
    $Impedance=$_POST['Impedance'];
	$id=$_SESSION['id_client'];


	$Requete = $connect->prepare('INSERT INTO `mesures`(`DATE_MESURE`, `POURCENTAGE_MASSSE_GRAISSEUSE`, `POURCENTAGE_EAU_CORPS`, `GRAISSE_VISCERALE`, `MASSE_MUSCULAIRE`, `INDICE_EFFORT`, `MASSE_OSSEUSE`, `IMPEDANCE`, `ID_CLIENT`) 
    VALUES (:DateB, :PourcentMG, :Masse, :PourcentH2O, :GV, :Massemuscu, :Indiceeffort, :Masseosseuse, :Impedance, :id_client');
	$Requete->bindValue(":DateB",$DateB, PDO::PARAM_STR);
	$Requete->bindValue(":PourcentMG",$PourcentMG, PDO::PARAM_STR);
    $Requete->bindValue(":Masse",$Masse, PDO::PARAM_STR);
    $Requete->bindValue(":PourcentH2O",$PourcentH2O, PDO::PARAM_STR);
    $Requete->bindValue(":GV",$GV, PDO::PARAM_STR);
    $Requete->bindValue(":Massemuscu",$Massemuscu, PDO::PARAM_STR);
    $Requete->bindValue(":Indiceeffort",$Indiceeffort, PDO::PARAM_STR);
    $Requete->bindValue(":Masseosseuse",$Masseosseuse, PDO::PARAM_STR);
	$Requete->bindValue(":Impedance",$Impedance, PDO::PARAM_STR);
	$Requete->bindValue(":id_client",$id, PDO::PARAM_STR);
	$Requete->execute();
}

?>

</html>