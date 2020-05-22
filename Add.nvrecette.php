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
if(isset($_POST['ajouterRecette']))
{
    $nomRecette=$_POST['nomRecette'];
    $Requete = $connect->prepare('SELECT ID_RECETTE FROM RECETTES WHERE NOM_RECETTE="'.$nomRecette.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    $idRecette = $resultat['ID_RECETTE'];
    echo $resultat['ID_RECETTE'];

    foreach($_POST['aliment'] as $aliment)
    {
        $RequeteInsert = $connect->prepare('INSERT INTO CONTENIR (ID_RECETTE, ID_ALIMENT) 
        VALUES("'.$resultat['ID_RECETTE'].'",
        (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"))');
        $RequeteInsert->execute();
        echo "Ingrédient ou aliment ajouté";


        foreach($_POST['quantite'] as $quantiteAliment)
        {
            $RequeteUpdate = $connect->prepare("UPDATE CONTENIR 
            SET QTE_ALIMENT_RECETTE =  '$quantiteAliment' 
            WHERE ID_RECETTE = '$idRecette'
            AND ID_ALIMENT = (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT='$aliment')");
            $RequeteUpdate->execute();
            echo "Ingrédienljpiojpojpoj";
        }
    }

  
}
?>



</body> 
</html> 