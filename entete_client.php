<!DOCTYPE html>
<?php //session_start(); ?>

<html>

    <head>
	    <meta charset="utf-8" />
		<link rel="stylesheet" href="Nutrition.css" />
        <title>Accueil</title>
    </head>
	<header>
		<br>
	
		<!-- Changer le chemin du logo pour qu'il s'affiche -->
		<a href="entete.php" title='Mon image' target='_blank'><img src="logo-cutout.png" alt='Mon image' height="140" width="100" id="logo" /></a>
		
		<h1 id="afficheclient">
		<?php session_start();
		echo $_SESSION['NOM_CLIENT']."<br/>\n"; 
		echo $_SESSION['PRENOM_CLIENT']; ?></h1>
        
        <!-- Deconnexion de l'utilisateur (redirection vers la page de connexion) -->
       
		
		<form action=" Login.form.php" method="post">
		<input type="submit" value="Deconnexion" name="Deconnexion">
		</form>
		
		
		
	

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
			<li><a href="Update.mdp.php">Modification mdp</a></li>

        </ul> 
	</li>

</ul>

</html>
