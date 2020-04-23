<!DOCTYPE html>
<html>

<?php include("Functions.php");?>
<?php include("Connect.php"); ?>

<head>	
	<meta charset="UTF-8">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>Visualisation de l'évolution des mensurations</title>
</head>

<body>
<center>
<input type="button" onclick="window.location.href = 'SuiviP.php';" value="Suivi du poids"/>
<input type="button" onclick="window.location.href = 'SuiviTE.php';" value="Suivi du tour d'epaule"/>
<input type="button" onclick="window.location.href = 'SuiviTB.php';" value="Suivi du tour de bras"/>
<input type="button" onclick="window.location.href = 'SuiviTP.php';" value="Suivi du tour de poignet"/>
<input type="button" onclick="window.location.href = 'SuiviTH.php';" value="Suivi du tour de hanche"/>
<input type="button" onclick="window.location.href = 'SuiviTM.php';" value="Suivi du tour de mollet"/>
<input type="button" onclick="window.location.href = 'SuiviTT.php';" value="Suivi du tour de taille"/>
</center>


<h2>Evolution du pourcentage de m</h2>

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
