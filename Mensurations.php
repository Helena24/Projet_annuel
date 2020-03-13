<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>

<head>
    <title>Mensurations</title>
</head>


<center>
<h3>Veuillez remplir attentivement chacun des champs ci dessous</h3>

<form method="POST" action= "Add.mensurations.php">
<fieldset>
    <label for="DateM">Date :</label><br>
    <input type=date name="DateM" required /><br>
    <label for="Taille">Taille (en cm) :</label><br>
    <input name="Taille" required /><br>
    <label for="Poids">Poids (en kg) :</label><br>
    <input name="Poids" required /><br>
    <label for="epaules">Tour d'épaules (en cm) :</label><br>
    <input name="epaules" required /><br>
    <label for="poitrine">Tour de poitrine (en cm) :</label><br>
    <input name="poitrine" required /><br>
    <label for="bras">Tour de bras (en cm) :</label><br>
    <input name="bras" required /><br>
    <label for="poignet">Tour de poignet (en cm) :</label><br>
    <input name="poignet" required /><br>
    <label for="tourtaille">Tour de taille (en cm) :</label><br>
    <input name="tourtaille" required /><br>
    <label for="hanche">Tour de hanche (en cm) :</label><br>
    <input name="hanche" required /><br>
    <label for="cuisse">Tour de poitrine (en cm) :</label><br>
    <input name="cuisse" required /><br>
    <label for="mollet">Tour de mollet (en cm) :</label><br>
    <input name="mollet" required /><br>

    <br> <input type="submit" name="enregistrer" value="Enregistrer"/>
</fieldset>
</form>
</center>
</body>
</html>