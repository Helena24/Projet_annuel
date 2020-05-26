<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title>Liste des smoothies</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <th>Nom</th>
            <th></th>
        </tr>

<?php
$reponse = $connect->query('SELECT * FROM SMOOTHIES');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
    <td><?php echo $donnees['NOM_SMOOTHIE']; ?></td>
    <td><td><a href="detail_smoothie.php?idSmoothie=<?= $donnees['ID_SMOOTHIE']?>">Détails</a></td></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>