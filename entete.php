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
				<li><a href="Profil.php">Mon Profil</a></li>
				<li><a href="Update.mdp.php">Modifier mot de passe </a></li>
			</ul>
		</li>

		<li><a href="Formulaire_Ajout.php">Nouveau client </a> </li>
	</ul>
</html>
