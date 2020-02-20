<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Modification</title>
<!--<link rel="stylesheet" media="screen" href="CSSSSSSS"> -->
</head>
<body>
<ul>
    <li> <a href="Update.mdp.php">Retour en arrière</a> </li>
</ul>

<?php
//Connexion a la base de donnée
Include 'Connect.php';
session_start();

if(isset($_POST['Modifier'])){

    $ancien_mdp=$_POST['ancien_mdp'];
	$new_mdp1=$_POST['nouveau_mdp1'];
    $new_mdp2=$_POST['nouveau_mdp2'];
    $id=$_SESSION['ID_CLIENT'];
    $mdp=$_SESSION['MDP_CLIENT'];  

    //verification du mot de passe entré a ce qui est crypté dans la BDD
    if (password_verify($ancien_mdp, $mdp))
    {
        if ($new_mdp1=$new_mdp2){
    
            $mdpUser=password_hash($new_mdp2, PASSWORD_DEFAULT);

            $Requete=$connect->query("UPDATE CLIENTS SET MDP_CLIENT='$mdpUser' WHERE ID_CLIENT='$id'");
            $Requete->bindValue(1,$mdpUser, PDO::PARAM_STR);
            $Requete->execute();
            header('Location: Accueil.php');
        }
        else
        {
            echo "Erreur dans votre saisie";
        }
        echo"Modification effectuée";
    }
    else
    {
        echo "Ancien mot de passe incorrect";
    }




    
}
?>
</body>
</html>