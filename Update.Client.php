<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF8" />
    <title> Modification</title>
</head>
    <body>
        <?php
        include 'Add.form.php';
        //Connexion a la base de donnée
        Include 'Connect.php';
        session_start();

        //Action du bouton "Modifier"
        if(isset($_POST['Modifier'])){
            $ancien_mdp=$_POST['ancien_mdp'];
            $new_mdp1=$_POST['nouveau_mdp1'];
            $new_mdp2=$_POST['nouveau_mdp2'];
            $id=$_SESSION['ID_CLIENT'];
            $mdp=$_SESSION['MDP_CLIENT'];  

            //verifie que le mdp entré correspond a la version crypté dans la BD
            if (password_verify($ancien_mdp, $mdp))
            {
                //verifie que le nouveau mot de passe correspond a la confirmation 
                if ($new_mdp1==$new_mdp2){
                    //hash le nouveau mdp avant de l'enregistrer dans la BD
                    $mdpUser=password_hash($new_mdp2, PASSWORD_DEFAULT);
                    $Requete=$connect->query("UPDATE CLIENTS SET MDP_CLIENT='$mdpUser' WHERE ID_CLIENT='$id'");
                    $Requete->bindValue(1,$mdpUser, PDO::PARAM_STR);
                    $Requete->execute();
                    
                    //message validant la modification du mdp avec redirection
                    $message='Votre mot de passe a bien été modifié';
                    echo '<script type="text/javascript">window.alert("'.$message.'");
                    window.location.replace("Accueil.php");
                    </script>';   
                }
                else{
                    //message d'alerte indiquant une erreur dans la confirmation du mdp avec redirection
                    $message='Erreur dans la confirmation du mot de passe';
                    echo '<script type="text/javascript">window.alert("'.$message.'");
                    window.location.replace("Update.mdp.php");
                    </script>';  
                } 
            }
            else{
                //message d'alerte indiquant une erreur dans la saisie du mdp actuel avec redirection
                $message='Votre mot de passe actuel est incorrect';
                echo '<script type="text/javascript">window.alert("'.$message.'");
                window.location.replace("Update.mdp.php");
                </script>'; 
            }   
        }



        //Action du bouton "Reinitialiser"
        if(isset($_POST['Reinitialiser'])){

            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $mail=$_POST['mail'];

            //stockage d'une chaine de caracteres aleatoire 
            $mdpUser= motDePasse(5);
   

            $Requete=$connect->query("SELECT * FROM CLIENTS  WHERE NOM_CLIENT='$nom' AND PRENOM_CLIENT='$prenom' AND MAIL_CLIENT='$mail'");
            $Requete->bindValue(1,$nom, PDO::PARAM_STR);
            $Requete->bindValue(2,$prenom, PDO::PARAM_STR);
            $Requete->bindValue(3,$mail, PDO::PARAM_STR);
            $Requete->execute();
            $resultat=$Requete->fetch();
                            
            if($resultat){

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

                $Requete=$connect->query("UPDATE CLIENTS SET MDP_CLIENT='$mdpUserHash' WHERE NOM_CLIENT='$nom' AND PRENOM_CLIENT='$prenom' AND MAIL_CLIENT='$mail'");
                $Requete->bindValue(1,$mdpUserHash, PDO::PARAM_STR);
                $Requete->bindValue(2,$nom, PDO::PARAM_STR);
                $Requete->bindValue(3,$prenom, PDO::PARAM_STR);
                $Requete->bindValue(4,$mail, PDO::PARAM_STR);
                $Requete->execute();

                //message de l'envoie par mail et redirection
                $message='Un nouveau mot de passe vous a été envoyé par mail';
                echo '<script type="text/javascript">window.alert("'.$message.'");
                window.location.replace("Login.form.html");
                </script>'; 
            }
            else{
                //message de l'envoie par mail et redirection
                $message='Cet utilisateur est introuvable, veuillez réessayer';
                echo '<script type="text/javascript">window.alert("'.$message.'");
                window.location.replace("forgot_password.php");
                </script>'; 

            }
          
        }






        ?>
    </body>
</html>