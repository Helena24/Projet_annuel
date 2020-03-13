<!DOCTYPE html>
<html>
<script type="text/javascript" src="semainier.js"></script>

<?php include("entete.php"); 
include("Connect.php");?>

<h2>Semainier nutritionnel</h2>


<br>
<label for="client">Client : </label>
<select name="Client">
<?php
$reponse = $connect->query('SELECT NOM_CLIENT FROM CLIENTS');
while ($donnees = $reponse->fetch())
{
echo '<option value="' . $donnees['NOM_CLIENT'] . '">' . $donnees['NOM_CLIENT'] . '</option>';
}                      
?>
</select>
Date de début : <input name="datedebutSem" type="date" required >
Date de fin : <input name="datefinSem" type="date" required >
<br><br>

<form method="POST" action= "Semainier_nutri_ajout.php" enctype="multipart/form-data">
<body>
    <table border=1 cellspacing=4 cellpadding=4 class="semainier">
        <tr>
            <th>Repas/Jour</th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
        </tr>
        <tr>
            <td>Petit-déjeuner</td>
            <td>Aliment :
            <select name="Aliment" id="Aliment">
            <?php
            $aliments = $connect->query('SELECT NOM_ALIMENT FROM ALIMENTS');
            while ($donnees = $aliments->fetch())
            {
            echo '<option value="' . $donnees['NOM_ALIMENT'] . '">' . $donnees['NOM_ALIMENT'] . '</option>';
            }                      
            ?>
            </select>
            <input name="Enregistrer" type="submit" value="+"/>
            <script>
                var selectElmt = document.getElementById("Aliment");
                var valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value;
                document.write(valeurselectionnee);
            </script>
            <br>
            Recette :
            <select name="Recette">
            <?php
            $recettes = $connect->query('SELECT NOM_RECETTE FROM RECETTES');
            while ($donnees = $recettes->fetch())
            {
            echo '<option value="' . $donnees['NOM_RECETTE'] . '">' . $donnees['NOM_RECETTE'] . '</option>';
            }                      
            ?>
            </select>
            <input type="button" value="Ok">
            <br>
            Smoothie :
            <select name="Smoothie">
            <?php
            $smoothies = $connect->query('SELECT NOM_SMOOTHIE FROM SMOOTHIES');
            while ($donnees = $smoothies->fetch())
            {
            echo '<option value="' . $donnees['NOM_SMOOTHIE'] . '">' . $donnees['NOM_SMOOTHIE'] . '</option>';
            }                      
            ?>
            </select>
            <input type="button" value="Ok"></td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
        </tr>
        <tr>
            <td>Collation</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
        </tr>
        <tr>
            <td>Déjeuner</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
        </tr>
        <tr>
            <td>Collation</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
        </tr>
        <tr>
            <td>Dîner</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
            <td>Croissant</td>
        </tr>
    </table>

</body>

</form>

</html>