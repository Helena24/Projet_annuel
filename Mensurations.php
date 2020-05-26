<!DOCTYPE html>
<?php include("Functions.php");?>
<?php include("Connect.php");?>
<html>
<head>
    <title>Mensurations</title>
    <link rel="stylesheet" media="screen" href="Nutrition.css">
</head>


<section class="ajout-mesures-container">
    <div>
        <form method="POST" action= "Add.mensurations.php">
            <label for="client">Client : </label><br>
            <select name="Client">
            <?php
                $reponse = $connect->query('SELECT ID_CLIENT, NOM_CLIENT, PRENOM_CLIENT FROM CLIENTS');
                while ($donnees = $reponse->fetch())
                    {
                    echo '<option value="' . $donnees['ID_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . " " . $donnees['PRENOM_CLIENT'] . '</option>';
                    }                  
            ?></select><br>

            <input type='date' name="DateM" required /><br>
            <input name="Taille"  type='number' placeholder='Taille (en cm)' required /><br>
            <input name="Poids"  type='number' placeholder='Poids (en Kg)'required /><br>
            <input name="epaules" required type='number' placeholder="Tour d'épaules (en cm)"><br>
            <input name="poitrine" required type='number' placeholder="Tour de poitrine (en cm)"><br>
            <input name="bras" required type='number' placeholder="Tour de bras (en cm)"/><br>
            <input name="poignet" required type='number' placeholder="Tour de poignet (en cm)"/><br>
            <input name="tourtaille" required type='number' placeholder="Tour de taille (en cm)"/><br>
            <input name="hanche" required type='number' placeholder="Tour de hanche (en cm)"/><br>
            <input name="cuisse" required type='number' placeholder="Tour de cuisse (en cm)"/><br>
            <input name="mollet" required type='number' placeholder="Tour de mollet (en cm)"/><br>
            <button type="submit" name="enregistrer" value="Enregistrer"> Enregistrer </button>
        </form>
    </div>
        
    <div id="bloc_2" style=" overflow-y: scroll;">
        <table border=1 cellspacing=4 cellpadding=4 class="content-table">
                <tr>
                    <th>Date</th>
                    <?php
                    $reponse = $connect->query('SELECT DATE_MENSURATION FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    <th>Identifiant Client</th>
                    <?php
                    $reponse = $connect->query('SELECT * FROM MENSURATIONS NATURAL JOIN CLIENTS ORDER BY DATE_MENSURATION DESC');
                    while ($donnees = $reponse->fetch())
                    {
                        ?>
                        <td><?php echo $donnees['NOM_CLIENT'] . " " . $donnees['PRENOM_CLIENT']; ?></td>
                        <?php
                    }
                    $reponse->closeCursor();
                    ?>
                </tr>    
                <tr>
                    <th>Taille</th>
                    <?php
                    $reponse = $connect->query('SELECT TAILLE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT POIDS_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_EPAULE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_POITRINE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_BRAS_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_POIGNET_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_TAILLE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_HANCHE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_CUISSE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
                    $reponse = $connect->query('SELECT TOUR_MOLLET_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
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
        </table>
    </div>
</section>     
</body>
</html>