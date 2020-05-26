<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title>Ingrédients</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <th>Nom</th>
            <th></th>
        </tr>

<?php
$reponse = $connect->query('SELECT * FROM INGREDIENTS');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
        <td><?php echo $donnees['NOM_INGREDIENT']; ?></td>
        <td><a href="Delete.ingredient.php?idIngredient=<?= $donnees['ID_INGREDIENT']?>">Supprimer</a></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>