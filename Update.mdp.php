<!DOCTYPE HTML>
<?php include("entete.php"); ?>


<html>
    <head>
    <meta charset="UTF8" />
    <title> Ajout Client</title>
    <!--  <link rel="stylesheet" media="screen" href="Style.css"> -->
    </head>
<body>

<form method="POST" action="Update.Client.php">
<!-- Affichage des champs textes -->
<p>Mot de passe actuel :</p><input type="text" name="ancien_mdp"><br/><br/>

<p>Nouveau mot de passe :</p><input type="text" name="nouveau_mdp1"><br/><br/>
<p>Confirmation :</p><input type="text" name="nouveau_mdp2"><br/><br/>

<!-- Affichage d'un bouton "Modifier" -->
<input type="submit" name="Modifier" value="Modifier" ></td>

</form>
</body>
</html>
