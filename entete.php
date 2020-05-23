<?php //session_start(); ?>

<!DOCTYPE html>
<html>

    <head>
	    <meta charset="utf-8" />
		<link rel="stylesheet" href="Nutrition.css" />
        <title>Accueil</title>
    </head>
	<header>
		<br>
		<!-- Changer le chemin du logo pour qu'il s'affiche -->
		<a href="entete.php" title='Mon image' target='_blank'><img src='https://nsa40.casimages.com/img/2020/01/31/mini_20013102493697038.png' alt='Mon image' height="140" width="100" id="logo" /></a>
		
		<h1 id="afficheclient">
		<?php 
		session_start();
		echo $_SESSION['NOM_CLIENT']."<br/>\n"; 
		echo $_SESSION['PRENOM_CLIENT']; ?></h1>

		<!-- Deconnexion de l'utilisateur (redirection vers la page de connexion) -->
	
		
	
		

	</header>

	<ul id="menu-deroulant">
		<li><a>Semainiers</a>
			<ul>
				<li><a href="Semainier_nutri.php">Nouveau semainier </a></li>
				<li><a href="#">Visualiser les semainiers</a></li>
			</ul>
		</li>
	
		<li><a href="#">Alimentation</a>
			<ul>
				<li><a href="tab_equivalence.php">Equivalences</a></li>
				<li><a href="#">Demandes clients </a></li>
				</ul>
			</li>

		<li><a href="#">Mesures</a>
			<ul>
				<li><a href="Mensurations.php">Saisie des mensurations</a></li>
				<li><a href="Mesures.php">Saisie des informations balances</a></li>
			</ul>
		</li>

		<li><a href="#">Mon profil</a>
			<ul>
			<li><a href="Update.mdp.php">Modifier mot de passe </a></li>
			<li> 	
				<form action=" Login.form.php" method="post">
				<button type="submit" value="Deconnexion" name="Deconnexion"> Déconnexion</button>
				</form>
			</li>
			</ul>
		</li>

		<li><a href="Formulaire_Ajout.php">Nouveau client </a> </li>

		
		<!-- <a href="Login.form.html">
		<input type="submit" value="Connexion" name="connexion"/>
		</a> -->
	</ul>

</html>
