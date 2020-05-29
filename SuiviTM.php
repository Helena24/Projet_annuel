<!-- 
	Page qui affiche le graphique 
	tour mollet
	Cette page contient les données 
	en brut et n'est pas connecté à
	la base de données --->

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
	<meta charset="UTF-8">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>Visualisation de l'évolution des mensurations</title>
</head>

<body>
<center>
<!-- Lien vers les autres graphiques -->  
<input type="button" onclick="window.location.href = 'SuiviP.php';" value="Suivi du poids"/>
<input type="button" onclick="window.location.href = 'SuiviTE.php';" value="Suivi du tour d'epaule"/>
<input type="button" onclick="window.location.href = 'SuiviTB.php';" value="Suivi du tour de bras"/>
<input type="button" onclick="window.location.href = 'SuiviTP.php';" value="Suivi du tour de poignet"/>
<input type="button" onclick="window.location.href = 'SuiviTH.php';" value="Suivi du tour de hanche"/>
<input type="button" onclick="window.location.href = 'SuiviTM.php';" value="Suivi du tour de mollet"/>
<input type="button" onclick="window.location.href = 'SuiviTT.php';" value="Suivi du tour de taille"/>
</center>


<h2>Evolution du tour de mollet</h2>

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
			label: "Tour de mollet",
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
