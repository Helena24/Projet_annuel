<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
    <head>
        <title>Mesures balances</title>
    </head>
	

<?php
Include 'Connect.php';


if(isset($_POST['save']))
{
    $DateB=$_POST['DateB'];
    $PourcentMG=$_POST['PourcentMG'];
    $Masse=$_POST['Masse'];
    $PourcentH2O=$_POST['PourcentH2O'];
    $GV=$_POST['GV'];
    $Masseosseuse=$_POST['Masseosseuse'];
    $Massemuscu=$_POST['Massemuscu'];
    $Indiceeffort=$_POST['Indiceeffort'];
    $Agemetabolique=$_POST['Agemetabolique'];
	$id=$_POST['id'];


	$Requete = $connect->prepare('INSERT INTO `mesures`(`ID_CLIENT`,`DATE_MESURES`, `POURCENTAGE_MASSSE_GRAISSEUSE`, `MASSE`, `POURCENTAGE_EAU_CORPS`, `GRAISSE_VISCERALE`, `MASSE_OSSEUSE`, `MASSE_MUSCULAIRE`, `INDICE_EFFORT`, `AGE_METABOLIQUE`) 
    VALUES (:id, :DateB, :PourcentMG, :Masse, :PourcentH2O, :GV, :Masseosseuse, :Massemuscu, :Indiceeffort, :Agemetabolique)');
    $Requete->bindValue(":id",$id, PDO::PARAM_STR);
    $Requete->bindValue(":DateB",$DateB, PDO::PARAM_STR);
    $Requete->bindValue(":PourcentMG",$PourcentMG, PDO::PARAM_STR);
    $Requete->bindValue(":Masse",$Masse, PDO::PARAM_STR);
    $Requete->bindValue(":PourcentH2O",$PourcentH2O, PDO::PARAM_STR);
    $Requete->bindValue(":GV",$GV, PDO::PARAM_STR);
    $Requete->bindValue(":Masseosseuse",$Masseosseuse, PDO::PARAM_STR);
    $Requete->bindValue(":Massemuscu",$Massemuscu, PDO::PARAM_STR);
    $Requete->bindValue(":Indiceeffort",$Indiceeffort, PDO::PARAM_STR);
	$Requete->bindValue(":Agemetabolique",$Agemetabolique, PDO::PARAM_STR);
	$Requete->execute();
}

?>

<h3>L'ajout des nouvelles mesures balances à bien était réalisé</h3>

<input type="button" onclick="window.location.href = 'Mesures.php';" value="Retour à la page précédente"/>

</html>