<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<?php include("/Users/lucas/OneDrive/Documents/jpgraph-4.2.11/src/jpgraph.php"); ?>
<?php include("/Users/lucas/OneDrive/Documents/jpgraph-4.2.11/src/jpgraph_line.php"); ?>

<head>
    <title>Visualisation de l'évolution de mes mensurations</title>
</head>


<?php



$Requete1 = $connect->prepare('SELECT `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_POITRINE_CLIENT`, `TOUR_TAILLE_CLIENT` FROM `mensurations` WHERE `ID_MENSURATION`=1');
$Date1=$_POST['DATE_MENSURATION'];
$tailleClient1=$_POST['TAILLE_CLIENT'];
$poidsClient1=$_POST['POIDS_CLIENT'];
$tourepaule=$_POST['TOUR_EPAULE_CLIENT'];
$tourbras=$_POST['TOUR_BRAS_CLIENT'];
$tourpoignet=$_POST['TOUR_POIGNET_CLIENT'];
$tourhanche=$_POST['TOUR_HANCHE_CLIENT'];
$tourmollet=$_POST['TOUR_MOLLET_CLIENT'];
$tourpoitrine=$_POST['TOUR_POITRINE_CLIENT'];
$tourtaille=$_POST['TOUR_TAILLE_CLIENT'];


//$datay1 = array($Date1,$tailleClient,$poidsClient,$tourepaule,$tourbras,$tourpoignet,$tourhanche,$tourmollet,$tourpoitrine,$tourtaille);

$Requete2 = $connect->prepare('SELECT `DATE_MENSURATION`, `TAILLE_CLIENT`, `POIDS_CLIENT`, `TOUR_EPAULE_CLIENT`, `TOUR_BRAS_CLIENT`, `TOUR_POIGNET_CLIENT`, `TOUR_HANCHE_CLIENT`, `TOUR_MOLLET_CLIENT`, `TOUR_POITRINE_CLIENT`, `TOUR_TAILLE_CLIENT` FROM `mensurations` WHERE `ID_MENSURATION`=2');
$Date2=$_POST['DATE_MENSURATION'];
$tailleClient2=$_POST['TAILLE_CLIENT'];
$poidsClient2=$_POST['POIDS_CLIENT'];
$tourepaule=$_POST['TOUR_EPAULE_CLIENT'];
$tourbras=$_POST['TOUR_BRAS_CLIENT'];
$tourpoignet=$_POST['TOUR_POIGNET_CLIENT'];
$tourhanche=$_POST['TOUR_HANCHE_CLIENT'];
$tourmollet=$_POST['TOUR_MOLLET_CLIENT'];
$tourpoitrine=$_POST['TOUR_POITRINE_CLIENT'];
$tourtaille=$_POST['TOUR_TAILLE_CLIENT'];
//$datay2 = array($Date2,$tailleClient,$poidsClient,$tourepaule,$tourbras,$tourpoignet,$tourhanche,$tourmollet,$tourpoitrine,$tourtaille);*/

$data1 = array($tailleClient1,$tailleClient2);
echo($tailleClient1);
$data2 = array($poidsClient1,$poidsClient2);
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
$graph = new Graph(300,250);
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

/*/ Create the third line
$p3 = new LinePlot($datay3);
$graph->Add($p3);
$p3->SetColor("#FF1493");
$p3->SetLegend('Line 3');*/

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>