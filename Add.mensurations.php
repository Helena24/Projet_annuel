<!DOCTYPE html>
<html>
<?php include("Functions.php");?>
    <head>
        <title>Mensurations</title>
    </head>
	

<?php
Include 'Connect.php';


if(isset($_POST['enregistrer']))
{
    $DateM=$_POST['DateM'];
    $Taille=$_POST['Taille'];
    $Poids=$_POST['Poids'];
    $epaules=$_POST['epaules'];
    $poitrine=$_POST['poitrine'];
    $bras=$_POST['bras'];
    $poignet=$_POST['poignet'];
    $tourtaille=$_POST['tourtaille'];
    $hanche=$_POST['hanche'];
    $cuisse=$_POST['cuisse'];
    $mollet=$_POST['mollet'];
    $id=$_POST['Client'];


	$Requete = $connect->prepare('INSERT INTO `mensurations`(`ID_CLIENT`, `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_POITRINE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_TAILLE_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_CUISSE_CLIENT`, `TOUR_MOLLET_CLIENT`) 
    VALUES(:Client, :DateM, :Taille, :Poids, :epaules, :poitrine, :bras, :poignet, :tourtaille, :hanche, :cuisse, :mollet)');
    $Requete->bindValue(":Client",$id, PDO::PARAM_STR);
    $Requete->bindValue(":DateM",$DateM, PDO::PARAM_STR);
	$Requete->bindValue(":Taille",$Taille, PDO::PARAM_STR);
    $Requete->bindValue(":Poids",$Poids, PDO::PARAM_STR);
    $Requete->bindValue(":epaules",$epaules, PDO::PARAM_STR);
    $Requete->bindValue(":poitrine",$poitrine, PDO::PARAM_STR);
    $Requete->bindValue(":bras",$bras, PDO::PARAM_STR);
    $Requete->bindValue(":poignet",$poignet, PDO::PARAM_STR);
    $Requete->bindValue(":tourtaille",$tourtaille, PDO::PARAM_STR);
    $Requete->bindValue(":hanche",$hanche, PDO::PARAM_STR);
    $Requete->bindValue(":cuisse",$cuisse, PDO::PARAM_STR);
	$Requete->bindValue(":mollet",$mollet, PDO::PARAM_STR);
    $Requete->execute();
}


$message = "Mensurations ajoutées";
echo '<script type="text/javascript">window.alert("'.$message.'");
window.location.replace("Mensurations.php");
</script>'; 
?>



</html>