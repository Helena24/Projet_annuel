<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php");?>
<head>
<title> Ajout Smoothie</title>
</head>

<body>
     

<?php


if(isset($_POST['ajouterSmoothie']))
{
    $nomSmoothie=$_POST['nomSmoothie'];
    $derouleSmoothie=$_POST['derouleSmoothie'];
	$Requete = $connect->prepare('INSERT INTO SMOOTHIES (NOM_SMOOTHIE, DESCRIPTION_SMOOTHIE) VALUES(:nomSmoothie, :derouleSmoothie)');
    $Requete->bindValue(":nomSmoothie",$nomSmoothie, PDO::PARAM_STR);
    $Requete->bindValue(":derouleSmoothie",$derouleSmoothie, PDO::PARAM_STR);
    $Requete->execute();
}
if(isset($_POST['ajouterSmoothie']))
{
    $nomSmoothie=$_POST['nomSmoothie'];
    $Requete = $connect->prepare('SELECT ID_SMOOTHIE FROM SMOOTHIES WHERE NOM_SMOOTHIE="'.$nomSmoothie.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    $idSmoothie = $resultat['ID_SMOOTHIE'];
    
    foreach($_POST['ingredient'] as $ingredient)
    {
        $RequeteInsertI = $connect->prepare('INSERT INTO COMPOSER_S (ID_SMOOTHIE, ID_INGREDIENT) 
        VALUES("'.$resultat['ID_SMOOTHIE'].'",
        (SELECT ID_INGREDIENT FROM INGREDIENTS WHERE NOM_INGREDIENT="'.$ingredient.'"))');
        $RequeteInsertI->execute();

    }
}
if(isset($_POST['ajouterSmoothie']))
{
    $nomSmoothie=$_POST['nomSmoothie'];
    $Requete = $connect->prepare('SELECT ID_SMOOTHIE FROM SMOOTHIES WHERE NOM_SMOOTHIE="'.$nomSmoothie.'"');
    $Requete->execute();
    $resultat=$Requete->fetch();
    $idSmoothie = $resultat['ID_SMOOTHIE'];


    foreach($_POST['aliment'] as $aliment)
    {
        $RequeteInsertS = $connect->prepare('INSERT INTO CONTENIR_S (ID_SMOOTHIE, ID_ALIMENT) 
        VALUES("'.$resultat['ID_SMOOTHIE'].'",
        (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"))');
        $RequeteInsertS->execute();


        foreach($_POST['quantite'] as $quantiteAliment)
        {
            $RequeteUpdateQ = $connect->prepare("UPDATE CONTENIR_S 
            SET QTE_ALIMENT_SMOOTHIE =  '$quantiteAliment' 
            WHERE ID_SMOOTHIE = '$idSmoothie'
            AND ID_ALIMENT = (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT='$aliment')");
            $RequeteUpdateQ->execute();
        }
        foreach($_POST['unite'] as $uniteAliment)
        {
            $RequeteUpdateU = $connect->prepare("UPDATE CONTENIR_S 
            SET UNITE_ALIMENT_SMOOTHIER =  '$uniteAliment' 
            WHERE ID_SMOOTHIE = '$idSmoothie'
            AND ID_ALIMENT = (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT='$aliment')");
            $RequeteUpdateU->execute();
        }
    }
}

$message = "Smoothie ajouté";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_smoothie.php");
</script>'; 
?>



</body> 
</html> 