<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- les mensurations------------->
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
<head>
    <title>Visualisation de mes mesures balances</title>
</head>

<h2>Choississez quelles mensurations vous souhaitez visualiser</h2>


<center>
<input type="button" onclick="window.location.href = 'SuiviP.php';" value="Suivi du poids"/>
<input type="button" onclick="window.location.href = 'SuiviTE.php';" value="Suivi du tour d'epaule"/>
<input type="button" onclick="window.location.href = 'SuiviTPoit.php';" value="Suivi du tour de poitrine"/>
<input type="button" onclick="window.location.href = 'SuiviTB.php';" value="Suivi du tour de bras"/>
<input type="button" onclick="window.location.href = 'SuiviTP.php';" value="Suivi du tour de poignet"/>
<input type="button" onclick="window.location.href = 'SuiviTT.php';" value="Suivi du tour de taille"/>
<input type="button" onclick="window.location.href = 'SuiviTH.php';" value="Suivi du tour de hanche"/>
<input type="button" onclick="window.location.href = 'SuiviTB.php';" value="Suivi du tour de cuisse"/>
<input type="button" onclick="window.location.href = 'SuiviTM.php';" value="Suivi du tour de mollet"/>

</center>
