<!-------------------------------->
<!-- Page qui permet de faire ---->
<!--la requete pour se connecter-->
<!--  au site  avec récupération-->
<!--des données de l'utilisateur-->
<!-- connecté -------------------->
<!-------------------------------->

<!DOCTYPE html>
<html>
<?php 
    // Appel de la fonction pour afficher l'entête selon l'utilisateur
    include("Functions.php"); 
?>
<?php 
    // Appel de la page qui permet de connecter à la base de données
    include("Connect.php"); 
?>

<html>
    <head>
        <meta charset="UTF8" />
        <!-- Nom de l'onglet -->
        <title> Connexion </title>
        <link rel="stylesheet" media="screen" href="Nutrition.css">
    </head>
    <body>
        <?php 
            //Quand l'utilisateur presse le bouton de connexion 
            if (isset ($_POST['Connexion'])){
                // recupération des valeurs saisies dans les champs du formulaire de connexion 
                $emailUser=$_POST['emailUser'];
                $mdpUser=$_POST['mdpUser'];
                //Requete récupérant les informations de l'utilisateur disposant de cette adresse mail dans la BD
                $Requete= $connect->prepare("SELECT * from CLIENTS WHERE MAIL_CLIENT='$emailUser'");
                $Requete->bindValue(1,$emailUser, PDO::PARAM_STR);
                $Requete->execute();
                $resultat=$Requete->fetch();        
                    if(!$resultat){
                        //message d'alerte indiquant que le mail est incorrecte avec redirection sur la page de connexion
                        $message='Adresse mail est incorrecte';
                        echo '<script type="text/javascript">window.alert("'.$message.'");
                        window.location.replace("Login.form.html");</script>'; 
                    }
                    else{
                        $mdp=$resultat['MDP_CLIENT'];
                        if (password_verify($mdpUser, $mdp)) //verifie que le mdp saisi correspond a celui crypté dans la BD
                        {
                            //Récupération des informations de l'utlisateur connecté 
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
                            
                            if($resultat){
                                $_SESSION['NUMERO_RUE']=$resultat['NUMERO_RUE'];
                                $_SESSION['NOM_RUE']=$resultat['NOM_RUE'];
                                $_SESSION['CODE_POSTAL']=$resultat['CODE_POSTAL'];
                                $_SESSION['VILLE']=$resultat['VILLE'];
                            }
                        }
                        else{
                            //message d'alerte avec redirection
                            $message='Mot de passe incorrect';
                            echo '<script type="text/javascript">window.alert("'.$message.'");
                            window.location.replace("Login.form.html");
                            </script>'; 
                        }
                    }
            }


            //Affichage de l'interface Administrateur si l'utilisateur connecté (session) correspond à l'administrateur
            if (is_admin()){
                header('Location: entete.php');
            } 
            //Affichage de l'interface client si l'utilisateur connecté (session) correspond à un client 
            if (is_user()){
                header('Location: entete_client.php');
            } 


            // permet la deconnexion de l'utilisateur
            //Quand l'utilisateur presse le bouton deconnexion 
            if(isset($_POST['Deconnexion'])){ 	
                session_destroy();
                header('location: Login.form.html');
            }    

        ?> 
    </body>
</html>