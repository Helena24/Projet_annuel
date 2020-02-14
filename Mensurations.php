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
    Date :                          <input name="DateM" type="date" required ><br>
    Taille (en cm) :                <input name="Taille" required ><br>
    Poids (en kg) :                 <input name="Poids" required ><br>
    Tour d'épaules (en cm) :        <input name="epaules" required ><br>
    Tour de bras (en cm) :          <input name="bras" required ><br>
    Tour de poitrine (en cm) :      <input name="poitrine" required ><br>
    Tour de poignet (en cm) :       <input name="poignet" required ><br>
    Tour de taille (en cm) :        <input name="tourtaille" required ><br>
    Tour de hanche (en cm) :        <input name="hanche" required ><br>
    Tour de mollet (en cm) :        <input name="mollet" required ><br>

    <br> <input type="submit" name="envoyer" value="Envoyer au Nutritionniste"/>
</fieldset>
</form>
</center>
</body>
</html>