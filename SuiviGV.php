<!DOCTYPE html>
<html>
<?php include("Functions.php");?>
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
<input type="button" onclick="window.location.href = 'SuiviGV.php';" value="Suivi de la graisse viscérale"/>
<input type="button" onclick="window.location.href = 'SuiviMO.php';" value="Suivi de la masse osseuse"/>
<input type="button" onclick="window.location.href = 'SuiviMM.php';" value="Suivi de la masse musculaire"/>
<input type="button" onclick="window.location.href = 'SuiviIE.php';" value="Suivi de de l'indice d'effort"/>
<input type="button" onclick="window.location.href = 'SuiviImp.php';" value="Suivi de l'impédance du corps"/>
</center>



<h2>Evolution du pourcentage de graisse viscérale</h2>




<center>
<div style="width: 65%">

<canvas id="MyChart"></canvas>

<?php
$reponse = $connect->query('SELECT * FROM `mesures` NATURAL JOIN clients WHERE ID_CLIENT=1 ORDER BY DATE_MESURES ASC');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
			<script>
			var ctx = document.getElementById('MyChart').getContext('2d');
			var chart = new Chart(ctx, {
			//type of chart
			type: 'line',

			//data for the dataset
			data: {
				labels: [<?php echo $donnees['DATE_MESURES']?>],
				datasets: [{
					label: "Indice de graisse viscérale",
					backgroundColor: 'rgb(255,20,20)',
					borderColor: 'rgb(255,20,20)',
					data: [68,70,69],
        		}]
    		},
	options: {}
	});
</script>
            
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>


</center>
</body>
</html>
