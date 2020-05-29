<!-- 
    Page qui affiche les données des
    mensurations dans un tableau
    Pour améliorer cette page il faudrait 
    afficher les mensurations en fonction 
    de l'utilsateur qui est connecté --->

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
<head>
<title>Visualisation mensurations</title>
</head> 
<body>

<table border=1 cellspacing=4 cellpadding=4 class="semainier">
        <tr>
            <th>Date</th>
            <?php
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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
            // Recuperer les données des mensurations
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