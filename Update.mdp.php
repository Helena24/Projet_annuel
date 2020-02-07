<!DOCTYPE HTML>
<?php include("entete.php"); ?>


<html>
    <head>
    <meta charset="UTF8" />
    <title> Ajout Client</title>
    <!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
    </head>
<body>

<h1>Modification mot de passe</h1>
<form method="POST" action="Update.Client.php">
<!-- Affichage des champs textes -->
<p>Ancien mot de passe :</p><input type="text" name="ancien_mdp"><br/><br/>

<p>Nouveau mot de passe :</p><input type="text" name="nouveau_mdp1"><br/><br/>
<p>Nouveau mot de passe :</p><input type="text" name="nouveau_mdp2"><br/><br/>

<!-- Affichage d'un bouton "Modifier" -->
<input type="submit" name="modifier" value="Modifier" ></td>

</form>
</body>
</html>
