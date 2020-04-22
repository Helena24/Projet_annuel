<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF8" />
        <title> Ajout Aliment</title>
    </head>
    <body>
<?php
include("Connect.php");
include("Functions.php");

if(isset($_POST['add']))
{
    $nomAliment=$_POST['nomAliment'];
    $option = isset($_POST['categorieAliment']) ? true : false; //toujours basé sur l'attribut name du select
    if($option) {
        $valueCategorie = htmlentities($_POST['categorieAliment'], ENT_QUOTES, "UTF-8"); //permet de protéger tout les caractères spéciaux
        //ensuite requête pour ajouter en base ...
    } else {
        echo "Task option is required";
        exit; 
    }
    $calorieAliment=$_POST['calorieAliment'];
    $proteineAliment=$_POST['proteineAliment'];
    $glucideAliment=$_POST['glucideAliment'];
    $lipideAliment=$_POST['lipideAliment'];

	$Requete = $connect->prepare('INSERT INTO ALIMENTS (NOM_ALIMENT,CATEGORIE_ALIMENT,CALORIE_ALIMENT,PROTEINE_ALIMENT,GLUCIDE_ALIMENT,LIPIDE_ALIMENT) 
    VALUES(:nomAliment, :categorieAliment, :calorieAliment, :proteineAliment, :glucideAliment, :lipideAliment)');
	$Requete->bindValue(":nomAliment",$nomAliment, PDO::PARAM_STR);
	$Requete->bindValue(":categorieAliment",$valueCategorie, PDO::PARAM_STR);
    $Requete->bindValue(":calorieAliment",$calorieAliment, PDO::PARAM_STR);
    $Requete->bindValue(":proteineAliment",$proteineAliment, PDO::PARAM_STR);
    $Requete->bindValue(":glucideAliment",$glucideAliment, PDO::PARAM_STR);
    $Requete->bindValue(":lipideAliment",$lipideAliment, PDO::PARAM_STR);
	$Requete->execute();
}




?>

</body> 
</html> 