<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
    <head>
        <title>Mensurations</title>
    </head>
	

<?php
Include 'Connect.php';

session_start();

if(isset($_POST['envoyer']))
{
    $DateM=$_POST['DateM'];
    $Taille=$_POST['Taille'];
    $Poids=$_POST['Poids'];
    $epaules=$_POST['epaules'];
    $bras=$_POST['bras'];
    $poitrine=$_POST['poitrine'];
    $poignet=$_POST['poignet'];
    $toutaille=$_POST['tourtaille'];
    $hanche=$_POST['hanche'];
	$mollet=$_POST['mollet'];
	$id=$_SESSION['id_client'];


	$Requete = $connect->prepare('INSERT INTO `mensurations`(`ID_MENSURATION`, `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_TAILLE_CLIENT`, `TOUR_POITRINE_CLIENT`, `ID_CLIENT`) 
    VALUES(:DateM, :Taille, :Poids, :epaules, :bras,:poignet, :hanche, :mollet, :tourtaille, :poitrine, :id_client)');
	$Requete->bindValue(":DateM",$DateM, PDO::PARAM_STR);
	$Requete->bindValue(":Taille",$Taille, PDO::PARAM_STR);
    $Requete->bindValue(":Poids",$Poids, PDO::PARAM_STR);
    $Requete->bindValue(":epaules",$epaules, PDO::PARAM_STR);
    $Requete->bindValue(":bras",$bras, PDO::PARAM_STR);
    $Requete->bindValue(":poitrine",$poignet, PDO::PARAM_STR);
    $Requete->bindValue(":tourtaille",$tourtaille, PDO::PARAM_STR);
    $Requete->bindValue(":hanche",$hanche, PDO::PARAM_STR);
	$Requete->bindValue(":mollet",$mollet, PDO::PARAM_STR);
	$Requete->bindValue(":id_client",$id, PDO::PARAM_STR);
	$Requete->execute();
}

?>

</html>