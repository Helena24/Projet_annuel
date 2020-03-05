<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
    <title>Visualisation de mes mesures balances</title>
</head>

<h2>Choississez quelles mesures vous souhaitez visualiser</h2>


<center>
<input type="button" onclick="window.location.href = 'SuiviT.php';" value="Suivi de la taille"/>
<input type="button" onclick="window.location.href = 'SuiviP.php';" value="Suivi du poids"/>
<input type="button" onclick="window.location.href = 'SuiviTE.php';" value="Suivi du tour d'epaule"/>
<input type="button" onclick="window.location.href = 'SuiviTB.php';" value="Suivi du tour de bras"/>
<input type="button" onclick="window.location.href = 'SuiviTP.php';" value="Suivi du tour de poignet"/>
<input type="button" onclick="window.location.href = 'SuiviTH.php';" value="Suivi du tour de hanche"/>
<input type="button" onclick="window.location.href = 'SuiviTM.php';" value="Suivi du tour de mollet"/>
<input type="button" onclick="window.location.href = 'SuiviTT.php';" value="Suivi du tour de taille"/>

</center>
