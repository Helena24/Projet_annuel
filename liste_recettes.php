<!-------------------------------->
<!-- Page qui permet d'afficher -->
<!-- la liste des recette -------->
<!-- dans un tableau ------------->
<!-- avec la possibilité --------->
<!-- de voir les détails --------->
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
<head>
    <!-- Nom de l'onglet -->
    <title>Liste des recettes</title>
</head> 
<body>

<table class="content-table">
        <tr>
            <!-- Entete du tableau -->
            <th>Nom</th>
            <th></th>
        </tr>

<?php
// Requete pour récupérer tous les noms de recettes
$reponse = $connect->query('SELECT * FROM RECETTES');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <tr>
    <!-- Affichage des recettes  -->
    <td><?php echo $donnees['NOM_RECETTE']; ?></td>
    <!-- Lien pour voir les détails de la recette -->
    <td><a href="detail_recette.php?idRecette=<?= $donnees['ID_RECETTE']?>">Détails</a></td>
    </tr>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>






</html>