<!DOCTYPE html>
<html>

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



</html>