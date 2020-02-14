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
    Date :                                         <input name="DateB" type="date" required ><br>
    Pourcentage de masse graisseuse :              <input name="PourcentMG" required ><br>
    Poids (en kg) :                                <input name="Masse" required ><br>
    Pourcentage d'eau dans le corps :              <input name="PourcentH2O" required ><br>
    Graisse viscérale :                            <input name="GV" required ><br>
    Masse musculaire :                             <input name="Massemuscu" required ><br>
    Indice d'effort physique :                     <input name="Indiceeffort" required ><br>
    Masse osseuse :                                <input name="Masseosseuse" required ><br>
    Impédance du corps :                           <input name="Impedance" required ><br>
    

    <br> <input type="submit"  name="envoyer"  value="Envoyer au Nutritionniste"/>
</fieldset>
</form>
</center>
</body>
</html>