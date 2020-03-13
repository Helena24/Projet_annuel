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
</center>

<div style="display :flex; flex-direction:wrap; padding-left: 100px">
<form method="POST" action= "Add.mesures.php">
    <label for="client">Client : </label><br>
        <select name="Client">
        <?php
            $reponse = $connect->query('SELECT NOM_CLIENT FROM CLIENTS');
            while ($donnees = $reponse->fetch())
            {
            echo '<option value="' . $donnees['NOM_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . '</option>';
            }                  
        ?></select><br>
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

</form>


<div style="width:150px; padding-left:250px;">
<table border=1 cellspacing=4 cellpadding=4 class="semainier">
        <tr>
            <th>Date</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['DATE_MESURES']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Pourcentage masse graisseuse</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['POURCENTAGE_MASSE_GRAISSEUSE']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Masse</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['MASSE']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Pourcentage eau corps</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['POURCENTAGE_EAU_CORPS']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Graisse viscérale</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['GRAISSE_VISCERALE']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Masse musculaire</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['MASSE_MUSCULAIRE']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Indice effort</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['INDICE_EFFORT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Masse osseuse</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['MASSE_OSSEUSE']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Age métabolique</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MESURES');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['AGE_METABOLIQUE']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
</body>
</html>