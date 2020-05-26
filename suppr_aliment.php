<!DOCTYPE html>
<html>
<?php include("Functions.php");?>
<?php include("Connect.php"); ?>
<head>
<title>Suppression Aliment</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Calories</th>
            <th>Protéines</th>
            <th>Glucides</th>
            <th>Lipides</th>
            <th></th>
        </tr>

<?php
$reponse = $connect->query('SELECT * FROM ALIMENTS');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
        <td><?php echo $donnees['NOM_ALIMENT']; ?></td>
        <td><?php echo $donnees['CATEGORIE_ALIMENT']; ?></td>
        <td><?php echo $donnees['CALORIE_ALIMENT']; ?></td>
        <td><?php echo $donnees['PROTEINE_ALIMENT']; ?></td>
        <td><?php echo $donnees['GLUCIDE_ALIMENT']; ?></td>
        <td><?php echo $donnees['LIPIDE_ALIMENT']; ?></td>
        <td><a href="Delete.aliment.php?idAliment=<?= $donnees['ID_ALIMENT']?>">Supprimer</a>
        </td>
    <td><?php echo $donnees['NOM_ALIMENT']; ?></td>
    <td><?php echo $donnees['CATEGORIE_ALIMENT']; ?></td>
    <td><?php echo $donnees['CALORIE_ALIMENT']; ?></td>
    <td><?php echo $donnees['PROTEINE_ALIMENT']; ?></td>
    <td><?php echo $donnees['GLUCIDE_ALIMENT']; ?></td>
    <td><?php echo $donnees['LIPIDE_ALIMENT']; ?></td>
    <td><form method="post" action="Delete.aliment.php">
   	<input type="text" name="id" value="<?php echo $donnees['ID_ALIMENT'] ?>"/>
   	<input type="submit" name="supprimer" class="delete" value="Supprimer" /></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>