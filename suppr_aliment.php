<!-- 
    Page qui affiche la liste des
    aliments avec le bouton supprimer
    Cette page n'est disponible que pour
    l'administrateur et la requete se fait 
    dans la page Delete.aliment.php --->

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
<title>Suppression Aliment</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <!-- Nom entete de tableau -->
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Calories</th>
            <th>Protéines</th>
            <th>Glucides</th>
            <th>Lipides</th>
            <th></th>
        </tr>

<?php
// REcuperation de tous les aliments
$reponse = $connect->query('SELECT * FROM ALIMENTS');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
        <!-- Affichage des aliments -->
        <td><?php echo $donnees['NOM_ALIMENT']; ?></td>
        <td><?php echo $donnees['CATEGORIE_ALIMENT']; ?></td>
        <td><?php echo $donnees['CALORIE_ALIMENT']; ?></td>
        <td><?php echo $donnees['PROTEINE_ALIMENT']; ?></td>
        <td><?php echo $donnees['GLUCIDE_ALIMENT']; ?></td>
        <td><?php echo $donnees['LIPIDE_ALIMENT']; ?></td>
        <!-- Bouton pour supprimer -->
        <td><a href="Delete.aliment.php?idAliment=<?= $donnees['ID_ALIMENT']?>">Supprimer</a>
        </td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>
</html>