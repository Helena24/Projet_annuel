<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF8" />
    <title> Modification</title>
</head>
    <body>
        <?php
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
        ?>
    </body>
</html>