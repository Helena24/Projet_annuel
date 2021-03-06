<!-- 
    Page qui fait la requete
    pour la modification des données 
    des clients et leur mot de passe--->


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF8" />
    <title> Modification</title>
</head>
    <body>
        <?php
        //Utilise la fonction qui permet de générer une chaine de caractère aléatoire et l'envoi par mail automatique
        // Cela permet de réinitialiser le mot de passe
        include 'Add.form.php';
        //Connexion a la base de donnée
        Include 'Connect.php';
        session_start();

        //Action du bouton "Modifier" son mot de passe 
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



        //Action du bouton "Reinitialiser" son mot de passe 
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

        //Action du bouton modifer pour modifier le profil
        if(isset($_POST['Modifier_profil'])){
            $id=$_SESSION['ID_CLIENT'];
            
            //Si les champs ne sont pas vides, sinon ils gardent la valeur des $_SESSION 
            if (!empty($_POST['nom'])){
                $_SESSION['NOM_CLIENT']=$_POST['nom'];
                $nom=$_SESSION['NOM_CLIENT'];
            }
            else{
                $nom=$_SESSION['NOM_CLIENT'];
            };

            if (!empty($_POST['prenom'])){
                $_SESSION['PRENOM_CLIENT']=$_POST['prenom'];
                $prenom=$_SESSION['PRENOM_CLIENT'];
            }
            else{
                $prenom=$_SESSION['PRENOM_CLIENT'];
            };

            if (!empty($_POST['date_naissance'])){
                $_SESSION['DATE_NAISSANCE_CLIENT']=$_POST['date_naissance'];
                $daten=$_SESSION['DATE_NAISSANCE_CLIENT'];
            }
            else{
                $daten=$_SESSION['DATE_NAISSANCE_CLIENT'];
            };

            if (!empty($_POST['mail'])){
                $_SESSION['MAIL_CLIENT']=$_POST['mail'];
                $mail=$_SESSION['MAIL_CLIENT'];
            }
            else{
                $mail=$_SESSION['MAIL_CLIENT'];
            };

            if (!empty($_POST['telephone'])){
                $_SESSION['TEL_CLIENT']=$_POST['telephone'];
                $tel=$_SESSION['TEL_CLIENT'];
            }
            else{
                $tel=$_SESSION['TEL_CLIENT'];
            };

            if (!empty($_POST['numero_rue'])){
                $_SESSION['NUMERO_RUE']=$_POST['numero_rue'];
                $num_rue=$_SESSION['NUMERO_RUE'];
            }
            else{
                $num_rue=$_SESSION['NUMERO_RUE'];
            };
            
            if (!empty($_POST['nom_rue'])){
                $_SESSION['NOM_RUE']=$_POST['nom_rue'];
                $nom_rue=$_SESSION['NOM_RUE'];
            }
            else{
                $nom_rue=$_SESSION['NOM_RUE'];
            };
            
            if (!empty($_POST['code_postal'])){
            $_SESSION['CODE_POSTAL']=$_POST['code_postal'];
            $code_rue=$_SESSION['CODE_POSTAL'];
            }
            else{
                $code_rue=$_SESSION['CODE_POSTAL'];
            };
            
            if (!empty($_POST['ville'])){
                $_SESSION['VILLE']=$_POST['ville'];
                $ville=$_SESSION['VILLE'];
            }
            else{
                $ville=$_SESSION['VILLE'];
            };

            $Requete=$connect->query("UPDATE CLIENTS SET NOM_CLIENT='$nom', PRENOM_CLIENT='$prenom', DATE_NAISSANCE_CLIENT='$daten', MAIL_CLIENT='$mail', TEL_CLIENT='$tel' WHERE ID_CLIENT='$id' ");
                $Requete->bindValue(1,$nom, PDO::PARAM_STR);
                $Requete->bindValue(2,$prenom, PDO::PARAM_STR);
                $Requete->bindValue(3,$daten, PDO::PARAM_STR);
                $Requete->bindValue(4,$mail, PDO::PARAM_STR);
                $Requete->bindValue(5,$tel, PDO::PARAM_STR);
                $Requete->bindValue(6,$id, PDO::PARAM_STR);
                $Requete->execute();
            
            $Requete=$connect->query("UPDATE ADRESSE SET NUMERO_RUE='$num_rue', NOM_RUE='$nom_rue', CODE_POSTAL='$code_rue', VILLE='$ville' WHERE ID_CLIENT='$id' ");
                $Requete->bindValue(1,$num_rue, PDO::PARAM_STR);
                $Requete->bindValue(2,$nom_rue, PDO::PARAM_STR);
                $Requete->bindValue(3,$code_rue, PDO::PARAM_STR);
                $Requete->bindValue(4,$ville, PDO::PARAM_STR);
                $Requete->bindValue(5,$id, PDO::PARAM_STR);
                $Requete->execute();
                
                //message de confirmation et redirection
                $message='Modification du profil effectué';
                echo '<script type="text/javascript">window.alert("'.$message.'");
                window.location.replace("Profil.php");
                </script>'; 
        }
        ?>
    </body>
</html>