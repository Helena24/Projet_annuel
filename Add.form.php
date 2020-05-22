<?php
include("Connect.php");
session_start();

//Fonction qui permet de générer une chaine de charactères 
function motDePasse($longueur=5) {
    //$Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // on mélange la chaine avec la fonction str_shuffle()
    //$Chaine = str_shuffle($Chaine);
    // ensuite on coupe à la longueur voulue avec la fonction substr()
    //$Chaine = substr($Chaine,0,$longueur);
    //return $Chaine;

    //le temps de tester avant d'être sur un serveur 
    $Chaine = "ABCDE";
    return $Chaine;
}


if(isset($_POST['Enregistrer']))
{
    $nomUser=$_POST['nomUser'];
    $prenomUser=$_POST['prenomUser'];
    $datenaissanceUser=$_POST['datenaissanceUser'];
    $emailUser=$_POST['emailUser'];
    $telUser=$_POST['telUser'];
    $numRueUser=$_POST['numRueUser'];
    $nomRueUser=$_POST['nomRueUser'];
    $codePostalUser=$_POST['codePostalUser'];
    $villeUser=$_POST['villeUser'];
    $mdpUser= motDePasse(7);
   

    //Fonction qui permet d'envoyer le mdp et identifiant par mail 
    //ini_set('display_errors', 1);
   // error_reporting(E_ALL);
   // $message = "Voici votre mot de passe :".$mdpUser;
   // $subject = "Vos identifiants"; 
   // $from = "victor.janneteau@laposte.net"; 
   // $headers = 'From: '.$from."\r\n".
   //     'Reply-To: '.$from."\r\n" .
   //     'X-Mailer: PHP/' . phpversion();
   // $to = $emailUser;
   // mail($to,$subject,$message,$headers);
   // echo"mail envoyé"; 


   // Permet de hasher la chaine de characteres avant de la stocker 
    $mdpUserHash= password_hash($mdpUser, PASSWORD_DEFAULT);
  
    //Insert la valeur des champs dans la DB sauf l'adresse 
    $Requete = $connect->prepare('INSERT INTO CLIENTS (NOM_CLIENT,PRENOM_CLIENT,DATE_NAISSANCE_CLIENT,MAIL_CLIENT,TEL_CLIENT,MDP_CLIENT) 
    VALUES(:nomUser, :prenomUser, :datenaissanceUser, :emailUser, :telUser, :mdpUserHash)');
	$Requete->bindValue(":nomUser",$nomUser, PDO::PARAM_STR);
	$Requete->bindValue(":prenomUser",$prenomUser, PDO::PARAM_STR);
    $Requete->bindValue(":datenaissanceUser",$datenaissanceUser, PDO::PARAM_STR);
    $Requete->bindValue(":emailUser",$emailUser, PDO::PARAM_STR);
    $Requete->bindValue(":telUser",$telUser, PDO::PARAM_STR);
    $Requete->bindValue(":mdpUserHash",$mdpUserHash);
    $Requete->execute();
    echo " Votre nouveau client a bien été ajouté";
    
    //Insert les informations de l'adresse dans la BD
    $RequeteA = $connect->prepare('INSERT INTO ADRESSE (ID_CLIENT,NUMERO_RUE,NOM_RUE,CODE_POSTAL,VILLE) 
    VALUES((SELECT ID_CLIENT FROM CLIENTS WHERE MAIL_CLIENT="'.$emailUser.'"),:numRueUser, :nomRueUser, :codePostalUser, :villeUser)');
    $RequeteA->bindValue(":numRueUser",$numRueUser, PDO::PARAM_STR);
    $RequeteA->bindValue(":nomRueUser",$nomRueUser, PDO::PARAM_STR);
    $RequeteA->bindValue(":codePostalUser",$codePostalUser, PDO::PARAM_STR);
    $RequeteA->bindValue(":villeUser",$villeUser, PDO::PARAM_STR);
    $RequeteA->execute();
    echo "adresse ajoutée";
}
?>


