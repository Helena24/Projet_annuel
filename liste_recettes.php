<!DOCTYPE html>
<html>
<?php include("Functions.php"); ?>
<?php include("Connect.php"); ?>
<head>
<title>Liste des recettes</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <th>Nom</th>
            <th></th>
        </tr>

<?php
$reponse = $connect->query('SELECT * FROM RECETTES');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
    <td><?php echo $donnees['NOM_RECETTE']; ?></td>
    <td><a href="detail_recette.php?idRecette=<?= $donnees['ID_RECETTE']?>">Détails</a></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>