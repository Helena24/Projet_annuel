<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Ajout Client</title>
<!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
</head>
SMTP = mail.zend.com
smtp_port = 25
sendmail_from = helena.adi@live.fr
<body>
     

<?php
include("Connect.php");


//Fonction qui permet de générer une chaine de charactères 
function motDePasse($longueur=5) {
    $Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // on mélange la chaine avec la fonction str_shuffle()
    $Chaine = str_shuffle($Chaine);
    // ensuite on coupe à la longueur voulue avec la fonction substr()
    $Chaine = substr($Chaine,0,$longueur);
    return $Chaine;
}




if(isset($_POST['Enregistrer']))
{
    $nomUser=$_POST['nomUser'];
    $prenomUser=$_POST['prenomUser'];
    $datenaissanceUser=$_POST['datenaissanceUser'];
    $emailUser=$_POST['emailUser'];
    $telUser=$_POST['telUser'];
    $adresseUser=$_POST['adresseUser'];
    $mdpUser= motDePasse(7);

    //Fonction qui permet d'envoyer le mdp et identifiant par mail 
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    ini_set("SMTP", "mail.zend.com");
    ini_set("smtp_port","25");
    $message = "Voici votre mot de passe :";
    $subject = "Vos identifiants"; 
    $from = "victor.janneteau@laposte.net"; 
    $headers = 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();


    $to = "helena.adi@live.fr";
   
    mail($to,$subject,$message,$headers);
    echo"mail envoyé"; 

	$Requete = $connect->prepare('INSERT INTO CLIENTS (NOM_CLIENT,PRENOM_CLIENT,DATE_NAISSANCE_CLIENT,MAIL_CLIENT,TEL_CLIENT,ADRESSE_POSTALE_CLIENT,MDP_CLIENT) 
    VALUES(:nomUser, :prenomUser, :datenaissanceUser, :emailUser, :telUser, :adresseUser, :mdpUser)');
	$Requete->bindValue(":nomUser",$nomUser, PDO::PARAM_STR);
	$Requete->bindValue(":prenomUser",$prenomUser, PDO::PARAM_STR);
    $Requete->bindValue(":datenaissanceUser",$datenaissanceUser, PDO::PARAM_STR);
    $Requete->bindValue(":emailUser",$emailUser, PDO::PARAM_STR);
    $Requete->bindValue(":telUser",$telUser, PDO::PARAM_STR);
    $Requete->bindValue(":adresseUser",$adresseUser, PDO::PARAM_STR);
    $Requete->bindValue(":mdpUser",$mdpUser, PDO::PARAM_STR);

    $Requete->execute();
    echo"client ajouté"; 
}
?>
</body> 
</html> 