<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title> Ajout Smoothie</title>
</head>
<body>

<?php

if(isset($_POST['ajouterRecette']))
{
    $nomRecette=$_POST['nomRecette'];
    $nbPart=$_POST['nbPart'];
    $derouleRecette=$_POST['derouleRecette'];

	$Requete = $connect->prepare('INSERT INTO RECETTES (NOM_RECETTE, NOMBRE_PART_RECETTE, DESCRIPTION_RECETTE) VALUES(:nomRecette, :nbPart, :derouleRecette)');
	$Requete->bindValue(":nomRecette",$nomRecette, PDO::PARAM_STR);
    $Requete->bindValue(":nbPart",$nbPart, PDO::PARAM_STR);
    $Requete->bindValue(":derouleRecette",$derouleRecette, PDO::PARAM_STR);
    $Requete->execute();
}
if(isset($_POST['ajouterRecette']))
{
    $nomRecette=$_POST['nomRecette'];
    $Requete = $connect->prepare('SELECT ID_RECETTE FROM RECETTES WHERE NOM_RECETTE="'.$nomRecette.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    $idRecette = $resultat['ID_RECETTE'];
    $compteur = 0;
    $idAl = $array;

    foreach($_POST['aliment'] as $aliment)
    {
        $compteur += 1;
        $RequeteInsertA = $connect->prepare('INSERT INTO CONTENIR (ID_RECETTE, ID_ALIMENT) 
        VALUES("'.$resultat['ID_RECETTE'].'",
        (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"))');
        $RequeteInsertA->execute();
        $RecupIdAl = $connect->prepare('SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"');
        $RecupIdAl->execute();
        $idAlR=$RecupIdAl->fetch();
        $idAl[$compteur]=$idAlR['ID_ALIMENT'];
    }

    $compteur = 0;
 
    foreach($_POST['quantite'] as $quantiteAliment)
    {
        $compteur += 1;
        $RequeteUpdateQ = $connect->prepare("UPDATE CONTENIR 
        SET QTE_ALIMENT_RECETTE =  '$quantiteAliment' 
        WHERE ID_RECETTE = '$idRecette'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateQ->execute();
    }

    $compteur = 0;
 
    foreach($_POST['unite'] as $uniteAliment)
    {
        $compteur += 1;
        $RequeteUpdateU = $connect->prepare("UPDATE CONTENIR 
        SET UNITE_ALIMENT_RECETTE =  '$uniteAliment' 
        WHERE ID_RECETTE = '$idRecette'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateU->execute();
    }
    
    foreach($_POST['ingredient'] as $ingredient)
    {
        $RequeteInsertI = $connect->prepare('INSERT INTO COMPOSER (ID_RECETTE, ID_INGREDIENT) 
        VALUES("'.$resultat['ID_RECETTE'].'",
        (SELECT ID_INGREDIENT FROM INGREDIENTS WHERE NOM_INGREDIENT="'.$ingredient.'"))');
        $RequeteInsertI->execute();
    }

  
}
$message = "Recette ajoutée";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_recette.php");
</script>'; 
?>



</body> 
</html> 