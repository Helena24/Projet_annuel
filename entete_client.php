<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<link rel="stylesheet" href="Nutrition.css" />
        <title>Accueil</title>
    </head>
	
	<header>
		<!-- Changer le chemin du logo pour qu'il s'affiche -->
		<a href="entete.php" title='Mon image' target='_blank'><img src="logo-cutout.png" alt='Mon image' height="140" width="100" id="logo" /></a>
		
		<!-- Affichage du nom de l'utilisateur dans l'entete-->
		<div class= "nom">
			<?php session_start();
			echo $_SESSION['NOM_CLIENT']; echo" "; 
			echo $_SESSION['PRENOM_CLIENT']; ?>
		</div>
	
		<!-- Affichage du boutton de Deconnexion-->
		<div class= "boutton_deconnexion">
		<form action=" Login.form.php" method="post">
		<input type="submit" value="Deconnexion" name="Deconnexion">
		</form>
		</div>
	</header>

<ul id="menu-deroulant">
	<li><a>Semainiers</a>
		<ul>
			<li><a href="#">Visualier mes semainiers</a></li>
		</ul>
	</li>
	
    <li><a href="#">Alimentation</a>
		<ul>
			<li><a href="tab_equivalence.php">Equivalences</a></li>
			<li><a href="visualisation_aliment.php">Aliments</a></li>
			<li><a href="liste_recettes.php">Recettes</a></li>
			<li><a href="liste_smoothies.php">Smoothies</a></li>
			<li><a href="liste_ingredients.php">Ingrédients</a></li>
			<li><a href="#">Aliments non souhaités</a></li>
			<li><a href="#">Demandes</a></li>
		</ul>
    </li>
    
    <li><a href="#">Mesures</a>
		<ul>
			<li><a href="VisualisationGraph.php">Visualiser mes progrès</a></li>
		</ul>
    </li>
    
    <li><a href="#">Mon profil</a>
		<ul>
			<li><a href="Profil.php">Mon Profil</a></li>
			<li><a href="Update.mdp.php">Modifier mot de passe</a></li>
        </ul> 
	</li>
</ul>
</html>
