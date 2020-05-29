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
    $compteur = 0;
    $idAl = $array;

    foreach($_POST['aliment'] as $aliment)
    {
        $compteur += 1;
        $RequeteInsertS = $connect->prepare('INSERT INTO CONTENIR_S (ID_SMOOTHIE, ID_ALIMENT) 
        VALUES("'.$resultat['ID_SMOOTHIE'].'",
        (SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"))');
        $RequeteInsertS->execute();
        $RecupIdAl = $connect->prepare('SELECT ID_ALIMENT FROM ALIMENTS WHERE NOM_ALIMENT="'.$aliment.'"');
        $RecupIdAl->execute();
        $idAlR=$RecupIdAl->fetch();
        $idAl[$compteur]=$idAlR['ID_ALIMENT'];
    }

    $compteur = 0;
        
    foreach($_POST['quantite'] as $quantiteAliment)
    {
        $compteur += 1;
        $RequeteUpdateQ = $connect->prepare("UPDATE CONTENIR_S 
        SET QTE_ALIMENT_SMOOTHIE =  '$quantiteAliment' 
        WHERE ID_SMOOTHIE = '$idSmoothie'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateQ->execute();
    }

    $compteur = 0;

    foreach($_POST['unite'] as $uniteAliment)
    {
        $compteur += 1;
        $RequeteUpdateU = $connect->prepare("UPDATE CONTENIR_S 
        SET UNITE_ALIMENT_SMOOTHIE =  '$uniteAliment' 
        WHERE ID_SMOOTHIE = '$idSmoothie'
        AND ID_ALIMENT = '$idAl[$compteur]'");
        $RequeteUpdateU->execute();
    }

}

$message = "Smoothie ajouté";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("nv_smoothie.php");
</script>'; 
?>



</body> 
</html> 