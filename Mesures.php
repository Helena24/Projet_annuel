<!-------------------------------->
<!-- Page qui affiche d'un cote--->
<!-- le formulaire d'ajout des --->
<!--  mesures et de l'autre------->
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
    <title>Mesures balances</title>
    <link rel="stylesheet" media="screen" href="Nutrition.css">
</head>

    <section class="ajout-mesures-container">
        <div>
            <form method="POST" action= "Add.mesures.php">
                <label for="client">Client : </label><br>
                <select name="id" type="text">
                <?php
                    // requete pour récuperer le nom du client 
                    $reponse = $connect->query('SELECT ID_CLIENT, NOM_CLIENT, PRENOM_CLIENT FROM CLIENTS');
                    while ($donnees = $reponse->fetch())
                    {
                    // affichafe des clients dans le select
                    echo '<option value="' . $donnees['ID_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . " " . $donnees['PRENOM_CLIENT'] . '</option>';
                    }                  
                ?></select><br>

                <!-- champs du formulaire -->
                <input type="date" name="DateB" required /><br>
                <input name="PourcentMG" type="number" placeholder="Pourcentage de masse graisseuse" required /><br>
                <input name="Masse" type="number" placeholder="Masse"required /><br>
                <input name="PourcentH2O" type="number" placeholder="Pourcentage d'eau dans le corps" required/><br>
                <input name="GV"  type="number" placeholder="Graisse viscérale" required ><br>
                <input name="Masseosseuse" type="number" placeholder="Masse osseuse" required /><br>
                <input name="Massemuscu" type="number" placeholder="Masse musculaire" required /><br>
                <input name="Indiceeffort" type="number" placeholder="Indice d'effort physique" required /><br>
                <input name="Agemetabolique" type="number" placeholder="Age Métabolique" required /><br>
                <button type="submit"  name="save"  value="Enregistrer">Enregistrer</button>
            </form>
        </div>

       
        <div id="bloc_2" style="width:500px; overflow-y: scroll; ">
            <table  cellspacing=4 cellpadding=4 class="content-table">
            <tr>
                <th>Date</th>
                    <?php
                    // requete pour sélectionner les dates inversement chronologique
                    $reponse = $connect->query('SELECT DATE_MESURES FROM MESURES ORDER BY DATE_MESURES DESC');
                    // On affiche chaque entrée une à une
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                <td><?php 
                // affichage 
                echo $donnees['DATE_MESURES']; ?></td>
                <?php
                }
                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
            </tr>
            <tr>
                <th>Identifiant Client</th>
                <?php
                $reponse = $connect->query('SELECT * FROM MESURES NATURAL JOIN CLIENTS ORDER BY DATE_MESURES DESC');
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
                <th>Pourcentage masse graisseuse</th>
                <?php
                $reponse = $connect->query('SELECT POURCENTAGE_MASSE_GRAISSEUSE FROM MESURES ORDER BY DATE_MESURES DESC');
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
                $reponse = $connect->query('SELECT MASSE FROM MESURES ORDER BY DATE_MESURES DESC');
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
                $reponse = $connect->query('SELECT POURCENTAGE_EAU_CORPS FROM MESURES ORDER BY DATE_MESURES DESC');
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
                $reponse = $connect->query('SELECT GRAISSE_VISCERALE FROM MESURES ORDER BY DATE_MESURES DESC');
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
                <th>Masse osseuse</th>
                <?php
                $reponse = $connect->query('SELECT MASSE_OSSEUSE FROM MESURES ORDER BY DATE_MESURES DESC');
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
                <th>Masse musculaire</th>
                <?php
                $reponse = $connect->query('SELECT MASSE_MUSCULAIRE FROM MESURES ORDER BY DATE_MESURES DESC');
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
                $reponse = $connect->query('SELECT INDICE_EFFORT FROM MESURES ORDER BY DATE_MESURES DESC');
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
                <th>Age métabolique</th>
                <?php
                $reponse = $connect->query('SELECT AGE_METABOLIQUE FROM MESURES ORDER BY DATE_MESURES DESC');
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
            </table>
        </div>
    </section>   
</body>
</html>