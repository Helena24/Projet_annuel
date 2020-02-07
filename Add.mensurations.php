<!DOCTYPE html>
<html>

    <head>
	    <meta charset="utf-8" />
		<link rel="stylesheet" href="Nutrition.css" />
        <title>Accueil</title>
    </head>
	<header>
		<br>
		<h1>Bienvenue</h1>
		<!-- Changer le chemin du logo pour qu'il s'affiche -->
		<a href="entete.php" title='Mon image' target='_blank'><img src='https://nsa40.casimages.com/img/2020/01/31/mini_20013102493697038.png' alt='Mon image' height="140" width="100" id="logo" /></a>
	</header>

<ul id="menu-deroulant">
	<li><a href="#">Mes semainiers</a>
		<ul>
			<li><input type="date" placeholder="mm/dd/yy"></li>
			<li><a href="#">Créer un semainier des ressentis</a></li>
		</ul>
	</li>
<li><a href="#">Alimentation</a>
		<ul>
			<li><a href="#">Mes demandes</a></li>
			<li><a href="#">Equivalence</a></li>
			<li><a href="#">Aliments non souhaités</a></li>
			<li><a href="#">Demandes</a></li>
		</ul>
	</li>
<li><a href="#">Ma progression</a>
		<ul>
			<li><a href="Mensurations.html">Saisie des mensurations</a></li>
			<li><a href="#">Saisie des informations balances</a></li>
			<li><a href="#">Visualiser mes progrès</a></li>
		</ul>
	</li>
<li><a href="#">Mon profil</a>
		<ul>
			<li><a href="Add.form.html">Connexion / Inscription</a></li>
		</ul>
	</li>
	</li>
<li><a href="#">Contact</a>
	</li>
</ul>

<?php
include("Connect.php");

if(isset($_POST['add']))
{
    $DateM=$_POST['DateM'];
    $Taille=$_POST['Taille'];
    $Poids=$_POST['Poids'];
    $epaules=$_POST['epaules'];
    $bras=$_POST['bras'];
    $poitrine=$_POST['poitrine'];
    $poignet=$_POST['poignet'];
    $toutaille=$_POST['tourtaille'];
    $hanche=$_POST['hanche'];
    $mollet=$_POST['mollet'];


	$Requete = $connect->prepare('INSERT INTO MENSURATIONS (DATE_MENSURATION,TAILLE_CLIENT,POIDS_CLIENT,TOUR_EPAULE_CLIENT,TOUR_BRAS_CLIENT,TOUR_POIGNET_CLIENT,TOUR_HANCHE_CLIENT,TOUR_MOLLET_CLIENT) 
    VALUES(:DateM, :Taille, :Poids, :epaules, :bras, :poitrine, :poignet, :tourtaille, :hanche, :mollet)');
	$Requete->bindValue(":DateM",$DateM, PDO::PARAM_STR);
	$Requete->bindValue(":Taille",$Taille, PDO::PARAM_STR);
    $Requete->bindValue(":Poids",$Poids, PDO::PARAM_STR);
    $Requete->bindValue(":epaules",$epaules, PDO::PARAM_STR);
    $Requete->bindValue(":bras",$bras, PDO::PARAM_STR);
    $Requete->bindValue(":poitrine",$poignet, PDO::PARAM_STR);
    $Requete->bindValue(":tourtaille",$tourtaille, PDO::PARAM_STR);
    $Requete->bindValue(":hanche",$hanche, PDO::PARAM_STR);
    $Requete->bindValue(":mollet",$mollet, PDO::PARAM_STR);
	$Requete->execute();
}

?>

</html>