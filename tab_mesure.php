<!-- 
    Page qui affiche les données des
    mesures dans un tableau
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
<title>Visualisation mesures</title>
</head> 
<body>

<table border=1 cellspacing=4 cellpadding=4 class="semainier">
        <tr>
            <th>Date</th>
            <?php
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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
            // Recuperer les données des mesures
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