<!DOCTYPE html>
<html>

<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<script type="text/java" src='/MAMP/htdocs/Projet_annuel-1/Chart.js'></script>
<script src='/MAMP/htdocs/Projet_annuel-1/Chart.min.js'></script>



<head>
    <title>Visualisation de l'évolution des mesures balances</title>
</head>

<!-- <canvas id="GraphMesures" width="400" height="400"></canvas> -->
<!-- <script>
    // var ctx = document.getElementById('GraphMesures').getContext('2d');
    var DATE = ['14-01-2020','14-02-2020'];
    var config = {
        type = 'line',
        data = {
            labels : ['14-01-2020','14-02-2020'],
            dataset : [{
                label : 'Poids',
                backgroundColor : window.chartColors.red,
                borderColor : window.chartColors.red,
                data : [
                    '68',
                    '70'
                ],
                fill : false,

            },{
                label : 'Tour d épaules',
                fill : false,
                backgroundColor : window.chartColors.blue,
                borderColor : window.chartColrs.blue,
                data : [
                    '45',
                    '48'
                ],
            }]
        },
        options : {
            responsive: true,
            title: {
                display: true,
                text: 'Evolution des mesures balances'
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scalelabel: {
                        display: true,
                        labelString: 'Date'
                    }
                }],
                yAxes: [{
                    display: true,
                    scalelabel: {
                        display: true,
                        labelString: 'Poids'
                    }
                }]
            }
        }
    };
    window.onload = function() {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myLine = new Chart(ctx,config);
    };
    
</script> -->


<!--
$id=$_SESSION['id_client'];


// $Requete1 = $connect->prepare('SELECT `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_TAILLE_CLIENT`, `TOUR_POITRINE_CLIENT`, `ID_CLIENT` FROM `mensurations` WHERE `ID_CLIENT`=$id');
// bindValue("DATE_MENSURATION",$Date1, PDO::PARAM_STR];
// $tailleClient1=$_POST['TAILLE_CLIENT'];
// $poidsClient1=$_POST['POIDS_CLIENT'];
// $tourepaule=$_POST['TOUR_EPAULE_CLIENT'];
// $tourbras=$_POST['TOUR_BRAS_CLIENT'];
// $tourpoignet=$_POST['TOUR_POIGNET_CLIENT'];
// $tourhanche=$_POST['TOUR_HANCHE_CLIENT'];
// $tourmollet=$_POST['TOUR_MOLLET_CLIENT'];
// $tourpoitrine=$_POST['TOUR_POITRINE_CLIENT'];
// $tourtaille=$_POST['TOUR_TAILLE_CLIENT'];


//$datay1 = array($Date1,$tailleClient,$poidsClient,$tourepaule,$tourbras,$tourpoignet,$tourhanche,$tourmollet,$tourpoitrine,$tourtaille);

/* $Requete2 = $connect->prepare('SELECT `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_POITRINE_CLIENT`, `TOUR_TAILLE_CLIENT` FROM `mensurations` WHERE `ID_MENSURATION`=2');
$Date2=$_POST['DATE_MENSURATION'];
$tailleClient2=$_POST['TAILLE_CLIENT'];
$poidsClient2=$_POST['POIDS_CLIENT'];
$tourepaule=$_POST['TOUR_EPAULE_CLIENT'];
$tourbras=$_POST['TOUR_BRAS_CLIENT'];
$tourpoignet=$_POST['TOUR_POIGNET_CLIENT'];
$tourhanche=$_POST['TOUR_HANCHE_CLIENT'];
$tourmollet=$_POST['TOUR_MOLLET_CLIENT'];
$tourpoitrine=$_POST['TOUR_POITRINE_CLIENT'];
$tourtaille=$_POST['TOUR_TAILLE_CLIENT']; */
//$datay2 = array($Date2,$tailleClient,$poidsClient,$tourepaule,$tourbras,$tourpoignet,$tourhanche,$tourmollet,$tourpoitrine,$tourtaille);*/

// $data1 = array($tailleClient1,$tailleClient2);
// echo($Date1);
// $data2 = array($poidsClient1,$poidsClient2);

/*
// Setup the graph
$graph = new Graph(300,250);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array($Date1,$Date2));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($data1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

// Create the second line
$p2 = new LinePlot($data2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Line 2');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke(); */
//$datay1 = array(20,15,23,15);
//$datay2 = array(12,9,42,8);
//$datay3 = array(5,17,32,24);

// Setup the graph
/* $graph = new Graph(300,250);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($data1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

// Create the second line
$p2 = new LinePlot($data2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Line 2');

// Create the third line
$p3 = new LinePlot($datay3);
$graph->Add($p3);
$p3->SetColor("#FF1493");
$p3->SetLegend('Line 3');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke(); -->

<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					fill: false,
				}, {
					label: 'My Second dataset',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});

			});

			window.myLine.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[config.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + config.data.datasets.length,
				backgroundColor: newColor,
				borderColor: newColor,
				data: [],
				fill: false
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config.data.datasets.push(newDataset);
			window.myLine.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				var month = MONTHS[config.data.labels.length % MONTHS.length];
				config.data.labels.push(month);

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
				});

				window.myLine.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myLine.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			config.data.labels.splice(-1, 1); // remove the label first

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myLine.update();
		});
	</script>

</body>
</html>
