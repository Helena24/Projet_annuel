<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF8" />
    <title> Ajout Client</title>
    <!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
    </head>
<body>

<h1>Modification mot de passe</h1>
<form method="POST" action="Update.Client.php">
<!-- Affichage des champs textes -->
<p>Ancien mot de passe :</p><input type="text" name="ancien_mdp"><br/><br/>

<p>Nouveau mot de passe :</p><input type="text" name="nouveau_mdp1"><br/><br/>
<p>Nouveau mot de passe :</p><input type="text" name="nouveau_mdp2"><br/><br/>

<!-- Affichage d'un bouton "Modifier" -->
<input type="submit" name="modifier" value="Modifier" ></td>

</form>



<?php
Include 'Connect.php';
session_start();

if(isset($_POST['modifier'])){
	$ancien_mdp=$_POST['ancien_mdp1'];
	$new_mdp1=$_POST['nouveau_mdp1'];
    $new_mdp2=$_POST['nouveau_mdp2'];
    $id=$_SESSION['ID_CLIENT']; 


    if ($new_mdp1==$new_mdp2){
        
        $new_mdp3=$new_mdp2;
        $salt = "@|-°+==00001ddQ";
        $mdpUser=md5($new_mdp3.$salt );

        $Requete = $connect->prepare("UPDATE CLIENTS SET MDP_CLIENT='$mdpUser' WHERE ID_CLIENT='$id' AND MDP_CLIENT='$ancien_mdp' "); 
        $Requete->bindValue(1,$mdpUser, PDO::PARAM_STR);
        $Requete->bindValue(2,$ancien_mdp, PDO::PARAM_STR);
        $Requete->execute();

    }
    
    
    
    
   

	$Requete = $bconnect->prepare("UPDATE CLIENTS SET MDP_CLIENT='$new_mdp3' WHERE ID_CLIENT=    ");
    
    $Requete->bindValue(1,$ancien_mdp, PDO::PARAM_STR);
	
	$Requete->bindValue(3,$new_mdp1, PDO::PARAM_INT);
	$Requete->bindValue(4,$new_mdp2, PDO::PARAM_STR);
	$Requete->execute();




?>     

</body> 
</html> 

