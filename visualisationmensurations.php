<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
    <title>Visualisation de l'évolution de mes mensurations</title>
</head>


<?php


$Requete = $connect->prepare('SELECT `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_POITRINE_CLIENT`, `TOUR_TAILLE_CLIENT` FROM `mensurations`WHERE 1');
$Date1=$_POST['DATE_MENSURATION'];
$tailleClient=$_POST['TAILLE_CLIENT'];
$poidsClient=$_POST['POIDS_CLIENT'];
$tourepaule=$_POST['TOUR_EPAULE_CLIENT'];
$tourbras=$_POST['TOUR_BRAS_CLIENT'];
$tourpoignet=$_POST['TOUR_POIGNET_CLIENT'];
$tourhanche=$_POST['TOUR_HANCHE_CLIENT'];
$tourmollet=$_POST['TOUR_MOLLET_CLIENT'];
$tourpoitrine=$_POST['TOUR_POITRINE_CLIENT'];
$tourtaille=$_POST['TOUR_TAILLE_CLIENT'];
$datay1 = array($Date,$tailleClient,$poidsClient,$tourepaule,$tourbras,$tourpoignet,$tourhanche,$tourmollet,$tourpoitrine,$tourtaille);

$Requete = $connect->prepare('SELECT `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_POITRINE_CLIENT`, `TOUR_TAILLE_CLIENT` FROM `mensurations`WHERE 2');
$Date2=$_POST['DATE_MENSURATION'];
$tailleClient=$_POST['TAILLE_CLIENT'];
$poidsClient=$_POST['POIDS_CLIENT'];
$tourepaule=$_POST['TOUR_EPAULE_CLIENT'];
$tourbras=$_POST['TOUR_BRAS_CLIENT'];
$tourpoignet=$_POST['TOUR_POIGNET_CLIENT'];
$tourhanche=$_POST['TOUR_HANCHE_CLIENT'];
$tourmollet=$_POST['TOUR_MOLLET_CLIENT'];
$tourpoitrine=$_POST['TOUR_POITRINE_CLIENT'];
$tourtaille=$_POST['TOUR_TAILLE_CLIENT'];
$datay2 = array($Date,$tailleClient,$poidsClient,$tourepaule,$tourbras,$tourpoignet,$tourhanche,$tourmollet,$tourpoitrine,$tourtaille);



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
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

// Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Line 2');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>