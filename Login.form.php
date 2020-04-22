<?php include("Functions.php"); ?>
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

        $Requete= $connect->prepare("SELECT * from CLIENTS WHERE MAIL_CLIENT='$emailUser'");
        $Requete->bindValue(1,$emailUser, PDO::PARAM_STR);
        $Requete->execute();
        $resultat=$Requete->fetch();
                       
            if(!$resultat)
            {
                echo 'Identifiant incorrect (mail)';
            }
            else 
            {
                $mdp=$resultat['MDP_CLIENT'];
                if (password_verify($mdpUser, $mdp)) //verifie le cryptage 
                {
                    session_start();
                    $_SESSION['ID_CLIENT']=$resultat['ID_CLIENT'];
                    $_SESSION['NOM_CLIENT']=$resultat['NOM_CLIENT'];
                    $_SESSION['PRENOM_CLIENT']=$resultat['PRENOM_CLIENT'];
                    $_SESSION['MAIL_CLIENT']=$resultat['MAIL_CLIENT'];
                    $_SESSION['TEL_CLIENT']=$resultat['TEL_CLIENT'];
                    $_SESSION['ADRESSE_POSTALE_CLIENT']=$resultat['ADRESSE_POSTALE_CLIENT'];
                    $_SESSION['DATE_NAISSANCE_CLIENT']=$resultat['DATE_NAISSANCE_CLIENT'];
                    $_SESSION['MDP_CLIENT']=$resultat['MDP_CLIENT'];
                    
                    
                    $id=$_SESSION['ID_CLIENT']; 
                    $Requete=$connect->prepare("SELECT ADRESSE.ID_CLIENT, ADRESSE.NUMERO_RUE, ADRESSE.NOM_RUE, ADRESSE.CODE_POSTAL, ADRESSE.VILLE, CLIENTS.ID_CLIENT FROM ADRESSE NATURAL JOIN CLIENTS WHERE ADRESSE.ID_CLIENT='$id' ");
                    $Requete->bindValue(1,$id, PDO::PARAM_STR);
                    $Requete->execute();
                    $resultat=$Requete->fetch();
                    
                    if($resultat)
                    {
                     $_SESSION['NUMERO_RUE']=$resultat['NUMERO_RUE'];
                     //MANQUE INFOS 
                    
                    }

                   // header('Location: Accueil.php');
                }
                else
                {
                    echo 'Le mot de passe est invalide.';
                }

            }
    }

    if (is_admin()){
        header('Location: entete.php');
    } 


    if (is_user()){
        header('Location: entete_client.php');
    } 


   


      
    // permet la deconnexion de l'utilisateur 
   
        if(isset($_POST['Deconnexion'])){ 	
            session_destroy();
            header('location: Login.form.html');
        }    

    
    // $mdpUser1=password_hash($mdpUser);

        
                
        //$Requete= $connect->prepare("SELECT * from CLIENTS WHERE MAIL_CLIENT='$emailUser' AND MDP_CLIENT='$mdpUser1' ");
        //$Requete->bindValue(1,$emailUser, PDO::PARAM_STR);
        //$Requete->bindValue(2,$mdpUser1, PDO::PARAM_STR);
        //$Requete->execute();
        //$resultat=$Requete->fetch();
                       
        //    if(!$resultat)
        //    {
        //        echo 'Identifiants incorrects';
        //    }
        //    else 
        //    {
                
        //        session_start();
        //        $_SESSION['ID_CLIENT']=$resultat['ID_CLIENT'];
        //        $_SESSION['NOM_CLIENT']=$resultat['NOM_CLIENT'];
        //        $_SESSION['PRENOM_CLIENT']=$resultat['PRENOM_CLIENT'];
        //        $_SESSION['MAIL_CLIENT']=$resultat['MAIL_CLIENT'];
        //        $_SESSION['TEL_CLIENT']=$resultat['TEL_CLIENT'];
        //        $_SESSION['ADRESSE_POSTALE_CLIENT']=$resultat['ADRESSE_POSTALE_CLIENT'];
        //        $_SESSION['DATE_NAISSANCE_CLIENT']=$resultat['DATE_NAISSANCE_CLIENT'];
                


        //        header('Location: Accueil.php');


                
        //    }
        //}
      
            
                 

        ?> 
                 
       <!-- <META http-equiv="refresh" content="3; URL=http://localhost/PROJET_ANNUEL/Projet_annuel/Projet_annuel/Accueil.php">-->

        </body>
</html>