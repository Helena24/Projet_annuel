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
<input type="button" onclick="window.location.href = 'SuiviMG.php';" value="Suivi de la masse graisseuse"/>
<input type="button" onclick="window.location.href = 'SuiviME.php';" value="Suivi de la masse d'eau dans le corps"/>
<input type="button" onclick="window.location.href = 'SuiviGV.php';" value="Suivi de la graisse viscerale"/>
<input type="button" onclick="window.location.href = 'SuiviMO.php';" value="Suivi de la masse osseuse"/>
<input type="button" onclick="window.location.href = 'SuiviMM.php';" value="Suivi de la masse musculaire"/>
<input type="button" onclick="window.location.href = 'SuiviIE.php';" value="Suivi de de l'indice d'effort"/>
<input type="button" onclick="window.location.href = 'SuiviImp.php';" value="Suivi de l'age métabolique"/>
</center>

