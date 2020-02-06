<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF8" />
        <title> Ajout Client</title>
      <!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
    </head>
    <body>
        <!--
        <ul>
            <li> <a href="Addform.html">Retour en arrière</a> </li>
        </ul>
        -->

<?php
include("Connect.php");

if(isset($_POST['add']))
{
    $nomUser=$_POST['nomUser'];
    $prenomUser=$_POST['prenomUser'];
    $datenaissanceUser=$_POST['datenaissanceUser'];
    $emailUser=$_POST['emailUser'];
    $telUser=$_POST['telUser'];
    $adresseUser=$_POST['adresseUser'];

	$Requete = $connect->prepare('INSERT INTO CLIENTS (NOM_CLIENT,PRENOM_CLIENT,DATE_NAISSANCE_CLIENT,MAIL_CLIENT,TEL_CLIENT,ADRESSE_POSTALE_CLIENT) 
    VALUES(:nomUser, :prenomUser, :datenaissanceUser, :emailUser, :telUser, :adresseUser)');
	$Requete->bindValue(":nomUser",$nomUser, PDO::PARAM_STR);
	$Requete->bindValue(":prenomUser",$prenomUser, PDO::PARAM_STR);
    $Requete->bindValue(":datenaissanceUser",$datenaissanceUser, PDO::PARAM_STR);
    $Requete->bindValue(":emailUser",$emailUser, PDO::PARAM_STR);
    $Requete->bindValue(":telUser",$telUser, PDO::PARAM_STR);
    $Requete->bindValue(":adresseUser",$adresseUser, PDO::PARAM_STR);
	$Requete->execute();
}




?>  

        <ul>
            <li><a href="Page de connexion.php">Déjà inscrit ? Connectez-vous</a></li>
        </ul>

</body> 


</html> 