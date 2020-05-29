<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- les graphiques -------------->
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
    <title>Visualisation de mes progrès</title>
</head>

<center>
<input type="button" onclick="window.location.href = 'visualisationmensurations.php';" value="Je veux visualiser l'évolution de mes mensurations"/>
<input type="button" onclick="window.location.href = 'visualisationmesures.php';" value="Je veux visualiser l'évolution de mes mesures balances"/>
</center>

