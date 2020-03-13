<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php"); ?>
<head>
    <title>Mesures balances</title>
</head>

<center>
<h3>Veuillez remplir attentivement chacun des champs ci dessous</h3>
<form method="POST" action= "Add.mesures.php">
<fieldset>
    <label for="DateB">Date :</label><br>
    <input type="date" name="DateB" required /><br>
    <label for="PourcentMG">Pourcentage de masse graisseuse :</label><br>
    <input name="PourcentMG" required /><br>
    <label for="Masse">Masse :</label><br>
    <input name="Masse" required /><br>
    <label for="PourcentH2O">Pourcentage d'eau dans le corps (F : entre 45 et 60% / H : entre 50 et 65%) :</label><br>
    <input name="PourcentH2O" required/><br>
    <label for="GV">Graisse viscérale (1-12 : Normal / 13-59 : Excessif) :</label><br>
    <input name="GV" required /><br>
    <label for="Massemuscu">Masse musculaire :</label><br>
    <input name="Massemuscu" required /><br>
    <label for="Indiceeffort">Indice d'effort physique (Entre 1 et 9) :</label><br>
    <input name="Indiceeffort" required /><br>
    <label for="Masseosseuse">Masse osseuse :</label><br>
    <input name="Masseosseuse" required /><br>
    <label for="Age Métabolique">Age Métabolique :</label><br>
    <input name="Agemetabolique" required /><br>

    <br> <input type="submit"  name="enregistrer"  value="Enregistrer"/>
</fieldset>
</form>
</center>
</body>
</html>