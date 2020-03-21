<!DOCTYPE html>
<html>
<?php include("entete.php"); ?>
<?php include("police.php"); ?>
<?php include("Connect.php");?>

<javascript 

<head>
    <title>Mensurations</title>
</head>


<center>
<h3>Veuillez remplir attentivement chacun des champs ci dessous</h3>
</center>

<div style="display :flex; flex-direction:wrap; padding-left: 100px">

<form method="POST" action= "Add.mensurations.php">
    <label for="client">Client : </label><br>
    <select name="Client">
    <?php
        $reponse = $connect->query('SELECT NOM_CLIENT FROM CLIENTS');
        while ($donnees = $reponse->fetch())
        {
        echo '<option value="' . $donnees['NOM_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . '</option>';
        }  
                            
    ?></select><br>
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
    <label for="cuisse">Tour de cuisse (en cm) :</label><br>
    <input name="cuisse" required /><br>
    <label for="mollet">Tour de mollet (en cm) :</label><br>
    <input name="mollet" required /><br>

    <br> <input type="submit" name="enregistrer" value="Enregistrer"/>

</form>


<div style="width:150px; padding-left:250px;">
<table border=1 cellspacing=4 cellpadding=4 class="semainier">
        <tr>
            <th>Date</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['DATE_MENSURATION']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Taille</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TAILLE_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Poids</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['POIDS_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour d'épaules</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_EPAULE_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de poitrine</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_POITRINE_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de bras</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_BRAS_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de poignet</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_POIGNET_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de taille</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_TAILLE_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de hanche</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_HANCHE_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de cuisse</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_CUISSE_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
        <tr>
            <th>Tour de mollets</th>
            <?php
            $reponse = $connect->query('SELECT * FROM MENSURATIONS');
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            <td><?php echo $donnees['TOUR_MOLLET_CLIENT']; ?></td>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
        </tr>
    
</body>
</html>