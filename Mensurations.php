<!-------------------------------->
<!-- Page qui affiche d'un cote--->
<!-- le formulaire d'ajout des --->
<!--  mensurations et de l'autre-->
<!-- un tableau avec les données-->
<!-- stockées -------------------->
<!-------------------------------->
<!-- Pour améliorer cette page il serait intéressant d'afficher les données du tableau à droite 
en fonction du client qui a été sélectionné à gauche dans le formulaire -->
<!-------------------------------->

<!DOCTYPE html>
<html>
<?php 
    // Appel de la fonction pour afficher l'entête selon l'utilisateur
    include("Functions.php"); 
?>
<?php 
    // Appel de la page qui permet de connecter à la base de données
    include("Connect.php"); 
?>
<html>
<head>
    <!-- Nom de l'onglet -->
    <title>Mensurations</title>
    <link rel="stylesheet" media="screen" href="Nutrition.css">
</head>


<section class="ajout-mesures-container">
    <div>
        <form method="POST" action= "Add.mensurations.php">
            <!-- choix du client -->
            <label for="client">Client : </label><br>
            <select name="Client">
            <?php
                // Requete pour récuperer le nom des clients dans la base de données et les afficher dans le select
                $reponse = $connect->query('SELECT ID_CLIENT, NOM_CLIENT, PRENOM_CLIENT FROM CLIENTS');
                while ($donnees = $reponse->fetch())
                    {
                    echo '<option value="' . $donnees['ID_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . " " . $donnees['PRENOM_CLIENT'] . '</option>';
                    }                  
            ?></select><br>

            <!-- Champs du formulaire -->
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
        
    <!-- tableau qui affiche les données concernant les mensurations des clients -->
    <div id="bloc_2" style="width:500px; overflow-y: scroll;">
        <table border=1 cellspacing=4 cellpadding=4 class="content-table">
                <tr>
                    <th>Date</th>
                    <?php
                    // Récupération des dates par ordre inversement choronologique
                    $reponse = $connect->query('SELECT DATE_MENSURATION FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage de la date de la mesure
                    echo $donnees['DATE_MENSURATION']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Identifiant Client</th>
                    <?php
                    // Requete pour recuperer le nom du client
                    $reponse = $connect->query('SELECT * FROM MENSURATIONS NATURAL JOIN CLIENTS ORDER BY DATE_MENSURATION DESC');
                    while ($donnees = $reponse->fetch())
                    {
                        ?>
                        <td><?php 
                        // Affichage du nom du client
                        echo $donnees['NOM_CLIENT'] . " " . $donnees['PRENOM_CLIENT']; 
                        ?></td>
                        <?php
                    }
                    $reponse->closeCursor();
                    ?>
                </tr>    
                <tr>
                    <th>Taille</th>
                    <?php
                    // Requete pour récuperer la taille
                    $reponse = $connect->query('SELECT TAILLE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage de la taille
                    echo $donnees['TAILLE_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Poids</th>
                    <?php
                    // Requete pour récupérer le poids du client
                    $reponse = $connect->query('SELECT POIDS_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // affichage du poids
                    echo $donnees['POIDS_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour d'épaules</th>
                    <?php
                    // récupérer le tour d'épaules
                    $reponse = $connect->query('SELECT TOUR_EPAULE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour d'épaules
                    echo $donnees['TOUR_EPAULE_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de poitrine</th>
                    <?php
                    // Requete pour afficher de tour de poitrine
                    $reponse = $connect->query('SELECT TOUR_POITRINE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de poitrine
                    echo $donnees['TOUR_POITRINE_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de bras</th>
                    <?php
                    // Requete pour récupérer le tour du bras
                    $reponse = $connect->query('SELECT TOUR_BRAS_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de bras
                    echo $donnees['TOUR_BRAS_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de poignet</th>
                    <?php
                    // Requete pour récupérer le tour de poignet
                    $reponse = $connect->query('SELECT TOUR_POIGNET_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de poignet
                    echo $donnees['TOUR_POIGNET_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de taille</th>
                    <?php
                    // Requete pour récupérer le tour de taille
                    $reponse = $connect->query('SELECT TOUR_TAILLE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de taille
                    echo $donnees['TOUR_TAILLE_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de hanche</th>
                    <?php
                    // Requete pour récupérer le tour de hanche
                    $reponse = $connect->query('SELECT TOUR_HANCHE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de hanche
                    echo $donnees['TOUR_HANCHE_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de cuisse</th>
                    <?php
                    // Requete pour afficher le tour de cuisse
                    $reponse = $connect->query('SELECT TOUR_CUISSE_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de cuisse
                    echo $donnees['TOUR_CUISSE_CLIENT']; 
                    ?></td>
                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
                </tr>
                <tr>
                    <th>Tour de mollets</th>
                    <?php
                    // REquete pour récupérer le tour de mollet
                    $reponse = $connect->query('SELECT TOUR_MOLLET_CLIENT FROM MENSURATIONS ORDER BY DATE_MENSURATION DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <td><?php 
                    // Affichage du tour de mollet
                    echo $donnees['TOUR_MOLLET_CLIENT']; 
                    ?></td>
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