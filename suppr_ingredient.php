<!-- 
    Page qui affiche la liste des
    ingrédient avec le bouton supprimer
    Cette page n'est disponible que pour
    l'administrateur et la requete se fait 
    dans la page Delete.ingredient.php --->

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
<title>Ingrédients</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <th>Nom</th>
            <th></th>
        </tr>

<?php
// Recuperationd de tous les ingrédients
$reponse = $connect->query('SELECT * FROM INGREDIENTS');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
        <!-- Affichage des ingrédient --> 
        <td><?php echo $donnees['NOM_INGREDIENT']; ?></td>
        <!-- Bouton pour supprimer -->
        <td><a href="Delete.ingredient.php?idIngredient=<?= $donnees['ID_INGREDIENT']?>">Supprimer</a></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>