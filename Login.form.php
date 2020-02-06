<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Connexion </title>
<!--<link rel="stylesheet" media="screen" href="CSSSSSSS"> -->
</head>
<body>
<ul>
    <li> <a href="Login.form.html">Retour en arrière</a> </li>
</ul>

<?php 
    Include 'Connect.php';
    if (isset ($_POST['Connexion']))
    {
        $emailUser=$_POST['emailUser'];
        $mdpUser=$_POST['mdpUser'];
                
        $Requete= $connect->prepare("SELECT * from CLIENTS WHERE MAIL_CLIENT='$emailUser' AND MDP_CLIENT='$mdpUser' ");
        $Requete->bindValue(1,$emailUser, PDO::PARAM_STR);
        $Requete->bindValue(2,$mdpUser, PDO::PARAM_STR);
        $Requete->execute();
        $resultat=$Requete->fetch();
                       
            if(!$resultat)
            {
                echo 'Identifiants incorrects';
            }
            else 
            {
                
                session_start();
                $_SESSION['ID_CLIENT']=$resultat['ID_CLIENT'];
                $_SESSION['NOM_CLIENT']=$resultat['NOM_CLIENT'];
                $_SESSION['PRENOM_CLIENT']=$resultat['PRENOM_CLIENT'];
                $_SESSION['MAIL_CLIENT']=$resultat['MAIL_CLIENT'];
                $_SESSION['TEL_CLIENT']=$resultat['TEL_CLIENT'];
                $_SESSION['ADRESSE_POSTALE_CLIENT']=$resultat['ADRESSE_POSTALE_CLIENT'];
                $_SESSION['DATE_NAISSANCE_CLIENT']=$resultat['DATE_NAISSANCE_CLIENT'];
                


                header('Location: Accueil.php');


                
            }
        }
      
            
                 

    ?> 
                 
       <!-- <META http-equiv="refresh" content="3; URL=http://localhost/PROJET_ANNUEL/Projet_annuel/Projet_annuel/Accueil.php">-->

        </body>
</html>



