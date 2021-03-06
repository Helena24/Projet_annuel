<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- l'entete de l'admin --------->
<!-------------------------------->

<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />
		<link rel="stylesheet" href="Nutrition.css" />
		<!-- Nom de l'onglet -->
        <title>Accueil</title>
    </head>
	<header>
		<br>
		<!-- Affichage du logo -->
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
				<li><a href="nv_semainier_nutri.php">Nouveau semainier </a></li>
				<li><a href="#">Visualiser les semainiers</a></li>
			</ul>
		</li>
	
		<li><a href="#">Alimentation</a>
			<ul>
				<li><a href="tab_equivalence.php">Equivalences</a></li>
				<li><a href="suppr_aliment.php">Aliments</a></li>
				<li><a href="liste_recettes.php">Recettes</a></li>
				<li><a href="liste_smoothies.php">Smoothies</a></li>
				<li><a href="suppr_ingredient.php">Ingrédients</a></li>
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

		<li><a href="#">Ajouter</a>
			<ul>
				<li><a href="nv_recette.php">Recette</a></li>
				<li><a href="nv_smoothie.php">Smoothie</a></li>
				<li><a href="nv_aliment.php">Aliment</a></li>
				<li><a href="nv_ingredient.php">Ingrédient</a></li>
			</ul>
		</li>

		<li><a href="#">Clients</a> 
		<ul>
				<li><a href="Formulaire_Ajout.php">Ajouter un client</a></li>
				<li><a href="liste_clients.php">Liste des clients</a></li>
			</ul>
		</li>
	</ul>
</html>
