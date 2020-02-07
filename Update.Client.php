<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Modification</title>
<!--<link rel="stylesheet" media="screen" href="CSSSSSSS"> -->
</head>
<body>

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
        //$salt = "@|-°+==00001ddQ";
        $mdpUser=md5($new_mdp3);

        $Requete =$connect->query("UPDATE CLIENTS SET MDP_CLIENT='$mdpUser' WHERE ID_CLIENT='$id' "); 
        $Requete->bindValue(1,$mdpUser, PDO::PARAM_STR);
        $Requete->execute();

    }
    else {

        echo 'Erreur';
    }
}
?>
</body>
</html>