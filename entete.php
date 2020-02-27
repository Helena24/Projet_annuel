<!DOCTYPE html>
<?php session_start(); ?>

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
		
		<h1 id="afficheclient">
		<?php session_start();
		echo $_SESSION['NOM_CLIENT']."<br/>\n"; 
		echo $_SESSION['PRENOM_CLIENT']; ?></h1>

		
		
	

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
			<li><a href="Mensurations.php">Saisie des mensurations</a></li>
			<li><a href="Mesures.php">Saisie des informations balances</a></li>
			<li><a href="VisualisationGraph.php">Visualiser mes progrès</a></li>
		</ul>
	</li>
<li><a href="#">Mon profil</a>
		<ul>
			<li><a href="Profil.php">Mon Profil</a></li>
			<li><a href="Update.mdp.php">Modification mdp</a></li>
			
			<!-- Deconnexion de l'utilisateur (redirection vers la page de connexion) -->
	
		<a href= "Login.form.html">
		<input type="submit" value="Deconnexion" name="Deconnexion"/>
		</a>

		</ul>
	</li>
	</li>
<li><a href="#">Contact</a>
	</li>
</ul>




</html>