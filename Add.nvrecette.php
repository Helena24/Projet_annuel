<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<head>
<title> Ajout Client</title>
<!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
</head>

<body>
     

<?php
include("Connect.php");




if(isset($_POST['ajouterRecette']))
{
    $nomRecette=$_POST['nomRecette'];
    $nbPart=$_POST['nbPart'];

	$Requete = $connect->prepare('INSERT INTO RECETTES (NOM_RECETTE, NOMBRE_PART_RECETTE) VALUES(:nomRecette, :nbPart)');
	$Requete->bindValue(":nomRecette",$nomRecette, PDO::PARAM_STR);
	$Requete->bindValue(":nbPart",$nbPart, PDO::PARAM_STR);
    $Requete->execute();
    echo "Recette ajoutée";
}
if(isset($_POST['Ajouteringr']))
{
    $nomRecette=$_POST['nomRecette'];
    $myAliment=$_POST['myAliment'];
    $quantite=$_POST['quantite'];

	$Requete = $connect->prepare('INSERT INTO CONSTITUER (ID_RECETTE, ID_ALIMENT, QTE_ALIMENT_REPAS) 
    VALUES((SELECT ID_RECETTE FROM RECETTES WHERE NOM_RECETTE="'.$nomRecette.'"),
    (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$myAliment.'"), :quantite)');
    $Requete->bindValue(":quantite",$quantite, PDO::PARAM_STR);
    $Requete->execute();
    echo "Ingrédient ou aliment ajouté";
}
?>



</body> 
</html> 