<!DOCTYPE html>
<html>

<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>

<head>	
	<meta charset="UTF-8">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>Visualisation de l'évolution des mesures balances</title>
</head>

<body>
<center>
<input type="button" onclick="window.location.href = 'SuiviMG.php';" value="Suivi de la masse graisseuse"/>
<input type="button" onclick="window.location.href = 'SuiviME.php';" value="Suivi de la masse d'eau dans le corps"/>
<input type="button" onclick="window.location.href = 'SuiviGV.php';" value="Suivi de la graisse viscerale"/>
<input type="button" onclick="window.location.href = 'SuiviMO.php';" value="Suivi de la masse osseuse"/>
<input type="button" onclick="window.location.href = 'SuiviMM.php';" value="Suivi de la masse musculaire"/>
<input type="button" onclick="window.location.href = 'SuiviIE.php';" value="Suivi de de l'indice d'effort"/>
<input type="button" onclick="window.location.href = 'SuiviImp.php';" value="Suivi de l'impédance du corps"/>
</center>

<?php
/*$Requete = $connect->prepare("SELECT DATE_MESURES,POURCENTAGE_MASSE_GRAISSEUSE FROM mesures WHERE ID_CLIENT=1 ");
$Requete->execute();
$Requeteok = $Requeteok->fetchAll();
print_r($Requeteok);*/

//DATEDIFF();
?>

<h2>Evolution du pourcentage de masse graisseuse</h2>

<center>
<div style="width: 75%">

<canvas id="MyChart"></canvas>

<script>
var ctx = document.getElementById('MyChart').getContext('2d');
var chart = new Chart(ctx, {
	//type of chart
	type: 'line',

	//data for the dataset
	data: {
		labels: ["14/01/2020","14/02/2020","14/03/2020"],
		datasets: [{
			label: "Pourcentage masse graisseuse",
			backgroundColor: 'rgb(255,20,20)',
			borderColor: 'rgb(255,20,20)',
			data: [68,70,69],
        }]
    },
	options: {}
});
</script>
</center>
</body>
</html>
